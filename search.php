<?php get_header(); ?>
    <div class="inner-banner">
    <?php if(get_field('inner_banner')!="") {?>
	       <img src="<?php the_field('inner_banner'); ?>" />
    <?php } else {?>
            <img src="<?php bloginfo('template_directory'); ?>/images/inner-banner.jpg" />
    <?php } ?>
    <div class="inner-banner-text">
        <h1><?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
    </div>
</div>

<div class="inner-wrapper">      
<div class="wrapper">
<div class="inner-page">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; ?>
<?php get_template_part( 'nav', 'below' ); ?>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
<h2 class="entry-title"><?php _e( 'Nothing Found', 'blankslate' ); ?></h2>
<section class="entry-content">
<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</section>
</article>
<?php endif; ?>
</div>
</div>
</div>
<?php get_footer(); ?>