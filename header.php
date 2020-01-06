<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php	
global $theme_options;        
$theme_options = get_option('option_tree'); 
 ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">   
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">   
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/responsive.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.cycle2.js"></script>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.default.css">
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.9.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
    <script>
    $(document).ready(function(){
      $('.owl-carousel').owlCarousel({
        loop:true,
        items:3,
        autoplay:true,
        nav:true,
        dots: false,
        margin:30,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false,
                dots: true
            },
            600:{
                items:2,
                nav:false,
                dots: true
            },
            1000:{
                items:3,
                nav:true
            }
        }
    })

    $('.owl-carousel1').owlCarousel({
        loop:true,
        items:4,
        autoplay:true,
        nav:true,
        dots: true
    })
    $('.owl-carousel2').owlCarousel({
        loop:true,
        items:4,
        autoplayHoverPause:true,
        autoplay:true,
        nav:true,
        dots: false
    })
    $('.owl-carousel3').owlCarousel({
        loop:true,
        items:3,
        autoplay:true,
        nav:true,
        dots: false
    })
    
    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1200);
        return false;
    });
    });
</script>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
<script src="<?php bloginfo('template_url'); ?>/js/wow.js"></script>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slicknav.css" />
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.slicknav.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#menu').slicknav();
	$( ".pnote" ).insertAfter( $( ".woocommerce-checkout-payment-gateways" ) );
});
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131667570-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-131667570-1');
</script>

<?php wp_head(); ?>
</head>
<div id="wptime-plugin-preloader"></div>
<body <?php body_class( $class ); ?>> 
<header>
    <div class="wrapper">
        <div class="header">
            <div class="logo">
                <?php if( get_option_tree( 'head_logo') ) : ?>
                   <a  href="<?php echo home_url(); ?>"><img class="wow fadeInDown" src="<?php echo $theme_options['head_logo']; ?>" /></a>
                <?php else : ?>
                   <a href="<?php echo home_url(); ?>"><img class="wow fadeInDown" src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a>
                <?php endif; ?>
            </div>
            <div class="head-right">
                <div class="main-nav">
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                </div>
                <div class="mobilemenu">
                    <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu','items_wrap'=> '<ul id="menu">%3$s</ul>' ) ); ?>
                </div>
                <div class="hsearch" style="display: none;">
                    <a href="#"></a>            
                </div>
                <div class="top-nav">
                    <ul>
                        <li><a href="<?php echo home_url(); ?>/my-account/">Register</a></li>
                        <li>
                            <?php if ( is_user_logged_in() ) { ?>
                                <a href="<?php echo wp_logout_url(); ?>">Logout</a>
                            <?php } else { ?>
                                <a href="<?php echo home_url(); ?>/my-account/">Login</a>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
                <div class="top-cart">
                    <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><span><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span></a>
                </div>
                <div class="top-whish">
                    <a href="<?php echo home_url(); ?>//wishlist/"><i class="fa fa-heart" aria-hidden="true"></i></a>
                </div>
                <div class="top-social">
                    <ul>
                        <li>
                            <a target="_blank" href="<?php echo $theme_options['facebook']; ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="<?php echo $theme_options['instagram']; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="<?php echo $theme_options['twitter']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</header>