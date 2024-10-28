<?php

$headerMainMenu = array(
    'menu' => 'Main Menu - (Primary Menu) - New Homepage',
    // Specify the menu name here
    'menu_class' => 'header__inner-right-menu-item',
    'menu_id' => 'header__inner-right-menu',
);

$topMenu = array(
    'menu' => 'Top Menu',
    // Specify the menu name here
    'menu_class' => 'popup-menu__inner-right-menu-item',
    'menu_id' => 'popup-menu__inner-right-menu',
);

// FINANCE PAGE ID
$finance_parent_id = 26303;
$wealth_parent_id = 13970;
$commercial_parent_id = 14038;
$car_equipment_parent_id = 14692;

$custom_finance_order = array(15131, 15234, 14923, 14925, 14928, 14931, 14933); 
$custom_wealth_order = array(15336, 15339, 15341, 16995, 15346, 15348, 27801); 
$custom_commercial_order = array(15011, 15020, 15014, 15017, 15023, 15029, 15026); 
$custom_car_equipment_order = array(15469, 14801, 14803, 14828, 27778); 

$finance_page_args = array(
    'post_type'      => 'page',
    'post_status'    => 'publish',
    'post_parent'    => $finance_parent_id,
    'orderby'       => 'post__in',
    'post__in'      => $custom_finance_order,
    'posts_per_page' => -1
);

$wealth_page_args = array(
    'post_type'      => 'page',
    'post_status'    => 'publish',
    'post_parent'    => $wealth_parent_id,
    'orderby'       => 'post__in',
    'post__in'      => $custom_wealth_order,
    'posts_per_page' => -1
);

$commercial_page_args = array(
    'post_type'      => 'page',
    'post_status'    => 'publish',
    'post_parent'    => $commercial_parent_id,
    'orderby'       => 'post__in',
    'post__in'      => $custom_commercial_order,
    'posts_per_page' => -1
);


$car_equipment_page_args = array(
    'post_type'      => 'page',
    'post_status'    => 'publish',
    'post_parent'    => $car_equipment_parent_id,
    'orderby'       => 'post__in',
    'post__in'      => $custom_car_equipment_order,
    'posts_per_page' => -1
);

$finance_query = new WP_Query($finance_page_args);
$wealth_query = new WP_Query($wealth_page_args);
$commercial_query = new WP_Query($commercial_page_args);
$car_equipment_query = new WP_Query($car_equipment_page_args);

?>

<!DOCTYPE html>
<html lang="en-AU">

