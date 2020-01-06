<?php get_header(); ?>
<div class="inner-banner">
    <?php if(get_field('inner_banner')!="") {?>
	       <img src="<?php the_field('inner_banner'); ?>" />
    <?php } else {?>
            <img src="<?php bloginfo('template_directory'); ?>/images/inner-banner.jpg" />
    <?php } ?>
            <div class="inner-banne-text">
                <h1><?php 
                if ( is_day() ) { printf( __( 'Daily Archives: %s', 'blankslate' ), get_the_time( get_option( 'date_format' ) ) ); }
                elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'blankslate' ), get_the_time( 'F Y' ) ); }
                elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'blankslate' ), get_the_time( 'Y' ) ); }
                else { _e( 'Archives', 'blankslate' ); }
                ?></h1>
                <div class="line1"></div>
            </div>
    </div>
    
<div class="wrapper">
        <div class="hblog">
            <h1>blog</h1>
            <h2>Recent posts from blog </h2>
            <div class="line1"></div>
            <ul>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <li>
                    <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <a href="<?php the_permalink(); ?>"><img src="<?php echo $feat_image; ?>" alt=""></a>
                    <div class="bdate">
                        <?php the_time('j'); ?> <span><?php the_time('F'); ?></span>
                        <strong><?php the_time('Y'); ?></strong>
                    </div>
                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3>
                </li>
                <?php endwhile; endif; ?>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
<?php get_footer(); ?>