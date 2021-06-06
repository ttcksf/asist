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
    <section class="booking">
        <div class="booking__inner inner wow fadeIn" data-wow-duration="4s">
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <h1 class="booking__head">Booking</h1><!-- /.booking__head -->
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <div class="booking__form">
                <form action="" class="booking__form-wrapper">
                    <div class="booking__form-title">オンラインガールズバーご予約フォーム</div><!-- /.booking__form-title -->
                    <div class="booking__form-description">
                        こちらのフォームに必要事項を入力をお願いします。<br>
                        日程、キャストについては当日のスケジュール次第で変更になることもありますのでご了承ください。
                    </div><!-- /.booking__form-description -->
                    <dl class="booking__form-dl">
                        <div class="booking__form-row">
                            <div class="booking__form-select"><input id="your-date" type="date" placeholder="日程"></div><!-- /.booking__form-select -->
                        </div><!-- /.booking__form-row -->
                        <div class="booking__form-row">
                            <div class="booking__form-select">
                                <select id="your-time" name="">
                                    <option value="">時間</option>
                                    <option value="">18:00</option>
                                    <option value="">18:30</option>
                                    <option value="">19:00</option>
                                    <option value="">19:30</option>
                                    <option value="">20:00</option>
                                    <option value="">20:30</option>
                                    <option value="">21:00</option>
                                    <option value="">21:30</option>
                                    <option value="">22:00</option>
                                    <option value="">22:30</option>
                                    <option value="">23:00</option>
                                </select>
                            </div><!-- /.booking__form-select -->
                        </div><!-- /.booking__form-row -->
                        <div class="booking__form-row">
                            <div class="booking__form-select-cast">
                                <select id="your-kind" name="">
                                    <option value="">キャスト</option>
                                    <option value="">ありさ</option>
                                    <option value="">あすか</option>
                                    <option value="">ふたば</option>
                                    <option value="">まな</option>
                                    <option value="">みく</option>
                                    <option value="">みずき</option>
                                    <option value="">れみ</option>
                                    <option value="">ゆい</option>
                                    <option value="">なみ</option>
                                </select>
                            </div><!-- /.booking__form-select-cast -->
                        </div><!-- /.booking__form-row -->
                        <div class="booking__form-row">
                            <dt class="booking__form-label"><label for="your-name">お名前</label></dt><!-- /.booking__form-label -->
                            <dd class="booking__form-input"><input id="your-name" type="text" placeholder="山田太郎"></dd><!-- /.booking__form-input -->
                        </div><!-- /.booking__form-row -->
                        <div class="booking__form-row">
                            <dt class="booking__form-label"><label for="your-tel">電話番号</label></dt><!-- /.booking__form-label -->
                            <dd class="booking__form-input"><input id="your-tel" type="text" placeholder="08011112222"></dd><!-- /.booking__form-input -->
                        </div><!-- /.booking__form-row -->
                        <div class="booking__form-row">
                            <dt class="booking__form-label"><label for="your-email">メールアドレス</label></dt><!-- /.booking__form-label -->
                            <dd class="booking__form-input"><input id="your-email" type="email" placeholder="example@gmail.com"></dd><!-- /.booking__form-input -->
                        </div><!-- /.booking__form-row -->
                    </dl><!-- /.booking__form-dl -->
                    <div class="booking__form-check">
                        <label for="your-check">
                            <input id="your-check" type="checkbox"><span><a href="/page-privacy.html">プライバシーポリシー</a>に同意する</span>
                        </label>
                    </div><!-- /.booking__form-check -->
                    <div class="booking__form-button">
                        <input type="submit" value="予約する">
                    </div><!-- /.booking__form-button -->
                </form><!-- /.booking__form-wrapper -->
            </div><!-- /.booking__form -->
            <div class="SPACER--100"></div><!-- /.SPACER--100 -->
        </div><!-- /.booking__inner inner -->
    </section><!-- /.booking -->
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