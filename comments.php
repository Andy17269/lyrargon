<?php
	if ( post_password_required() ) {
		return;
	}
?>

<div id="comments" class="comments-area card shadow-sm<?php if (get_option('lyrargon_comment_avatar_vcenter') == 'true'){echo " comment-avatar-vertical-center";} ?>">
	<div class="card-body">
		<?php if ( have_comments() ){?>
			<h2 class="comments-title">
				<i class="fa fa-comments"></i>
				<?php _e('评论', 'lyrargon');?>
			</h2>
			<ol class="comment-list">
				<?php
					get_option("lyrargon_comment_pagination_type", "feed") == "feed" ? 
					wp_list_comments(
						array(
							'type'      => 'comment',
							'callback'  => 'lyrargon_comment_format'
						),
						argon_get_comments()
					) :	
					wp_list_comments(
						array(
							'type'      => 'comment',
							'callback'  => 'lyrargon_comment_format'
						)
					);
				?>
			</ol>
			<?php
				if (get_option("lyrargon_comment_pagination_type") == "page"){
					if (get_comment_pages_count() > 1){
						echo get_argon_formatted_comment_paginate_links_for_all_platforms();
					}
				}else{
					$prevPageUrl = get_argon_comment_paginate_links_prev_url();
					if (!empty($prevPageUrl)){?>
						<div class="comments-navigation-more">
							<button id="comments_more" class="btn btn-lg btn-primary rounded-circle" href="<?php echo $prevPageUrl;?>">
								<span class="btn-inner--icon">
									<i class="fa fa-angle-down" style="transform: translateY(2px);font-size: 19.2px;"></i>
								</span>
							</button>
						</div>
				<?php }
				}
			?>
		<?php } else {?>
			<span><?php _e('暂无评论', 'lyrargon');?></span>
		<?php } ?>
	</div>
</div>

