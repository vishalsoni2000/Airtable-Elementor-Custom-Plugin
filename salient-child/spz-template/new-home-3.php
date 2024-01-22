<?php /* Template Name: New Homepage 3*/ ?>
<?php get_header(); ?>
<style type="text/css">
    html{opacity: 0;transition: 0.2s all;}
    html.load{opacity: 1;}
</style>
<link rel="stylesheet" type="text/css" href="https://snacknation.com//wp-content/themes/salient-child/spz-template/home-style-3.css">
<link rel="stylesheet" type="text/css" href="https://snacknation.com//wp-content/themes/salient-child/spz-template/popup-3.css">
<script type="text/javascript">
function getScript1(source, callback) {
    var script = document.createElement('script');
    var prior = document.getElementsByTagName('script')[0];
    script.async = 1;
    script.onload = script.onreadystatechange = function (_, isAbort) {
        if (isAbort || !script.readyState || /loaded|complete/.test(script.readyState)) {
            script.onload = script.onreadystatechange = null;
            script = undefined;

            if (!isAbort && callback) setTimeout(callback, 0);
        }
    };
    script.src = source;
    prior.parentNode.insertBefore(script, prior);
}
if (typeof $ === 'undefined') {
    getScript1('//code.jquery.com/jquery-3.6.0.min.js', function () {
        jQuery(document).ready(function () {
            if (!jQuery('body').hasClass('snacknation_home_dual_intent')) {
                var cookieName = '#3020-Snacknation-Homepage-dual-intent-27082021';
                var cookieValue = '1';
                var myDate = new Date();
                myDate.setDate(myDate.getDate() + 30);
                document.cookie = cookieName + "=" + cookieValue + ";expires=" + myDate;
                jQuery('body').addClass('snacknation_home_dual_intent');
            }
            var pngimg = "//res.cloudinary.com/spiralyze/image/upload/f_auto/Snacknation/Home-redesign/";
            var snacknation_img = "//snacknation.com/wp-content/uploads/2021/08/";
            var snacknation_img_09 = "//snacknation.com/wp-content/uploads/2021/09/";
            jQuery('.snacknation_home_dual_intent #header-outer #top #logo img').attr("src", "//snacknation.com/wp-content/uploads/2021/09/snacknation_logo.png");
            jQuery('.snacknation_home_dual_intent #header-outer #top #logo img').attr("srcset", "//snacknation.com/wp-content/uploads/2021/09/snacknation_logo.png");
            jQuery('.snacknation_home_dual_intent header#top .col_last li.menu-item.button_solid_color_2 a').addClass('box_price_nav');
            jQuery('.snacknation_home_dual_intent header#top .col_last li.menu-item.button_solid_color_2 a span').text('See Boxes & Pricing');
            jQuery(document).ready(function () {
                setTimeout(function () {
                    jQuery('#slide-out-widget-area .menuwrapper .menu li:last-child a').addClass('box_price_nav').text('See Boxes & Pricing');
                }, 1000);
            });
            jQuery('.snacknation_home_dual_intent a[aria-label="Navigation Menu"], #slide-out-widget-area .menuwrapper .menu a.box_price_nav').on('click', function(){
                setTimeout(function() {
                    jQuery('.snacknation_home_dual_intent #top .box_price_nav, #slide-out-widget-area .menuwrapper .menu a.box_price_nav').attr('target','');
                    jQuery('.snacknation_home_dual_intent #top .box_price_nav, #slide-out-widget-area .menuwrapper .menu a.box_price_nav').attr('href','javascript:void(0);');
                }, 50);
            });
            // jQuery('.snacknation_home_dual_intent .box_price_nav').attr('target','');
            // jQuery('.snacknation_home_dual_intent .box_price_nav').attr('href','javascript:void(0);');
            // var linkTarget = setInterval(function() {
            //     if(jQuery('.snacknation_home_dual_intent .box_price_nav').prop('target')) {
            //         clearInterval(linkTarget);
            //         console.log('target11111111111');
            //         jQuery('.snacknation_home_dual_intent .box_price_nav').removeAttr('target');
            //     }
            // }, 1000);
            // jQuery('<ul class="mobile-menu"><li id="menu-item-28777" class="menu-item menu-item-type-custom menu-item-object-custom button_solid_color_2 menu-item-28777"><a href="#" target="_self" data-params="true"><span class="menu-title-text">See Boxes &amp; Pricing</span></a></li></ul>').insertBefore('.slide-out-widget-area-toggle');
            jQuery('body').prepend('<div class="page_content">\
                <!-- hero section -->\
                <div class="hero_section"> \
                    <div class="hero_inner">\
                        <div class="hero_row container">\
                            <div class="hero_left_sec">\
                                <div class="everyone_loved_top_sec">\
                                    <div class="inner_everyone_loved">\
                                        <ul>\
                                            <li><img src="'+ snacknation_img_09 + 'star.png" alt="Star"></li>\
                                            <li><img src="'+ snacknation_img_09 + 'star.png" alt="Star"></li>\
                                            <li><img src="'+ snacknation_img_09 + 'star.png" alt="Star"></li>\
                                            <li><img src="'+ snacknation_img_09 + 'star.png" alt="Star"></li>\
                                            <li><img src="'+ snacknation_img_09 + 'star.png" alt="Star"></li>\
                                        </ul>\
                                        <p>“Everyone loved it”</p>\
                                    </div>\
                                    <div class="inner_everyone_loved">\
                                        <ul>\
                                            <li><img src="'+ snacknation_img_09 + 'star.png" alt="Star"></li>\
                                            <li><img src="'+ snacknation_img_09 + 'star.png" alt="Star"></li>\
                                            <li><img src="'+ snacknation_img_09 + 'star.png" alt="Star"></li>\
                                            <li><img src="'+ snacknation_img_09 + 'star.png" alt="Star"></li>\
                                            <li><img src="'+ snacknation_img_09 + 'star.png" alt="Star"></li>\
                                        </ul>\
                                        <p>“Fast and easy”</p>\
                                    </div>\
                                    <div class="inner_everyone_loved">\
                                        <ul>\
                                            <li><img src="'+ snacknation_img_09 + 'star.png" alt="Star"></li>\
                                            <li><img src="'+ snacknation_img_09 + 'star.png" alt="Star"></li>\
                                            <li><img src="'+ snacknation_img_09 + 'star.png" alt="Star"></li>\
                                            <li><img src="'+ snacknation_img_09 + 'star.png" alt="Star"></li>\
                                            <li><img src="'+ snacknation_img_09 + 'star.png" alt="Star"></li>\
                                        </ul>\
                                        <p>“Healthy, tasty, convenient”</p>\
                                    </div>\
                                </div>\
                                <div class="hero_single_review">\
                                    <div class="hero_review_wrapper">\
                                        <img src="//res.cloudinary.com/spiralyze/image/upload/f_auto/Caroo/Caroo%20%7C%20HomePage%20%7C%20Less%20Snacks%20Test%20%7C%201009/Star-Rating.png" alt="Stars" title="Stars">\
                                        <p>4.5/5 (107 Reviews)</p>\
                                    </div>\
                                </div>\
                                <h1>Delight your team with epic snacks and gift boxes</h1>\
                                <h1 class="tablet_only">Delight Your Team With Epic Snacks and Gift Boxes</h1>\
                                <p>Whether your team is remote, in-office, hybrid or international - send <b>fully customizable</b> gift boxes\
                                    everyone raves about. <br>Easy. Epic. On budget.</p>\
                                <div class="hero_btn">\
                                    <a class="box_price" class="hero_btn_a">See Boxes & Pricing</a>\
                                </div>\
                                <div class="quiz_wrapper">\
                                    <p>Take a 60-second quiz to get<br> personalized recommendations for your team.</p>\
                                    <div class="meals_donated_wrapper">\
                                        <div class="meals_donated">\
                                            <p class="donate_count">17,643,237</p>\
                                            <p class="donate_text">Meals Donated</p>\
                                        </div>\
                                        <img src="'+snacknation_img+'feeding_america.png" alt="Feeding America">\
                                    </div>\
                                </div>\
                            </div>\
                            <div class="hero_right_sec">\
                                <img src="'+snacknation_img_09+'hero_img_desk.png" alt="Delight Your Team With Epic Snacks and Gift Boxes"\
                                    class="desk_img">\
                            </div>\
                        </div>\
                    </div>\
                </div>\
                <!-- social proof section -->\
                <div class="social_proof_section">\
                    <div class="container">\
                        <div class="social_proof_inner">\
                            <div>\
                                <img src="'+snacknation_img_09+'google_gray.png" alt="Google">\
                            </div>\
                            <div>\
                                <img src="'+snacknation_img_09+'nike_min.png" alt="Nike">\
                            </div>\
                            <div>\
                                <img src="'+snacknation_img_09+'apple_gray.png" alt="Apple" >\
                            </div>\
                            <div>\
                                <img src="'+snacknation_img_09+'goodrx_gray.png" alt="Good RX">\
                            </div>\
                            <div>\
                                <img src="'+snacknation_img_09+'pelton_gray.png" alt="Peloton">\
                            </div>\
                            <div>\
                                <img src="'+snacknation_img_09+'hulu_gray.png" alt="Hulu">\
                            </div>\
                        </div>\
                    </div>\
                </div>\
                <!-- thoughtful snack and gift section -->\
                <div class="thoughtful_snack_gift_section">\
                    <div class="container">\
                        <h2 class="section_title">Thoughtful snack and gift boxes for every occasion</h2>\
                        <p class="section_subtitle">Starting at $25 + Free Shipping</p>\
                        <div class="gift_flex">\
                        </div>\
                        <div class="section_bottom_part">\
                            <a class="box_price">See Boxes & Pricing</a>\
                            <p>Take a 60-second quiz to get<br> personalized recommendations for your team.</p>\
                        </div>\
                    </div>\
                </div>\
                <!-- office snacks section -->\
                <div class="office_snacks_section">\
                    <div class="container">\
                        <h2 class="section_title">Office snack boxes</h2>\
                        <p class="section_subtitle">Each box contains 150 expertly curated, single-serve snacks your team is guaranteed to love.<br> Perfect for break rooms, office events, and more.</p>\
                        <div class="snack_gift_flex_wrapper desktop">\
                            <div class="single_item">\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img">\
                                        <img src="'+snacknation_img_09+'office_snacks_everyone_will_love.png" alt="Office Snacks Everyone Will Love" class="desktop_only_img">\
                                        <img src="'+snacknation_img_09+'office_snacks_everyone_will_love_mob-1.png" alt="Office Snacks Everyone Will Love" class="mobile_only_img">\
                                    </div>\
                                    <h5 class="item_name">Office Snacks Everyone Will Love</h5>\
                                </div>\
                            </div>\
                            <div class="multi_item">\
                            </div>\
                        </div>\
                        <div class="snack_gift_flex_wrapper_tablet_only">\
                            <div class="snack_gift_left">\
                                <div class="gift_item_wrapper large_image">\
                                    <div class="item_img"><img\
                                            src="'+snacknation_img_09+'office_snacks_everyone_will_love_tab-1.png "\
                                            alt="Office Snacks Everyone Will Love"></div>\
                                    <h5 class="item_name">Office Snacks Everyone Will Love</h5>\
                                </div>\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'nuts_trial_milk_shadow.png "\
                                            alt="Nuts and Trail Mix"></div>\
                                    <h5 class="item_name">Nuts &amp; Trail Mix</h5>\
                                </div>\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'sweets_shadow.png " alt="Sweets">\
                                    </div>\
                                    <h5 class="item_name">Sweets</h5>\
                                </div>\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'dried_fruit_shadow.png "\
                                            alt="Dried Fruit"></div>\
                                    <h5 class="item_name">Dried Fruit</h5>\
                                </div>\
                            </div>\
                            <div class="snack_gift_right">\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'bars_shadow.png " alt="Bars">\
                                    </div>\
                                    <h5 class="item_name">Bars</h5>\
                                </div>\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'chips_shadow.png " alt="Chips">\
                                    </div>\
                                    <h5 class="item_name">Chips</h5>\
                                </div>\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'granola_shadow.png "\
                                            alt="Granola"></div>\
                                    <h5 class="item_name">Granola</h5>\
                                </div>\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'salami_jerky_shadow.png "\
                                            alt="Salami and Jerky"></div>\
                                    <h5 class="item_name">Salami &amp; Jerky</h5>\
                                </div>\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'classics_shadow.png "\
                                            alt="Classics"></div>\
                                    <h5 class="item_name">Classics</h5>\
                                </div>\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'cookies_shadow.png "\
                                            alt="Cookies"></div>\
                                    <h5 class="item_name">Cookies</h5>\
                                </div>\
                            </div>\
                        </div>\
                        <div class="section_bottom_part">\
                            <a class="box_price">See Boxes & Pricing</a>\
                            <p>Take a 60-second quiz to get<br> personalized recommendations for your team.</p>\
                        </div>\
                    </div>\
                </div>\
                <!-- personalized gift section -->\
                <div class="personalized_gift_boxes">\
                    <div class="container">\
                        <h2 class="section_title">Personalized gift boxes</h2>\
                        <p class="section_subtitle">Design one-of-a-kind gift boxes and give your team a thoughtful gifting experience. <br>Perfect for remote teams, events, and conferences.</p>\
                        <div class="snack_gift_flex_wrapper desktop">\
                            <div class="multi_item">\
                            </div>\
                            <div class="single_item">\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img">\
                                        <img src="'+snacknation_img_09+'remote_care_packages.png" alt="Remote Care Packages" class="desktop_only_img">\
                                        <img src="'+snacknation_img_09+'remote_care_packages_mob-1.png" alt="Remote Care Packages" class="mobile_only_img">\
                                    </div>\
                                    <h5 class="item_name">Remote Care Packages</h5>\
                                </div>\
                            </div>\
                        </div>\
                        <div class="snack_gift_flex_wrapper_tablet_only">\
                            <div class="snack_gift_left">\
                                <div class="gift_item_wrapper large_image">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'remote_care_packages_tab-1.png"\
                                            alt="Remote Care Packages"></div>\
                                    <h5 class="item_name">Remote Care Packages</h5>\
                                </div>\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'branded_swag_shadow.png "\
                                            alt="Branded Swag"></div>\
                                    <h5 class="item_name">Branded Swag</h5>\
                                </div>\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'drinkware_shadow.png "\
                                            alt="Drinkware"></div>\
                                    <h5 class="item_name">Drinkware</h5>\
                                </div>\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'cocktail_kits_shadow.png "\
                                            alt="Cocktail Kits"></div>\
                                    <h5 class="item_name">Cocktail Kits</h5>\
                                </div>\
                            </div>\
                            <div class="snack_gift_right">\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'nourishment_shadow.png "\
                                            alt="Nourishment"></div>\
                                    <h5 class="item_name">Nourishment</h5>\
                                </div>\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'electronics_shadow.png "\
                                            alt="Electronics"></div>\
                                    <h5 class="item_name">Electronics</h5>\
                                </div>\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'productivity_shadow.png "\
                                            alt="Productivity"></div>\
                                    <h5 class="item_name">Productivity</h5>\
                                </div>\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'activity_cards_shadow.png "\
                                            alt="Activity Cards"></div>\
                                    <h5 class="item_name">Activity Cards</h5>\
                                </div>\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'wine_shadow.png " alt="Wine">\
                                    </div>\
                                    <h5 class="item_name">Wine</h5>\
                                </div>\
                                <div class="gift_item_wrapper">\
                                    <div class="item_img"><img src="'+snacknation_img_09+'unique_goods_shadow.png "\
                                            alt="Unique Goods"></div>\
                                    <h5 class="item_name">Unique Goods</h5>\
                                </div>\
                            </div>\
                        </div>\
                        <div class="section_bottom_part">\
                            <a class="box_price">See Boxes & Pricing</a>\
                            <p>Take a 60-second quiz to get<br> personalized recommendations for your team.</p>\
                        </div>\
                    </div>\
                </div>\
                <!-- thoughtful client and corporate section -->\
                <div class="thoughtful_client_corporate_gift_section">\
                    <div class="container">\
                        <h2 class="section_title">Thoughtful client and corporate gift boxes for every occasion</h2>\
                        <p class="section_subtitle">Our curation experts do all the work to help you design a one-of-a-kind gift box for any occasion.</p>\
                        <div class="gift_flex">\
                        </div>\
                        <div class="section_bottom_part">\
                            <a class="box_price">See Boxes & Pricing</a>\
                            <p>Take a 60-second quiz to get<br> personalized recommendations for your team.</p>\
                        </div>\
                    </div>\
                </div>\
                <!-- Custom Swap section -->\
                <section class="customswaps_sec">\
                    <div class="container">\
                        <h2 class="section_title">CustomSwaps<sup>TM</sup>  lets everyone build their own perfect curation</h2>\
                        <div class="card_wrapper">\
                            <div class="card">\
                                <div class="card_img">\
                                    <img src="'+snacknation_img_09+'custom_swap_box.jpg" alt="Choose a box type for your recipients ">\
                                </div>\
                                <div class="card_text">\
                                    <p class="card_index">1.\
                                        <span></span>\
                                    </p>\
                                    <div class="card_textpara">\
                                        <p>Choose a box type for your recipients </p>\
                                    </div>\
                                </div>\
                            </div>\
                            <div class="card center_card">\
                                <div class="card_img">\
                                    <img src="'+snacknation_img_09+'bottle_box.jpg" alt="Recipients swap gifts and snacks for ones they love ">\
                                </div>\
                                <div class="card_text">\
                                    <p class="card_index">2.\
                                        <span></span>\
                                    </p>\
                                    <div class="card_textpara text-para2">\
                                        <p>Recipients swap gifts and snacks for ones they love </p>\
                                    </div>\
                                </div>\
                            </div>\
                            <div class="card">\
                                <div class="card_img">\
                                    <img src="'+snacknation_img_09+'delight_everyone.jpg" alt="Delight everyone… no work required ">\
                                </div>\
                                <div class="card_text">\
                                    <p class="card_index">3.\
                                        <span></span>\
                                    </p>\
                                    <div class="card_textpara">\
                                        <p>Delight everyone… no work required </p>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>\
                        <div class="section_bottom_part">\
                            <a class="box_price">See Boxes & Pricing</a>\
                            <p>Take a 60-second quiz to get<br> personalized recommendations for your team.</p>\
                        </div>\
                    </div>\
                </section>\
                <!-- custom branding section -->\
                <section class="custom_branding">\
                    <div class="container">\
                        <div class="inner_custom_branding">\
                                <h2 class="title">Stand out with custom branding made easy</h2>\
                                <p class="subtitle">Give your clients and customers an unforgettable gifting experience with personalized cards and custom branded goods they\'ll use again and again.</p>\
                                <a class="box_price">See Boxes & Pricing</a>\
                        </div>\
                    </div>\
                </section>\
                <!-- customer review section -->\
                <section class="customer_review">\
                    <div class="container">\
                        <h2 class="section_title">What our happy customers have to say</h2>\
                        <p class="section_subtitle">Over 500,000 employees can’t stop raving about SnackNation!</p>\
                        <div class="customer_review_box">\
                            <div class="review_box">\
                                <div class="customer_images">\
                                    <img class="customer_img" src="'+snacknation_img_09+'aaron_hakenson-1.png" alt="Aaron Hakenson"/>\
                                </div>\
                                <div class="review_content">\
                                    <ul>\
                                        <li><img src="'+snacknation_img_09+'orange_star-1.png" alt="Star"></li>\
                                        <li><img src="'+snacknation_img_09+'orange_star-1.png" alt="Star"></li>\
                                        <li><img src="'+snacknation_img_09+'orange_star-1.png" alt="Star"></li>\
                                        <li><img src="'+snacknation_img_09+'orange_star-1.png" alt="Star"></li>\
                                        <li><img src="'+snacknation_img_09+'orange_star-1.png" alt="Star"></li>\
                                    </ul>\
                                    <p>"SnackNation fuels our sales team through long days providing solid, tasty, healthy options!"</p>\
                                    <div class="customer_name">\
                                        <p>- Aaron Hakenson, Lionbridge</p>\
                                    </div>\
                                </div>\
                            </div>\
                            <div class="review_box">\
                                <div class="customer_images">\
                                    <img class="customer_img" src="'+snacknation_img_09+'sarah_ashley-1.png" alt="Sarah Ashley" />\
                                </div>\
                                <div class="review_content">\
                                    <ul>\
                                        <li><img src="'+snacknation_img_09+'orange_star-1.png" alt="Star"></li>\
                                        <li><img src="'+snacknation_img_09+'orange_star-1.png" alt="Star"></li>\
                                        <li><img src="'+snacknation_img_09+'orange_star-1.png" alt="Star"></li>\
                                        <li><img src="'+snacknation_img_09+'orange_star-1.png" alt="Star"></li>\
                                        <li><img src="'+snacknation_img_09+'orange_star-1.png" alt="Star"></li>\
                                    </ul>\
                                    <p>"It’s a no-brainer. Having these snacks conveniently here in the office made such a huge difference to everybody in the office. My team turns into little kids when the box arrives!"</p>\
                                    <div class="customer_name">\
                                        <p>- Sarah Ashley, Packetfusion</p>\
                                    </div>\
                                </div>\
                            </div>\
                            <div class="review_box">\
                                <div class="customer_images">\
                                    <img class="customer_img" src="'+snacknation_img_09+'chloe_condon-1.png" alt="Chloe Condon" />\
                                </div>\
                                <div class="review_content">\
                                    <ul>\
                                        <li><img src="'+snacknation_img_09+'orange_star-1.png" alt="Star"></li>\
                                        <li><img src="'+snacknation_img_09+'orange_star-1.png" alt="Star"></li>\
                                        <li><img src="'+snacknation_img_09+'orange_star-1.png" alt="Star"></li>\
                                        <li><img src="'+snacknation_img_09+'orange_star-1.png" alt="Star"></li>\
                                        <li><img src="'+snacknation_img_09+'orange_star-1.png" alt="Star"></li>\
                                    </ul>\
                                    <p>"Takes all the pain out of picking out office snacks every week- it’s like having a snack concierge!"</p>\
                                    <div class="customer_name">\
                                        <p>- Chloe Condon, PAX</p>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>\
                    </div>\
                </section>\
                <!-- SnackNation Team -->\
                <section class="snacknation_team">\
                    <div class="container">\
                        <div class="inner_snacknation_team">\
                            <h2 class="title">Ready to delight your team with SnackNation?</h2>\
                            <p class="subtitle">Take 60 seconds to tell us about your team and get a personalized recommendation based on your needs.</p>\
                            <a class="box_price">See Boxes & Pricing</a>\
                        </div>\
                    </div>\
                </section>\
                <!-- Footer section -->\
                <section id="footer">\
                    <div class="container">\
                        <div class="footer_inner">\
                            <div class="footer_logo">\
                                <img src="'+snacknation_img_09+'snacknation_logo-1.png" alt="SnackNation Logo">\
                            </div>\
                            <div class="footer_links">\
                                <ul class="links">\
                                    <li><a href="https://snacknation.com/careers/">Careers</a></li>\
                                    <li><a href="https://snacknation.com/contact/">Contact</a></li>\
                                    <li><a href="https://snacknation.com/faq/">FAQ</a></li>\
                                    <li><a href="https://snacknation.com/press/">Press</a></li>\
                                    <li><a href="https://snacknation.com/privacy-policy/">Privacy Policy</a></li>\
                                    <li><a href="https://snacknation.com">Refer SnackNation</a></li>\
                                </ul>\
                            </div>\
                        </div>\
                        <div class="copyright_text">\
                            <p>© 2021 SnackNation. Handcrafted in Los Angeles</p>\
                        </div>\
                    </div>\
                </section>\
            </div>');
            // insertBefore('.snacknation_home_dual_intent #footer-outer');

            var imgData = {
                thoughtfulGift: [{ giftImagesUrl: 'office_snack_boxes.jpg', giftImageAlt: 'Office Snack Boxes', imageTitle: 'Office Snack Boxes', giftDetail: '150 single serve snacks curated for you.<br> Perfect for the office breakroom.' },
                { giftImagesUrl: 'snack_box.jpg', giftImageAlt: 'Snack Box', imageTitle: 'Snack Box', giftDetail: "15 single-serve snacks. <br> Hand picked for your team's enjoyment." },
                { giftImagesUrl: 'premium_swaps.jpg', giftImageAlt: 'Premium Swaps', imageTitle: 'Premium Swaps', giftDetail: "Build-their-own customization of snacks and gifts for a personalized experience they'll love." },
                { giftImagesUrl: 'mindfulness.jpg', giftImageAlt: 'Mindfulness', imageTitle: 'Mindfulness', giftDetail: 'Keep your team focused, calm and productive for the road ahead.' },
                { giftImagesUrl: 'sips_snacks.jpg', giftImageAlt: 'Sips + Snacks', imageTitle: 'Sips + Snacks', giftDetail: '10 charcuterie-inspired snacks + your choice of red or white wine.' },
                { giftImagesUrl: 'amplify.jpg', giftImageAlt: 'Amplify', imageTitle: 'Amplify', giftDetail: 'Support emerging brands and donate to charities with every delivery.' }],

                officeSnackBoxImage: [{ giftImagesUrl: 'bars_shadow.png', giftImageAlt: 'Bars', imageTitle: 'Bars' },
                { giftImagesUrl: 'chips_shadow.png', giftImageAlt: 'Chips', imageTitle: 'Chips' },
                { giftImagesUrl: 'granola_shadow.png', giftImageAlt: 'Granola', imageTitle: 'Granola' },
                { giftImagesUrl: 'nuts_trial_milk_shadow.png', giftImageAlt: 'Nuts and Trail Mix', imageTitle: 'Nuts & Trail Mix' },
                { giftImagesUrl: 'salami_jerky_shadow.png', giftImageAlt: 'Salami and Jerky', imageTitle: 'Salami & Jerky' },
                { giftImagesUrl: 'sweets_shadow.png', giftImageAlt: 'Sweets', imageTitle: 'Sweets' },
                { giftImagesUrl: 'classics_shadow.png', giftImageAlt: 'Classics', imageTitle: 'Classics' },
                { giftImagesUrl: 'dried_fruit_shadow.png', giftImageAlt: 'Dried Fruit', imageTitle: 'Dried Fruit' },
                { giftImagesUrl: 'cookies_shadow.png', giftImageAlt: 'Cookies', imageTitle: 'Cookies' }],

                officeSnackBoxLeft: [{ giftImagesUrl: 'office_snacks_everyone_will_love_tab.png', giftImageAlt: 'Office Snacks Everyone Will Love', imageTitle: 'Office Snacks Everyone Will Love' },
                { giftImagesUrl: 'nuts_trial_milk_shadow.png', giftImageAlt: 'Nuts and Trail Mix', imageTitle: 'Nuts & Trail Mix' },
                { giftImagesUrl: 'sweets_shadow.png', giftImageAlt: 'Sweets', imageTitle: 'Sweets' },
                { giftImagesUrl: 'dried_fruit_shadow.png', giftImageAlt: 'Dried Fruit', imageTitle: 'Dried Fruit' }],

                officeSnackBoxRight: [{ giftImagesUrl: 'bars_shadow.png', giftImageAlt: 'Bars', imageTitle: 'Bars' },
                { giftImagesUrl: 'chips_shadow.png', giftImageAlt: 'Chips', imageTitle: 'Chips' },
                { giftImagesUrl: 'granola_shadow.png', giftImageAlt: 'Granola', imageTitle: 'Granola' },
                { giftImagesUrl: 'salami_jerky_shadow.png', giftImageAlt: 'Salami and Jerky', imageTitle: 'Salami & Jerky' },
                { giftImagesUrl: 'classics_shadow.png', giftImageAlt: 'Classics', imageTitle: 'Classics' },
                { giftImagesUrl: 'cookies_shadow.png', giftImageAlt: 'Cookies', imageTitle: 'Cookies' }],

                personalizedGiftBox: [{ giftImagesUrl: 'nourishment_shadow.png', giftImageAlt: 'Nourishment', imageTitle: 'Nourishment' },
                { giftImagesUrl: 'electronics_shadow.png', giftImageAlt: 'Electronics', imageTitle: 'Electronics' },
                { giftImagesUrl: 'productivity_shadow.png', giftImageAlt: 'Productivity', imageTitle: 'Productivity' },
                { giftImagesUrl: 'branded_swag_shadow.png', giftImageAlt: 'Branded Swag', imageTitle: 'Branded Swag' },
                { giftImagesUrl: 'activity_cards_shadow.png', giftImageAlt: 'Activity Cards', imageTitle: 'Activity Cards' },
                { giftImagesUrl: 'drinkware_shadow.png', giftImageAlt: 'Drinkware', imageTitle: 'Drinkware' },
                { giftImagesUrl: 'wine_shadow.png', giftImageAlt: 'Wine', imageTitle: 'Wine' },
                { giftImagesUrl: 'cocktail_kits_shadow.png', giftImageAlt: 'Cocktail Kits', imageTitle: 'Cocktail Kits' },
                { giftImagesUrl: 'unique_goods_shadow.png', giftImageAlt: 'Unique Goods', imageTitle: 'Unique Goods' }],

                personalizedGiftBoxLeft: [{ giftImagesUrl: 'remote_care_packages.png', giftImageAlt: 'Remote Care Packages', imageTitle: 'Remote Care Packages' },
                { giftImagesUrl: 'branded_swag_shadow.png', giftImageAlt: 'Branded Swag', imageTitle: 'Branded Swag' },
                { giftImagesUrl: 'drinkware_shadow.png', giftImageAlt: 'Drinkware', imageTitle: 'Drinkware' },
                { giftImagesUrl: 'cocktail_kits_shadow.png', giftImageAlt: 'Cocktail Kits', imageTitle: 'Cocktail Kits' }],

                personalizedGiftBoxRight: [{ giftImagesUrl: 'nourishment_shadow.png', giftImageAlt: 'Nourishment', imageTitle: 'Nourishment' },
                { giftImagesUrl: 'electronics_shadow.png', giftImageAlt: 'Electronics', imageTitle: 'Electronics' },
                { giftImagesUrl: 'productivity_shadow.png', giftImageAlt: 'Productivity', imageTitle: 'Productivity' },
                { giftImagesUrl: 'activity_cards_shadow.png', giftImageAlt: 'Activity Cards', imageTitle: 'Activity Cards' },
                { giftImagesUrl: 'wine_shadow.png', giftImageAlt: 'Wine', imageTitle: 'Wine' },
                { giftImagesUrl: 'unique_goods_shadow.png', giftImageAlt: 'Unique Goods', imageTitle: 'Unique Goods' }],

                thoughtfulClientGift: [{ giftImagesUrl: 'welcome_back.png', giftImageAlt: 'Welcome Back', imageTitle: 'Welcome Back', giftDetail: 'Build excitement as your team returns to <br>the office.' },
                { giftImagesUrl: 'holiday_spirit.png', giftImageAlt: 'Holiday Spirit', imageTitle: 'Holiday Spirit', giftDetail: "Celebrate the holidays with festive and cozy premium gifts." },
                { giftImagesUrl: 'holiday_cheer.png', giftImageAlt: 'Holiday Cheer', imageTitle: 'Holiday Cheer', giftDetail: "Premium gifts and delicious themed snacks celebrate all the flavors of the holidays." },
                { giftImagesUrl: 'tech_lover.png', giftImageAlt: 'Tech Lovers', imageTitle: 'Tech Lovers', giftDetail: 'Wirecutter-approved tech tools and accessories they\'ll love.' },
                { giftImagesUrl: 'vip_treatment.png', giftImageAlt: 'The VIP Treatment', imageTitle: 'The VIP Treatment', giftDetail: 'Artisanal snacks and goods for those that love the finer things.' },
                { giftImagesUrl: 'gift_gratitude.png', giftImageAlt: 'Gifts of Gratitude', imageTitle: 'Gifts of Gratitude', giftDetail: 'Thank them for their hard work with thoughtful gifts that inspire joy.' }]
            }

            // thoughtfulGift section
            for (var index = 0; index < imgData.thoughtfulGift.length; index++) {
                const elementData = imgData.thoughtfulGift[index];
                var giftWrapper = ' <div class="gift_wrapper"><div class="gift_img"><img src="'+snacknation_img_09+''+elementData.giftImagesUrl + '" alt="' + elementData.giftImageAlt + '"></div><div class="gift_details"><h4>' + elementData.imageTitle + '</h4><p>' + elementData.giftDetail + '</p></div></div>';
                $('.thoughtful_snack_gift_section .gift_flex').append(giftWrapper);
            }
            // Office snackbox section
            for (var index = 0; index < imgData.officeSnackBoxImage.length; index++) {
                const elementData = imgData.officeSnackBoxImage[index];
                var giftWrapper = ' <div class="gift_item_wrapper"><div class="item_img"><img src= "'+snacknation_img_09+''+elementData.giftImagesUrl + ' " alt="' + elementData.giftImageAlt + '"></div><h5 class="item_name">' + elementData.imageTitle + '</h5></div>';
                $('.office_snacks_section .multi_item').append(giftWrapper);
            }

            // Office snackbox tablet
            // for (var index = 0; index < imgData.officeSnackBoxLeft.length; index++) {
            //     const elementData =  imgData.officeSnackBoxLeft[index];
            //     var giftWrapper = ' <div class="gift_item_wrapper"><div class="item_img"><img src= " '+snacknation_img+''+ elementData.giftImagesUrl +' " alt="'+ elementData.giftImageAlt +'"></div><h5 class="item_name">'+ elementData.imageTitle +'</h5></div>';
            //     $('.office_snacks_section .snack_gift_flex_wrapper_tablet_only .snack_gift_left').append(giftWrapper);
            // }
            // for (var index = 0; index < imgData.officeSnackBoxRight.length; index++) {
            //     const elementData =  imgData.officeSnackBoxRight[index];
            //     var giftWrapper = ' <div class="gift_item_wrapper"><div class="item_img"><img src= " '+snacknation_img+''+ elementData.giftImagesUrl +' " alt="'+ elementData.giftImageAlt +'"></div><h5 class="item_name">'+ elementData.imageTitle +'</h5></div>';
            //     $('.office_snacks_section .snack_gift_flex_wrapper_tablet_only .snack_gift_right').append(giftWrapper);
            // }

            // Personalized section
            for (var index = 0; index < imgData.personalizedGiftBox.length; index++) {
                const elementData = imgData.personalizedGiftBox[index];
                var giftWrapper = ' <div class="gift_item_wrapper"><div class="item_img"><img src= "'+snacknation_img_09+''+elementData.giftImagesUrl + ' " alt="' + elementData.giftImageAlt + '"></div><h5 class="item_name">' + elementData.imageTitle + '</h5></div>';
                $('.personalized_gift_boxes .multi_item').append(giftWrapper);
            }

            // Personalized section tablet
            // for (var index = 0; index < imgData.personalizedGiftBoxLeft.length; index++) {
            //     const elementData =  imgData.personalizedGiftBoxLeft[index];
            //     var giftWrapper = ' <div class="gift_item_wrapper"><div class="item_img"><img src= " '+snacknation_img+''+ elementData.giftImagesUrl +' " alt="'+ elementData.giftImageAlt +'"></div><h5 class="item_name">'+ elementData.imageTitle +'</h5></div>';
            //     $('.personalized_gift_boxes .snack_gift_flex_wrapper_tablet_only .snack_gift_left').append(giftWrapper);
            // }
            // for (var index = 0; index < imgData.personalizedGiftBoxRight.length; index++) {
            //     const elementData =  imgData.personalizedGiftBoxRight[index];
            //     var giftWrapper = ' <div class="gift_item_wrapper"><div class="item_img"><img src= " '+snacknation_img+''+ elementData.giftImagesUrl +' " alt="'+ elementData.giftImageAlt +'"></div><h5 class="item_name">'+ elementData.imageTitle +'</h5></div>';
            //     $('.personalized_gift_boxes .snack_gift_flex_wrapper_tablet_only .snack_gift_right').append(giftWrapper);
            // }

            // thoughtfulClientGift section
            for (var index = 0; index < imgData.thoughtfulClientGift.length; index++) {
                const elementData = imgData.thoughtfulClientGift[index];
                var giftWrapper = ' <div class="gift_wrapper"><div class="gift_img"><img src="'+snacknation_img_09+''+elementData.giftImagesUrl + '" alt="' + elementData.giftImageAlt + '"></div><div class="gift_details"><h4>' + elementData.imageTitle + '</h4><p>' + elementData.giftDetail + '</p></div></div>';
                $('.thoughtful_client_corporate_gift_section .gift_flex').append(giftWrapper);
            }

            var OStype = detectOS();
            if(OStype == 'MacOS' || OStype == 'iOS'){
                $('body').addClass('appleOS');
            }  
            function detectOS() {
                    var userAgent = window.navigator.userAgent,
                    platform = window.navigator.platform,
                    macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K'],
                    windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
                    iosPlatforms = ['iPhone', 'iPad', 'iPod'],
                    os = null;
                    if (macosPlatforms.indexOf(platform) !== -1) {
                                    os = 'MacOS';
                    } else if (iosPlatforms.indexOf(platform) !== -1) {
                                    os = 'iOS';
                    } else if (windowsPlatforms.indexOf(platform) !== -1) {
                                    os = 'Windows';
                    } else if (/Android/.test(userAgent)) {
                                    os = 'Android';
                    } else if (!os && /Linux/.test(platform)) {
                                    os = 'Linux';
                    }
                    return os;
            }

            // Start URL update code
            // var box_pricing = 'https://snacknations.typeform.com/to/R6qO3gCQ';
            // $('.box_price').attr('href', box_pricing);
            // $('.box_price_nav').attr('href', box_pricing);

            function getUrlVars()
            {
                var vars = [], hash;
                var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
                for(var i = 0; i < hashes.length; i++)
                {
                    hash = hashes[i].split('=');
                    vars.push(hash[0]);
                    vars[hash[0]] = hash[1];
                }
                return vars;
            }
            var Query_string = getUrlVars();
            var url = '';
            var _searchedIndex = jQuery.inArray('_ga',Query_string);
            if(_searchedIndex >= 0){
                Query_string.splice(_searchedIndex,1);
            }
            // if(Query_string.length == 1){
            //     console.log("Without Query");
            // }else{
            //     console.log("With Query");
            // }
            var first_ex = true;
            jQuery(Query_string).each( function(key, val){
                if(!first_ex)      
                {
                    url += "&"+val+"="+(getUrlVars()[val]);
                }
                
                if(first_ex)
                {
                    url += "?"+val+"="+(getUrlVars()[val]);
                    first_ex = false;
                }
            });
            // var variant = encodeURI('Control SnackNation Homepage Minireviews 21-18-10');
            // console.log("Query_string", Query_string);

            if(Query_string.length == 1){
                // console.log('length 111111111111');
            }else{
                // var new_url =  "https://snacknations.typeform.com/to/R6qO3gCQ"+url+"&Variant="+(variant);
                var new_url_remote_employees = "https://snacknations.typeform.com/to/lakEjm"+url+"&Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic";
                var new_url_office_employees = "https://snacknations.typeform.com/to/R6qO3gCQ"+url+"&Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic";
                var new_url_individiul_or_family = "https://manage.caroo.com/order"+url+"&utm_source=SN%20Home%20Page&utm_campaign=Friends%20and%20Family%20Pop%20Up";

                setTimeout( function(){
                    // console.log("new_url", new_url);
                    // jQuery("a.box_price").attr('href', new_url);  
                    jQuery("a.box_price_popup_cta_remote_employees").attr('href', new_url_remote_employees);            
                    jQuery("a.box_price_popup_cta_office_employee").attr('href', new_url_office_employees);            
                    jQuery("a.box_price_popup_cta_individiul_or_family").attr('href', new_url_individiul_or_family);            

                }, 2000);
            }
            //  End URl section code

            jQuery("a.box_price").each(function(){
                jQuery(this).on('click', function() {
                    // console.log('-------clickedd', jQuery('#top .box_price_nav'));
                    // jQuery('#top .box_price_nav').trigger('click');

                    // console.log('-------clickedd', jQuery('.ub-emb-iframe-wrapper'))

                    jQuery('.ub-emb-container .ub-emb-overlay:nth-child(2) .ub-emb-iframe-wrapper:first-child').addClass('ub-emb-visible');
                    jQuery('.ub-emb-container .ub-emb-overlay:nth-child(2) .ub-emb-iframe-wrapper').closest('.ub-emb-overlay').addClass('ub-emb-visible');
                });
            });

            jQuery('.box_price_nav').on('click', function(){
                jQuery('.ub-emb-container .ub-emb-overlay:nth-child(2) .ub-emb-iframe-wrapper:first-child').addClass('ub-emb-visible');
                jQuery('.ub-emb-container .ub-emb-overlay:nth-child(2) .ub-emb-iframe-wrapper').closest('.ub-emb-overlay').addClass('ub-emb-visible');
            });

            jQuery('.ub-emb-iframe-wrapper.ub-emb-visible .ub-emb-close').on('click', function(){
                jQuery('.ub-emb-close').closest('.ub-emb-iframe-wrapper').removeClass('ub-emb-visible');
                jQuery('.ub-emb-close').closest('.ub-emb-overlay').removeClass('ub-emb-visible');
            });

            var modal = jQuery('.snacknation_home_dual_intent .ub-emb-scroll-wrapper');
            jQuery(window).on('click',function(){
                if (event.target == modal[1]) {
                    jQuery('.ub-emb-container .ub-emb-overlay:nth-child(2) .ub-emb-iframe-wrapper:first-child').removeClass('ub-emb-visible');
                    jQuery('.ub-emb-container .ub-emb-overlay:nth-child(2) .ub-emb-iframe-wrapper').closest('.ub-emb-overlay').removeClass('ub-emb-visible');
                }
            });
        });
        // });

        var popupadd = setInterval(function () {
            if ($('.snacknation_home_dual_intent .ub-emb-container .popup-added').length == 0) {
                // console.log('popup added');
                $('.snacknation_home_dual_intent .ub-emb-container .ub-emb-overlay .ub-emb-iframe-wrapper').each(function () {
                    $('<div class="ub-emb-iframe">\
                        <div class="popup-added lp-element lp-pom-root" id="lp-pom-root">\
                            <div id="lp-pom-root-color-overlay"></div>\
                            <div class="lp-positioned-content">\
                                <div class="lp-element lp-pom-text nlh" id="lp-pom-text-93" style="height: auto;">\
                                    <p style="text-align: center; line-height: 42px;">\
                                        <span style="color: rgb(46, 46, 51); font-family: Nunito; font-weight: 700; font-style: normal;">\
                                            <span style="font-size: 36px;" class="popup-title"><strong>Who Would You Like Snacks For?</strong></span>\
                                        </span>\
                                    </p>\
                                </div>\
                                <div class="lp-element lp-pom-box" id="lp-pom-box-94">\
                                    <div id="lp-pom-box-94-color-overlay"></div>\
                                    <a class="lp-element lp-pom-button box_price_popup_cta_remote_employees" id="lp-pom-button-95" href="https://snacknations.typeform.com/to/lakEjm?Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic" target="_self" data-params="true">\
                                        <span class="label"><strong>See Boxes & Pricing</strong></span>\
                                    </a>\
                                    <div class="lp-element lp-pom-text nlh" id="lp-pom-text-96" style="height: auto;">\
                                        <p style="text-align: center; line-height: 32px;">\
                                            <span style="font-family: Nunito; font-weight: 700; font-style: normal; font-size: 22px;">\
                                                <strong><span style="color: rgb(251, 99, 126);" class="popup-sub-title">Remote Employees</span></strong>\
                                            </span>\
                                        </p>\
                                    </div>\
                                    <div class="lp-element lp-pom-text nlh" id="lp-pom-text-97" style="height: auto;">\
                                        <p style="line-height: 22px; text-align: center;">\
                                            <span style="font-weight: 300; font-family: Nunito; font-size: 16px; color: rgb(46, 46, 51);">\
                                                <strong><span style="font-style: normal;">Keep remote teams connected no matter the distance.</span></strong>\
                                            </span>\
                                        </p>\
                                    </div>\
                                </div>\
                                <div class="lp-element lp-pom-box" id="lp-pom-box-98"><div id="lp-pom-box-98-color-overlay"></div></div>\
                                <div class="lp-element lp-pom-box" id="lp-pom-box-99"><div id="lp-pom-box-99-color-overlay"></div></div>\
                                <div class="lp-element lp-pom-box" id="lp-pom-box-100">\
                                    <div id="lp-pom-box-100-color-overlay"></div>\
                                    <div class="lp-element lp-pom-text nlh" id="lp-pom-text-101" style="height: auto;">\
                                        <p style="line-height: 22px; text-align: center;">\
                                            <span style="font-weight: 300; font-family: Nunito; font-size: 16px; color: rgb(46, 46, 51);">\
                                                <strong><span style="font-style: normal;">Easy-to-manage shipments delivered right to your office.</span></strong>\
                                            </span>\
                                        </p>\
                                    </div>\
                                    <a class="lp-element lp-pom-button box_price_popup_cta_office_employee" id="lp-pom-button-102" href="https://snacknations.typeform.com/to/R6qO3gCQ?Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic" target="_self" data-params="true">\
                                        <span class="label"><strong>See Boxes & Pricing</strong></span>\
                                    </a>\
                                    <div class="lp-element lp-pom-text nlh" id="lp-pom-text-103" style="height: auto;">\
                                        <p style="text-align: center; line-height: 32px;">\
                                            <span style="font-family: Nunito; font-weight: 700; font-style: normal; font-size: 22px;">\
                                                <strong><span style="color: rgb(44, 213, 196);" class="popup-sub-title">In-Office Employees</span></strong>\
                                            </span>\
                                        </p>\
                                    </div>\
                                </div>\
                                <div class="lp-element lp-pom-box" id="lp-pom-box-104"><div id="lp-pom-box-104-color-overlay"></div></div>\
                                <div class="lp-element lp-pom-box" id="lp-pom-box-105">\
                                    <div id="lp-pom-box-105-color-overlay"></div>\
                                    <div class="lp-element lp-pom-text nlh" id="lp-pom-text-106" style="height: auto;">\
                                        <p style="line-height: 22px; text-align: center;">\
                                            <span style="font-weight: 300; font-family: Nunito; font-size: 16px; color: rgb(46, 46, 51);">\
                                                <strong><span style="font-style: normal;">Treat yourself or send a delicious gift to someone special.</span></strong>\
                                            </span>\
                                        </p>\
                                    </div>\
                                    <a class="lp-element lp-pom-button box_price_popup_cta_individiul_or_family" id="lp-pom-button-107" href="https://manage.caroo.com/order?utm_source=SN%20Home%20Page&utm_campaign=Friends%20and%20Family%20Pop%20Up" target="_self" data-params="true">\
                                        <span class="label"><strong>See Boxes & Pricing</strong></span>\
                                    </a>\
                                    <div class="lp-element lp-pom-text nlh" id="lp-pom-text-108" style="height: auto;">\
                                        <p style="text-align: center; line-height: 32px;">\
                                            <span style="font-family: Nunito; font-weight: 700; font-style: normal; font-size: 22px;">\
                                                <strong><span style="color: rgb(255, 184, 28);" class="popup-sub-title">Individual or Family</span></strong>\
                                            </span>\
                                        </p>\
                                    </div>\
                                </div>\
                                <div class="lp-element lp-pom-box" id="lp-pom-box-109"><div id="lp-pom-box-109-color-overlay"></div></div>\
                            </div>\
                            <div class="lp-element lp-pom-block" id="lp-pom-block-92">\
                                <div id="lp-pom-block-92-color-overlay"></div>\
                                <div class="lp-pom-block-content"></div>\
                            </div>\
                        </div>\
                    </div>').insertAfter(jQuery(this).find('.ub-emb-iframe'));
                })
                clearInterval(popupadd);
            }
        }, 800);

            jQuery('#ajax-content-wrap div#footer-outer div#footer-widgets,div#copyright .col.span_7.col_last').addClass('for-remote for-office');
            jQuery(window).scroll(function(){
            jQuery(".client-inner .client-col .desktop-img").scrollLeft(jQuery(window).scrollTop());
        });
        setTimeout(function () {
            jQuery('html').addClass('load');
        },1000);
    });
}

if (history.scrollRestoration) {
    history.scrollRestoration = 'manual';
} else {
    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    }
}
</script>
<?php get_footer(); ?>