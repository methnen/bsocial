<div class="wrap">
	<h2>bSocial Options</h2>
	<form method="post" action="options.php">
		<?php settings_fields( bsocial()->id_base ); ?>

		<div id="<?php echo bsocial()->admin()->get_field_id( 'accordian' ); ?>">

			<?php if ( ! bsocial()->admin()->suppress_option( 'facebook' ) ) { ?>
				<h3>Facebook</h3>
				<div>
					<table class="form-table">
						<!-- facebook details -->
						<tr valign="top"><th scope="row">Enable Facebook components</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'facebook', 'enable' ) ); ?>" type="checkbox" value="1" <?php checked( bsocial()->options()->facebook->enable, 1 ); ?> /></td>
						</tr>
						<tr valign="top"><th scope="row">Facebook app ID</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'facebook', 'app_id' ) ); ?>" type="text" value="<?php echo esc_attr( bsocial()->options()->facebook->app_id ); ?>" /></td>
						</tr>
						<tr valign="top"><th scope="row">Facebook app secret</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'facebook', 'secret' ) ); ?>" type="text" value="<?php echo esc_attr( bsocial()->options()->facebook->secret ); ?>" /></td>
						</tr>
						<tr valign="top"><th scope="row">Facebook app admin IDs</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'facebook', 'admins' ) ); ?>" type="text" value="<?php echo esc_attr( bsocial()->options()->facebook->admins ); ?>" /></td>
						</tr>
						<tr valign="top"><th scope="row">Facebook page for site</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'facebook', 'page' ) ); ?>" type="text" value="<?php echo esc_attr( bsocial()->options()->facebook->page ); ?>" /></td>
						</tr>
						<tr valign="top"><th scope="row">Enable Facebook JS</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'facebook', 'js' ) ); ?>" type="checkbox" value="1" <?php checked( bsocial()->options()->facebook->js, 1 ); ?> /></td>
						</tr>
						<tr valign="top"><th scope="row">Enable Facebook meta</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'facebook', 'meta' ) ); ?>" type="checkbox" value="1" <?php checked( bsocial()->options()->facebook->meta, 1 ); ?> /></td>
						</tr>
						<tr valign="top"><th scope="row">Ingest Facebook comments</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'facebook', 'comments' ) ); ?>" type="checkbox" value="1" <?php checked( bsocial()->options()->facebook->comments, 1 ); ?> /></td>
						</tr>
						<tr valign="top"><th scope="row">Add a Facebook like button to every post</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'facebook', 'add_button' ) ); ?>" type="checkbox" value="1" <?php checked( bsocial()->options()->facebook->add_button, 1 ); ?> /></td>
						</tr>
					</table>
				</div>
			<?php } // END if ?>

			<?php if ( ! bsocial()->admin()->suppress_option( 'linkedin' ) ) { ?>
				<h3>LinkedIn</h3>
				<div>
					<table class="form-table">
						<!-- linkedin details -->
						<tr valign="top"><th scope="row">Enable LinkedIn components</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'linkedin', 'enable' ) ); ?>" type="checkbox" value="1" <?php checked( bsocial()->options()->linkedin->enable, 1 ); ?> /></td>
						</tr>
						<tr valign="top"><th scope="row">LinkedIn application consumer key</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'linkedin', 'consumer_key' ) ); ?>" type="text" value="<?php echo esc_attr( bsocial()->options()->linkedin->consumer_key ); ?>" /></td>
						</tr>
						<tr valign="top"><th scope="row">LinkedIn application consumer secret</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'linkedin', 'consumer_secret' ) ); ?>" type="text" value="<?php echo esc_attr( bsocial()->options()->linkedin->consumer_secret ); ?>" /></td>
						</tr>
						<tr valign="top"><th scope="row">LinkedIn application access token</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'linkedin', 'access_token' ) ); ?>" type="text" value="<?php echo esc_attr( bsocial()->options()->linkedin->access_token ); ?>" /></td>
						</tr>
						<tr valign="top"><th scope="row">LinkedIn application access secret</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'linkedin', 'access_secret' ) ); ?>" type="text" value="<?php echo esc_attr( bsocial()->options()->linkedin->access_secret ); ?>" /></td>
						</tr>
						<tr valign="top"><th scope="row">Enable LinkedIn JS</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'linkedin', 'js' ) ); ?>" type="checkbox" value="1" <?php checked( bsocial()->options()->linkedin->js, 1 ); ?> /></td>
						</tr>
						<tr valign="top"><th scope="row">Enable LinkedIn meta</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'linkedin', 'meta' ) ); ?>" type="checkbox" value="1" <?php checked( bsocial()->options()->linkedin->meta, 1 ); ?> /></td>
						</tr>
					</table>
				</div>
			<?php } // END if ?>

			<?php if ( ! bsocial()->admin()->suppress_option( 'twitter' ) ) { ?>
				<h3>Twitter</h3>
				<div>
					<table class="form-table">
						<!-- twitter details -->
						<tr valign="top"><th scope="row">Enable Twitter components</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'twitter', 'enable' ) ); ?>" type="checkbox" value="1" <?php checked( bsocial()->options()->twitter->enable, 1 ); ?> /></td>
						</tr>
						<tr valign="top"><th scope="row">Twitter application consumer key</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'twitter', 'consumer_key' ) ); ?>" type="text" value="<?php echo esc_attr( bsocial()->options()->twitter->consumer_key ); ?>" /></td>
						</tr>
						<tr valign="top"><th scope="row">Twitter application consumer secret</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'twitter', 'consumer_secret' ) ); ?>" type="text" value="<?php echo esc_attr( bsocial()->options()->twitter->consumer_secret ); ?>" /></td>
						</tr>
						<tr valign="top"><th scope="row">Twitter application access token</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'twitter', 'access_token' ) ); ?>" type="text" value="<?php echo esc_attr( bsocial()->options()->twitter->access_token ); ?>" /></td>
						</tr>
						<tr valign="top"><th scope="row">Twitter application access secret</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'twitter', 'access_secret' ) ); ?>" type="text" value="<?php echo esc_attr( bsocial()->options()->twitter->access_secret ); ?>" /></td>
						</tr>
						<tr valign="top"><th scope="row">Default Twitter @username for site</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'twitter', 'username' ) ); ?>" type="text" value="<?php echo esc_attr( bsocial()->options()->twitter->username ); ?>" /></td>
						</tr>
						<tr valign="top"><th scope="row">Enable Twitter JS</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'twitter', 'js' ) ); ?>" type="checkbox" value="1" <?php checked( bsocial()->options()->twitter->js, 1 ); ?> /></td>
						</tr>
						<tr valign="top"><th scope="row">Enable Twitter meta</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'twitter', 'meta' ) ); ?>" type="checkbox" value="1" <?php checked( bsocial()->options()->twitter->meta, 1 ); ?> /></td>
						</tr>
						<tr valign="top"><th scope="row">Ingest tweets that link to this site as comments on the post they link to</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'twitter', 'comments' ) ); ?>" type="checkbox" value="1" <?php checked( bsocial()->options()->twitter->comments, 1 ); ?> /></td>
						</tr>
					</table>
				</div>
			<?php } // END if ?>

			<?php if ( ! bsocial()->admin()->suppress_option( 'opengraph' ) ) { ?>
				<h3>OpenGraph metadata</h3>
				<div>
					<table class="form-table">
						<!-- opengraph -->
						<tr valign="top"><th scope="row">Enable Open Graph metadata</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'opengraph', 'enable' ) ); ?>" type="checkbox" value="1" <?php checked( bsocial()->options()->opengraph->enable, 1 ); ?> /></td>
						</tr>
						<tr valign="top"><th scope="row">Default open graph type for site</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'opengraph', 'type' ) ); ?>" type="text" value="<?php echo esc_attr( bsocial()->options()->opengraph->type ); ?>" /></td>
						</tr>
					</table>
				</div>
			<?php } // END if ?>


			<?php if ( ! bsocial()->admin()->suppress_option( 'featuredcomments' ) ) { ?>
				<h3>Featured comments</h3>
				<div>
					<table class="form-table">
						<!-- featuredcomments -->
						<tr valign="top"><th scope="row">Enable featured comments</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'featuredcomments', 'enable' ) ); ?>" type="checkbox" value="1" <?php checked( bsocial()->options()->featuredcomments->enable, 1 ); ?> /></td>
						</tr>
						<tr valign="top"><th scope="row">Add featured comments to waterfall</th>
							<td><input name="<?php echo bsocial()->admin()->get_field_name( array( 'featuredcomments', 'add_to_waterfall' ) ); ?>" type="checkbox" value="1" <?php checked( bsocial()->options()->featuredcomments->add_to_waterfall, 1 ); ?> /></td>
						</tr>
						<tr valign="top"><th scope="row">Date</th>
							<td>
								<select name="<?php echo bsocial()->admin()->get_field_name( array( 'featuredcomments', 'use_commentdate' ) ); ?>">
									<option value="1" <?php selected( bsocial()->options()->featuredcomments->use_commentdate, 1 ); ?>>Use the original comment date</option>
									<option value="0" <?php selected( bsocial()->options()->featuredcomments->use_commentdate, 0 ); ?>>Use the date they were featured</option>
								</select>
							</td>
						</tr>
					</table>
				</div>
			<?php } // END if ?>
		</div>

		<p class="submit">
		<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
		</p>
	</form>
