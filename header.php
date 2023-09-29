<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="O melhor para o seu amiguinho de pelo">
    <script src="https://kit.fontawesome.com/81cf49532b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <?php wp_body_open() ?>

    <div id="page" class="site">
        <header class="site__header container">
            <div class="wrapper">
                <div class="header__content">
                    <img src="../../../wp-content/themes/veterinary/assets/logo.webp" alt="logo">

                    <i class="fa-solid fa-bars header__menu--mobile"></i>
                    <div class="menu__mobile_popup">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <i class="fa-solid fa-magnifying-glass menu__search"></i>
                        </form>

                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <img class="swiper-slide" src="../../../wp-content/themes/veterinary/assets/img/slide1.webp" alt="">
                                <img class="swiper-slide" src="../../../wp-content/themes/veterinary/assets/img/slide2.webp" alt="">
                                <img class="swiper-slide" src="../../../wp-content/themes/veterinary/assets/img/slide3.webp" alt="">
                            </div>

                            <div class="swiper-pagination"></div>
                        </div>

                    </div>

                    <ul class="header__menu--desktop">
                        <li>Home</li>
                        <li>About</li>
                        <li>Service</li>
                        <li>Contact</li>
                    </ul>
                    <form action="#">
                        <input type="text" placeholder="Search...">
                        <i class="fa-solid fa-magnifying-glass menu__search"></i>
                    </form>
                </div>
            </div>
        </header>