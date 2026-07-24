<?php
function themeoptions_page(){
	/*主题选项*/
?>
<script src="<?php bloginfo('template_url'); ?>/assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/vendor/headindex/headindex.js"></script>
	<script>!function(n){"function"==typeof define&&define.amd?define(["jquery"],function(e){return n(e)}):"object"==typeof module&&"object"==typeof module.exports?module.exports=n(require("jquery")):n(jQuery)}(function(n){function e(n){var e=7.5625,t=2.75;return n<1/t?e*n*n:n<2/t?e*(n-=1.5/t)*n+.75:n<2.5/t?e*(n-=2.25/t)*n+.9375:e*(n-=2.625/t)*n+.984375}void 0!==n.easing&&(n.easing.jswing=n.easing.swing);var t=Math.pow,u=Math.sqrt,r=Math.sin,i=Math.cos,a=Math.PI,o=1.70158,c=1.525*o,s=2*a/3,f=2*a/4.5;return n.extend(n.easing,{def:"easeOutQuad",swing:function(e){return n.easing[n.easing.def](e)},easeInQuad:function(n){return n*n},easeOutQuad:function(n){return 1-(1-n)*(1-n)},easeInOutQuad:function(n){return n<.5?2*n*n:1-t(-2*n+2,2)/2},easeInCubic:function(n){return n*n*n},easeOutCubic:function(n){return 1-t(1-n,3)},easeInOutCubic:function(n){return n<.5?4*n*n*n:1-t(-2*n+2,3)/2},easeInQuart:function(n){return n*n*n*n},easeOutQuart:function(n){return 1-t(1-n,4)},easeInOutQuart:function(n){return n<.5?8*n*n*n*n:1-t(-2*n+2,4)/2},easeInQuint:function(n){return n*n*n*n*n},easeOutQuint:function(n){return 1-t(1-n,5)},easeInOutQuint:function(n){return n<.5?16*n*n*n*n*n:1-t(-2*n+2,5)/2},easeInSine:function(n){return 1-i(n*a/2)},easeOutSine:function(n){return r(n*a/2)},easeInOutSine:function(n){return-(i(a*n)-1)/2},easeInExpo:function(n){return 0===n?0:t(2,10*n-10)},easeOutExpo:function(n){return 1===n?1:1-t(2,-10*n)},easeInOutExpo:function(n){return 0===n?0:1===n?1:n<.5?t(2,20*n-10)/2:(2-t(2,-20*n+10))/2},easeInCirc:function(n){return 1-u(1-t(n,2))},easeOutCirc:function(n){return u(1-t(n-1,2))},easeInOutCirc:function(n){return n<.5?(1-u(1-t(2*n,2)))/2:(u(1-t(-2*n+2,2))+1)/2},easeInElastic:function(n){return 0===n?0:1===n?1:-t(2,10*n-10)*r((10*n-10.75)*s)},easeOutElastic:function(n){return 0===n?0:1===n?1:t(2,-10*n)*r((10*n-.75)*s)+1},easeInOutElastic:function(n){return 0===n?0:1===n?1:n<.5?-t(2,20*n-10)*r((20*n-11.125)*f)/2:t(2,-20*n+10)*r((20*n-11.125)*f)/2+1},easeInBack:function(n){return 2.70158*n*n*n-o*n*n},easeOutBack:function(n){return 1+2.70158*t(n-1,3)+o*t(n-1,2)},easeInOutBack:function(n){return n<.5?t(2*n,2)*(7.189819*n-c)/2:(t(2*n-2,2)*((c+1)*(2*n-2)+c)+2)/2},easeInBounce:function(n){return 1-e(1-n)},easeOutBounce:e,easeInOutBounce:function(n){return n<.5?(1-e(1-2*n))/2:(1+e(2*n-1))/2}}),n});</script>
	<script src="<?php bloginfo('template_url'); ?>/assets/vendor/dragula/dragula.min.js"></script>
	<div>
		<style type="text/css">
			h2{
				font-size: 25px;
			}
			h2:before {
				content: '';
				background: #000;
				height: 16px;
				width: 6px;
				display: inline-block;
				border-radius: 15px;
				margin-right: 15px;
			}
			h3{
				font-size: 18px;
			}
			th.subtitle {
				padding: 0;
			}
			.gu-mirror{position:fixed!important;margin:0!important;z-index:9999!important;opacity:.8;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";filter:alpha(opacity=80)}.gu-hide{display:none!important}.gu-unselectable{-webkit-user-select:none!important;-moz-user-select:none!important;-ms-user-select:none!important;user-select:none!important}.gu-transit{opacity:.2;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=20)";filter:alpha(opacity=20)}
		</style>
		<div style="display: flex; align-items: center; justify-content: space-between; gap: 28px; margin: 26px 24px 16px; flex-wrap: wrap;">
			<div style="flex: 0 0 auto; line-height: 0;">
				<svg width="430" style="display: block; max-width: 100%; height: auto;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="673.92 415.2 680 151.8" enable-background="new 0 0 1920 1080" xml:space="preserve"><g><g><path fill="rgb(33, 150, 243, 0)" stroke="#2196f3" stroke-width="3" stroke-dasharray="402" stroke-dashoffset="402" d="M811.38,450.13c-2.2-3.81-7.6-6.93-12-6.93h-52.59c-4.4,0-9.8,3.12-12,6.93l-26.29,45.54c-2.2,3.81-2.2,10.05,0,13.86l26.29,45.54c2.2,3.81,7.6,6.93,12,6.93h52.59c4.4,0,9.8-3.12,12-6.93l26.29-45.54c2.2-3.81,2.2-10.05,0-13.86L811.38,450.13z"><animate attributeName="stroke-width" begin="1s" values="3; 0" dur="1s" fill="freeze" calcMode="spline" keySplines="0.8 0 0.2 1"/><animate attributeName="stroke-dashoffset" begin="0.5s" values="402; 0" dur="1s" fill="freeze" calcMode="spline" keySplines="0.8 0 0.2 1"/><animate attributeName="fill" begin="1s" values="rgb(33, 150, 243, 0); rgb(33, 150, 243, 0.3)" dur="1s" fill="freeze" calcMode="spline" keySplines="0.8 0 0.2 1"/></path></g><g><path fill="rgb(33, 150, 243, 0)" d="M783.65,422.13c-2.2-3.81-7.6-6.93-12-6.93H715.6c-4.4,0-9.8,3.12-12,6.93l-28.03,48.54c-2.2,3.81-2.2,10.05,0,13.86l28.03,48.54c2.2,3.81,7.6,6.93,12,6.93h56.05c4.4,0,9.8-3.12,12-6.93l28.03-48.54c2.2-3.81,2.2-10.05,0-13.86L783.65,422.13z"><animateTransform attributeName="transform" type="translate" begin="1.5s" values="27.73,28; 0,0" dur="1.1s" fill="freeze" calcMode="spline" keySplines="0.8 0 0.2 1"/><animate attributeName="fill" begin="1.5s" values="rgb(33, 150, 243, 0); rgb(33, 150, 243, 0.8)" dur="1.1s" fill="freeze" calcMode="spline" keySplines="0.8 0 0.2 1"/></path></g></g><g><text x="850" y="525" fill="#2196f3" font-family="-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif" font-size="95" font-weight="300" letter-spacing="1" opacity="0">Lyrargon<animate attributeName="opacity" begin="0.8s" values="0; 1" dur="1.2s" fill="freeze" calcMode="spline" keySplines="0.8 0 0.2 1"/></text></g></svg>
			</div>
			<div style="display: flex; flex-direction: column; align-items: flex-end; gap: 16px; min-width: 0; flex: 1 1 360px;">
				<a href="https://github.com/Andy17269/lyrargon/" target="_blank" style="box-shadow: none; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; color: #64748b; font-size: 14px; font-weight: 500; background: #f1f5f9; padding: 5px 12px; border-radius: 20px; border: 1px solid #e2e8f0; transition: all 0.2s;">
					<svg width="14" height="14" viewBox="0 0 1024 1024" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle;">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C13.71 14.53 16 11.53 16 8C16 3.58 12.42 0 8 0Z" transform="scale(64)" fill="currentColor"/>
					</svg>
					<span>Andy17269/lyrargon</span>
				</a>
			</div>
		</div>
		
		<style>
			/* Hide right directory menu completely */
			#headindex_box {
				display: none !important;
			}

			/* Apple-style UI Reset & Layout */
			#main_form {
				display: flex;
				flex-wrap: wrap;
				align-items: flex-start;
				margin-top: 24px;
				gap: 54px;
				background: linear-gradient(180deg, #ffffff 0%, #fbfcfe 100%);
				border-radius: 18px;
				box-shadow: 0 12px 40px rgba(15, 23, 42, 0.06);
				padding: 24px;
				border: 1px solid #dbe3ea;
				font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
			}
			#main_form > input[type="hidden"] {
				display: none !important;
			}
			.lyrargon-sidebar {
				width: 220px;
				flex-shrink: 0;
				position: sticky;
				top: 40px;
				background: rgba(248, 250, 252, 0.96);
				border-radius: 16px;
				padding: 12px;
				border: 1px solid #e2e8f0;
				backdrop-filter: blur(10px);
			}
			.lyrargon-search-box {
				width: 100%;
				padding: 11px 14px;
				border-radius: 12px;
				border: 1px solid #cbd5e1;
				margin-bottom: 12px;
				font-size: 14px;
				background: #fff;
				outline: none;
				transition: border-color 0.2s, box-shadow 0.2s, transform 0.2s;
			}
			.lyrargon-search-box:focus {
				border-color: #2196f3;
				box-shadow: 0 0 0 4px rgba(33, 150, 243, 0.12);
			}
			.lyrargon-sidebar ul {
				list-style: none;
				margin: 0;
				padding: 0;
			}
			.lyrargon-sidebar li {
				padding: 11px 14px;
				margin-bottom: 6px;
				border-radius: 10px;
				cursor: pointer;
				font-size: 14px;
				color: #475569;
				transition: all 0.2s;
				font-weight: 500;
				line-height: 1.35;
			}
			.lyrargon-sidebar li:hover {
				background: #e8eef6;
				color: #0f172a;
			}
			.lyrargon-sidebar li.active {
				background: linear-gradient(180deg, #2f9af3 0%, #1686ea 100%);
				color: #fff;
				box-shadow: 0 10px 24px rgba(33, 150, 243, 0.18);
			}
			#main_form > .form-table {
				flex: 1;
				min-width: 0;
				margin-top: 0;
				border-collapse: separate;
				border-spacing: 0 12px;
			}
			#main_form > p.submit {
				width: calc(100% - 274px);
				flex: 0 0 calc(100% - 274px);
				margin-left: 274px;
				margin-top: 16px;
				padding: 0;
				border-top: 1px solid #e2e8f0;
				padding-top: 18px;
				display: flex;
				justify-content: flex-start;
				gap: 8px;
				align-items: center;
				flex-wrap: wrap;
			}
			.themeoptions-save-status {
				display: none;
				align-items: center;
				gap: 8px;
				padding: 8px 12px;
				border-radius: 999px;
				background: #ecfdf5;
				color: #047857;
				font-size: 13px;
				font-weight: 600;
				line-height: 1;
			}
			.themeoptions-submit-actions {
				display: flex;
				align-items: center;
				gap: 8px;
				margin-left: auto;
				flex-wrap: wrap;
			}
			.themeoptions-save-status.is-visible {
				display: inline-flex;
			}
			.themeoptions-save-status svg {
				display: block;
				width: 16px;
				height: 16px;
				stroke: currentColor;
				stroke-width: 2.5;
				fill: none;
				stroke-linecap: round;
				stroke-linejoin: round;
			}
			.themeoptions-save-status .check-ring {
				stroke-dasharray: 40;
				stroke-dashoffset: 40;
				animation: themeoptions-check-ring 0.55s ease forwards;
			}
			.themeoptions-save-status .check-mark {
				stroke-dasharray: 16;
				stroke-dashoffset: 16;
				animation: themeoptions-check-mark 0.35s ease 0.18s forwards;
			}
			.themeoptions-save-status.is-success {
				animation: themeoptions-save-bounce 0.45s ease;
			}
			.themeoptions-save-status.is-saving {
				background: #eff6ff;
				color: #2563eb;
			}
			.themeoptions-save-status.is-error {
				background: #fef2f2;
				color: #b91c1c;
			}
			.themeoptions-save-status-spinner {
				width: 14px;
				height: 14px;
				border-radius: 50%;
				border: 2px solid currentColor;
				border-right-color: transparent;
				animation: themeoptions-spin 0.75s linear infinite;
			}
			@keyframes themeoptions-spin {
				to { transform: rotate(360deg); }
			}
			@keyframes themeoptions-check-ring {
				to { stroke-dashoffset: 0; }
			}
			@keyframes themeoptions-check-mark {
				to { stroke-dashoffset: 0; }
			}
			@keyframes themeoptions-save-bounce {
				0% { transform: translateY(0) scale(0.96); }
				50% { transform: translateY(-1px) scale(1.03); }
				100% { transform: translateY(0) scale(1); }
			}
			@media (max-width: 960px) {
				#main_form {
					flex-direction: column;
				}
				.lyrargon-sidebar {
					width: 100%;
					position: relative;
					top: 0;
				}
				#main_form > p.submit {
					margin-left: 0;
					width: 100%;
					flex: 0 0 100%;
					justify-content: flex-start;
					gap: 10px;
				}
				.themeoptions-submit-actions {
					width: 100%;
					justify-content: flex-end;
					margin-left: 0;
				}
				.themeoptions-save-status {
					width: 100%;
					justify-content: center;
				}
			}
			
			/* Form elements Apple style */
			#main_form > .form-table > tbody > tr > th,
			#main_form > .form-table > tbody > tr > td {
				padding-top: 10px;
				padding-bottom: 10px;
				vertical-align: top;
			}
			.form-table th {
				font-weight: 600;
				color: #334155;
			}
			/* Keep label column from shrinking when hidden rows appear */
			#main_form > .form-table > tbody > tr > th:not(.subtitle) {
				min-width: 210px;
				width: 210px;
				padding-right: 20px;
			}
			.form-table input[type="text"], .form-table input[type="number"], .form-table select, .form-table textarea {
				border-radius: 12px;
				border: 1px solid #cbd5e1;
				padding: 9px 12px;
				transition: border-color 0.2s, box-shadow 0.2s, transform 0.2s;
				box-shadow: 0 1px 2px rgba(15, 23, 42, 0.04);
				background: #fff;
				color: #0f172a;
			}
			.form-table input[type="text"]:focus, .form-table input[type="number"]:focus, .form-table select:focus, .form-table textarea:focus {
				border-color: #2196f3;
				box-shadow: 0 0 0 4px rgba(33, 150, 243, 0.12);
			}
			.form-table input[type="color"] {
				border-radius: 12px;
				border: 1px solid #cbd5e1;
				padding: 4px;
				background: #fff;
				box-shadow: 0 1px 2px rgba(15, 23, 42, 0.04);
			}
			.form-table .description {
				margin: 10px 0 0;
				color: #64748b;
				line-height: 1.7;
				font-size: 13px;
			}
			.radio-h,
			.radio-with-img {
				display: flex;
				flex-wrap: wrap;
				gap: 12px;
				align-items: flex-start;
			}
			.radio-h label {
				display: inline-flex;
				align-items: center;
				gap: 8px;
				padding: 10px 12px;
				border: 1px solid #dbe3ea;
				border-radius: 999px;
				background: #fff;
				color: #334155;
				box-shadow: 0 1px 2px rgba(15, 23, 42, 0.04);
			}
			.radio-with-img {
				flex-direction: column;
				max-width: 300px;
				padding: 12px;
				border: 1px solid #dbe3ea;
				border-radius: 16px;
				background: #fff;
				box-shadow: 0 1px 2px rgba(15, 23, 42, 0.04);
				margin-bottom: 14px;
			}
			.radio-with-img .radio-img {
				border-radius: 12px;
				overflow: hidden;
			}
			.radio-with-img svg {
				display: block;
				width: 100%;
				height: auto;
			}
			.form-table h2 {
				margin-top: 0;
				font-weight: 600;
				color: #0f172a;
				border-bottom: 1px solid #e2e8f0;
				padding-bottom: 12px;
				margin-bottom: 18px;
				letter-spacing: -0.02em;
			}
			.form-table h3 {
				margin: 0 0 8px;
				font-weight: 600;
				color: #1e293b;
				letter-spacing: -0.01em;
			}
			.form-table h2:before {
				background: #2196f3;
				width: 4px;
				border-radius: 999px;
				margin-right: 12px;
			}
			/* Prevent headings in the form from wrapping prematurely */
			.form-table th.subtitle {
				width: 100% !important;
				max-width: none !important;
			}
			/* 侧边栏切换时的淡入淡出 */
			#main_form > table.form-table {
				transition: opacity 0.15s ease;
			}
		</style>

		<script>
			jQuery(document).ready(function($) {
				// Hide the old "Ctrl+F" hint text
				$("p:contains('Ctrl + F')").hide();

				var $mainTable = $('#main_form > table.form-table');
				var sections = [];
				var currentSectionId = null;
				
				// Fix subtitles to span both columns so they don't wrap in table layout
				$mainTable.find('th.subtitle').attr('colspan', 2);

				// Identify sections and assign data-section attributes ONLY to outer table rows
				$mainTable.find('> tbody > tr').each(function() {
					if ($(this).find('th.subtitle h2').length > 0) {
						var title = $(this).find('th.subtitle h2').text().trim();
						var id = 'lyra-section-' + sections.length;
						sections.push({id: id, title: title});
						currentSectionId = id;
					}
					if (currentSectionId) {
						$(this).addClass(currentSectionId);
					}
				});

				// Build the sidebar UI
				var $sidebar = $('<div class="lyrargon-sidebar"></div>');
				var $search = $('<input type="text" class="lyrargon-search-box" placeholder="<?php _e('搜索设置...', 'lyrargon'); ?>">');
				var $ul = $('<ul></ul>');
				
				sections.forEach(function(sec, idx) {
					var $li = $('<li data-target="'+sec.id+'">'+sec.title+'</li>');
					if (idx === 0) $li.addClass('active');
					$ul.append($li);
				});
				
				$sidebar.append($search).append($ul);
				
				// Prepend to #main_form (retaining DOM tree structure of #main_form > .form-table)
				$('#main_form').prepend($sidebar);

				// Tab switching logic
				function showSection(id) {
					$mainTable.css('opacity', '0.35');
					setTimeout(function() {
						$mainTable.find('> tbody > tr').hide();
						$mainTable.find('> tbody > tr.' + id).show();
						$mainTable.css('opacity', '1');
					}, 120);
				}
				
				$sidebar.find('li').click(function() {
					// Clear search
					$search.val('');
					
					$sidebar.find('li').removeClass('active');
					$(this).addClass('active');
					
					var target = $(this).data('target');
					showSection(target);
					// Re-collapse zoomify settings after section switch
					$('.zoomify-old-settings').hide();
					var $zt = $('tr:has(.zoomify-toggle-arrow)');
					$zt.find('.zoomify-toggle-arrow').text('▼');
					$zt.find('.zoomify-toggle-label').text('<?php _e('展开', 'lyrargon');?>');
					$zt.css('opacity','0.5');
					// Scroll the settings form into view when switching sections
					var form = document.getElementById('main_form');
					if (form) {
						form.scrollIntoView({behavior: 'smooth', block: 'start'});
					}
				});

				// Initial state: show first section
				if (sections.length > 0) {
					showSection(sections[0].id);
				}

				// Search logic
				$search.on('input', function() {
					var query = $(this).val().toLowerCase();
					if (query === '') {
						// Restore active tab
						var activeId = $sidebar.find('li.active').data('target');
						showSection(activeId);
						return;
					}
					
					// Search across all rows (excluding section headers to avoid showing empty sections)
					$mainTable.find('> tbody > tr').each(function() {
						var $row = $(this);
						var rowText = $row.text().toLowerCase();
						if (rowText.indexOf(query) > -1) {
							$row.show();
						} else {
							$row.hide();
						}
					});
				});

				// Prevent enter key from submitting the form when typing in search
				$search.on('keypress keydown', function(e) {
					if (e.which === 13) {
						e.preventDefault();
						return false;
					}
				});
			});
		</script>

		<form method="POST" action="" id="main_form">
			<input type="hidden" name="update_themeoptions" value="true" />
			<?php wp_nonce_field("lyrargon_update_themeoptions", "lyrargon_update_themeoptions_nonce");?>
			<table class="form-table">
				<tbody>
					<tr><th class="subtitle"><h2><?php _e("全局", 'lyrargon');?></h2></th></tr>
					<tr>
						<th><label><?php _e("界面语言", 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_language_override">
								<?php $argon_language_override = get_option('lyrargon_language_override', 'follow'); ?>
								<option value="follow" <?php if ($argon_language_override=='follow'){echo 'selected';} ?>><?php _e('跟随 WordPress', 'lyrargon');?></option>
								<option value="zh_CN" <?php if ($argon_language_override=='zh_CN'){echo 'selected';} ?>><?php _e('简体中文', 'lyrargon');?></option>
								<option value="zh_TW" <?php if ($argon_language_override=='zh_TW'){echo 'selected';} ?>><?php _e('繁體中文', 'lyrargon');?></option>
								<option value="en_US" <?php if ($argon_language_override=='en_US'){echo 'selected';} ?>><?php _e('English', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('默认跟随 WordPress 站点语言。请注意，若选择除简体中文以外的语言，中国（大陆）的本地化加速/功能可能无法正常工作。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e("主题色", 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e("主题颜色", 'lyrargon');?></label></th>
						<td>
							<input type="color" class="regular-text" name="lyrargon_theme_color" value="<?php echo get_option('lyrargon_theme_color') == "" ? "#2196f3" : get_option('lyrargon_theme_color'); ?>" style="height:40px;width: 80px;cursor: pointer;"/>
							<input type="text" readonly name="lyrargon_theme_color_hex_preview" value="<?php echo get_option('lyrargon_theme_color') == "" ? "#2196f3" : get_option('lyrargon_theme_color'); ?>" style="height: 40px;width: 80px;vertical-align: bottom;background: #fff;cursor: pointer;" onclick="$('input[name=\'lyrargon_theme_color\']').click()"/>
							<div class="description" style="margin-top: 15px;"><?php _e("选择预置颜色 或", 'lyrargon');?> <span onclick="$('input[name=\'lyrargon_theme_color\']').click()" style="text-decoration: underline;cursor: pointer;"><?php _e("自定义色值", 'lyrargon');?></span>
								<br/><br/><?php _e("预置颜色：", 'lyrargon');?></div>
								<div class="themecolor-preview-container">
									<div class="themecolor-preview-box"><div class="themecolor-preview" style="background:#2196f3;" color="#2196f3"></div><div class="themecolor-name">Lyrargon (<?php _e("默认", 'lyrargon');?>)</div></div>
									<div class="themecolor-preview-box"><div class="themecolor-preview" style="background:#fa7298;" color="#fa7298"></div><div class="themecolor-name"><?php _e("粉", 'lyrargon');?></div></div>
									<div class="themecolor-preview-box"><div class="themecolor-preview" style="background:#009688;" color="#009688"></div><div class="themecolor-name"><?php _e("水鸭青", 'lyrargon');?></div></div>
									<div class="themecolor-preview-box"><div class="themecolor-preview" style="background:#607d8b;" color="#607d8b"></div><div class="themecolor-name"><?php _e("蓝灰", 'lyrargon');?></div></div>
									<div class="themecolor-preview-box"><div class="themecolor-preview" style="background:#2196f3;" color="#2196f3"></div><div class="themecolor-name"><?php _e("天蓝", 'lyrargon');?></div></div>
									<div class="themecolor-preview-box"><div class="themecolor-preview" style="background:#3f51b5;" color="#3f51b5"></div><div class="themecolor-name"><?php _e("靛蓝", 'lyrargon');?></div></div>
									<div class="themecolor-preview-box"><div class="themecolor-preview" style="background:#ff9700;" color="#ff9700"></div><div class="themecolor-name"><?php _e("橙", 'lyrargon');?></div></div>
									<div class="themecolor-preview-box"><div class="themecolor-preview" style="background:#109d58;" color="#109d58"></div><div class="themecolor-name"><?php _e("绿", 'lyrargon');?></div></div>
									<div class="themecolor-preview-box"><div class="themecolor-preview" style="background:#dc4437;" color="#dc4437"></div><div class="themecolor-name"><?php _e("红", 'lyrargon');?></div></div>
									<div class="themecolor-preview-box"><div class="themecolor-preview" style="background:#673bb7;" color="#673bb7"></div><div class="themecolor-name"><?php _e("紫", 'lyrargon');?></div></div>
									<div class="themecolor-preview-box"><div class="themecolor-preview" style="background:#212121;" color="#212121"></div><div class="themecolor-name"><?php _e("黑", 'lyrargon');?></div></div>
									<div class="themecolor-preview-box"><div class="themecolor-preview" style="background:#795547;" color="#795547"></div><div class="themecolor-name"><?php _e("棕", 'lyrargon');?></div></div>
								</div>
								<br/><?php _e('主题色与 "Banner 渐变背景样式" 选项搭配使用效果更佳', 'lyrargon');?>
								<script>
									$("input[name='lyrargon_theme_color']").on("change" , function(){
										$("input[name='lyrargon_theme_color_hex_preview']").val($("input[name='lyrargon_theme_color']").val());
									});
									$(".themecolor-preview").on("click" , function(){
										$("input[name='lyrargon_theme_color']").val($(this).attr("color"));
										$("input[name='lyrargon_theme_color']").trigger("change");
									});
								</script>
								<style>
									.themecolor-name{width: 100px;text-align: center;}
									.themecolor-preview{width: 50px;height: 50px;margin: 20px 25px 5px 25px;line-height: 50px;color: #fff;margin-right: 0px;font-size: 15px;text-align: center;display: inline-block;border-radius: 50px;transition: all .3s ease;cursor: pointer;}
									.themecolor-preview-box{width: max-content;width: -moz-max-content;display: inline-block;}
									div.themecolor-preview:hover{transform: scale(1.1);}
									div.themecolor-preview:active{transform: scale(1.2);}
									.themecolor-preview-container{
										max-width: calc(100% - 180px);
									}
									@media screen and (max-width:960px){
										.themecolor-preview-container{
											max-width: unset;
										}
									}
								</style>

								<?php $argon_show_customize_theme_color_picker = get_option('lyrargon_show_customize_theme_color_picker');?>
								<div style="margin-top: 15px;">
									<label>
										<input type="checkbox" name="lyrargon_show_customize_theme_color_picker" value="true" <?php if ($argon_show_customize_theme_color_picker!='false'){echo 'checked';}?>/> <?php _e('允许用户自定义主题色（位于博客浮动操作栏设置菜单中）', 'lyrargon');?>
									</label>
								</div>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('沉浸式主题色', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_enable_immersion_color">
								<?php $argon_enable_immersion_color = get_option('lyrargon_enable_immersion_color', 'false'); ?>
								<option value="true" <?php if ($argon_enable_immersion_color=='true'){echo 'selected';} ?>><?php _e('开启', 'lyrargon');?></option>
								<option value="false" <?php if ($argon_enable_immersion_color=='false'){echo 'selected';} ?>><?php _e('关闭', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('开启后，主题色将会全局沉浸。<br/>页面背景、卡片及页面上的其它元素会变为沉浸式主题色（气氛色）。类似 Material You。', 'lyrargon');?><br/></p>
							<div style="display: flex;flex-direction: row;flex-wrap: wrap;align-items: center;margin-top:15px;">
								<div class="immersion-color-example" style="background: #f4f5f7;"><div class="immersion-color-example-card" style="background: #fff;"></div></div>
								<div class="immersion-color-example-arrow"><span class="dashicons dashicons-arrow-right-alt"></span></div>
								<div class="immersion-color-example" style="background: #e3f2fd;"><div class="immersion-color-example-card" style="background: #eef6ff;"></div></div>
							</div>
							<style>.immersion-color-example {width: 250px;height: 150px;border-radius: 12px;display: inline-block;position: relative;box-shadow: 0 8px 24px rgba(15,23,42,.08);}.immersion-color-example-arrow {margin-left: 18px;margin-right: 18px;color: #64748b;}.immersion-color-example-card {position: absolute;left: 40px;right: 40px;top: 35px;bottom: 35px;background: #fff;box-shadow: 0 8px 24px rgba(15,23,42,.08);border-radius: 10px;}</style>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('夜间模式', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('夜间模式切换方案', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_darkmode_autoswitch">
								<?php $argon_darkmode_autoswitch = get_option('lyrargon_darkmode_autoswitch'); ?>
								<option value="false" <?php if ($argon_darkmode_autoswitch=='false'){echo 'selected';} ?>><?php _e('默认使用日间模式', 'lyrargon');?></option>
								<option value="alwayson" <?php if ($argon_darkmode_autoswitch=='alwayson'){echo 'selected';} ?>><?php _e('默认使用夜间模式', 'lyrargon');?></option>
								<option value="system" <?php if ($argon_darkmode_autoswitch=='system'){echo 'selected';} ?>><?php _e('跟随系统夜间模式', 'lyrargon');?></option>
								<option value="time" <?php if ($argon_darkmode_autoswitch=='time'){echo 'selected';} ?>><?php _e('根据时间切换夜间模式 (22:00 ~ 7:00)', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('Lyrargon 主题会根据这里的选项来决定是否默认使用夜间模式。', 'lyrargon');?><br/><?php _e('用户也可以手动切换夜间模式，用户的设置将保留到标签页关闭为止。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('夜间模式颜色方案', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_enable_amoled_dark">
								<?php $argon_enable_amoled_dark = get_option('lyrargon_enable_amoled_dark'); ?>
								<option value="false" <?php if ($argon_enable_amoled_dark=='false'){echo 'selected';} ?>><?php _e('灰黑', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_enable_amoled_dark=='true'){echo 'selected';} ?>><?php _e('暗黑 (AMOLED Black)', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('夜间模式默认的配色方案。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('卡片', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('组件圆角', 'lyrargon');?></label></th>
						<td>
							<label>
								<?php $argon_enable_large_radius = get_option('lyrargon_enable_large_radius');?>
								<input type="checkbox" name="lyrargon_enable_large_radius" value="true" <?php if ($argon_enable_large_radius=='true'){echo 'checked';}?>/>	<?php _e('开启圆角组件', 'lyrargon');?>
							</label>
							<p class="description"><?php _e('开启后将把搜索框、按钮等组件变为胶囊形，将小部件变为圆形。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('卡片毛玻璃效果 (Lite)', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_card_blur">
								<?php $argon_card_blur = get_option('lyrargon_card_blur'); ?>
								<option value="none" <?php if ($argon_card_blur=='none' || $argon_card_blur==''){echo 'selected';} ?>><?php _e('关闭', 'lyrargon');?></option>
								<option value="weak" <?php if ($argon_card_blur=='weak'){echo 'selected';} ?>><?php _e('弱', 'lyrargon');?></option>
								<option value="medium" <?php if ($argon_card_blur=='medium'){echo 'selected';} ?>><?php _e('中', 'lyrargon');?></option>
								<option value="strong" <?php if ($argon_card_blur=='strong'){echo 'selected';} ?>><?php _e('强', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('为卡片添加半透明的毛玻璃模糊效果，开启后有微小的性能损耗。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('卡片圆角大小', 'lyrargon');?></label></th>
						<td>
							<input type="number" name="lyrargon_card_radius" min="0" max="30" step="0.5" value="<?php echo (get_option('lyrargon_card_radius') == '' ? '4' : get_option('lyrargon_card_radius')); ?>"/>	px
							<p class="description"><?php _e('卡片的圆角大小，默认为', 'lyrargon');?> <code>22px</code><?php _e('。建议设置为', 'lyrargon');?> <code>15px</code> - <code>25px</code></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('卡片阴影', 'lyrargon');?></label></th>
						<td>
							<div class="radio-h">
								<?php $argon_card_shadow = (get_option('lyrargon_card_shadow') == '' ? 'default' : get_option('lyrargon_card_shadow')); ?>
								<label>
									<input name="lyrargon_card_shadow" type="radio" value="default" <?php if ($argon_card_shadow=='default'){echo 'checked';} ?>>
									<?php _e('浅阴影', 'lyrargon');?>
								</label>
								<label>
									<input name="lyrargon_card_shadow" type="radio" value="big" <?php if ($argon_card_shadow=='big'){echo 'checked';} ?>>
									<?php _e('深阴影', 'lyrargon');?>
								</label>
							</div>
							<p class="description"><?php _e('卡片默认阴影大小。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('布局', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('页面布局', 'lyrargon');?></label></th>
						<td>
							<div class="radio-with-img">
								<?php $argon_page_layout = get_option('lyrargon_page_layout', 'double'); ?>
								<div class="radio-img">
									<svg width="250" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080"><rect width="1920" height="1080" style="fill:#e6e6e6"/><g style="opacity:0.5"><rect width="1920" height="381" style="fill:#2196f3"/></g><rect x="388.5" y="256" width="258" height="179" style="fill:#2196f3"/><rect x="388.5" y="470" width="258" height="485" style="fill:#fff"/><rect x="689.5" y="256.5" width="842" height="250" style="fill:#fff"/><rect x="689.5" y="536.5" width="842" height="250" style="fill:#fff"/><rect x="689.5" y="817" width="842" height="250" style="fill:#fff"/></svg>
								</div>
								<label><input name="lyrargon_page_layout" type="radio" value="double" <?php if ($argon_page_layout=='double'){echo 'checked';} ?>> <?php _e('双栏', 'lyrargon');?></label>
							</div>
							<div class="radio-with-img">
								<div class="radio-img">
									<svg width="250" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080"><rect width="1920" height="1080" style="fill:#e6e6e6"/><g style="opacity:0.5"><rect width="1920" height="381" style="fill:#2196f3"/></g><rect x="428.25" y="256.5" width="1063.5" height="250" style="fill:#fff"/><rect x="428.25" y="536.5" width="1063.5" height="250" style="fill:#fff"/><rect x="428.25" y="817" width="1063.5" height="250" style="fill:#fff"/></svg>
								</div>
								<label><input name="lyrargon_page_layout" type="radio" value="single" <?php if ($argon_page_layout=='single'){echo 'checked';} ?>> <?php _e('单栏', 'lyrargon');?></label>
							</div>
							<div class="radio-with-img">
								<div class="radio-img">
									<svg width="250" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080"><rect width="1920" height="1080" style="fill:#e6e6e6"/><g style="opacity:0.5"><rect width="1920" height="381" style="fill:#2196f3"/></g><rect x="237.5" y="256" width="258" height="179" style="fill:#2196f3"/><rect x="237.5" y="470" width="258" height="485" style="fill:#fff"/><rect x="538.5" y="256.5" width="842" height="250" style="fill:#fff"/><rect x="538.5" y="536.5" width="842" height="250" style="fill:#fff"/><rect x="538.5" y="817" width="842" height="250" style="fill:#fff"/><rect x="1424" y="256" width="258" height="811" style="fill:#fff"/></svg>
								</div>
								<label><input name="lyrargon_page_layout" type="radio" value="triple" <?php if ($argon_page_layout=='triple'){echo 'checked';} ?>> <?php _e('三栏', 'lyrargon');?></label>
							</div>
							<div class="radio-with-img">
								<div class="radio-img">
									<svg width="250" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080"><rect width="1920" height="1080" style="fill:#e6e6e6"/><g style="opacity:0.5"><rect width="1920" height="381" style="fill:#2196f3"/></g><rect x="1273.5" y="256" width="258" height="179" style="fill:#2196f3"/><rect x="1273.5" y="470" width="258" height="485" style="fill:#fff"/><rect x="388.5" y="256.5" width="842" height="250" style="fill:#fff"/><rect x="388.5" y="536.5" width="842" height="250" style="fill:#fff"/><rect x="388.5" y="817" width="842" height="250" style="fill:#fff"/></svg>
								</div>
								<label><input name="lyrargon_page_layout" type="radio" value="double-reverse" <?php if ($argon_page_layout=='double-reverse'){echo 'checked';} ?>> <?php _e('双栏(反转)', 'lyrargon');?></label>
							</div>
							<p class="description" style="margin-top: 15px;"><?php _e('使用单栏时，关于左侧栏的设置将失效。', 'lyrargon');?><br/><?php _e('使用三栏时，请前往 "外观-小工具" 设置页面配置右侧栏内容。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('文章列表布局', 'lyrargon');?></label></th>
						<td>
							<div class="radio-with-img">
								<?php $argon_article_list_waterflow = get_option('lyrargon_article_list_waterflow', '1'); ?>
								<div class="radio-img">
									<svg width="200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1880.72 1340.71"><rect width="1880.72" height="1340.71" style="fill:#f7f8f8"/><rect x="46.34" y="46.48" width="1785.73" height="412.09" style="fill:#2196f3"/><rect x="46.34" y="496.66" width="1785.73" height="326.05" style="fill:#2196f3"/><rect x="46.34" y="860.8" width="1785.73" height="350.87" style="fill:#2196f3"/><rect x="46.34" y="1249.76" width="1785.73" height="90.94" style="fill:#2196f3"/></svg>
								</div>
								<label><input name="lyrargon_article_list_waterflow" type="radio" value="1" <?php if ($argon_article_list_waterflow=='1'){echo 'checked';} ?>> <?php _e('单列', 'lyrargon');?></label>
							</div>
							<div class="radio-with-img">
								<div class="radio-img">
									<svg width="200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1880.72 1340.71"><rect width="1880.72" height="1340.71" style="fill:#f7f8f8"/><rect x="46.34" y="46.48" width="873.88" height="590.33" style="fill:#2196f3"/><rect x="961.62" y="46.48" width="873.88" height="390.85" style="fill:#2196f3"/><rect x="961.62" y="480.65" width="873.88" height="492.96" style="fill:#2196f3"/><rect x="46.34" y="681.35" width="873.88" height="426.32" style="fill:#2196f3"/><rect x="961.62" y="1016.92" width="873.88" height="323.79" style="fill:#2196f3"/><rect x="46.34" y="1152.22" width="873.88" height="188.49" style="fill:#2196f3"/></svg>
								</div>
								<label><input name="lyrargon_article_list_waterflow" type="radio" value="2" <?php if ($argon_article_list_waterflow=='2'){echo 'checked';} ?>> <?php _e('瀑布流 (2 列)', 'lyrargon');?></label>
							</div>
							<div class="radio-with-img">
								<div class="radio-img">
									<svg width="200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1880.72 1340.71"><rect width="1880.72" height="1340.71" style="fill:#f7f8f8"/><rect x="46.34" y="46.48" width="568.6" height="531.27" style="fill:#2196f3"/><rect x="656.62" y="46.48" width="568.6" height="400.51" style="fill:#2196f3"/><rect x="1266.9" y="46.48" width="568.6" height="604.09" style="fill:#2196f3"/><rect x="656.62" y="485.07" width="568.6" height="428.67" style="fill:#2196f3"/><rect x="46.34" y="615.82" width="568.6" height="407.16" style="fill:#2196f3"/><rect x="656.62" y="951.83" width="568.6" height="388.87" style="fill:#2196f3"/><rect x="1266.9" y="695.24" width="568.6" height="400.53" style="fill:#2196f3"/><rect x="1266.9" y="1140.44" width="568.6" height="200.26" style="fill:#2196f3"/><rect x="46.34" y="1061.06" width="568.6" height="279.64" style="fill:#2196f3"/></svg>
								</div>
								<label><input name="lyrargon_article_list_waterflow" type="radio" value="3" <?php if ($argon_article_list_waterflow=='3'){echo 'checked';} ?>> <?php _e('瀑布流 (3 列)', 'lyrargon');?></label>
							</div>
							<div class="radio-with-img">
								<div class="radio-img">
									<svg width="200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1930.85 1340.71"><defs><clipPath id="a" transform="translate(18.64)"><rect x="-385.62" y="718.3" width="2290.76" height="1028.76" transform="translate(599.83 -206.47) rotate(25.31)" style="fill:none"/></clipPath><clipPath id="b" transform="translate(18.64)"><rect x="2.1" y="252.4" width="1878.62" height="991.45" style="fill:none"/></clipPath></defs><rect x="18.64" width="1880.72" height="1340.71" style="fill:#f7f8f8"/><rect x="64.98" y="46.48" width="568.6" height="531.27" style="fill:#2196f3"/><rect x="675.26" y="46.48" width="568.6" height="400.51" style="fill:#2196f3"/><rect x="1285.55" y="46.48" width="568.6" height="604.09" style="fill:#2196f3"/><rect x="675.26" y="485.07" width="568.6" height="428.67" style="fill:#2196f3"/><rect x="64.98" y="615.82" width="568.6" height="407.16" style="fill:#2196f3"/><rect x="675.26" y="951.83" width="568.6" height="388.87" style="fill:#2196f3"/><rect x="1285.55" y="695.24" width="568.6" height="400.53" style="fill:#2196f3"/><rect x="1285.55" y="1140.44" width="568.6" height="200.26" style="fill:#2196f3"/><rect x="64.98" y="1061.06" width="568.6" height="279.64" style="fill:#2196f3"/><g style="clip-path:url(#a)"><rect x="18.64" width="1880.72" height="1340.71" style="fill:#f7f8f8"/><rect x="64.98" y="46.48" width="873.88" height="590.33" style="fill:#2196f3"/><rect x="980.27" y="46.48" width="873.88" height="390.85" style="fill:#2196f3"/><rect x="980.27" y="480.65" width="873.88" height="492.96" style="fill:#2196f3"/><rect x="64.98" y="681.35" width="873.88" height="426.32" style="fill:#2196f3"/><rect x="980.27" y="1016.92" width="873.88" height="323.79" style="fill:#2196f3"/><rect x="64.98" y="1152.22" width="873.88" height="188.49" style="fill:#2196f3"/></g><g style="clip-path:url(#b)"><line x1="18.64" y1="304.46" x2="1912.21" y2="1199.81" style="fill:none;stroke:#f7f8f8;stroke-linecap:square;stroke-miterlimit:10;stroke-width:28px"/></g></svg>
								</div>
								<label><input name="lyrargon_article_list_waterflow" type="radio" value="2and3" <?php if ($argon_article_list_waterflow=='2and3'){echo 'checked';} ?>> <?php _e('瀑布流 (列数自适应)', 'lyrargon');?></label>
							</div>
							<p class="description" style="margin-top: 15px;"><?php _e('列数自适应的瀑布流会根据可视区宽度自动调整瀑布流列数。', 'lyrargon');?><br/><?php _e('建议只有使用单栏页面布局时才开启 3 列瀑布流。', 'lyrargon');?><br/><?php _e('所有瀑布流布局都会在屏幕宽度过小时变为单列布局。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('文章列表卡片布局', 'lyrargon');?></label></th>
						<td>
							<div class="radio-with-img">
								<?php $argon_article_list_layout = get_option('lyrargon_article_list_layout', '1'); ?>
								<div class="radio-img">
									<svg width="250" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1921 871"><rect x="0.5" y="0.5" width="1920" height="870" style="fill:#f7f8f8;stroke:#231815;stroke-miterlimit:10"/><rect x="0.5" y="0.5" width="1920" height="538.05" style="fill:#2196f3"/><rect x="48.5" y="613.55" width="1806" height="35" rx="4" style="fill:#efefef"/><rect x="48.5" y="663.05" width="1806" height="35" rx="4" style="fill:#efefef"/><rect x="48.5" y="712.55" width="1806" height="35" rx="4" style="fill:#efefef"/><rect x="48.5" y="792.52" width="116.97" height="38.07" rx="4" style="fill:#dcdddd"/><rect x="178.95" y="792.52" width="97.38" height="38.07" rx="4" style="fill:#dcdddd"/><rect x="288.4" y="792.52" width="125.79" height="38.07" rx="4" style="fill:#dcdddd"/><g style="opacity:0.66"><rect x="432.78" y="320.9" width="1055.43" height="55.93" rx="4" style="fill:#f7f8f8"/></g><g style="opacity:0.31"><rect x="734.76" y="411.73" width="451.48" height="25.08" rx="4" style="fill:#fff"/></g><g style="opacity:0.31"><rect x="734.76" y="453.24" width="451.48" height="25.08" rx="4" style="fill:#fff"/></g></svg>
								</div>
								<label><input name="lyrargon_article_list_layout" type="radio" value="1" <?php if ($argon_article_list_layout=='1'){echo 'checked';} ?>> <?php _e('布局', 'lyrargon');?> 1</label>
							</div>
							<div class="radio-with-img">
								<div class="radio-img">
									<svg width="250" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 870"><rect width="1920" height="870" style="fill:#f7f8f8;stroke: #231815;stroke-miterlimit: 10;"/><rect width="630.03" height="870" style="fill:#2196f3"/><rect x="689.57" y="174.16" width="1144.6" height="35" rx="4" style="fill:#efefef"/><rect x="689.57" y="238.66" width="1144.6" height="35" rx="4" style="fill:#efefef"/><rect x="689.57" y="303.16" width="1144.6" height="35" rx="4" style="fill:#efefef"/><rect x="689.57" y="792.02" width="116.97" height="38.07" rx="4" style="fill:#dcdddd"/><rect x="820.02" y="792.02" width="97.38" height="38.07" rx="4" style="fill:#dcdddd"/><rect x="929.47" y="792.02" width="125.79" height="38.07" rx="4" style="fill:#dcdddd"/><g style="opacity:0.23"><rect x="689.57" y="52.26" width="1055.43" height="55.93" rx="4" style="fill:#2196f3"/></g><rect x="689.57" y="677.09" width="451.48" height="25.08" rx="4" style="fill:#efefef"/><rect x="689.57" y="718.6" width="451.48" height="25.08" rx="4" style="fill:#efefef"/><rect x="689.57" y="363.63" width="1144.6" height="35" rx="4" style="fill:#efefef"/><rect x="689.57" y="426.13" width="1144.6" height="35" rx="4" style="fill:#efefef"/><rect x="689.57" y="492.63" width="1144.6" height="35" rx="4" style="fill:#efefef"/></svg>
								</div>
								<label><input name="lyrargon_article_list_layout" type="radio" value="2" <?php if ($argon_article_list_layout=='2'){echo 'checked';} ?>> <?php _e('布局', 'lyrargon');?> 2</label>
							</div>
							<div class="radio-with-img">
								<div class="radio-img">
									<svg width="250" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1921 871"><rect x="0.5" y="0.5" width="1920" height="870" style="fill:#f7f8f8;stroke:#231815;stroke-miterlimit:10"/><rect x="0.5" y="0.5" width="1920" height="363.36" style="fill:#2196f3"/><rect x="48.5" y="613.55" width="1806" height="35" rx="4" style="fill:#efefef"/><rect x="48.5" y="663.05" width="1806" height="35" rx="4" style="fill:#efefef"/><rect x="48.5" y="712.55" width="1806" height="35" rx="4" style="fill:#efefef"/><rect x="48.5" y="792.52" width="116.97" height="38.07" rx="4" style="fill:#dcdddd"/><rect x="178.95" y="792.52" width="97.38" height="38.07" rx="4" style="fill:#dcdddd"/><rect x="288.4" y="792.52" width="125.79" height="38.07" rx="4" style="fill:#dcdddd"/><g style="opacity:0.23"><rect x="48.5" y="410.53" width="1055.43" height="55.93" rx="4" style="fill:#2196f3"/></g><rect x="48.2" y="500.22" width="451.48" height="25.08" rx="4" style="fill:#efefef"/><rect x="48.2" y="541.72" width="451.48" height="25.08" rx="4" style="fill:#efefef"/></svg>
								</div>
								<label><input name="lyrargon_article_list_layout" type="radio" value="3" <?php if ($argon_article_list_layout=='3'){echo 'checked';} ?>> <?php _e('布局', 'lyrargon');?> 3</label>
							</div>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('字体', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('默认字体', 'lyrargon');?></label></th>
						<td>
							<div class="radio-h">
								<?php $argon_font = (get_option('lyrargon_font') == '' ? 'sans-serif' : get_option('lyrargon_font')); ?>
								<label>
									<input name="lyrargon_font" type="radio" value="sans-serif" <?php if ($argon_font=='sans-serif'){echo 'checked';} ?>>
									Sans Serif
								</label>
								<label>
									<input name="lyrargon_font" type="radio" value="serif" <?php if ($argon_font=='serif'){echo 'checked';} ?>>
									Serif
								</label>
							</div>
							<p class="description"><?php _e('默认使用无衬线字体/衬线字体。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3>CDN</h3></th></tr>
					<tr>
						<th><label>CDN</label></th>
						<td>
							<select name="lyrargon_assets_path">
								<?php $argon_assets_path = get_option('lyrargon_assets_path'); ?>
								<option value="default" <?php if ($argon_assets_path=='default'){echo 'selected';} ?>><?php _e('不使用', 'lyrargon');?></option>
								<option value="lyrargon" <?php if ($argon_assets_path=='lyrargon'){echo 'selected';} ?>>Lyrargon</option>
								<option value="custom" <?php if ($argon_assets_path=='custom'){echo 'selected';} ?>><?php _e('自定义...', 'lyrargon');?></option>
							</select>
							<input type="text" class="regular-text" name="lyrargon_custom_assets_path" placeholder="https://" value="<?php echo get_option('lyrargon_custom_assets_path', ''); ?>" autocomplete="off">
							<p class="description"><?php _e('选择主题资源文件的引用地址。使用 CDN 可以加速资源文件的访问并减少服务器压力。', 'lyrargon');?></p>
							<p class="description custom-assets-path-desctiption"><?php _e('在自定义路径中使用 <code>%theme_version%</code> 来表示主题版本号。', 'lyrargon');?></p>
						</td>
						<script>
							$("select[name='lyrargon_assets_path']").change(function(){
								if ($(this).val() == 'custom') {
									$("input[name='lyrargon_custom_assets_path']").css('display', '');
									$(".custom-assets-path-desctiption").css('display', '');
								} else {
									$("input[name='lyrargon_custom_assets_path']").css('display', 'none');
									$(".custom-assets-path-desctiption").css('display', 'none');
								}
							}).change();
						</script>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('子目录', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('Wordpress 安装目录', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_wp_path" value="<?php echo get_option('lyrargon_wp_path', '/'); ?>"/>
							<p class="description"><?php _e('如果 Wordpress 安装在子目录中，请在此填写子目录地址（例如', 'lyrargon');?> <code>/blog/</code><?php _e('），注意前后各有一个斜杠。默认为', 'lyrargon');?> <code>/</code> <?php _e('。', 'lyrargon');?><br/><?php _e('如果不清楚该选项的用处，请保持默认。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('日期格式', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('日期格式', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_dateformat">
								<?php $argon_dateformat = get_option('lyrargon_dateformat'); ?>
								<option value="YMD" <?php if ($argon_dateformat=='YMD'){echo 'selected';} ?>>Y-M-D</option>
								<option value="DMY" <?php if ($argon_dateformat=='DMY'){echo 'selected';} ?>>D-M-Y</option>
								<option value="MDY" <?php if ($argon_dateformat=='MDY'){echo 'selected';} ?>>M-D-Y</option>
							</select>
							<p class="description"></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h2><?php _e('顶栏', 'lyrargon');?></h2></th></tr>
					<tr><th class="subtitle"><h3><?php _e('状态', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('顶栏显示状态', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_enable_headroom">
								<?php $argon_enable_headroom = get_option('lyrargon_enable_headroom'); ?>
								<option value="false" <?php if ($argon_enable_headroom=='false'){echo 'selected';} ?>><?php _e('始终固定悬浮', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_enable_headroom=='true'){echo 'selected';} ?>><?php _e('滚动时自动折叠', 'lyrargon');?></option>
								<option value="absolute" <?php if ($argon_enable_headroom=='absolute'){echo 'selected';} ?>><?php _e('不固定', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('始终固定悬浮: 永远固定悬浮在页面最上方', 'lyrargon');?><br/><?php _e('滚动时自动折叠: 在页面向下滚动时隐藏顶栏，向上滚动时显示顶栏', 'lyrargon');?><br/><?php _e('不固定: 只有在滚动到页面最顶端时才显示顶栏', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('标题', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('顶栏标题', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_toolbar_title" value="<?php echo get_option('lyrargon_toolbar_title'); ?>"/></p>
							<p class="description"><?php _e('留空则显示博客名称，输入 <code>--hidden--</code> 可以隐藏标题', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('顶栏图标', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('图标地址', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_toolbar_icon" value="<?php echo get_option('lyrargon_toolbar_icon'); ?>"/>
							<p class="description"><?php _e('图片地址，留空则不显示', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('图标链接', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_toolbar_icon_link" value="<?php echo get_option('lyrargon_toolbar_icon_link'); ?>"/>
							<p class="description"><?php _e('点击图标后会跳转到的链接，留空则不跳转', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('外观', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('顶栏毛玻璃效果', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_toolbar_blur">
								<?php $argon_toolbar_blur = get_option('lyrargon_toolbar_blur'); ?>
								<option value="false" <?php if ($argon_toolbar_blur=='false'){echo 'selected';} ?>><?php _e('关闭', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_toolbar_blur=='true'){echo 'selected';} ?>><?php _e('开启', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('开启会带来微小的性能损失。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h2><?php _e('顶部 Banner (封面)', 'lyrargon');?></h2></th></tr>
					<tr><th class="subtitle"><h3><?php _e('内容', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('Banner 标题', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_banner_title" value="<?php echo get_option('lyrargon_banner_title'); ?>"/>
							<p class="description"><?php _e('留空则显示博客名称', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('Banner 副标题', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_banner_subtitle" value="<?php echo get_option('lyrargon_banner_subtitle'); ?>"/>
							<p class="description"><?php _e('显示在 Banner 标题下，留空则不显示', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('外观', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('Banner 显示状态', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_banner_size">
							<?php $argon_banner_size = get_option('lyrargon_banner_size', 'full'); ?>
								<option value="full" <?php if ($argon_banner_size=='full'){echo 'selected';} ?>><?php _e('完整', 'lyrargon');?></option>
								<option value="mini" <?php if ($argon_banner_size=='mini'){echo 'selected';} ?>><?php _e('迷你', 'lyrargon');?></option>
								<option value="fullscreen" <?php if ($argon_banner_size=='fullscreen'){echo 'selected';} ?>><?php _e('全屏', 'lyrargon');?></option>
								<option value="hide" <?php if ($argon_banner_size=='hide'){echo 'selected';} ?>><?php _e('隐藏', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('完整: Banner 高度占用半屏', 'lyrargon');?><br/><?php _e('迷你: 减小 Banner 的内边距', 'lyrargon');?><br/><?php _e('全屏: Banner 占用全屏作为封面（仅在首页生效）', 'lyrargon');?><br/><?php _e('隐藏: 完全隐藏 Banner', 'lyrargon');?><br/></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('Banner 透明化', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_page_background_banner_style">
								<?php $argon_page_background_banner_style = get_option('lyrargon_page_background_banner_style'); ?>
								<option value="false" <?php if ($argon_page_background_banner_style=='false'){echo 'selected';} ?>><?php _e('关闭', 'lyrargon');?></option>
								<option value="transparent" <?php if ($argon_page_background_banner_style=='transparent' || ($argon_page_background_banner_style!='' && $argon_page_background_banner_style!='false')){echo 'selected';} ?>><?php _e('开启', 'lyrargon');?></option>
							</select>
							<div style="margin-top: 15px;margin-bottom: 15px;">
								<label>
									<?php $argon_show_toolbar_mask = get_option('lyrargon_show_toolbar_mask');?>
									<input type="checkbox" name="lyrargon_show_toolbar_mask" value="true" <?php if ($argon_show_toolbar_mask=='true'){echo 'checked';}?>/>	<?php _e('在顶栏添加浅色遮罩，Banner 标题添加阴影（当背景过亮影响文字阅读时勾选）', 'lyrargon');?>
								</label>
							</div>
							<p class="description"><?php _e('Banner 透明化可以使博客背景沉浸。建议在设置背景时开启此选项。该选项仅会在设置页面背景时生效。', 'lyrargon');?><br/><?php _e('开启后，Banner 背景图和渐变背景选项将失效。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('Banner 背景图 (地址)', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_banner_background_url" value="<?php echo get_option('lyrargon_banner_background_url'); ?>"/>
							<p class="description"><?php _e('需带上 http(s) ，留空则显示默认背景', 'lyrargon');?><br/><?php _e('输入', 'lyrargon');?> <code>--bing--</code> <?php _e('调用必应每日一图', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('Banner 渐变背景样式', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_banner_background_color_type">
								<?php $color_type = get_option('lyrargon_banner_background_color_type'); ?>
								<option value="shape-primary" <?php if ($color_type=='shape-primary'){echo 'selected';} ?>><?php _e('样式', 'lyrargon');?> 1</option>
								<option value="shape-default" <?php if ($color_type=='shape-default'){echo 'selected';} ?>><?php _e('样式', 'lyrargon');?> 2</option>
								<option value="shape-dark" <?php if ($color_type=='shape-dark'){echo 'selected';} ?>><?php _e('样式', 'lyrargon');?> 3</option>
								<option value="bg-gradient-success" <?php if ($color_type=='bg-gradient-success'){echo 'selected';} ?>><?php _e('样式', 'lyrargon');?> 4</option>
								<option value="bg-gradient-info" <?php if ($color_type=='bg-gradient-info'){echo 'selected';} ?>><?php _e('样式', 'lyrargon');?> 5</option>
								<option value="bg-gradient-warning" <?php if ($color_type=='bg-gradient-warning'){echo 'selected';} ?>><?php _e('样式', 'lyrargon');?> 6</option>
								<option value="bg-gradient-danger" <?php if ($color_type=='bg-gradient-danger'){echo 'selected';} ?>><?php _e('样式', 'lyrargon');?> 7</option>
							</select>
							<?php $hide_shapes = get_option('lyrargon_banner_background_hide_shapes'); ?>
							<label>
								<input type="checkbox" name="lyrargon_banner_background_hide_shapes" value="true" <?php if ($hide_shapes=='true'){echo 'checked';}?>/>	<?php _e('隐藏背景半透明圆', 'lyrargon');?>
							</label>
							<p class="description"><strong><?php _e('如果设置了背景图则不生效', 'lyrargon');?></strong>
								<br/><div style="margin-top: 15px;"><?php _e('样式预览 (推荐选择前三个样式)', 'lyrargon');?></div>
								<div style="margin-top: 10px;">
									<div class="banner-background-color-type-preview" style="background:linear-gradient(150deg,#281483 15%,#8f6ed5 70%,#d782d9 94%);"><?php _e('样式', 'lyrargon');?> 1</div>
									<div class="banner-background-color-type-preview" style="background:linear-gradient(150deg,#7795f8 15%,#6772e5 70%,#555abf 94%);"><?php _e('样式', 'lyrargon');?> 2</div>
									<div class="banner-background-color-type-preview" style="background:linear-gradient(150deg,#32325d 15%,#32325d 70%,#32325d 94%);"><?php _e('样式', 'lyrargon');?> 3</div>
									<div class="banner-background-color-type-preview" style="background:linear-gradient(87deg,#2dce89 0,#2dcecc 100%);"><?php _e('样式', 'lyrargon');?> 4</div>
									<div class="banner-background-color-type-preview" style="background:linear-gradient(87deg,#11cdef 0,#1171ef 100%);"><?php _e('样式', 'lyrargon');?> 5</div>
									<div class="banner-background-color-type-preview" style="background:linear-gradient(87deg,#fb6340 0,#fbb140 100%);"><?php _e('样式', 'lyrargon');?> 6</div>
									<div class="banner-background-color-type-preview" style="background:linear-gradient(87deg,#f5365c 0,#f56036 100%);"><?php _e('样式', 'lyrargon');?> 7</div>
								</div>
								<style>
									div.banner-background-color-type-preview{width:100px;height:50px;line-height:50px;color:#fff;margin-right:0px;font-size:15px;text-align:center;display:inline-block;border-radius:5px;transition:all .3s ease;}
									div.banner-background-color-type-preview:hover{transform: scale(1.2);}
								</style>
							</p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('动画', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('Banner 标题打字动画', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_enable_banner_title_typing_effect">
							<?php $argon_enable_banner_title_typing_effect = get_option('lyrargon_enable_banner_title_typing_effect'); ?>
								<option value="false" <?php if ($argon_enable_banner_title_typing_effect=='false'){echo 'selected';} ?>><?php _e('不启用', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_enable_banner_title_typing_effect=='true'){echo 'selected';} ?>><?php _e('启用', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('启用后 Banner 标题会以打字的形式出现。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('Banner 标题打字动画时长', 'lyrargon');?></label></th>
						<td>
							<input type="number" name="lyrargon_banner_typing_effect_interval" min="1" max="10000"  value="<?php echo (get_option('lyrargon_banner_typing_effect_interval') == '' ? '100' : get_option('lyrargon_banner_typing_effect_interval')); ?>"/> <?php _e('ms/字', 'lyrargon');?>
							<p class="description"></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h2><?php _e('页面背景', 'lyrargon');?></h2></th></tr>
					<tr>
						<th><label><?php _e('页面背景', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_page_background_url" value="<?php echo get_option('lyrargon_page_background_url'); ?>"/>
							<p class="description"><?php _e('页面背景的地址，需带上 http(s)。留空则不设置页面背景。如果设置了背景，推荐开启 Banner 透明化。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('页面背景（夜间模式时）', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_page_background_dark_url" value="<?php echo get_option('lyrargon_page_background_dark_url'); ?>"/>
							<p class="description"><?php _e('夜间模式时页面背景的地址，需带上 http(s)。设置后日间模式和夜间模式会使用不同的背景。留空则跟随日间模式背景。该选项仅在设置了日间模式背景时生效。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('背景不透明度', 'lyrargon');?></label></th>
						<td>
							<input type="number" name="lyrargon_page_background_opacity" min="0" max="1" step="0.01" value="<?php echo (get_option('lyrargon_page_background_opacity') == '' ? '1' : get_option('lyrargon_page_background_opacity')); ?>"/>
							<p class="description"><?php _e('0 ~ 1 的小数，越小透明度越高，默认为 1 不透明', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h2><?php _e('左侧栏', 'lyrargon');?></h2></th></tr>
					<tr>
						<th><label><?php _e('左侧栏标题', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_sidebar_banner_title" value="<?php echo get_option('lyrargon_sidebar_banner_title'); ?>"/>
							<p class="description"><?php _e('留空则显示博客名称', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('左侧栏子标题（格言）', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_sidebar_banner_subtitle" value="<?php echo get_option('lyrargon_sidebar_banner_subtitle'); ?>"/>
							<p class="description"><?php _e('留空则不显示', 'lyrargon');?><br/><?php _e('输入', 'lyrargon');?> <code>--hitokoto--</code> <?php _e('调用一言 API', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('左侧栏作者名称', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_sidebar_auther_name" value="<?php echo get_option('lyrargon_sidebar_auther_name'); ?>"/>
							<p class="description"><?php _e('留空则显示博客名', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('左侧栏作者头像地址', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_sidebar_auther_image" value="<?php echo get_option('lyrargon_sidebar_auther_image'); ?>"/>
							<p class="description"><?php _e('需带上 http(s) 开头', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('左侧栏作者简介', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_sidebar_author_description" value="<?php echo get_option('lyrargon_sidebar_author_description'); ?>"/>
							<p class="description"><?php _e('留空则不显示', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h2><?php _e('博客公告', 'lyrargon');?></h2></th></tr>
					<tr>
						<th><label><?php _e('公告内容', 'lyrargon');?></label></th>
						<td>
							<textarea type="text" rows="5" cols="50" name="lyrargon_sidebar_announcement"><?php echo htmlspecialchars(get_option('lyrargon_sidebar_announcement')); ?></textarea>
							<p class="description"><?php _e('显示在左侧栏顶部，留空则不显示，支持 HTML 标签', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h2><?php _e('浮动操作按钮', 'lyrargon');?></h2></th></tr>
					<tr><th class="subtitle"><p class="description"><?php _e('浮动操作按钮位于页面右下角（或左下角）', 'lyrargon');?></p></th></tr>
					<tr>
						<th><label><?php _e('显示设置按钮', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_fab_show_settings_button">
							<?php $argon_fab_show_settings_button = get_option('lyrargon_fab_show_settings_button'); ?>
								<option value="true" <?php if ($argon_fab_show_settings_button=='true'){echo 'selected';} ?>><?php _e('显示', 'lyrargon');?></option>
								<option value="false" <?php if ($argon_fab_show_settings_button=='false'){echo 'selected';} ?>><?php _e('不显示', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('是否在浮动操作按钮栏中显示设置按钮。点击设置按钮可以唤出设置菜单修改夜间模式/字体/滤镜等外观选项。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('显示夜间模式切换按钮', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_fab_show_darkmode_button">
							<?php $argon_fab_show_darkmode_button = get_option('lyrargon_fab_show_darkmode_button'); ?>
								<option value="false" <?php if ($argon_fab_show_darkmode_button=='false'){echo 'selected';} ?>><?php _e('不显示', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_fab_show_darkmode_button=='true'){echo 'selected';} ?>><?php _e('显示', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('如果开启了设置按钮显示，建议关闭此选项。（夜间模式选项在设置菜单中已经存在）', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('显示跳转到评论按钮', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_fab_show_gotocomment_button">
							<?php $argon_fab_show_gotocomment_button = get_option('lyrargon_fab_show_gotocomment_button'); ?>
								<option value="false" <?php if ($argon_fab_show_gotocomment_button=='false'){echo 'selected';} ?>><?php _e('不显示', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_fab_show_gotocomment_button=='true'){echo 'selected';} ?>><?php _e('显示', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('仅在允许评论的文章中显示', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h2>SEO</h2></th></tr>
					<tr>
						<th><label><?php _e('网站描述 (Description Meta 标签)', 'lyrargon');?></label></th>
						<td>
							<textarea type="text" rows="5" cols="100" name="lyrargon_seo_description"><?php echo htmlspecialchars(get_option('lyrargon_seo_description')); ?></textarea>
							<p class="description"><?php _e('设置针对搜索引擎的 Description Meta 标签内容。', 'lyrargon');?><br/><?php _e('在文章中，Lyrargon 会自动根据文章内容生成描述。在其他页面中，Lyrargon 将使用这里设置的内容。如不填，Lyrargon 将不会在其他页面输出 Description Meta 标签。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('搜索引擎关键词（Keywords Meta 标签）', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_seo_keywords" value="<?php echo get_option('lyrargon_seo_keywords'); ?>"/>
							<p class="description"><?php _e('设置针对搜索引擎使用的关键词（Keywords Meta 标签内容）。用英文逗号隔开。不设置则不输出该 Meta 标签。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h2><?php _e('文章', 'lyrargon');?></h2></th></tr>
					<tr><th class="subtitle"><h3><?php _e('文章 Meta 信息', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('第一行', 'lyrargon');?></label></th>
						<style>
							.article-meta-container {
								margin-top: 10px;
								margin-bottom: 15px;
								width: calc(100% - 250px);
							}
							@media screen and (max-width:960px){
								.article-meta-container {
									width: 100%;
								}
							}
							#article_meta_active, #article_meta_inactive {
								background: rgba(0, 0, 0, .05);
								padding: 10px 15px;
								margin-top: 10px;
								border-radius: 5px;
								padding-bottom: 0;
								min-height: 48px;
								box-sizing: border-box;
							}
							.article-meta-item {
								background: #fafafa;
								width: max-content !important;
								height: max-content !important;
								border-radius: 100px;
								padding: 5px 15px;
								cursor: move;
								display: inline-block;
								margin-right: 8px;
								margin-bottom: 10px;
							}
						</style>
						<td>
							<input type="text" class="regular-text" name="lyrargon_article_meta" value="<?php echo get_option('lyrargon_article_meta', 'time|views|comments|categories'); ?>" style="display: none;"/>
							<?php _e('拖动来自定义文章 Meta 信息的显示和顺序', 'lyrargon');?>
							<div class="article-meta-container">
								<?php _e('显示', 'lyrargon');?>
								<div id="article_meta_active"></div>
							</div>
							<div class="article-meta-container">
								<?php _e('不显示', 'lyrargon');?>
								<div id="article_meta_inactive">
									<div class="article-meta-item" meta-name="time"><?php _e('发布时间', 'lyrargon');?></div>
									<div class="article-meta-item" meta-name="edittime"><?php _e('修改时间', 'lyrargon');?></div>
									<div class="article-meta-item" meta-name="views"><?php _e('浏览量', 'lyrargon');?></div>
									<div class="article-meta-item" meta-name="comments"><?php _e('评论数', 'lyrargon');?></div>
									<div class="article-meta-item" meta-name="categories"><?php _e('所属分类', 'lyrargon');?></div>
									<div class="article-meta-item" meta-name="author"><?php _e('作者', 'lyrargon');?></div>
								</div>
							</div>
						</td>
						<script>
							!function(){
								let articleMeta = $("input[name='lyrargon_article_meta']").val().split("|");
								for (metaName of articleMeta){
									let itemDiv = $("#article_meta_inactive .article-meta-item[meta-name='"+ metaName + "']");
									$("#article_meta_active").append(itemDiv.prop("outerHTML"));
									itemDiv.remove();
								}
							}();
							dragula(
								[document.querySelector('#article_meta_active'), document.querySelector('#article_meta_inactive')],
								{
									direction: 'vertical'
								}
							).on('dragend', function(){
								let articleMeta = "";
								$("#article_meta_active .article-meta-item").each(function(index, item) {
									if (index != 0){
										articleMeta += "|";
									}
									articleMeta += item.getAttribute("meta-name");
								});
								$("input[name='lyrargon_article_meta']").val(articleMeta);
							});
						</script>
					</tr>
					<tr><th class="subtitle"><h4><?php _e('第二行', 'lyrargon');?></h4></th></tr>
					<tr>
						<th><label><?php _e('显示字数和预计阅读时间', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_show_readingtime">
								<?php $argon_show_readingtime = get_option('lyrargon_show_readingtime'); ?>
								<option value="true" <?php if ($argon_show_readingtime=='true'){echo 'selected';} ?>><?php _e('显示', 'lyrargon');?></option>
								<option value="false" <?php if ($argon_show_readingtime=='false'){echo 'selected';} ?>><?php _e('不显示', 'lyrargon');?></option>
							</select>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('每分钟阅读字数（中文）', 'lyrargon');?></label></th>
						<td>
							<input type="number" name="lyrargon_reading_speed" min="1" max="5000"  value="<?php echo (get_option('lyrargon_reading_speed') == '' ? '300' : get_option('lyrargon_reading_speed')); ?>"/>
							<?php _e('字/分钟', 'lyrargon');?>
							<p class="description"></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('每分钟阅读单词数（英文）', 'lyrargon');?></label></th>
						<td>
							<input type="number" name="lyrargon_reading_speed_en" min="1" max="5000"  value="<?php echo (get_option('lyrargon_reading_speed_en') == '' ? '160' : get_option('lyrargon_reading_speed_en')); ?>"/>
							<?php _e('单词/分钟', 'lyrargon');?>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('每分钟阅读代码行数', 'lyrargon');?></label></th>
						<td>
							<input type="number" name="lyrargon_reading_speed_code" min="1" max="5000"  value="<?php echo (get_option('lyrargon_reading_speed_code') == '' ? '20' : get_option('lyrargon_reading_speed_code')); ?>"/>
							<?php _e('行/分钟', 'lyrargon');?>
							<p class="description"><?php _e('预计阅读时间由每分钟阅读字数计算', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('文章头图 (特色图片)', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('文章头图的位置', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_show_thumbnail_in_banner_in_content_page">
								<?php $argon_show_thumbnail_in_banner_in_content_page = get_option('lyrargon_show_thumbnail_in_banner_in_content_page'); ?>
								<option value="false" <?php if ($argon_show_thumbnail_in_banner_in_content_page=='false'){echo 'selected';} ?>><?php _e('文章卡片顶端', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_show_thumbnail_in_banner_in_content_page=='true'){echo 'selected';} ?>><?php _e('Banner (顶部背景)', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('阅读界面中文章头图的位置', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('默认使用文章中第一张图作为头图', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_first_image_as_thumbnail_by_default">
								<?php $argon_first_image_as_thumbnail_by_default = get_option('lyrargon_first_image_as_thumbnail_by_default'); ?>
								<option value="false" <?php if ($argon_first_image_as_thumbnail_by_default=='false'){echo 'selected';} ?>><?php _e('禁用', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_first_image_as_thumbnail_by_default=='true'){echo 'selected';} ?>><?php _e('启用', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('也可以针对每篇文章单独设置', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('脚注(引用)', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('脚注列表标题', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_reference_list_title" value="<?php echo (get_option('lyrargon_reference_list_title') == "" ? __('参考', 'lyrargon') : get_option('lyrargon_reference_list_title')); ?>"/>
							<p class="description"><?php _e('脚注列表显示在文末，在文章中有脚注的时候会显示。<br/>使用 <code>ref</code> 短代码可以在文中插入脚注。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('分享', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('显示文章分享按钮', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_show_sharebtn">
								<?php $argon_show_sharebtn = get_option('lyrargon_show_sharebtn'); ?>
								<option value="true" <?php if ($argon_show_sharebtn=='true'){echo 'selected';} ?>><?php _e('显示全部社交媒体', 'lyrargon');?></option>
								<option value="domestic" <?php if ($argon_show_sharebtn=='domestic'){echo 'selected';} ?>><?php _e('显示国内社交媒体', 'lyrargon');?></option>
								<option value="abroad" <?php if ($argon_show_sharebtn=='abroad'){echo 'selected';} ?>><?php _e('显示国外社交媒体', 'lyrargon');?></option>
								<option value="false" <?php if ($argon_show_sharebtn=='false'){echo 'selected';} ?>><?php _e('不显示', 'lyrargon');?></option>
							</select>
							<p class="description"></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('左侧栏文章目录', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('在目录中显示序号', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_show_headindex_number">
								<?php $argon_show_headindex_number = get_option('lyrargon_show_headindex_number'); ?>
								<option value="false" <?php if ($argon_show_headindex_number=='false'){echo 'selected';} ?>><?php _e('不显示', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_show_headindex_number=='true'){echo 'selected';} ?>><?php _e('显示', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('例：3.2.5', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('赞赏', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('赞赏二维码图片链接', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_donate_qrcode_url" value="<?php echo get_option('lyrargon_donate_qrcode_url'); ?>"/>
							<p class="description"><?php _e('赞赏二维码图片链接，填写后会在文章最后显示赞赏按钮，留空则不显示赞赏按钮', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('文末附加内容', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('文末附加内容', 'lyrargon');?></label></th>
						<td>
							<textarea type="text" rows="5" cols="100" name="lyrargon_additional_content_after_post"><?php echo htmlspecialchars(get_option('lyrargon_additional_content_after_post')); ?></textarea>
							<p class="description"><?php _e('将会显示在每篇文章末尾，支持 HTML 标签，留空则不显示。', 'lyrargon');?><br/><?php _e('使用 <code>%url%</code> 来代替当前页面 URL，<code>%link%</code> 来代替当前页面链接，<code>%title%</code> 来代替当前文章标题，<code>%author%</code> 来代替当前文章作者。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('相似文章推荐', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('相似文章推荐', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_related_post">
								<?php $argon_related_post = get_option('lyrargon_related_post'); ?>
								<option value="disabled" <?php if ($argon_related_post=='disabled'){echo 'selected';} ?>><?php _e('关闭', 'lyrargon');?></option>
								<option value="category" <?php if ($argon_related_post=='category'){echo 'selected';} ?>><?php _e('根据分类推荐', 'lyrargon');?></option>
								<option value="tag" <?php if ($argon_related_post=='tag'){echo 'selected';} ?>><?php _e('根据标签推荐', 'lyrargon');?></option>
								<option value="category,tag" <?php if ($argon_related_post=='category,tag'){echo 'selected';} ?>><?php _e('根据分类和标签推荐', 'lyrargon');?></option>
							<p class="description"><?php _e('显示在文章卡片后', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('排序依据', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_related_post_sort_orderby">
								<?php $argon_related_post_sort_orderby = get_option('lyrargon_related_post_sort_orderby'); ?>
								<option value="date" <?php if ($argon_related_post_sort_orderby=='date'){echo 'selected';} ?>><?php _e('发布时间', 'lyrargon');?></option>
								<option value="modified" <?php if ($argon_related_post_sort_orderby=='modified'){echo 'selected';} ?>><?php _e('修改时间', 'lyrargon');?></option>
								<option value="meta_value_num" <?php if ($argon_related_post_sort_orderby=='meta_value_num'){echo 'selected';} ?>><?php _e('阅读量', 'lyrargon');?></option>
								<option value="ID" <?php if ($argon_related_post_sort_orderby=='ID'){echo 'selected';} ?>>ID</option>
								<option value="title" <?php if ($argon_related_post_sort_orderby=='title'){echo 'selected';} ?>><?php _e('标题', 'lyrargon');?></option>
								<option value="author" <?php if ($argon_related_post_sort_orderby=='author'){echo 'selected';} ?>><?php _e('作者', 'lyrargon');?></option>
								<option value="rand" <?php if ($argon_related_post_sort_orderby=='rand'){echo 'selected';} ?>><?php _e('随机', 'lyrargon');?></option>
							<p class="description"></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('顺序', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_related_post_sort_order">
								<?php $argon_related_post_sort_order = get_option('lyrargon_related_post_sort_order'); ?>
								<option value="DESC" <?php if ($argon_related_post_sort_order=='DESC'){echo 'selected';} ?>><?php _e('倒序', 'lyrargon');?></option>
								<option value="ASC" <?php if ($argon_related_post_sort_order=='ASC'){echo 'selected';} ?>><?php _e('正序', 'lyrargon');?></option>
							<p class="description"></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('推荐文章数', 'lyrargon');?></label></th>
						<td>
							<input type="number" name="lyrargon_related_post_limit" min="1" max="100" value="<?php echo get_option('lyrargon_related_post_limit' , '10'); ?>"/>
							<p class="description"><?php _e('最多推荐多少篇文章', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('文章内标题样式', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('文章内标题样式', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_article_header_style">
								<?php $argon_article_header_style = get_option('lyrargon_article_header_style'); ?>
								<option value="article-header-style-default" <?php if ($argon_article_header_style=='article-header-style-default'){echo 'selected';} ?>><?php _e('默认样式', 'lyrargon');?></option>
								<option value="article-header-style-1" <?php if ($argon_article_header_style=='article-header-style-1'){echo 'selected';} ?>><?php _e('样式 1', 'lyrargon');?></option>
								<option value="article-header-style-2" <?php if ($argon_article_header_style=='article-header-style-2'){echo 'selected';} ?>><?php _e('样式 2', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('样式预览', 'lyrargon');?> :<br/>
								<div class="article-header-style-preview style-default"><?php _e('默认样式', 'lyrargon');?></div>
								<div class="article-header-style-preview style-1"><?php _e('样式 1', 'lyrargon');?></div>
								<div class="article-header-style-preview style-2"><?php _e('样式 2', 'lyrargon');?></div>
								<style>
									.article-header-style-preview{
										font-size: 26px;
										position: relative;
									}
									.article-header-style-preview.style-1:after {
										content: '';
										display: block;
										position: absolute;
										background: #2196f3;
										opacity: .25;
										pointer-events: none;
										border-radius: 15px;
										left: -2px;
										bottom: 0px;
										width: 45px;
										height: 13px;
									}
									.article-header-style-preview.style-2:before {
										content: '';
										display: inline-block;
										background: #2196f3;
										opacity: 1;
										pointer-events: none;
										border-radius: 15px;
										width: 6px;
										vertical-align: middle;
										margin-right: 12px;
										height: 20px;
										transform: translateY(-1px);
									}
								</style>
							</p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('其他', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('文章过时信息显示', 'lyrargon');?></label></th>
						<td>
							<?php _e('当一篇文章的', 'lyrargon');?>
							<select name="lyrargon_outdated_info_time_type">
								<?php $argon_outdated_info_time_type = get_option('lyrargon_outdated_info_time_type'); ?>
								<option value="modifiedtime" <?php if ($argon_outdated_info_time_type=='modifiedtime'){echo 'selected';} ?>><?php _e('最后修改时间', 'lyrargon');?></option>
								<option value="createdtime" <?php if ($argon_outdated_info_time_type=='createdtime'){echo 'selected';} ?>><?php _e('发布时间', 'lyrargon');?></option>
							</select>
							<?php _e('距离现在超过', 'lyrargon');?>
							<input type="number" name="lyrargon_outdated_info_days" min="-1" max="99999"  value="<?php echo (get_option('lyrargon_outdated_info_days') == '' ? '-1' : get_option('lyrargon_outdated_info_days')); ?>"/>
							<?php _e('天时，用', 'lyrargon');?>
							<select name="lyrargon_outdated_info_tip_type">
								<?php $argon_outdated_info_tip_type = get_option('lyrargon_outdated_info_tip_type'); ?>
								<option value="inpost" <?php if ($argon_outdated_info_tip_type=='inpost'){echo 'selected';} ?>><?php _e('在文章顶部显示信息条', 'lyrargon');?></option>
								<option value="toast" <?php if ($argon_outdated_info_tip_type=='toast'){echo 'selected';} ?>><?php _e('在页面右上角弹出提示条', 'lyrargon');?></option>
							</select>
							<?php _e('的方式提示', 'lyrargon');?>
							<br/>
							<textarea type="text" name="lyrargon_outdated_info_tip_content" rows="3" cols="100" style="margin-top: 15px;"><?php echo get_option('lyrargon_outdated_info_tip_content') == '' ? __('本文最后更新于 %date_delta% 天前，其中的信息可能已经有所发展或是发生改变。', 'lyrargon') : get_option('lyrargon_outdated_info_tip_content'); ?></textarea>
							<p class="description"><?php _e('天数为 -1 表示永不提示。', 'lyrargon');?><br/><code>%date_delta%</code> <?php _e('表示文章发布/修改时间与当前时间的差距，', 'lyrargon');?><code>%post_date_delta%</code> <?php _e('表示文章发布时间与当前时间的差距，', 'lyrargon');?><code>%modify_date_delta%</code> <?php _e('表示文章修改时间与当前时间的差距（单位: 天）。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h2><?php _e('归档页面', 'lyrargon');?></h2></th></tr>
					<tr>
						<th><label><?php _e('介绍', 'lyrargon');?></label></th>
						<td>
							<p class="description"><?php _e('新建一个页面，并将其模板设为 "归档时间轴"，即可创建一个归档页面。归档页面会按照时间顺序在时间轴上列出博客的所有文章。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('外观', 'lyrargon');?></h3></h3></th></tr>
					<tr>
						<th><label><?php _e('在时间轴上显示月份', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_archives_timeline_show_month">
								<?php $argon_archives_timeline_show_month = get_option('lyrargon_archives_timeline_show_month'); ?>
								<option value="true" <?php if ($argon_archives_timeline_show_month=='true'){echo 'selected';} ?>><?php _e('显示', 'lyrargon');?></option>
								<option value="false" <?php if ($argon_archives_timeline_show_month=='false'){echo 'selected';} ?>><?php _e('不显示', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('关闭后，时间轴只会按年份分节', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('配置', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('归档页面链接', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_archives_timeline_url" value="<?php echo get_option('lyrargon_archives_timeline_url'); ?>"/>
							<p class="description"><?php _e('归档页面的 URL。点击左侧栏 "博客概览" 中的 "博文总数" 一栏时可跳转到该地址。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h2><?php _e('页脚', 'lyrargon');?></h2></th></tr>
					<tr>
						<th><label><?php _e('页脚内容', 'lyrargon');?></label></th>
						<td>
							<textarea type="text" rows="15" cols="100" name="lyrargon_footer_html"><?php echo htmlspecialchars(get_option('lyrargon_footer_html')); ?></textarea>
							<p class="description"><?php _e('HTML , 支持 script 等标签', 'lyrargon');?><br/><strong style="color:#a00;"><?php _e('安全提示：仅管理员可填写；此处内容存入数据库后会原样输出到前台，请仅填入可信代码。', 'lyrargon');?></strong></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h2><?php _e('代码高亮', 'lyrargon');?></h2></th></tr>
					<tr>
						<th><label><?php _e('启用 Highlight.js 代码高亮', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_enable_code_highlight">
								<?php $argon_enable_code_highlight = get_option('lyrargon_enable_code_highlight'); ?>
								<option value="false" <?php if ($argon_enable_code_highlight=='false'){echo 'selected';} ?>><?php _e('不启用', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_enable_code_highlight=='true'){echo 'selected';} ?>><?php _e('启用', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('所有 pre 下的 code 标签会被自动解析', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('高亮配色方案（主题）', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_code_theme">
								<?php
								$argon_code_themes_list = array("a11y-dark", "a11y-light", "agate", "an-old-hope", "androidstudio", "arduino-light", "arta", "ascetic", "atelier-cave-dark", "atelier-cave-light", "atelier-dune-dark", "atelier-dune-light", "atelier-estuary-dark", "atelier-estuary-light", "atelier-forest-dark", "atelier-forest-light", "atelier-heath-dark", "atelier-heath-light", "atelier-lakeside-dark", "atelier-lakeside-light", "atelier-plateau-dark", "atelier-plateau-light", "atelier-savanna-dark", "atelier-savanna-light", "atelier-seaside-dark", "atelier-seaside-light", "atelier-sulphurpool-dark", "atelier-sulphurpool-light", "atom-one-dark-reasonable", "atom-one-dark", "atom-one-light", "brown-paper", "codepen-embed", "color-brewer", "darcula", "dark", "darkula", "default", "devibeans", "docco", "dracula", "far", "felipec", "foundation", "github-dark-dimmed", "github-dark", "github-gist", "github", "gml", "googlecode", "gradient-dark", "gradient-light", "grayscale", "gruvbox-dark", "gruvbox-light", "hopscotch", "hybrid", "idea", "intellij-light", "ir-black", "isbl-editor-dark", "isbl-editor-light", "kimbie-dark", "kimbie-light", "kimbie.dark", "kimbie.light", "lightfair", "lioshi", "magula", "mono-blue", "monokai-sublime", "monokai", "night-owl", "nnfx-dark", "nnfx-light", "nnfx", "nord", "obsidian", "ocean", "onedark", "paraiso-dark", "paraiso-light", "pojoaque", "pojoaque.jpg", "purebasic", "qtcreator-dark", "qtcreator-light", "railscasts", "rainbow", "routeros", "school-book", "shades-of-purple", "solarized-dark", "solarized-light", "srcery", "stackoverflow-dark", "stackoverflow-light", "sunburst", "tokyo-night-dark", "tomorrow-night-blue", "tomorrow-night-bright", "tomorrow-night-eighties", "tomorrow-night", "tomorrow", "vs", "vs2015", "xcode", "xt256", "zenburn", "base16/3024", "base16/apathy", "base16/apprentice", "base16/ashes", "base16/atelier-cave-light", "base16/atelier-cave", "base16/atelier-dune-light", "base16/atelier-dune", "base16/atelier-estuary-light", "base16/atelier-estuary", "base16/atelier-forest-light", "base16/atelier-forest", "base16/atelier-heath-light", "base16/atelier-heath", "base16/atelier-lakeside-light", "base16/atelier-lakeside", "base16/atelier-plateau-light", "base16/atelier-plateau", "base16/atelier-savanna-light", "base16/atelier-savanna", "base16/atelier-seaside-light", "base16/atelier-seaside", "base16/atelier-sulphurpool-light", "base16/atelier-sulphurpool", "base16/atlas", "base16/bespin", "base16/black-metal-bathory", "base16/black-metal-burzum", "base16/black-metal-dark-funeral", "base16/black-metal-gorgoroth", "base16/black-metal-immortal", "base16/black-metal-khold", "base16/black-metal-marduk", "base16/black-metal-mayhem", "base16/black-metal-nile", "base16/black-metal-venom", "base16/black-metal", "base16/brewer", "base16/bright", "base16/brogrammer", "base16/brush-trees-dark", "base16/brush-trees", "base16/chalk", "base16/circus", "base16/classic-dark", "base16/classic-light", "base16/codeschool", "base16/colors", "base16/cupcake", "base16/cupertino", "base16/danqing", "base16/darcula", "base16/dark-violet", "base16/darkmoss", "base16/darktooth", "base16/decaf", "base16/default-dark", "base16/default-light", "base16/dirtysea", "base16/dracula", "base16/edge-dark", "base16/edge-light", "base16/eighties", "base16/embers", "base16/equilibrium-dark", "base16/equilibrium-gray-dark", "base16/equilibrium-gray-light", "base16/equilibrium-light", "base16/espresso", "base16/eva-dim", "base16/eva", "base16/flat", "base16/framer", "base16/fruit-soda", "base16/gigavolt", "base16/github", "base16/google-dark", "base16/google-light", "base16/grayscale-dark", "base16/grayscale-light", "base16/green-screen", "base16/gruvbox-dark-hard", "base16/gruvbox-dark-medium", "base16/gruvbox-dark-pale", "base16/gruvbox-dark-soft", "base16/gruvbox-light-hard", "base16/gruvbox-light-medium", "base16/gruvbox-light-soft", "base16/hardcore", "base16/harmonic16-dark", "base16/harmonic16-light", "base16/heetch-dark", "base16/heetch-light", "base16/helios", "base16/hopscotch", "base16/horizon-dark", "base16/horizon-light", "base16/humanoid-dark", "base16/humanoid-light", "base16/ia-dark", "base16/ia-light", "base16/icy-dark", "base16/ir-black", "base16/isotope", "base16/kimber", "base16/london-tube", "base16/macintosh", "base16/marrakesh", "base16/materia", "base16/material-darker", "base16/material-lighter", "base16/material-palenight", "base16/material-vivid", "base16/material", "base16/mellow-purple", "base16/mexico-light", "base16/mocha", "base16/monokai", "base16/nebula", "base16/nord", "base16/nova", "base16/ocean", "base16/oceanicnext", "base16/one-light", "base16/onedark", "base16/outrun-dark", "base16/papercolor-dark", "base16/papercolor-light", "base16/paraiso", "base16/pasque", "base16/phd", "base16/pico", "base16/pop", "base16/porple", "base16/qualia", "base16/railscasts", "base16/rebecca", "base16/ros-pine-dawn", "base16/ros-pine-moon", "base16/ros-pine", "base16/sagelight", "base16/sandcastle", "base16/seti-ui", "base16/shapeshifter", "base16/silk-dark", "base16/silk-light", "base16/snazzy", "base16/solar-flare-light", "base16/solar-flare", "base16/solarized-dark", "base16/solarized-light", "base16/spacemacs", "base16/summercamp", "base16/summerfruit-dark", "base16/summerfruit-light", "base16/synth-midnight-terminal-dark", "base16/synth-midnight-terminal-light", "base16/tango", "base16/tender", "base16/tomorrow-night", "base16/tomorrow", "base16/twilight", "base16/unikitty-dark", "base16/unikitty-light", "base16/vulcan", "base16/windows-10-light", "base16/windows-10", "base16/windows-95-light", "base16/windows-95", "base16/windows-high-contrast-light", "base16/windows-high-contrast", "base16/windows-nt-light", "base16/windows-nt", "base16/woodland", "base16/xcode-dusk", "base16/zenburn");
								$argon_code_theme = get_option('lyrargon_code_theme');
								if ($argon_code_theme == ''){
									$argon_code_theme = "vs2015";
								}
								foreach ($argon_code_themes_list as $code_theme){
									if ($argon_code_theme == $code_theme){
										echo "<option value='" . $code_theme . "' selected>" . $code_theme . "</option>";
									}else{
										echo "<option value='" . $code_theme . "'>" . $code_theme . "</option>";
									}
								}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('默认显示行号', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_code_highlight_hide_linenumber">
								<?php $argon_code_highlight_hide_linenumber = get_option('lyrargon_code_highlight_hide_linenumber'); ?>
								<option value="false" <?php if ($argon_code_highlight_hide_linenumber=='false'){echo 'selected';} ?>><?php _e('显示', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_code_highlight_hide_linenumber=='true'){echo 'selected';} ?>><?php _e('不显示', 'lyrargon');?></option>
							</select>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('默认启用自动折行', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_code_highlight_break_line">
								<?php $argon_code_highlight_break_line = get_option('lyrargon_code_highlight_break_line'); ?>
								<option value="false" <?php if ($argon_code_highlight_break_line=='false'){echo 'selected';} ?>><?php _e('不启用', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_code_highlight_break_line=='true'){echo 'selected';} ?>><?php _e('启用', 'lyrargon');?></option>
							</select>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('行号背景透明', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_code_highlight_transparent_linenumber">
								<?php $argon_code_highlight_transparent_linenumber = get_option('lyrargon_code_highlight_transparent_linenumber', 'false'); ?>
								<option value="false" <?php if ($argon_code_highlight_transparent_linenumber=='false'){echo 'selected';} ?>><?php _e('不透明', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_code_highlight_transparent_linenumber=='true'){echo 'selected';} ?>><?php _e('透明', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('适用于某些背景渐变的高亮主题', 'lyrargon');?></p>
						</td>
					</tr>
					<tr style="opacity: 0.5;">
						<th><label><?php _e('如果您想使用其他代码高亮插件，而非 Lyrargon 自带高亮，请前往 "杂项" 打开 "禁用 Lyrargon 代码块样式" 来防止样式冲突', 'lyrargon');?></label></th>
						<td>
						</td>
					</tr>
					<tr><th class="subtitle"><h2><?php _e('数学公式', 'lyrargon');?></h2></th></tr>
					<tr>
						<th><label><?php _e('数学公式渲染方案', 'lyrargon');?></label></th>
						<td>
							<table class="form-table form-table-dense form-table-mathrender">
								<tbody>
									<?php $argon_math_render = (get_option('lyrargon_math_render') == '' ? 'none' : get_option('lyrargon_math_render')); ?>
									<tr>
										<th>
											<label>
												<input name="lyrargon_math_render" type="radio" value="none" <?php if ($argon_math_render=='none'){echo 'checked';} ?>>
												<?php _e('不启用', 'lyrargon');?>
											</label>
										</th>
									</tr>
									<tr>
										<th>
											<label>
												<input name="lyrargon_math_render" type="radio" value="mathjax3" <?php if ($argon_math_render=='mathjax3'){echo 'checked';} ?>>
												Mathjax 3
												<div>
													Mathjax 3 CDN <?php _e('地址', 'lyrargon');?>:
													<input type="text" class="regular-text" name="lyrargon_mathjax_cdn_url" value="<?php echo get_option('lyrargon_mathjax_cdn_url') == '' ? '//cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml-full.js' : get_option('lyrargon_mathjax_cdn_url'); ?>"/>
													<p class="description">Mathjax 3.0+<?php _e('，默认为', 'lyrargon');?> <code>//cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml-full.js</code></p>
												</div>
											</label>
										</th>
									</tr>
									<tr>
										<th>
											<label>
												<input name="lyrargon_math_render" type="radio" value="mathjax2" <?php if ($argon_math_render=='mathjax2'){echo 'checked';} ?>>
												Mathjax 2
												<div>
													Mathjax 2 CDN <?php _e('地址', 'lyrargon');?>:
													<input type="text" class="regular-text" name="lyrargon_mathjax_v2_cdn_url" value="<?php echo get_option('lyrargon_mathjax_v2_cdn_url') == '' ? '//cdn.jsdelivr.net/npm/mathjax@2.7.5/MathJax.js?config=TeX-AMS_HTML' : get_option('lyrargon_mathjax_v2_cdn_url'); ?>"/>
													<p class="description">Mathjax 2.0+<?php _e('，默认为', 'lyrargon');?> <code>//cdn.jsdelivr.net/npm/mathjax@2.7.5/MathJax.js?config=TeX-AMS_HTML</code></p>
												</div>
											</label>
										</th>
									</tr>
									<tr>
										<th>
											<label>
												<input name="lyrargon_math_render" type="radio" value="katex" <?php if ($argon_math_render=='katex'){echo 'checked';} ?>>
												Katex
												<div>
													Katex CDN <?php _e('地址', 'lyrargon');?>:
													<input type="text" class="regular-text" name="lyrargon_katex_cdn_url" value="<?php echo get_option('lyrargon_katex_cdn_url') == '' ? '//cdn.jsdelivr.net/npm/katex@0.11.1/dist/' : get_option('lyrargon_katex_cdn_url'); ?>"/>
													<p class="description"><?php _e('Argon 会同时引用', 'lyrargon');?> <code>katex.min.css</code> <?php _e('和', 'lyrargon');?> <code>katex.min.js</code> <?php _e('两个文件，所以在此填写的是上层的路径，而不是具体的文件。注意路径后要带一个斜杠。', 'lyrargon');?><br/><?php _e('默认为', 'lyrargon');?> <code>//cdn.jsdelivr.net/npm/katex@0.11.1/dist/</code></p>
												</div>
											</label>
										</th>
									</tr>
								</tbody>
							</table>
							<p class="description"></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h2>Lazyload</h2></th></tr>
					<tr>
						<th><label><?php _e('是否启用 Lazyload', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_enable_lazyload">
								<?php $argon_enable_lazyload = get_option('lyrargon_enable_lazyload'); ?>
								<option value="true" <?php if ($argon_enable_lazyload=='true'){echo 'selected';} ?>><?php _e('启用', 'lyrargon');?></option>
								<option value="false" <?php if ($argon_enable_lazyload=='false'){echo 'selected';} ?>><?php _e('禁用', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('是否启用 Lazyload 加载文章内图片', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('提前加载阈值', 'lyrargon');?></label></th>
						<td>
							<input type="number" name="lyrargon_lazyload_threshold" min="0" max="2500"  value="<?php echo (get_option('lyrargon_lazyload_threshold') == '' ? '800' : get_option('lyrargon_lazyload_threshold')); ?>"/>
							<p class="description"><?php _e('图片距离页面底部还有多少距离就开始提前加载', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('LazyLoad 图片加载完成过渡', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_lazyload_effect">
								<?php $argon_lazyload_effect = get_option('lyrargon_lazyload_effect'); ?>
								<option value="fadeIn" <?php if ($argon_lazyload_effect=='fadeIn'){echo 'selected';} ?>>fadeIn</option>
								<option value="slideDown" <?php if ($argon_lazyload_effect=='slideDown'){echo 'selected';} ?>>slideDown</option>
								<option value="none" <?php if ($argon_lazyload_effect=='none'){echo 'selected';} ?>><?php _e('不使用过渡', 'lyrargon');?></option>
							</select>
							<p class="description"></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('LazyLoad 图片加载动效', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_lazyload_loading_style">
								<?php $argon_lazyload_loading_style = get_option('lyrargon_lazyload_loading_style'); ?>
								<option value="1" <?php if ($argon_lazyload_loading_style=='1'){echo 'selected';} ?>><?php _e('加载动画', 'lyrargon');?> 1</option>
								<option value="2" <?php if ($argon_lazyload_loading_style=='2'){echo 'selected';} ?>><?php _e('加载动画', 'lyrargon');?> 2</option>
								<option value="3" <?php if ($argon_lazyload_loading_style=='3'){echo 'selected';} ?>><?php _e('加载动画', 'lyrargon');?> 3</option>
								<option value="4" <?php if ($argon_lazyload_loading_style=='4'){echo 'selected';} ?>><?php _e('加载动画', 'lyrargon');?> 4</option>
								<option value="5" <?php if ($argon_lazyload_loading_style=='5'){echo 'selected';} ?>><?php _e('加载动画', 'lyrargon');?> 5</option>
								<option value="6" <?php if ($argon_lazyload_loading_style=='6'){echo 'selected';} ?>><?php _e('加载动画', 'lyrargon');?> 6</option>
								<option value="7" <?php if ($argon_lazyload_loading_style=='7'){echo 'selected';} ?>><?php _e('加载动画', 'lyrargon');?> 7</option>
								<option value="8" <?php if ($argon_lazyload_loading_style=='8'){echo 'selected';} ?>><?php _e('加载动画', 'lyrargon');?> 8</option>
								<option value="9" <?php if ($argon_lazyload_loading_style=='9'){echo 'selected';} ?>><?php _e('加载动画', 'lyrargon');?> 9</option>
								<option value="10" <?php if ($argon_lazyload_loading_style=='10'){echo 'selected';} ?>><?php _e('加载动画', 'lyrargon');?> 10</option>
								<option value="11" <?php if ($argon_lazyload_loading_style=='11'){echo 'selected';} ?>><?php _e('加载动画', 'lyrargon');?> 11</option>
								<option value="none" <?php if ($argon_lazyload_loading_style=='none'){echo 'selected';} ?>><?php _e('不使用', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('在图片被加载之前显示的加载效果', 'lyrargon');?> , <a target="_blank" href="<?php bloginfo('template_url'); ?>/assets/vendor/svg-loaders"><?php _e('预览所有效果', 'lyrargon');?></a></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h2><?php _e('图片放大浏览', 'lyrargon');?></h2></th></tr>
					<tr>
						<th><label><?php _e('是否启用图片放大浏览 (Fancybox)', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_enable_fancybox" onchange="if (this.value == 'true'){setInputValue('lyrargon_enable_zoomify','false');}">
								<?php $argon_enable_fancybox = get_option('lyrargon_enable_fancybox'); ?>
								<option value="true" <?php if ($argon_enable_fancybox=='true'){echo 'selected';} ?>><?php _e('启用', 'lyrargon');?></option>
								<option value="false" <?php if ($argon_enable_fancybox=='false'){echo 'selected';} ?>><?php _e('禁用', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('开启后，文章中图片被单击时会放大预览', 'lyrargon');?></p>
						</td>
					</tr>
					<tr style="opacity: 0.5; cursor: pointer;" onclick="var $t=$(this);var $a=$t.find('.zoomify-toggle-arrow');var expanded=$a.text()==='▲';if(expanded){$a.text('▼');$t.find('.zoomify-toggle-label').text('<?php _e('展开', 'lyrargon');?>');$t.css('opacity','0.5');}else{$a.text('▲');$t.find('.zoomify-toggle-label').text('<?php _e('收起', 'lyrargon');?>');$t.css('opacity','1');}$('.zoomify-old-settings').fadeToggle(500);">
						<th><label><span class="zoomify-toggle-label"><?php _e('展开', 'lyrargon');?></span><?php _e('旧版图片放大浏览 (Zoomify) 设置', 'lyrargon');?> <span class="zoomify-toggle-arrow">▼</span></label></th>
						<td>
						</td>
					</tr>
					<style>
						.zoomify-old-settings{
							opacity: 1;
						}
					</style>
					<tr class="zoomify-old-settings" style="display: none;">
						<th><label><?php _e('是否启用旧版图片放大浏览 (Zoomify)', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_enable_zoomify" onchange="if (this.value == 'true'){setInputValue('lyrargon_enable_fancybox','false');}">
								<?php $argon_enable_zoomify = get_option('lyrargon_enable_zoomify'); ?>
								<option value="true" <?php if ($argon_enable_zoomify=='true'){echo 'selected';} ?>><?php _e('启用', 'lyrargon');?></option>
								<option value="false" <?php if ($argon_enable_zoomify=='false'){echo 'selected';} ?>><?php _e('禁用', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('Zoomify 和 Fancybox 不能同时开启。', 'lyrargon');?></p><p>在 Lyrargon 3.X.X 版本更新后，旧版图片放大浏览功能将被彻底移除。</p>
						</td>
					</tr>
					<tr class="zoomify-old-settings" style="display: none;">
						<th><label><?php _e('缩放动画长度', 'lyrargon');?></label></th>
						<td>
							<input type="number" name="lyrargon_zoomify_duration" min="0" max="10000" value="<?php echo (get_option('lyrargon_zoomify_duration') == '' ? '200' : get_option('lyrargon_zoomify_duration')); ?>"/>	ms
							<p class="description"><?php _e('图片被单击后缩放到全屏动画的时间长度', 'lyrargon');?></p>
						</td>
					</tr>
					<tr class="zoomify-old-settings" style="display: none;">
						<th><label><?php _e('缩放动画曲线', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_zoomify_easing" value="<?php echo (get_option('lyrargon_zoomify_easing') == '' ? 'cubic-bezier(0.4,0,0,1)' : get_option('lyrargon_zoomify_easing')); ?>"/>
							<p class="description">
								<?php _e('例：', 'lyrargon');?> <code>ease</code> , <code>ease-in-out</code> , <code>ease-out</code> , <code>linear</code> , <code>cubic-bezier(0.4,0,0,1)</code><br/><?php _e('如果你不知道这是什么，参考', 'lyrargon');?><a href="https://www.w3school.com.cn/cssref/pr_animation-timing-function.asp" target="_blank"><?php _e('这里', 'lyrargon');?></a>
							</p>
						</td>
					</tr>
					<tr class="zoomify-old-settings" style="display: none;">
						<th><label><?php _e('图片最大缩放比例', 'lyrargon');?></label></th>
						<td>
							<input type="number" name="lyrargon_zoomify_scale" min="0.01" max="1" step="0.01" value="<?php echo (get_option('lyrargon_zoomify_scale') == '' ? '0.9' : get_option('lyrargon_zoomify_scale')); ?>"/>
							<p class="description"><?php _e('图片相对于页面的最大缩放比例 (0 ~ 1 的小数)', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h2>Pangu.js</h2></th></tr>
					<tr>
						<th><label><?php _e('启用 Pangu.js (自动在中英文之间添加空格)', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_enable_pangu">
								<?php $argon_enable_pangu = get_option('lyrargon_enable_pangu'); ?>
								<option value="false" <?php if ($argon_enable_pangu=='false'){echo 'selected';} ?>><?php _e('禁用', 'lyrargon');?></option>
								<option value="article" <?php if ($argon_enable_pangu=='article'){echo 'selected';} ?>><?php _e('格式化文章内容', 'lyrargon');?></option>
								<option value="shuoshuo" <?php if ($argon_enable_pangu=='shuoshuo'){echo 'selected';} ?>><?php _e('格式化说说', 'lyrargon');?></option>
								<option value="comment" <?php if ($argon_enable_pangu=='comment'){echo 'selected';} ?>><?php _e('格式化评论区', 'lyrargon');?></option>
								<option value="article|comment" <?php if ($argon_enable_pangu=='article|comment'){echo 'selected';} ?>><?php _e('格式化文章内容和评论区', 'lyrargon');?></option>
								<option value="article|shuoshuo" <?php if ($argon_enable_pangu=='article|shuoshuo'){echo 'selected';} ?>><?php _e('格式化文章内容和说说', 'lyrargon');?></option>
								<option value="shuoshuo|comment" <?php if ($argon_enable_pangu=='shuoshuo|comment'){echo 'selected';} ?>><?php _e('格式化说说和评论区', 'lyrargon');?></option>
								<option value="article|shuoshuo|comment" <?php if ($argon_enable_pangu=='article|shuoshuo|comment'){echo 'selected';} ?>><?php _e('格式化文章内容、说说和评论区', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('开启后，会自动在中文和英文之间添加空格', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h2><?php _e('脚本', 'lyrargon');?></h2></th></tr>
					<tr>
						<th><label><strong style="color:#ff0000;"><?php _e('注意', 'lyrargon');?></strong></label></th>
						<td>
							<p class="description"><strong style="color:#ff0000;"><?php _e('Lyrargon 使用 pjax 方式加载页面 (无刷新加载) , 所以除非页面手动刷新，否则您的脚本只会被执行一次。', 'lyrargon');?><br/>
							<?php _e('如果您想让每次页面跳转(加载新页面)时都执行脚本，请将脚本写入', 'lyrargon');?> <code>window.pjaxLoaded</code> <?php _e('中', 'lyrargon');?></strong> ，<?php _e('示例写法', 'lyrargon');?>:
							<pre>
window.pjaxLoaded = function(){
	//<?php _e('页面每次跳转都会执行这里的代码', 'lyrargon');?>
	//do something...
}
							</pre>
							<strong style="color:#ff0000;"><?php _e('当页面第一次载入时，', 'lyrargon');?><code>window.pjaxLoaded</code> <?php _e('中的脚本不会执行，所以您可以手动执行', 'lyrargon');?> <code>window.pjaxLoaded();</code> <?php _e('来让页面初次加载时也执行脚本', 'lyrargon');?></strong></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('页头脚本', 'lyrargon');?></label></th>
						<td>
							<textarea type="text" rows="15" cols="100" name="lyrargon_custom_html_head"><?php echo htmlspecialchars(get_option('lyrargon_custom_html_head')); ?></textarea>
							<p class="description"><?php _e('HTML , 支持 script 等标签', 'lyrargon');?><br/><?php _e('插入到 body 之前', 'lyrargon');?><br/><strong style="color:#a00;"><?php _e('安全提示：仅管理员可填写；此处内容存入数据库后会原样输出到前台，请仅填入可信代码。', 'lyrargon');?></strong></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('页尾脚本', 'lyrargon');?></label></th>
						<td>
							<textarea type="text" rows="15" cols="100" name="lyrargon_custom_html_foot"><?php echo htmlspecialchars(get_option('lyrargon_custom_html_foot')); ?></textarea>
							<p class="description"><?php _e('HTML , 支持 script 等标签', 'lyrargon');?><br/><?php _e('插入到 body 之后', 'lyrargon');?><br/><strong style="color:#a00;"><?php _e('安全提示：仅管理员可填写；此处内容存入数据库后会原样输出到前台，请仅填入可信代码。', 'lyrargon');?></strong></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h2><?php _e('动画', 'lyrargon');?></h2></th></tr>
					<tr>
						<th><label><?php _e('是否启用平滑滚动', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_enable_smoothscroll_type">
								<?php $enable_smoothscroll_type = get_option('lyrargon_enable_smoothscroll_type'); ?>
								<option value="1" <?php if ($enable_smoothscroll_type=='1'){echo 'selected';} ?>><?php _e('使用平滑滚动方案 1 (平滑) (推荐)', 'lyrargon');?></option>
								<option value="1_pulse" <?php if ($enable_smoothscroll_type=='1_pulse'){echo 'selected';} ?>><?php _e('使用平滑滚动方案 1 (脉冲式滚动) (仿 Edge) (推荐)', 'lyrargon');?></option>
								<option value="2" <?php if ($enable_smoothscroll_type=='2'){echo 'selected';} ?>><?php _e('使用平滑滚动方案 2 (较稳)', 'lyrargon');?></option>
								<option value="3" <?php if ($enable_smoothscroll_type=='3'){echo 'selected';} ?>><?php _e('使用平滑滚动方案 3', 'lyrargon');?></option>
								<option value="disabled" <?php if ($enable_smoothscroll_type=='disabled'){echo 'selected';} ?>><?php _e('不使用平滑滚动', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('能增强浏览体验，但可能出现一些小问题，如果有问题请切换方案或关闭平滑滚动', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('是否启用进入文章动画', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_enable_into_article_animation">
								<?php $argon_enable_into_article_animation = get_option('lyrargon_enable_into_article_animation'); ?>
								<option value="false" <?php if ($argon_enable_into_article_animation=='false'){echo 'selected';} ?>><?php _e('不启用', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_enable_into_article_animation=='true'){echo 'selected';} ?>><?php _e('启用', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('从首页或分类目录进入文章时，使用平滑过渡（可能影响加载文章时的性能）', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('禁用 Pjax 加载后的页面滚动动画', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_disable_pjax_animation">
								<?php $argon_disable_pjax_animation = get_option('lyrargon_disable_pjax_animation'); ?>
								<option value="false" <?php if ($argon_disable_pjax_animation=='false'){echo 'selected';} ?>><?php _e('不禁用', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_disable_pjax_animation=='true'){echo 'selected';} ?>><?php _e('禁用', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('Pjax 替换页面内容后会平滑滚动到页面顶部，如果你不喜欢，可以禁用这个选项', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h2><?php _e('评论', 'lyrargon');?></h2></th></tr>
					<tr><th class="subtitle"><h3><?php _e('评论分页', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('评论分页方式', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_comment_pagination_type">
								<?php $argon_comment_pagination_type = get_option('lyrargon_comment_pagination_type'); ?>
								<option value="feed" <?php if ($argon_comment_pagination_type=='feed'){echo 'selected';} ?>><?php _e('无限加载', 'lyrargon');?></option>
								<option value="page" <?php if ($argon_comment_pagination_type=='page'){echo 'selected';} ?>><?php _e('页码', 'lyrargon');?></option>
							</select>
							<p class="description">
								<?php _e('无限加载：点击 "加载更多" 按钮来加载更多评论。', 'lyrargon');?><br/>
								<?php _e('页码：显示页码来分页。', 'lyrargon');?><br/>
								<span class="go-to-wp-comment-settings"><?php _e('选择"无限加载"时，如果开启了评论分页，请将 Wordpress 的讨论设置设为 "默认显示<b>最后</b>一页，在每个页面顶部显示<b>新的</b>评论"。', 'lyrargon');?> <a href="./options-discussion.php" target="_blank"><?php _e('去设置', 'lyrargon');?>&gt;&gt;&gt;</a></span>
								<?php if (get_option('page_comments') == '1' && get_option('default_comments_page') != 'newest' && get_option('comment_order') != 'desc') {
									echo '<script>$(".go-to-wp-comment-settings").addClass("wrong-options");</script>';
								};?>
								<script>
									$("select[name='lyrargon_comment_pagination_type']").change(function(){
										if ($(this).val() == 'feed') {
											$(".go-to-wp-comment-settings").addClass("using-feed");
										} else {
											$(".go-to-wp-comment-settings").removeClass("using-feed");
										}
									}).change();
								</script>
								<style>
									.go-to-wp-comment-settings a{
										display: none;
									}
									.go-to-wp-comment-settings.wrong-options.using-feed a{
										display: inline-block;
									}
									.go-to-wp-comment-settings.wrong-options.using-feed{
										color: #f00;
									}
								</style>
							</p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('发送评论', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('评论表情面板', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_comment_emotion_keyboard">
								<?php $argon_comment_emotion_keyboard = get_option('lyrargon_comment_emotion_keyboard'); ?>
								<option value="true" <?php if ($argon_comment_emotion_keyboard=='true'){echo 'selected';} ?>><?php _e('启用', 'lyrargon');?></option>
								<option value="false" <?php if ($argon_comment_emotion_keyboard=='false'){echo 'selected';} ?>><?php _e('禁用', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('开启后评论支持插入表情，会在评论输入框下显示表情键盘按钮。', 'lyrargon');?><br/><a href="https://argon-docs.solstice23.top/#/emotions" target="_blank"><?php _e('如何添加新的表情或修改已有表情列表？', 'lyrargon');?></a></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('是否隐藏 "昵称"、"邮箱"、"网站" 输入框', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_hide_name_email_site_input">
								<?php $argon_hide_name_email_site_input = get_option('lyrargon_hide_name_email_site_input'); ?>
								<option value="false" <?php if ($argon_hide_name_email_site_input=='false'){echo 'selected';} ?>><?php _e('不隐藏', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_hide_name_email_site_input=='true'){echo 'selected';} ?>><?php _e('隐藏', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('选项仅在 "设置-评论-评论作者必须填入姓名和电子邮件地址" 选项未勾选的前提下生效。如勾选了 "评论作者必须填入姓名和电子邮件地址"，则只有 "网站" 输入框会被隐藏。', 'lyrargon');?>该</p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('评论是否需要验证码', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_comment_need_captcha">
								<?php $argon_comment_need_captcha = get_option('lyrargon_comment_need_captcha'); ?>
								<option value="true" <?php if ($argon_comment_need_captcha=='true'){echo 'selected';} ?>><?php _e('需要', 'lyrargon');?></option>
								<option value="false" <?php if ($argon_comment_need_captcha=='false'){echo 'selected';} ?>><?php _e('不需要', 'lyrargon');?></option>
							</select>
							<p class="description"></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('使用 Ajax 获取评论验证码', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_get_captcha_by_ajax">
								<?php $argon_get_captcha_by_ajax = get_option('lyrargon_get_captcha_by_ajax'); ?>
								<option value="false" <?php if ($argon_get_captcha_by_ajax=='false'){echo 'selected';} ?>><?php _e('禁用', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_get_captcha_by_ajax=='true'){echo 'selected';} ?>><?php _e('启用', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('如果使用了 CDN 缓存，验证码不会刷新，请开启此选项，否则请不要开启。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('是否允许在评论中使用 Markdown 语法', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_comment_allow_markdown">
								<?php $argon_comment_allow_markdown = get_option('lyrargon_comment_allow_markdown'); ?>
								<option value="true" <?php if ($argon_comment_allow_markdown=='true'){echo 'selected';} ?>><?php _e('允许', 'lyrargon');?></option>
								<option value="false" <?php if ($argon_comment_allow_markdown=='false'){echo 'selected';} ?>><?php _e('不允许', 'lyrargon');?></option>
							</select>
							<p class="description"></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('是否允许评论者再次编辑评论', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_comment_allow_editing">
								<?php $argon_comment_allow_editing = get_option('lyrargon_comment_allow_editing'); ?>
								<option value="true" <?php if ($argon_comment_allow_editing=='true'){echo 'selected';} ?>><?php _e('允许', 'lyrargon');?></option>
								<option value="false" <?php if ($argon_comment_allow_editing=='false'){echo 'selected';} ?>><?php _e('不允许', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('同一个评论者可以再次编辑评论。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('是否允许评论者使用悄悄话模式', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_comment_allow_privatemode">
								<?php $argon_comment_allow_privatemode = get_option('lyrargon_comment_allow_privatemode'); ?>
								<option value="false" <?php if ($argon_comment_allow_privatemode=='false'){echo 'selected';} ?>><?php _e('不允许', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_comment_allow_privatemode=='true'){echo 'selected';} ?>><?php _e('允许', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('评论者使用悄悄话模式发送的评论和其下的所有回复只有发送者和博主能看到。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('是否允许评论者接收评论回复邮件提醒', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_comment_allow_mailnotice">
								<?php $argon_comment_allow_mailnotice = get_option('lyrargon_comment_allow_mailnotice'); ?>
								<option value="false" <?php if ($argon_comment_allow_mailnotice=='false'){echo 'selected';} ?>><?php _e('不允许', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_comment_allow_mailnotice=='true'){echo 'selected';} ?>><?php _e('允许', 'lyrargon');?></option>
							</select>
							<div style="margin-top: 15px;margin-bottom: 15px;">
								<label>
									<?php $argon_comment_mailnotice_checkbox_checked = get_option('lyrargon_comment_mailnotice_checkbox_checked');?>
									<input type="checkbox" name="lyrargon_comment_mailnotice_checkbox_checked" value="true" <?php if ($argon_comment_mailnotice_checkbox_checked=='true'){echo 'checked';}?>/>	<?php _e('评论时默认勾选 "启用邮件通知" 复选框', 'lyrargon');?>
								</label>
							</div>
							<p class="description"><?php _e('评论者开启邮件提醒后，其评论有回复时会有邮件通知。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('允许评论者使用 QQ 头像', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_comment_enable_qq_avatar">
								<?php $argon_comment_enable_qq_avatar = get_option('lyrargon_comment_enable_qq_avatar'); ?>
								<option value="false" <?php if ($argon_comment_enable_qq_avatar=='false'){echo 'selected';} ?>><?php _e('不允许', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_comment_enable_qq_avatar=='true'){echo 'selected';} ?>><?php _e('允许', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('开启后，评论者可以使用 QQ 号代替邮箱输入，头像会根据评论者的 QQ 号获取。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h3><?php _e('评论区', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('评论头像垂直位置', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_comment_avatar_vcenter">
								<?php $argon_comment_avatar_vcenter = get_option('lyrargon_comment_avatar_vcenter'); ?>
								<option value="false" <?php if ($argon_comment_avatar_vcenter=='false'){echo 'selected';} ?>><?php _e('居上', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_comment_avatar_vcenter=='true'){echo 'selected';} ?>><?php _e('居中', 'lyrargon');?></option>
							</select>
							<p class="description"></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('谁可以查看评论编辑记录', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_who_can_visit_comment_edit_history">
								<?php $argon_who_can_visit_comment_edit_history = get_option('lyrargon_who_can_visit_comment_edit_history'); ?>
								<option value="admin" <?php if ($argon_who_can_visit_comment_edit_history=='admin'){echo 'selected';} ?>><?php _e('只有博主', 'lyrargon');?></option>
								<option value="commentsender" <?php if ($argon_who_can_visit_comment_edit_history=='commentsender'){echo 'selected';} ?>><?php _e('评论发送者和博主', 'lyrargon');?></option>
								<option value="everyone" <?php if ($argon_who_can_visit_comment_edit_history=='everyone'){echo 'selected';} ?>><?php _e('任何人', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('点击评论右侧的 "已编辑" 标记来查看编辑记录', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('开启评论置顶功能', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_enable_comment_pinning">
								<?php $argon_enable_comment_pinning = get_option('lyrargon_enable_comment_pinning'); ?>
								<option value="false" <?php if ($argon_enable_comment_pinning=='false'){echo 'selected';} ?>><?php _e('关闭', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_enable_comment_pinning=='true'){echo 'selected';} ?>><?php _e('开启', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('开启后，博主将可以置顶评论。已置顶的评论将会在评论区顶部显示。如果关闭，评论将以正常顺序显示。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('评论点赞', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_enable_comment_upvote">
								<?php $argon_enable_comment_upvote = get_option('lyrargon_enable_comment_upvote'); ?>
								<option value="false" <?php if ($argon_enable_comment_upvote=='false'){echo 'selected';} ?>><?php _e('禁用', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_enable_comment_upvote=='true'){echo 'selected';} ?>><?php _e('启用', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('开启后，每一条评论的头像下方会出现点赞按钮', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('评论者 UA 显示', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_comment_ua">
								<?php $argon_comment_ua = get_option('lyrargon_comment_ua'); ?>
								<option value="hidden" <?php if ($argon_comment_ua=='hidden'){echo 'selected';} ?>><?php _e('不显示', 'lyrargon');?></option>
								<option value="browser" <?php if ($argon_comment_ua=='browser'){echo 'selected';} ?>><?php _e('浏览器', 'lyrargon');?></option>
								<option value="browser,version" <?php if ($argon_comment_ua=='browser,version'){echo 'selected';} ?>><?php _e('浏览器+版本号', 'lyrargon');?></option>
								<option value="platform,browser,version" <?php if ($argon_comment_ua=='platform,browser,version'){echo 'selected';} ?>><?php _e('平台+浏览器+版本号', 'lyrargon');?></option>
								<option value="platform,browser" <?php if ($argon_comment_ua=='platform,browser'){echo 'selected';} ?>><?php _e('平台+浏览器', 'lyrargon');?></option>
								<option value="platform" <?php if ($argon_comment_ua=='platform'){echo 'selected';} ?>><?php _e('平台', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('设置是否在评论区显示评论者 UA 及显示哪些部分', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('在子评论中显示被回复者用户名', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_show_comment_parent_info">
								<?php $argon_show_comment_parent_info = get_option('lyrargon_show_comment_parent_info'); ?>
								<option value="true" <?php if ($argon_show_comment_parent_info=='true'){echo 'selected';} ?>><?php _e('显示', 'lyrargon');?></option>
								<option value="false" <?php if ($argon_show_comment_parent_info=='false'){echo 'selected';} ?>><?php _e('不显示', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('开启后，被回复的评论者昵称会显示在子评论中，鼠标移上后会高亮被回复的评论', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('折叠过长评论', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_fold_long_comments">
								<?php $argon_fold_long_comments = get_option('lyrargon_fold_long_comments'); ?>
								<option value="false" <?php if ($argon_fold_long_comments=='false'){echo 'selected';} ?>><?php _e('不折叠', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_fold_long_comments=='true'){echo 'selected';} ?>><?php _e('折叠', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('开启后，过长的评论会被折叠，需要手动展开', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label>Gravatar CDN</label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_gravatar_cdn" value="<?php echo get_option('lyrargon_gravatar_cdn' , ''); ?>"/>
							<p class="description"><?php _e('使用 CDN 来加速 Gravatar 在某些地区的访问，填写 CDN 地址，留空则不使用。', 'lyrargon');?><br/>下载加速插件 <a href="https://lyargon.wenlei.top/docs/wp-china-yes" target="_blank">WP-China-Yes</a>，可改善中国大陆地区的资源加载体验。</p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('评论文字头像', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_text_gravatar">
								<?php $argon_text_gravatar = get_option('lyrargon_text_gravatar'); ?>
								<option value="false" <?php if ($argon_text_gravatar=='false'){echo 'selected';} ?>><?php _e('禁用', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_text_gravatar=='true'){echo 'selected';} ?>><?php _e('启用', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('在评论者没有设置 Gravatar 时自动生成文字头像，头像颜色由邮箱哈希计算。生成时会在 Console 中抛出 404 错误，但没有影响。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr><th class="subtitle"><h2><?php _e('搜索', 'lyrargon');?></h2></th></tr>
					<tr><th class="subtitle"><h3><?php _e('搜索过滤器', 'lyrargon');?></h3></th></tr>
					<tr>
						<th><label><?php _e('启用过滤器', 'lyrargon');?></label></th>
						<td>	
							<select name="lyrargon_enable_search_filters">
								<?php $argon_enable_search_filters = get_option('lyrargon_enable_search_filters', 'true'); ?>
								<option value="true" <?php if ($argon_enable_search_filters=='true'){echo 'selected';} ?>><?php _e('启用', 'lyrargon');?></option>
								<option value="false" <?php if ($argon_enable_search_filters=='false'){echo 'selected';} ?>><?php _e('禁用', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('开启后，将会在搜索结果界面显示一个过滤器，支持搜索说说及其他类型文章', 'lyrargon');?></p>
						</td>
					</tr>
					<script>	
						$("select[name='lyrargon_enable_search_filters']").change(function(){
							if ($(this).val() == 'true') {
								$(".argon-search-filters-type").css('display', '');
							} else {
								$(".argon-search-filters-type").css('display', 'none');
							}
						}).change();
					</script>
					<tr class="argon-search-filters-type">
						<th><label><?php _e('过滤器类型', 'lyrargon');?></label></th>
						<style>
							.search-filters-container {
								margin-top: 10px;
								margin-bottom: 15px;
								width: calc(100% - 250px);
							}
							@media screen and (max-width:960px){
								.search-filters-container {
									width: 100%;
								}
							}
							#search_filters_active, #search_filters_inactive {
								background: rgba(0, 0, 0, .05);
								padding: 10px 15px;
								margin-top: 10px;
								border-radius: 5px;
								padding-bottom: 0;
								min-height: 48px;
								box-sizing: border-box;
							}
							.search-filter-item {
								background: #fafafa;
								width: max-content !important;
								height: max-content !important;
								border-radius: 100px;
								padding: 5px 15px;
								cursor: move;
								display: inline-block;
								margin-right: 8px;
								margin-bottom: 10px;
							}
							#search_filters_active .search-filter-item:before {
								content: '⬜ ';
							}
							#search_filters_active .search-filter-item.active:before {
								content: '☑️ ';
							}
						</style>
						<td>
							<input type="text" class="regular-text" name="lyrargon_search_filters_type" value="<?php echo get_option('lyrargon_search_filters_type', '*post,*page,shuoshuo'); ?>" style="display: none;"/>
							<?php _e('拖动来自定义启用的过滤器，单击来切换默认勾选状态', 'lyrargon');?>
							<div class="search-filters-container">
								<?php _e('启用', 'lyrargon');?>
								<div id="search_filters_active"></div>
							</div>
							<div class="search-filters-container">
								<?php _e('不启用', 'lyrargon');?>
								<div id="search_filters_inactive">
									<?php 
										$all_post_types= get_post_types(array(
											'public'   => true,
										), 'objects');
										foreach ($all_post_types as $post_type) {
											if ($post_type -> name == 'attachment'){
												continue;
											}
											echo '<div class="search-filter-item" filter-name="'. $post_type -> name .'">'. $post_type -> label .'</div>';
										}
									?>
								</div>
							</div>
						</td>
						<script>
							function updateSearchFilters(){
								let searchFilters = "";
								$("#search_filters_active .search-filter-item").each(function(index, item) {
									if (index != 0){ searchFilters += ",";}
									if ($(item).hasClass('active')){ searchFilters += "*"; }
									searchFilters += item.getAttribute("filter-name");
								});
								$("input[name='lyrargon_search_filters_type']").val(searchFilters);
							}
							!function(){
								let searchFilters = $("input[name='lyrargon_search_filters_type']").val().split(",");
								for (let filter of searchFilters){
									if (filter[0] == "*"){
										$(".search-filter-item[filter-name='"+ filter.substring(1) +"']").addClass('active');
										filter = filter.substring(1);
									}
									let itemDiv = $("#search_filters_inactive .search-filter-item[filter-name='"+ filter + "']");
									$("#search_filters_active").append(itemDiv.prop("outerHTML"));
									itemDiv.remove();
								}
							}();
							$(document).on("click", "#search_filters_active .search-filter-item", function(){
								$(this).toggleClass("active");
								updateSearchFilters();
							});
							dragula(
								[document.querySelector('#search_filters_active'), document.querySelector('#search_filters_inactive')],
								{
									direction: 'vertical'
								}
							).on('dragend', function(){
								updateSearchFilters();
							});
						</script>
					</tr>
					<tr><th class="subtitle"><h2><?php _e('杂项', 'lyrargon');?></h2></th></tr>
					<tr>
						<th><label><?php _e('是否启用 Pjax', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_pjax_disabled">
								<?php $argon_pjax_disabled = get_option('lyrargon_pjax_disabled'); ?>
								<option value="false" <?php if ($argon_pjax_disabled=='false'){echo 'selected';} ?>><?php _e('启用', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_pjax_disabled=='true'){echo 'selected';} ?>><?php _e('不启用', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('Pjax 可以增强页面的跳转体验', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('首页隐藏特定 分类/Tag 下的文章', 'lyrargon');?></label></th>
						<td>
							<input type="text" class="regular-text" name="lyrargon_hide_categories" value="<?php echo get_option('lyrargon_hide_categories'); ?>"/>
							<p class="description"><?php _e('输入要隐藏的 分类/Tag 的 ID，用英文逗号分隔，留空则不隐藏', 'lyrargon');?><br/><a onclick="$('#id_of_categories_and_tags').slideDown(500);" style="cursor: pointer;"><?php _e('点此查看', 'lyrargon');?></a><?php _e('所有分类和 Tag 的 ID', 'lyrargon');?>
								<?php
									echo "<div id='id_of_categories_and_tags' style='display: none;'><div style='font-size: 22px;margin-bottom: 10px;margin-top: 10px;'>" . __('分类', 'lyrargon') . "</div>";
									$categories = get_categories(array(
										'hide_empty' => 0,
										'hierarchical' => 0,
										'taxonomy' => 'category'
									));
									foreach($categories as $category) {
										echo "<span>".$category -> name ." -> ". $category -> term_id ."</span>";
									}
									echo "<div style='font-size: 22px;margin-bottom: 10px;'>Tag</div>";
									$categories = get_categories(array(
										'hide_empty' => 0,
										'hierarchical' => 0,
										'taxonomy' => 'post_tag'
									));
									foreach($categories as $category) {
										echo "<span>".$category -> name ." -> ". $category -> term_id ."</span>";
									}
									echo "</div>";
								?>
								<style>
									#id_of_categories_and_tags > span {
										display: inline-block;
										background: rgba(0, 0, 0, .08);
										border-radius: 2px;
										margin-right: 5px;
										margin-bottom: 8px;
										padding: 5px 10px;
									}
								</style>
							</p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('美化登录界面', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_enable_login_css">
								<?php $argon_enable_login_css = get_option('lyrargon_enable_login_css'); ?>
								<option value="false" <?php if ($argon_enable_login_css=='false'){echo 'selected';} ?>><?php _e('不启用', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_enable_login_css=='true'){echo 'selected';} ?>><?php _e('启用', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('使用 Lyrargon Design 风格的登录界面', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('美化后台界面', 'lyrargon');?></label></th>
						<td>
							<p class="description">
								<?php _e('使用 Lyrargon Design 风格的后台界面', 'lyrargon');?><br>
								<?php echo sprintf(__('前往<a href="%s" target="_blank">个人资料</a>页面将 "管理界面配色方案" 设为 "Lyrargon" 即可开启。', 'lyrargon'), admin_url('profile.php'));?>
							</p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('博客首页是否显示说说', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_home_show_shuoshuo">
								<?php $argon_home_show_shuoshuo = get_option('lyrargon_home_show_shuoshuo'); ?>
								<option value="false" <?php if ($argon_home_show_shuoshuo=='false'){echo 'selected';} ?>><?php _e('不显示', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_home_show_shuoshuo=='true'){echo 'selected';} ?>><?php _e('显示', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('开启后，博客首页文章和说说穿插显示', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('折叠长说说', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_fold_long_shuoshuo">
								<?php $argon_fold_long_shuoshuo = get_option('lyrargon_fold_long_shuoshuo'); ?>
								<option value="false" <?php if ($argon_fold_long_shuoshuo=='false'){echo 'selected';} ?>><?php _e('不折叠', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_fold_long_shuoshuo=='true'){echo 'selected';} ?>><?php _e('折叠', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('开启后，长说说在预览状态下会被折叠，需要手动展开', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('是否修正时区错误', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_enable_timezone_fix">
								<?php $argon_enable_timezone_fix = get_option('lyrargon_enable_timezone_fix'); ?>
								<option value="false" <?php if ($argon_enable_timezone_fix=='false'){echo 'selected';} ?>><?php _e('关闭', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_enable_timezone_fix=='true'){echo 'selected';} ?>><?php _e('开启', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('如遇到时区错误（例如一条刚发的评论显示 8 小时前），这个选项', 'lyrargon');?><strong><?php _e('可能', 'lyrargon');?></strong><?php _e('可以修复这个问题', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('是否在文章列表内容预览中隐藏短代码', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_hide_shortcode_in_preview">
								<?php $argon_hide_shortcode_in_preview = get_option('lyrargon_hide_shortcode_in_preview'); ?>
								<option value="false" <?php if ($argon_hide_shortcode_in_preview=='false'){echo 'selected';} ?>><?php _e('否', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_hide_shortcode_in_preview=='true'){echo 'selected';} ?>><?php _e('是', 'lyrargon');?></option>
							</select>
							<p class="description"></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('文章内容预览截取字数', 'lyrargon');?></label></th>
						<td>
							<input type="number" name="lyrargon_trim_words_count" min="0" max="1000" value="<?php echo get_option('lyrargon_trim_words_count', 175); ?>"/>
							<p class="description"><?php _e('设为 0 来隐藏文章内容预览', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('是否允许移动端缩放页面', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_enable_mobile_scale">
								<?php $argon_enable_mobile_scale = get_option('lyrargon_enable_mobile_scale'); ?>
								<option value="false" <?php if ($argon_enable_mobile_scale=='false'){echo 'selected';} ?>><?php _e('否', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_enable_mobile_scale=='true'){echo 'selected';} ?>><?php _e('是', 'lyrargon');?></option>
							</select>
							<p class="description"></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('禁用 Google 字体', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_disable_googlefont">
								<?php $argon_disable_googlefont = get_option('lyrargon_disable_googlefont'); ?>
								<option value="false" <?php if ($argon_disable_googlefont=='false'){echo 'selected';} ?>><?php _e('不禁用', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_disable_googlefont=='true'){echo 'selected';} ?>><?php _e('禁用', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('Google 字体在中国大陆访问可能会阻塞，禁用可以解决页面加载被阻塞的问题。禁用后，Serif 字体将失效。', 'lyrargon');?></p>下载加速插件 <a href="https://lyargon.wenlei.top/docs/wp-china-yes" target="_blank">WP-China-Yes</a>，可改善中国大陆地区的资源加载体验。</p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('禁用 Lyrargon 代码块样式', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_disable_codeblock_style">
								<?php $argon_disable_codeblock_style = get_option('lyrargon_disable_codeblock_style'); ?>
								<option value="false" <?php if ($argon_disable_codeblock_style=='false'){echo 'selected';} ?>><?php _e('不禁用', 'lyrargon');?></option>
								<option value="true" <?php if ($argon_disable_codeblock_style=='true'){echo 'selected';} ?>><?php _e('禁用', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('如果您启用了其他代码高亮插件，发现代码块样式被 Lyrargon 覆盖，出现了显示错误，请将此选项设为禁用', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('检测更新源', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_update_source">
								<?php $argon_update_source = get_option('lyrargon_update_source'); ?>
								<option value="lyra_api" <?php if ($argon_update_source=='lyra_api'){echo 'selected';} ?>>Lyrargon</option>
								<option value="github" <?php if ($argon_update_source=='github'){echo 'selected';} ?>>Github</option>
								<option value="stop" <?php if ($argon_update_source=='stop'){echo 'selected';} ?>><?php _e('暂停更新 (不推荐)', 'lyrargon');?></option>
							</select>
							<p class="description"><?php _e('如更新主题速度较慢，可考虑更换更新源。', 'lyrargon');?></p>
						</td>
					</tr>
					<tr>
						<th><label><?php _e('页脚附加内容', 'lyrargon');?></label></th>
						<td>
							<select name="lyrargon_hide_footer_author">
								<?php $argon_hide_footer_author = get_option('lyrargon_hide_footer_author'); ?>
								<option value="false" <?php if ($argon_hide_footer_author=='false'){echo 'selected';} ?>>Theme Lyrargon By solstice23 & AndyWen</option>
								<option value="true" <?php if ($argon_hide_footer_author=='true'){echo 'selected';} ?>>Theme Lyrargon</option>
							</select>
							<p class="description"></p>
						</td>
					</tr>
				</tbody>
			</table>
			<p class="submit">
				<span id="themeoptions-save-status" class="themeoptions-save-status" aria-live="polite" aria-atomic="true"></span>
				<span class="themeoptions-submit-actions">
				<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('保存更改', 'lyrargon');?>">
				<a class="button button-secondary" onclick="importSettings()"><?php _e('导入设置', 'lyrargon');?></a>
				<a class="button button-secondary" onclick="exportSettings()"><?php _e('导出设置', 'lyrargon');?></a>
				</span>
			</p>
		</form>
	</div>
	<div id="headindex_box">
		<button id="headindex_toggler" onclick="$('#headindex_box').toggleClass('folded');"><?php _e('收起', 'lyrargon');?></button>
		<div id="headindex"></div>
	</div>
	<div id="scroll_navigation"><button onclick="$('body,html').animate({scrollTop: 0}, 300);"><?php _e('到顶部', 'lyrargon');?></button><button onclick="$('body,html').animate({scrollTop: $(document).height()-$(window).height()+10}, 300);"><?php _e('到底部', 'lyrargon');?></button></div>
	<div id="exported_settings_json_box" class="closed"><div><?php _e('请复制并保存导出后的 JSON', 'lyrargon');?></div><textarea id="exported_settings_json" readonly="true" onclick="$(this).select();"></textarea><div style="width: 100%;margin: auto;margin-top: 15px;cursor: pointer;user-select: none;" onclick="$('#exported_settings_json_box').addClass('closed');"><?php _e('确定', 'lyrargon');?></div></div>
	<style>
		.radio-with-img {
			display: inline-block;
			margin-right: 15px;
			margin-bottom: 20px;
			text-align: center;
		}
		.radio-with-img > .radio-img {
			cursor: pointer;
		}
		.radio-with-img > label {
			display: inline-block;
			margin-top: 10px;
		}
		.radio-h {
			padding-bottom: 10px;
		}
		.radio-h > label {
			margin-right: 15px;
		}
		#headindex_box {
			position: fixed;
			right: 10px;
			top: 50px;
			max-width: 180px;
			max-height: calc(100vh - 100px);
			opacity: .8;
			transition: all .3s ease;
			background: #fff;
			box-shadow: 0 1px 1px rgba(0,0,0,.04);
			padding: 6px 30px 6px 20px;
			overflow-y: auto;
		}
		.index-subItem-box {
			margin-left: 20px;
			margin-top: 10px;
		}
		.index-link {
			color: #23282d;
			text-decoration: unset;
			transition: all .3s ease;
			box-shadow: none !important;
		}
		.index-item {
			padding: 1px 0;
		}
		.index-item.current > a {
			color: #0073aa;
			font-weight: 600;
			box-shadow: none !important;
		}
		#headindex_toggler{
			position: absolute;
			right: 5px;
			top: 5px;
			color: #555;
			background: #f7f7f7;
			box-shadow: 0 1px 0 #ccc;
			outline: none !important;
			border: 1px solid #ccc;
			border-radius: 2px;
			cursor: pointer;
			width: 40px;
			height: 25px;
			font-size: 12px;
		}
		#headindex_box.folded {
			right: -185px;
		}
		#headindex_box.folded #headindex_toggler{
			position: fixed;
			right: 15px;
			top: 55px;
			font-size: 0px;
		}
		#headindex_box.folded #headindex_toggler:before{
			content: '<?php _e('展开', 'lyrargon');?>';
			font-size: 12px;
		}
		@media screen and (max-width:960px){
			#headindex_box {
				display: none;
			}
		}
		#scroll_navigation {
			position: fixed;
			right: 20px;
			bottom: 20px;
			z-index: 99;
			user-select: none;
			display: flex;
			flex-direction: column;
			gap: 8px;
		}
		#scroll_navigation button {
			color: #475569;
			background: rgba(255, 255, 255, 0.85);
			backdrop-filter: blur(8px);
			-webkit-backdrop-filter: blur(8px);
			border: 1px solid #cbd5e1;
			box-shadow: 0 4px 12px rgba(0,0,0,0.08);
			border-radius: 50%;
			width: 54px;
			height: 54px;
			cursor: pointer;
			font-size: 12px;
			font-weight: 500;
			display: flex;
			align-items: center;
			justify-content: center;
			transition: all 0.2s ease;
			outline: none !important;
		}
		#scroll_navigation button:hover {
			background: #2196f3;
			color: #fff;
			border-color: #2196f3;
			transform: translateY(-2px);
			box-shadow: 0 6px 16px rgba(33, 150, 243, 0.35);
		}
		#scroll_navigation button:active {
			transform: translateY(0);
		}
		#exported_settings_json_box{
			position: fixed;
			z-index: 99999;
			left: calc(50vw - 400px);
			right: calc(50vw - 400px);
			top: 50px;
			width: 800px;
			height: 500px;
			max-width: 100vw;
			max-height: calc(100vh - 50px);
			background: #fff;
			padding: 25px;
			border-radius: 5px;
			box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
			text-align: center;
			font-size: 20px;
			transition: all .3s ease;
		}
		#exported_settings_json{
			width: 100%;
			height: calc(100% - 70px);
			margin-top: 25px;
			font-size: 18px;
			background: #fff;
			resize: none;
		}
		#exported_settings_json::selection{
			background: #cce2ff;
		}
		#exported_settings_json_box.closed{
			transform: translateY(-30px) scale(.9);
			opacity: 0;
			pointer-events: none;
		}
		@media screen and (max-width:800px){
			#exported_settings_json_box{
				left: 0;
				right: 0;
				top: 0;
				width: calc(100vw - 50px);
			}
		}

		.form-table > tbody > tr:first-child > th{
			padding-top: 0 !important;
		}
		.form-table.form-table-dense > tbody > tr > th{
			padding-top: 10px;
			padding-bottom: 10px;
		}

		.form-table-mathrender > tbody > tr > th > label > div {
			margin-top: 10px;
			padding-left: 24px;
			opacity: .75;
			transition: all .3s ease;
		}
		.form-table-mathrender > tbody > tr > th > label:hover > div {
			opacity: 1;
		}
		.form-table-mathrender > tbody > tr > th > label > input:not(:checked) + div {
			display: none;
		}

		#main_form > .form-table{
			width: 100%;
		}
		/* Widen selects inside the settings form-table */
		#main_form .form-table select {
			min-width: 200px;
		}
		/* Let regular-text inputs fill available space up to a sensible max */
		#main_form .form-table input.regular-text {
			width: 100%;
			max-width: 480px;
			box-sizing: border-box;
		}
		#main_form .form-table textarea {
			width: 100%;
			max-width: 600px;
			box-sizing: border-box;
		}
	</style>
	<script type="text/javascript">
		$(document).on("click" , ".radio-with-img .radio-img" , function(){
			$("input", this.parentNode).click();
		});
		$(function () {
			$(document).headIndex({
				articleWrapSelector: '#main_form',
				indexBoxSelector: '#headindex',
				subItemBoxClass: "index-subItem-box",
				itemClass: "index-item",
				linkClass: "index-link",
				offset: 80,
			});
		});
		function setInputValue(name, value){
			let input = $("*[name='" + name + "']");
			let inputType = input.attr("type");
			if (inputType == "checkbox"){
				if (value == "true"){
					value = true;
				}else if (value == "false"){
					value = false;
				}
				input[0].checked = value;
			}else if (inputType == "radio"){
				$("input[name='" + name + "'][value='" + value + "']").click();
			}else{
				input.val(value);
			}
		}
		function getInputValue(input){
			let inputType = input.attr("type");
			if (inputType == "checkbox"){
				return input[0].checked;
			}else if (inputType == "radio"){
				let name = input.attr("name");
				let value;
				$("input[name='" + name + "']").each(function(){
					if (this.checked){
						value = $(this).attr("value");
					}
				});
				return value;
			}else{
				return input.val();
			}
		}
		function exportArgonSettings(){
			let json = {};
			let pushIntoJson = function (){
				name = $(this).attr("name");
				value = getInputValue($(this));
				json[name] = value;
			};
			$("#main_form > .form-table input:not([name='submit']) , #main_form > .form-table select , #main_form > .form-table textarea").each(function(){
				name = $(this).attr("name");
				value = getInputValue($(this));
				json[name] = value;
			});
			return JSON.stringify(json);
		}
		function importArgonSettings(json){
			if (typeof(json) == "string"){
				json = JSON.parse(json);
			}
			let info = "";
			for (let name in json){
				try{
					// 兼容旧版 argon_ 前缀 → 映射到 lyrargon_
					let mappedName = name.replace(/^argon_/, 'lyrargon_');
					let $field = $("*[name='" + mappedName + "']");
					if ($field.length == 0) {
						// 试试原名称（兼容混用场景）
						$field = $("*[name='" + name + "']");
					}
					if ($field.length == 0){
						throw "Input Not Found";
					}
					setInputValue(mappedName, json[name]);
				}catch{
					info += name + " <?php _e('字段导入失败', 'lyrargon');?>\n";
				}
			}
			return info;
		}
		function exportSettings(){
			$("#exported_settings_json").val(exportArgonSettings());
			$("#exported_settings_json").select();
			$("#exported_settings_json_box").removeClass("closed");
		}
		function importSettings(){
			let json = prompt("<?php _e('请输入要导入的备份 JSON', 'lyrargon');?>");
			if (!json){
				return;
			}
			let parsed;
			try{
				parsed = JSON.parse(json);
			}catch(e){
				alert("<?php _e('JSON 格式错误，请检查后重试。', 'lyrargon');?>");
				return;
			}
			// 检测是否为 Argon 旧版导出的 JSON（含 argon_ 前缀字段）
			let isArgon = false;
			if (parsed !== null && typeof parsed === 'object'){
				for (let key in parsed){
					if (key.indexOf('argon_') === 0){
						isArgon = true;
						break;
					}
				}
			}
			if (isArgon){
				let migrateUrl = "<?php echo esc_js(admin_url('admin.php?page=lyrargon_migration')); ?>";
				let go = confirm(
					"<?php _e('导入的 JSON 似乎为 Argon-Theme 的设置选项。请前往「Lyrargon 选项 - 从 Argon 迁移」页面导入此 JSON。', 'lyrargon');?>\n\n" +
					"<?php _e('是否立即前往「从 Argon 迁移」页面？', 'lyrargon');?>\n" +
					migrateUrl
				);
				if (go){
					window.location.href = migrateUrl;
				}
				return;
			}
			let res = importArgonSettings(json);
			alert("<?php _e('已导入，请保存更改。', 'lyrargon');?>\n" + res)
		}

		function setThemeoptionsSaveStatus(type, text){
			var $status = $('#themeoptions-save-status');
			$status.removeClass('is-visible is-saving is-success is-error');
			$status.empty();
			if (window.themeoptionsSaveStatusTimer) {
				window.clearTimeout(window.themeoptionsSaveStatusTimer);
				window.themeoptionsSaveStatusTimer = null;
			}
			if (type === 'saving') {
				$status.addClass('is-visible is-saving');
				$status.append('<span class="themeoptions-save-status-spinner" aria-hidden="true"></span>');
				$status.append('<span>' + text + '</span>');
				return;
			}
			if (type === 'success') {
				$status.addClass('is-visible is-success');
				$status.append('<svg viewBox="0 0 24 24" aria-hidden="true"><circle class="check-ring" cx="12" cy="12" r="8"></circle><path class="check-mark" d="M8.5 12.5l2.5 2.5 4.5-5"></path></svg>');
				$status.append('<span>' + text + '</span>');
				window.themeoptionsSaveStatusTimer = window.setTimeout(function(){
					$status.removeClass('is-visible is-success is-saving is-error');
					$status.empty();
				}, 2200);
				return;
			}
			if (type === 'error') {
				$status.addClass('is-visible is-error');
				$status.append('<span>' + text + '</span>');
			}
		}

		$('#main_form').on('submit', function(e){
			e.preventDefault();
			var $form = $(this);
			var $button = $('#submit');
			var originalText = $button.val();
			setThemeoptionsSaveStatus('saving', '<?php _e('正在保存', 'lyrargon');?>');
			$button.prop('disabled', true).val('<?php _e('保存中...', 'lyrargon');?>');
			$.ajax({
				url: window.location.href,
				type: 'POST',
				dataType: 'json',
				data: $form.serialize() + '&lyrargon_themeoptions_ajax=1'
			}).done(function(response){
				if (response && response.success) {
					setThemeoptionsSaveStatus('success', response.data && response.data.message ? response.data.message : '<?php _e('已保存', 'lyrargon');?>');
					window.setTimeout(function(){
						$('#themeoptions-save-status').removeClass('is-success').addClass('is-visible');
					}, 900);
				} else {
					var message = response && response.data && response.data.message ? response.data.message : '<?php _e('保存失败', 'lyrargon');?>';
					setThemeoptionsSaveStatus('error', message);
				}
			}).fail(function(){
				setThemeoptionsSaveStatus('error', '<?php _e('保存失败，请重试。', 'lyrargon');?>');
			}).always(function(){
				$button.prop('disabled', false).val(originalText);
			});
		});
	</script>
<?php
}
add_action('admin_menu', 'themeoptions_admin_menu');
function argon_update_option($name){
	update_option($name, htmlspecialchars(stripslashes($_POST[$name])));
}
function argon_update_option_allow_tags($name){
	update_option($name, stripslashes($_POST[$name]));
}
function argon_update_option_checkbox($name){
	if (isset($_POST[$name]) && $_POST[$name] == 'true'){
		update_option($name, 'true');
	}else{
		update_option($name, 'false');
	}
}
function argon_update_themeoptions(){
	if (!isset($_POST['update_themeoptions'])){
		return;
	}
	if ($_POST['update_themeoptions'] == 'true'){
		if (!isset($_POST['lyrargon_update_themeoptions_nonce'])){
			if (isset($_POST['lyrargon_themeoptions_ajax'])) {
				wp_send_json_error(array('message' => __('校验失败，请重试。', 'lyrargon')));
			}
			return;
		}
		$nonce = $_POST['lyrargon_update_themeoptions_nonce'];
		if (!wp_verify_nonce($nonce, 'lyrargon_update_themeoptions')){
			if (isset($_POST['lyrargon_themeoptions_ajax'])) {
				wp_send_json_error(array('message' => __('校验失败，请重试。', 'lyrargon')));
			}
			return;
		}
		//配置项
		argon_update_option('lyrargon_card_blur');
		argon_update_option_checkbox('lyrargon_enable_large_radius');
		argon_update_option('lyrargon_toolbar_icon');
		argon_update_option('lyrargon_toolbar_icon_link');
		argon_update_option('lyrargon_toolbar_title');
		argon_update_option('lyrargon_sidebar_banner_title');
		argon_update_option('lyrargon_sidebar_banner_subtitle');
		argon_update_option('lyrargon_sidebar_auther_name');
		argon_update_option('lyrargon_sidebar_auther_image');
		argon_update_option('lyrargon_sidebar_author_description');
		argon_update_option('lyrargon_banner_title');
		argon_update_option('lyrargon_banner_subtitle');
		argon_update_option('lyrargon_banner_background_url');
		argon_update_option('lyrargon_banner_background_color_type');
		argon_update_option_checkbox('lyrargon_banner_background_hide_shapes');
		argon_update_option('lyrargon_enable_smoothscroll_type');
		argon_update_option('lyrargon_gravatar_cdn');
		if (current_user_can('manage_options')) { argon_update_option_allow_tags('lyrargon_footer_html'); }
		argon_update_option('lyrargon_show_readingtime');
		argon_update_option('lyrargon_reading_speed');
		argon_update_option('lyrargon_reading_speed_en');
		argon_update_option('lyrargon_reading_speed_code');
		argon_update_option('lyrargon_show_sharebtn');
		argon_update_option('lyrargon_enable_timezone_fix');
		argon_update_option('lyrargon_donate_qrcode_url');
		argon_update_option('lyrargon_hide_shortcode_in_preview');
		argon_update_option('lyrargon_show_thumbnail_in_banner_in_content_page');
		argon_update_option('lyrargon_update_source');
		argon_update_option('lyrargon_enable_into_article_animation');
		argon_update_option('lyrargon_disable_pjax_animation');
		argon_update_option('lyrargon_fab_show_darkmode_button');
		argon_update_option('lyrargon_fab_show_settings_button');
		argon_update_option('lyrargon_fab_show_gotocomment_button');
		argon_update_option('lyrargon_show_headindex_number');
		argon_update_option('lyrargon_theme_color');
		argon_update_option_checkbox('lyrargon_show_customize_theme_color_picker');
		argon_update_option_allow_tags('lyrargon_seo_description');
		argon_update_option('lyrargon_seo_keywords');
		argon_update_option('lyrargon_enable_mobile_scale');
		argon_update_option('lyrargon_page_background_url');
		argon_update_option('lyrargon_page_background_dark_url');
		argon_update_option('lyrargon_page_background_opacity');
		argon_update_option('lyrargon_page_background_banner_style');
		argon_update_option('lyrargon_hide_name_email_site_input');
		argon_update_option('lyrargon_comment_need_captcha');
		argon_update_option('lyrargon_get_captcha_by_ajax');
		argon_update_option('lyrargon_hide_footer_author');
		argon_update_option('lyrargon_card_radius');
		argon_update_option('lyrargon_comment_avatar_vcenter');
		argon_update_option('lyrargon_pjax_disabled');
		argon_update_option('lyrargon_comment_allow_markdown');
		argon_update_option('lyrargon_comment_allow_editing');
		argon_update_option('lyrargon_comment_allow_privatemode');
		argon_update_option('lyrargon_comment_allow_mailnotice');
		argon_update_option_checkbox('lyrargon_comment_mailnotice_checkbox_checked');
		argon_update_option('lyrargon_comment_pagination_type');
		argon_update_option('lyrargon_who_can_visit_comment_edit_history');
		argon_update_option('lyrargon_home_show_shuoshuo');
		argon_update_option('lyrargon_enable_search_filters');
		argon_update_option('lyrargon_search_filters_type');
		argon_update_option('lyrargon_darkmode_autoswitch');
		argon_update_option('lyrargon_enable_amoled_dark');
		argon_update_option('lyrargon_outdated_info_time_type');
		argon_update_option('lyrargon_outdated_info_days');
		argon_update_option('lyrargon_outdated_info_tip_type');
		argon_update_option('lyrargon_outdated_info_tip_content');
		argon_update_option_checkbox('lyrargon_show_toolbar_mask');
		argon_update_option('lyrargon_enable_banner_title_typing_effect');
		argon_update_option('lyrargon_banner_typing_effect_interval');
		argon_update_option('lyrargon_page_layout');
		argon_update_option('lyrargon_article_list_layout');
		argon_update_option('lyrargon_enable_pangu');
		argon_update_option('lyrargon_assets_path');
		argon_update_option('lyrargon_custom_assets_path');
		argon_update_option('lyrargon_comment_ua');
		argon_update_option('lyrargon_wp_path');
		argon_update_option('lyrargon_dateformat');
		argon_update_option('lyrargon_font');
		argon_update_option('lyrargon_card_shadow');
		argon_update_option('lyrargon_enable_code_highlight');
		argon_update_option('lyrargon_code_highlight_hide_linenumber');
		argon_update_option('lyrargon_code_highlight_transparent_linenumber');
		argon_update_option('lyrargon_code_highlight_break_line');
		argon_update_option('lyrargon_code_theme');
		argon_update_option('lyrargon_comment_enable_qq_avatar');
		argon_update_option('lyrargon_enable_login_css');
		argon_update_option('lyrargon_hide_categories');
		argon_update_option('lyrargon_article_meta');
		argon_update_option('lyrargon_fold_long_comments');
		argon_update_option('lyrargon_fold_long_shuoshuo');
		argon_update_option('lyrargon_first_image_as_thumbnail_by_default');
		argon_update_option('lyrargon_enable_headroom');
		argon_update_option('lyrargon_comment_emotion_keyboard');
		argon_update_option_allow_tags('lyrargon_additional_content_after_post');
		argon_update_option('lyrargon_related_post');
		argon_update_option('lyrargon_related_post_sort_orderby');
		argon_update_option('lyrargon_related_post_sort_order');
		argon_update_option('lyrargon_related_post_limit');
		argon_update_option('lyrargon_article_header_style');
		argon_update_option('lyrargon_text_gravatar');
		argon_update_option('lyrargon_disable_googlefont');
		argon_update_option('lyrargon_disable_codeblock_style');
		argon_update_option('lyrargon_reference_list_title');
		argon_update_option('lyrargon_trim_words_count');
		argon_update_option('lyrargon_enable_comment_upvote');
		argon_update_option('lyrargon_article_list_waterflow');
		argon_update_option('lyrargon_banner_size');
		argon_update_option('lyrargon_toolbar_blur');
		argon_update_option('lyrargon_archives_timeline_show_month');
		argon_update_option('lyrargon_archives_timeline_url');
		argon_update_option('lyrargon_enable_immersion_color');
		argon_update_option('lyrargon_language_override');
		argon_update_option('lyrargon_enable_comment_pinning');
		argon_update_option('lyrargon_show_comment_parent_info');

		//LazyLoad 相关
		argon_update_option('lyrargon_enable_lazyload');
		argon_update_option('lyrargon_lazyload_effect');
		argon_update_option('lyrargon_lazyload_threshold');
		argon_update_option('lyrargon_lazyload_loading_style');

		//图片缩放预览相关
		argon_update_option('lyrargon_enable_fancybox');
		argon_update_option('lyrargon_enable_zoomify');
		argon_update_option('lyrargon_zoomify_duration');
		argon_update_option('lyrargon_zoomify_easing');
		argon_update_option('lyrargon_zoomify_scale');

		//数学公式相关配置项
		argon_update_option('lyrargon_math_render');
		argon_update_option('lyrargon_mathjax_cdn_url');
		argon_update_option('lyrargon_mathjax_v2_cdn_url');
		argon_update_option('lyrargon_katex_cdn_url');

		//页头页尾脚本（仅管理员可保存，内容会原样输出到前台）
		if (current_user_can('manage_options')) {
			argon_update_option_allow_tags('lyrargon_custom_html_head');
			argon_update_option_allow_tags('lyrargon_custom_html_foot');
		}

		//公告
		argon_update_option_allow_tags('lyrargon_sidebar_announcement');
		if (isset($_POST['lyrargon_themeoptions_ajax'])) {
			wp_send_json_success(array('message' => __('已保存', 'lyrargon')));
		}
	}
}
argon_update_themeoptions();
?>