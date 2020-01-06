<?php 
/*
Template Name: Store
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

<div class="hstore">
    <ul>    
        <?php $count=1; if(get_field('stores')): ?>
            <?php while(has_sub_field('stores')): ?>
            <li>
                <h1><?php the_sub_field('heading'); ?></h1>
                <?php the_sub_field('map'); ?>
            </li>
            <?php $count++; endwhile; ?>
        <?php endif; ?>
    </ul>
</div>
<?php get_footer(); ?>