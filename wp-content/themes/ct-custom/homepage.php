<?php
/**
 * Template name: Homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CT_Custom
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section class="main_content">
			<div class="container">
				<?php
				while ( have_posts() ) :
					the_post();

					the_content();

				endwhile; // End of the loop.
				?>
			</div>
		</section>

		<section class="contact_section">
			<div class="container">
				<div class="contact_form">
					<h3>Contact Us</h3>
					<?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
				</div>
				<div class="contact_info">
					<h3>Reach Us</h3>
					<?php if( !empty(get_option('address')) ){ ?>
					<p><?php echo get_option('address'); ?></p>
					<?php } ?>
					<p><?php if( !empty(get_option('phone_number')) ){
						echo "Phone: ".get_option('phone_number');
					}
					if( !empty(get_option('fax_number')) ){
						echo "<BR>Fax: ".get_option('fax_number');
					} ?></p>
					<BR>
					<ul class="social_links">
						<?php if( !empty(get_option('facebook_url')) ){ ?>
						<li><a href="<?php echo get_option('facebook_url'); ?>"><i class="fa fa-facebook"></i></a></li>
						<?php } ?>
						<?php if( !empty(get_option('twitter_url')) ){ ?>
						<li><a href="<?php echo get_option('twitter_url'); ?>"><i class="fa fa-twitter"></i></a></li>
						<?php } ?>
						<?php if( !empty(get_option('linkedin_url')) ){ ?>
						<li><a href="<?php echo get_option('linkedin_url'); ?>"><i class="fa fa-linkedin"></i></a></li>
						<?php } ?>
						<?php if( !empty(get_option('pinterest_url')) ){ ?>
						<li><a href="<?php echo get_option('pinterest_url'); ?>"><i class="fa fa-pinterest"></i></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();