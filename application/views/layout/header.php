<!DOCTYPE html>
<html lang="en">

<head>
    <title>HanamiLearning</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Lingua project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/hanami-learning-favicon-color_logo.ico.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/bootstrap4/bootstrap.min.css'); ?>">
    <link href="<?php echo base_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css'); ?>" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css'); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css'); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/animate.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/main_styles.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/responsive.css'); ?>">
</head>

<body>
    <div class="super_container">
        <!-- Header -->
        <header class="header">
            <!-- Top Bar -->
            <div class="top_bar">
                <div class="top_bar_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="top_bar_phone"><span class="top_bar_title">phone:</span>+62 859 1066
                                        60407
                                    </div>
                                    <div class="top_bar_right ml-auto">

                                        <!-- Social -->
                                        <div class="top_bar_social">
                                            <span class="top_bar_title social_title">follow us</span>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Content -->
<div class="header_container">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_content d-flex flex-row align-items-center justify-content-between">
                    <!-- Logo -->
                    <div class="logo_container">
                        <a href="top" class="logo_text">HanamiLearning</a>
                    </div>

                    <!-- Main Navigation -->
                    <nav class="main_nav_container">
                        <ul class="main_nav">
                            <li class="active"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                            <li class="active"><a href="<?= base_url('courses'); ?>">Courses</a></li>
                            <li class="active"><a href="<?= base_url('instructor'); ?>">Instructors</a></li>
                            <li class="active"><a href="<?= base_url('blog'); ?>">Blog</a></li>
                            <li class="active"><a href="<?= base_url('contact'); ?>">Contact</a></li>
                        </ul>
                    </nav>

                    <!-- User Section -->
                    <div class="user-section d-flex flex-row align-items-center">
                        <div class="user ml-2">
                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                        </div>
                        <div class="user_greeting ml-2">
                            <?php
                                if ($this->session->userdata('Email')) {
                                    echo 'Welcome! ' . $this->session->userdata('Email');
                                } else {
                                    echo 'Pengguna tidak login';
                                }
                            ?>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= base_url('dashboard'); ?>">Dashboard</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url('logout'); ?>">Logout</a>
                        </div>
                    </div>

                    <!-- Hamburger -->
                    <div class="hamburger menu_mm">
                    <a href="<?= base_url('userdashboard'); ?>">
                        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</header>


    <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
        <div class="menu_close_container">
            <div class="menu_close">
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="search">
            <form action="#" class="header_search_form menu_mm">
                <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                <button
                    class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                    <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <nav class="menu_nav">
            <ul class="menu_mm">
                <li class="menu_mm"><a href="index.html">Home</a></li>
                <li class="menu_mm"><a href="courses.html">Courses</a></li>
                <li class="menu_mm"><a href="instructors.html">Instructors</a></li>
                <li class="menu_mm"><a href="#">Events</a></li>
                <li class="menu_mm"><a href="blog.html">Blog</a></li>
                <li class="menu_mm"><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
        <div class="menu_extra">
            <div class="menu_phone"><span class="menu_title">phone:</span>+62 859 1066 60407</div>
            <div class="menu_social">
                <span class="menu_title">follow us</span>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>