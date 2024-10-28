<?php

$page_id = get_the_ID();

$finance_guides = array(
    'post_type'      => 'guides',
    'posts_per_page' => -1,
    'tax_query'      => array(
        array(
            'taxonomy' => 'category',  // Assuming 'category' is the taxonomy for categories
            'field'    => 'slug',
            'terms'    => 'finance-guides',  // Slug of the category you want to filter by
        ),
    ),
);

$commercial_guides = array(
    'post_type'      => 'guides',
    'posts_per_page' => -1,
    'tax_query'      => array(
        array(
            'taxonomy' => 'category',  // Assuming 'category' is the taxonomy for categories
            'field'    => 'slug',
            'terms'    => 'commercial-guides',  // Slug of the category you want to filter by
        ),
    ),
);

$wealth_guides = array(
    'post_type'      => 'guides',
    'posts_per_page' => -1,
    'tax_query'      => array(
        array(
            'taxonomy' => 'category',  // Assuming 'category' is the taxonomy for categories
            'field'    => 'slug',
            'terms'    => 'wealth-guides',  // Slug of the category you want to filter by
        ),
    ),
);

$finance_guides_query = new WP_Query( $finance_guides );
$commercial_guides_query = new WP_Query( $commercial_guides );
$wealth_guides_query = new WP_Query( $wealth_guides );

// custom fields
// accordion
$accordion_title_one = get_field('accordiontitle1', $page_id);
$accordion_title_two = get_field('accordiontitle2', $page_id);
$accordion_title_three = get_field('accordiontitle3', $page_id);

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
                <h1 style="margin-bottom: 0px;">Free Finance Resources</h1>
                <h4 style="margin-bottom: 0px;">Careful planning is important when it comes to your finances. Our free
                    downloadable guides will help you make informed financial decisions.
                </h4>
            </div>
            <div class="calculators-banner__tiles">
                <div>
                    <a href="#finance-guides" class="calculators-banner__tile blue"><img
                            src="https://www.inovayt.com.au/wp-content/uploads/2022/11/INO_Web_Icons-01.svg"
                            alt="Home Loans Icon" />
                        <h4 style="margin-bottom: 0px;">Finance Guides</h4>
                    </a>
                    <a href="#commercial-guides" class="calculators-banner__tile white"><img
                            src="https://www.inovayt.com.au/wp-content/uploads/2020/10/INO_Web_Icons-03.svg"
                            alt="Commercial Loans Icon" />
                        <h4 style="margin-bottom: 0px;">Commercial Guides</h4>
                    </a>
                </div>
                <!-- <div>
                    <a href="#wealth-guides" class="calculators-banner__tile green"><img
                            src="https://www.inovayt.com.au/wp-content/uploads/2020/10/INO_Web_Icons-03.svg"
                            alt="Personal Loans Icon" />
                        <h4 style="margin-bottom: 0px;">Wealth Guides</h4>
                    </a>
                </div> -->
            </div>
        </div>

    </section>
</div>

<!-- guides accordions are hard coded as they need to have query loops for content -->

<main class="calculators-container">
    <section class="responsive-container">
        <div class="calculators-accordion-section">
            <div id="finance-guides" class="accordion__styleone">
                <div class="accordion__styleone-head light-blue">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-plus-24-1.png"
                        class="accordion__styleone-head-img-open">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-minus-24-1.png"
                        class="accordion__styleone-head-img-close">
                    <h4 style="margin-bottom: 0px;">
                        <?php echo $accordion_title_one; ?>
                    </h4>
                </div>
                <!-- finance guides -->
                <div class="accordion__styleone-content calculators light-blue">
                    <?php
                            if ($finance_guides_query->have_posts()) :
                      
                            while ($finance_guides_query->have_posts()) : $finance_guides_query->the_post();

                                $title = get_the_title();
                                $icon = get_field('guides_icon');
                                $link = get_permalink();
                                $back_description = get_field('guides_description_-_back');
                                $description = get_field('guides_description_-_front');

                                echo get_template_part('template-parts/elements/resources-box', null, array('icon' => $icon, 'title' => $title, 'link' => $link, 'description' => $description,  'text_colour' => 'green', 'link_text' => 'Download guide', 'hover_flag' => '', 'hover_description' => ''));
               
                            endwhile;
                            
                            ?>
                    <?php endif; ?>
                </div>
            </div>
            <!-- wealth guides -->
            <!-- <div id="wealth-guides" class="accordion__styleone">
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
                            if ($wealth_guides_query->have_posts()) :
                      
                            while ($wealth_guides_query->have_posts()) : $wealth_guides_query->the_post();

                                $title = get_the_title();
                                $icon = get_field('guides_icon');
                                $link = get_permalink();
                                $back_description = get_field('guides_description_-_back');
                                $description = get_field('guides_description_-_front');

                                echo get_template_part('template-parts/elements/resources-box', null, array('icon' => $icon, 'title' => $title, 'link' => $link, 'description' => $description,  'text_colour' => 'green', 'link_text' => 'Download guide', 'hover_flag' => '', 'hover_description' => ''));
               
                            endwhile;
                            
                            ?>
                    <?php endif; ?>
                </div>
            </div> -->
            <!-- commercial guides -->
            <div id="commercial-guides" class="accordion__styleone">
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
                            if ($commercial_guides_query->have_posts()) :
                      
                            while ($commercial_guides_query->have_posts()) : $commercial_guides_query->the_post();

                                $title = get_the_title();
                                $icon = get_field('guides_icon');
                                $link = get_permalink();
                                $back_description = get_field('guides_description_-_back');
                                $description = get_field('guides_description_-_front');

                                echo get_template_part('template-parts/elements/resources-box', null, array('icon' => $icon, 'title' => $title, 'link' => $link, 'description' => $description,  'text_colour' => 'green', 'link_text' => 'Download guide', 'hover_flag' => '', 'hover_description' => ''));
               
                            endwhile;
                            
                            ?>
                    <?php endif; ?>
                </div>
            </div>
            <p class="calculators-accordion-section__meta">At <a href="/">Inovayt</a>, our mission is to provide
                lifetime financial solutions by thoroughly understanding your
                individual needs and goals. As such, we believe every client deserves our award-winning customer
                service. Our friendly team prioritises client satisfaction above all else, going above and beyond to
                help you achieve your financial goals. Regardless of what stage of the finance journey you’re on, our
                team provide quality advice to help you make informed and empowered financial decisions. 
                 <br />
                 <br />
                Our customer service extends far beyond your initial meeting, as we believe in nurturing you beyond the
                first transaction. Our brokers work hand in hand with you to ensure you receive the best possible
                outcome and are available to chat face to face, online, or via the phone at a time that suits you. 
                 <br />
                 <br />
                Our focus is always on achieving the best possible outcomes for our clients. Finding the right finance
                to match your goals and objectives is no easy task, so our <a href="/inovayt-team">friendly team</a>
                work tirelessly to tailor a solution for you. We are solutions-driven, so we work hard to tackle any
                hurdles that may arise to ensure client satisfaction. </p>
        </div>
    </section>
</main>

<?php get_template_part('template-parts/elements/bottom-form-banner', null, array('image' => $bottom_banner_image, 'form_shortcode' => $bottom_banner_form_shortcode, 'form_title' => $bottom_banner_form_title, 'banner_header' => $bottom_banner_title)); ?>