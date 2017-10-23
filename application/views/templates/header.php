<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.gridgum.com/templates/bootstrap-templates/22367/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Oct 2017 08:26:31 GMT -->
<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="dreamworker.co">
    <meta name="description" content="<?=$meta_description ?>">
    <link rel="icon" href="/assets/frontend/images/favicon.html" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.html" type="image/x-icon"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/frontend/css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/assets/frontend/css/bootstrap-responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/assets/frontend/css/camera.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/assets/frontend/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/assets/frontend/css/touchTouch.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/assets/frontend/css/isotope.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css"
          href="/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>


    <script type="text/javascript" src="/assets/frontend/js/jquery.js"></script>
    <script type="text/javascript" src="/assets/frontend/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/assets/frontend/js/superfish.js"></script>

    <script type="text/javascript" src="/assets/frontend/js/jquery.ui.totop.js"></script>

    <script type="text/javascript" src="/assets/frontend/js/camera.js"></script>
    <script type="text/javascript" src="/assets/frontend/js/jquery.mobile.customized.min.js"></script>


    <script type="text/javascript" src="/assets/frontend/js/touchTouch.jquery.js"></script>
    <script type="text/javascript" src="/assets/frontend/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/frontend/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/slick/slick-theme.css">
    <script>
        $(document).ready(function () {
            $(".date-picker").datetimepicker();
            // camera
            $('#camera_wrap').camera({
                //thumbnails: true
                autoAdvance: true,
                mobileAutoAdvance: true,
                //fx					: 'simpleFade',
                height: '70%',
                hover: false,
                loader: 'none',
                navigation: true,
                navigationHover: true,
                mobileNavHover: true,
                playPause: false,
                pauseOnClick: false,
                pagination: false,
                time: 7000,
                transPeriod: 1000,
                minHeight: '200px'
            });

        }); //
        $(window).load(function () {
            //
            // isotop
            var $container = $('#isotope-items'),
                $optionSet = $('#isotope-options'),
                $optionSets = $('#isotope-filters'),
                $optionLinks = $optionSets.find('a');
            $container.isotope({
                filter: '*',
                layoutMode: 'fitRows'
            });
            $optionLinks.click(function(){
                var $this = $(this);
                // don't proceed if already selected
                if ( $this.hasClass('selected') ) {
                    return false;
                }
                $optionSet.find('.selected').removeClass('selected');
                $this.addClass('selected');

                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector
                });
                return false;
            });
            $(window).on("resize", function( event ) {
                $container.isotope('reLayout');
            });

            // touchTouch
            $('.thumb-isotope .thumbnail a').touchTouch();

        }); //
    </script>
    <!--[if lt IE 8]>
    <div style='text-align:center'><a
            href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img
            src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt=""/></a></div>
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="/assets/frontend/css/ie.css" type="text/css" media="screen">
    <![endif]-->
</head>

