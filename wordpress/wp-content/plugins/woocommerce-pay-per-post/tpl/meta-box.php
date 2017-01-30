<?php wp_nonce_field('woocommerce_ppp_nonce', 'woocommerce_ppp_nonce'); ?>
<h3 class="nav-tab-wrapper">
    <a class="nav-tab nav-tab-active" id="ppp-product-tab">Product Information</a>
    <a class="nav-tab hide-if-no-js" id="ppp-delay-tab">Delay Restriction</a>
    <a class="nav-tab hide-if-no-js" id="ppp-pageview-tab">Page View Restriction</a>
    <a class="nav-tab hide-if-no-js" id="ppp-expire-tab">Expiry Restriction</a>
</h3>
<div id="ppp-product">
    <p>This is the id of the product that is required to have been purchased before a user can view the content of this page. You can select multiple products.<br>
    </p>
    <label for="woocommerce_ppp_product_id">Product ID: </label><br>
    <select multiple name="woocommerce_ppp_product_id[]">
        <?php echo $dropdown; ?>
    </select>
</div>
<hr>
<div id="ppp-delay" style="display:none">
    <div style="font-size:36px; color:red; font-weight:bold; text-align:center; margin-top:20px; margin-bottom:20px;">Coming Soon in Pro Version!</div>
    <p>This allows you to delay the paywall for x amount of days. For instance if you input 10 in the box below, it will delay the paywall from appearing until 10 days AFTER the publish date of this post.</p>
    <!--    <br>-->
    <!--    <input type="number" min="0" name="woocommerce_ppp_delay" disabled="disabled"> days.-->
</div>

<div id="ppp-pageview" style="display:none">
    <div style="font-size:36px; color:red; font-weight:bold; text-align:center; margin-top:20px; margin-bottom:20px;">Coming Soon in Pro Version!</div>
    <p>This allows you to limit the number of page views the user who purchased this product has before the paywall reappears. For instance if you set this to 10, your customer can view this post 10 times before the paywall reappears.</p>
    <!--    <br>-->
    <!--    <input type="number" min="0" name="woocommerce_ppp_pageviews" disabled="disabled"> page views.-->
</div>

<div id="ppp-expire" style="display:none">
    <div style="font-size:36px; color:red; font-weight:bold; text-align:center; margin-top:20px; margin-bottom:20px;">Coming Soon in Pro Version!</div>
    <p>This allows you to specify an expiration time in which after X days the paywall will reappear. For instance if you set this to 10, your customer can view this post for 10 days after purchase before the paywall reappears.</p>
    <!--    <br>-->
    <!--    <input type="number" min="0" name="woocommerce_ppp_expire" disabled="disabled"> days.-->
</div>