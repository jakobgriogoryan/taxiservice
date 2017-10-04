<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.6.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Metronic | Admin Dashboard Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="<?= base_url()?>/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN PAGE STYLES -->
    <link href="<?= base_url()?>/assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
    <link href="<?= base_url()?>/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>/assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>/assets/admin/layout2/css/themes/grey.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="<?= base_url()?>/assets/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<body class="page-boxed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner container">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
                <img src="<?php base_url()?>/assets/admin/layout2/img/logo-default.png" alt="logo" class="logo-default"/>
            </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE ACTIONS -->
        <!-- DOC: Remove "hide" class to enable the page header actions -->
        <div class="page-actions hide">
            <div class="btn-group">
                <button type="button" class="btn btn-circle red-pink dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-bar-chart"></i>&nbsp;<span class="hidden-sm hidden-xs">New&nbsp;</span>&nbsp;<i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="#">
                            <i class="icon-user"></i> New User </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-present"></i> New Event <span class="badge badge-success">4</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-basket"></i> New order </a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-flag"></i> Pending Orders <span class="badge badge-danger">4</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-users"></i> Pending Users <span class="badge badge-warning">12</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-circle green-haze dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-bell"></i>&nbsp;<span class="hidden-sm hidden-xs">Post&nbsp;</span>&nbsp;<i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="#">
                            <i class="icon-docs"></i> New Post </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-tag"></i> New Comment </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-share"></i> Share </a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-flag"></i> Comments <span class="badge badge-success">4</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-users"></i> Feedbacks <span class="badge badge-danger">2</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END PAGE ACTIONS -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN HEADER SEARCH BOX -->
            <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
            <!--            <form class="search-form search-form-expanded" action="extra_search.html" method="GET">-->
            <!--                <div class="input-group">-->
            <!--                    <input type="text" class="form-control" placeholder="Search..." name="query">-->
            <!--                    <span class="input-group-btn">-->
            <!--					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>-->
            <!--					</span>-->
            <!--                </div>-->
            <!--            </form>-->
            <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <!--                    <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">-->
                    <!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">-->
                    <!--                            <i class="icon-bell"></i>-->
                    <!--                            <span class="badge badge-default">-->
                    <!--						7 </span>-->
                    <!--                        </a>-->
                    <!--                        <ul class="dropdown-menu">-->
                    <!--                            <li class="external">-->
                    <!--                                <h3><span class="bold">12 pending</span> notifications</h3>-->
                    <!--                                <a href="extra_profile.html">view all</a>-->
                    <!--                            </li>-->
                    <!--                            <li>-->
                    <!--                                <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">-->
                    <!--                                    <li>-->
                    <!--                                        <a href="javascript:;">-->
                    <!--                                            <span class="time">just now</span>-->
                    <!--                                            <span class="details">-->
                    <!--										<span class="label label-sm label-icon label-success">-->
                    <!--										<i class="fa fa-plus"></i>-->
                    <!--										</span>-->
                    <!--										New user registered. </span>-->
                    <!--                                        </a>-->
                    <!--                                    </li>-->
                    <!---->
                    <!--                                </ul>-->
                    <!--                            </li>-->
                    <!--                        </ul>-->
                    <!--                    </li>-->
                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN INBOX DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <!--                    <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">-->
                    <!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">-->
                    <!--                            <i class="icon-envelope-open"></i>-->
                    <!--                            <span class="badge badge-default">-->
                    <!--						4 </span>-->
                    <!--                        </a>-->
                    <!--                        <ul class="dropdown-menu">-->
                    <!--                            <li class="external">-->
                    <!--                                <h3>You have <span class="bold">7 New</span> Messages</h3>-->
                    <!--                                <a href="page_inbox.html">view all</a>-->
                    <!--                            </li>-->
                    <!--                            <li>-->
                    <!--                                <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">-->
                    <!--                                    <li>-->
                    <!--                                        <a href="inbox.html?a=view">-->
                    <!--										<span class="photo">-->
                    <!--										<img src="" class="img-circle" alt="">-->
                    <!--										</span>-->
                    <!--                                            <span class="subject">-->
                    <!--										<span class="from">-->
                    <!--										Lisa Wong </span>-->
                    <!--										<span class="time">Just Now </span>-->
                    <!--										</span>-->
                    <!--                                            <span class="message">-->
                    <!--										Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>-->
                    <!--                                        </a>-->
                    <!--                                    </li>-->
                    <!---->
                    <!--                                </ul>-->
                    <!--                            </li>-->
                    <!--                        </ul>-->
                    <!--                    </li>-->
                    <!-- END INBOX DROPDOWN -->
                    <!-- BEGIN TODO DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <!--                    <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">-->
                    <!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">-->
                    <!--                            <i class="icon-calendar"></i>-->
                    <!--                            <span class="badge badge-default">-->
                    <!--						3 </span>-->
                    <!--                        </a>-->
                    <!--                        <ul class="dropdown-menu extended tasks">-->
                    <!--                            <li class="external">-->
                    <!--                                <h3>You have <span class="bold">12 pending</span> tasks</h3>-->
                    <!--                                <a href="page_todo.html">view all</a>-->
                    <!--                            </li>-->
                    <!--                            <li>-->
                    <!--                                <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">-->
                    <!--                                    <li>-->
                    <!--                                        <a href="javascript:;">-->
                    <!--										<span class="task">-->
                    <!--										<span class="desc">New release v1.2 </span>-->
                    <!--										<span class="percent">30%</span>-->
                    <!--										</span>-->
                    <!--                                            <span class="progress">-->
                    <!--										<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>-->
                    <!--										</span>-->
                    <!--                                        </a>-->
                    <!--                                    </li>-->
                    <!--                                </ul>-->
                    <!--                            </li>-->
                    <!--                        </ul>-->
                    <!--                    </li>-->
                    <!-- END TODO DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <span class="username username-hide-on-mobile">
						<?=$this->session->userdata('name') ?> </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="/admin/auth/logout">
                                    <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="container">
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <?php if($page == 'home'): ?>
                        <li class="start active ">
                        <?php else: ?>
                        <li class="start">
                        <?php endif; ?>
                        <a href="/admin/home">
                            <i class="icon-home"></i>
                            <span class="title">Home</span>
                            <span class="selected"></span>
                        </a>
                        <?php if($page == 'admins'): ?>
                        <li class="active ">
                        <?php else: ?>
                        <li class="">
                        <?php endif; ?>
                        <a href="/admin/admins">
                            <i class="icon-user"></i>
                            <span class="title">Admins</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </div>