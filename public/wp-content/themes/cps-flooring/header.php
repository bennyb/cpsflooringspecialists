<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <link href="<?php echo esc_url( get_template_directory_uri() . '/css/style.css?ver=' . filemtime( get_template_directory() . '/css/style.css' ) ); ?>" type="text/css" rel="stylesheet" />
		<script src="<?php bloginfo("template_directory"); ?>/js/jquery-1.10.2.min.js"></script>
	<?php wp_head(); ?>
	<script>
		$(document).ready(function() {
			// responsive-menu
			$('.respo_menu span').click(function() {
				$(this).parent().toggleClass('active');
			});
			$('.respo_menu').click(function() {
				$('#primary-menu').slideToggle();
			});
		});
	</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="main">
			<div class="header_row grey">
				<div class="wrapper">
					<div class="row">
						<div class="logo">
							<a href="<?php echo esc_url(home_url('/')); ?>"><img src="http://cpsflooringspecialists.co.uk/wp-content/uploads/2019/08/cps-logo-1.png"  alt=""/></a>
						</div>
						<div class="header-right">
							<h3><a href="tel:07711250121">07711 250 121</a></h3>
							<h3><a href="tel:01622439969">01622439969</a></h3>
							<h3><a href="mailto:info@cpsflooringspecialists.co.uk">info@cpsflooringspecialists.co.uk</a></h3>
							<p>Call us Today for a free estimate</p>
						</div>
					</div>
				</div>
			</div>
			<div class="nav orange">
				<div class="wrapper">
					<div class="menu">
					<label class="respo_menu" style="color:#fff;">Menu<span></span></label>
					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav', 'menu_id' => 'primary-menu')); ?>						
					</div>
				</div>
			</div>


