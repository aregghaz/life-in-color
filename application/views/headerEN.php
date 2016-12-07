<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js"></script>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/form.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/slider.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/style.css">
    <script src="<?php echo base_url() ?>/js/jquery.js"></script>
    <script src="<?php echo base_url() ?>/js/jquery-migrate-1.1.1.js"></script>
    <script src="<?php echo base_url() ?>/js/script.js"></script>
    <script src="<?php echo base_url() ?>/js/jquery.ui.totop.js"></script>
    <script src="<?php echo base_url() ?>/js/superfish.js"></script>
    <script src="<?php echo base_url() ?>/js/jquery.equalheights.js"></script>
    <script src="<?php echo base_url() ?>/js/jquery.mobilemenu.js"></script>
    <script src="<?php echo base_url() ?>/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url() ?>/js/owl.carousel.js"></script>
    <script src="<?php echo base_url() ?>/js/jquery.flexslider-min.js"></script>
    <script src="<?php echo base_url() ?>/js/kwiks.js"></script>
    <script src="<?php echo base_url() ?>/js/TMForm.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $().UItoTop({easingType: 'easeOutQuart'});
            var owl = $("#owl");
            owl.owlCarousel({
                items: 4, //10 items above 1000px browser width
                itemsDesktop: [995, 3], //5 items between 1000px and 901px
                itemsDesktopSmall: [767, 2], // betweem 900px and 601px
                itemsTablet: [700, 2], //2 items between 600 and 0
                itemsMobile: [479, 1], // itemsMobile disabled - inherit from itemsTablet option
                navigation: true,
                autoPlay: true

            });
        });

        var Main = Main || {};
        jQuery(window).load(function () {
            window.responsiveFlag = jQuery('#responsiveFlag').css('display');
            Main.gallery = new Gallery();
            jQuery(window).resize(function () {
                Main.gallery.update();
            });
        });
        function Gallery() {
            var self = this,
                container = jQuery('.flexslider'),
                clone = container.clone(false);
            this.init = function () {
                if (responsiveFlag == 'block') {
                    var slides = container.find('.slides');
                    slides.kwicks({
                        max: 500,
                        spacing: 0
                    }).find('li > a').click(function () {
                        return false;
                    });
                } else {
                    container.flexslider();
                }
            }
            this.update = function () {
                var currentState = jQuery('#responsiveFlag').css('display');
                if (responsiveFlag != currentState) {
                    responsiveFlag = currentState;
                    container.replaceWith(clone);
                    container = clone;
                    clone = container.clone(false);
                    this.init();
                }
            };
            this.init();
        }

        $(document).ready(function () {
            $().UItoTop({easingType: 'easeOutQuart'});
            var owl = $("#owl2");
            owl.owlCarousel({
                items: 4, //10 items above 1000px browser width
                itemsDesktop: [995, 3], //5 items between 1000px and 901px
                itemsDesktopSmall: [767, 2], // betweem 900px and 601px
                itemsTablet: [700, 2], //2 items between 600 and 0
                itemsMobile: [479, 1], // itemsMobile disabled - inherit from itemsTablet option
                navigation: true,
                autoPlay: true
            });
        })
        var Main = Main || {};
        jQuery(window).load(function () {
            window.responsiveFlag = jQuery('#responsiveFlag').css('display');
            Main.gallery = new Gallery();
            jQuery(window).resize(function () {
                Main.gallery.update();
            });
        });
        function Gallery() {
            var self = this,
                container = jQuery('.flexslider'),
                clone = container.clone(false);
            this.init = function () {
                if (responsiveFlag == 'block') {
                    var slides = container.find('.slides');
                    slides.kwicks({
                        max: 500,
                        spacing: 0
                    }).find('li > a').click(function () {
                        return false;
                    });
                } else {
                    container.flexslider();
                }
            }
            this.update = function () {
                var currentState = jQuery('#responsiveFlag').css('display');
                if (responsiveFlag != currentState) {
                    responsiveFlag = currentState;
                    container.replaceWith(clone);
                    container = clone;
                    clone = container.clone(false);
                    this.init();
                }
            };
            this.init();
        }

    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
                 height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url() ?>/js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="<?php echo base_url() ?>/css/ie.css">
    <![endif]-->
</head>

<body class="page1" id="top">

<!--==============================header=================================-->
<header>

    <div class="clear"></div>
    <div class="container_12">
  <span>
      <a href="<?php echo base_url() ?>index.php/PagesEN">
          <img src="<?php echo base_url() ?>/images/flagUS.png" alt="US">
      </a>
       <a href="<?php echo base_url() ?>">
           <img src="<?php echo base_url() ?>/images/AMflag.gif" alt="AM">
       </a>
  </span>
        <!--==============================LOGO=================================-->
        <div class="grid_12 header_logo_index">
            <h2 id="headerLogo"><strong>Armenian Ergo Therapists Association</strong></h2>

        </div>
        <!--==============================End LOGO=================================-->
        <!--==============================Menu=================================-->
        <div class="grid_12">
            <div class="menu_block">
                <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                    <ul class="sf-menu">
                        <li><a href="<?php echo base_url() ?>index.php/PagesEN">General</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/PagesEN/about">About us</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/PagesEN/education">Education</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/PagesEN/video">Videos</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/PagesEN/partners">Partners</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/PagesEN/news">News</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/PagesEN/contacts">Contact Us</a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <!--==============================End Menu=================================-->
    </div>
</header>
<!--==============================end header=================================-->