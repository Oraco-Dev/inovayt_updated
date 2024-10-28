<?php

$page_id = get_the_ID();

// post fields
$featured_image_url = get_the_post_thumbnail_url($post_id, 'full'); // 'full' specifies the image size, change as needed

// action section
$action_title = get_field('action_title', $page_id);
$action_button_title = get_field('action_button_title', $page_id);
$action_button_link = get_field('action_button_link', $page_id);

// action boxes
$action_image_one = get_field('action_image_one', $page_id);
$action_title_one = get_field('action_title_one', $page_id);
$action_description_one = get_field('action_description_one', $page_id);
$action_image_two = get_field('action_image_two', $page_id);
$action_title_two = get_field('action_title_two', $page_id);
$action_description_two = get_field('action_description_two', $page_id);
$action_image_three = get_field('action_image_three', $page_id);
$action_title_three = get_field('action_title_three', $page_id);
$action_description_three = get_field('action_description_three', $page_id);
$action_image_four = get_field('action_image_four', $page_id);
$action_title_four = get_field('action_title_four', $page_id);
$action_description_four = get_field('action_description_four', $page_id);

// alternate box
$alternate_box_image_one = get_field('alternating_box_image_-_one', $page_id);
$alternate_box_title_one = get_field('alternating_box_title_-_one', $page_id);
$alternate_box_content_one = get_field('alternating_box_content_-_one', $page_id);
$alternate_box_button_text_one = get_field('alternating_box_button_text_-_one', $page_id);
$alternate_box_button_link_one = get_field('alternating_box_button_link_-_one', $page_id);

// bottom banner
$bottom_banner_image = get_field('bottom_banner_-_image', $page_id);
$bottom_banner_form_title = get_field('bottom_banner_-_form_title', $page_id);
$bottom_banner_form_shortcode = get_field('bottom_banner_-_form_shortcode', $page_id);
$bottom_banner_title = get_field('bottom_banner_-_banner_title', $page_id);

?>

<section class="private-banking-banner">
    <img class="private-banking-banner__background"
        src="https://www.inovayt.com.au/wp-content/uploads/2024/09/AdobeStock_602283024.jpeg"
        alt="Private Banking Background Image" />

    <div class="private-banking-banner__overlay"></div>

    <section class="responsive-container">
        <div class="private-banking-banner__content">
            <div class="private-banking-banner__content-title">
                <h1 style="margin-bottom: 0px;">Private Banking</h1>
                <h3 style="margin-bottom:0px;">Tailored finance and wealth management solutions for current and emerging
                    high-net-worth clients.</h3>
                <a class="talk-to-an-expert-btn"><button>Talk to an expert</button></a>
            </div>
        </div>
    </section>
</section>

<section class="responsive-container">
    <div class="private-banking-introduction">
        <div class="private-banking-introduction__left">
            <h2 style="margin-bottom: 0px;">Experience more with a tailored and holistic private banking solution</h2>
        </div>
        <div class="private-banking-introduction__right">
            <p style="margin-bottom:0px;">At Inovayt, we offer a different approach. Our private banking service ensures
                that you receive
                unwavering, expert advice and tailored strategies from a dedicated team committed to advancing your
                financial position and shaping a prosperous future.
                <br />
                <br />
                We believe in the holistic advantage of developing a personalised strategy, granting you access to a
                extensive range of Australia’s top lenders and products, all meticulously aligned with your financial
                aspirations.
                <br />
                <br />
                Our clients frequently mention that their experience with private banking can involve bankers who start
                off providing exceptional service, only to later move on to different roles or institutions.
            </p>
        </div>

    </div>
</section>