</div>

<script>
jQuery(function() {
	jQuery( "#<?php echo bsocial()->admin()->get_field_id( 'accordian' ); ?>" ).accordion({
      heightStyle: "content",
      event: "click hoverintent"
    });
});
</script>

<!-- yep, inline css for the lazy; i'm that guy -->
<style>
/*! jQuery UI - v1.10.3 - 2014-01-11
* http://jqueryui.com
* Includes: jquery.ui.core.css, jquery.ui.accordion.css, jquery.ui.theme.css
* To view and modify this theme, visit http://jqueryui.com/themeroller/?ffDefault=Helvetica%2CArial%2Csans-serif&fwDefault=bold&fsDefault=1.1em&cornerRadius=2px&bgColorHeader=dddddd&bgTextureHeader=highlight_soft&bgImgOpacityHeader=50&borderColorHeader=dddddd&fcHeader=444444&iconColorHeader=0073ea&bgColorContent=ffffff&bgTextureContent=flat&bgImgOpacityContent=75&borderColorContent=dddddd&fcContent=444444&iconColorContent=ff0084&bgColorDefault=f6f6f6&bgTextureDefault=highlight_soft&bgImgOpacityDefault=100&borderColorDefault=dddddd&fcDefault=0073ea&iconColorDefault=666666&bgColorHover=0073ea&bgTextureHover=highlight_soft&bgImgOpacityHover=25&borderColorHover=0073ea&fcHover=ffffff&iconColorHover=ffffff&bgColorActive=ffffff&bgTextureActive=glass&bgImgOpacityActive=65&borderColorActive=dddddd&fcActive=ff0084&iconColorActive=454545&bgColorHighlight=ffffff&bgTextureHighlight=flat&bgImgOpacityHighlight=55&borderColorHighlight=cccccc&fcHighlight=444444&iconColorHighlight=0073ea&bgColorError=ffffff&bgTextureError=flat&bgImgOpacityError=55&borderColorError=ff0084&fcError=222222&iconColorError=ff0084&bgColorOverlay=eeeeee&bgTextureOverlay=flat&bgImgOpacityOverlay=0&opacityOverlay=80&bgColorShadow=aaaaaa&bgTextureShadow=flat&bgImgOpacityShadow=0&opacityShadow=60&thicknessShadow=4px&offsetTopShadow=-4px&offsetLeftShadow=-4px&cornerRadiusShadow=0px
* Copyright 2014 jQuery Foundation and other contributors; Licensed MIT */

