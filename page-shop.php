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
    <section class="shop-page">
        <div class="shop-page__inner inner wow fadeIn" data-wow-duration="4s">
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <h1 class="shop-page__head">Shop Info</h1><!-- /.shop-page__head -->
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <h2 class="shop-page__title">Shop Photo</h2><!-- /.shop-page__title -->
            <div class="shop__photos">
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="/img/shop1.png" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="/img/shop2.png" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="/img/shop3.png" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="/img/shop4.png" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="/img/shop5.png" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="/img/shop6.png" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="/img/shop7.png" alt="">
                </div><!-- /.shop-photo -->
                <div class="shop-photo wow fadeInUpBig" data-wow-duration="1.5s">
                    <img src="/img/shop8.png" alt="">
                </div><!-- /.shop-photo -->
            </div><!-- /.shop__photos -->
            <div class="SPACER--200"></div><!-- /.SAPCER--200 -->
        </div><!-- /.shop-page__inner inner -->
    </section><!-- /.shop-page -->
    <section class="recruit">
        <div class="recruit__inner inner">
            <div class="recruit__image">
                <img src="/img/recruit.png" alt="">
            </div><!-- /.recruit__image -->
            <div class="recruit__content">
                <h1 class="recruit__content-title">Recruit</h1><!-- /.recruit__content-title -->
                <p class="recruit__content-description">
                    未経験から始めた人が多数在籍！<br>
                    20才から活躍している人も！<br>
                    体験入店からでも大丈夫なので安心してスタートできます！
                </p><!-- /.recruit__content-description -->
                <div class="recruit__button btn-color btn-color-blue-sm">
                    <a href="">募集情報へ</a>
                </div><!-- /.recruit__button btn-color btn-color-blue -->
            </div><!-- /.recruit__content -->
        </div><!-- /.recruit__inner inner -->
    </section><!-- /.recruit -->
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