<section class="responsive-container">
    <div class="alternate-box-right private-banking desktop-only" style="background-color: white;">
        <div class="alternate-box-right__left" style="background-color: white;">
            <h2>Access competetive rates from 40+ leading lenders</h2>
            <p>We leverage our relationships with Australia’s highest performing lenders to secure the best rates for
                our clients. Let us find the most suitable financial products for your business and personal needs.</p>
            <a class="talk-to-an-expert-btn"><button>Talk to an expert</button></a>
        </div>
        <div class="alternate-box-right__right private-banking">
            <div class="alternate-box-right__right-top">
                <!-- <div id="nextButtonWorkOne">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/chevron.png" alt="">
                </div>
                <div id="prevButtonWorkOne">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/left-chevron.png" alt="">
                </div> -->
                <div class="splide"
                    data-splide='{"type":"loop", "arrows":false, "pagination":false, "gap": "20px", "padding": "20px", "drag": false, "snap": true, "autoplay": true, "interval": 7000, "pauseOnHover": false, "perPage": 3 }'>
                    <div class="splide__track">
                        <div class="splide__list">
                            <div class="splide__slide">
                                <img
                                    src="https://www.inovayt.com.au/wp-content/uploads/2024/05/ING_PRIMARY-LOGO_COLOUR_RGB-min.jpg" />
                            </div>
                            <div class="splide__slide">
                                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/05/HSBC-min.png" />
                            </div>
                            <div class="splide__slide">
                                <img
                                    src="https://www.inovayt.com.au/wp-content/uploads/2024/05/CBA-Alpha-1.0-Primary-Wordmark-RGB@3x-min.jpg" />
                            </div>
                            <div class="splide__slide">
                                <img
                                    src="https://www.inovayt.com.au/wp-content/uploads/2024/05/ANZ_DIGITAL_Blue-min.png" />
                            </div>
                            <div class="splide__slide">
                                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/05/BOQ-2015-min.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alternate-box-right__right-bottom">
                <!-- <div id="nextButtonWorkTwo">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/chevron.png" alt="">
                </div>
                <div id="prevButtonWorkTwo">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/left-chevron.png" alt="">
                </div> -->
                <div class="splide"
                    data-splide='{"type":"loop", "arrows":false, "pagination":false, "gap": "20px", "padding": "20px", "drag": false, "snap": true, "autoplay": true, "interval": 7000, "pauseOnHover": false, "perPage": 3 }'>
                    <div class="splide__track">
                        <div class="splide__list">
                            <div class="splide__slide">
                                <img
                                    src="https://www.inovayt.com.au/wp-content/uploads/2024/05/NAB_Logo_RGB-min-scaled-1.jpg" />
                            </div>
                            <div class="splide__slide">
                                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/05/suncorp-logo-1.png" />
                            </div>
                            <div class="splide__slide">
                                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/05/pm-logo-1.png" />
                            </div>
                            <div class="splide__slide">
                                <img
                                    src="https://www.inovayt.com.au/wp-content/uploads/2024/05/St-George-2015-min.jpg" />
                            </div>
                            <div class="splide__slide">
                                <img
                                    src="https://www.inovayt.com.au/wp-content/uploads/2024/05/Bank-of-Melbourne-horizontal-stacked-2015-min.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MOBILE -->

    <div class="alternate-box-right private-banking mobile-only" style="background-color: white;">
        <div class="alternate-box-right__left" style="background-color: white;">
            <div class="alternate-box-right__left-content">
                <h2>Access competetive rates from 40+ leading lenders</h2>
                <p>We leverage our relationships with Australia’s highest performing lenders to secure the best rates
                    for
                    our clients. Let us find the most suitable financial products for your business and personal needs.
                </p>
                <a class="talk-to-an-expert-btn"><button>Talk to an expert</button></a>
            </div>
        </div>
        <div class="alternate-box-right__right private-banking">
            <div class="alternate-box-right__right-top">
                <!-- <div id="nextButtonWorkOne">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/chevron.png" alt="">
                </div>
                <div id="prevButtonWorkOne">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/left-chevron.png" alt="">
                </div> -->
                <div class="splide"
                    data-splide='{"type":"loop", "arrows":false, "pagination":false, "gap": "20px", "padding": "20px", "drag": false, "snap": true, "autoplay": true, "interval": 7000, "pauseOnHover": false, "perPage": 1 }'>
                    <div class="splide__track">
                        <div class="splide__list">
                            <div class="splide__slide">
                                <img
                                    src="https://www.inovayt.com.au/wp-content/uploads/2024/05/ING_PRIMARY-LOGO_COLOUR_RGB-min.jpg" />
                            </div>
                            <div class="splide__slide">
                                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/05/HSBC-min.png" />
                            </div>
                            <div class="splide__slide">
                                <img
                                    src="https://www.inovayt.com.au/wp-content/uploads/2024/05/CBA-Alpha-1.0-Primary-Wordmark-RGB@3x-min.jpg" />
                            </div>
                            <div class="splide__slide">
                                <img
                                    src="https://www.inovayt.com.au/wp-content/uploads/2024/05/ANZ_DIGITAL_Blue-min.png" />
                            </div>
                            <div class="splide__slide">
                                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/05/BOQ-2015-min.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alternate-box-right__right-bottom">
                <!-- <div id="nextButtonWorkTwo">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/chevron.png" alt="">
                </div>
                <div id="prevButtonWorkTwo">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/left-chevron.png" alt="">
                </div> -->
                <div class="splide"
                    data-splide='{"type":"loop", "arrows":false, "pagination":false, "gap": "20px", "padding": "20px", "drag": false, "snap": true, "autoplay": true, "interval": 7000, "pauseOnHover": false, "perPage": 1 }'>
                    <div class="splide__track">
                        <div class="splide__list">
                            <div class="splide__slide">
                                <img
                                    src="https://www.inovayt.com.au/wp-content/uploads/2024/05/NAB_Logo_RGB-min-scaled-1.jpg" />
                            </div>
                            <div class="splide__slide">
                                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/05/suncorp-logo-1.png" />
                            </div>
                            <div class="splide__slide">
                                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/05/pm-logo-1.png" />
                            </div>
                            <div class="splide__slide">
                                <img
                                    src="https://www.inovayt.com.au/wp-content/uploads/2024/05/St-George-2015-min.jpg" />
                            </div>
                            <div class="splide__slide">
                                <img
                                    src="https://www.inovayt.com.au/wp-content/uploads/2024/05/Bank-of-Melbourne-horizontal-stacked-2015-min.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="responsive-container">
    <div class="private-banking-services">
        <h2 style="margin-bottom: 0px;">Unlock a holistic advantage with a full spectrum of tailored financial services
        </h2>
        <div class="private-banking-services__cards">
            <div class="private-banking-services__cards-card">
                <h3>Wealth Management</h3>
                <p style="margin-bottom: 0px">Partner with our team of in-house experts to effectively grow and manage
                    your wealth. We undertake comprehensive analysis of your financial circumstances to develop
                    customised strategies for superannuation, investments, insurance, and retirement planning.</p>
            </div>
            <div class="private-banking-services__cards-card">
                <h3>Finance</h3>
                <p style="margin-bottom: 0px">Our established relationships with lenders provide access to a broad
                    spectrum of loan products and competitive rates for both personal and commercial needs. We offer
                    comprehensive solutions, including home loans, asset finance, business loans, and more.</p>
            </div>
            <div class="private-banking-services__cards-card">
                <h3>Estate Planning</h3>
                <p style="margin-bottom: 0px">Estate planning involves crafting a comprehensive strategy to ensure that
                    your assets are transferred to your chosen beneficiaries in the most efficient and effective manner.
                    We ensure your wealth is managed and distributed according to your wishes, with careful
                    consideration of tax implications and legal requirements.</p>
            </div>
            <div class="private-banking-services__cards-card">
                <h3>Tax Services</h3>
                <p style="margin-bottom: 0px">Property transactions, whether buying, selling, or developing, naturally
                    trigger tax implications that require careful structuring. Our strong market presence enables us to
                    connect you with seasoned licensed professionals, ensuring you have access to the expertise needed
                    to successfully navigate these complexities.</p>
            </div>
        </div>
        <a class="talk-to-an-expert-btn"><button>Talk to an expert</button></a>
    </div>
