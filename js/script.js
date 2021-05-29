jQuery(function ($) {
    $(document).ready(function () {
        var windowHeight = $(window).height();
        $(".main-visual__left").height(windowHeight);
    });
    $(window).resize(function () {
        var windowHeight = $(window).height();
        $(".main-visual__left").height(windowHeight);
    });
});