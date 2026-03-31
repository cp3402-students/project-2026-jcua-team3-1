<?php
add_action( 'admin_menu', 'tennis_club_getting_started' );
function tennis_club_getting_started() {
	add_theme_page( esc_html__('Get Started', 'tennis-club'), esc_html__('Get Started', 'tennis-club'), 'edit_theme_options', 'tennis-club-guide-page', 'tennis_club_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function tennis_club_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'tennis_club_admin_theme_style');

//guidline for about theme
function tennis_club_test_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'tennis-club' );
?>
	<div class="wrapper-outer">
		<div class="left-main-box">
			<div class="intro"><h3><?php echo esc_html( $theme->Name ); ?></h3></div>
			<div class="left-inner">
				<div class="about-wrapper">
					<div class="col-left">
						<p><?php echo esc_html( $theme->get( 'Description' ) ); ?></p>
					</div>
					<div class="col-right">
						<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/screenshot.png" alt="" />
					</div>
				</div>
				<div class="link-wrapper">
					<h4><?php esc_html_e('Important Links', 'tennis-club'); ?></h4>
					<div class="link-buttons">
						<a href="<?php echo esc_url( TENNIS_CLUB_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Free Setup Guide', 'tennis-club'); ?></a>
						<a href="<?php echo esc_url( TENNIS_CLUB_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'tennis-club'); ?></a>
						<a href="<?php echo esc_url( TENNIS_CLUB_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'tennis-club'); ?></a>
						<a href="<?php echo esc_url( TENNIS_CLUB_PRO_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Setup Guide', 'tennis-club'); ?></a>
					</div>
				</div>
				<div class="support-wrapper">
					<div class="editor-box">
						<i class="dashicons dashicons-admin-appearance"></i>
						<h4><?php esc_html_e('Theme Customization', 'tennis-club'); ?></h4>
						<p><?php esc_html_e('Effortlessly modify & maintain your site using editor.', 'tennis-club'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" target="_blank"><?php esc_html_e('Site Editor', 'tennis-club'); ?></a>
						</div>
					</div>
					<div class="support-box">
						<i class="dashicons dashicons-microphone"></i>
						<h4><?php esc_html_e('Need Support?', 'tennis-club'); ?></h4>
						<p><?php esc_html_e('Go to our support forum to help you in case of queries.', 'tennis-club'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( TENNIS_CLUB_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Get Support', 'tennis-club'); ?></a>
						</div>
					</div>
					<div class="review-box">
						<i class="dashicons dashicons-star-filled"></i>
						<h4><?php esc_html_e('Leave Us A Review', 'tennis-club'); ?></h4>
						<p><?php esc_html_e('Are you enjoying Our Theme? We would Love to hear your Feedback.', 'tennis-club'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( TENNIS_CLUB_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate Us', 'tennis-club'); ?></a>
						</div>
					</div>
				</div>
			</div>
			<div class="go-premium-box">
				<h4><?php esc_html_e('Why Go For Premium?', 'tennis-club'); ?></h4>
				<ul class="pro-list">
					<li><?php esc_html_e('Advanced Customization Options', 'tennis-club');?></li>
					<li><?php esc_html_e('One-Click Demo Import', 'tennis-club');?></li>
					<li><?php esc_html_e('WooCommerce Integration & Enhanced Features', 'tennis-club');?></li>
					<li><?php esc_html_e('Performance Optimization & SEO-Ready', 'tennis-club');?></li>
					<li><?php esc_html_e('Premium Support & Regular Updates', 'tennis-club');?></li>
				</ul>
			</div>
		</div>
		<div class="right-main-box">
			<div class="right-inner">
				<div class="pro-boxes">
					<h4><?php esc_html_e('Get Theme Bundle', 'tennis-club'); ?></h4>
					<p><?php esc_html_e('60+ Premium WordPress Themes', 'tennis-club'); ?></p>
					<p class="main-bundle-price" ><strong class="cancel-bundle-price"><?php esc_html_e('$2340', 'tennis-club'); ?></strong><span class="bundle-price"><?php esc_html_e('$86', 'tennis-club'); ?></span></p>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/bundle.png" alt="bundle image" />
					<p><?php esc_html_e('SUMMER SALE: ', 'tennis-club'); ?><strong><?php esc_html_e('Extra 20%', 'tennis-club'); ?></strong><?php esc_html_e(' OFF on WordPress Theme Bundle Use Code: ', 'tennis-club'); ?><strong><?php esc_html_e('“HEAT20”', 'tennis-club'); ?></strong></p>
					<a href="<?php echo esc_url( TENNIS_CLUB_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Theme Bundle For ', 'tennis-club'); ?><span><?php esc_html_e('$86', 'tennis-club'); ?></span></a>
				</div>
				<div class="pro-boxes pro-theme-container">
					<h4><?php esc_html_e('Tennis Club Pro', 'tennis-club'); ?></h4>
					<p class="pro-theme-price" ><?php esc_html_e('$39', 'tennis-club'); ?></p>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/premium.png" alt="premium image" />
					<p><?php esc_html_e('SUMMER SALE: ', 'tennis-club'); ?><strong><?php esc_html_e('Extra 25%', 'tennis-club'); ?></strong><?php esc_html_e(' OFF on WordPress Block Themes! Use Code: ', 'tennis-club'); ?><strong><?php esc_html_e('“SUMMER25”', 'tennis-club'); ?></strong></p>
					<a href="<?php echo esc_url( TENNIS_CLUB_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade To Pro At Just at $29.25', 'tennis-club'); ?></a>
				</div>
				<div class="pro-boxes last-pro-box">
					<h4><?php esc_html_e('View All Our Themes', 'tennis-club'); ?></h4>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/all-themes.png" alt="all themes image" />
					<a href="<?php echo esc_url( TENNIS_CLUB_PRO_ALL_THEMES ); ?>" target="_blank"><?php esc_html_e('View All Our Premium Themes', 'tennis-club'); ?></a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>