</section>

<section class="responsive-container">
    <div class="private-banking-compare desktop-only">
        <h2 style="margin-bottom: 0px;">A dedicated partnership designed to ensure your long-term financial success.
        </h2>
        <div class="private-banking-compare__content">
            <div class="private-banking-compare__content-row one">
                <div class="private-banking-compare__content-row-left one">
                    <h3 style="margin-bottom: 0px;">Banks</h3>
                </div>
                <div class="private-banking-compare__content-row-middle one">
                    <h3 style="margin-bottom: 0px;">Vs</h3>
                </div>
                <div class="private-banking-compare__content-row-right one">
                    <h3 style="margin-bottom: 0px;">Private Banking with Inovayt</h3>
                </div>
            </div>
            <div class="private-banking-compare__content-row">
                <div class="private-banking-compare__content-row-left">
                    <p style="margin-bottom: 0px;">Products and solutions are aligned with one bank only</p>
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Group-252.svg" alt="Cross Icon">
                </div>
                <div class="private-banking-compare__content-row-middle">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Vector-19.svg" alt="Compare Icon" />
                </div>
                <div class="private-banking-compare__content-row-right">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Group-253.svg" alt="Tick Icon">
                    <p style="margin-bottom: 0px;">Access a network of highly regarded, independent financial
                        professionals</p>
                </div>
            </div>
            <div class="private-banking-compare__content-row">
                <div class="private-banking-compare__content-row-left">
                    <p style="margin-bottom: 0px;">Frequent turnover of staff</p>
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Group-252.svg" alt="Cross Icon">
                </div>
                <div class="private-banking-compare__content-row-middle">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Vector-19.svg" alt="Compare Icon" />
                </div>
                <div class="private-banking-compare__content-row-right">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Group-253.svg" alt="Tick Icon">
                    <p style="margin-bottom: 0px;">Maintain a dedicated, long-term relationship with our expert team</p>
                </div>
            </div>
            <div class="private-banking-compare__content-row">
                <div class="private-banking-compare__content-row-left">
                    <p style="margin-bottom: 0px;">Higher wealth thresholds to qualify</p>
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Group-252.svg" alt="Cross Icon">
                </div>
                <div class="private-banking-compare__content-row-middle">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Vector-19.svg" alt="Compare Icon" />
                </div>
                <div class="private-banking-compare__content-row-right">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Group-253.svg" alt="Tick Icon">
                    <p style="margin-bottom: 0px;">Gain unparalleled expertise, extensive choice, and a distinct
                        competitive advantage</p>
                </div>
            </div>
            <div class="private-banking-compare__content-row">
                <div class="private-banking-compare__content-row-left">
                    <p style="margin-bottom: 0px;">Bankers work in the bank's best interests</p>
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Group-252.svg" alt="Cross Icon">
                </div>
                <div class="private-banking-compare__content-row-middle">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Vector-19.svg" alt="Compare Icon" />
                </div>
                <div class="private-banking-compare__content-row-right">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Group-253.svg" alt="Tick Icon">
                    <p style="margin-bottom: 0px;">Benefit from a commitment to act in your best interests, underpinned
                        by rigorous legislative standards</p>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile -->
    <div class="private-banking-compare mobile-only">
        <h2 style="margin-bottom: 0px;">A dedicated partnership designed to ensure your long-term financial success.
        </h2>
        <div class="private-banking-compare__content">
            <div class="private-banking-compare__content-row one">
                <div class="private-banking-compare__content-row-right one">
                    <h3 style="margin-bottom: 0px;">Private Banking with Inovayt</h3>
                </div>
            </div>
            <div class="private-banking-compare__content-row">
                <div class="private-banking-compare__content-row-right">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Group-253.svg" alt="Tick Icon">
                    <p style="margin-bottom: 0px;">Access a network of highly regarded, independent financial
                        professionals</p>
                </div>
            </div>
            <div class="private-banking-compare__content-row">
                <div class="private-banking-compare__content-row-right">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Group-253.svg" alt="Tick Icon">
                    <p style="margin-bottom: 0px;">Maintain a dedicated, long-term relationship with our expert team</p>
                </div>
            </div>
            <div class="private-banking-compare__content-row">
                <div class="private-banking-compare__content-row-right">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Group-253.svg" alt="Tick Icon">
                    <p style="margin-bottom: 0px;">Gain unparalleled expertise, extensive choice, and a distinct
                        competitive advantage</p>
                </div>
            </div>
            <div class="private-banking-compare__content-row">
                <div class="private-banking-compare__content-row-right">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Group-253.svg" alt="Tick Icon">
                    <p style="margin-bottom: 0px;">Benefit from a commitment to act in your best interests, underpinned
                        by rigorous legislative standards</p>
                </div>
            </div>
            <div class="private-banking-compare__content-row one">
                <div class="private-banking-compare__content-row-left one">
                    <h3 style="margin-bottom: 0px;">vs Banks</h3>
                </div>
            </div>
            <div class="private-banking-compare__content-row">
                <div class="private-banking-compare__content-row-left">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Group-252.svg" alt="Cross Icon">
                    <p style="margin-bottom: 0px;">Products and solutions are aligned with one bank only</p>
                </div>
            </div>
            <div class="private-banking-compare__content-row">
                <div class="private-banking-compare__content-row-left">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Group-252.svg" alt="Cross Icon">
                    <p style="margin-bottom: 0px;">Frequent turnover of staff</p>
                </div>
            </div>
            <div class="private-banking-compare__content-row">
                <div class="private-banking-compare__content-row-left">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Group-252.svg" alt="Cross Icon">
                    <p style="margin-bottom: 0px;">Higher wealth thresholds to qualify</p>
                </div>
            </div>
            <div class="private-banking-compare__content-row">
                <div class="private-banking-compare__content-row-left">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/Group-252.svg" alt="Cross Icon">
                    <p style="margin-bottom: 0px;">Bankers work in the bank's best interests</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="front-page-awards">
    <div class="responsive-container">
        <header>
            <h2 style="margin-bottom: 0px;">Over 15 years of <span>award-winning</span> experience and satisfied
                customers</h2>
        </header>
        <div class="front-page-awards__container">
            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/ABA_2024-Winner_Independent-Office-of-the-Year-.png"
                alt="Award Icon">
            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/ABA_2024-Finalist_Diversified-Brokerage-of-the-Year-.png"
                alt="Award Icon">
            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/ABA_2024-Finalist_Independent-Office-of-the-Year-1.png"
                alt="Award Icon">
            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/02/Untitled-design-1.png" alt="Award Icon">
            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/04/MBA24_Seals_Finalists_Innovator-of-the-Year-Brokerage-1.png"
                alt="Award Icon">
            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/01/BBA2024_Finalist_Best-Large-Non-Franchise-Office-1-1.png"
                alt="Award Icon">
            <img src="https://www.inovayt.com.au/wp-content/uploads/2022/12/finalist-min.png" alt="Award Icon">
            <img src="https://www.inovayt.com.au/wp-content/uploads/2020/11/finalist-seal_VIC_Wellness-Advocate-of-the-Year-1-min.png"
                alt="Award Icon">
            <img src="https://www.inovayt.com.au/wp-content/uploads/2023/06/ABA_2023-Finalist_Major-Independent-Brokerage-of-the-Year.png"
                alt="Award Icon">

        </div>
        <div class="front-page-reviews__container">
            <?php echo do_shortcode('[trustindex data-widget-id=f414bd1949df459cf05f74dedd]'); ?>
        </div>
    </div>
