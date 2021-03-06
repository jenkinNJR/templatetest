<?php 
/*
Template Name: CPC
*/
get_header(); ?>
<div class="inner-banner">
    <?php if(get_field('inner_banner')!="") {?>
	       <img src="<?php the_field('inner_banner'); ?>" />
    <?php } else {?>
            <img src="<?php bloginfo('template_directory'); ?>/images/inner-banner.jpg" />
    <?php } ?>
    <div class="wrapper">
        <div class="caption">
            <h1>United</h1>
            <h2>Driver Learning Centre</h2>
            <h3>Know you're in safe hands</h3>
        </div>
    </div>
</div>

<div class="cpc-wrapper">
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="wrapper">
        <div class="cpc-left">
            <?php the_content(); ?>    
        </div>
        <div class="cpc-right">
            <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <img src="<?php echo $feat_image; ?>" alt="">
        </div>
        <div class="clear"></div>
    </div>
    <?php endwhile; wp_reset_query(); ?>
</div>

<div class="wrapper">
    <div class="testimonial">
        <h1>Client Testimonials</h1>
        <ul>
            <div class="owl-carousel">
                <?php  $args=array(
                    'post_type' => 'testimonials',
                    'posts_per_page'=>'-1',
                    'order'=>'DESC'
                    ); 
                    query_posts($args); ?><?php query_posts($args); while(have_posts()) : the_post(); ?>
                    <div>
                        <li>
                            <?php the_content(); ?>
                            <h2><?php the_title(); ?></h2>
                            <h3><?php the_field('designation'); ?></h3>
                        </li>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </ul>
    </div>
</div>

<div class="hcontact">
    <div class="wrapper">
        <div class="hcontact-left">
            <h1>Get</h1>
            <h1>Connect With us</h1>
            <div class="line1"></div>
            <p>Our Experts ready to server for provide solution</p>
        </div>
        <div class="hcontact-right">
            <?php echo do_shortcode('[contact-form-7 id="54" title="Contact Us"]'); ?>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>