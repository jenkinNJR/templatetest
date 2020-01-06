<?php 
    global $theme_options;
    $theme_options=get_option('option_tree'); 
?>
<div class="clear"></div>
<div class="hinstagram">
    <h1>Follow Us Instagram</h1>
    <h2>@necktiecorner</h2>
    <a href="<?php echo $theme_options['instagram']; ?>" target="_blank">Follow on Instagram</a>
    <ul>
        <li>
            <img src="<?php bloginfo('template_directory'); ?>/images/instagram1.jpg" alt="">
        </li>
        <li>
            <img src="<?php bloginfo('template_directory'); ?>/images/instagram2.jpg" alt="">
        </li>
        <li>
            <img src="<?php bloginfo('template_directory'); ?>/images/instagram3.jpg" alt="">
        </li>
        <li>
            <img src="<?php bloginfo('template_directory'); ?>/images/instagram4.jpg" alt="">
        </li>
        <li>
            <img src="<?php bloginfo('template_directory'); ?>/images/instagram5.jpg" alt="">
        </li>
        <li>
            <img src="<?php bloginfo('template_directory'); ?>/images/instagram6.jpg" alt="">
        </li>
    </ul>
</div>
<footer>
    <div class="footer">
        <div class="wrapper">
            <div class="foot1">
                <div class="foot-logo">
                    <?php if( get_option_tree( 'foot_logo') ) : ?>
                       <a  href="<?php echo home_url(); ?>"><img class="wow fadeInDown" src="<?php echo $theme_options['foot_logo']; ?>" /></a>
                    <?php else : ?>
                       <a href="<?php echo home_url(); ?>"><img class="wow fadeInDown" src="<?php bloginfo('template_url'); ?>/images/foot-logo.png" /></a>
                    <?php endif; ?>
                </div>
              
                <div class="foot-social">
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
            </div>
            <div class="foot2">
                <?php wp_nav_menu( array( 'theme_location' => 'foot-menu-1' ) ); ?>
            </div>
            <div class="foot3">
                <?php wp_nav_menu( array( 'theme_location' => 'foot-menu-2' ) ); ?>
            </div>
            <div class="foot4">
                <h1>We Accept</h1>
                <?php if( get_option_tree( 'foot_payment') ) : ?>
                   <img class="wow fadeInDown" src="<?php echo $theme_options['foot_payment']; ?>" />
                <?php else : ?>
                   <img class="wow fadeInDown" src="<?php bloginfo('template_url'); ?>/images/payment.png" />
                <?php endif; ?>
                <h2>Delivery By</h2>
                <img class="wow fadeInDown" src="<?php bloginfo('template_url'); ?>/images/aramex-logo.png" />
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="foot-bottom">
        <div class="wrapper">
            <div class="copyright">
                <p>
                    <?php if( get_option_tree( 'copyright') ) : ?>
                        <?php echo $theme_options['copyright']; ?>
                    <?php else : ?>
                        &#169; Copyright 2019 necktiecorner.co
                    <?php endif; ?>
                </p>
            </div>
            <div class="designedby">
                Site by <a target="_blank" href="&#169; Copyright 2019 necktiecorner.co">INGIC</a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</footer>





<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
 
 
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>


<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    
    

  </script>
<?php wp_footer(); ?>
</body>
</html>