<head>
    <meta charset="UTF-8">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!--<title><?php wp_title('|', true, 'right');?></title>-->
    <!--<meta name="description"-->
    <!--    content="At Inovayt, we empower you with tailored financial solutions to generate wealth, create happiness, and unlock financial freedom. Let our team assist with mortgage broking, financial planning and business and asset finance. ">-->
    <!--<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">-->
    <!--<link rel="canonical" href="https://www.inovayt.com.au/">-->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Inovayt | Financial Solutions As Individual As You">
    <meta property="og:description"
        content="Inovayt are experts in Finance for First Home Buyers, Property Investors &amp; Refinancing. Your options can be overwhelming, but Inovayt is here to help.">
    <meta property="og:url" content="https://www.inovayt.com.au/">
    <meta property="og:site_name" content="Inovayt">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Inovayt | Financial Solutions As Individual As You">
    <meta name="twitter:description"
        content="Inovayt are experts in Finance for First Home Buyers, Property Investors &amp; Refinancing. Your options can be overwhelming, but Inovayt is here to help.">
    <meta name="twitter:label1" content="Written by">
    <meta name="twitter:data1" content="admin">
    <meta name="twitter:label2" content="Time to read">
    <meta name="twitter:data2" content="1 minute">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- POPUPS -->
    <!-- TALK TO AN EXPERT - POPUP -->

    <div id="talk-expert" class="talk-expert">
        <div class="talk-expert__overlay"></div>

        <div class="talk-expert__body">
            <div id="talk-expert-close">
                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/icons8-close.svg" alt="Close Button" />
            </div>
            <div class="talk-expert__select">
                <h2>Who would you like to speak to?</h2>
                <div class="talk-expert__select-buttons">
                    <button id="talk-expert-wealth">Financial Planner</button>
                    <button id="talk-expert-finance">Mortgage Broker</button>
                    <button id="talk-expert-commercial">Commercial Broker</button>
                    <button id="talk-expert-vehicle">Asset Broker</button>
                </div>
            </div>
            <div class="talk-expert__finance">
                <h2>Start your journey, contact Inovayt today</h2>
                <?php echo do_shortcode('[hubspot type="form" portal="8993147" id="4446ad8d-84c9-4fb4-b7c7-881c2bb7a594"]'); ?>
            </div>
            <div class="talk-expert__wealth">
                <h2>Start your journey, contact Inovayt today</h2>
                <?php echo do_shortcode('[hubspot type=form portal=8993147 id=80d5dece-88fc-4683-8ba4-156cf7ed3213]'); ?>
            </div>
            <div class="talk-expert__commercial">
                <h2>Start your journey, contact Inovayt today</h2>
                <?php echo do_shortcode('[hubspot type="form" portal="8993147" id="bac2559d-4645-4cfe-b91b-112a44b0cdf2"]'); ?>
            </div>
            <div class="talk-expert__vehicle">
                <h2>Start your journey, contact Inovayt today</h2>
                <?php echo do_shortcode('[hubspot type="form" portal="8993147" id="e349f08c-7e91-4a55-b0c2-0f5702688cb3"]'); ?>
            </div>
        </div>
    </div>

    <!-- END TALK TO AN EXPERT - POPUP -->

    <!-- HAMBURGER POPUP -->

    <div id="popup-menu-overlay">
        <div id="popup-menu">
            <div class="popup-menu-inner">
                <div id="close-popup-menu">
                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/icons8-close-2.svg"
                        alt="Close Button" />
                </div>
                <!-- FIRST SECTION OF HAMBURGER MENU -->


                <!-- FIRST SECTION - TABLET UP -->
                <div class="popup-menu-top">
                    <a class="talk-to-an-expert-btn"><button>Talk to an expert</button></a>
                </div>
                <!-- END FIRST SECTION - TABLET UP -->

                <!-- SECOND SECTION - MOBILE DOWN -->
                <div class="popup-menu-top-middle mobile-down">
                    <!-- Finance -->
                    <div class="popup-menu-link-container mobile-style">
                        <div class="popup-menu-link mobile-style">
                            <div class="popup-link-accordion">
                                <a href="/mortgage-broker/">Finance</a>
                                <div class="popup-link-accordion-button">
                                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                </div>
                            </div>
                        </div>
                        <div class="popup-link-accordion-content mobile-style">
                            <div class="nested-accordion">
                                <div class="nested-accordion-item">
                                    <div class="nested-accordion-header">
                                        <a href="/mortgage-broker/first-home-buyer/">Buying Your First Home</a>
                                        <div class="nested-accordion-button">
                                            <img
                                                src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                        </div>
                                    </div>
                                    <div class="nested-accordion-content">
                                        <a href="/mortgage-broker/first-home-buyer/#finance-journey-tab">Finance
                                            Journey</a>
                                        <a href="/mortgage-broker/first-home-buyer/#deposit-options-tab">Deposit
                                            Options</a>
                                        <a href="/mortgage-broker/first-home-buyer/#home-loans-tab">Types of Home
                                            Loans</a>
                                    </div>
                                </div>
                                <div class="nested-accordion-item">
                                    <div class="nested-accordion-header">
                                        <a href="/mortgage-broker/your-next-home/">Buying Your Next Home</a>
                                        <div class="nested-accordion-button">
                                            <img
                                                src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                        </div>
                                    </div>
                                    <div class="nested-accordion-content">
                                        <a href="/mortgage-broker/your-next-home/#purchasing-options-tab">Purchasing
                                            Options</a>
                                        <a href="/mortgage-broker/your-next-home/#renovation-options-tab">Renovation
                                            Options</a>
                                        <a href="/mortgage-broker/your-next-home/#sell-or-rent-tab">Should I sell or
                                            rent?</a>
                                    </div>
                                </div>
                            </div>
                            <a href="/mortgage-broker/property-investment/">Property Investment</a>
                            <a href="/mortgage-broker/refinance-home-loan/">Refinancing Your Home Loan</a>
                            <a href="/mortgage-broker/home-loans-for-professionals/">Home Loans for Professionals</a>
                            <a href="/mortgage-broker/self-employed-home-loan/">Self Employed Finance</a>
                            <a href="/mortgage-broker/pay-off-your-loan-sooner/">Pay Off Your Loan Sooner</a>
                            <a href="/relocation-home-loan/">Reloaction Loan Services</a>
                            <a href="/guarantor-home-loans/">Guarantor Home Loans</a>
                            <a href="/bridging-loan/">Bridging Home Loans</a>
                        </div>
                    </div>
                    <!-- Wealth -->
                    <div class="popup-menu-link-container mobile-style">
                        <div class="popup-menu-link mobile-style">
                            <div class="popup-link-accordion">
                                <a href="/financial-advisor/">Wealth</a>
                                <div class="popup-link-accordion-button">
                                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                </div>
                            </div>
                        </div>
                        <div class="popup-link-accordion-content mobile-style">
                            <div class="nested-accordion">
                                <div class="nested-accordion-item">
                                    <div class="nested-accordion-header">
                                        <a href="#">Your Goals</a>
                                        <div class="nested-accordion-button">
                                            <img
                                                src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                        </div>
                                    </div>
                                    <div class="nested-accordion-content">
                                        <a href="/financial-independence/">Achieve financial
                                            independence and retire early</a>
                                        <a href="/be-debt-free/">Be debt free</a>
                                        <a href="/buy-an-investment-property/">Buy an investment
                                            property</a>
                                        <a href="/buy-a-home/">Buy a home</a>
                                        <a href="/provide-your-children-the-best-possible-future/">Provide your children
                                            the best possible future</a>
                                        <a href="/plan-for-your-future/">Plan for your future</a>
                                        <a href="/protect-yourself-and-your-family/">Protect yourself and
                                            your family</a>
                                        <a href="/save-for-a-large-future-expense/">Save for a large future
                                            expense</a>
                                        <a href="/simplify-your-finances/">Simplify your
                                            finances</a>
                                        <a href="/accessing-super/">Start accesing your
                                            super</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        if ($wealth_query->have_posts()) :
                            while ($wealth_query->have_posts()) : $wealth_query->the_post();
                                // Get the permalink (URL) for the current page.
                                $page_url = get_permalink();
                        
                                // Get the title of the current page.
                                $page_title = get_the_title();
                                ?>

                            <!-- Output the link with the page's URL and title -->
                            <a href="<?php echo esc_url($page_url); ?>"><?php echo esc_html($page_title); ?></a>

                            <?php
                            endwhile;
                                wp_reset_postdata();
                            endif;
                        ?>
                        </div>
                    </div>
                    <!-- Commercial -->
                    <div class="popup-menu-link-container mobile-style">
                        <div class="popup-menu-link mobile-style">
                            <div class="popup-link-accordion">
                                <a href="/business-loan-broker/">Commercial</a>
                                <div class="popup-link-accordion-button">
                                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                </div>
                            </div>
                        </div>
                        <div class="popup-link-accordion-content mobile-style">
                            <?php
                        if ($commercial_query->have_posts()) :
                            while ($commercial_query->have_posts()) : $commercial_query->the_post();
                                // Get the permalink (URL) for the current page.
                                $page_url = get_permalink();
                        
                                // Get the title of the current page.
                                $page_title = get_the_title();
                                ?>

                            <!-- Output the link with the page's URL and title -->
                            <a href="<?php echo esc_url($page_url); ?>"><?php echo esc_html($page_title); ?></a>

                            <?php
                            endwhile;
                                wp_reset_postdata();
                            endif;
                        ?>
                        </div>
                    </div>
                    <!-- Car & Equipment -->
                    <div class="popup-menu-link-container">
                        <div class="popup-menu-link">
                            <div class="popup-link-accordion">
                                <a href="/car-equipment-finance/">Vehicle & Equipment Finance</a>
                                <div class="popup-link-accordion-button">
                                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                </div>
                            </div>
                        </div>
                        <div class="popup-link-accordion-content">
                            <div class="nested-accordion">
                                <div class="nested-accordion-item">
                                    <div class="nested-accordion-header">
                                        <a href="/vehicle-equipment-finance/car-loans/">Car Loans</a>
                                        <div class="nested-accordion-button">
                                            <img
                                                src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                        </div>
                                    </div>
                                    <div class="nested-accordion-content">
                                        <a href="/vehicle-equipment-finance/car-loans/#personal-car-tab">Personal Car
                                            Loans</a>
                                        <a href="/vehicle-equipment-finance/car-loans/#business-car-loans">Business Car
                                            Loans</a>
                                    </div>
                                </div>
                            </div>
                            <a href="/vehicle-equipment-finance/boat-loans/">Boat Loans</a>
                            <a href="/vehicle-equipment-finance/caravan-loans/">Caravan Loans</a>
                            <a href="/vehicle-equipment-finance/asset-finance/">Commercial Asset Finance</a>
                            <a href="/truck-finance/">Truck Finance</a>
                        </div>
                    </div>
                </div>
                <!-- END SECOND SECTION - MOBILE DOWN -->

                <!-- SECOND SECTION - TABLET UP -->
                <div class="popup-menu-top-middle tablet-up">
                    <!-- PHONE -->
                    <div class="popup-menu-link">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Icon-3.svg"
                            alt="Inovayt - Phone Icon" class="popup-menu-link-img" />
                        <div class="popup-link-accordion">
                            <a href="tel:1300354355">1300 354 355</a>

                        </div>
                    </div>
                    <!-- WHO WE ARE -->
                    <div class="popup-menu-link-container">
                        <div class="popup-menu-link">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Icon-1-1.svg"
                                alt="Inovayt - About Icon" class="popup-menu-link-img" />
                            <div class="popup-link-accordion">
                                <a href="/about-inovayt/">Who we are</a>
                                <div class="popup-link-accordion-button">
                                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                </div>
                            </div>
                        </div>
                        <div class="popup-link-accordion-content">

                            <a href="/about-inovayt/">Who we are</a>
                            <a href="/awards-best-brokers-australia/">Awards</a>
                            <!-- Nested Accordion -->
                            <div class="nested-accordion">
                                <div class="nested-accordion-item">
                                    <div class="nested-accordion-header">
                                        <a href="#">Responsibility</a>
                                        <div class="nested-accordion-button">
                                            <img
                                                src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                        </div>
                                    </div>
                                    <div class="nested-accordion-content">

                                        <a href="/live-for-lily/">Live for Lily</a>
                                        <a href="/sustainability/">Sustainability</a>

                                    </div>
                                </div>
                                <div class="nested-accordion-item">
                                    <div class="nested-accordion-header">
                                        <a href="#">Meet The Inovayt Team</a>
                                        <div class="nested-accordion-button">
                                            <img
                                                src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                        </div>
                                    </div>
                                    <div class="nested-accordion-content">
                                        <a href="/inovayt-team/#finance-team-tab/">Finance Team</a>
                                        <a href="/inovayt-team/#wealth-team-tab/">Wealth Team</a>
                                        <a href="/inovayt-team/#commercial-team-tab/">Commercial Team</a>
                                        <a href="/inovayt-team/#car-equipment-team-tab/">Vehicle & Equipment
                                            Team</a>
                                        <a href="/inovayt-team/#management-team-tab/">Management Team</a>
                                    </div>
                                </div>
                            </div>
                            <a href="/inovayt-team/">Join Our Team</a>
                        </div>
                    </div>
                    <!-- BLOG -->

                    <!-- RESOURCES -->
                    <div class="popup-menu-link-container">
                        <div class="popup-menu-link">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-3.svg"
                                alt="Inovayt - Resources Icon" class="popup-menu-link-img" />
                            <div class="popup-link-accordion">
                                <a href="/finance-resources/">Resources</a>
                                <div class="popup-link-accordion-button">
                                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                </div>
                            </div>
                        </div>
                        <div class="popup-link-accordion-content">
                            <a href="/blog-finance-tips/">Blog</a>
                            <a href="/finance-calculators/">Finance Calculators</a>
                            <a href="/property-report/">Property Valuation Report</a>
                            <a href="/finance-resources/">Downloadable Guides</a>
                            <a href="/finance-podcast/">Podcast</a>
                        </div>
                    </div>
                    <!-- CONTACT US -->
                    <div class="popup-menu-link">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Icon-2.svg"
                            alt="Inovayt - Contact Icon" class="popup-menu-link-img" />
                        <div class="popup-link-accordion">
                            <a href="/contact-inovayt/">Contact us</a>
                        </div>
                    </div>
                </div>
                <!-- END SECOND SECTION - TABLET UP -->

                <!-- THIRD SECTION - MOBILE DOWN -->
                <div class="popup-menu-bottom-middle mobile-down">
                    <!-- PHONE -->
                    <div class="popup-menu-link">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Icon-3.svg"
                            alt="Inovayt - Phone Icon" class="popup-menu-link-img" />
                        <div class="popup-link-accordion">
                            <a href="tel:1300354355">1300 354 355</a>

                        </div>
                    </div>
                    <!-- WHO WE ARE -->
                    <div class="popup-menu-link-container">
                        <div class="popup-menu-link">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Icon-1-1.svg"
                                alt="Inovayt - About Icon" class="popup-menu-link-img" />
                            <div class="popup-link-accordion">
                                <a href="/about-inovayt/">Who we are</a>
                                <div class="popup-link-accordion-button">
                                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                </div>
                            </div>
                        </div>
                        <div class="popup-link-accordion-content">

                            <a href="/about-inovayt/">Who we are</a>
                            <a href="/awards-best-brokers-australia/">Awards</a>
                            <!-- Nested Accordion -->
                            <div class="nested-accordion">
                                <div class="nested-accordion-item">
                                    <div class="nested-accordion-header">
                                        <a href="#">Responsibility</a>
                                        <div class="nested-accordion-button">
                                            <img
                                                src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                        </div>
                                    </div>
                                    <div class="nested-accordion-content">

                                        <a href="/live-for-lily/">Live for Lily</a>
                                        <a href="/sustainability/">Sustainability</a>

                                    </div>
                                </div>
                                <div class="nested-accordion-item">
                                    <div class="nested-accordion-header">
                                        <a href="#">Meet The Inovayt Team</a>
                                        <div class="nested-accordion-button">
                                            <img
                                                src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                        </div>
                                    </div>
                                    <div class="nested-accordion-content">
                                        <a href="/inovayt-team/#finance-team-tab/">Finance Team</a>
                                        <a href="/inovayt-team/#wealth-team-tab/">Wealth Team</a>
                                        <a href="/inovayt-team/#commercial-team-tab/">Commercial Team</a>
                                        <a href="/inovayt-team/#car-equipment-team-tab/">Vehicle & Equpiment Team</a>
                                        <a href="/inovayt-team/#management-team-tab/">Management Team</a>
                                    </div>
                                </div>
                            </div>
                            <a href="/inovayt-team/">Join Our Team</a>

                        </div>
                    </div>
                    <!-- RESOURCES -->
                    <div class="popup-menu-link-container">
                        <div class="popup-menu-link">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-3.svg"
                                alt="Inovayt - Resources Icon" class="popup-menu-link-img" />
                            <div class="popup-link-accordion">
                                <a href="/finance-resources/">Resources</a>
                                <div class="popup-link-accordion-button">
                                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                </div>
                            </div>
                        </div>
                        <div class="popup-link-accordion-content">
                            <a href="/blog-finance-tips/">Blog</a>
                            <a href="/finance-calculators/">Finance Calculators</a>
                            <a href="/property-report/">Property Valuation Report</a>
                            <a href="/finance-resources/">Downloadable Guides</a>
                            <a href="/finance-podcast/">Podcast</a>
                        </div>
                    </div>
                    <!-- CONTACT US -->
                    <div class="popup-menu-link">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Icon-2.svg"
                            alt="Inovayt - Contact Icon" class="popup-menu-link-img" />
                        <div class="popup-link-accordion">
                            <a href="/contact-inovayt/">Contact us</a>
                        </div>
                    </div>
                </div>
                <!-- END THIRD SECTION - MOBILE DOWN -->

                <!-- THIRD SECTION - TABLET UP -->
                <div class="popup-menu-bottom-middle tablet-up">
                    <div class="popup-menu-link-container mobile-style">
                        <div class="popup-menu-link mobile-style">
                            <div class="popup-link-accordion">
                                <a href="/mortgage-broker/">Finance</a>
                                <div class="popup-link-accordion-button">
                                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                </div>
                            </div>
                        </div>
                        <div class="popup-link-accordion-content mobile-style">
                            <div class="nested-accordion">
                                <div class="nested-accordion-item">
                                    <div class="nested-accordion-header">
                                        <a href="/mortgage-broker/first-home-buyer/">Buying Your First Home</a>
                                        <div class="nested-accordion-button">
                                            <img
                                                src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                        </div>
                                    </div>
                                    <div class="nested-accordion-content">
                                        <a href="/mortgage-broker/first-home-buyer/#finance-journey-tab">Finance
                                            Journey</a>
                                        <a href="/mortgage-broker/first-home-buyer/#deposit-options-tab">Deposit
                                            Options</a>
                                        <a href="/mortgage-broker/first-home-buyer/#home-loans-tab">Types of Home
                                            Loans</a>
                                    </div>
                                </div>
                                <div class="nested-accordion-item">
                                    <div class="nested-accordion-header">
                                        <a href="/mortgage-broker/your-next-home/">Buying Your Next Home</a>
                                        <div class="nested-accordion-button">
                                            <img
                                                src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                        </div>
                                    </div>
                                    <div class="nested-accordion-content">
                                        <a href="/mortgage-broker/your-next-home/#purchasing-options-tab">Purchasing
                                            Options</a>
                                        <a href="/mortgage-broker/your-next-home/#renovation-options-tab">Renovation
                                            Options</a>
                                        <a href="/mortgage-broker/your-next-home/#sell-or-rent-tab">Should I sell or
                                            rent?</a>
                                    </div>
                                </div>
                            </div>
                            <a href="/mortgage-broker/property-investment/">Property Investment</a>
                            <a href="/mortgage-broker/refinance-home-loan/">Refinancing Your Home Loan</a>
                            <a href="/mortgage-broker/home-loans-for-professionals/">Home Loans for Professionals</a>
                            <a href="/mortgage-broker/self-employed-home-loan/">Self Employed Finance</a>
                            <a href="/mortgage-broker/pay-off-your-loan-sooner/">Pay Off Your Loan Sooner</a>
                            <a href="/relocation-home-loan/">Reloaction Loan Services</a>
                            <a href="/guarantor-home-loans/">Guarantor Home Loans</a>
                        </div>
                    </div>
                    <!-- Wealth -->
                    <div class="popup-menu-link-container mobile-style">
                        <div class="popup-menu-link mobile-style">
                            <div class="popup-link-accordion">
                                <a href="/financial-advisor/">Wealth</a>
                                <div class="popup-link-accordion-button">
                                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                </div>
                            </div>
                        </div>
                        <div class="popup-link-accordion-content mobile-style">
                            <div class="nested-accordion">
                                <div class="nested-accordion-item">
                                    <div class="nested-accordion-header">
                                        <a href="#">Your Goals</a>
                                        <div class="nested-accordion-button">
                                            <img
                                                src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                        </div>
                                    </div>
                                    <div class="nested-accordion-content">
                                        <a href="/financial-independence/">Achieve financial
                                            independence and retire early</a>
                                        <a href="/be-debt-free/">Be debt free</a>
                                        <a href="/buy-an-investment-property/">Buy an investment
                                            property</a>
                                        <a href="/buy-a-home/">Buy a home</a>
                                        <a href="/provide-your-children-the-best-possible-future/">Provide your children
                                            the best possible future</a>
                                        <a href="/plan-for-your-future/">Plan for your future</a>
                                        <a href="/protect-yourself-and-your-family/">Protect yourself and
                                            your family</a>
                                        <a href="/save-for-a-large-future-expense/">Save for a large future
                                            expense</a>
                                        <a href="/simplify-your-finances/">Simplify your
                                            finances</a>
                                        <a href="/accessing-super/">Start accesing your
                                            super</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        if ($wealth_query->have_posts()) :
                            while ($wealth_query->have_posts()) : $wealth_query->the_post();
                                // Get the permalink (URL) for the current page.
                                $page_url = get_permalink();
                        
                                // Get the title of the current page.
                                $page_title = get_the_title();
                                ?>

                            <!-- Output the link with the page's URL and title -->
                            <a href="<?php echo esc_url($page_url); ?>"><?php echo esc_html($page_title); ?></a>

                            <?php
                            endwhile;
                                wp_reset_postdata();
                            endif;
                        ?>

                        </div>
                    </div>
                    <!-- Commercial -->
                    <div class="popup-menu-link-container mobile-style">
                        <div class="popup-menu-link mobile-style">
                            <div class="popup-link-accordion">
                                <a href="/business-loan-broker/">Commercial</a>
                                <div class="popup-link-accordion-button">
                                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                </div>
                            </div>
                        </div>
                        <div class="popup-link-accordion-content mobile-style">
                            <?php
                        if ($commercial_query->have_posts()) :
                            while ($commercial_query->have_posts()) : $commercial_query->the_post();
                                // Get the permalink (URL) for the current page.
                                $page_url = get_permalink();
                        
                                // Get the title of the current page.
                                $page_title = get_the_title();
                                ?>

                            <!-- Output the link with the page's URL and title -->
                            <a href="<?php echo esc_url($page_url); ?>"><?php echo esc_html($page_title); ?></a>

                            <?php
                            endwhile;
                                wp_reset_postdata();
                            endif;
                        ?>
                        </div>
                    </div>
                    <!-- Car & Equipment -->
                    <div class="popup-menu-link-container">
                        <div class="popup-menu-link">
                            <div class="popup-link-accordion">
                                <a href="/car-equipment-finance/">Vehicle & Equipment Finance</a>
                                <div class="popup-link-accordion-button">
                                    <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                </div>
                            </div>
                        </div>
                        <div class="popup-link-accordion-content">
                            <div class="nested-accordion">
                                <div class="nested-accordion-item">
                                    <div class="nested-accordion-header">
                                        <a href="/vehicle-equipment-finance/car-loans/">Car Loans</a>
                                        <div class="nested-accordion-button">
                                            <img
                                                src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-1.svg" />
                                        </div>
                                    </div>
                                    <div class="nested-accordion-content">
                                        <a href="/vehicle-equipment-finance/car-loans/#personal-car-tab">Personal Car
                                            Loans</a>
                                        <a href="/vehicle-equipment-finance/car-loans/#business-car-loans">Business Car
                                            Loans</a>
                                    </div>
                                </div>
                            </div>
                            <a href="/vehicle-equipment-finance/boat-loans/">Boat Loans</a>
                            <a href="/vehicle-equipment-finance/caravan-loans/">Caravan Loans</a>
                            <a href="/vehicle-equipment-finance/asset-finance/">Commercial Asset Finance</a>
                            <a href="/truck-finance/">Truck Finance</a>
                        </div>
                    </div>
                </div>
                <!-- END THIRD SECTION - TABLET UP -->

                <!-- FOURTH SECTION - TABLET UP -->
                <div class="popup-menu-bottom">
                    <div class="popup-menu-search">
                        <form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                            <input type="text" value="<?php echo get_search_query(); ?>" name="s"
                                placeholder="Search...">
                            <button type="submit" id="searchsubmit">
                                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/icons8-search.svg"
                                    alt="Search Icon" />
                            </button>
                        </form>
                    </div>
                    <div class="popup-menu-socials">
                        <a href="https://www.facebook.com/inovayt.your.finance" target="_blank">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Facebook-Original.svg"
                                alt="Facebook Icon" />
                        </a>
                        <a href="https://www.linkedin.com/company/inovayt-pty-ltd/?originalSubdomain=au"
                            target="_blank">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/LinkedIn-Original.svg"
                                alt="LinkedIn Icon" />
                        </a>
                        <a href="https://www.instagram.com/inovayt.your.finance/" target="_blank"> <img
                                src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Instagram-Original.svg"
                                alt="Instagram Icon" /></a>
                        <a href="https://www.youtube.com/channel/UCXLaH_p9WLy6PDfmYzIFYnA" target="_blank">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/YouTube-Original.svg"
                                alt="Youtube Icon" />
                        </a>
                        <a href="https://www.tiktok.com/@inovayt.your.finance" target="_blank">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/Vector-2.svg"
                                alt="Tiktok Icon" class="tik-tok" />
                        </a>
                    </div>
                </div>
                <!-- END FOURTH SECTION - TABLET UP -->
            </div>
        </div>
    </div>

    <!-- END HAMBURGER - POPUP -->

    <!-- HEADER -->
    <header class="header">
        <div class="responsive-container">
            <div class="header__inner">
                <div class="header__inner-left">
                    <a href="/"><img src="https://www.inovayt.com.au/wp-content/uploads/2024/01/INO_Web_Logo-01.png"
                            alt="Inovayt Logo" /></a>
                </div>
                <div class="header__inner-right">
                    <?php
                    wp_nav_menu($headerMainMenu);
                ?>
                    <div class="header__inner-right-buttons">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/icons8-phone-100-1.svg" alt=""
                            class="header__inner-right-buttons-call-img" />
                        <a href="tel:1300354355">1300 354 355</a>
                        <div class="header__inner-right-buttons search">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/icons8-search.svg" />
                        </div>
                        <div id="open-popup-menu" class="header__inner-right-buttons hamburger">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/01/menu-08-1.svg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- SEARCH OVERLAY -->
    <div id="search-overlay">
        <div class="search-overlay-inner">
            <div id="close-search-overlay">
                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/icons8-close-1.svg"
                    alt="Close Button" />
            </div>
            <div class="search-overlay-search">
                <form role="search" method="get" id="search-overlay-form"
                    action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="text" value="<?php echo get_search_query(); ?>" name="s" placeholder="Search...">
                    <button type="submit" id="searchsubmit">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/08/icons8-search-2.svg"
                            alt="Search Icon" />
                    </button>
                </form>
            </div>
        </div>
    </div>