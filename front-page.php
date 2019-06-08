<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="HandheldFriendly" content="true">
    <meta http-equiv="msthemecompatible" content="no"/>

    <link rel="icon" href="<?php bloginfo('template_url') ?>/favicon.png" type="image/png">
    <?php $meta_tag = get_field('head-meta-tags'); ?>
    <title><?php echo $meta_tag['title'] ?></title>
    <meta name="description" content="<?php echo $meta_tag['description'] ?>">
    <meta name="keywords" content="<?php echo $meta_tag['keywords'] ?>">
    <?php wp_head() ?>

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/module.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>?ver=09">
    <script async src="<?php bloginfo('template_url') ?>/js/uikit.min.js"></script>
    <script async src="<?php bloginfo('template_url') ?>/js/tiny-slider.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/slick.css"/>
</head>
<body>

<div class="site-overlay"></div>

<section class="start_screen_section">
    <header>
        <?php $header = get_field('header'); ?>
        <div class="header container">
            <a href="javascript:void(0);" class="header_logo">
                <img class='res' src="<?php echo $header['logo']['url'] ?>">
            </a>
            <button class="mobile_menu menu-btn"></button>
            <nav class="nav pushy pushy-left">
                <ul class="menu">
                    <li><a href="#services"><?php the_field('header_menu_item_1') ?></a></li>
                    <li><a href="#production"><?php the_field('header_menu_item_2') ?></a></li>
                    <li><a href="#partners"><?php the_field('header_menu_item_3') ?></a></li>
                    <li><a href="#our_works"><?php the_field('header_menu_item_4') ?></a></li>
                </ul>
            </nav>
            <div class="phone">


                <a class="phone_link" href="tel:<?php the_field('header_phone') ?>">
                    <?php the_field('header_phone'); ?></a>


            </div><?php if (function_exists('wpm_language_switcher')) wpm_language_switcher($type = 'dropdown', $show = 'both'); ?>
        </div>
    </header>
    <div class="container start_screen">
        <?php $startscreen = get_field('startscreen'); ?>
        <div class="start_screen_logo">
            <picture>
                <source media="(max-width: 767px)"
                        srcset="<?php echo $startscreen['mobile']['url'] ?>">
                <source media="(min-width: 768px)"
                        srcset="<?php echo $startscreen['desktop']['url'] ?>">
                <img src="<?php echo $startscreen['desktop']['url'] ?>">
            </picture>
        </div>
        <div class="start_screen_text">
            <h1><?php echo $startscreen['title'] ?></h1>
            <h2><?php echo $startscreen['subtitle'] ?></h2>
        </div>
    </div>
    <div class="arrow"></div>
    <?php
    $startscreen_bg = $startscreen['bg'];
    $bg_type = $startscreen_bg['bg-type']; ?>
    <?php if ($bg_type): ?>
        <?php $bg_video = $startscreen_bg['video'] ?>
        <video loop muted autoplay poster="<?php echo $bg_video['poster'] ?>"
               class="start_video_bg">
            <source src="<?php echo $bg_video['mp4'] ?>" type="video/mp4">
            <source src="<?php echo $bg_video['webm'] ?>" type="video/webm">
        </video>
    <?php else: ?>
        <div class="start_screen_bg"
             style="background-image:url(<?php echo $startscreen_bg['image'] ?>)"></div>
    <?php endif; ?>
</section>

