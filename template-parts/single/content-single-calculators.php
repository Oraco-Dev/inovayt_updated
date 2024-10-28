<?php

$page_id = get_the_ID();

// post fields
$post_title = get_the_title();
$featured_image_url = get_the_post_thumbnail_url($post_id, 'full'); // 'full' specifies the image size, change as needed

// custom fields
$banner_description = get_field('banner_description', $page_id);
$calculator_shortcode = get_field('calculator_shortcode', $page_id);
$accordion_title_one = get_field('accordiontitle1', $page_id);

// bottom banner
$bottom_banner_image = get_field('bottom_banner_-_image', $page_id);
$bottom_banner_form_title = get_field('bottom_banner_-_form_title', $page_id);
$bottom_banner_form_shortcode = get_field('bottom_banner_-_form_shortcode', $page_id);
$bottom_banner_title = get_field('bottom_banner_-_banner_title', $page_id);

// who choose inovayt
$why_choose_title_one = get_field('why_choose_title_one', $page_id);
$why_choose_description_one = get_field('why_choose_description_one', $page_id);
$why_choose_image_one = get_field('why_choose_image_one', $page_id);
$why_choose_title_two = get_field('why_choose_title_two', $page_id);
$why_choose_description_two = get_field('why_choose_description_two', $page_id);
$why_choose_image_two = get_field('why_choose_image_two', $page_id);
$why_choose_title_three = get_field('why_choose_title_three', $page_id);
$why_choose_description_three = get_field('why_choose_description_three', $page_id);
$why_choose_image_three = get_field('why_choose_image_three', $page_id);

?>

<div class="single-calculator-banner">
    <div class="single-calculator-banner__overlay"></div>
    <img class="single-calculator-banner__background" src="<?php echo $featured_image_url ?>"
        alt="Calculator Background Image" />

    <section class="responsive-container">
        <div class="single-calculator-banner__content">
            <h1><?php echo $post_title ?></h1>
            <h3><?php echo $banner_description ?></h3>
        </div>
    </section>
</div>

<div class="responsive-container">
    <div class="single-calculator-script">
        <?php echo $calculator_shortcode ?>
    </div>
</div>

<?php if($accordion_title_one): ?>
<div class="responsive-container">
    <div class="single-calculator-faq">
        <h2 style="margin-bottom: 0px;">Frequently Asked Questions</h2>
        <?php get_template_part('template-parts/elements/accordions/accordion-style-one', null, array('post_id' => $page_id, 'headColour' => 'white')); ?>
    </div>
</div>
<?php endif; ?>

<?php get_template_part('template-parts/elements/call-to-actions/work-with-carousel', null, array('left_content' => 'Our team of expert brokers are with you through every step of the way on your home buying journey. Not only do we help you find the right loan, we also stay with you right up until after settlement, helping you navigate stamp duty and other home buying fees.', 'left_button' => 'View All Mortgage Brokers', 'left_button_link' => '/inovayt-team/#finance-team')); ?>

<div class="single-calculator-meta">
    <div class="responsive-container">
        <p class="single-calculator-meta__description" style="margin-bottom: 0px;">At Inovayt, our mission is to provide
            lifetime financial
            solutions by thoroughly understanding your individual needs and goals. As such, we believe every client
            deserves our award-winning customer service. Our friendly team prioritises client satisfaction above all
            else, going above and beyond to help you achieve your financial goals. Regardless of what stage of the
            finance journey you’re on, our team provide quality advice to help you make informed and empowered financial
            decisions.
            <br />
            <br />
            Our customer service extends far beyond your initial meeting, as we believe in nurturing you beyond the
            first transaction. Our brokers work hand in hand with you to ensure you receive the best possible outcome
            and are available to chat face to face, online, or via the phone at a time that suits you.
            <br />
            <br />
            Our focus is always on achieving the <a href="https://www.productreview.com.au/listings/inovayt-finance"
                target="_blank">best possible outcomes</a> for our clients. Finding the right finance to
            match your goals and objectives is no easy task, so our friendly team work tirelessly to tailor a solution
            for you. We are solutions-driven, so we work hard to tackle any hurdles that may arise to ensure client
            satisfaction.
        </p>
    </div>
</div>

<?php get_template_part('template-parts/elements/call-to-actions/why-choose-inovayt', null, array('why_choose_title_one' => $why_choose_title_one, 'why_choose_description_one' => $why_choose_description_one, 'why_choose_image_one' => $why_choose_image_one, 'why_choose_title_two' => $why_choose_title_two, 'why_choose_description_two' => $why_choose_description_two, 'why_choose_image_two' => $why_choose_image_two, 'why_choose_title_three' => $why_choose_title_three, 'why_choose_description_three' => $why_choose_description_three, 'why_choose_image_three' => $why_choose_image_three, 'why_choose_title_four' => $why_choose_title_four, 'why_choose_description_four' => $why_choose_description_four, 'why_choose_image_four' => $why_choose_image_four)); ?>

<?php get_template_part('template-parts/elements/bottom-form-banner', null, array('image' => $bottom_banner_image, 'form_shortcode' => $bottom_banner_form_shortcode, 'form_title' => $bottom_banner_form_title, 'banner_header' => $bottom_banner_title, 'phone' => $phone, 'email' => $email)); ?>