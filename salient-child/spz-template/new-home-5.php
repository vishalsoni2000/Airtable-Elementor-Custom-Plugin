<?php /* Template Name: New Homepage 5*/ ?>
<?php get_header(); ?>
<style type="text/css">
    html{opacity: 0;transition: 0.2s all;}
    html.load{opacity: 1;}
</style>
<link rel="stylesheet" type="text/css" href="https://snacknation.com//wp-content/themes/salient-child/spz-template/home-style-5.css">
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
                var cookieName = '#3022-SnackNation-Homepage-Unusual-Ventures-02112021-variant';
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
                                <div class="hero_single_review">\
                                    <div class="hero_review_wrapper">\
                                        <img src="//res.cloudinary.com/spiralyze/image/upload/f_auto/Snacknation/3023%20%7C%20SnackNation/star.png" alt="Stars" title="Stars">\
                                        <p>“Everyone loved it”</p>\
                                    </div>\
                                    <div class="hero_review_wrapper">\
                                        <img src="//res.cloudinary.com/spiralyze/image/upload/f_auto/Snacknation/3023%20%7C%20SnackNation/star.png" alt="Stars" title="Stars">\
                                        <p>“Fast and easy”</p>\
                                    </div>\
                                    <div class="hero_review_wrapper">\
                                        <img src="//res.cloudinary.com/spiralyze/image/upload/f_auto/Snacknation/3023%20%7C%20SnackNation/star.png" alt="Stars" title="Stars">\
                                        <p>“Healthy, tasty, convenient”</p>\
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
                                        <img src="//res.cloudinary.com/spiralyze/image/upload/f_auto/Snacknation/3023%20%7C%20SnackNation/office-snack-boxes-big.jpg" alt="Office Snacks Everyone Will Love" class="mobile_only_img">\
                                        <img src="//res.cloudinary.com/spiralyze/image/upload/f_auto/Snacknation/3023%20%7C%20SnackNation/Office-Snacks-Everyone-Will-Love_mobile.jpg" alt="Office Snacks Everyone Will Love" class="small_mobile_only_img">\
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
                                        <img src="//res.cloudinary.com/spiralyze/image/upload/f_auto/Snacknation/3023%20%7C%20SnackNation/Remote_Care_Packages.png" alt="Remote Care Packages" class="mobile_only_img">\
                                        <img src="//res.cloudinary.com/spiralyze/image/upload/f_auto/Snacknation/3023%20%7C%20SnackNation/Remote-Care_Packages_Mobile.jpg" alt="Remote Care Packages" class="small_mobile_only_img">\
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
                thoughtfulGift: [{ giftImagesUrl: 'office_snack_boxes.jpg', giftImageAlt: 'Office Snack Boxes', imageTitle: 'Office Snack Boxes', giftDetail: '150 single-serve snacks curated for you.<br> Perfect for the office breakroom.' },
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
            // var box_pricing = 'https://snacknations.typeform.com/to/R6qO3gCQ?Variant=Variant 3023 SnackNation Homepage Minireviews 21-18-10';
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
            var url2 = '';
            var _searchedIndex = jQuery.inArray('_ga',Query_string);
            if(_searchedIndex >= 0)
            {
                Query_string.splice(_searchedIndex,1);
            }
            var first_ex = true;
            jQuery(Query_string).each( function(key, val){
                if(!first_ex)      
                {
                    url += "&"+val+"="+(getUrlVars()[val]);
                    url2 = "?"+val+"="+(getUrlVars()[val]);
                }
                
                if(first_ex)
                {
                    url += "?"+val+"="+(getUrlVars()[val]);
                     url2 = "?"+val+"="+(getUrlVars()[val]);
                    first_ex = false;
                }
            });
            var variant = encodeURI('Variant 3023 SnackNation Homepage Unusual Ventures 2021-11-02');
            // console.log("Query_string", Query_string);

var str2 = "undefined";
if(url.indexOf(str2) != -1)
{
url='';
}

            if(Query_string.length == 1)
            {
                
             var new_url_remote_employees = "https://snacknations.typeform.com/to/lakEjm?Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic&Variant="+(variant);
                var new_url_office_employees = "https://snacknations.typeform.com/to/R6qO3gCQ?Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic&Variant="+(variant);
                var new_url_individiul_or_family = "https://manage.caroo.com/order?utm_source=SN%20Home%20Page&utm_campaign=Friends%20and%20Family%20Pop%20Up&Variant="+(variant);


                var new_url_remote_employees2 = "https://snacknations.typeform.com/to/lakEjm?Platform=Website&Campaign=WFH+Homepage+Quiz+Organic&typeform-source=snacknation.com&Variant="+(variant);
                var new_url_office_employees2 = "https://snacknations.typeform.com/to/R6qO3gCQ?Platform=Website&Campaign=WFH+Homepage+Quiz+Organic&typeform-source=snacknation.com&Variant="+(variant);
                var new_url_individiul_or_family2 = "https://manage.caroo.com/order?utm_source=SN%20Home%20Page&utm_campaign=Friends%20and%20Family%20Pop%20Up&Variant=="+(variant);

                setTimeout( function(){
                    // console.log("new_url", new_url);
                    // jQuery("a.box_price").attr('href', new_url);  
                    jQuery("a.box_price_popup_cta_remote_employees").attr('href', new_url_remote_employees);            
                    jQuery("a.box_price_popup_cta_office_employee").attr('href', new_url_office_employees);            
                    jQuery("a.box_price_popup_cta_individiul_or_family").attr('href', new_url_individiul_or_family);       
        jQuery("a.new-see-box-pricing-cta-box-price").attr('href', 'https://snacknations.typeform.com/to/MgHjL?Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic&Variant='+variant);       
                         

                    jQuery("a.bloackemploy").attr('href', new_url_remote_employees2);            
                    jQuery("a.bloackfromoff").attr('href', new_url_office_employees2);            
                    jQuery("a.bloackindual").attr('href', new_url_individiul_or_family2);       

                }, 2000);
                
            }
            else
            {
             
             
                var new_url_remote_employees = "https://snacknations.typeform.com/to/lakEjm"+url+"&Variant="+(variant);
                var new_url_office_employees = "https://snacknations.typeform.com/to/R6qO3gCQ"+url+"&Variant="+(variant);
                var new_url_individiul_or_family = "https://manage.caroo.com/order"+url+"&utm_source=SN%20Home%20Page&utm_campaign=Friends%20and%20Family%20Pop%20Up&Variant="+(variant);

                var new_url_remote_employees2 = "https://snacknations.typeform.com/to/lakEjm?Platform=Website&Campaign=WFH+Homepage+Quiz+Organic&typeform-source=snacknation.com"+url+"&Variant="+(variant);
                var new_url_office_employees2 = "https://snacknations.typeform.com/to/R6qO3gCQ?Platform=Website&Campaign=WFH+Homepage+Quiz+Organic&typeform-source=snacknation.com"+url+"&Variant="+(variant);
                var new_url_individiul_or_family2 = "https://manage.caroo.com/order?utm_source=SN%20Home%20Page&utm_campaign=Friends%20and%20Family%20Pop%20Up"+url+"&utm_source=SN%20Home%20Page&utm_campaign=Friends%20and%20Family%20Pop%20Up&Variant="+(variant);

                setTimeout( function(){
                    // console.log("new_url", new_url);
                    // jQuery("a.box_price").attr('href', new_url);  
                    jQuery("a.box_price_popup_cta_remote_employees").attr('href', new_url_remote_employees);            
                    jQuery("a.box_price_popup_cta_office_employee").attr('href', new_url_office_employees);            
                    jQuery("a.box_price_popup_cta_individiul_or_family").attr('href', new_url_individiul_or_family);   
        jQuery("a.new-see-box-pricing-cta-box-price").attr('href', 'https://snacknations.typeform.com/to/MgHjL'+url+'Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic&Variant='+variant);

                 // jQuery("a.bloackemploy").attr('href', new_url_remote_employees2);            
                 //    jQuery("a.bloackfromoff").attr('href', new_url_office_employees2);            
                 //    jQuery("a.bloackindual").attr('href', new_url_individiul_or_family2);       

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
                                    <a class="lp-element lp-pom-button box_price_popup_cta_remote_employees" id="lp-pom-button-95" href="https://snacknations.typeform.com/to/lakEjm?Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic&Variant=Variant 3023 SnackNation Homepage Unusual Ventures 2021-11-02" target="_self" data-params="true">\
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
                                    <a class="lp-element lp-pom-button box_price_popup_cta_office_employee" id="lp-pom-button-102" href="https://snacknations.typeform.com/to/R6qO3gCQ?Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic&Variant=Variant 3023 SnackNation Homepage Unusual Ventures 2021-11-02" target="_self" data-params="true">\
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
                                    <a class="lp-element lp-pom-button box_price_popup_cta_individiul_or_family" id="lp-pom-button-107" href="https://manage.caroo.com/order?utm_source=SN%20Home%20Page&utm_campaign=Friends%20and%20Family%20Pop%20Up&Variant=Variant 3023 SnackNation Homepage Unusual Ventures 2021-11-02" target="_self" data-params="true">\
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

jQuery( document ).ready(function() {

  jQuery(document).on("click",".bottom-block a",function(event) {
event.preventDefault();
   jQuery('a.box_price').trigger( "click" );
});
    // PG Cookies Add
var cookieName = '3023_SnackNation_HomePage_Unusual_Ventures-02112021';
var cookieValue = '1';
var myDate = new Date();
myDate.setDate(myDate.getDate() + 30);
document.cookie = cookieName +"=" + cookieValue + ";expires=" + myDate;
// END PG Cookies Add

jQuery('body').addClass('spz_home_v-2');
jQuery('body.spz_3023 .hero_section .hero_left_sec h1').text('Delight your team with epic snacks and gift boxes');

var img_path = '//res.cloudinary.com/spiralyze/image/upload/f_auto/Snacknation/3023%20%7C%20SnackNation/';
var img_path_WP = '//snacknation.com/wp-content/uploads/2021/04/'

var load_data = setInterval(function(){
    if(jQuery('.hero_section').length == 1) {
        jQuery('<section class="tab-section">\
    <div class="tab-indicator-wrapper">\
      <div class="custom-container">\
        <div class="start-txt">Start Here!</div>\
      </div>\
    </div>\
    <div class="tabs plan_tabs">\
        <ul id="tabs-nav" class="plan_tabs_nav">\
            <li>\
                <a href="#Employee-Gifting">\
                    Employee Gifting\
                    <span class="heart-icon">\
                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">\
                            <path fill-rule="evenodd" clip-rule="evenodd"\
                                d="M8.49999 1.33416C10.4808 -0.48367 13.5807 -0.443865 15.5126 1.45357C16.5897 2.51149 17.0838 3.93295 16.9884 5.32273C16.9126 6.72761 16.3139 8.02776 15.5414 9.15013C14.7642 10.2794 13.7699 11.2887 12.8117 12.1236C11.85 12.9616 10.9005 13.6448 10.1933 14.1179C9.83878 14.355 9.54295 14.5408 9.334 14.6683C9.22948 14.7321 9.14654 14.7814 9.08871 14.8153C9.05979 14.8323 9.03713 14.8454 9.02118 14.8546L9.00232 14.8654L8.99676 14.8686L8.99496 14.8696C8.9947 14.8698 8.99383 14.8703 8.50126 14L8.99383 14.8703L8.76462 15H8.23535L8.00615 14.8703L8.49872 14C8.00615 14.8703 8.0064 14.8704 8.00615 14.8703L8.00322 14.8686L7.99766 14.8654L7.9788 14.8546C7.96284 14.8454 7.94018 14.8323 7.91126 14.8153C7.85343 14.7814 7.7705 14.7321 7.66597 14.6683C7.45703 14.5408 7.1612 14.355 6.80671 14.1179C6.09952 13.6448 5.15 12.9616 4.18832 12.1236C3.23011 11.2887 2.23579 10.2794 1.45858 9.15013C0.686069 8.02775 0.0873943 6.72758 0.0115907 5.32268C-0.0838527 3.93292 0.41033 2.51147 1.48741 1.45357C3.41923 -0.443867 6.51916 -0.48367 8.49999 1.33416ZM8.49999 12.8325C8.33777 12.7307 8.14118 12.6043 7.9187 12.4555C7.25965 12.0147 6.38244 11.3828 5.50223 10.6158C4.61854 9.84573 3.7558 8.96022 3.10607 8.01621C2.45327 7.06776 2.05604 6.11944 2.00838 5.20914L2.0079 5.2001L2.00727 5.19107C1.94892 4.36386 2.24053 3.51722 2.88887 2.88043C4.08404 1.70653 6.02913 1.70653 7.2243 2.88043L8.49999 4.13339L9.77567 2.88043C10.9708 1.70653 12.9159 1.70653 14.1111 2.88043C14.7594 3.51722 15.0511 4.36386 14.9927 5.19107L14.9921 5.2001L14.9916 5.20914C14.9439 6.11944 14.5467 7.06776 13.8939 8.01621C13.2442 8.96022 12.3814 9.84573 11.4977 10.6158C10.6175 11.3828 9.74033 12.0147 9.08127 12.4555C8.8588 12.6043 8.6622 12.7307 8.49999 12.8325Z"\
                                fill="#E37588" />\
                        </svg>\
                    </span>\
                </a>\
            </li>\
            <li><a href="#Client-Gifting">Client Gifting</a></li>\
            <li><a href="#In-Office-Snacks">In-Office Snacks</a></li>\
        </ul>\
        <div id="tabs-content">\
            <div id="Employee-Gifting" class="tab-content">\
                <div class="main-img-content">\
                    <a href="javascript:void(0);" class="arrow left-arrow" data-target="#In-Office-Snacks">\
                        <img src="'+img_path+'Arrow-Left.png"\
                            alt="Arrow-Left" title="Arrow-Left" />\
                    </a>\
                    <a href="javascript:void(0);" class="arrow right-arrow" data-target="#Client-Gifting">\
                        <img src="'+img_path+'Arrow-Right.png"\
                            alt="Arrow-Right" title="Arrow-Right" />\
                    </a>\
                    <div class="main-img-wrapper">\
                        <img class="main-img"\
                            src="'+img_path_WP+'Employee-Gifting-min.jpg"\
                            alt="Employee Gifting" title="Employee Gifting" />\
                    </div>\
                </div>\
                <div class="row">\
                    <div class="benefit right-align">\
                        <div class="img-wrapper">\
                            <img src="'+img_path+'Hand-Point.png"\
                                alt="Recognition Made Easy" title="Recognition Made Easy" />\
                        </div>\
                        <div class="content">\
                            <h4 class="heading">Recognition Made Easy</h4>\
                            <p class="text">Whether you’re remote, in office, or hybrid, our flexible solutions help you\
                                delight your team anywhere.</p>\
                        </div>\
                    </div>\
                    <div class="benefit left-align">\
                        <div class="img-wrapper">\
                            <img src="'+img_path+'Paper-Plan.png"\
                                alt="Send Care in Minutes" title="Send Care in Minutes" />\
                        </div>\
                        <div class="content">\
                            <h4 class="heading">Send Care in Minutes</h4>\
                            <p class="text">Customize, send, and track every moment of care seamlessly with the Caroo\
                                Caring App.</p>\
                        </div>\
                    </div>\
                </div>\
                <div class="row second-row">\
                    <div class="benefit right-align">\
                        <div class="img-wrapper">\
                            <img src="'+img_path+'Gears.png"\
                                alt="100% Customizable" title="100% Customizable" />\
                        </div>\
                        <div class="content">\
                            <h4 class="heading">100% Customizable</h4>\
                            <p class="text pl-10-xs">Let recipients build their own perfect curation with CustomSwaps.\
                                Plus, add\
                                your logo to inserts, boxes, and select items.</p>\
                        </div>\
                    </div>\
                    <div class="benefit left-align">\
                        <div class="img-wrapper">\
                            <img src="'+img_path+'Hands.png"\
                                alt="Help Families in Need" title="Help Families in Need" />\
                        </div>\
                        <div class="content">\
                            <h4 class="heading">Help Families in Need</h4>\
                            <p class="text pr-10-xs">Donate meals to Feeding America with every delivery. Since 2015,\
                                we’ve\
                                donated 17 million meals and counting.</p>\
                        </div>\
                    </div>\
                </div>\
                <div class="bottom-block">\
                    <a href="#"\
                        class="bloackemploy see-box-pricing-cta box-price new-see-box-pricing-cta-box-price">See Boxes & Pricing</a>\
                        <p class="bottom_description">Take a 60-second quiz to get personalized recommendations for your team.</p>\
                    <div class="feeding-block">\
                        <div class="right-block">\
                            <div class="stat-block">\
                                <h4 class="stat">17,643,237</h4>\
                                <p class="donated">Meals Donated</p>\
                            </div>\
                            <div class="img-wrapper">\
                                <img src="'+img_path+'Feeding-America.png"\
                                    alt="Feeding America" title="Feeding America" />\
                            </div>\
                        </div>\
                    </div>\
                </div>\
            </div>\
            <div id="Client-Gifting" class="tab-content">\
                <div class="main-img-content">\
                    <a href="javascript:void(0);" class="arrow left-arrow" data-target="#Employee-Gifting">\
                        <img src="'+img_path+'Arrow-Left.png"\
                            alt="Arrow-Left" title="Arrow-Left" />\
                    </a>\
                    <a href="javascript:void(0);" class="arrow right-arrow" data-target="#In-Office-Snacks">\
                        <img src="'+img_path+'Arrow-Right.png"\
                            alt="Arrow-Right" title="Arrow-Right" />\
                    </a>\
                    <div class="main-img-wrapper">\
                        <img class="main-img desktop-only"\
                            src="'+img_path_WP+'Client-Gifting-Desktop.png"\
                            alt="Client Gifting" title="Client Gifting" />\
                        <img class="main-img tablet-only"\
                            src="'+img_path_WP+'Client-Gifting-Tablet-1.png"\
                            alt="Client Gifting" title="Client Gifting" />\
                        <img class="main-img mobile-only"\
                            src="'+img_path_WP+'Client-Gifting-Mobile-1.png"\
                            alt="Client Gifting" title="Client Gifting" />\
                    </div>\
                </div>\
                <div class="row">\
                    <div class="benefit right-align">\
                        <div class="img-wrapper">\
                            <img src="'+img_path+'Crown.png"\
                                alt="Make a Lasting Impression" title="Make a Lasting Impression" />\
                        </div>\
                        <div class="content">\
                            <h4 class="heading">Make a Lasting Impression</h4>\
                            <p class="text">Get clients’ attention with unique and hard-to-find premium gifts and\
                                curations designed to impress and convert. </p>\
                        </div>\
                    </div>\
                    <div class="benefit left-align cust-top">\
                        <div class="img-wrapper">\
                            <img src="'+img_path+'Hand-Point.png"\
                                alt="Quick & Easy" title="Quick & Easy" />\
                        </div>\
                        <div class="content">\
                            <h4 class="heading">Quick & Easy</h4>\
                            <p class="text">Personalize, send, and track client gift boxes seamlessly with the Caroo\
                                Caring App.</p>\
                        </div>\
                    </div>\
                </div>\
                <div class="row second-row">\
                    <div class="benefit right-align custom-padding-top">\
                        <div class="img-wrapper">\
                            <img src="'+img_path+'Gears.png"\
                                alt="100% Customizable" title="100% Customizable" />\
                        </div>\
                        <div class="content">\
                            <h4 class="heading">100% Customizable</h4>\
                            <p class="text">Let recipients build their own perfect curation with CustomSwaps. Plus, add\
                                your logo to inserts, boxes, and select items.</p>\
                        </div>\
                    </div>\
                    <div class="benefit left-align">\
                        <div class="img-wrapper">\
                            <img src="'+img_path+'Hands.png"\
                                alt="Help Families in Need" title="Help Families in Need" />\
                        </div>\
                        <div class="content">\
                            <h4 class="heading">Help Families in Need</h4>\
                            <p class="text">Donate meals to Feeding America with every delivery. Since 2015, we’ve\
                                donated 17 million meals and counting.</p>\
                        </div>\
                    </div>\
                </div>\
                <div class="bottom-block">\
                    <a href="#"\
                        class="bloackindual see-box-pricing-cta box-price">See Boxes & Pricing</a>\
                        <p class="bottom_description">Take a 60-second quiz to get personalized recommendations for your team.</p>\
                    <div class="feeding-block">\
                        <div class="right-block">\
                            <div class="stat-block">\
                                <h4 class="stat">17,643,237</h4>\
                                <p class="donated">Meals Donated</p>\
                            </div>\
                            <div class="img-wrapper">\
                                <img src="'+img_path+'Feeding-America.png"\
                                    alt="Feeding America" title="Feeding America" />\
                            </div>\
                        </div>\
                    </div>\
                </div>\
            </div>\
            <div id="In-Office-Snacks" class="tab-content">\
                <div class="main-img-content">\
                    <a href="javascript:void(0);" class="arrow left-arrow" data-target="#Client-Gifting">\
                        <img src="'+img_path+'Arrow-Left.png"\
                            alt="Arrow-Left" title="Arrow-Left" />\
                    </a>\
                    <a href="javascript:void(0);" class="arrow right-arrow" data-target="#Employee-Gifting">\
                        <img src="'+img_path+'Arrow-Right.png"\
                            alt="Arrow-Right" title="Arrow-Right" />\
                    </a>\
                    <div class="main-img-wrapper">\
                        <img class="main-img"\
                            src="'+img_path_WP+'In-Office-Snacks-Desktop.png"\
                            alt="In-Office Snacks" title="In-Office Snacks" />\
                    </div>\
                </div>\
                <div class="row">\
                    <div class="benefit right-align">\
                        <div class="img-wrapper">\
                            <img src="'+img_path+'Chips-Bag.png"\
                                alt="Delicious & Better For You" title="Delicious & Better For You" />\
                        </div>\
                        <div class="content">\
                            <h4 class="heading">Delicious & Better For You</h4>\
                            <p class="text">Each box contains 150 single-serve snacks like tasty chips, cookies, jerky,\
                                bars, and more from today’s healthier brands.</p>\
                        </div>\
                    </div>\
                    <div class="benefit left-align">\
                        <div class="img-wrapper">\
                            <img src="'+img_path+'Hand-Point.png"\
                                alt="Ridiculously Easy" title="Ridiculously Easy" />\
                        </div>\
                        <div class="content">\
                            <h4 class="heading">Ridiculously Easy</h4>\
                            <p class="text">Save time and money with the Caroo Caring App and manage budget setting,\
                                shipping and more all in one place.</p>\
                        </div>\
                    </div>\
                </div>\
                <div class="row second-row">\
                    <div class="benefit right-align">\
                        <div class="img-wrapper">\
                            <img src="'+img_path+'Geometric-shapes.png"\
                                alt="Endless Variety" title="Endless Variety" />\
                        </div>\
                        <div class="content">\
                            <h4 class="heading">Endless Variety</h4>\
                            <p class="text">Discover new and exciting snacks every month, with gluten-free, vegetarian\
                                and kosher options available.</p>\
                        </div>\
                    </div>\
                    <div class="benefit left-align">\
                        <div class="img-wrapper">\
                            <img src="'+img_path+'Hands.png"\
                                alt="Help Families in Need" title="Help Families in Need" />\
                        </div>\
                        <div class="content">\
                            <h4 class="heading">Help Families in Need</h4>\
                            <p class="text">Donate meals to Feeding America with every delivery. Since 2015, we’ve\
                                donated 17 million meals and counting.</p>\
                        </div>\
                    </div>\
                </div>\
                <div class="bottom-block">\
                    <a href="#"\
                        class="bloackfromoff see-box-pricing-cta box-price">See Boxes & Pricing</a>\
                        <p class="bottom_description">Take a 60-second quiz to get personalized recommendations for your team.</p>\
                    <div class="feeding-block">\
                        <div class="right-block">\
                            <div class="stat-block">\
                                <h4 class="stat">17,643,237</h4>\
                                <p class="donated">Meals Donated</p>\
                            </div>\
                            <div class="img-wrapper">\
                                <img src="'+img_path+'Feeding-America.png"\
                                    alt="Feeding America" title="Feeding America" />\
                            </div>\
                        </div>\
                    </div>\
                </div>\
            </div>\
        </div>\
    </div>\
</section>').insertAfter('.hero_section');

// tab section start
jQuery('#tabs-nav li:first-child').addClass('active');
jQuery('.tab-content').hide();
jQuery('.tab-content:first').show();
// Change tab
jQuery('#tabs-nav li').click(function () {
    jQuery('#tabs-nav li').removeClass('active');
    jQuery(this).addClass('active');
    jQuery('.tab-content').hide();
    var activeTab = jQuery(this).find('a').attr('href');
    jQuery(activeTab).show();
    return false;
});
// Tab section end
// Next/Previous Arrow
jQuery('body').on('click', '.arrow', function (e) {
    e.preventDefault();
        jQuery('#tabs-nav li').removeClass('active');
        jQuery('.tab-content').hide();
        var activeTab = jQuery(this).data('target');
        jQuery('#tabs-nav a[href="' + activeTab + '"]').parents('li').addClass('active');
        jQuery(activeTab).show();
        return false;
    });
    clearInterval(load_data);
    }
});
});
</script>
<?php get_footer(); ?>