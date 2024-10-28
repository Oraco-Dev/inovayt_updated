<?php

$page_id = get_the_ID();

// post fields
$post_title = get_the_title();
$featured_image_url = get_the_post_thumbnail_url($post_id, 'full'); // 'full' specifies the image size, change as needed

// custom fields
// top banner
$banner_title = get_field('banner_title', $page_id);
$banner_list = get_field('banner_list', $page_id);
$blue_banner_title = get_field('blue_banner_title', $page_id);
$blue_banner_content = get_field('blue_banner_content', $page_id);
$form_title = get_field('form_title', $page_id);
$form_shortcode = get_field('form_shortcode', $page_id);

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


// bottom banner
$bottom_banner_image = get_field('bottom_banner_-_image', $page_id);
$bottom_banner_form_title = get_field('bottom_banner_-_form_title', $page_id);
$bottom_banner_form_shortcode = get_field('bottom_banner_-_form_shortcode', $page_id);
$bottom_banner_title = get_field('bottom_banner_-_banner_title', $page_id);

?>

<div class="guide-banner">
    <div class="responsive-container">
        <div class="guide-banner__inner">
            <div class="guide-banner__inner-left">
                <div class="guide-banner__inner-left-top">
                    <div class="guide-banner__inner-left-top-title">
                        <h3 style="margin-bottom: 0px;">FREE RESOURCE</h3>
                        <h1 style="margin-bottom: 0px;"><?php echo $banner_title ?></h1>
                    </div>
                    <!-- mobile only -->
                    <a href="#bottom-form" target="_blank"><button><?php echo $action_button_title ?></button></a>
                    <img src="<?php echo $featured_image_url ?>" alt="<?php echo $post_title?> - Downloadable Guide"
                        class="guide-banner__inner-left-img" />
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/06/Artboard-5-1.svg" alt="Arrow Icon"
                        class="guide-banner__inner-left-arrow" />
                    <!-- end mobile only -->
                    <div class="guide-banner__inner-left-top-content">
                        <h5 style="margin-bottom: 0px;">Here's what you'll discover:</h5>
                        <?php echo $banner_list ?>
                    </div>
                    <div class="guide-banner__inner-right tablet">
                        <img src="<?php echo $featured_image_url ?>" alt="<?php echo $post_title?> - Downloadable Guide"
                            class="guide-banner__inner-right-img" />
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/06/Artboard-5-1.svg"
                            alt="Arrow Icon" class="guide-banner__right-arrow" />
                        <div class="guide-banner__right-form">
                            <h3 style="margin-bottom: 0px;"><?php echo $form_title ?></h3>
                            <?php echo do_shortcode($form_shortcode) ?>
                        </div>
                    </div>
                </div>
                <div class="guide-banner__inner-left-bottom">
                    <h3 style="margin-bottom: 0px;"><?php echo $blue_banner_title ?>
                    </h3>
                    <p style="margin-bottom: 0px;"><?php echo $blue_banner_content ?></p>
                </div>
            </div>
            <!-- desktop only -->
            <div class="guide-banner__inner-right desktop">
                <img src="<?php echo $featured_image_url ?>" alt="<?php echo $post_title?> - Downloadable Guide"
                    id="guide-banner" class="guide-banner__inner-right-img" />
                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/06/Artboard-5-1.svg" alt="Arrow Icon"
                    class="guide-banner__right-arrow" />
                <div class="guide-banner__right-form">
                    <h3 style="margin-bottom: 0px;"><?php echo $form_title ?></h3>
                    <?php echo do_shortcode($form_shortcode) ?>
                </div>
            </div>
            <!-- desktop only -->
        </div>
    </div>
</div>

<?php get_template_part('template-parts/elements/call-to-actions/icon-columns', null, array('action_title' => $action_title, 'action_button_title' => $action_button_title, 'action_button_link' => "#guide-banner", 'action_button_class' => '','action_title_one' => $action_title_one, 'action_description_one' => $action_description_one, 'action_image_one' => $action_image_one, 'action_title_two' => $action_title_two, 'action_description_two' => $action_description_two, 'action_image_two' => $action_image_two, 'action_title_three' => $action_title_three, 'action_description_three' => $action_description_three, 'action_image_three' => $action_image_three, 'action_title_four' => $action_title_four, 'action_description_four' => $action_description_four, 'action_image_four' => $action_image_four)); ?>

