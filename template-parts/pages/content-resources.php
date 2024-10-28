<?php

$page_id = get_the_ID();

$calculators = array(
    'post_type'      => 'calculators',
    'posts_per_page' => -1, // Display 15 products per page
);

$calculators_query = new WP_Query( $calculators );

$guides = array(
    'post_type'      => 'guides',
    'posts_per_page' => -1, // Display 15 products per page
);

$guides_query = new WP_Query( $guides );

// custom fields
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

<div class="resources-banner">
    <img class="resources-banner__background"
        src="https://www.inovayt.com.au/wp-content/uploads/2024/09/INO_Resources-Image-1.jpg"
        alt="Resources Background Image" />
    <div class="resources-banner__overlay"></div>

    <section class="responsive-container">
        <div class="resources-banner__content">
            <div class="resources-banner__content-title">
                <h1 style="margin-bottom: 0px;">Resources</h1>
                <h4 style="margin-bottom: 0px;">Careful planning is important when it comes to your finances. Our free
                    online finance calculators,
                    downloadable guides and digital property report will help you make informed financial decisions.
                </h4>
            </div>
            <div class="resources-banner__tiles">
                <a href="#finance-calculators" class="resources-banner__tile blue"><img
                        src="https://www.inovayt.com.au/wp-content/uploads/2020/10/INO_Web_Icons-03.svg"
                        alt="Calculator Icon" />
                    <h4 style="margin-bottom: 0px;">Finance Calculators</h4>
                </a>
                <a href="#finance-guides" class="resources-banner__tile green"><img
                        src="https://www.inovayt.com.au/wp-content/uploads/2024/02/INO_Web_Icons-14-01.svg"
                        alt="Guides Icon" />
                    <h4 style="margin-bottom: 0px;">Finance Guides</h4>
                </a>
                <a href="#property-report" class="resources-banner__tile white"><img
                        src="https://www.inovayt.com.au/wp-content/uploads/2020/11/INO_Web_Icons-12-01.svg"
                        alt="Reports Icon" />
                    <h4 style="margin-bottom: 0px;">Property Report</h4>
                </a>
            </div>
        </div>

    </section>
</div>

<main class="resources-container">
    <div class="resources-calculator-anchor" id="finance-calculators"></div>
    <section class="responsive-container">
        <div class="resources-finance-calculators">
            <header>
                <h2 style="margin-bottom: 0px;">Online Finance <br /> Calculators</h2>
                <div class="resources-finance-calculators__meta">
                    <p style="margin-bottom: 0px;">Our free finance calculators are here to help you prepare for and
                        achieve your financial goals.
                    </p>
                    <a href="/finance-calculators/" class="desktop-only"><button>View all calculators <img
                                style="margin-top: 8px;"
                                src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-arrow-30-3.png" /></button></a>
                </div>
            </header>
            <main class="resources-finance-calculators__main">

                <button id="nextButton"><img
                        src="https://www.inovayt.com.au/wp-content/uploads/2024/07/right-thin-chevron-svgrepo-com.svg"
                        alt="Next Button Slider" class="slider-buttons__prev" /></button>

                <div class="splide"
                    data-splide='{"type":"loop", "perPage":3, "arrows":false, "pagination":false, "gap": "20px", "padding": "0.5rem", "drag": "free", "snap": true }'>
                    <div class="splide__track" style="padding: 1rem">
                        <div class="splide__list">
                            <?php
                            if ($calculators_query->have_posts()) :
                      
                            while ($calculators_query->have_posts()) : $calculators_query->the_post();

                                $title = get_the_title();
                                $icon = get_field('calculator_icon');
                                $link = get_field('calculator_page_link');
                                $description = get_field('calculator_description_-_front');
                                $back_description = get_field('calculator_description_-_back');

                                echo '<div class="splide__slide">';
                                    get_template_part('template-parts/elements/resources-box', null, array('icon' => $icon, 'title' => $title, 'link' => $link, 'description' => $description, 'hover_description' => $back_description, 'text_colour' => 'blue', 'link_text' => 'View calculator', 'hover_flag' => 'is-hover'));
                                echo '</div>';
                            endwhile;
                            
                            ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </section>


    <div class="resources-guides-anchor" id="finance-guides"></div>
    <section class="responsive-container">
        <div class="resources-finance-guides">
            <header>
                <h2 style="margin-bottom: 0px;">Online Finance Guides</h2>
                <div class="resources-finance-guides__meta">
                    <p style="margin-bottom: 0px;">Our free finance guides are here to help you prepare for and achieve
                        your financial goals.</p>
                    <a href="/finance-resources/" class="desktop-only"><button>View all guides<img
                                style="margin-top: 8px;"
                                src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-arrow-30-3.png" /></button></a>
                </div>
            </header>

            <main class="resources-finance-guides__main">

                <button id="nextButtonDuplicate"><img
                        src="https://www.inovayt.com.au/wp-content/uploads/2024/07/right-thin-chevron-svgrepo-com.svg"
                        alt="Next Button Slider" class="slider-buttons__prev" /></button>

                <div class="splide"
                    data-splide='{"type":"loop", "perPage":3, "arrows":false, "pagination":false, "gap": "20px", "padding": "0.5rem", "drag": "free", "snap": true }'>
                    <div class="splide__track" style="padding: 1rem">
                        <div class="splide__list">
                            <?php
                            if ($guides_query->have_posts()) :
                      
                            while ($guides_query->have_posts()) : $guides_query->the_post();

                                $title = get_the_title();
                                $icon = get_field('guides_icon');
                                $link = get_permalink();
                                $description = get_field('guides_description_-_front');

                                echo '<div class="splide__slide">';
                                    get_template_part('template-parts/elements/resources-box', null, array('icon' => $icon, 'title' => $title, 'link' => $link, 'description' => $description, 'text_colour' => 'green', 'link_text' => 'Download guide'));
                                echo '</div>';
                            endwhile;
                            
                            ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </section>


    <div class="resources-property-report-anchor" id="property-report">
        <?php get_template_part('template-parts/elements/alternate-box/alternate-box-right', null, array('image' => $alternate_box_image_one, 'title' => $alternate_box_title_one, 'button_link' => $alternate_box_button_link_one, 'button_text' => $alternate_box_button_text_one, 'content' => $alternate_box_content_one, 'talk_to_an_expert' => '', 'background_colour' => '')); ?>
    </div>
</main>


<?php get_template_part('template-parts/elements/bottom-form-banner', null, array('image' => $bottom_banner_image, 'form_shortcode' => $bottom_banner_form_shortcode, 'form_title' => $bottom_banner_form_title, 'banner_header' => $bottom_banner_title)); ?>