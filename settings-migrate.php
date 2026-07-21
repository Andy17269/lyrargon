<?php
if (!defined('ABSPATH')) exit;

function lyrargon_migration_page() {
	if (!current_user_can('edit_theme_options')) {
		wp_die(__('您没有权限访问此页面。'));
	}

	$active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'db_migrate';
	$messages = array();

	// ====== JSON 导入处理 ======
	if (isset($_POST['import_argon_json']) && check_admin_referer('lyrargon_import_json', 'lyrargon_import_nonce')) {
		if (isset($_FILES['argon_json_file']) && $_FILES['argon_json_file']['error'] === UPLOAD_ERR_OK) {
			$json_content = file_get_contents($_FILES['argon_json_file']['tmp_name']);
			$data = json_decode($json_content, true);
			if ($data === null) {
				$messages[] = array('type' => 'error', 'text' => __('JSON 文件解析失败，请检查文件格式。', 'lyrargon'));
			} else {
				$import_count = 0;
				$mapped_count = 0;
				foreach ($data as $key => $value) {
					$mapped_key = preg_replace('/^argon_/', 'lyrargon_', $key);
					if ($mapped_key !== $key) {
						if (get_option($mapped_key) === false) {
							update_option($mapped_key, $value);
							$import_count++;
						}
						$mapped_count++;
					}
				}
				$messages[] = array(
					'type' => 'success',
					'text' => sprintf(
						__('成功！共处理 %d 项设置，其中 %d 项已导入到 Lyrargon（未覆盖已存在的设置）。', 'lyrargon'),
						$mapped_count, $import_count
					)
				);
			}
		} else {
			$upload_error = $_FILES['argon_json_file']['error'] ?? -1;
			if ($upload_error === UPLOAD_ERR_NO_FILE) {
				$messages[] = array('type' => 'error', 'text' => __('请选择一个 JSON 文件上传。', 'lyrargon'));
			} else {
				$messages[] = array('type' => 'error', 'text' => __('文件上传失败，请重试。', 'lyrargon'));
			}
		}
	}

	// ====== 手动触发 DB 迁移 ======
	if (isset($_POST['run_db_migration']) && check_admin_referer('lyrargon_run_migration', 'lyrargon_migrate_nonce')) {
		delete_option('lyrargon_db_version');
		lyrargon_migrate_old_options();
		$messages[] = array(
			'type' => 'success',
			'text' => __('数据库迁移已完成！所有可用的 argon_* 选项已复制到 lyrargon_*。', 'lyrargon')
		);
	}

	// ====== 数据库状态查询 ======
	$db_migrated = get_option('lyrargon_db_version');
	global $wpdb;
	$old_options_count = (int) $wpdb->get_var(
		"SELECT COUNT(*) FROM {$wpdb->options} WHERE option_name LIKE 'argon\_%'"
	);
	$new_options_count = (int) $wpdb->get_var(
		"SELECT COUNT(*) FROM {$wpdb->options} WHERE option_name LIKE 'lyrargon\_%'"
	);

	?>
	<div class="lyrargon-migrate-page">
		<div class="lyrargon-migrate-header">
			<h1 class="lyrargon-migrate-title"><?php _e('从 Argon 迁移到 Lyrargon', 'lyrargon'); ?></h1>
			<p class="lyrargon-migrate-subtitle"><?php _e('如果您之前使用的是 Argon 主题，可以通过此页面将旧设置迁移到 Lyrargon。', 'lyrargon'); ?></p>
		</div>

		<?php if (!empty($messages)): ?>
			<div class="lyrargon-migrate-notices">
				<?php foreach ($messages as $msg): ?>
					<div class="lyrargon-migrate-notice <?php echo $msg['type'] === 'success' ? 'updated' : 'error'; ?>">
						<?php echo esc_html($msg['text']); ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<div class="lyrargon-migrate-tabs">
			<a href="?page=lyrargon_migration&tab=db_migrate" class="lyrargon-migrate-tab <?php echo $active_tab == 'db_migrate' ? 'active' : ''; ?>">
				<?php _e('① 数据库迁移', 'lyrargon'); ?>
			</a>
			<a href="?page=lyrargon_migration&tab=json_import" class="lyrargon-migrate-tab <?php echo $active_tab == 'json_import' ? 'active' : ''; ?>">
				<?php _e('② JSON 导入', 'lyrargon'); ?>
			</a>
			<a href="?page=lyrargon_migration&tab=report" class="lyrargon-migrate-tab <?php echo $active_tab == 'report' ? 'active' : ''; ?>">
				<?php _e('③ 迁移报告', 'lyrargon'); ?>
			</a>
		</div>

		<?php if ($active_tab == 'db_migrate'): ?>
		<section class="lyrargon-migrate-card">
			<div class="lyrargon-migrate-card-header">
				<h2><?php _e('数据库选项迁移', 'lyrargon'); ?></h2>
			</div>
			<div class="lyrargon-migrate-card-body">
				<?php if (!empty($db_migrated)): ?>
					<div class="lyrargon-migrate-notice success">
						<?php _e('✅ 数据库迁移已完成（版本：' . esc_html($db_migrated) . '）。', 'lyrargon'); ?>
					</div>
				<?php endif; ?>

				<table class="lyrargon-migrate-table">
					<thead>
						<tr>
							<th><?php _e('选项', 'lyrargon'); ?></th>
							<th><?php _e('数量', 'lyrargon'); ?></th>
							<th><?php _e('状态', 'lyrargon'); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><code>argon_*</code> <?php _e('（旧版 Argon 选项）', 'lyrargon'); ?></td>
							<td><?php echo $old_options_count; ?></td>
							<td>
								<?php if ($old_options_count > 0): ?>
									<span class="lyrargon-status-badge warning"><?php _e('待迁移', 'lyrargon'); ?></span>
								<?php else: ?>
									<span class="lyrargon-status-badge success"><?php _e('已清理', 'lyrargon'); ?></span>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td><code>lyrargon_*</code> <?php _e('（新版 Lyrargon 选项）', 'lyrargon'); ?></td>
							<td><?php echo $new_options_count; ?></td>
							<td>
								<span class="lyrargon-status-badge success"><?php _e('就绪', 'lyrargon'); ?></span>
							</td>
						</tr>
					</tbody>
				</table>

				<p class="lyrargon-migrate-desc"><?php _e('主题在加载时会自动将旧版 argon_* 数据库选项复制到 lyrargon_*。如果上方显示有残留旧选项，可以手动触发迁移：', 'lyrargon'); ?></p>

				<form method="post" action="">
					<?php wp_nonce_field('lyrargon_run_migration', 'lyrargon_migrate_nonce'); ?>
					<p class="lyrargon-migrate-actions">
						<button type="submit" name="run_db_migration" class="lyrargon-btn lyrargon-btn-primary" <?php echo ($old_options_count == 0) ? 'disabled' : ''; ?>>
							<?php _e('手动执行数据库迁移', 'lyrargon'); ?>
						</button>
						<?php if ($old_options_count == 0): ?>
							<span class="lyrargon-migrate-desc" style="display: inline;"><?php _e('（无需迁移）', 'lyrargon'); ?></span>
						<?php endif; ?>
					</p>
				</form>
			</div>
		</section>
		<?php endif; ?>

		<?php if ($active_tab == 'json_import'): ?>
		<section class="lyrargon-migrate-card">
			<div class="lyrargon-migrate-card-header">
				<h2><?php _e('从 Argon 备份 JSON 导入', 'lyrargon'); ?></h2>
			</div>
			<div class="lyrargon-migrate-card-body">
				<p class="lyrargon-migrate-desc"><?php _e('如果您保留了 Argon 主题中导出的设置备份（JSON 文件），可以在这里上传。系统会自动将 argon_ 前缀映射为 lyrargon_。', 'lyrargon'); ?></p>

				<div class="lyrargon-migrate-notice info">
					<?php _e('仅导入尚未存在的设置项，不会覆盖您当前在 Lyrargon 中已配置的值。', 'lyrargon'); ?>
				</div>

				<form method="post" action="" enctype="multipart/form-data" class="lyrargon-migrate-upload">
					<?php wp_nonce_field('lyrargon_import_json', 'lyrargon_import_nonce'); ?>
					<div class="lyrargon-migrate-field">
						<input type="file" name="argon_json_file" id="argon_json_file" accept=".json" />
					</div>
					<p class="lyrargon-migrate-actions">
						<button type="submit" name="import_argon_json" class="lyrargon-btn lyrargon-btn-primary">
							<?php _e('导入并映射到 Lyrargon', 'lyrargon'); ?>
						</button>
					</p>
				</form>

				<hr class="lyrargon-migrate-divider" />

				<h3 class="lyrargon-migrate-heading"><?php _e('或者直接粘贴 JSON', 'lyrargon'); ?></h3>
				<p class="lyrargon-migrate-desc"><?php _e('您也可以将导出的 JSON 文本粘贴到下方，在「Lyrargon 主题选项」页面中使用「导入设置」功能：', 'lyrargon'); ?></p>
				<ol class="lyrargon-migrate-steps">
					<li><?php _e('将此 JSON 完整复制', 'lyrargon'); ?></li>
					<li><?php _e('前往「Lyrargon 主题选项」页面', 'lyrargon'); ?></li>
					<li><?php _e('点击「导入设置」，粘贴 JSON', 'lyrargon'); ?></li>
					<li><?php _e('点击「保存更改」', 'lyrargon'); ?></li>
				</ol>
				<p class="lyrargon-migrate-actions">
					<a href="?page=lyrargon_settings" class="lyrargon-btn lyrargon-btn-secondary">
						<?php _e('前往主题选项页面', 'lyrargon'); ?>
					</a>
				</p>
			</div>
		</section>
		<?php endif; ?>

		<?php if ($active_tab == 'report'): ?>
		<section class="lyrargon-migrate-card">
			<div class="lyrargon-migrate-card-header">
				<h2><?php _e('迁移结果报告', 'lyrargon'); ?></h2>
			</div>
			<div class="lyrargon-migrate-card-body">
				<?php
				$old_rows = $wpdb->get_results(
					"SELECT option_name, option_value FROM {$wpdb->options}
					 WHERE option_name LIKE 'argon\_%'"
				);
				$new_rows = $wpdb->get_results(
					"SELECT option_name, option_value FROM {$wpdb->options}
					 WHERE option_name LIKE 'lyrargon\_%'"
				);
				?>

				<h3 class="lyrargon-migrate-heading"><?php _e('概览', 'lyrargon'); ?></h3>
				<table class="lyrargon-migrate-table">
					<thead>
						<tr>
							<th><?php _e('项目', 'lyrargon'); ?></th>
							<th><?php _e('数值', 'lyrargon'); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php _e('旧版 argon_* 选项（残留）', 'lyrargon'); ?></td>
							<td><?php echo count($old_rows); ?></td>
						</tr>
						<tr>
							<td><?php _e('新版 lyrargon_* 选项', 'lyrargon'); ?></td>
							<td><?php echo count($new_rows); ?></td>
						</tr>
						<tr>
							<td><?php _e('迁移版本标记', 'lyrargon'); ?></td>
							<td>
								<?php
								$ver = get_option('lyrargon_db_version');
								echo $ver ? esc_html($ver) : '<span class="lyrargon-status-badge warning">' . __('未标记', 'lyrargon') . '</span>';
								?>
							</td>
						</tr>
					</tbody>
				</table>

				<?php if (!empty($old_rows)): ?>
					<h3 class="lyrargon-migrate-heading"><?php _e('残留的 argon_* 选项列表', 'lyrargon'); ?></h3>
					<p class="lyrargon-migrate-desc"><?php _e('以下旧选项仍存在于数据库中。如您确认不再需要，可手动删除。', 'lyrargon'); ?></p>
					<div class="lyrargon-migrate-scroll">
						<table class="lyrargon-migrate-table">
							<thead>
								<tr><th><?php _e('选项名', 'lyrargon'); ?></th></tr>
							</thead>
							<tbody>
								<?php foreach ($old_rows as $row): ?>
									<tr><td><code><?php echo esc_html($row->option_name); ?></code></td></tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				<?php endif; ?>

				<?php if (!empty($new_rows)): ?>
					<h3 class="lyrargon-migrate-heading"><?php _e('当前 lyrargon_* 选项预览', 'lyrargon'); ?></h3>
					<div class="lyrargon-migrate-scroll">
						<table class="lyrargon-migrate-table">
							<thead>
								<tr>
									<th><?php _e('选项名', 'lyrargon'); ?></th>
									<th><?php _e('值', 'lyrargon'); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach (array_slice($new_rows, 0, 50) as $row): ?>
									<tr>
										<td><code><?php echo esc_html($row->option_name); ?></code></td>
										<td><code style="font-size: 11px; word-break: break-all;"><?php echo esc_html(substr($row->option_value, 0, 120)); ?></code></td>
									</tr>
								<?php endforeach; ?>
								<?php if (count($new_rows) > 50): ?>
									<tr><td colspan="2"><em><?php _e('… 仅显示前 50 项', 'lyrargon'); ?></em></td></tr>
								<?php endif; ?>
							</tbody>
						</table>
					</div>
				<?php endif; ?>
			</div>
		</section>
		<?php endif; ?>
	</div>

	<style>
		/* === 页面主体 === */
		.lyrargon-migrate-page {
			margin-top: 24px;
			background: linear-gradient(180deg, #ffffff 0%, #fbfcfe 100%);
			border: 1px solid #dbe3ea;
			border-radius: 18px;
			box-shadow: 0 12px 40px rgba(15, 23, 42, 0.06);
			padding: 24px;
			font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
		}

		/* === 头部 === */
		.lyrargon-migrate-header {
			margin-bottom: 18px;
		}
		.lyrargon-migrate-title {
			margin: 0;
			color: #0f172a;
			font-size: 28px;
			font-weight: 300;
			letter-spacing: -0.03em;
		}
		.lyrargon-migrate-subtitle {
			margin: 6px 0 0;
			color: #64748b;
			font-size: 13px;
			line-height: 1.7;
		}

		/* === Tab 切换 === */
		.lyrargon-migrate-tabs {
			display: flex;
			gap: 4px;
			margin-bottom: 18px;
			background: #f1f5f9;
			border-radius: 14px;
			padding: 4px;
		}
		.lyrargon-migrate-tab {
			flex: 1;
			text-align: center;
			padding: 10px 16px;
			border-radius: 12px;
			font-size: 13px;
			font-weight: 600;
			color: #64748b;
			text-decoration: none;
			transition: all 0.2s;
		}
		.lyrargon-migrate-tab:hover {
			color: #0f172a;
			background: rgba(255,255,255,0.6);
		}
		.lyrargon-migrate-tab.active {
			background: #fff;
			color: #0f172a;
			box-shadow: 0 1px 3px rgba(15,23,42,0.08);
		}

		/* === 通知消息 === */
		.lyrargon-migrate-notices {
			margin-bottom: 18px;
			display: grid;
			gap: 10px;
		}
		.lyrargon-migrate-notice {
			border-radius: 14px;
			padding: 12px 14px;
			border: 1px solid;
			font-size: 13px;
			line-height: 1.7;
			background: #fff;
		}
		.lyrargon-migrate-notice.updated,
		.lyrargon-migrate-notice.success {
			border-color: #bbf7d0;
			background: #f0fdf4;
			color: #166534;
		}
		.lyrargon-migrate-notice.error {
			border-color: #fecaca;
			background: #fef2f2;
			color: #991b1b;
		}
		.lyrargon-migrate-notice.info {
			border-color: #bfdbfe;
			background: #eff6ff;
			color: #1e40af;
		}

		/* === 卡片 === */
		.lyrargon-migrate-card {
			background: #fff;
			border: 1px solid #e2e8f0;
			border-radius: 16px;
			box-shadow: 0 1px 2px rgba(15, 23, 42, 0.04);
			overflow: hidden;
		}
		.lyrargon-migrate-card-header {
			padding: 16px 18px 14px;
			border-bottom: 1px solid #e2e8f0;
		}
		.lyrargon-migrate-card-header h2 {
			margin: 0;
			font-size: 18px;
			font-weight: 600;
			color: #0f172a;
		}
		.lyrargon-migrate-card-body {
			padding: 18px;
		}

		/* === 表格 === */
		.lyrargon-migrate-table {
			width: 100%;
			border-collapse: separate;
			border-spacing: 0;
			margin-bottom: 14px;
		}
		.lyrargon-migrate-table thead th {
			text-align: left;
			padding: 14px 18px;
			color: #475569;
			font-size: 13px;
			font-weight: 600;
			background: #f8fafc;
			border-bottom: 1px solid #e2e8f0;
		}
		.lyrargon-migrate-table tbody td {
			padding: 14px 18px;
			border-bottom: 1px solid #eef2f7;
			color: #0f172a;
			font-size: 14px;
		}
		.lyrargon-migrate-table tbody tr:last-child td {
			border-bottom: 0;
		}
		.lyrargon-migrate-scroll {
			max-height: 300px;
			overflow-y: auto;
			border: 1px solid #e2e8f0;
			border-radius: 12px;
		}

		/* === 状态徽章 === */
		.lyrargon-status-badge {
			display: inline-block;
			padding: 2px 10px;
			border-radius: 999px;
			font-size: 12px;
			font-weight: 600;
		}
		.lyrargon-status-badge.success {
			background: #f0fdf4;
			color: #166534;
		}
		.lyrargon-status-badge.warning {
			background: #fffbeb;
			color: #92400e;
		}

		/* === 按钮 === */
		.lyrargon-btn {
			display: inline-flex;
			align-items: center;
			gap: 6px;
			padding: 10px 18px;
			border-radius: 12px;
			font-size: 13px;
			font-weight: 600;
			border: 1px solid transparent;
			cursor: pointer;
			text-decoration: none;
			transition: all 0.2s;
		}
		.lyrargon-btn-primary {
			background: linear-gradient(180deg, #2f9af3 0%, #1686ea 100%);
			border-color: #1686ea;
			color: #fff;
			box-shadow: 0 10px 24px rgba(33, 150, 243, 0.16);
		}
		.lyrargon-btn-primary:hover {
			background: linear-gradient(180deg, #3aa2fb 0%, #1686ea 100%);
		}
		.lyrargon-btn-primary:disabled {
			opacity: 0.5;
			cursor: not-allowed;
			box-shadow: none;
		}
		.lyrargon-btn-secondary {
			background: #fff;
			border-color: #cbd5e1;
			color: #0f172a;
		}
		.lyrargon-btn-secondary:hover {
			background: #f8fafc;
			border-color: #94a3b8;
		}
		.lyrargon-migrate-actions {
			margin: 14px 0 0;
			display: flex;
			align-items: center;
			gap: 12px;
		}

		/* === 其他 === */
		.lyrargon-migrate-desc {
			color: #64748b;
			font-size: 13px;
			line-height: 1.7;
			margin: 8px 0;
		}
		.lyrargon-migrate-heading {
			margin: 1.5em 0 0.5em;
			font-size: 15px;
			font-weight: 600;
			color: #0f172a;
		}
		.lyrargon-migrate-divider {
			margin: 22px 0;
			border: none;
			border-top: 1px solid #e2e8f0;
		}
		.lyrargon-migrate-upload {
			margin-top: 16px;
		}
		.lyrargon-migrate-upload input[type="file"] {
			width: 100%;
			padding: 10px 12px;
			border: 1px solid #cbd5e1;
			border-radius: 12px;
			background: #fff;
		}
		.lyrargon-migrate-field {
			margin-bottom: 12px;
		}
		.lyrargon-migrate-steps {
			padding-left: 20px;
			color: #475569;
			font-size: 13px;
			line-height: 2;
		}

		@media (max-width: 960px) {
			.lyrargon-migrate-page {
				padding: 18px;
			}
		}
	</style>
	<?php
}