<div class="single-guide__accordions">
    <div class="responsive-container">
        <div class="single-guide__accordions-inner">
            <h2><?php echo $action_title ?></h2>
            <!-- accordion one -->
            <div>
                <div class="accordion__styletwo">
                    <div class="accordion__styletwo-head">
                        <div class="accordion__styletwo-head-left">
                            <img src="<?php echo $action_image_one?>" />
                            <h4 style="margin-bottom: 0px;">
                                <?php echo $action_title_one; ?>
                            </h4>
                        </div>
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-plus-24.png"
                            class="accordion__styletwo-head-img-open">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-minus-24.png"
                            class="accordion__styletwo-head-img-close">
                    </div>
                    <div class="accordion__styletwo-content">
                        <p style="margin-bottom: 0px;">
                            <?php echo $action_description_one; ?>
                        </p>
                    </div>
                </div>
                <!-- accordion two -->
                <div class="accordion__styletwo">
                    <div class="accordion__styletwo-head">
                        <div class="accordion__styletwo-head-left">
                            <img src="<?php echo $action_image_two?>" />
                            <h4 style="margin-bottom: 0px;">
                                <?php echo $action_title_two; ?>
                            </h4>
                        </div>
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-plus-24.png"
                            class="accordion__styletwo-head-img-open">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-minus-24.png"
                            class="accordion__styletwo-head-img-close">
                    </div>
                    <div class="accordion__styletwo-content">
                        <p style="margin-bottom: 0px;">
                            <?php echo $action_description_two; ?>
                        </p>
                    </div>
                </div>
                <!-- accordion three -->
                <div class="accordion__styletwo">
                    <div class="accordion__styletwo-head">
                        <div class="accordion__styletwo-head-left">
                            <img src="<?php echo $action_image_three?>" />
                            <h4 style="margin-bottom: 0px;">
                                <?php echo $action_title_three; ?>
                            </h4>
                        </div>
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-plus-24.png"
                            class="accordion__styletwo-head-img-open">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-minus-24.png"
                            class="accordion__styletwo-head-img-close">
                    </div>
                    <div class="accordion__styletwo-content">
                        <p style="margin-bottom: 0px;">
                            <?php echo $action_description_three; ?>
                        </p>
                    </div>
                </div>
                <!-- accordion four -->
                <div class="accordion__styletwo">
                    <div class="accordion__styletwo-head">
                        <div class="accordion__styletwo-head-left">
                            <img src="<?php echo $action_image_four?>" />
                            <h4 style="margin-bottom: 0px;">
                                <?php echo $action_title_four; ?>
                            </h4>
                        </div>
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-plus-24.png"
                            class="accordion__styletwo-head-img-open">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-minus-24.png"
                            class="accordion__styletwo-head-img-close">
                    </div>
                    <div class="accordion__styletwo-content">
                        <p style="margin-bottom: 0px;">
                            <?php echo $action_description_four; ?>
                        </p>
                    </div>
                </div>
            </div>
            <a href="#guide-banner"><button><?php echo $action_button_title ?></button></a>
        </div>
    </div>
</div>

<div class="reviews-slider">
    <div class="responsive-container">
        <div class="reviews-slider__inner">
            <h2>What our clients say</h2>
            <?php echo do_shortcode('[trustindex data-widget-id=f414bd1949df459cf05f74dedd]') ?>
            <a href="#guide-banner"><button><?php echo $action_button_title ?></button></a>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/elements/bottom-form-banner', null, array('image' => $bottom_banner_image, 'form_shortcode' => $bottom_banner_form_shortcode, 'form_title' => $bottom_banner_form_title, 'banner_header' => $bottom_banner_title, 'phone' => $phone, 'email' => $email)); ?>