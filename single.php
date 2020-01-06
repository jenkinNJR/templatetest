<?php get_header(); ?>
<div class="inner-banner">
    <?php if(get_field('inner_banner')!="") {?>
	       <img src="<?php the_field('inner_banner'); ?>" />
    <?php } else {?>
            <img src="<?php bloginfo('template_directory'); ?>/images/inner-banner.jpg" />
    <?php } ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="inner-banner-text">
        <h1><?php the_field('sub_heading'); ?></h1>
        <h2><?php the_title(); ?></h2>
    
    </div>
    <?php endwhile; wp_reset_query(); ?>
</div>

    
<div class="wrapper">
    <div class="inner-page wow fadeInUp" data-wow-delay="1s">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; wp_reset_query(); ?>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>