<?php if (!comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' )) {?>
	<div id="post_comment" class="card shadow-sm">
		<div class="card-body">
			<span><?php _e('本文评论已关闭', 'lyrargon');?></span>
		</div>
	</div>
<?php } else { ?>

<?php $name_and_email_required = get_option('require_name_email');?>
<?php $enable_qq_avatar = get_option('lyrargon_comment_enable_qq_avatar'); ?>
<?php
	$current_commenter = wp_get_current_commenter();
	if ($enable_qq_avatar == 'true'){
		$current_commenter['comment_author_email'] = str_replace("@avatarqq.com", "", $current_commenter['comment_author_email']);
	}
?>
<div id="post_comment" class="card shadow-sm <?php if (is_user_logged_in()) {echo("logged");}?><?php if (!$name_and_email_required) {echo(" no-need-name-email");}?><?php if (get_option('lyrargon_comment_need_captcha') == 'false') {echo(" no-need-captcha");}?><?php if ($enable_qq_avatar == 'true') {echo(" enable-qq-avatar");}?>">
	<div class="card-body">
		<h2 class="post-comment-title">
			<i class="fa fa-commenting"></i>
			<span class="hide-on-comment-editing"><?php echo apply_filters("lyrargon_comment_title", __('发送评论', 'lyrargon'))?></span>
			<span class="hide-on-comment-not-editing"><?php echo apply_filters("lyrargon_comment_title_editing", __('编辑评论', 'lyrargon'))?></span>
		</h2>
		<div id="post_comment_reply_info" class="post-comment-reply" style="display: none;">
			<span><?php _e('正在回复', 'lyrargon');?> <b><span id="post_comment_reply_name"></span></b><?php _e(' 的评论', 'lyrargon');?> :</span>
			<div id="post_comment_reply_preview" class="post-comment-reply-preview"></div>
			<button id="post_comment_reply_cancel" class="btn btn-outline-primary btn-sm"><?php _e('取消回复', 'lyrargon');?></button>
		</div>
		<form>
			<div class="row">
				<div class="col-md-12">
					<textarea id="post_comment_content" class="form-control form-control-alternative" placeholder="<?php echo apply_filters("lyrargon_comment_textarea_placeholder", __('评论内容', 'lyrargon'));?>" name="comment" style="height: 80px;"></textarea>
				</div>
				<div class="col-md-12" style="height: 0;overflow: hidden;">
					<pre id="post_comment_content_hidden" class=""></pre>
				</div>
			</div>
			<?php 
				$col1_class = "col-md-4";
				$col2_class = "col-md-5";
				$col3_class = "col-md-3";
				if ((get_option('lyrargon_hide_name_email_site_input') == 'true') && ($name_and_email_required != true)){
					if (get_option('lyrargon_comment_need_captcha') == 'false'){
						$col1_class = "d-none";
						$col2_class = "d-none";
						$col3_class = "d-none";
					}else{
						$col1_class = "d-none";
						$col2_class = "d-none";
						$col3_class = "col-md-12";
					}
				}else{
					if (get_option('lyrargon_comment_need_captcha') == 'false'){
						$col1_class = "col-md-6";
						$col2_class = "col-md-6";
						$col3_class = "d-none";
					}else{
						$col1_class = "col-md-4";
						$col2_class = "col-md-5";
						$col3_class = "col-md-3";
					}
				}
			?>
			<div class="row hide-on-comment-editing" style="margin-bottom: -10px;">
				<div class="<?php echo $col1_class;?>">
					<div class="form-group mb-4 position-relative">
						<i class="fa fa-user-circle position-absolute text-muted" style="left: 15px; top: 50%; transform: translateY(-50%); z-index: 4; pointer-events: none;"></i>
						<input id="post_comment_name" class="form-control form-control-alternative" style="padding-left: 38px;" placeholder="<?php _e('昵称', 'lyrargon');?>" type="text" name="author" value="<?php if (is_user_logged_in()) {echo (wp_get_current_user() -> user_login);} else {echo htmlspecialchars($current_commenter['comment_author']);} ?>">
					</div>
				</div>
				<div class="<?php echo $col2_class;?>">
					<div class="form-group mb-4 position-relative">
						<i class="fa fa-envelope position-absolute text-muted" style="left: 15px; top: 50%; transform: translateY(-50%); z-index: 4; pointer-events: none;"></i>
						<input id="post_comment_email" class="form-control form-control-alternative" style="padding-left: 38px;" placeholder="<?php _e('邮箱', 'lyrargon');?><?php if ($enable_qq_avatar == 'true'){echo __(' / QQ 号', 'lyrargon');} ?>" type="email" name="email" value="<?php if (is_user_logged_in()) {echo (wp_get_current_user() -> user_email);} else {echo htmlspecialchars($current_commenter['comment_author_email']);} ?>">
					</div>
				</div>
				<div class="<?php echo $col3_class;?>">
					<div class="form-group mb-4 position-relative post-comment-captcha-container" captcha="<?php echo get_comment_captcha(get_comment_captcha_seed());?>">
						<i class="fa fa-key position-absolute text-muted" style="left: 15px; top: 50%; transform: translateY(-50%); z-index: 4; pointer-events: none;"></i>
						<input id="post_comment_captcha" class="form-control form-control-alternative" style="padding-left: 38px;" placeholder="<?php _e('验证码', 'lyrargon');?>" type="text" <?php if (current_user_can('level_7')) {echo('value="' . get_comment_captcha_answer(get_comment_captcha_seed()) . '" disabled');}?>>
						<style>
							.post-comment-captcha-container:before{
								content: attr(captcha);
							}
						</style>
						<?php if (get_option('lyrargon_get_captcha_by_ajax', 'false') == 'true') {?>
							<script>
								$(".post-comment-captcha-container").attr("captcha", "Loading...");
								$.ajax({
									url : argonConfig.wp_path + "wp-admin/admin-ajax.php",
									type : "POST",
									dataType : "json",
									data : {
										action: "get_captcha",
									},
									success : function(result){
										$(".post-comment-captcha-container").attr("captcha", result['captcha']);
									},
									error : function(xhr){
										$(".post-comment-captcha-container").attr("captcha", "<?php _e('获取验证码失败', 'lyrargon');?>");
									}
								});
							</script>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="row hide-on-comment-editing" id="post_comment_extra_input" style="display: none";>
				<div class="col-md-12" style="margin-bottom: -10px;">
					<div class="form-group mb-4 position-relative post-comment-link-container">
						<i class="fa fa-link position-absolute text-muted" style="left: 15px; top: 50%; transform: translateY(-50%); z-index: 4; pointer-events: none;"></i>
						<input id="post_comment_link" class="form-control form-control-alternative" style="padding-left: 38px;" placeholder="<?php _e('网站', 'lyrargon'); ?>" type="text" name="url" value="<?php echo htmlspecialchars($current_commenter['comment_author_url']); ?>">
					</div>
				</div>
			</div>
			<div class="row hide-on-comment-editing <?php if (get_option('lyrargon_hide_name_email_site_input') == 'true') {echo 'd-none';}?>" style="margin-top: 10px; <?php if (is_user_logged_in()) {echo('display: none');}?>">
				<div class="col-md-12">
					<button id="post_comment_toggle_extra_input" type="button" class="btn btn-icon btn-outline-primary btn-sm" tooltip-show-extra-field="<?php _e('展开附加字段', 'lyrargon'); ?>" tooltip-hide-extra-field="<?php _e('折叠附加字段', 'lyrargon'); ?>">
						<span class="btn-inner--icon"><i class="fa fa-angle-down"></i></span>
					</button>
				</div></div>
			<div class="row" style="margin-top: 5px; margin-bottom: 10px;">
				<div class="col-md-12">
					<?php if (get_option("lyrargon_comment_allow_markdown") != "false") {?>
						<div class="custom-control custom-checkbox comment-post-checkbox comment-post-use-markdown">
							<input class="custom-control-input" id="comment_post_use_markdown" type="checkbox" checked="true">
							<label class="custom-control-label" for="comment_post_use_markdown">Markdown</label>
						</div>
					<?php } ?>
					<?php if (get_option("lyrargon_comment_allow_privatemode") == "true") {?>
						<div class="custom-control custom-checkbox comment-post-checkbox comment-post-privatemode" tooltip="<?php _e('评论仅发送者和博主可见', 'lyrargon'); ?>">
							<input class="custom-control-input" id="comment_post_privatemode" type="checkbox">
							<label class="custom-control-label" for="comment_post_privatemode"><?php _e('悄悄话', 'lyrargon');?></label>
						</div>
					<?php } ?>
					<?php if (get_option("lyrargon_comment_allow_mailnotice") == "true") {?>
						<div class="custom-control custom-checkbox comment-post-checkbox comment-post-mailnotice" tooltip="<?php _e('有回复时邮件通知我', 'lyrargon'); ?>">
							<input class="custom-control-input" id="comment_post_mailnotice" type="checkbox"<?php if (get_option("lyrargon_comment_mailnotice_checkbox_checked") == 'true'){echo ' checked';}?>>
							<label class="custom-control-label" for="comment_post_mailnotice"><?php _e('邮件提醒', 'lyrargon');?></label>
						</div>
					<?php } ?>
					<button id="post_comment_send" class="btn btn-icon btn-primary comment-btn pull-right mr-0" type="button">
						<span class="btn-inner--icon hide-on-comment-editing"><i class="fa fa-send"></i></span>
						<span class="btn-inner--icon hide-on-comment-not-editing"><i class="fa fa-pencil"></i></span>
						<span class="btn-inner--text hide-on-comment-editing" style="margin-right: 0;"><?php _e('发送', 'lyrargon');?></span>
						<span class="btn-inner--text hide-on-comment-not-editing" style="margin-right: 0;"><?php _e('编辑', 'lyrargon');?></span>
					</button>
					<button id="post_comment_edit_cancel" class="btn btn-icon btn-danger comment-btn pull-right hide-on-comment-not-editing" type="button" style="margin-right: 8px;">
						<span class="btn-inner--icon"><i class="fa fa-close"></i></span>
						<span class="btn-inner--text"><?php _e('取消', 'lyrargon');?></span>
					</button>
					<?php if (get_option("lyrargon_comment_emotion_keyboard", "true") != "false"){ ?>
						<button id="comment_emotion_btn" class="btn btn-icon btn-primary pull-right" type="button" title="<?php _e('表情', 'lyrargon');?>">
							<i class="fa fa-smile-o" aria-hidden="true"></i>
						</button>
						<?php get_template_part( 'template-parts/emotion-keyboard' ); ?>
					<?php } ?>
				</div>
			</div>
			<input id="post_comment_captcha_seed" value="<?php echo $commentCaptchaSeed;?>" style="display: none;"></input>
			<input id="post_comment_post_id" value="<?php echo get_the_ID();?>" style="display: none;"></input>
		</form>
	</div>
</div>
<div id="comment_edit_history" class="modal fade" tabindex="-1" role="dialog" aria-modal="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" style="font-size: 20px;"></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body" style="word-break: break-word;"></div>
		</div>
	</div>
</div>
<div id="comment_pin_comfirm_dialog" class="modal fade" tabindex="-1" role="dialog" aria-modal="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" style="font-size: 20px;"></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body" style="word-break: break-word;"></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-dismiss" data-dismiss="modal"></button>
				<button type="button" class="btn btn-primary btn-comfirm"></button>
			</div>
		</div>
	</div>
</div>
<?php } ?>
