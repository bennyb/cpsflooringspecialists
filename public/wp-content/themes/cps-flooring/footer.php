<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		<div class="footerArea p_t p_b grey">
				<div class="wrapper">
					<div class="footerGrid">
						<div class="footerCol">
							<?php dynamic_sidebar('Footer Logo'); ?>
						</div>
						<div class="footerCol">
							<h2>Quick Links</h2>
							<?php dynamic_sidebar('Quick Links'); ?>
						</div>
						<div class="footerCol">
							<h2>Services</h2>
							<?php dynamic_sidebar('Footer Services'); ?>
						</div>
						 <div class="footerCol">
							<h2>Contact Us</h2>
							<?php dynamic_sidebar('Footer Contact'); ?>
						</div>
					</div>
				</div>
			</div>
		</div> 

<?php wp_footer(); ?>
</body>
</html>
