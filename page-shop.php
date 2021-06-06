<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header-menu'); ?>
    <section class="shop-page">
        <div class="shop-page__inner inner wow fadeIn" data-wow-duration="4s">
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <h1 class="shop-page__head">Shop Info</h1><!-- /.shop-page__head -->
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <h2 class="shop-page__title">Shop Photo</h2><!-- /.shop-page__title -->
            <div class="shop__photos">
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/shop1.png');?>" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/shop2.png');?>" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/shop3.png');?>" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/shop4.png');?>" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/shop5.png');?>" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/shop6.png');?>" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/shop7.png');?>" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/shop8.png');?>" alt="">
                </div><!-- /.shop-photo -->
            </div><!-- /.shop__photos -->
            <div class="SPACER--200"></div><!-- /.SAPCER--200 -->
        </div><!-- /.shop-page__inner inner -->
    </section><!-- /.shop-page -->
    <section class="recruit">
        <div class="recruit__inner inner">
            <div class="recruit__image">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/recruit.png');?>" alt="">
            </div><!-- /.recruit__image -->
            <div class="recruit__content">
                <h1 class="recruit__content-title">Recruit</h1><!-- /.recruit__content-title -->
                <p class="recruit__content-description">
                    未経験から始めた人が多数在籍！<br>
                    20才から活躍している人も！<br>
                    体験入店からでも大丈夫なので安心してスタートできます！
                </p><!-- /.recruit__content-description -->
                <div class="recruit__button btn-color btn-color-blue-sm">
                    <a href="https://www.pokepara-tainew.jp/_shizuoka/m231/a261/shop5951/" target="_blank">募集情報へ</a>
                </div><!-- /.recruit__button btn-color btn-color-blue -->
            </div><!-- /.recruit__content -->
        </div><!-- /.recruit__inner inner -->
    </section><!-- /.recruit -->
    <?php get_footer(); ?>

</body>

</html>