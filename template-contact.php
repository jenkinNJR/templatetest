<?php 
/*
Template Name: Contact
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
    <div class="hcontact">
        <div class="hcontact-left">
            <h1>Contact Info</h1>
            <ul>
                <li><?php the_field('address_1'); ?></li>
                <li><?php the_field('address_2'); ?></li>
                <li><label>Phone</label><?php the_field('phone'); ?></li>
                <li><label>Working Time</label><?php the_field('time'); ?></li>
            </ul>
        </div>
        <div class="hcontact-right">
            <h1>Leave a Message</h1>
            <?php echo do_shortcode('[contact-form-7 id="30" title="Contact Us"]'); ?>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>