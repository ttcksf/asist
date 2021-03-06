<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header-menu'); ?>
    <section class="sale">
        <div class="sale__inner inner wow fadeIn" data-wow-duration="4s">
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <?php if (!post_password_required($post->ID)) :  ?>
                <h1 class="sale__head">SalesReport</h1><!-- /.sale__head -->
                <div class="SPACER--60"></div><!-- /.SPACER--60 -->
                <div class="sale__form">
                    <form id="js-form" class="sale__form-wrapper" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSe9AU7agVYdPVkR0odhcJlQw1aHc1i6p7ZaPg2U1XMhze11ww/formResponse">
                        <div class="sale__form-title">売上入力フォーム</div><!-- /.sale__form-title -->
                        <div class="sale__form-description">
                            こちらのフォームに必要事項を入力をお願いします。<br>
                            「単価」「人数」は単位を省略して半角数字で入力ください。
                        </div><!-- /.sale__form-description -->
                        <dl class="sale__form-dl">
                            <div class="sale__form-row">
                                <dt class="sale__form-label"><label for="sale-name">担当者</label></dt><!-- /.sale__form-label -->
                                <dd class="sale__form-input"><input id="sale-name" type="text" name="entry.638442837" placeholder="山田太郎" required></dd><!-- /.sale__form-input -->
                            </div><!-- /.sale__form-row -->
                            <div class="sale__form-row">
                                <dt class="sale__form-label"><label for="sale-customer">お客様名</label></dt><!-- /.sale__form-label -->
                                <dd class="sale__form-input"><input id="sale-customer" type="text" name="entry.170635837" placeholder="田中健司様" required></dd><!-- /.sale__form-input -->
                            </div><!-- /.sale__form-row -->
                            <div class="sale__form-row">
                                <dt class="sale__form-label"><label for="sale-plan">単価</label></dt><!-- /.sale__form-label -->
                                <dd class="sale__form-input"><input id="sale-plan" type="text" name="entry.1773584587" placeholder="3000   ※半角数字のみで単位は不要" required></dd><!-- /.sale__form-input -->
                            </div><!-- /.sale__form-row -->
                            <div class="sale__form-row">
                                <dt class="sale__form-label"><label for="sale-count">人数</label></dt><!-- /.sale__form-label -->
                                <dd class="sale__form-input"><input id="sale-count" type="text" name="entry.1473412241" placeholder="2    ※半角数字のみで単位は不要" required></dd><!-- /.sale__form-input -->
                            </div><!-- /.sale__form-row -->
                        </dl><!-- /.sale__form-dl -->
                        <div class="sale__form-button">
                            <input type="submit" value="送信する">
                        </div><!-- /.sale__form-button -->
                    </form><!-- /.sale__form-wrapper -->
                    <div id="js-success" class="contact-message">
                        <p>送信完了しました ページを再読み込みして新しい内容を入力してください</p>
                        <div class="entry-404-btn"><a class="btn" href="<?php echo esc_url(home_url('/sale')); ?>">売上管理に戻る</a></div>
                    </div><!-- /.contact-message -->
                    <div id="js-error" class="contact-message -error">
                        <p>送信に失敗しました　ページを再読み込みして再度やり直してください</p>
                    </div><!-- /.contact-message -->
                </div><!-- /.sale__form -->
                <div class="SPACER--100"></div><!-- /.SPACER--100 -->
            <?php else :  ?>
                <?php echo get_the_password_form(); ?>
            <?php endif;  ?>
            <div class="SPACER--200"></div><!-- /.SPACER--100 -->
        </div><!-- /.sale__inner inner -->
    </section><!-- /.sale -->
    <?php get_footer(); ?>
</body>

</html>