<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package onestopshop
 */

get_header(); ?>

<div class="main-wrapper detail-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 mt-4">
				<?php
					while ( have_posts() ) : the_post();
						$get_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
					 ?>
				<div class="card">					
					<div class="col-sm-12 col-md-12 col-lg-12 mt-4">
						<div class="cmo-article-meta-wrapper">
							<a class="cmo-article-meta-date" href="<?php the_permalink(); ?>">
							<time datetime="<?php the_time('Y-m-d g:i:s') ?>">
								<span class="time-day"><?php echo get_the_date('d'); ?></span>
								<span class="time-month"><?php echo get_the_date('M'); ?></span>
							</time>
						</a>
							<h4><a class="card-main-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						</div>
					</div>
					<div class="col-sm-10 col-md-10 col-lg-10 mt-4">
						<img class="card-img-top" src="<?php echo $get_image[0]; ?>">
					</div>
					
					<div class="card-block-detail col-sm-12 col-md-12 col-lg-12 mt-4">
						<div class="card-text">
							<p style="text-align: justify;">
								<?php echo apply_filters('the_content', get_the_content()); ?>
							</p>
						
							<div class="cmo-page-social-share">
								<ul class="cmo-page-social-links">
									<li>
										<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="social-facebook">
											<i class="fa fa-facebook-square" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/home?status=<?php the_title(); ?><?php the_permalink(); ?>" target="_blank" class="social-twitter">
											<i class="fa fa-twitter-square" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" class="social-google-plus">
											<i class="fa fa-google-plus-square" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div>
					</div>
						
					</div>
					<div class="card-footer col-sm-12 col-md-12 col-lg-12 mt-4">
						<span class="float-right">Published at:</span>
						<span><i class=""></i><?php echo apply_filters( 'get_the_date',  get_the_date() ); ?></span>
					</div>
				</div>
			</div>	
		<?php
			endwhile; // End of the loop.
		?>			
		</div>
	</div>
</div>

	<?php /* ?><div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary --><?php */ ?>

<?php
//get_sidebar();
get_footer();