</section>

<section class="responsive-container">
    <div class="alternate-box-left private-banking">
        <div class="alternate-box-left__left">
            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/AdobeStock_642599361.jpeg"
                alt="Private Banking - FAQ" />
        </div>
        <div class="alternate-box-left__right private-banking">
            <h2>Frequently asked questions</h2>
            <?php get_template_part('template-parts/elements/accordions/accordion-style-one', null, array('post_id' => $page_id, 'headColour' => 'white')); ?>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/elements/bottom-form-banner', null, array('image' => $bottom_banner_image, 'form_shortcode' => $bottom_banner_form_shortcode, 'form_title' => $bottom_banner_form_title, 'banner_header' => $bottom_banner_title)); ?>

<style>
/* alternate box */

.alternate-box-left.private-banking {
    margin-top: 100px;
}

.alternate-box-left__right.private-banking {
    background-color: #f7f7f7;
    gap: 20px;
}

.alternate-box-left__right.private-banking img {
    height: 20px;
    width: 20px;
    position: static;

}

.alternate-box-right.private-banking.desktop-only {
    display: flex;
}

.alternate-box-right.private-banking.mobile-only {
    display: none;
}

@media screen and (max-width: 768px) {
    .alternate-box-right.private-banking.desktop-only {
        display: none;
    }

    .alternate-box-right.private-banking.mobile-only {
        display: flex;
        flex-direction: column;
    }

}


