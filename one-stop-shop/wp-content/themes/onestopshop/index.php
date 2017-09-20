<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package onestopshop
 */

get_header(); ?>

<div class="main-wrapper">
	<!--<div class="cmo-section-header wpb_content_element clearfix text-center " id="cmo-section-header-1">
		<h2 class="heading">BLOG</h2>
		<div class="separator"></div>
		<p class="header-text"></p>
	</div>-->
	<div class="container">
	
		<?php 
		global $post;
		$args = array(
			'posts_per_page'   => 30,
			'offset'           => 0,
			'category'         => '',
			'category_name'    => '',
			'orderby'          => 'date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'one-stop-shop',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'author'	   => '',
			'author_name'	   => '',
			'post_status'      => 'publish',
			'suppress_filters' => true 
		);
		$posts_array = get_posts( $args );
		$inc=1; 
		if(!empty($posts_array)) echo '<div class="row row-divider">';
		foreach ( $posts_array as $post ) : setup_postdata( $post ); 
			$get_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'one_stop_img' );
			?>
			<div class="col-sm-6 col-md-4 col-lg-4 mt-4">
			<div class="card">
				<img class="card-img-top" src="<?php echo $get_image[0]; ?>" style="height: 117px;">
				<div class="card-block">
					<div class="cmo-article-meta-wrapper">
						<a class="cmo-article-meta-date" href="<?php the_permalink(); ?>">
							<time datetime="<?php the_time('Y-m-d g:i:s') ?>">
								<span class="time-day"><?php echo get_the_date('d'); ?></span>
								<span class="time-month"><?php echo get_the_date('M'); ?></span>
							</time>
						</a>
						<h4><a class="card-main-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>					
					
					<div class="card-text">
						<?php echo trunck_string(get_the_content(),200,true); ?>
					</div>
					
					<div class="excerpt-more-wrapper">
						<a class="cmo-button transparent" href="<?php the_permalink(); ?>">Read More</a>
					</div>
				</div>
				<div class="card-footer">
					<span class="float-right">Published at:</span>
					<span><i class=""></i><?php echo apply_filters( 'get_the_date',  get_the_date() ); ?></span>
				</div>
			</div>
		</div>
		<?php if ($inc % 3 == 0) echo '</div>'; 
		if ($inc % 4 == 0) echo '<div class="row row-divider">';
		$inc++; endforeach; wp_reset_postdata(); ?>
		
	</div>
</div>

	<?php /* ?><div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */ /*
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */ /*
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary --><?php */ ?>

<?php
//get_sidebar();
get_footer();
