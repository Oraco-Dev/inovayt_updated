<?php

$page_id = get_the_ID();

$home_loan_calculators = array(
    'post_type'      => 'calculators',
    'posts_per_page' => -1,
    'tax_query'      => array(
        array(
            'taxonomy' => 'category',  // Assuming 'category' is the taxonomy for categories
            'field'    => 'slug',
            'terms'    => 'home-loan-calculator',  // Slug of the category you want to filter by
        ),
    ),
);

$commercial_loan_calculators = array(
    'post_type'      => 'calculators',
    'posts_per_page' => -1,
    'tax_query'      => array(
        array(
            'taxonomy' => 'category',  // Assuming 'category' is the taxonomy for categories
            'field'    => 'slug',
            'terms'    => 'commercial-loan-calculator',  // Slug of the category you want to filter by
        ),
    ),
);

$financial_planning_calculators = array(
    'post_type'      => 'calculators',
    'posts_per_page' => -1,
    'tax_query'      => array(
        array(
            'taxonomy' => 'category',  // Assuming 'category' is the taxonomy for categories
            'field'    => 'slug',
            'terms'    => 'financial-planning-calculator',  // Slug of the category you want to filter by
        ),
    ),
);

$personal_loan_calculators = array(
    'post_type'      => 'calculators',
    'posts_per_page' => -1,
    'tax_query'      => array(
        array(
            'taxonomy' => 'category',  // Assuming 'category' is the taxonomy for categories
            'field'    => 'slug',
            'terms'    => 'personal-loan-calculator',  // Slug of the category you want to filter by
        ),
    ),
);



$home_loan_calculators_query = new WP_Query( $home_loan_calculators );
$commercial_loan_calculators_query = new WP_Query( $commercial_loan_calculators );
$financial_planning_calculators_query = new WP_Query( $financial_planning_calculators );
$personal_loan_calculators_query = new WP_Query( $personal_loan_calculators );


// custom fields
// accordion
$accordion_title_one = get_field('accordiontitle1', $page_id);
$accordion_title_two = get_field('accordiontitle2', $page_id);
$accordion_title_three = get_field('accordiontitle3', $page_id);
$accordion_title_four = get_field('accordiontitle4', $page_id);
$accordion_title_five = get_field('accordiontitle5', $page_id);

// bottom banner
$bottom_banner_image = get_field('bottom_banner_-_image', $page_id);
$bottom_banner_form_title = get_field('bottom_banner_-_form_title', $page_id);
$bottom_banner_form_shortcode = get_field('bottom_banner_-_form_shortcode', $page_id);
$bottom_banner_title = get_field('bottom_banner_-_banner_title', $page_id);

?>

<div class="calculators-banner">
    <img class="calculators-banner__background"
        src="https://www.inovayt.com.au/wp-content/uploads/2024/09/INO_Resources-Image-1.jpg"
        alt="calculators Background Image" />
    <div class="calculators-banner__overlay"></div>
    <section class="responsive-container">
        <div class="calculators-banner__content">
            <div class="calculators-banner__content-title">
                <h1 style="margin-bottom: 0px;">Finance Calculators</h1>
                <h4 style="margin-bottom: 0px;">Careful planning is important when it comes to your finances. Our free
                    online finance calculators,
                    downloadable guides and digital property report will help you make informed financial decisions.
                </h4>
            </div>
            <div class="calculators-banner__tiles">
                <div>
                    <a href="#home-loan-calculators" class="calculators-banner__tile blue"><img
                            src="https://www.inovayt.com.au/wp-content/uploads/2020/10/INO_Web_Icons-03.svg"
                            alt="Home Loans Icon" />
                        <h4 style="margin-bottom: 0px;">Home Loan Calculators</h4>
                    </a>
                    <a href="#personal-loan-calculators" class="calculators-banner__tile green"><img
                            src="https://www.inovayt.com.au/wp-content/uploads/2020/11/INO_Web_Icons-14-01.svg"
                            alt="Personal Loans Icon" />
                        <h4 style="margin-bottom: 0px;">Personal Loan Calculators</h4>
                    </a>
                </div>
                <div>
                    <a href="#commercial-loan-calculators" class="calculators-banner__tile white"><img
                            src="https://www.inovayt.com.au/wp-content/uploads/2020/11/INO_Web_Icons-15-01.svg"
                            alt="Commercial Loans Icon" />
                        <h4 style="margin-bottom: 0px;">Commercial Loan Calculators</h4>
                    </a>
                    <a href="#financial-planning-calculators" class="calculators-banner__tile blue"><img
                            src="https://www.inovayt.com.au/wp-content/uploads/2020/11/INO_Web_Icons-12-01.svg"
                            alt="Financial Planning Icon" />
                        <h4 style="margin-bottom: 0px;">Financial Planning Calculators</h4>
                    </a>
                </div>
            </div>
        </div>

    </section>
</div>

<!-- calculator accordions are hard coded as they need to have query loops for content -->

