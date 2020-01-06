<?php 
/*
Template Name: About
*/
get_header(); ?>
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
    <div class="breadcrumbs-wrapper">
        <?php custom_breadcrumbs(); ?>
    </div>
</div>

<div class="wrapper">
    <div class="habout">
        <div class="habout-left">
            <?php the_content(); ?>
        </div>
        <div class="habout-right">
            <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <img src="<?php echo $feat_image; ?>" alt="">
        </div>
        <div class="clear"></div>
    </div>
    <div class="history">
        <?php the_field('history'); ?>
    </div>
</div>

<?php query_posts('page_id=11'); if(have_posts()) : the_post(); ?>
<div class="wrapper">
    <div class="hgift">
        <div class="hgift-left">
            <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <img src="<?php echo $feat_image; ?>" alt="">
        </div>
        <div class="hgift-right">
            <img src="<?php bloginfo('template_directory'); ?>/images/logo2.jpg" alt="">
            <?php the_content(); ?>
            <a href="<?php echo home_url(); ?>/shop/">Discover More</a>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php endif; wp_reset_query(); ?>

<div class="hvisit-wrapper">
    <div class="wrapper">
        <div class="hvisit">
            <h1><?php the_field('visit_text'); ?></h1>
            <a href="<?php echo home_url(); ?>/find-your-store/">Find your store</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>