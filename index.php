<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header-menu'); ?>
    <section class="news">
        <div class="news__inner inner wow fadeIn" data-wow-duration="4s">
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <h1 class="news__head">News</h1><!-- /.news__head -->
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <div class="news__items">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="news__item-link">
                            <div class="news__item">
                                <?php if (has_post_thumbnail()) {
                                    $id = get_post_thumbnail_id();
                                    $img = wp_get_attachment_image_src($id);
                                    echo '<div class="news__img"><img src="' . esc_url($img[0]) . '"></div>';
                                }?>
                                <h2 class="news__title"><?php the_title(); ?></h2><!-- /.news__title -->
                                <p class="news__text">
                                    <?php the_excerpt(); ?>
                                </p><!-- /.news__text -->
                            </div><!-- /.news__item -->
                        </a><!-- /.news__item-link -->
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>記事が見つかりませんでした</p>
                <?php endif; ?>
                <div class="SPACER--80"></div><!-- /.SPACER--80 -->
                <!-- pagenation -->
                <div class="pagenation-wrapper">
                    <?php if (paginate_links()) : ?>
                        <div class="pagenation">
                            <?php
                            echo paginate_links(array(
                                'end_size' => 1,
                                'mid_size' => 1,
                                'prev_next' => true,
                                'prev_text' => '<i class="fas fa-angle-left"></i>',
                                'next_text' => '<i class="fas fa-angle-right"></i>',
                            ));
                            ?>
                        </div><!-- /pagenation -->
                    <?php endif; ?>
                </div><!-- /.pagenation-wrapper -->
            </div><!-- /.news__items -->
            <div class="SPACER--200"></div><!-- /.SPACER--100 -->
        </div><!-- /.news__inner inner -->
    </section><!-- /.news -->

    <section class="cta">
        <div class="cta__inner inner">
            <div class="SPACER--160"></div><!-- /.SPACER--160 -->
            <h1 class="cta-title">キャスト、スタッフ募集中</h1><!-- /.cta-title -->
            <p class="cta-description">
                浜松でガールズバーと言えばLady merry。<br>
                ノルマ、ペナルティは一切ないので未経験から安心して働けます。<br>
                とにかく仲良しな女の子と一緒に楽しみながら稼ぎませんか？！
            </p><!-- /.cta-description -->
            <div class="cta__button btn-color btn-color-blue">
                <a href="<?php echo esc_url(home_url('/shop'));?>">詳しくはこちら</a>
            </div><!-- /.cta__button btn-color-blue -->
            <div class="SPACER--160"></div><!-- /.SPACER--160 -->
        </div><!-- /.cta__inner -->
    </section><!-- /.cta -->
    <?php get_footer(); ?>

</body>

</html>