<body class="main">
<div id="main">
    <?php if (!$error404): ?>
    <div class="top1_wrapper">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="top1">
                        <div class="top1_inner">
                            <div class="top1_inner2">
                                <header>
                                    <div class="logo_wrapper"><a href="/" class="logo"><img
                                                    src="/assets/frontend/images/logo.png" alt=""></a></div>
                                </header>
                                <div class="menu_wrapper">
                                    <div class="navbar navbar_">
                                        <div class="navbar-inner navbar-inner_">
                                            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse"
                                               data-target=".nav-collapse_">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </a>
                                            <div class="nav-collapse nav-collapse_ collapse">
                                                <ul class="nav sf-menu clearfix">
                                                    <li class="sub-menu sub-menu-1">
                                                        <a href="javascript:;"><?= $this->lang->line('header_language_'.$lang) ?>
                                                            <em></em>
                                                        </a>
                                                        <ul>
                                                            <?php foreach ($languages as $key => $language): ?>
                                                                <?php if ($key != $lang): ?>
                                                                    <li>
                                                                        <a href="/<?= $key ?>/"><?= $this->lang->line('header_language_'.$key) ?></a>
                                                                    </li>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </li>
                                                    <?php if (empty($page)): ?>
                                                        <li class="active"><a
                                                                    href="/<?= $lang ?>"><?= $this->lang->line('header_menu_home') ?></a>
                                                        </li>
                                                    <?php else: ?>
                                                        <li><a href="/"><?= $this->lang->line('header_menu_home') ?></a>
                                                        </li>
                                                    <?php endif; ?>

                                                    <?php if ($page === 'cars'): ?>
                                                        <li class="active"><a
                                                                    href="/<?= $lang ?>/cars"><?= $this->lang->line('header_menu_cars') ?></a>
                                                        </li>
                                                    <?php else: ?>
                                                        <li>
                                                            <a href="/<?= $lang ?>/cars"><?= $this->lang->line('header_menu_cars') ?></a>
                                                        </li>
                                                    <?php endif; ?>

                                                    <?php if ($page === 'booking'): ?>
                                                        <li class="active"><a
                                                                    href="/<?= $lang ?>/booking"><?= $this->lang->line('header_menu_booking') ?></a>
                                                        </li>
                                                    <?php else: ?>
                                                        <li>
                                                            <a href="/<?= $lang ?>/booking"><?= $this->lang->line('header_menu_booking') ?></a>
                                                        </li>
                                                    <?php endif; ?>

                                                    <?php if (in_array($page, $services_urls)): ?>
                                                    <li class="sub-menu sub-menu-1 active">
                                                        <a href="/"><?= $this->lang->line('header_menu_services') ?>
                                                        <em></em></a>
                                                    <?php else: ?>
                                                    <li class="sub-menu sub-menu-1"><a
                                                                href="/"><?= $this->lang->line('header_menu_services') ?>
                                                            <em></em></a>
                                                        <?php endif; ?>
                                                        <ul>
                                                            <?php foreach ($order_types as $order_type): ?>
                                                                <?php if ($order_type['url'] == $page): ?>
                                                                    <li class="active"><a
                                                                                href="/<?= $lang ?>/<?= $order_type['url'] ?>"><?= $order_type['name'] ?></a>
                                                                    </li>
                                                                <?php else: ?>
                                                                    <li>
                                                                        <a href="/<?= $lang ?>/<?= $order_type['url'] ?>"><?= $order_type['name'] ?></a>
                                                                    </li>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </li>

                                                    <?php if ($page === 'contacts'): ?>
                                                        <li class="active"><a
                                                                    href="/<?= $lang ?>/contacts"><?= $this->lang->line('header_menu_contacts') ?></a>
                                                        </li>
                                                    <?php else: ?>
                                                        <li>
                                                            <a href="/<?= $lang ?>/contacts"><?= $this->lang->line('header_menu_contacts') ?></a>
                                                        </li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="top1_corner1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="slider_wrapper">
        <div id="slider" class="clearfix">
            <div class="slider_px2"></div>
            <div class="order1">
                <div class="txt1">
                    <?= $this->lang->line('header_call') ?></div>
                <div class="txt2">1 800 123 4567</div>
            </div>

            <div id="camera_wrap">
                <div data-src="/assets/frontend/images/slide01.jpg">
                    <div class="camera_caption fadeIn">
                        <div class="txt1"><?= $this->lang->line('header_menu_title1') ?></div>
                        <div class="txt2"><?= $this->lang->line('header_menu_title2') ?></div>
                    </div>
                </div>
                <div data-src="/assets/frontend/images/slide02.jpg">
                    <div class="camera_caption fadeIn">
                        <div class="txt1"><?= $this->lang->line('header_menu_title1') ?></div>
                        <div class="txt2"><?= $this->lang->line('header_menu_title2') ?></div>
                    </div>
                </div>
                <div data-src="/assets/frontend/images/slide03.jpg">
                    <div class="camera_caption fadeIn">
                        <div class="txt1"><?= $this->lang->line('header_menu_title1') ?></div>
                        <div class="txt2"><?= $this->lang->line('header_menu_title2') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>