<?php get_header(); ?>
<div class="wrapper">
    <div class="inner-page">
        <h1 class="wow fadeInRight" data-wow-delay="0.5s">404 Not Found</h1>
       <p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?></p>
    </div>
</div>

<div class="testimonila-wrapper">
    <div class="wrapper">
        <div class="testimonial">
            <h1>Client Testimonial</h1>
            <ul>
                <?php  $args=array(
                    'post_type' => 'testimonials',
                    'posts_per_page'=>'3',
                    'order'=>'DESC'
                    ); 
                    query_posts($args); ?><?php query_posts($args); while(have_posts()) : the_post(); ?>
                <li>
                    <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <img src="<?php echo $feat_image; ?>" alt="">
                    <?php the_content(); ?>
                    <h2><?php the_title(); ?></h2>
                </li>
                 <?php endwhile; wp_reset_query(); ?>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?php get_footer(); ?>