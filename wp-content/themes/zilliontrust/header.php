<!DOCTYPE html>
<html lang="en-US">

<head>
    <?php wp_head() ?>
</head>

<body>
    <header class="page-header d-none d-sm-block">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-6 col-xl-5">
                    <a id="zt-logo" href="<?php echo esc_url(home_url('/')) ?>" class="d-block animate__animated animate__slideInDown">
                        <img src="<?php echo get_theme_file_uri('images/logo-zillion-trust-plc-light.png') ?>">
                    </a>
                </div>
                <div class="col-sm-6 col-md-8 col-lg-6 col-xl-7">
                    <div class="row">
                        <div class="col-lg-12 col-xl-4 d-flex mb-3 mb-xl-0 d-none d-md-flex">
                            <i class="las la-map-marker"></i>
                            <div>#50 street 516 corner 335, Phum 6, Sangkat Beung kak I, Khan Toul Kork, Phnom Penh,
                                Cambodia</div>
                        </div>
                        <div class="col-md-6 col-xl-4 d-flex">
                            <i class="las la-phone"></i>
                            <div>
                                <p class="mb-1">(+855) 10 722 168</p>
                                <a class="text-reset" href="mailto:info@zilliontrust.com.kh">info@zilliontrust.com.kh</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 d-flex">
                            <i class="lab la-facebook-f"></i>
                            <a class="text-reset" href="./">Facebook Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <nav class="primary-menu-wrapper sticky-top" role="navigation">

        <div class="container">

            <header class="d-flex d-sm-none p-3">
                <a id="sm-logo" href="<?php echo esc_url(home_url('/')) ?>" class="animate__animated animate__slideInLeft me-auto">
                    <img src="<?php echo get_theme_file_uri('images/logo-zillion-trust-plc-light.png') ?>" height="30">
                </a>
                <a href="javascript:" id="toggle_menu" onclick="toggle_menu(this)" class="animate__animated animate__slideInRight"><i class="las la-bars"></i></a>
            </header>

            <?php

            wp_nav_menu(
                array(
                    'container'     => '',
                    'items_wrap'    => '<ul id="%1$s" class="primary-menu">%3$s</ul>',
                )
            );

            ?>

        </div>
    </nav>