jQuery(function () {
    var $ = jQuery;

    var $product = $('#ppp-product');
    var $delay = $('#ppp-delay');
    var $pageview = $('#ppp-pageview');
    var $expire = $('#ppp-expire');

    var $productTab = $('#ppp-product-tab');
    var $delayTab = $('#ppp-delay-tab');
    var $pageviewTab = $('#ppp-pageview-tab');
    var $expireTab = $('#ppp-expire-tab');

    $productTab.click(function (e) {
        e.preventDefault();
        $productTab.addClass('nav-tab-active');
        $product.show();
        $delay.hide();
        $pageview.hide();
        $expire.hide();
        $delayTab.removeClass('nav-tab-active');
        $pageviewTab.removeClass('nav-tab-active');
        $expireTab.removeClass('nav-tab-active');
    });

    $delayTab.click(function (e) {
        e.preventDefault();
        $delayTab.addClass('nav-tab-active');
        $delay.show();
        $pageview.hide();
        $product.hide();
        $expire.hide();
        $pageviewTab.removeClass('nav-tab-active');
        $productTab.removeClass('nav-tab-active');
        $expireTab.removeClass('nav-tab-active');
    });

    $pageviewTab.click(function (e) {
        e.preventDefault();
        $pageviewTab.addClass('nav-tab-active');
        $pageview.show();
        $delay.hide();
        $product.hide();
        $expire.hide();
        $delayTab.removeClass('nav-tab-active');
        $productTab.removeClass('nav-tab-active');
        $expireTab.removeClass('nav-tab-active');
    });

    $expireTab.click(function (e) {
        e.preventDefault();
        $expireTab.addClass('nav-tab-active');
        $expire.show();
        $delay.hide();
        $product.hide();
        $pageview.hide();
        $delayTab.removeClass('nav-tab-active');
        $productTab.removeClass('nav-tab-active');
        $pageviewTab.removeClass('nav-tab-active');
    });


});
