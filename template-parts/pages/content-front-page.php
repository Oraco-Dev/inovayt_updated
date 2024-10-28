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

    <section class="front-page-banner">
        <img class="front-page-banner__background desktop-only"
            src="https://www.inovayt.com.au/wp-content/uploads/2024/08/GettyImages-1434115145-min-scaled.jpg-1.jpg"
            alt="front-page Background Image" />
        <img class="front-page-banner__background mobile-only"
            src="https://www.inovayt.com.au/wp-content/uploads/2024/08/GettyImages-1434115145-min-scaled-1.webp"
            alt="front-page Background Image" />
        <div class="front-page-banner__overlay"></div>

        <section class="responsive-container">
            <div class="front-page-banner__content">
                <div class="front-page-banner__content-title">
                    <h1 style="margin-bottom: 0px;">Financial solutions as individual as you</h1>
                    <a class="talk-to-an-expert-btn"><button>Talk to an expert</button></a>
                </div>
            </div>
        </section>

    </section>

    <?php get_template_part('template-parts/elements/call-to-actions/icon-columns', null, array('action_title' => $action_title, 'action_button_title' => $action_button_title, 'action_button_link' => '', 'action_button_class' => 'talk-to-an-expert-btn', 'action_title_one' => $action_title_one, 'action_description_one' => $action_description_one, 'action_image_one' => $action_image_one, 'action_title_two' => $action_title_two, 'action_description_two' => $action_description_two, 'action_image_two' => $action_image_two, 'action_title_three' => $action_title_three, 'action_description_three' => $action_description_three, 'action_image_three' => $action_image_three, 'action_title_four' => $action_title_four, 'action_description_four' => $action_description_four, 'action_image_four' => $action_image_four)); ?>

    <section class="front-page__accordions">
        <div class="responsive-container">
            <div class="front-page__accordions-inner">
                <h2 style="margin-bottom: 0px;"><?php echo $action_title ?></h2>
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
                <a class="talk-to-an-expert-btn"><button><?php echo $action_button_title ?></button></a>
            </div>
        </div>
    </section>

    <section style="background-color: white;">
        <?php get_template_part('template-parts/elements/alternate-box/alternate-box-left', null, array('image' => $alternate_box_image_one, 'title' => $alternate_box_title_one, 'button_link' => $alternate_box_button_link_one, 'button_text' => $alternate_box_button_text_one, 'content' => $alternate_box_content_one, 'talk_to_an_expert' => '', 'background_colour' => '')); ?>
    </section>

    <section class="front-page-solutions">
        <div class="responsive-container">
            <header>
                <h2 style="margin-bottom: 0px;">Our solutions</h2>
            </header>
            <div class="front-page-solutions__cards">
                <a href="/mortgage-broker/" class="front-page-solutions__card">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2022/11/INO_Web_Icons-01.svg"
                        alt="Finance Icon" class="front-page-solutions__card-icon">
                    <div class="front-page-solutions__card-title">
                        <h4>Finance</h4>
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/icons8-arrow-64.svg"
                            alt="Arrow Icon">
                    </div>
                </a>
                <a href="/financial-advisor/" class="front-page-solutions__card">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/02/INO_Web_Icons-02.svg"
                        alt="Wealth Icon" class="front-page-solutions__card-icon">
                    <div class="front-page-solutions__card-title">
                        <h4>Wealth</h4>
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/icons8-arrow-64.svg"
                            alt="Arrow Icon">
                    </div>
                </a>
                <a href="/business-loan-broker/" class="front-page-solutions__card">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2020/10/INO_Web_Icons-03.svg"
                        alt="Commercial Icon" class="front-page-solutions__card-icon">
                    <div class="front-page-solutions__card-title">
                        <h4>Commercial</h4>
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/icons8-arrow-64.svg"
                            alt="Arrow Icon">
                    </div>
                </a>
                <a href="/vehicle-equipment-finance/" class="front-page-solutions__card">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2020/11/INO_Web_Icons-21-01.svg"
                        alt="Car & Equipment Icon" class="front-page-solutions__card-icon">
                    <div class="front-page-solutions__card-title">
                        <h4>Vehicle & Equipment</h4>
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/icons8-arrow-64.svg"
                            alt="Arrow Icon">
                    </div>
                </a>
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

    <?php get_template_part('template-parts/elements/bottom-form-banner', null, array('image' => $bottom_banner_image, 'form_shortcode' => $bottom_banner_form_shortcode, 'form_title' => $bottom_banner_form_title, 'banner_header' => $bottom_banner_title)); ?>