.ui-helper-hidden{display:none}.ui-helper-hidden-accessible{border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.ui-helper-reset{margin:0;padding:0;border:0;outline:0;line-height:1.3;text-decoration:none;font-size:100%;list-style:none}.ui-helper-clearfix:before,.ui-helper-clearfix:after{content:"";display:table;border-collapse:collapse}.ui-helper-clearfix:after{clear:both}.ui-helper-clearfix{min-height:0}.ui-helper-zfix{width:100%;height:100%;top:0;left:0;position:absolute;opacity:0;filter:Alpha(Opacity=0)}.ui-front{z-index:100}.ui-state-disabled{cursor:default!important}.ui-icon{display:block;text-indent:-99999px;overflow:hidden;background-repeat:no-repeat}.ui-widget-overlay{position:fixed;top:0;left:0;width:100%;height:100%}.ui-accordion .ui-accordion-header{display:block;cursor:pointer;position:relative;margin-top:2px;padding:.5em .5em .5em .7em;min-height:0}.ui-accordion .ui-accordion-icons{padding-left:2.2em}.ui-accordion .ui-accordion-noicons{padding-left:.7em}.ui-accordion .ui-accordion-icons .ui-accordion-icons{padding-left:2.2em}.ui-accordion .ui-accordion-header .ui-accordion-header-icon{position:absolute;left:.5em;top:50%;margin-top:-8px}.ui-accordion .ui-accordion-content{padding:1em 2.2em;border-top:0;overflow:auto}.ui-widget{font-family:Helvetica,Arial,sans-serif;font-size:1.1em}.ui-widget .ui-widget{font-size:1em}.ui-widget input,.ui-widget select,.ui-widget textarea,.ui-widget button{font-family:Helvetica,Arial,sans-serif;font-size:1em}.ui-widget-content{border:1px solid #ddd;background:#fff url(images/ui-bg_flat_75_ffffff_40x100.png) 50% 50% repeat-x;color:#444}.ui-widget-content a{color:#444}.ui-widget-header{border:1px solid #ddd;background:#ddd url(images/ui-bg_highlight-soft_50_dddddd_1x100.png) 50% 50% repeat-x;color:#444;font-weight:bold}.ui-widget-header a{color:#444}.ui-state-default,.ui-widget-content .ui-state-default,.ui-widget-header .ui-state-default{border:1px solid #ddd;background:#f6f6f6 url(images/ui-bg_highlight-soft_100_f6f6f6_1x100.png) 50% 50% repeat-x;font-weight:bold;color:#0073ea}.ui-state-default a,.ui-state-default a:link,.ui-state-default a:visited{color:#0073ea;text-decoration:none}.ui-state-hover,.ui-widget-content .ui-state-hover,.ui-widget-header .ui-state-hover,.ui-state-focus,.ui-widget-content .ui-state-focus,.ui-widget-header .ui-state-focus{border:1px solid #0073ea;background:#0073ea url(images/ui-bg_highlight-soft_25_0073ea_1x100.png) 50% 50% repeat-x;font-weight:bold;color:#fff}.ui-state-hover a,.ui-state-hover a:hover,.ui-state-hover a:link,.ui-state-hover a:visited{color:#fff;text-decoration:none}.ui-state-active,.ui-widget-content .ui-state-active,.ui-widget-header .ui-state-active{border:1px solid #ddd;background:#fff url(images/ui-bg_glass_65_ffffff_1x400.png) 50% 50% repeat-x;font-weight:bold;color:#ff0084}.ui-state-active a,.ui-state-active a:link,.ui-state-active a:visited{color:#ff0084;text-decoration:none}.ui-state-highlight,.ui-widget-content .ui-state-highlight,.ui-widget-header .ui-state-highlight{border:1px solid #ccc;background:#fff url(images/ui-bg_flat_55_ffffff_40x100.png) 50% 50% repeat-x;color:#444}.ui-state-highlight a,.ui-widget-content .ui-state-highlight a,.ui-widget-header .ui-state-highlight a{color:#444}.ui-state-error,.ui-widget-content .ui-state-error,.ui-widget-header .ui-state-error{border:1px solid #ff0084;background:#fff url(images/ui-bg_flat_55_ffffff_40x100.png) 50% 50% repeat-x;color:#222}.ui-state-error a,.ui-widget-content .ui-state-error a,.ui-widget-header .ui-state-error a{color:#222}.ui-state-error-text,.ui-widget-content .ui-state-error-text,.ui-widget-header .ui-state-error-text{color:#222}.ui-priority-primary,.ui-widget-content .ui-priority-primary,.ui-widget-header .ui-priority-primary{font-weight:bold}.ui-priority-secondary,.ui-widget-content .ui-priority-secondary,.ui-widget-header .ui-priority-secondary{opacity:.7;filter:Alpha(Opacity=70);font-weight:normal}.ui-state-disabled,.ui-widget-content .ui-state-disabled,.ui-widget-header .ui-state-disabled{opacity:.35;filter:Alpha(Opacity=35);background-image:none}.ui-state-disabled .ui-icon{filter:Alpha(Opacity=35)}.ui-icon{width:16px;height:16px}.ui-icon,.ui-widget-content .ui-icon{background-image:url(images/ui-icons_ff0084_256x240.png)}.ui-widget-header .ui-icon{background-image:url(images/ui-icons_0073ea_256x240.png)}.ui-state-default .ui-icon{background-image:url(images/ui-icons_666666_256x240.png)}.ui-state-hover .ui-icon,.ui-state-focus .ui-icon{background-image:url(images/ui-icons_ffffff_256x240.png)}.ui-state-active .ui-icon{background-image:url(images/ui-icons_454545_256x240.png)}.ui-state-highlight .ui-icon{background-image:url(images/ui-icons_0073ea_256x240.png)}.ui-state-error .ui-icon,.ui-state-error-text .ui-icon{background-image:url(images/ui-icons_ff0084_256x240.png)}.ui-icon-blank{background-position:16px 16px}.ui-icon-carat-1-n{background-position:0 0}.ui-icon-carat-1-ne{background-position:-16px 0}.ui-icon-carat-1-e{background-position:-32px 0}.ui-icon-carat-1-se{background-position:-48px 0}.ui-icon-carat-1-s{background-position:-64px 0}.ui-icon-carat-1-sw{background-position:-80px 0}.ui-icon-carat-1-w{background-position:-96px 0}.ui-icon-carat-1-nw{background-position:-112px 0}.ui-icon-carat-2-n-s{background-position:-128px 0}.ui-icon-carat-2-e-w{background-position:-144px 0}.ui-icon-triangle-1-n{background-position:0 -16px}.ui-icon-triangle-1-ne{background-position:-16px -16px}.ui-icon-triangle-1-e{background-position:-32px -16px}.ui-icon-triangle-1-se{background-position:-48px -16px}.ui-icon-triangle-1-s{background-position:-64px -16px}.ui-icon-triangle-1-sw{background-position:-80px -16px}.ui-icon-triangle-1-w{background-position:-96px -16px}.ui-icon-triangle-1-nw{background-position:-112px -16px}.ui-icon-triangle-2-n-s{background-position:-128px -16px}.ui-icon-triangle-2-e-w{background-position:-144px -16px}.ui-icon-arrow-1-n{background-position:0 -32px}.ui-icon-arrow-1-ne{background-position:-16px -32px}.ui-icon-arrow-1-e{background-position:-32px -32px}.ui-icon-arrow-1-se{background-position:-48px -32px}.ui-icon-arrow-1-s{background-position:-64px -32px}.ui-icon-arrow-1-sw{background-position:-80px -32px}.ui-icon-arrow-1-w{background-position:-96px -32px}.ui-icon-arrow-1-nw{background-position:-112px -32px}.ui-icon-arrow-2-n-s{background-position:-128px -32px}.ui-icon-arrow-2-ne-sw{background-position:-144px -32px}.ui-icon-arrow-2-e-w{background-position:-160px -32px}.ui-icon-arrow-2-se-nw{background-position:-176px -32px}.ui-icon-arrowstop-1-n{background-position:-192px -32px}.ui-icon-arrowstop-1-e{background-position:-208px -32px}.ui-icon-arrowstop-1-s{background-position:-224px -32px}.ui-icon-arrowstop-1-w{background-position:-240px -32px}.ui-icon-arrowthick-1-n{background-position:0 -48px}.ui-icon-arrowthick-1-ne{background-position:-16px -48px}.ui-icon-arrowthick-1-e{background-position:-32px -48px}.ui-icon-arrowthick-1-se{background-position:-48px -48px}.ui-icon-arrowthick-1-s{background-position:-64px -48px}.ui-icon-arrowthick-1-sw{background-position:-80px -48px}.ui-icon-arrowthick-1-w{background-position:-96px -48px}.ui-icon-arrowthick-1-nw{background-position:-112px -48px}.ui-icon-arrowthick-2-n-s{background-position:-128px -48px}.ui-icon-arrowthick-2-ne-sw{background-position:-144px -48px}.ui-icon-arrowthick-2-e-w{background-position:-160px -48px}.ui-icon-arrowthick-2-se-nw{background-position:-176px -48px}.ui-icon-arrowthickstop-1-n{background-position:-192px -48px}.ui-icon-arrowthickstop-1-e{background-position:-208px -48px}.ui-icon-arrowthickstop-1-s{background-position:-224px -48px}.ui-icon-arrowthickstop-1-w{background-position:-240px -48px}.ui-icon-arrowreturnthick-1-w{background-position:0 -64px}.ui-icon-arrowreturnthick-1-n{background-position:-16px -64px}.ui-icon-arrowreturnthick-1-e{background-position:-32px -64px}.ui-icon-arrowreturnthick-1-s{background-position:-48px -64px}.ui-icon-arrowreturn-1-w{background-position:-64px -64px}.ui-icon-arrowreturn-1-n{background-position:-80px -64px}.ui-icon-arrowreturn-1-e{background-position:-96px -64px}.ui-icon-arrowreturn-1-s{background-position:-112px -64px}.ui-icon-arrowrefresh-1-w{background-position:-128px -64px}.ui-icon-arrowrefresh-1-n{background-position:-144px -64px}.ui-icon-arrowrefresh-1-e{background-position:-160px -64px}.ui-icon-arrowrefresh-1-s{background-position:-176px -64px}.ui-icon-arrow-4{background-position:0 -80px}.ui-icon-arrow-4-diag{background-position:-16px -80px}.ui-icon-extlink{background-position:-32px -80px}.ui-icon-newwin{background-position:-48px -80px}.ui-icon-refresh{background-position:-64px -80px}.ui-icon-shuffle{background-position:-80px -80px}.ui-icon-transfer-e-w{background-position:-96px -80px}.ui-icon-transferthick-e-w{background-position:-112px -80px}.ui-icon-folder-collapsed{background-position:0 -96px}.ui-icon-folder-open{background-position:-16px -96px}.ui-icon-document{background-position:-32px -96px}.ui-icon-document-b{background-position:-48px -96px}.ui-icon-note{background-position:-64px -96px}.ui-icon-mail-closed{background-position:-80px -96px}.ui-icon-mail-open{background-position:-96px -96px}.ui-icon-suitcase{background-position:-112px -96px}.ui-icon-comment{background-position:-128px -96px}.ui-icon-person{background-position:-144px -96px}.ui-icon-print{background-position:-160px -96px}.ui-icon-trash{background-position:-176px -96px}.ui-icon-locked{background-position:-192px -96px}.ui-icon-unlocked{background-position:-208px -96px}.ui-icon-bookmark{background-position:-224px -96px}.ui-icon-tag{background-position:-240px -96px}.ui-icon-home{background-position:0 -112px}.ui-icon-flag{background-position:-16px -112px}.ui-icon-calendar{background-position:-32px -112px}.ui-icon-cart{background-position:-48px -112px}.ui-icon-pencil{background-position:-64px -112px}.ui-icon-clock{background-position:-80px -112px}.ui-icon-disk{background-position:-96px -112px}.ui-icon-calculator{background-position:-112px -112px}.ui-icon-zoomin{background-position:-128px -112px}.ui-icon-zoomout{background-position:-144px -112px}.ui-icon-search{background-position:-160px -112px}.ui-icon-wrench{background-position:-176px -112px}.ui-icon-gear{background-position:-192px -112px}.ui-icon-heart{background-position:-208px -112px}.ui-icon-star{background-position:-224px -112px}.ui-icon-link{background-position:-240px -112px}.ui-icon-cancel{background-position:0 -128px}.ui-icon-plus{background-position:-16px -128px}.ui-icon-plusthick{background-position:-32px -128px}.ui-icon-minus{background-position:-48px -128px}.ui-icon-minusthick{background-position:-64px -128px}.ui-icon-close{background-position:-80px -128px}.ui-icon-closethick{background-position:-96px -128px}.ui-icon-key{background-position:-112px -128px}.ui-icon-lightbulb{background-position:-128px -128px}.ui-icon-scissors{background-position:-144px -128px}.ui-icon-clipboard{background-position:-160px -128px}.ui-icon-copy{background-position:-176px -128px}.ui-icon-contact{background-position:-192px -128px}.ui-icon-image{background-position:-208px -128px}.ui-icon-video{background-position:-224px -128px}.ui-icon-script{background-position:-240px -128px}.ui-icon-alert{background-position:0 -144px}.ui-icon-info{background-position:-16px -144px}.ui-icon-notice{background-position:-32px -144px}.ui-icon-help{background-position:-48px -144px}.ui-icon-check{background-position:-64px -144px}.ui-icon-bullet{background-position:-80px -144px}.ui-icon-radio-on{background-position:-96px -144px}.ui-icon-radio-off{background-position:-112px -144px}.ui-icon-pin-w{background-position:-128px -144px}.ui-icon-pin-s{background-position:-144px -144px}.ui-icon-play{background-position:0 -160px}.ui-icon-pause{background-position:-16px -160px}.ui-icon-seek-next{background-position:-32px -160px}.ui-icon-seek-prev{background-position:-48px -160px}.ui-icon-seek-end{background-position:-64px -160px}.ui-icon-seek-start{background-position:-80px -160px}.ui-icon-seek-first{background-position:-80px -160px}.ui-icon-stop{background-position:-96px -160px}.ui-icon-eject{background-position:-112px -160px}.ui-icon-volume-off{background-position:-128px -160px}.ui-icon-volume-on{background-position:-144px -160px}.ui-icon-power{background-position:0 -176px}.ui-icon-signal-diag{background-position:-16px -176px}.ui-icon-signal{background-position:-32px -176px}.ui-icon-battery-0{background-position:-48px -176px}.ui-icon-battery-1{background-position:-64px -176px}.ui-icon-battery-2{background-position:-80px -176px}.ui-icon-battery-3{background-position:-96px -176px}.ui-icon-circle-plus{background-position:0 -192px}.ui-icon-circle-minus{background-position:-16px -192px}.ui-icon-circle-close{background-position:-32px -192px}.ui-icon-circle-triangle-e{background-position:-48px -192px}.ui-icon-circle-triangle-s{background-position:-64px -192px}.ui-icon-circle-triangle-w{background-position:-80px -192px}.ui-icon-circle-triangle-n{background-position:-96px -192px}.ui-icon-circle-arrow-e{background-position:-112px -192px}.ui-icon-circle-arrow-s{background-position:-128px -192px}.ui-icon-circle-arrow-w{background-position:-144px -192px}.ui-icon-circle-arrow-n{background-position:-160px -192px}.ui-icon-circle-zoomin{background-position:-176px -192px}.ui-icon-circle-zoomout{background-position:-192px -192px}.ui-icon-circle-check{background-position:-208px -192px}.ui-icon-circlesmall-plus{background-position:0 -208px}.ui-icon-circlesmall-minus{background-position:-16px -208px}.ui-icon-circlesmall-close{background-position:-32px -208px}.ui-icon-squaresmall-plus{background-position:-48px -208px}.ui-icon-squaresmall-minus{background-position:-64px -208px}.ui-icon-squaresmall-close{background-position:-80px -208px}.ui-icon-grip-dotted-vertical{background-position:0 -224px}.ui-icon-grip-dotted-horizontal{background-position:-16px -224px}.ui-icon-grip-solid-vertical{background-position:-32px -224px}.ui-icon-grip-solid-horizontal{background-position:-48px -224px}.ui-icon-gripsmall-diagonal-se{background-position:-64px -224px}.ui-icon-grip-diagonal-se{background-position:-80px -224px}.ui-corner-all,.ui-corner-top,.ui-corner-left,.ui-corner-tl{border-top-left-radius:2px}.ui-corner-all,.ui-corner-top,.ui-corner-right,.ui-corner-tr{border-top-right-radius:2px}.ui-corner-all,.ui-corner-bottom,.ui-corner-left,.ui-corner-bl{border-bottom-left-radius:2px}.ui-corner-all,.ui-corner-bottom,.ui-corner-right,.ui-corner-br{border-bottom-right-radius:2px}.ui-widget-overlay{background:#eee url(images/ui-bg_flat_0_eeeeee_40x100.png) 50% 50% repeat-x;opacity:.8;filter:Alpha(Opacity=80)}.ui-widget-shadow{margin:-4px 0 0 -4px;padding:4px;background:#aaa url(images/ui-bg_flat_0_aaaaaa_40x100.png) 50% 50% repeat-x;opacity:.6;filter:Alpha(Opacity=60);border-radius:0}
</style>