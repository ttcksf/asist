<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header-menu'); ?>

    <div class="main-visual wow fadeIn" data-wow-duration="4s">
        <div class="main-visual__inner">
            <div class="main-visual__left">
                <div class="main-visual__image">
                </div><!-- /.main-visual__image -->
            </div><!-- /.main-visual__left -->
            <div class="main-visual__right">
                <div class="main-visual__text">
                    <h1 class="main-visual__title">Party Night</h1><!-- /.main-visual__title -->
                    <p class="main-visual__description">I have everything to make your night fun</p>
                    <!-- /.main-visual__description -->
                </div><!-- /.main-visual__text -->
                <div class="SPACER--130 TAB--NONE SP--NONE"></div><!-- /.SPACER--130 -->
                <div class="main-visual__news">
                    <h2 class="main-visual__news__head">News & Events</h2><!-- /.main-visual__news__head -->
                    <?php if (have_posts()) : ?>
                        <div class="main-visual__news__body">
                            <?php
                                $args = array('posts_per_page' => 3,);
                                $posts = get_posts($args);
                                foreach($posts as $post):
                                    setup_postdata($post);
                            ?>
                                <div class="main-visual__news__item">
                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                </div><!-- /.main-visual__news__item -->
                            <?php endforeach; wp_reset_postdata();?>
                        </div><!-- /.main-visual__news__body -->
                    <?php else : ?>
                        <p>新着情報がありません</p>
                    <?php endif; ?>
                </div><!-- /.main-visual__news -->
            </div><!-- /.main-visual__right -->
        </div><!-- /.main-visual__inner inner -->
        <div class="SPACER--130"></div><!-- /.SPACER--130 -->
    </div><!-- /.main-visual -->

    <section class="online-service wow fadeIn" data-wow-duration="4s">
        <div class="online-service__inner inner">
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <h1 class="online-service__head">Online Girls Bar</h1><!-- /.online-service__head -->
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <div class="online-service__all">
                <div class="online-service__all3">
                    <div class="online-service__image"></div><!-- /.online-service__image -->
                    <div class="online-service__content wow fadeInUpBig" data-wow-duration="2s">
                        <div class="online-service__wrapper">
                            <h2 class="online-service__title">About Service</h2><!-- /.online-service__title -->
                            <p class="online-service__description">
                                当店からの新サービスとして「オンラインガールズバー」を開始致しました。<br>
                                予約制のため待ち時間や指名のバッティングがありません。<br>
                                ご自宅にいながらキャストと楽しいお時間を提供します。
                            </p><!-- /.online-service__description -->
                            <div class="online-service__btn btn-transparent">
                                <a href="<?php echo esc_url(home_url('/contact'));?>">ご予約へ</a>
                            </div><!-- /.online-service__btn btn -->
                        </div><!-- /.online-service__wrapper -->
                    </div><!-- /.online-service__content -->
                </div><!-- /.online-service__all3 -->
            </div><!-- /.online-service__all -->
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
        </div><!-- /.online-service__inner -->
    </section><!-- /.online-service -->

    <section class="card wow fadeIn" data-wow-duration="4s">
        <div class="card__inner inner">
            <div class="SPACER--200"></div><!-- /.SPACER--200 -->
            <div class="card__items top">
                <div class="card__item-wrapper wow fadeInUpBig" data-wow-duration="1.5s">
                    <div class="card__item card__item-menu">
                        <div class="card__body">
                            <p class="card__title">Casts</p><!-- /.card__title -->
                            <p class="card__lead">ノリの良い女の子が<br>そろっています</p><!-- /.card__lead -->
                            <div class="card__button btn-transparent btn-transparent-vw">
                                <a href="<?php echo esc_url(home_url('/cast'));?>">詳細へ</a>
                            </div><!-- /.card__button btn-transparent -->
                        </div><!-- /.card__body -->
                    </div><!-- /.card__item -->
                </div><!-- /.card__item-wrapper -->
                <div class="card__item-wrapper wow fadeInUpBig" data-wow-duration="2.0s">
                    <div class="card__item">
                        <div class="card__image">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/menu-shops.png');?>" alt="">
                        </div><!-- /.card__image -->
                    </div><!-- /.card__item -->
                </div><!-- /.card__item-wrapper -->
                <div class="card__item-wrapper wow fadeInUpBig" data-wow-duration="2.5s">
                    <div class="card__item card__item-menu">
                        <div class="card__body">
                            <p class="card__title">Recruit</p><!-- /.card__title -->
                            <p class="card__lead">キャスト、スタッフともに<br>積極的に募集しています</p><!-- /.card__lead -->
                            <div class="card__button btn-transparent btn-transparent-vw">
                                <a href="<?php echo esc_url(home_url('/shop'));?>">詳細へ</a>
                            </div><!-- /.card__button btn-transparent -->
                        </div><!-- /.card__body -->
                    </div><!-- /.card__item -->
                </div><!-- /.card__item-wrapper -->
            </div><!-- /.card__items -->
            <div class="card__items under">
                <div class="card__item-wrapper wow fadeInUpBig" data-wow-duration="3.0s">
                    <div class="card__item">
                        <div class="card__image">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/menu-casts.png');?>" alt="">
                        </div><!-- /.card__image -->
                    </div><!-- /.card__item -->
                </div><!-- /.card__item-wrapper -->
                <div class="card__item-wrapper wow fadeInUpBig" data-wow-duration="3.5s">
                    <div class="card__item card__item-menu">
                        <div class="card__body">
                            <p class="card__title">Shops</p><!-- /.card__title -->
                            <p class="card__lead">浜松駅からすぐ<br>朝5時まで営業中</p><!-- /.card__lead -->
                            <div class="card__button btn-transparent btn-transparent-vw">
                                <a href="<?php echo esc_url(home_url('/shop'));?>">詳細へ</a>
                            </div><!-- /.card__button btn-transparent -->
                        </div><!-- /.card__body -->
                    </div><!-- /.card__item -->
                </div><!-- /.card__item-wrapper -->
                <div class="card__item-wrapper wow fadeInUpBig" data-wow-duration="4.0s">
                    <div class="card__item">
                        <div class="card__image">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/blog3.png');?>" alt="">
                        </div><!-- /.card__image -->
                    </div><!-- /.card__item -->
                </div><!-- /.card__item-wrapper -->
            </div><!-- /.card__items under -->
            <div class="SPACER--200"></div><!-- /.SPACER--200 -->
        </div><!-- /.card__inner inner -->
    </section><!-- /.card -->

    <section class="price wow fadeIn" data-wow-duration="4s">
        <div class="price__inner inner">
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <h1 class="price__head">System</h1><!-- /.price__head -->
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <div class="price__table wow fadeInUp">
                <table class="table">
                    <tr>
                        <th>1セット(50分)</th>
                        <td>5,000円</td>
                    </tr>
                    <tr>
                        <th>延長(50分)</th>
                        <td>5,000円</td>
                    </tr>
                    <tr>
                        <th>Tax・サービス料</th>
                        <td>15% (※カード支払いの場合は小計から25%)</td>
                    </tr>
                </table><!-- /.table -->
            </div><!-- /.price__table -->
            <div class="SPACER--100"></div><!-- /.SPACER--100 -->
        </div><!-- /.price__inner inner -->
    </section><!-- /.price -->

    <section class="access wow fadeIn" data-wow-duration="4s">
        <div class="access__inner inner">
            <div class="SPACER--200 SP--NONE"></div><!-- /.SPACER--200 -->
            <div class="access__all">
                <div class="access__all3">
                    <div class="access__image"></div><!-- /.access-service__image -->
                    <div class="access__content wow fadeInUp" data-wow-duration="2s">
                        <div class="access__wrapper">
                            <h2 class="access__title">Access</h2><!-- /.access-service__title -->
                            <p class="access__description">
                                住所：静岡県浜松市中央区<br>
                                肴町322-20<br>
                                電話：053-452-3491<br>
                                営業時間：21時～Last<br>
                                定休日：水曜日
                            </p><!-- /.online-service__description -->
                            <div class="access__btn btn-transparent">
                                <a href="<?php echo esc_url(home_url('/shop'));?>">店舗情報へ</a>
                            </div><!-- /.access__btn btn -->
                        </div><!-- /.access__wrapper -->
                    </div><!-- /.access__content -->
                </div><!-- /.access__all3 -->
            </div><!-- /.access__all -->
            <div class="SPACER-100"></div><!-- /.SPACER-100 -->
        </div><!-- /.access__inner inner -->
    </section><!-- /.access -->
    <?php get_footer(); ?>
</body>

</html>