.alternate-box-right.private-banking {
    min-height: auto;
}

.alternate-box-right__right.private-banking {
    width: 50%;
    padding-right: 50px;
}

.alternate-box-left__right.private-banking .accordion__styleone-head {
    border-bottom: 3px solid var(--inoblue);
    padding: 24px;
}

@media screen and (max-width: 1024px) {
    .alternate-box-right__right.private-banking {
        width: 100%;
    }

    .alternate-box-right__right.private-banking .alternate-box-right__right-top .splide .splide__track .splide__list .splide__slide,
    .alternate-box-right__right.private-banking .alternate-box-right__right-bottom .splide .splide__track .splide__list .splide__slide {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .alternate-box-right__right-top img,
    .alternate-box-right__right-bottom img {
        position: relative;
        width: 100%;
        max-width: 300px;
        object-fit: contain;
    }
}

@media screen and (max-width: 768px) {

    .alternate-box-left.private-banking {
        margin-top: 40px;
        padding-bottom: 0px;
    }

    .alternate-box-left__right.private-banking {
        gap: 5px;
    }

    .alternate-box-left__right.private-banking h2 {
        padding-bottom: 15px;
    }

    .alternate-box-right__right-top img,
    .alternate-box-right__right-bottom img {
        position: relative;
        width: 100%;
        max-width: 250px;
        object-fit: contain;
    }
}

.alternate-box-right__right-top {
    display: flex;
    align-items: flex-end;
    justify-content: center;
    height: 50%;
    padding-bottom: 25px;
}

.alternate-box-right__right-bottom {
    display: flex;
    justify-content: center;
    height: 50%;
    padding-top: 25px;
}

.alternate-box-right__right-top img,
.alternate-box-right__right-bottom img {
    position: relative;
    width: 100%;
    object-fit: contain;
}

.private-banking-banner {
    position: relative;
    background-repeat: no-repeat;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: white;
    padding: 100px 50px;
    margin-top: 100px;
}

.private-banking-banner__background {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
    background-color: white;
}

.private-banking-banner__content {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    position: relative;
    height: 100%;
    color: white;
    z-index: 1000;
}

.private-banking-banner__content-title {
    display: flex;
    flex-direction: column;
    gap: 25px;
    max-width: 600px;
}

.private-banking-banner__content-title h1 {
    color: white;

}

.private-banking-banner__content-title h4 {
    width: 70%;
    color: white !important;
}

.private-banking-banner__content-title h3 {
    font-weight: 400;
    color: white;
}

.private-banking-banner__overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.4);
}

