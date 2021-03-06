<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header-menu'); ?>
    <section class="booking">
        <div class="booking__inner inner wow fadeIn" data-wow-duration="4s">
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <h1 class="booking__head">Booking</h1><!-- /.booking__head -->
            <div class="SPACER--60"></div><!-- /.SPACER--60 -->
            <div class="booking__form booking__form-wrapper">
                <?php echo do_shortcode('[mwform_formkey key="98"]');?>
            </div><!-- /.booking__form -->
            <div class="SPACER--100"></div><!-- /.SPACER--100 -->
        </div><!-- /.booking__inner inner -->
    </section><!-- /.booking -->
    <?php get_footer(); ?>

</body>

</html>