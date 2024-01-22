<?php /* Template Name: New Homepage 2*/ ?>
<?php get_header(); ?>
<style type="text/css">
    html{opacity: 0;transition: 0.2s all;}
    html.load{opacity: 1;}
</style>
<link rel="stylesheet" type="text/css" href="https://snacknation.com//wp-content/themes/salient-child/spz-template/home-style-2.css">
<link rel="stylesheet" type="text/css" href="https://snacknation.com//wp-content/themes/salient-child/spz-template/popup-2.css">
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
        jQuery(document).ready(function() {
            if (!jQuery('body').hasClass('snacknation_home')) {
                var cookieName = '#3001-Snacknation-Homepage-03072021';
                var cookieValue = '1';
                var myDate = new Date();
                myDate.setDate(myDate.getDate() + 30);
                document.cookie = cookieName + "=" + cookieValue + ";expires=" + myDate;
                jQuery('body').addClass('snacknation_home');
            }
            jQuery('.snacknation_home #header-outer #top #logo img').attr("src","//res.cloudinary.com/spiralyze/image/upload/f_auto/Snacknation/Home-redesign/snacknation-logo.png");
            jQuery('.snacknation_home #header-outer #top #logo img').attr("srcset","//res.cloudinary.com/spiralyze/image/upload/f_auto/Snacknation/Home-redesign/snacknation-logo.png");
            var pngimg = "//res.cloudinary.com/spiralyze/image/upload/f_auto/Snacknation/Home-redesign/";
            $('.snacknation_home header#top .col_last li.menu-item.button_solid_color_2 a span').text('See Boxes & Pricing');
            jQuery(document).ready(function(){
            setTimeout(function(){
                jQuery('#slide-out-widget-area .menuwrapper .menu li:last-child a').text('See Boxes & Pricing');
                },1000);
            });
            $('<ul class="mobile-menu"><li id="menu-item-28777" class="menu-item menu-item-type-custom menu-item-object-custom button_solid_color_2 menu-item-28777"><a href="#" target="_self" data-params="true"><span class="menu-title-text">See Boxes &amp; Pricing</span></a></li></ul>').insertBefore('.slide-out-widget-area-toggle');
            $('<div class="hero-section"> \
                    <div class="hero-inner">\
                        <div class="hero-row container">\
                            <div class="hero-left-sec">\
                                <div class="everyone-loved-top-sec">\
                                    <div class="inner-everyone-loved">\
                                        <ul>\
                                            <li><img src="'+pngimg+'star.png" alt="Star"></li>\
                                            <li><img src="'+pngimg+'star.png" alt="Star"></li>\
                                            <li><img src="'+pngimg+'star.png" alt="Star"></li>\
                                            <li><img src="'+pngimg+'star.png" alt="Star"></li>\
                                            <li><img src="'+pngimg+'star.png" alt="Star"></li>\
                                        </ul>\
                                        <p><em>“everyone loved it”</em></p>\
                                    </div>\
                                    <div class="inner-everyone-loved">\
                                         <ul>\
                                            <li><img src="'+pngimg+'star.png" alt="Star"></li>\
                                            <li><img src="'+pngimg+'star.png" alt="Star"></li>\
                                            <li><img src="'+pngimg+'star.png" alt="Star"></li>\
                                            <li><img src="'+pngimg+'star.png" alt="Star"></li>\
                                            <li><img src="'+pngimg+'star.png" alt="Star"></li>\
                                        </ul>\
                                        <p><em>“fast and easy”</em></p>\
                                    </div>\
                                </div>\
                                <h1>Delight Your Team With Epic Snacks and Gift Boxes</h1>\
                                <p>Whether your team is remote, in-office, hybrid or international - send <b>fully customizable</b> boxes everyone raves about. Easy. Epic. On budget.</p>\
                                <div class="hero-btn">\
                                    <div class="btn-one btn-all">\
                                        <a data-class="for-office" href="javascript:void(0);" class="hero-btn-a active">See <span>Office</span> Boxes</a> <p>Take the 60-second quiz to <a class="box_product_price" target="_self" data-params="true">select products & get pricing</a></p>\
                                    </div>\
                                    <div class="btn-two btn-all">\
                                        <a data-class="for-remote" href="javascript:void(0);" class="hero-btn-a">See <span>Individual</span> Boxes</a> <p>Take the 60-second quiz to <a class="individual_product_price" target="_self" data-params="true">select products & get pricing</a></p>\
                                    </div>\
                                </div>\
                            </div>\
                            <div class="hero-right-sec">\
                                <img src="'+pngimg+'hero-right-img-new.png" alt="Delight Your Team With Epic Snacks and Gift Boxes" class="desk-img">\
                                <img src="'+pngimg+'hero-right-img-new768.png" alt="Delight Your Team With Epic Snacks and Gift Boxes" class="tab-img">\
                                <img src="'+pngimg+'hero-right-img-new375.png" alt="Delight Your Team With Epic Snacks and Gift Boxes" class="mobile-img">\
                            </div>\
                        </div>\
                    </div>\
                </div>\
                <div class="client-section">\
                    <div class="client-inner">\
                        <div class="client-row container">\
                            <h2>5,000+ Companies From Small Business to Enterprise Use SnackNation to Delight Their Teams</h2>\
                            <div class="client-col">\
                                <div class="desktop-img">\
                                    <img src="'+pngimg+'client-logo.png" alt="Client Logo">\
                                </div>\
                                <img src="'+pngimg+'client-logo-tablet.png" alt="Client Logo" class="table-img">\
                                <img src="'+pngimg+'client-logo-mobile.png" alt="Client Logo" class="mobile-img">\
                            </div>\
                        </div>\
                    </div>\
                </div>\
                <div class="product-section for-office active">\
                    <div class="product-inner">\
                        <div class="product-row container">\
                            <h2>See Why Teams Rave About SnackNation Office Boxes</h2>\
                            <p>Each box contains 150 expertly curated, single-serve snacks your team is guaranteed to love. Perfect for break rooms, office events, and more.</p>\
                            <ul class="product-ul">\
                                <li class="product-li">\
                                    <img src="'+pngimg+'Bars.png" alt="Bars">\
                                    <p>Bars</p>\
                                </li>\
                                 <li class="product-li">\
                                    <img src="'+pngimg+'Chips.png" alt="Chips">\
                                    <p>Chips</p>\
                                </li>\
                                 <li class="product-li">\
                                    <img src="'+pngimg+'Granola.png" alt="Granola">\
                                    <p>Granola</p>\
                                </li>\
                                 <li class="product-li">\
                                    <img src="'+pngimg+'Nuts_Trail_Mix.png" alt="Nuts & Trail Mix">\
                                    <p>Nuts & Trail Mix</p>\
                                </li>\
                                 <li class="product-li">\
                                    <img src="'+pngimg+'Jerky_Salami.png" alt="Jerky & Salami">\
                                    <p>Jerky & Salami</p>\
                                </li>\
                                 <li class="product-li">\
                                    <img src="'+pngimg+'Sweets.png" alt="Sweets">\
                                    <p>Sweets</p>\
                                </li>\
                                 <li class="product-li">\
                                    <img src="'+pngimg+'Classics.png" alt="Classics">\
                                    <p>Classics</p>\
                                </li>\
                                 <li class="product-li">\
                                    <img src="'+pngimg+'Dried_Fruit.png" alt="Dried Fruit">\
                                    <p>Dried Fruit</p>\
                                </li>\
                            </ul>\
                            <div class="product-btn">\
                                <a class="box_price" target="_self" data-params="true">See Boxes & Pricing</a>\
                                <p>Take the 60-second quiz to get customized recommendations.</p>\
                            </div>\
                        </div>\
                    </div>\
                </div>\
                <div class="product-info for-office active">\
                    <div class="info-inner">\
                        <div class="info-row info-row-1">\
                            <div class="info-col">\
                                <div class="info-text info-col-inner">\
                                    <h2>Customizable Snack Boxes. Perfect For Your Team.</h2>\
                                    <ul>\
                                        <li class="info-col">\
                                            <div class="icon"><img src="'+pngimg+'expertly-curated.png" alt="Expertly Curated"></div>\
                                            <div class="text"><b>Expertly Curated.</b> Our team of snack scientists select only snacks that are the most delicious, high quality, and fun.</div>\
                                        </li>\
                                        <li class="info-col">\
                                            <div class="icon"><img src="'+pngimg+'snack-concierge.png" alt="Snack Concierge"></div>\
                                            <div class="text"><b>Snack Concierge.</b> Changes and reordering are easy. Just tell your personal snack concierge. Or make changes directly online.</div>\
                                        </li>\
                                        <li class="info-col">\
                                            <div class="icon"><img src="'+pngimg+'special-diets.png" alt="Special Diets"></div>\
                                            <div class="text"><b>Special Diets.</b> There\'s something for everyone, including vegan, gluten-free, kosher, nut-free, paleo, and more.</div>\
                                        </li>\
                                    </ul>\
                                </div>\
                                <div class="info-img info-col-inner">\
                                    <img src="'+pngimg+'Team.png" alt="Customizable Snack Boxes">\
                                    <p class="img-before">Snack scientists rate snacks on flavor, texture, nutrition, and wow factor. Only 1-in-5 makes the grade. </p>\
                                </div>\
                            </div>\
                        </div>\
                        <div class="info-row info-row-2 left-img">\
                            <div class="info-col">\
                                <div class="info-text info-col-inner">\
                                    <h2>Save 40% Off Retail. <br> Options For Every Budget.</h2>\
                                    <ul>\
                                        <li class="info-col">\
                                            <div class="icon"><img src="'+pngimg+'Value.png" alt="Value"></div>\
                                            <div class="text"><b>Value.</b> We help you get the most from your snack budget. Save an average of 40% off retail prices.   </div>\
                                        </li>\
                                        <li class="info-col">\
                                            <div class="icon"><img src="'+pngimg+'save-time.png" alt="Save Time"></div>\
                                            <div class="text"><b>Save Time.</b> Never make another run to the store, never read another online review.</div>\
                                        </li>\
                                        <li class="info-col">\
                                            <div class="icon"><img src="'+pngimg+'free-shipping.png" alt="Free Shipping"></div>\
                                            <div class="text"><b>Free Shipping.</b> Get free domestic shipping with every order.</div>\
                                        </li>\
                                    </ul>\
                                </div>\
                                <div class="info-img info-col-inner">\
                                    <img src="'+pngimg+'laptop-bg.png" alt="Snack Laptop">\
                                    <p class="img-before">A curated selection of premium snacks, delivered. Save 40% off retail.</p>\
                                </div>\
                            </div>\
                        </div>\
                        <div class="info-row info-row-3">\
                            <div class="info-col">\
                                <div class="info-text info-col-inner">\
                                    <h2>Getting Started Is Easy</h2>\
                                    <ul>\
                                        <li class="info-col">\
                                            <div class="icon"><img src="'+pngimg+'Take-the-quiz.png" alt="Take the Quiz"></div>\
                                            <div class="text"><b>Take the Quiz.</b> Take the <a class="box_price" target="_self" data-params="true">60-second online quiz</a> and get custom recommendations and pricing.</div>\
                                        </li>\
                                        <li class="info-col">\
                                            <div class="icon"><img src="'+pngimg+'free-sample-box.png" alt="Free Sample Box"></div>\
                                            <div class="text"><b>Free Sample Box.</b> Try some snacks with a free sample box.  Free, no credit card required.</div>\
                                        </li>\
                                        <li class="info-col">\
                                            <div class="icon"><img src="'+pngimg+'Order.png" alt="Order"></div>\
                                            <div class="text"><b>Order.</b> Place an order, drop it off in the breakroom, then sit back and enjoy the compliments.</div>\
                                        </li>\
                                    </ul>\
                                </div>\
                                <div class="info-img info-col-inner">\
                                    <img src="'+pngimg+'DiscoveryBox.png" alt="Getting Started Is Easy">\
                                    <p class="img-before">Try it out first, with a free box delivered to your office.</p>\
                                </div>\
                            </div>\
                        </div>\
                    </div>\
                </div>\
                <div class="office-section for-office active">\
                    <div class="office-inner">\
                        <div class="office-row">\
                            <img src="'+pngimg+'Happier-bg-768.png" alt="Why Offices With SnackNation Are Happier and Grow Faster" class="tab-img">\
                            <div class="office-col">\
                                <h2>Why Offices With SnackNation Are Happier and Grow Faster</h2>\
                                <p class="sub-heading">Boost team happiness, retention, and productivity by having a selection of fun snacks to enjoy during work.</p>\
                                <div class="office-btn"><a class="box_price" target="_self" data-params="true">See Boxes & Pricing</a></div>\
                                <p class="btn-subtext">Take the 60-second quiz to see your custom recommendations.</p>\
                            </div>\
                        </div>\
                    </div>\
                </div>\
                <div class="review-section for-office active">\
                    <div class="review-inner">\
                        <h2>What Our Happy Customers Have to Say</h2>\
                        <p>Over 500,000 employees can’t stop raving about SnackNation!</p>\
                        <div class="review-row container">\
                            <div class="slider-count">\
                                <div class="quote-img"><img src="'+pngimg+'quote.png" alt="Quote"></div>\
                                <div class="slide-count">\
                                    <div class="slick-prev arrow"><img src="'+pngimg+'slider-arrow.png" alt="Arrow"></div>\
                                    <div class="count"><span class="active">1</span> / <span class="total">5</span></div>\
                                    <div class="slick-next arrow"><img src="'+pngimg+'slider-arrow.png" alt="Arrow"></div>\
                                </div>\
                            </div>\
                            <div class="review-slider">\
                                <div class="review-col">\
                                    <div class="review-img">\
                                        <img src="'+pngimg+'Sarah-Ashley.png" alt="Sarah Ashley">\
                                    </div>\
                                    <div class="user-info user-mobile">\
                                        <div class="user-name">\
                                            <h4>Sarah Ashley</h4>\
                                            <p>Director of Human Capital</p>\
                                        </div>\
                                        <div class="user-logo">\
                                            <img src="'+pngimg+'Packet_Fusion_Logo.svg" alt="Packet Fusion">\
                                        </div>\
                                    </div>\
                                    <div class="review-text">\
                                        <p class="user-review">It’s a no-brainer. Having these snacks conveniently here in the office made such a huge difference to everybody in the office. <br> My team turns into little kids when the box arrives!</p>\
                                        <div class="user-info">\
                                            <div class="user-name">\
                                                <h4>Sarah Ashley</h4>\
                                                <p>Director of Human Capital</p>\
                                            </div>\
                                            <div class="user-logo">\
                                                <img src="'+pngimg+'Packet_Fusion.png" alt="Packet Fusion">\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>\
                                 <div class="review-col">\
                                    <div class="review-img">\
                                        <img src="'+pngimg+'Aaron-Hakenson.png" alt="Aaron Hakenson">\
                                    </div>\
                                    <div class="user-info user-mobile">\
                                        <div class="user-name">\
                                            <h4>Aaron Hakenson</h4>\
                                            <p>VP Global Online Sales at Lionbridge</p>\
                                        </div>\
                                        <div class="user-logo">\
                                            <img src="'+pngimg+'lionbridge-logo-new.png" alt="lionbridge">\
                                        </div>\
                                    </div>\
                                    <div class="review-text">\
                                        <p class="user-review">SnackNation fuels our sales team through long days providing solid, tasty, healthy options!</p>\
                                        <div class="user-info">\
                                            <div class="user-name">\
                                                <h4>Aaron Hakenson</h4>\
                                                <p>VP Global Online Sales at Lionbridge</p>\
                                            </div>\
                                            <div class="user-logo">\
                                                <img src="'+pngimg+'lionbridge-logo-new.png" alt="lionbridge">\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>\
                                <div class="review-col">\
                                    <div class="review-img">\
                                        <img src="'+pngimg+'Aleeza-Sklover.png" alt="Aleeza Sklover">\
                                    </div>\
                                     <div class="user-info user-mobile">\
                                        <div class="user-name">\
                                            <h4>Aleeza Sklover</h4>\
                                            <p>Office Manager at nylmedia</p>\
                                        </div>\
                                        <div class="user-logo">\
                                            <img src="'+pngimg+'nyle-logo.png" alt="Nyle lnc">\
                                        </div>\
                                    </div>\
                                    <div class="review-text">\
                                        <p class="user-review">We love the great variety of snacks that come in our box! and its an added bonus that they are healthy!</p>\
                                        <div class="user-info">\
                                            <div class="user-name">\
                                                <h4>Aleeza Sklover</h4>\
                                                <p>Office Manager at nylmedia</p>\
                                            </div>\
                                            <div class="user-logo nyle-logo">\
                                                <img src="'+pngimg+'nyle-logo.png" alt="Nyle lnc" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>\
                                <div class="review-col">\
                                    <div class="review-img">\
                                        <img src="'+pngimg+'Chloe-Condon.png" alt="Chloe Condon">\
                                    </div>\
                                     <div class="user-info user-mobile">\
                                        <div class="user-name">\
                                            <h4>Chloe Condon</h4>\
                                            <p>Office Manager at PAX Labs</p>\
                                        </div>\
                                        <div class="user-logo">\
                                            <img src="'+pngimg+'pax-logo.png" alt="Pax">\
                                        </div>\
                                    </div>\
                                    <div class="review-text">\
                                        <p class="user-review">Takes all the pain out of picking out office snacks every week- it’s like having a snack concierge!</p>\
                                        <div class="user-info">\
                                            <div class="user-name">\
                                                <h4>Chloe Condon</h4>\
                                                <p>Office Manager at PAX Labs</p>\
                                            </div>\
                                            <div class="user-logo pax-logo">\
                                                <img src="'+pngimg+'pax-logo.png" alt="Pax">\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>\
                                 <div class="review-col">\
                                    <div class="review-img">\
                                        <img src="'+pngimg+'Jeri-Bouvette.png" alt="Jeri Bouvette">\
                                    </div>\
                                     <div class="user-info user-mobile">\
                                        <div class="user-name">\
                                            <h4>Aleeza Sklover</h4>\
                                            <p>Office Manager at nylmedia</p>\
                                        </div>\
                                        <div class="user-logo">\
                                            <img src="'+pngimg+'the-food-group-logo.png" alt="The Food Group">\
                                        </div>\
                                    </div>\
                                    <div class="review-text">\
                                        <p class="user-review">Our employees are loving SnackNation! The customer service experience is amazing!</p>\
                                        <div class="user-info">\
                                            <div class="user-name">\
                                                <h4>Jeri Bouvette</h4>\
                                                <p>Administrative Assistant at The Food Group</p>\
                                            </div>\
                                            <div class="user-logo">\
                                                <img src="'+pngimg+'the-food-group-logo.png" alt="The Food Group">\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>\
                    </div>\
                </div>\
                <div class="product-section product-one for-remote">\
                    <div class="product-inner">\
                        <div class="product-row container">\
                            <h2>See Why Team Members Rave About SnackNation Personal Care Boxes</h2>\
                            <p>Fully customizable gift boxes that your team is guaranteed to love. Perfect for remote teams, holidays, birthdays, events, and more.</p>\
                            <ul class="product-ul">\
                                <li class="product-li">\
                                    <img src="'+pngimg+'Snacks_Box.png" alt="Snacks Box">\
                                    <p>Snacks Box</p>\
                                    <p class="sub-text">15 & 30 snack options</p>\
                                </li>\
                                 <li class="product-li">\
                                    <img src="'+pngimg+'Happy_Hour_Box.png" alt="Happy Hour Box">\
                                    <p>Happy Hour Box</p>\
                                    <p class="sub-text">Perfect for breaking the ice, bonding with your team or celebrating big milestones.</p>\
                                </li>\
                                 <li class="product-li">\
                                    <img src="'+pngimg+'Mindfulness_Box.png" alt="Mindfulness Box">\
                                    <p>Mindfulness Box</p>\
                                    <p class="sub-text">Keep your team focused, calm and productive for the road ahead.</p>\
                                </li>\
                                 <li class="product-li">\
                                    <img src="'+pngimg+'Unplugged_Box.png" alt="Unplugged Box">\
                                    <p>Unplugged Box</p>\
                                    <p class="sub-text">Help your team rejuvenate and reset after putting in the hard work.</p>\
                                </li>\
                                 <li class="product-li">\
                                    <img src="'+pngimg+'Sips_Snacks_Box.png" alt="Sips + Snacks Box">\
                                    <p>Sips + Snacks Box</p>\
                                    <p class="sub-text">10 charcuterie-inspired snacks + your choice of Red or White wine</p>\
                                </li>\
                                 <li class="product-li">\
                                    <img src="'+pngimg+'Amplify_Box.png" alt="Amplify Box">\
                                    <p>Amplify Box</p>\
                                    <p class="sub-text">Black, women, and people of color-founded goods and healthier snacks</p>\
                                </li>\
                            </ul>\
                            <div class="product-btn">\
                                <a class="individual_product_price" target="_self" data-params="true">See Boxes & Pricing</a>\
                                <p>Take the 60-second quiz to get custom recommendations.</p>\
                            </div>\
                        </div>\
                    </div>\
                </div>\
                <div class="product-section product-two for-remote">\
                    <div class="product-inner">\
                        <div class="product-row container">\
                            <h2>See Why Team Members Rave About SnackNation Personal Care Boxes</h2>\
                            <p>Fully customizable gift boxes that your team is guaranteed to love. Perfect for remote teams, holidays, birthdays, events, and more.</p>\
                            <ul class="product-ul">\
                               <li class="product-li">\
                                    <img src="'+pngimg+'better-for-you.png" alt="Better-for-you / Healthier Snacks">\
                                    <p>Better-for-you / Healthier Snacks</p>\
                                </li>\
                                 <li class="product-li">\
                                    <img src="'+pngimg+'electronics.png" alt="Electronics">\
                                    <p>Electronics</p>\
                                </li>\
                                 <li class="product-li">\
                                    <img src="'+pngimg+'swag.png" alt="Branded Swag">\
                                    <p>Branded Swag</p>\
                                </li>\
                                 <li class="product-li">\
                                    <img src="'+pngimg+'unique_hard.png" alt="Unique / Hard to find items">\
                                    <p>Unique / Hard to find items</p>\
                                </li>\
                                 <li class="product-li">\
                                    <img src="'+pngimg+'team-activities.png" alt="Team Activities">\
                                    <p>Team Activities</p>\
                                </li>\
                                 <li class="product-li">\
                                    <img src="'+pngimg+'Indulgences.png" alt="Indulgences">\
                                    <p>Indulgences</p>\
                                </li>\
                                <li class="product-li">\
                                    <img src="'+pngimg+'wine.png" alt="Wine">\
                                    <p>Wine</p>\
                                </li>\
                                <li class="product-li">\
                                    <img src="'+pngimg+'drinkware.png" alt="Drinkware">\
                                    <p>Drinkware</p>\
                                </li>\
                            </ul>\
                            <div class="product-btn">\
                                <a class="individual_product_price" target="_self" data-params="true">See Boxes & Pricing</a>\
                                <p>Take the 60-second quiz to get custom recommendations.</p>\
                            </div>\
                        </div>\
                    </div>\
                </div>\
                <div class="product-info for-remote">\
                    <div class="info-inner">\
                        <div class="info-row info-row-1">\
                            <div class="info-col">\
                                <div class="info-text info-col-inner">\
                                    <h2>Customizable Snack Boxes. Perfect For Your Team.</h2>\
                                    <ul>\
                                        <li class="info-col">\
                                            <div class="icon"><img src="'+pngimg+'expertly-curated.png" alt="Expert Giftologists"></div>\
                                            <div class="text"><b>Expert Giftologists.</b> You dream it, we deliver it. Build a fully customized experience with the help of our care experts and show you care in a memorable way.</div>\
                                        </li>\
                                        <li class="info-col">\
                                            <div class="icon"><img src="'+pngimg+'Team_Building_Experiences.png" alt="Team Building Experiences"></div>\
                                            <div class="text"><b>Team Building Experiences.</b> Take virtual events to the next level. Team activities, branded swag, wine tastings, and more.</div>\
                                        </li>\
                                        <li class="info-col">\
                                            <div class="icon"><img src="'+pngimg+'Premium_Goods_And_Snacks.png" alt="Premium Goods And Snacks"></div>\
                                            <div class="text"><b>Premium Goods And Snacks.</b> Choose from over 5,000 delicious snacks and premium goods, including chips, sweets, wines, coffees, drinkware, electronics, notebooks, and more.</div>\
                                        </li>\
                                    </ul>\
                                </div>\
                                <div class="info-img info-col-inner">\
                                    <img src="'+pngimg+'your-team.png" alt="Customizable Snack Boxes">\
                                    <p class="img-before">Choose from over 5,000 snacks rated for nutrition, flavor, texture, and wow factor. Only 1-in-5 makes the grade.</p>\
                                </div>\
                            </div>\
                        </div>\
                        <div class="info-row info-row-2 left-img">\
                            <div class="info-col">\
                                <div class="info-text info-col-inner">\
                                    <h2>Ordering Made Easy</h2>\
                                    <ul>\
                                        <li class="info-col">\
                                            <div class="icon"><img src="'+pngimg+'Themed_Packages.png" alt="Themed Packages"></div>\
                                            <div class="text"><b>Themed Packages.</b> Choose from recommended gift boxes with just one click.</div>\
                                        </li>\
                                        <li class="info-col">\
                                            <div class="icon"><img src="'+pngimg+'Address_Collection.png" alt="Address Collection"></div>\
                                            <div class="text"><b>Address Collection.</b> We email recipients to get their addresses, so you don’t need to.</div>\
                                        </li>\
                                        <li class="info-col">\
                                            <div class="icon"><img src="'+pngimg+'Tracking.png" alt="Tracking"></div>\
                                            <div class="text"><b>Tracking.</b> Easily track each recipient’s order without having to manage tons of one-off tracking numbers.</div>\
                                        </li>\
                                    </ul>\
                                </div>\
                                <div class="info-img info-col-inner">\
                                    <img src="'+pngimg+'ordering-made-easy.png" alt="Ordering Made Easy">\
                                    <p class="img-before">Order in minutes. Get the perfect gift boxes for your team, delivered to their door.</p>\
                                </div>\
                            </div>\
                        </div>\
                        <div class="info-row info-row-3">\
                            <div class="info-col">\
                                <div class="info-text info-col-inner">\
                                    <h2>Save 40% Off Retail. Options For Every Budget.</h2>\
                                    <ul>\
                                        <li class="info-col">\
                                            <div class="icon"><img src="'+pngimg+'Value.png" alt="Value"></div>\
                                            <div class="text"><b>Value.</b> We help you get the most from your gift budget. Save an average of 40% off retail. Starting at just $25 including shipping!</div>\
                                        </li>\
                                        <li class="info-col">\
                                            <div class="icon"><img src="'+pngimg+'save-time.png" alt="Save Time"></div>\
                                            <div class="text"><b>Save Time.</b> Never deal with manually buying, packaging, and sending gift boxes again.</div>\
                                        </li>\
                                        <li class="info-col">\
                                            <div class="icon"><img src="'+pngimg+'free-shipping.png" alt="Giving Back"></div>\
                                            <div class="text"><b>Giving Back.</b> For every gift box ordered, we donate a meal to a family in need through Feeding America.</div>\
                                        </li>\
                                    </ul>\
                                </div>\
                                <div class="info-img info-col-inner">\
                                    <img src="'+pngimg+'gift_box.png" alt="Save 40% Off Retail. Options For Every Budget" class="desktop-img">\
                                    <img src="'+pngimg+'gift_box_768.png" alt="Save 40% Off Retail. Options For Every Budget" class="mobile-img">\
                                    <p class="img-before">Select from a huge variety of gift box options at great prices. Perfect for everything from small groups to enterprise-wide gifting.</p>\
                                </div>\
                            </div>\
                        </div>\
                    </div>\
                </div>\
                <div class="quiz-section for-remote">\
                    <div class="quiz-inner">\
                        <div class="quiz-row">\
                            <img src="'+pngimg+'Quiz-bg-768.png" alt="Getting Started Is Easy" class="tab-img">\
                            <div class="quiz-col text-col">\
                                <h2>Getting Started Is Easy</h2>\
                                <ul>\
                                    <li class="quiz-li li-1">\
                                        <div class="number"><h3>1</h3><span>Take the Quiz</span></div>\
                                        <p>Take the <a class="individual_product_price" target="_self" data-params="true">60-second online quiz</a> and tell us your budget, team size, and more.</p>\
                                    </li>\
                                    <li class="quiz-li li-2">\
                                        <div class="number"><h3>2</h3><span>Get Custom Recommendations & Pricing</span></div>\
                                        <p>Based on your quiz responses, we\'ll give you custom recommendations and pricing.</p>\
                                    </li>\
                                    <li class="quiz-li li-3">\
                                        <div class="number"><h3>3</h3><span>Finalize Your Order</span></div>\
                                        <p>We can automatically collect addresses, and ship directly to your team members.</p>\
                                    </li>\
                                </ul>\
                                <div class="quiz-btn">\
                                    <a class="individual_product_price" target="_self" data-params="true">Take the Quiz</a>\
                                </div>\
                            </div>\
                        </div>\
                    </div>\
                </div>\
                <div class="office-section for-remote">\
                    <div class="office-inner">\
                        <div class="office-row">\
                            <img src="'+pngimg+'Remote-bg-768" alt="Why Remote Teams With SnackNation Are Happier And Grow Faster" class="tab-img">\
                            <div class="office-col">\
                                <h2>Why Remote Teams With SnackNation Are Happier And Grow Faster</h2>\
                                <p class="sub-heading">Receiving fun snacks and gifts in the mail keeps teams connected, improves retention, and morale.</p>\
                                <div class="office-btn"><a class="individual_product_price" target="_self" data-params="true">See Boxes & Pricing</a></div>\
                                <p class="btn-subtext">Take the 60-second quiz to see your custom recommendations.</p>\
                            </div>\
                        </div>\
                    </div>\
                </div>\
                <div class="review-section for-remote">\
                    <div class="review-inner">\
                        <h2>What Our Happy Customers Have to Say</h2>\
                        <p>Over 500,000 employees can’t stop raving about SnackNation!</p>\
                        <div class="review-row container">\
                            <div class="slider-count">\
                                <div class="quote-img"><img src="'+pngimg+'quote.png" alt="Quote"></div>\
                                <div class="slide-count">\
                                    <div class="slick-prev arrow"><img src="'+pngimg+'slider-arrow.png" alt="Arrow"></div>\
                                    <div class="count"><span class="active">1</span> / <span class="total">5</span></div>\
                                    <div class="slick-next arrow"><img src="'+pngimg+'slider-arrow.png" alt="Arrow"></div>\
                                </div>\
                            </div>\
                            <div class="review-slider">\
                                <div class="review-col">\
                                    <div class="review-img">\
                                        <img src="'+pngimg+'Rebecca-Restrepo.png" alt="Rebecca Restrepo">\
                                    </div>\
                                    <div class="user-info user-mobile">\
                                        <div class="user-name">\
                                            <h4>Rebecca Restrepo</h4>\
                                            <p>Office Manager at ServiceNow</p>\
                                        </div>\
                                        <div class="user-logo">\
                                            <img src="'+pngimg+'Servicenow.png" alt="Servicenow">\
                                        </div>\
                                    </div>\
                                    <div class="review-text">\
                                        <p class="user-review">It’s like Christmas day when the SnackNation box arrives. I have to make people take a ‘time out’ while I get the new snacks into the display.</p>\
                                        <div class="user-info">\
                                            <div class="user-name">\
                                                <h4>Rebecca Restrepo</h4>\
                                                <p>Office Manager at ServiceNow</p>\
                                            </div>\
                                            <div class="user-logo">\
                                                <img src="'+pngimg+'Servicenow.png" alt="Servicenow">\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>\
                                <div class="review-col">\
                                    <div class="review-img">\
                                        <img src="'+pngimg+'Jessica-Sepulveda.png" alt="Jessica Sepulveda">\
                                    </div>\
                                    <div class="user-info user-mobile">\
                                        <div class="user-name">\
                                            <h4>Aaron Hakenson</h4>\
                                            <p>VP Global Online Sales at Lionbridge</p>\
                                        </div>\
                                        <div class="user-logo">\
                                            <img src="'+pngimg+'intuit.png" alt="intuit">\
                                        </div>\
                                    </div>\
                                    <div class="review-text">\
                                        <p class="user-review">Bellies full of healthy snacks=Happy Staff. Happy Staff = Awesome workplace, simple really.</p>\
                                        <div class="user-info">\
                                            <div class="user-name">\
                                                <h4>Jessica Sepulveda</h4>\
                                                <p>Senior Executive Assistant at Intuit</p>\
                                            </div>\
                                            <div class="user-logo">\
                                                <img src="'+pngimg+'intuit.png" alt="intuit">\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>\
                                <div class="review-col">\
                                    <div class="review-img">\
                                        <img src="'+pngimg+'Deja-Amato.png" alt="Deja Amato">\
                                    </div>\
                                    <div class="user-info user-mobile">\
                                        <div class="user-name">\
                                            <h4>Deja Amato</h4>\
                                            <p>Operations Manager at LISNR</p>\
                                        </div>\
                                        <div class="user-logo">\
                                            <img src="'+pngimg+'lisnr.png" alt="lisnr">\
                                        </div>\
                                    </div>\
                                    <div class="review-text">\
                                        <p class="user-review">SnackNation provides a healthy snacking alternative alongside a unique customer experience. Two Thumbs Up!</p>\
                                        <div class="user-info">\
                                            <div class="user-name">\
                                                <h4>Deja Amato</h4>\
                                                <p>Operations Manager at LISNR</p>\
                                            </div>\
                                            <div class="user-logo">\
                                                <img src="'+pngimg+'lisnr.png" alt="lisnr">\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>\
                                <div class="review-col">\
                                    <div class="review-img">\
                                        <img src="'+pngimg+'Mika-Smith.png" alt="Mika Smith">\
                                    </div>\
                                    <div class="user-info user-mobile">\
                                        <div class="user-name">\
                                            <h4>Mika Smith</h4>\
                                            <p>Office Manager at Collab</p>\
                                        </div>\
                                        <div class="user-logo">\
                                            <img src="'+pngimg+'collab.png" alt="Collab">\
                                        </div>\
                                    </div>\
                                    <div class="review-text">\
                                        <p class="user-review">Friendly, quick service. And the snacks are the best combination of delicious and healthy!</p>\
                                        <div class="user-info">\
                                            <div class="user-name">\
                                                <h4>Mika Smith</h4>\
                                                <p>Office Manager at Collab</p>\
                                            </div>\
                                            <div class="user-logo collab-logo">\
                                                <img src="'+pngimg+'collab.png" alt="Collab">\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>\
                                <div class="review-col last-review-col">\
                                    <div class="review-img">\
                                        <img src="'+pngimg+'Lindsay-Feenstra.png" alt="Lindsay Feenstra">\
                                    </div>\
                                    <div class="user-info user-mobile">\
                                        <div class="user-name">\
                                            <h4>Lindsay Feenstra</h4>\
                                            <p>Administrative Assistant at Global Reach Internet Products</p>\
                                        </div>\
                                        <div class="user-logo">\
                                            <img src="'+pngimg+'kwantera.png" alt="Kwantera">\
                                        </div>\
                                    </div>\
                                    <div class="review-text">\
                                        <p class="user-review">Our employees were excited that we introduced free snacks to the office. Even more so when they realized that the snacks are healthy!</p>\
                                        <div class="user-info">\
                                            <div class="user-name">\
                                                <h4>Lindsay Feenstra</h4>\
                                                <p>Administrative Assistant at Global Reach Internet Products</p>\
                                            </div>\
                                            <div class="user-logo">\
                                                <img src="'+pngimg+'kwantera.png" alt="Kwantera">\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>\
                    </div>\
                </div>\
                <div class="counter-section for-office for-remote active">\
                    <div class="counter-inner">\
                        <div class="counter-row">\
                            <img src="'+pngimg+'feeding.webp" alt="Feeding America">\
                            <h4>SnackNation donates meals to families in need for every box delivered.</h4>\
                            <h2>17,643,237</h2>\
                            <h3>Meals Donated</h3>\
                            <p>*$1 helps provide at least 10 meals secured by Feeding America on behalf of local member food banks.</p>\
                        </div>\
                    </div>\
                </div>\
                <div class="product-box for-office for-remote active">\
                    <div class="product-box-inner">\
                        <div class="box-row">\
                            <div class="box-col box-col-1">\
                                <h2>Remote Employees</h2>\
                                <div class="product-box-img"><img src="'+pngimg+'remote-employees.png" alt="Remote Employees"></div>\
                                <div class="product-box-price"><p>From <span>$25</span></p></div>\
                                <div class="product-box-btn"><a class="box_price_popup_cta_remote_employees" target="_self" data-params="true">See Boxes & Pricing</a><p>Take the 60-second quiz</p></div>\
                                <p class="box-text">Keep remote teams connected no matter the distance.</p>\
                            </div>\
                            <div class="box-col box-col-2">\
                                <h2>In-Office Snacks</h2>\
                                <div class="product-box-img"><img src="'+pngimg+'in-office-snacks-new.png" alt="In-Office Snacks"></div>\
                                <div class="product-box-price"><p>From <span>$200</span></p></div>\
                                <div class="product-box-btn"><a class="box_price_popup_cta_office_employee" target="_self" data-params="true">See Boxes & Pricing</a><p>Take the 60-second quiz</p></div>\
                                <p class="box-text">Easy-to-manage shipments delivered right to your office.</p>\
                            </div>\
                            <div class="box-col box-col-3">\
                                <h2>Shop for Home</h2>\
                                <div class="product-box-img"><img src="'+pngimg+'shop-for-home.png" alt="Shop for Home"></div>\
                                <div class="product-box-price"><p>From <span>$30</span></p></div>\
                                <div class="product-box-btn"><a class="box_price_popup_cta_individiul_or_family" target="_self" data-params="true">Shop for Home</a><p>Free Shipping</p></div>\
                                <p class="box-text">Treat yourself or send a delicious gift to someone special.</p>\
                            </div>\
                        </div>\
                    </div>\
                </div>\
                ').insertBefore('.snacknation_home #footer-outer');

                // Start URL update code
                var box_pricing = 'https://snacknations.typeform.com/to/R6qO3gCQ?Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic&Variant=Control SnackNation Homepage Dual Intent 21-16-09';
                var new_individual_product_price = 'https://snacknations.typeform.com/to/lakEjm?Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic&Variant=Control SnackNation Homepage Dual Intent 21-16-09';
                $('.box_price').attr('href', box_pricing);
                $('.box_product_price').attr('href', box_pricing);
                $('.individual_product_price').attr('href', new_individual_product_price);
                $('.box_price_popup_cta_remote_employees').attr('href', 'https://snacknations.typeform.com/to/lakEjm?Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic&Variant=Control SnackNation Homepage Dual Intent 21-16-09');
                $('.box_price_popup_cta_office_employee').attr('href', 'https://snacknations.typeform.com/to/R6qO3gCQ?Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic&Variant=Control SnackNation Homepage Dual Intent 21-16-09');
                $('.box_price_popup_cta_individiul_or_family').attr('href', 'https://manage.caroo.com/order?utm_source=SN%20Home%20Page&utm_campaign=Friends%20and%20Family%20Pop%20Up&Variant=Control SnackNation Homepage Dual Intent 21-16-09');

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
                var control = encodeURI('Control SnackNation Homepage Dual Intent 21-16-09');
                // console.log("Query_string", Query_string);

                if(Query_string.length == 1){
                    // console.log('length 111111111111');
                }else{
                    var new_url =  "https://snacknations.typeform.com/to/R6qO3gCQ"+url+"&Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic&Variant="+(control);
                    var new_box_product_price =  "https://snacknations.typeform.com/to/R6qO3gCQ"+url+"&Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic&Variant="+(control);
                    var new_individual_product_price = "https://snacknations.typeform.com/to/lakEjm"+url+"&Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic&Variant="+(control);
                    var new_url_remote_employees = "https://snacknations.typeform.com/to/lakEjm"+url+"&Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic&Variant="+(control);
                    var new_url_office_employees = "https://snacknations.typeform.com/to/R6qO3gCQ"+url+"&Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic&Variant="+(control);
                    var new_url_individiul_or_family = "https://manage.caroo.com/order"+url+"&utm_source=SN%20Home%20Page&utm_campaign=Friends%20and%20Family%20Pop%20Up&Variant="+(control);

                    setTimeout( function(){
                        // console.log("new_url", new_url);
                        jQuery("a.box_price").attr('href', new_url);
                        jQuery("a.box_product_price").attr('href', new_box_product_price);
                        jQuery("a.individual_product_price").attr('href', new_individual_product_price);
                        jQuery("a.box_price_popup_cta_remote_employees").attr('href', new_url_remote_employees);            
                        jQuery("a.box_price_popup_cta_office_employee").attr('href', new_url_office_employees);            
                        jQuery("a.box_price_popup_cta_individiul_or_family").attr('href', new_url_individiul_or_family);            

                    }, 2000);
                }
                //  End URl section code

                var popupadd = setInterval(function(){
                if($('.snacknation_home .ub-emb-container .popup-added').length == 0){
                    $('.snacknation_home .ub-emb-container .ub-emb-overlay .ub-emb-iframe-wrapper').each(function() {
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
                                        <a class="lp-element lp-pom-button box_price_popup_cta_remote_employees" id="lp-pom-button-95" href="https://snacknations.typeform.com/to/lakEjm?Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic&Variant=Control SnackNation Homepage Dual Intent 21-16-09" target="_self" data-params="true">\
                                            <span class="label"><strong>Get Started</strong></span>\
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
                                        <a class="lp-element lp-pom-button box_price_popup_cta_office_employee" id="lp-pom-button-102" href="https://snacknations.typeform.com/to/R6qO3gCQ?Platform=Website&Campaign=WFH%20Homepage%20Quiz%20Organic&Variant=Control SnackNation Homepage Dual Intent 21-16-09" target="_self" data-params="true">\
                                            <span class="label"><strong>Get Started</strong></span>\
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
                                        <a class="lp-element lp-pom-button box_price_popup_cta_individiul_or_family" id="lp-pom-button-107" href="https://manage.caroo.com/order?utm_source=SN%20Home%20Page&utm_campaign=Friends%20and%20Family%20Pop%20Up&Variant=Control SnackNation Homepage Dual Intent 21-16-09" target="_self" data-params="true">\
                                            <span class="label"><strong>Get Started</strong></span>\
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
            },800);
        });
         jQuery('#ajax-content-wrap div#footer-outer div#footer-widgets,div#copyright .col.span_7.col_last').addClass('for-remote for-office');
        // jQuery('a#lp-pom-button-95').attr('src',"//snacknations.typeform.com/to/lakEjm?Platform=Website&Campaign=WFH%20Website%20Menu%20Organic");
        // jQuery('a#lp-pom-button-102').attr('src',"//snacknations.typeform.com/to/R6qO3gCQ?Platform=Website&Campaign=TMS%20Website%20Menu%20Shipped%20Organic");
        // jQuery('a#lp-pom-button-107').attr('src',"//shop.snacknation.com/?utm_source=WFH%20Website%20Menu%20Organic&utm_medium=Myself%20Or%20Family%20CTA&utm_campaign=SN%20WFH%20Website%20Menu");
        jQuery(window).scroll(function(){
            jQuery(".client-inner .client-col .desktop-img").scrollLeft(jQuery(window).scrollTop());
        });
        setTimeout(function () {
            jQuery('html').addClass('load');
        },1000);

        getScript1("//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js", function() {
          setTimeout(function(){
            jQuery('.review-section.for-office .review-slider').slick({
              dots: false,
              infinite: true,
              speed: 200,
              slidesToShow: 1,
              slidesToScroll: 1,
              autoplay: false,
              autoplaySpeed: 2000,
              prevArrow: jQuery('.slick-prev.arrow'),
              nextArrow: jQuery('.slick-next.arrow'),
              fade: true
            }).on({
              beforeChange: function(event, slick, currentSlide, nextSlide) {
              jQuery('body').removeClass('slide' + (currentSlide + 1) + '-current').addClass('slide' + (nextSlide + 1) + '-current');
              jQuery('.review-section.for-office .review-inner .slide-count span.active').text(nextSlide + 1);
            }});
            jQuery('.review-section.for-office .review-inner .slide-count span.total').text($(".review-section.for-office .review-slider").slick("getSlick").slideCount);

             jQuery('.review-section.for-remote .review-slider').slick({
              dots: false,
              infinite: true,
              speed: 200,
              slidesToShow: 1,
              slidesToScroll: 1,
              autoplay: false,
              autoplaySpeed: 2000,
              prevArrow: jQuery('.review-section.for-remote .slick-prev.arrow'),
              nextArrow: jQuery('.review-section.for-remote .slick-next.arrow'),
              fade: true
            }).on({
              beforeChange: function(event, slick, currentSlide, nextSlide) {
              jQuery('body').removeClass('slide' + (currentSlide + 1) + '-current').addClass('slide' + (nextSlide + 1) + '-current');
              jQuery('.review-section.for-remote .review-inner .slide-count span.active').text(nextSlide + 1);
            }});
            jQuery('.review-section.for-remote .review-inner .slide-count span.total').text($(".review-section.for-remote .review-slider").slick("getSlick").slideCount);
        },800);
        });
        // section Show Hide
        jQuery(document).on('click','.snacknation_home .hero-section .hero-btn .hero-btn-a',function(){
            var showingclass = jQuery(this).attr('data-class');
            jQuery('.blurred-wrap,#footer-outer').addClass('opened');
            jQuery('.snacknation_home .hero-section .hero-btn .hero-btn-a').removeClass("active");
            jQuery(this).addClass("active");
            if(showingclass == "for-office"){
                jQuery(".for-remote").removeClass('active');
                jQuery("."+showingclass).addClass('active');
            }else if(showingclass == "for-remote"){
                jQuery(".for-office").removeClass('active');
                jQuery("."+showingclass).addClass('active');
            }
            jQuery('.review-section.for-office .review-slider').slick("refresh");
            jQuery('.review-section.for-remote .review-slider').slick("refresh");
            // jQuery('.review-section.for-remote .review-slider').slick("resize");
            // jQuery('.review-section.for-office .review-slider').slick("resize");
//
            var scrollsection = jQuery('.client-section').offset().top + jQuery('.client-section').height() - 20;
            jQuery('html, body').animate({
                scrollTop: scrollsection
            }, 800);
        });
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