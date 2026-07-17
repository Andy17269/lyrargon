<?php
if (!defined('ABSPATH')) exit;

function argon_emoji_manager_page() {
    if (!current_user_can('edit_theme_options')) {
        wp_die(__('您没有权限访问此页面。'));
    }

    $upload_dir = wp_upload_dir();
    $base_dir = $upload_dir['basedir'] . '/wrgon-emojis';
    $base_url = $upload_dir['baseurl'] . '/wrgon-emojis';

    if (!file_exists($base_dir)) {
        wp_mkdir_p($base_dir);
    }

    $messages = array();

    // 处理删除操作
    if (isset($_POST['delete_emoji_pack']) && isset($_POST['emoji_pack_index'])) {
        check_admin_referer('argon_delete_emoji', 'argon_emoji_nonce');
        $custom_emojis = get_option('argon_custom_emojis', array());
        $index = intval($_POST['emoji_pack_index']);
        if (isset($custom_emojis[$index])) {
            $folder_name = $custom_emojis[$index]['folder'];
            
            // 删除物理文件
            require_once(ABSPATH . 'wp-admin/includes/file.php');
            WP_Filesystem();
            global $wp_filesystem;
            $pack_dir = $base_dir . '/' . $folder_name;
            if ($wp_filesystem->exists($pack_dir)) {
                $wp_filesystem->delete($pack_dir, true);
            }
            
            // 从配置中删除
            unset($custom_emojis[$index]);
            $custom_emojis = array_values($custom_emojis);
            update_option('argon_custom_emojis', $custom_emojis);
            $messages[] = '<div class="updated"><p>表情包已删除。</p></div>';
        }
    }

    // 处理上传操作
    if (isset($_POST['upload_emoji_pack']) && isset($_FILES['emoji_zip'])) {
        check_admin_referer('argon_upload_emoji', 'argon_emoji_nonce');
        
        $file = $_FILES['emoji_zip'];
        if ($file['error'] === UPLOAD_ERR_OK) {
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            if (strtolower($ext) !== 'zip') {
                $messages[] = '<div class="error"><p>上传失败：仅支持 .zip 格式的表情包！</p></div>';
            } else {
                require_once(ABSPATH . 'wp-admin/includes/file.php');
                WP_Filesystem();
                global $wp_filesystem;
                
                $upload_file_path = $file['tmp_name'];
                
                // 解压到一个临时文件夹
                $temp_dir = $base_dir . '/temp_' . time() . '_' . wp_generate_password(6, false);
                $unzip_result = unzip_file($upload_file_path, $temp_dir);
                
                if (is_wp_error($unzip_result)) {
                    $messages[] = '<div class="error"><p>解压失败：' . $unzip_result->get_error_message() . '</p></div>';
                } else {
                    // 检查 config.json
                    $config_path = $temp_dir . '/config.json';
                    // 为了兼容可能被打包进一层文件夹的情况，查找一层
                    if (!$wp_filesystem->exists($config_path)) {
                        $files = $wp_filesystem->dirlist($temp_dir);
                        foreach ($files as $name => $details) {
                            if ($details['type'] == 'd') {
                                if ($wp_filesystem->exists($temp_dir . '/' . $name . '/config.json')) {
                                    $temp_dir = $temp_dir . '/' . $name;
                                    $config_path = $temp_dir . '/config.json';
                                    break;
                                }
                            }
                        }
                    }

                    if (!$wp_filesystem->exists($config_path)) {
                        $messages[] = '<div class="error"><p>包内未找到 config.json，请确认表情包是否正确！</p></div>';
                    } else {
                        $config_content = $wp_filesystem->get_contents($config_path);
                        $config = json_decode($config_content, true);
                        if (!$config || !isset($config['groupname']) || !isset($config['list'])) {
                            $messages[] = '<div class="error"><p>config.json 格式错误！</p></div>';
                        } else {
                            // 确定最终文件夹名
                            if (isset($config['foldername']) && !empty($config['foldername'])) {
                                $folder_name = sanitize_title($config['foldername']);
                                // 防止同名文件夹冲突
                                if ($wp_filesystem->exists($base_dir . '/' . $folder_name)) {
                                    $folder_name .= '_' . wp_generate_password(4, false);
                                }
                            } else {
                                $folder_name = sanitize_title($config['groupname']) . '_' . wp_generate_password(4, false);
                            }
                            
                            $final_dir = $base_dir . '/' . $folder_name;
                            
                            // 移动文件
                            $wp_filesystem->move($temp_dir, $final_dir);
                            
                            // 修正 src 路径
                            $pack_url = $base_url . '/' . $folder_name;
                            foreach ($config['list'] as &$item) {
                                if ($item['type'] === 'sticker' && isset($item['src']) && !preg_match('/^http/', $item['src'])) {
                                    $item['src'] = $pack_url . '/' . ltrim($item['src'], '/');
                                }
                            }
                            
                            // 存入数据库
                            $config['folder'] = $folder_name;
                            $custom_emojis = get_option('argon_custom_emojis', array());
                            $custom_emojis[] = $config;
                            update_option('argon_custom_emojis', $custom_emojis);
                            
                            $messages[] = '<div class="updated"><p>表情包【' . esc_html($config['groupname']) . '】已安装。</p></div>';
                        }
                    }
                }
                // 清理可能遗留的临时目录
                $temp_base = $base_dir . '/temp_';
                if ($wp_filesystem->exists($temp_dir) && strpos($temp_dir, $temp_base) !== false) {
                    $wp_filesystem->delete($temp_dir, true);
                }
            }
        } else {
            $messages[] = '<div class="error"><p>上传出错，错误代码' . $file['error'] . '</p></div>';
        }
    }

    $custom_emojis = get_option('argon_custom_emojis', array());
    ?>
    <style>
        .argon-emojis-page {
            margin-top: 24px;
            background: linear-gradient(180deg, #ffffff 0%, #fbfcfe 100%);
            border: 1px solid #dbe3ea;
            border-radius: 18px;
            box-shadow: 0 12px 40px rgba(15, 23, 42, 0.06);
            padding: 24px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }
        .argon-emojis-header {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 18px;
        }
        .argon-emojis-title {
            margin: 0;
            color: #0f172a;
            font-size: 28px;
            font-weight: 300;
            letter-spacing: -0.03em;
        }
        .argon-emojis-title a {
            margin-left: 12px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: #64748b;
            font-size: 13px;
            font-weight: 500;
            background: #f1f5f9;
            padding: 4px 10px;
            border-radius: 999px;
            border: 1px solid #e2e8f0;
            text-decoration: none;
        }
        .argon-emojis-title a:hover {
            color: #0f172a;
        }
        .argon-emojis-subtitle {
            margin: 6px 0 0;
            color: #64748b;
            font-size: 13px;
            line-height: 1.7;
        }
        .argon-emojis-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.55fr) minmax(280px, 0.95fr);
            gap: 18px;
            align-items: start;
        }
        .argon-emojis-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            box-shadow: 0 1px 2px rgba(15, 23, 42, 0.04);
            overflow: hidden;
        }
        .argon-emojis-card-header {
            padding: 16px 18px 14px;
            border-bottom: 1px solid #e2e8f0;
        }
        .argon-emojis-card-header h2 {
            margin: 0;
            font-size: 18px;
            font-weight: 600;
            color: #0f172a;
        }
        .argon-emojis-card-header p {
            margin: 8px 0 0;
            color: #64748b;
            font-size: 13px;
            line-height: 1.7;
        }
        .argon-emojis-notices {
            margin-bottom: 18px;
            display: grid;
            gap: 10px;
        }
        .argon-emojis-notice {
            border-radius: 14px;
            padding: 12px 14px;
            border: 1px solid;
            font-size: 13px;
            line-height: 1.7;
            background: #fff;
        }
        .argon-emojis-notice.updated {
            border-color: #bbf7d0;
            background: #f0fdf4;
            color: #166534;
        }
        .argon-emojis-notice.error {
            border-color: #fecaca;
            background: #fef2f2;
            color: #991b1b;
        }
        .argon-emojis-table-wrap {
            overflow-x: auto;
        }
        .argon-emojis-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }
        .argon-emojis-table thead th {
            text-align: left;
            padding: 14px 18px;
            color: #475569;
            font-size: 13px;
            font-weight: 600;
            background: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
        }
        .argon-emojis-table tbody td {
            padding: 16px 18px;
            border-bottom: 1px solid #eef2f7;
            color: #0f172a;
            vertical-align: top;
            font-size: 14px;
        }
        .argon-emojis-table tbody tr:last-child td {
            border-bottom: 0;
        }
        .argon-emojis-empty {
            text-align: center;
            color: #64748b;
            padding: 22px 18px;
        }
        .argon-emojis-delete-form {
            margin: 0;
        }
        .argon-emojis-delete-form .button-link-delete {
            padding: 0;
            color: #dc2626 !important;
            text-decoration: none;
            font-weight: 600;
        }
        .argon-emojis-upload {
            padding: 18px;
        }
        .argon-emojis-upload input[type="file"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            background: #fff;
        }
        .argon-emojis-upload .button-primary {
            background: linear-gradient(180deg, #2f9af3 0%, #1686ea 100%);
            border-color: #1686ea;
            box-shadow: 0 10px 24px rgba(33, 150, 243, 0.16);
        }
        .argon-emojis-upload .button-primary:hover,
        .argon-emojis-upload .button-primary:focus {
            background: linear-gradient(180deg, #3aa2fb 0%, #1686ea 100%);
            border-color: #1686ea;
        }
        @media (max-width: 960px) {
            .argon-emojis-page {
                padding: 18px;
            }
            .argon-emojis-grid {
                grid-template-columns: 1fr;
            }
            .argon-emojis-header {
                align-items: flex-start;
            }
        }
    </style>

    <div class="wrap argon-emojis-page">
        <div class="argon-emojis-header">
            <div>
                <h1 class="argon-emojis-title">
                    Lyrargon 表情包管理
                    <a href="https://wrgon.wenlei.top/stickers" target="_blank" rel="noopener noreferrer">获取表情包 →</a>
                </h1>
                <p class="argon-emojis-subtitle">安装、查看和删除自定义表情包，整体视觉与主题设置页保持一致。</p>
            </div>
        </div>

        <?php if (!empty($messages)): ?>
            <div class="argon-emojis-notices">
                <?php foreach ($messages as $msg) {
                    $notice_class = (strpos($msg, 'updated') !== false) ? 'updated' : 'error';
                    echo '<div class="argon-emojis-notice ' . esc_attr($notice_class) . '">' . wp_kses_post($msg) . '</div>';
                } ?>
            </div>
        <?php endif; ?>

        <div class="argon-emojis-grid">
            <section class="argon-emojis-card">
                <div class="argon-emojis-card-header">
                    <h2>已安装的表情包</h2>
                    <p>这里列出所有已安装的自定义表情包，并支持直接删除。</p>
                </div>
                <div class="argon-emojis-table-wrap">
                    <table class="argon-emojis-table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 25%;">名称</th>
                                <th scope="col" style="width: 40%;">描述</th>
                                <th scope="col" style="width: 15%;">数量</th>
                                <th scope="col" style="width: 20%;">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($custom_emojis)): ?>
                                <tr><td colspan="4" class="argon-emojis-empty">目前未安装自定义表情包。</td></tr>
                            <?php else: ?>
                                <?php foreach ($custom_emojis as $index => $pack): ?>
                                    <tr>
                                        <td><strong><?php echo esc_html($pack['groupname']); ?></strong></td>
                                        <td><?php echo esc_html(isset($pack['description']) ? $pack['description'] : '-'); ?></td>
                                        <td><?php echo count($pack['list']); ?> 个</td>
                                        <td>
                                            <form class="argon-emojis-delete-form" method="post" action="" onsubmit="return confirm('确定要删除此表情包及相关文件吗？');">
                                                <?php wp_nonce_field('argon_delete_emoji', 'argon_emoji_nonce'); ?>
                                                <input type="hidden" name="emoji_pack_index" value="<?php echo $index; ?>" />
                                                <button type="submit" name="delete_emoji_pack" class="button button-link-delete">删除</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="argon-emojis-card">
                <div class="argon-emojis-card-header">
                    <h2>上传安装新表情包</h2>
                    <p>支持 ZIP 格式压缩包，上传后会自动解压并写入配置。</p>
                </div>
                <form class="argon-emojis-upload" method="post" action="" enctype="multipart/form-data">
                    <?php wp_nonce_field('argon_upload_emoji', 'argon_emoji_nonce'); ?>
                    <p>
                        <input type="file" name="emoji_zip" accept=".zip" required />
                    </p>
                    <p style="margin: 14px 0 0; display: flex; justify-content: flex-end;">
                        <button type="submit" name="upload_emoji_pack" class="button button-primary">安装</button>
                    </p>
                </form>
            </section>
        </div>
    </div>
    <?php
}
?>