<main class="calculators-container">
    <section class="responsive-container">
        <div class="calculators-accordion-section">
            <div id="home-loan-calculators" class="accordion__styleone">
                <div class="accordion__styleone-head light-blue">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-plus-24-1.png"
                        class="accordion__styleone-head-img-open">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-minus-24-1.png"
                        class="accordion__styleone-head-img-close">
                    <h4 style="margin-bottom: 0px;">
                        <?php echo $accordion_title_one; ?>
                    </h4>
                </div>
                <div class="accordion__styleone-content calculators light-blue">
                    <?php
                            if ($home_loan_calculators_query->have_posts()) :
                      
                            while ($home_loan_calculators_query->have_posts()) : $home_loan_calculators_query->the_post();

                                $title = get_the_title();
                                $icon = get_field('calculator_icon');
                                $link = get_field('calculator_page_link');
                                $back_description = get_field('calculator_description_-_back');
                                $description = get_field('calculator_description_-_front');

                              
                                    echo get_template_part('template-parts/elements/resources-box', null, array('icon' => $icon, 'title' => $title, 'link' => $link, 'description' => $description,  'text_colour' => 'blue', 'link_text' => 'View calculator', 'hover_flag' => 'is-hover', 'hover_description' => $back_description));
               
                            endwhile;
                            
                            ?>
                    <?php endif; ?>
                </div>
            </div>

            <div id="personal-loan-calculators" class="accordion__styleone">
                <div class="accordion__styleone-head light-green">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-plus-24.png"
                        class="accordion__styleone-head-img-open">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-minus-24.png"
                        class="accordion__styleone-head-img-close">
                    <h4 style="margin-bottom: 0px;">
                        <?php echo $accordion_title_two; ?>
                    </h4>
                </div>
                <div class="accordion__styleone-content calculators light-green">
                    <?php
                            if ($personal_loan_calculators_query->have_posts()) :
                      
                            while ($personal_loan_calculators_query->have_posts()) : $personal_loan_calculators_query->the_post();

                                $title = get_the_title();
                                $icon = get_field('calculator_icon');
                                $link = get_field('calculator_page_link');
                                $back_description = get_field('calculator_description_-_back');
                                $description = get_field('calculator_description_-_front');

                              
                                    echo get_template_part('template-parts/elements/resources-box', null, array('icon' => $icon, 'title' => $title, 'link' => $link, 'description' => $description,  'text_colour' => 'green', 'link_text' => 'View calculator', 'hover_flag' => 'is-hover', 'hover_description' => $back_description));
               
                            endwhile;
                            
                            ?>
                    <?php endif; ?>
                </div>
            </div>

            <div id="commercial-loan-calculators" class="accordion__styleone">
                <div class="accordion__styleone-head light-blue gray-one">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-plus-24-1.png"
                        class="accordion__styleone-head-img-open">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-minus-24-1.png"
                        class="accordion__styleone-head-img-close">
                    <h4 style="margin-bottom: 0px;">
                        <?php echo $accordion_title_three; ?>
                    </h4>
                </div>
                <div class="accordion__styleone-content calculators gray-one">
                    <?php
                            if ($commercial_loan_calculators_query->have_posts()) :
                      
                            while ($commercial_loan_calculators_query->have_posts()) : $commercial_loan_calculators_query->the_post();

                                $title = get_the_title();
                                $icon = get_field('calculator_icon');
                                $link = get_field('calculator_page_link');
                                $back_description = get_field('calculator_description_-_back');
                                $description = get_field('calculator_description_-_front');

                              
                                    echo get_template_part('template-parts/elements/resources-box', null, array('icon' => $icon, 'title' => $title, 'link' => $link, 'description' => $description,  'text_colour' => 'blue', 'link_text' => 'View calculator', 'hover_flag' => 'is-hover', 'hover_description' => $back_description));
               
                            endwhile;
                            
                            ?>
                    <?php endif; ?>
                </div>
            </div>

            <div id="financial-planning-calculators" class="accordion__styleone">
                <div class="accordion__styleone-head light-blue">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-plus-24-1.png"
                        class="accordion__styleone-head-img-open">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-minus-24-1.png"
                        class="accordion__styleone-head-img-close">
                    <h4 style="margin-bottom: 0px;">
                        <?php echo $accordion_title_four; ?>
                    </h4>
                </div>
                <div class="accordion__styleone-content calculators light-blue">
                    <?php
                            if ($financial_planning_calculators_query->have_posts()) :
                      
                            while ($financial_planning_calculators_query->have_posts()) : $financial_planning_calculators_query->the_post();

                                $title = get_the_title();
                                $icon = get_field('calculator_icon');
                                $link = get_field('calculator_page_link');
                                $back_description = get_field('calculator_description_-_back');
                                $description = get_field('calculator_description_-_front');

                                if ($title === 'Advice Estimate Calculator') {
                                    $link = 'https://www.inovayt.com.au/financial-advice-fee-estimate/';
                                }

                                if ($title === 'Finance Wellbeing Calculator') {
                                    $link = 'https://www.inovayt.com.au/financial-wellbeing-calculator/';
                                }

                                echo get_template_part('template-parts/elements/resources-box', null, array('icon' => $icon, 'title' => $title, 'link' => $link, 'description' => $description,   'text_colour' => 'blue', 'link_text' => 'View calculator', 'hover_flag' => 'is-hover', 'hover_description' => $back_description));
               
                            endwhile;
                            
                            ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_template_part('template-parts/elements/bottom-form-banner', null, array('image' => $bottom_banner_image, 'form_shortcode' => $bottom_banner_form_shortcode, 'form_title' => $bottom_banner_form_title, 'banner_header' => $bottom_banner_title)); ?>