<footer class="page-footer" role="footer">
    <div class="row content">
        <div class="large-3 columns">
            <h4>Treatment Links</h4>
        </div>
        <div class="large-3 columns">
            <h4>About us</h4>
        </div>
        <div class="large-6 columns text-right">
            <!-- logo -->
            <div class="logo-footer">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/style/images/ngv-logo-footer.png" alt="Logo" class="logo-footer">
                </a>
            </div>
            <!-- /logo -->                
            <div>
                888.123.4567
            </div>
            <p>Address 123 Ave Florida, Florida 12345</p>
            <div id="copyright">&copy;<?php echo date("Y "); echo stripslashes(get_option('ranklab_copyright')); ?></div>
        </div>
    </div>	
</footer>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/foundation.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/foundation.equalizer.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.min.js"></script>
  <script>
    $(document).foundation({
/* TODO -  Customize Sidr menu if applicable*/       
});
    $(document).ready(function(){
        $('#device-menu').sidr({
            name: 'sidr-left',
            body: '.device-only',
            side: 'left',
            source: '.menu-nav-header'
        });
        $('#more-menu').sidr({
            name: 'sidr-inner',
            body: '.false-body',
            renaming: false,
            side: 'new',
            source: '.more-menu-nav-header'
        });
/* TODO -  Customize Slick Slider */
    $('.home-block-2-slider-scroll').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        adaptiveHeight: true,
        useCSS: false
    });
    });
</script>
</body>
</html>