<section class="advantages_section">
    <?php $advantages_item = get_field('advantages-item'); ?>
    <h3 class="title_box">
        <div class="screen_title">
            <span class="angle"></span>
            <span><?php the_field('advantages_title') ?></span>
            <span class="bg"><?php the_field('advantages_title-bg') ?></span>
        </div>
    </h3>
    <div class="container advantages">
        <div class="row">
            <?php foreach ($advantages_item as $row): ?>
                <div class="advantages_item col-lg col-md-4 col-12">
                    <div class="border"><img src="<?php echo $row['icon'] ?>"></div>
                    <p><?php echo $row['label'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="services" class="services_section">
    <?php $services_row = get_field('services-row'); ?>
    <div class="container">
        <h3 class="title_box">
            <div class="screen_title dark">
                <span class="angle"></span>
                <span><?php the_field('services-section_title') ?></span>
                <span class="bg"><?php the_field('services-section_title-bg') ?></span>
            </div>
        </h3>
        <div class="row services">
            <?php foreach ($services_row as $row): ?>
                <?php
                $service = $row['service-item'];
                $service_title = $service['title'];
                $service_list = $service['list-x'];
                $service_image = $service['image'];
                $service_icon = $service['icon']; ?>
                <div class="col-12 service_box">
                    <div class="service">
                        <div class="service_title"><?php echo $service_title ?></div>
                        <div class="viewport" uk-slider="finite: true">
                            <div class="list_slider uk-slider-items uk-child-width-1-1">
                                <?php
                                $tmp = array_chunk($service_list, 3);
                                foreach ($tmp as $k => $v) {
                                    echo '<ul class="service_list slide">';
                                    foreach ($v as $row => $list_items)
                                        echo "<li>$list_items[item] </li>";
                                    echo '</ul>';
                                }
                                ?>
                            </div>
                            <div class="uk-slider-nav service_navs">
                                <a href="#" class="service_arrow left"
                                   uk-slider-item="previous"></a>
                                <a href="#" class="service_arrow right" uk-slider-item="next"></a>
                            </div>
                        </div>
                        <div class="service_icon"
                             style="background-image:url(<?php echo $service_icon ?>)"></div>
                        <div class="service_bg"
                             style="background-image:url(<?php echo $service_image ?>)"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- <script>
        $(function(){
            var item_pos = 0;
          $('.service_box').each(function (index, element) {
                if (item_pos == 0) {
                    $(this).addClass('col-xl-4 col-lg-5');
                } else
                if (item_pos == 1) {
                    $(this).addClass('col-xl-8 col-lg-7');
                } else
                if (item_pos == 2) {
                    $(this).addClass('col-lg-6');
                } else
                if (item_pos == 3) {
                    $(this).addClass('col-lg-6');
                } else
                if (item_pos == 4) {
                    $(this).addClass('col-xl-8 col-lg-7');
                } else
                if (item_pos == 5) {
                    $(this).addClass('col-xl-4 col-lg-5');
                };
                if (item_pos == 6) {
                    item_pos = 0;
                    $(this).addClass('col-xl-4 col-lg-5');
                }
                ++item_pos;
          });
        });
    </script> -->
</section>

<section id="production" class="production_section">
    <?php
    $production_group = get_field('production-group');
    $production_section = get_field('production-section');
    $production_1 = $production_group['production-item-1'];
    $production_2 = $production_group['production-item-2'];
    $production_3 = $production_group['production-item-3'];
    $production_4 = $production_group['production-item-4'];
    ?>
    <div class="container">
        <div class="row production">
            <div class="col-lg-8 col-12">
                <h3 class="title_box">
                    <div class="screen_title">
                        <span class="angle"></span>
                        <span><?php echo $production_section['title'] ?></span>
                        <span class="bg"><?php echo $production_section['title-bg'] ?></span>
                    </div>
                </h3>
                <ul id="prod_box" class="uk-switcher production_box">
                    <?php if ($production_1): ?>
                        <li class="production_item">
                            <div uk-slideshow="ratio: 720:480" class="production_images">
                                <a uk-slideshow-item="previous" class="product_arrow left"
                                   href="#"></a>
                                <a uk-slideshow-item="next" class="product_arrow right"
                                   href="#"></a>
                                <div class="uk-slideshow-items">
                                    <?php foreach ($production_1['slideshow'] as $image): ?>
                                        <img class="res" src="<?php echo $image['url']; ?>">
                                    <?php endforeach; ?>
                                    <?php echo $production_1['video'] ?>
                                </div>
                            </div>
                            <?php echo $production_1['caption'] ?>
                        </li>
                    <?php endif; ?>
                    <?php if ($production_2): ?>
                        <li class="production_item">
                            <div uk-slideshow="ratio: 720:480" class="production_images">
                                <a uk-slideshow-item="previous" class="product_arrow left"
                                   href="#"></a>
                                <a uk-slideshow-item="next" class="product_arrow right"
                                   href="#"></a>
                                <div class="uk-slideshow-items">
                                    <?php foreach ($production_2['slideshow'] as $image): ?>
                                        <img class="res" src="<?php echo $image['url']; ?>">
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php echo $production_2['caption'] ?>
                        </li>
                    <?php endif; ?>
                    <?php if ($production_3): ?>
                        <li class="production_item">
                            <div uk-slideshow="ratio: 720:480" class="production_images">
                                <a uk-slideshow-item="previous" class="product_arrow left"
                                   href="#"></a>
                                <a uk-slideshow-item="next" class="product_arrow right"
                                   href="#"></a>
                                <div class="uk-slideshow-items">
                                    <?php foreach ($production_3['slideshow'] as $image): ?>
                                        <img class="res" src="<?php echo $image['url']; ?>">
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php echo $production_3['caption'] ?>
                        </li>
                    <?php endif; ?>
                    <?php if ($production_4): ?>
                        <li class="production_item">
                            <div uk-slideshow="ratio: 720:480" class="production_images">
                                <a uk-slideshow-item="previous" class="product_arrow left"
                                   href="#"></a>
                                <a uk-slideshow-item="next" class="product_arrow right"
                                   href="#"></a>
                                <div class="uk-slideshow-items">
                                    <?php foreach ($production_4['slideshow'] as $image): ?>
                                        <img class="res" src="<?php echo $image['url']; ?>">
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php echo $production_4['caption'] ?>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-lg-4 col-12">
                <ul uk-switcher="connect: .production_box; swiping: false;  animation: uk-animation-fade"
                    class="production_thumbnav">
                    <?php if ($production_1): ?>
                        <a class="production_thumbnav_item prod_1" href="#prod_box">
                            <div class='div'><span
                                        class='icon'></span><?php echo $production_1['thumb'] ?>
                            </div>
                            <div class="more"><span><?php echo $production_1['button'] ?></span>
                            </div>
                        </a>
                    <?php endif; ?>
                    <?php if ($production_2): ?>
                        <a class="production_thumbnav_item prod_2" href="#prod_box">
                            <div class='div'><span
                                        class='icon'></span><?php echo $production_2['thumb'] ?>
                            </div>
                            <div class="more"><span><?php echo $production_2['button'] ?></span>
                            </div>
                        </a>
                    <?php endif; ?>
                    <?php if ($production_3): ?>
                        <a class="production_thumbnav_item prod_3" href="#prod_box">
                            <div class='div'><span
                                        class='icon'></span><?php echo $production_3['thumb'] ?>
                            </div>
                            <div class="more"><span><?php echo $production_3['button'] ?></span>
                            </div>
                        </a>
                    <?php endif; ?>
                    <?php if ($production_4): ?>
                        <a class="production_thumbnav_item prod_4" href="#prod_box">
                            <div class='div'><span
                                        class='icon'></span><?php echo $production_4['thumb'] ?>
                            </div>
                            <div class="more"><span><?php echo $production_4['button'] ?></span>
                            </div>
                        </a>
                    <?php endif; ?>
                </ul>
            </div>
            <!-- <script>
            $(document).ready(function(){
                if ($(window).width() < 600) {
                    function scrollToDiv(element,navheight){
                    var offset = element.offset();
                    var offsetTop = offset.top;
                    var totalScroll = offsetTop-navheight;

                    $('body,html').animate({
                            scrollTop: totalScroll
                    }, 500);
                    }
                    $('.production_thumbnav_item').click(function(){
                    var el = $(this).attr('href');
                    var elWrapped = $(el);
                    scrollToDiv(elWrapped,10);
                    });
                }
            });
            </script> -->
        </div>
    </div>
    <div class="production_bg"
         style="background-image:url(<?php echo $production_section['image'] ?>)"></div>
</section>

<section id="partners" class="partners_section">
    <?php
    $partners_row = get_field('partners-row');
    $partners_section = get_field('partners-section'); ?>
    <div class="container">
        <h3 class="title_box part">
            <div class="screen_title dark">
                <span class="angle"></span>
                <span><?php echo $partners_section['title'] ?></span>
                <span class="bg"><?php echo $partners_section['title-bg'] ?></span>
            </div>
        </h3>
        <div class="row pre_partners">
            <div class="col-md-9">
                <ul class="pre_partners_list"
                    uk-switcher="connect: .partners_switcher; toggle: .pre_part_item; swiping: false; animation: uk-animation-fade">
                    <div class="span_box">
                        <?php foreach ($partners_row as $row): ?>
                            <?php $company = $row['company']; ?>
                            <li class="pre_part_item">
                                <div class="image"><img src="<?php echo $company['logo'] ?>"
                                                        class="res"></div>
                                <div class="text">
                                    <div><?php echo $company['name'] ?></div>
                                    <span><?php echo $company['about'] ?></span>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </div>
                    <div class="navContainer"></div>
                </ul>
            </div>
        </div>

        <div class="row partners">
            <div class="col-lg-8 col-12">
                <ul class="partners_switcher uk-switcher">
                    <?php foreach ($partners_row as $row): ?>
                        <?php $company = $row['company']; ?>
                        <li class="partners_item">
                            <div class="partner_text">
                                <div class="part_name"><?php echo $company['name'] ?></div>
                                <?php echo $company['description'] ?>
                            </div>
                            <div uk-slideshow="ratio: 720:480" class="partners_images">
                                <a uk-slideshow-item="previous" class="partners_arrow left"
                                   href="#"></a>
                                <ul class="uk-slideshow-items">
                                    <?php foreach ($company['photo'] as $image): ?>
                                        <li>
                                            <img src="<?php echo $image['url'] ?>" class="res">
                                            <div class="partners_field"><?php echo $image['caption'] ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <a uk-slideshow-item="next" class="partners_arrow right"
                                   href="#"></a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-lg-4 col-12">
                <div class='partners_thumbs_viewport'>
                    <div class="parthe">
                        <button class="butt up"></button>
                        <button class="butt down"></button>
                    </div>
                    <div class="parthe2">
                        <button class="butts left"></button>
                        <button class="butts right"></button>
                    </div>
                    <ul class="partners_thumbs partners_thumbs2"
                        uk-switcher="connect: .partners_switcher; toggle: > .partners_thumbnav_item; swiping: false; animation: uk-animation-fade">
                        <?php foreach ($partners_row as $row): ?>
                            <?php $company = $row['company']; ?>
                            <li class="partners_thumbnav_item">
                                <div class="thumb_image"><img src="<?php echo $company['logo'] ?>"
                                                              class="res"></div>
                                <div class="thumb_text">
                                    <div><?php echo $company['name'] ?></div>
                                    <span><?php echo $company['about'] ?></span>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="our_works" class="our_works_section">
    <?php
    $ourworks_row = get_field('ourworks-row');
    $ourworks_section = get_field('ourworks-section'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="title_box">
                <div class="screen_title">
                    <span class="angle"></span>
                    <span><?php echo $ourworks_section['title'] ?></span>
                    <span class="bg"><?php echo $ourworks_section['title-bg'] ?></span>
                </div>
                <div class="subtitle">У нас правда крутые работы, посмотрите</div>
            </h3>
        </div>

        <div class="pre_work"
             uk-switcher="connect: .works_list; toggle: .pre_learn_more; swiping: false; animation: uk-animation-fade">
            <?php foreach ($ourworks_row as $row): ?>
                <?php $project = $row['project']; ?>
                <?php $project_images = $project['photo']; ?>
                <div class="pre_work_item">
                    <div class="img_box">
                        <img src="<?php echo $project_images[0]['url'] ?>" class="res">
                    </div>
                    <div class="pre_work_text">
                        <div class="name"><?php echo $project['name'] ?></div>
                        <div class="har"><?php echo $project['prew'] ?></div>
                        <button class="pre_learn_more">Подробнее</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <script>
          while ($('.pre_work > .pre_work_item:lt(5)').length) {
            $('.pre_work > .pre_work_item:lt(5)').wrapAll('<div class=\'pre_work_box\'></div>')
          }
        </script>


        <div class="row work_more">
            <div class="col-xl-12">
                <div class="uk-switcher works_list">
                    <?php foreach ($ourworks_row as $row): ?>
                        <?php $project = $row['project']; ?>
                        <div class="work_item row">
                            <div class="title col-12"><?php echo $project['name'] ?></div>

                            <div uk-slideshow="ratio: 720:480" class="col-lg-6 work_images work_alignment">
                                <a uk-slideshow-item="previous" class="work_arrow left"
                                   href="#"></a>
                                <div class="uk-slideshow-items">
                                    <?php foreach ($project['photo'] as $image): ?>
                                        <img src="<?php echo $image['url'] ?>" class="res">
                                    <?php endforeach; ?>
                                </div>
                                <a uk-slideshow-item="next" class="work_arrow right"
                                   href="#"></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="work_switch_viewport">
                    <ul class="work_switcher"
                        uk-switcher="connect: .works_list; toggle: > .work_thumb; swiping: false; animation: uk-animation-fade">
                        <?php foreach ($ourworks_row as $row): ?>
                            <?php $project = $row['project']; ?>
                            <li class="work_thumb">
                                <span class='work_field_num'></span>
                                <img src="<?php echo $project['thumb'] ?>">
                                <div class="work_field"><?php echo $project['name'] ?></div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="our_work_navs">
                        <button class="butt left"></button>
                        <button class="butt right"></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="our_work_bg"
         style="background-image:url(<?php echo $ourworks_section['image'] ?>)"></div>
</section>

<script src="<?php bloginfo('template_url') ?>/js/slick.min.js"></script>
<script async src="<?php bloginfo('template_url') ?>/js/scripts.js?ver=09"></script>
<footer class="footer">
    <?php $footer = get_field('footer'); ?>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-3 col-md-4">
                <div class="footer_first">
                    <img src="<?php echo $footer['logo'] ?>">
                    <a class="phone"
                       href="tel:<?php echo $footer['phone'] ?>"><?php echo $footer['phone'] ?></a>
                    <a class="mail"
                       href="<?php echo $footer['mail'] ?>"><?php echo $footer['mail'] ?></a>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="footer_second">
                    <?php echo $footer['adres'] ?>
                    <a href="<?php echo $footer['drive'] ?>">Схема проезда</a>
                </div>
            </div>
        </div>
    </div>
    <div class="copy"><?php echo $footer['copy'] ?></div>
</footer>
<?php $head_metrics = get_field('head-custom-code'); ?>
<?php echo $head_metrics ?>

<script async src="<?php bloginfo('template_url') ?>/js/pushy.min.js"></script>
<?php wp_footer() ?>

</body>
</html>
