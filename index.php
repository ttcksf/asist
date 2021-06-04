<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lady merry</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="shortcut icon" href="/img/favicon.ico">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/js/wow.min.js"></script>
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>
</head>

<body>
    <header class="header">
        <div class="header__inner inner">
            <h1 class="header__logo"><a href="/">Lady merry</a></h1>
            <!-- <ul class="header__nav">
                <li><a href="" class="is-active">トップページ</a></li>
                <li><a href="">お知らせ</a></li>
                <li><a href="">キャスト一覧</a></li>
                <li><a href="">店内写真</a></li>
                <li><a href="">オンラインガールズバー</a></li>
                <li><a href="">ログイン</a></li>
            </ul> -->
            <div class="drawer">
                <input type="checkbox" class="drawer__checkbox" id="drawerCheckbox">
                <label for="drawerCheckbox" class="drawer__icon">
                    <span class="drawer__icon-parts"></span><!-- /.drawer__icon-parts -->
                </label><!-- /.drawer__icon -->
                <label for="drawerChechbox" class="drawer__overlay"></label><!-- /.drawer__overlay -->
                <nav class="drawer__menu">
                    <ul>
                        <li class="drawer__item"><a href="/" class="drawer__item-inner">トップページ</a>
                            <!-- /.drawer__item-inner -->
                        </li><!-- /.drawer__item -->
                        <li class="drawer__item"><a href="/" class="drawer__item-inner">お知らせ</a>
                            <!-- /.drawer__item-inner -->
                        </li><!-- /.drawer__item -->
                        <li class="drawer__item"><a href="/" class="drawer__item-inner">キャスト</a>
                            <!-- /.drawer__item-inner -->
                        </li><!-- /.drawer__item -->
                        <li class="drawer__item"><a href="/" class="drawer__item-inner">店舗情報</a>
                            <!-- /.drawer__item-inner -->
                        </li><!-- /.drawer__item -->
                        <li class="drawer__item"><a href="/" class="drawer__item-inner">オンラインガールズバー</a>
                            <!-- /.drawer__item-inner -->
                        </li><!-- /.drawer__item -->
                        <li class="drawer__item"><a href="/" class="drawer__item-inner">ログイン</a>
                            <!-- /.drawer__item-inner -->
                        </li><!-- /.drawer__item -->
                    </ul>
                </nav><!-- /.drawer__menu -->
            </div><!-- /.drawer -->
        </div>
    </header><!-- /.header -->
    <section class="news">
        <div class="news__inner inner wow fadeIn" data-wow-duration="4s">
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <h1 class="news__head">News</h1><!-- /.news__head -->
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <div class="news__items">
                <a href="/single.html" class="news__item-link">
                    <div class="news__item">
                        <div class="news__img"><img src="/img/blog1.png" alt=""></div><!-- /.news__img -->
                        <h2 class="news__title">「魅惑の食遊住コラボ」開催中！</h2><!-- /.news__title -->
                        <p class="news__text">
                            4月28日からホテルくれたけイン監修のコラボ企画を実施しております。
                        </p><!-- /.news__text -->
                    </div><!-- /.news__item -->
                </a><!-- /.news__item-link -->
                <a href="/single.html" class="news__item-link">
                    <div class="news__item">
                        <div class="news__img"><img src="/img/blog2.png" alt=""></div><!-- /.news__img -->
                        <h2 class="news__title">オンラインガールズバーが開始</h2><!-- /.news__title -->
                        <p class="news__text">
                            新サービスとして「オンラインガールズバー」がスタートしました。<br>
                            自宅にいながらキャストとたのしく飲みましょう！
                        </p><!-- /.news__text -->
                    </div><!-- /.news__item -->
                </a><!-- /.news__item-link -->
                <a href="/single.html" class="news__item-link">
                    <div class="news__item">
                        <div class="news__img"><img src="/img/blog3.png" alt=""></div><!-- /.news__img -->
                        <h2 class="news__title">キャスト、スタッフともに募集中</h2><!-- /.news__title -->
                        <p class="news__text">
                            Lady merryで一緒に働きませんか？<br>
                            未経験者でもしっかりサポートしているので興味がある方は宜しくお願いします。
                        </p><!-- /.news__text -->
                    </div><!-- /.news__item -->
                </a><!-- /.news__item-link -->
                <a href="/single.html" class="news__item-link">
                    <div class="news__item">
                        <div class="news__img"><img src="/img/blog4.png" alt=""></div><!-- /.news__img -->
                        <h2 class="news__title">公式ホームページを開設</h2><!-- /.news__title -->
                        <p class="news__text">
                            この度、公式ホームページを開設致しました。<br>
                            お得な情報を随時更新していきますのでお気に入り登録の程よろしくお願いします。
                        </p><!-- /.news__text -->
                    </div><!-- /.news__item -->
                </a><!-- /.news__item-link -->
                <div class="SPACER--80"></div><!-- /.SPACER--80 -->
                <!-- pagenation -->
                <div class="pagenation-wrapper">
                    <div class="pagenation">
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="page-numbers" href="#">3</a>
                        <a class="page-numbers" href="#">4</a>
                        <a class="page-numbers" href="#">5</a>
                        <a class="page-numbers" href="#">6</a>
                        <a class="page-numbers" href="#">7</a>
                        <a class="page-numbers" href="#">8</a>
                        <a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a>
                    </div><!-- /pagenation -->
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
                <a href="">詳しくはこちら</a>
            </div><!-- /.cta__button btn-color-blue -->
            <div class="SPACER--160"></div><!-- /.SPACER--160 -->
        </div><!-- /.cta__inner -->
    </section><!-- /.cta -->
    <footer class="footer">
        <div class="footer__inner inner">
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <div class="footer__menu">
                <ul class="footer__nav">
                    <li><a href="">トップページ</a></li>
                    <li><a href="">お知らせ</a></li>
                    <li><a href="">キャスト</a></li>
                    <li><a href="">店舗情報</a></li>
                    <li><a href="">オンラインガールズバー</a></li>
                    <li><a href="">ログイン</a></li>
                </ul><!-- /.footer__nav -->
            </div><!-- /.footer__menu -->
            <p class="copyright">
                Copyright &copy; 株式会社アシスト All Right Reserved
            </p><!-- /.copyright -->
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
        </div><!-- /.footer__inner inner -->
    </footer><!-- /.footer -->

</body>

</html>