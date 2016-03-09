<?php
get_header(); 
$posts_total = 0;


?>	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"><?PHP

			query_posts( $query_string . '&posts_per_page=-1' );

			while ( have_posts() ) : the_post();

				get_template_part( 'parts/content/content-all', get_post_format() );

			endwhile;
	
		?></main><!-- .site-main -->
		<div id="scroll_bottom" scroll="on" page="<?PHP echo $posts_total; ?>" total_posts="<?PHP echo $posts_total; ?>"></div>
	</div><!-- .content-area -->

<?php get_footer(); ?>