@media screen and (max-width: 768px) {
    .private-banking-banner {
        padding: 80px 0px;
    }

    .private-banking-banner h1 {
        font-size: 33px;
    }

    .private-banking-banner h3 {
        font-size: 18px;
        line-height: 24px;
        font-weight: 700;
        width: 80%;
    }

    .private-banking-banner__content-title {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 25px;
        max-width: 600px;
    }
}


.private-banking-introduction {
    display: flex;
    gap: 50px;
    margin-top: 100px;
    margin-bottom: 100px;
}

.private-banking-introduction__left {
    width: 40%;
}

.private-banking-introduction__right {
    width: 60%;
}

.private-banking-services {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 50px;

}

.private-banking-services h2 {
    max-width: 800px;
}

.private-banking-services__cards {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
}

.private-banking-services__cards-card {
    background-color: white;
    display: flex;
    flex-direction: column;
    text-align: center;
    padding: 50px;
}


.private-banking-services__cards-card h3 {
    color: var(--inoblue);
    margin-bottom: 10px;
}

@media screen and (max-width: 1024px) {
    .private-banking-introduction {
        flex-direction: column;
        gap: 20px;
    }

    .private-banking-introduction__left {
        width: 100%;
    }

    .private-banking-introduction__right {
        width: 100%;
    }

    .private-banking-services__cards {
        grid-template-columns: repeat(1, 1fr);
        gap: 25px;
    }
}

