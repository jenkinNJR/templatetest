<?php get_header(); ?>
<div class="slider">
    <div class="cycle-slideshow composite-example" 
        data-cycle-fx="fadeout" 
        data-cycle-slides="> div"
        data-cycle-timeout="4000"
        data-cycle-prev="#prev"
        data-cycle-next="#next"
        data-cycle-pager=".example-pager"
        >
        <?php  $args=array(
            'post_type' => 'slider',
            'posts_per_page'=>'-1',
            'order'=>'DESC'
            ); 
            query_posts($args); ?><?php query_posts($args); while(have_posts()) : the_post(); ?>
        <div>
            <div class="slide">
                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                <img src="<?php echo $feat_image; ?>" alt="">
                <div class="caption">
                    <h1 class="wow fadeInRight" data-wow-delay="0.5s"><?php the_field('slide_heading'); ?></h1>
                    <h2 class="wow fadeInLeft" data-wow-delay="0.5s"><?php the_field('slide_heading_2'); ?></h2>
                    <a class="wow fadeInDown" data-wow-delay="0.5s" href="<?php the_field('slide_link'); ?>">Discover now</a>
                </div>
            </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
    <div class="example-pager"></div>
</div>

<?php query_posts('page_id=11'); if(have_posts()) : the_post(); ?>
<div class="wrapper">
    <div class="hsets">
        <h1><span>Executive Sets</span></h1>
        <ul>
            <?php $count=1; if(get_field('executive_sets')): ?>
                <?php while(has_sub_field('executive_sets')): ?>
                <li>
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                    <div class="sdesc">
                        <h2><?php the_sub_field('heading_1'); ?></h2>
                        <h3><?php the_sub_field('heading_2'); ?></h3>
                        <a href="<?php the_sub_field('link'); ?>">Discover More</a>
                    </div>
                </li>
                <?php $count++; endwhile; ?>
            <?php endif; ?>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<?php endif; wp_reset_query(); ?>

<div class="wrapper">
    <div class="hfeatured">
        <h1><span>Featured Products</span></h1>
        <ul>
            <div class="owl-carousel">
                <?php
                    $args = array( 'post_type' => 'product', 'posts_per_page' => 9,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_visibility',
                            'field'    => 'name',
                            'terms'    => 'featured',
                        ),
                    ),
                     );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                <div>
                    <li>
                        <a href="<?php echo get_permalink( $loop->post->ID ) ?>">
                            <div class="img-cont">
                                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                <img src="<?php echo $feat_image; ?>" alt="">
                                <div class="whish"><?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?></div>
                            </div>
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <p><?php echo $product->get_price_html(); ?></p>
                    </li>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </ul>
        <div class="clear"></div>
        <div class="show-more">
            <span><a href="#">Show More</a></span>
        </div>
    </div>
</div>

<div class="wrapper">
    <div class="hfeatured">
        <h1><span>New Arrivals</span></h1>
        <ul>
            <div class="owl-carousel">
                <?php
                    $args = array( 'post_type' => 'product', 'posts_per_page' => 9, 'meta_query' => array(
		array(
			'key'     => 'newarrival',
			'value'   => 'yes',
			'compare' => 'LIKE',
		),
	),);
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <?php //the_field('newarrival'); ?>
                <div>
                    <li>
                        <a href="<?php echo get_permalink( $loop->post->ID ) ?>">
                            <div class="img-cont">
                                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                <img src="<?php echo $feat_image; ?>" alt="">
                                <div class="whish"><?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?></div>
                            </div>
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <p><?php echo $product->get_price_html(); ?></p>
                    </li>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </ul>
        <div class="clear"></div>
        <div class="show-more">
            <span><a href="#">Show More</a></span>
        </div>
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
<?php get_footer(); ?>