@media screen and (max-width: 768px) {
    .private-banking-introduction {
        margin-top: 40px;
        margin-bottom: 40px;
    }

    .private-banking-services {
        gap: 25px;
    }

    .private-banking-services__cards-card {
        padding: 25px;
    }

    .private-banking-services__cards-card h3 {
        margin-bottom: 10px;
    }
}

.private-banking-compare.mobile-only {
    display: none;
}

.private-banking-compare.desktop-only {
    display: flex;
}

.private-banking-compare {
    background-color: white;
    margin-top: 100px;
    margin-bottom: 100px;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 50px;
    gap: 50px;
}

.private-banking-compare h2 {
    max-width: 800px;
}

.private-banking-compare__content {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.private-banking-compare__content-row {
    display: flex;
    gap: 30px;
    border-bottom: 2px solid #F5F5F5;
    padding-bottom: 20px;
}

.private-banking-compare__content-row.one {
    display: flex;
    gap: 30px;
    border-bottom: none;
    padding-bottom: 0px;
}

.private-banking-compare__content-row-left {
    display: flex;
    align-items: flex-start;
    justify-content: flex-end;
    gap: 20px;
    text-align: right;
    width: 45%;
}

.private-banking-compare__content-row-left.one {
    padding: 20px;
    background-color: #F5F5F5;
}

.private-banking-compare__content-row-left img {
    width: 30px;
}

.private-banking-compare__content-row-middle {
    width: 10%;
}

.private-banking-compare__content-row-middle.one {
    padding: 20px;
}


.private-banking-compare__content-row-right {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 20px;
    text-align: left;
    width: 45%;
}

.private-banking-compare__content-row-right.one {
    padding: 20px;
    background-color: var(--inoblue);
}

.private-banking-compare__content-row-right.one h3 {
    color: white;
}

.private-banking-compare__content-row-right img {
    width: 30px;
}

@media screen and (max-width: 1024px) {}

@media screen and (max-width: 768px) {
    .private-banking-compare {
        padding: 25px;
        margin-top: 40px;
        margin-bottom: 40px;
    }

    .private-banking-compare.mobile-only {
        display: flex;
        gap: 25px;
    }

    .private-banking-compare.desktop-only {
        display: none;
    }

    .private-banking-compare__content-row-left,
    .private-banking-compare__content-row-right {
        width: 100%;
        justify-content: flex-start;
        text-align: left;
    }
}
</style>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    let splides = document.querySelectorAll('.splide');

    if (splides.length) {
        let splideInstances = [];

        // Function to get options with responsive breakpoints
        function getSplideOptions() {
            return {
                perPage: 3, // Default number of slides visible
                breakpoints: {
                    768: {
                        perPage: 2 // Number of slides visible on tablets
                    },
                    480: {
                        perPage: 1 // Number of slides visible on mobile
                    }
                }
            };
        }

        // Create instances of Splide and store them in an array
        for (let i = 0; i < splides.length; i++) {
            let splideElement = splides[i];
            let splideOptions = JSON.parse(splideElement.getAttribute('data-splide')) || getSplideOptions();
            let splide = new Splide(splideElement, splideOptions);
            splide.mount();
            splideInstances.push(splide);
        }

        // Define button elements
        let buttons = {
            prev: {
                one: document.getElementById('prevButtonWorkOne'),
                two: document.getElementById('prevButtonWorkTwo'),
            },
            next: {
                one: document.getElementById('nextButtonWorkOne'),
                two: document.getElementById('nextButtonWorkTwo'),
            }
        };

        // Bind click events to custom buttons for each Splide instance
        buttons.prev.one.addEventListener('click', function() {
            splideInstances[0].go('-1');
        });
        buttons.next.one.addEventListener('click', function() {
            splideInstances[0].go('+1');
        });

        buttons.prev.two.addEventListener('click', function() {
            splideInstances[1].go('-1');
        });
        buttons.next.two.addEventListener('click', function() {
            splideInstances[1].go('+1');
        });
    }
});
</script>