<?php

$page_id = get_the_ID();

// post fields
$featured_image_url = get_the_post_thumbnail_url($post_id, 'full'); // 'full' specifies the image size, change as needed
$title = get_the_title();

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
$alternate_box_image_two = get_field('alternating_box_image_-_two', $page_id);
$alternate_box_title_two = get_field('alternating_box_title_-_two', $page_id);
$alternate_box_content_two = get_field('alternating_box_content_-_two', $page_id);
$alternate_box_button_text_two = get_field('alternating_box_button_text_-_two', $page_id);
$alternate_box_button_link_two = get_field('alternating_box_button_link_-_two', $page_id);
$alternate_box_image_three = get_field('alternating_box_image_-_three', $page_id);
$alternate_box_title_three = get_field('alternating_box_title_-_three', $page_id);
$alternate_box_content_three = get_field('alternating_box_content_-_three', $page_id);
$alternate_box_button_text_three = get_field('alternating_box_button_text_-_three', $page_id);
$alternate_box_button_link_three = get_field('alternating_box_button_link_-_three', $page_id);
$alternate_box_image_four = get_field('alternating_box_image_-_four', $page_id);
$alternate_box_title_four = get_field('alternating_box_title_-_four', $page_id);
$alternate_box_content_four = get_field('alternating_box_content_-_four', $page_id);
$alternate_box_button_text_four = get_field('alternating_box_button_text_-_four', $page_id);
$alternate_box_button_link_four = get_field('alternating_box_button_link_-_four', $page_id);
$alternate_box_image_five = get_field('alternating_box_image_-_five', $page_id);
$alternate_box_title_five = get_field('alternating_box_title_-_five', $page_id);
$alternate_box_content_five = get_field('alternating_box_content_-_five', $page_id);
$alternate_box_button_text_five = get_field('alternating_box_button_text_-_five', $page_id);
$alternate_box_button_link_five = get_field('alternating_box_button_link_-_five', $page_id);
$alternate_box_image_six = get_field('alternating_box_image_-_six', $page_id);
$alternate_box_title_six = get_field('alternating_box_title_-_six', $page_id);
$alternate_box_content_six = get_field('alternating_box_content_-_six', $page_id);
$alternate_box_button_text_six = get_field('alternating_box_button_text_-_six', $page_id);
$alternate_box_button_link_six = get_field('alternating_box_button_link_-_six', $page_id);
$alternate_box_image_seven = get_field('alternating_box_image_-_seven', $page_id);
$alternate_box_title_seven = get_field('alternating_box_title_-_seven', $page_id);
$alternate_box_content_seven = get_field('alternating_box_content_-_seven', $page_id);
$alternate_box_button_text_seven = get_field('alternating_box_button_text_-_seven', $page_id);
$alternate_box_button_link_seven = get_field('alternating_box_button_link_-_seven', $page_id);
$alternate_box_image_eight = get_field('alternating_box_image_-_eight', $page_id);
$alternate_box_title_eight = get_field('alternating_box_title_-_eight', $page_id);
$alternate_box_content_eight = get_field('alternating_box_content_-_eight', $page_id);
$alternate_box_button_text_eight = get_field('alternating_box_button_text_-_eight', $page_id);
$alternate_box_button_link_eight = get_field('alternating_box_button_link_-_eight', $page_id);
$alternate_box_image_nine = get_field('alternating_box_image_-_nine', $page_id);
$alternate_box_title_nine = get_field('alternating_box_title_-_nine', $page_id);
$alternate_box_content_nine = get_field('alternating_box_content_-_nine', $page_id);
$alternate_box_button_text_nine = get_field('alternating_box_button_text_-_nine', $page_id);
$alternate_box_button_link_nine = get_field('alternating_box_button_link_-_nine', $page_id);
$alternate_box_image_twelve = get_field('alternating_box_image_-_twelve', $page_id);
$alternate_box_title_twelve = get_field('alternating_box_title_-_twelve', $page_id);
$alternate_box_content_twelve = get_field('alternating_box_content_-_twelve', $page_id);
$alternate_box_button_text_twelve = get_field('alternating_box_button_text_-_twelve', $page_id);
$alternate_box_button_link_twelve = get_field('alternating_box_button_link_-_twelve', $page_id);

// custom fields
$location = get_field('team_location', $page_id);
$office_location = get_field('office_location', $page_id);
$faq_title = get_field('faq_section_title', $page_id);
$faq_copy = get_field('faq_section_copy', $page_id);
$meet_team_title = get_field('meet_team_title', $page_id);
$review_widget = get_field('widget_review_shortcode', $page_id);

// top banner
$banner_subtitle = get_field('banner_subtitle', $page_id);
$banner_content = get_field('banner_content', $page_id);
$banner_image_one = get_field('banner_image_one', $page_id);
$banner_image_two = get_field('banner_image_two', $page_id);
$banner_image_three = get_field('banner_image_three', $page_id);
$banner_image_four = get_field('banner_image_four', $page_id);
$banner_image_five = get_field('banner_image_five', $page_id);

// bottom banner
$bottom_banner_image = get_field('bottom_banner_-_image', $page_id);
$bottom_banner_form_title = get_field('bottom_banner_-_form_title', $page_id);
$bottom_banner_form_shortcode = get_field('bottom_banner_-_form_shortcode', $page_id);
$bottom_banner_title = get_field('bottom_banner_-_banner_title', $page_id);

// queries
$guides = array(
    'post_type'      => 'guides',
    'posts_per_page' => -1,
);

$mortgage_broker_melbourne = array(
    'post_type'      => 'team',          
    'posts_per_page' => -1,                  
    'tax_query'      => array(
        array(
            'taxonomy' => 'category',       
            'field'    => 'slug',           
            'terms'    => 'Mortgage Broker Melbourne',
        ),
    ),
);

$mortgage_broker_brisbane = array(
    'post_type'      => 'team',          
    'posts_per_page' => -1,                  
    'tax_query'      => array(
        array(
            'taxonomy' => 'category',       
            'field'    => 'slug',           
            'terms'    => 'Mortgage Broker Brisbane',
        ),
    ),
);

$mortgage_broker_newcastle = array(
    'post_type'      => 'team',          
    'posts_per_page' => -1,                  
    'tax_query'      => array(
        array(
            'taxonomy' => 'category',       
            'field'    => 'slug',           
            'terms'    => 'Mortgage Broker Newcastle',
        ),
    ),
);

$guides_query = new WP_Query( $guides );
$mortgage_broker_melbourne_query = new WP_Query($mortgage_broker_melbourne);
$mortgage_broker_brisbane_query = new WP_Query($mortgage_broker_brisbane);
$mortgage_broker_newcastle_query = new WP_Query($mortgage_broker_newcastle);

function setLocationLink($location) {
    $location_link = '';

    if ($location === 'Melbourne' || $location === 'Geelong') {
        $location_link = 'https://www.google.com/maps/place/Inovayt/@-37.8086119,144.9502199,17z/data=!3m1!5s0x6ad65d37d2f1ba09:0x6029e62c7a81aa34!4m6!3m5!1s0x6ad65d3ea842be63:0x9e6734bb87f67a42!8m2!3d-37.8086119!4d144.9527948!16s%2Fg%2F11g_37dnt?entry=ttu&g_ep=EgoyMDI0MTAxNS4wIKXMDSoASAFQAw%3D%3D';
    } elseif ($location === 'Brisbane') {
        $location_link = 'https://www.google.com/maps/place/Inovayt+-+Mortgage+Broker+%26+Financial+Advisor+Brisbane/@-27.4530053,153.0315045,17z/data=!3m1!4b1!4m6!3m5!1s0x6b93e320d099a1e7:0x56005dfc99f061a0!8m2!3d-27.4530101!4d153.0340848!16s%2Fg%2F11gyywzjzy?entry=ttu&g_ep=EgoyMDI0MTAxNS4wIKXMDSoASAFQAw%3D%3D';
    } elseif ($location === 'Sunshine Coast') {
        $location_link = 'https://www.google.com/maps/place/Inovayt+-+Mortgage+Broker+%26+Financial+Advisor+Sunshine+Coast/@-26.6793152,153.1163827,17z/data=!3m1!4b1!4m6!3m5!1s0x6b91057a28f56513:0xe21cbfb213076859!8m2!3d-26.67932!4d153.118963!16s%2Fg%2F11mr8x5f5g?entry=ttu&g_ep=EgoyMDI0MTAxNS4wIKXMDSoASAFQAw%3D%3D';
    } elseif ($location === 'Adelaide') {
        $location_link = 'https://www.google.com/maps/place/Inovayt+-+Mortgage+Broker+%26+Financial+Advisor+Adelaide/@-34.9250837,138.6041343,17z/data=!3m1!4b1!4m6!3m5!1s0x6ab0cf15076544b7:0xbbf4265aa0760cd0!8m2!3d-34.9250881!4d138.6067146!16s%2Fg%2F11s9kymzlx?entry=ttu&g_ep=EgoyMDI0MTAxNS4wIKXMDSoASAFQAw%3D%3D';
    } elseif ($location === 'Sydney' || $location === 'Canberra') {
        $location_link = 'https://www.google.com/maps/place/Inovayt+-+Mortgage+Broker+%26+Financial+Advisor+Sydney/@-33.8770841,151.2015604,17z/data=!3m2!4b1!5s0x6b12ae3cdda3f96d:0xe3e4275ee1f35c68!4m6!3m5!1s0x6b12af1985840645:0x7bb464a8af7eafee!8m2!3d-33.8770886!4d151.2064259!16s%2Fg%2F11j_00k5d6?entry=ttu&g_ep=EgoyMDI0MTAxNS4wIKXMDSoASAFQAw%3D%3D';
    } elseif ($location == 'Central Coast' || $location == 'Hunter Valley' || $location == 'Lake Macquarie' || $location == 'Hunter Valley' || $location == 'Nelson Bay' || $location == 'Newcastle') {
        $location_link = 'https://www.google.com/maps/place/Inovayt+Newcastle,+Hunter+Valley+%26+Central+Coast/@-32.911489,151.7063211,17z/data=!3m1!4b1!4m6!3m5!1s0x6b73157371a30c37:0xff3f1f9422763ee1!8m2!3d-32.9114935!4d151.7089014!16s%2Fg%2F11jb7t6cqk?entry=ttu&g_ep=EgoyMDI0MTAxNS4wIKXMDSoASAFQAw%3D%3D';
    }

    return $location_link;
}

$location_link = setLocationLink($location);
?>

<section class="service-locations-banner">
    <img class="service-locations-banner__background" src="<?php echo $featured_image_url ?>"
        alt="Private Banking Background Image" />

    <div class="service-locations-banner__overlay"></div>

    <section class="responsive-container">
        <div class="service-locations-banner__content">
            <div class="service-locations-banner__content-left">
                <div class="service-locations-banner__content-left-title">
                    <h3 style="margin-bottom: 0px;"><?php echo $title ?></h3>
                    <h1 style="margin-bottom:0px;"><?php echo $banner_subtitle?></h1>
                    <?php echo $banner_content ?>
                    <a class="talk-to-an-expert-btn"><button>Talk to an expert</button></a>
                </div>
            </div>
            <div class="service-locations-banner__content-right">
                <div>
                    <img src="<?php echo $banner_image_one ?>" />
                    <img src="<?php echo $banner_image_two ?>" />
                </div>
                <div>
                    <img src="<?php echo $banner_image_three ?>" />
                    <img src="<?php echo $banner_image_four ?>" />
                    <img src="<?php echo $banner_image_five ?>" />
                </div>
                <div>
                    <?php echo do_shortcode($review_widget) ?>
                </div>
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

<div class="responsive-container">
    <div class="service-locations-review__container">
        <h2 style="margin-bottom: 0px;">But just dont take it from us, <br /> here's what our clients have to say...
        </h2>
        <?php echo do_shortcode('[trustindex data-widget-id=f414bd1949df459cf05f74dedd]'); ?>
        <a class="talk-to-an-expert-btn"><button>Talk to an expert</button></a>
    </div>
</div>

<section>
    <?php get_template_part('template-parts/elements/alternate-box/alternate-box-left', null, array('image' => $alternate_box_image_one, 'title' => $alternate_box_title_one, 'button_link' => $alternate_box_button_link_one, 'button_text' => $alternate_box_button_text_one, 'content' => $alternate_box_content_one, 'talk_to_expert' => 'talk-to-an-expert-btn', 'background_colour' => 'white')); ?>
</section>

<div class="responsive-container">
    <div class="service-locations-steps">
        <h2>How do we do work? <br /> 4 easy steps to get your foot in the door</h2>
        <div class="service-locations-steps__content">
            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/10/Line-21.png"
                class="service-locations-steps__line" />
            <div class="service-locations-steps__content-item">
                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/10/Group-312.png" />
                <h3 style="margin-bottom: 0px;">Discovery</h3>
                <p style="margin-bottom: 0px;">We know that one size doesn’t fit all. Let us take a moment to
                    establish
                    your individual financial
                    goals.</p>
            </div>
            <div class="service-locations-steps__content-item">
                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/10/Group-313.png" />
                <h3 style="margin-bottom: 0px;">Submission</h3>
                <p style="margin-bottom: 0px;">After reviewing your financial position, we’ll provide you with the
                    best
                    options to make your
                    decision.</p>
            </div>
            <div class="service-locations-steps__content-item">
                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/10/Group-314.png" />
                <h3 style="margin-bottom: 0px;">Approval</h3>
                <p style="margin-bottom: 0px;">Once approved by your chose lender, we finalise approvals and
                    organise
                    formal paperwork for sign off.
                </p>
            </div>
            <div class="service-locations-steps__content-item">
                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/10/Group-315.png" />
                <h3 style="margin-bottom: 0px;">
                    Settlement
                </h3>
                <p style="margin-bottom: 0px;">We’ll carry out the settlement process for you with ongoing support.
                </p>
            </div>
        </div>
        <button class="talk-to-an-expert-btn">Get Started</button>
    </div>
</div>

<section class="responsive-container">
    <div class="alternate-box-right service-locations">
        <div class="alternate-box-right__left">
            <?php if ($location == 'Melbourne' || $location == 'Geelong'): ?>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12608.8294087844!2d144.9527948!3d-37.8086119!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9e6734bb87f67a42!2sInovayt!5e0!3m2!1sen!2sau!4v1655360089567!5m2!1sen!2sau"
                style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php endif; ?>
            <?php if ($location == 'Brisbane'): ?>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3543.454717134246!2d153.02473381414956!3d-27.361510982936416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b93e320d099a1e7%3A0x56005dfc99f061a0!2sInovayt%20Brisbane!5e0!3m2!1sen!2sau!4v1655360835878!5m2!1sen!2sau"
                style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php endif; ?>
            <?php if ($location == 'Sunshine Coast'): ?>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.0363487552413!2d153.1147358147145!3d-26.67931993743905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b91057a28f56513%3A0xe21cbfb213076859!2sInovayt%20Sunshine%20Coast!5e0!3m2!1sen!2sau!4v1655360910461!5m2!1sen!2sau"
                style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php endif; ?>
            <?php if ($location == 'Adelaide'): ?>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.257291124221!2d138.604525914647!3d-34.925083682078416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0ced186953699%3A0x79fa0fd83a7b4389!2slevel%202%2F70%20Hindmarsh%20Square%2C%20Adelaide%20SA%205000!5e0!3m2!1sen!2sau!4v1666237193540!5m2!1sen!2sau"
                style="border:0; width: 100%; height: 100%;" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php endif; ?>
            <?php if ($location == 'Canberra' || $location == 'Sydney'): ?>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4236.610054296963!2d151.20383348372306!3d-33.87737709091559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12af40a32f8f7d%3A0x8ea97b6f792061c2!2s680%20George%20St%2C%20Haymarket%20NSW%202000!5e0!3m2!1sen!2sau!4v1666237255395!5m2!1sen!2sau"
                style="border:0; width: 100%; height: 100%;" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php endif; ?>
            <?php if ($location == 'Central Coast' || $location == 'Hunter Valley' || $location == 'Lake Macquarie' || $location == 'Hunter Vallery' || $location == 'Nelson Bay' || $location == 'Newcastle'): ?>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.813683577957!2d151.76451269999998!3d-32.929520499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b73144477487159%3A0x26ccca2a056c4682!2s2%20Dick%20St%2C%20Newcastle%20West%20NSW%202302!5e0!3m2!1sen!2sau!4v1679634632683!5m2!1sen!2sau"
                style="border:0; width: 100%; height: 100%;" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php endif; ?>
        </div>
        <div class="alternate-box-right__right">
            <div class="alternate-box-right__right-left">
                <img src="https://inovayt.com.au/wp-content/uploads/2020/10/INO_Web_Icons-10.svg" alt="Map Icon" />
                <span style="margin-bottom: 0px;">Office Location: <br />
                    <?php echo $office_location ?>
                </span>
                <div class="alternate-box-right__right-left-link">
                    <a href="<?php echo $location_link ?>">Get directions <img
                            src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-arrow-30-1.png" alt=""
                            style="width: 30px; height: 30px;" /></a>
                </div>
            </div>
            <div class="alternate-box-right__right-right">
                <img src="https://inovayt.com.au/wp-content/uploads/2020/10/INO_Web_Icons-08.svg" alt="Map Icon" />
                <span>Get in touch <br />
                    <a href="tel:1300354355" style="font-weight: bold;">1300 354 355</a>
                </span>
                <div class="alternate-box-right__right-right-link">
                    <a href="tel:1300354355">Call now <img
                            src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-arrow-30-1.png" alt=""
                            style="width: 30px; height: 30px;" /></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="responsive-container">
    <div class="alternate-box-right service-locations-slider desktop-only" style="background-color: white;">
        <div class="alternate-box-right__left">
            <div class="alternate-box-right__left-content reduced-padding">
                <h2>Access competetive rates from 40+ leading lenders</h2>
                <p>We leverage our relationships with Australia’s highest performing lenders to secure the best
                    rates
                    for
                    our clients. Let us find the most suitable financial products for your business and personal
                    needs.
                </p>
                <a class="talk-to-an-expert-btn"><button>Talk to an expert</button></a>
            </div>
        </div>
        <div class="alternate-box-right__right service-locations-slider">
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
                <p>We leverage our relationships with Australia’s highest performing lenders to secure the best
                    rates
                    for
                    our clients. Let us find the most suitable financial products for your business and personal
                    needs.
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


<?php if($alternate_box_title_two): ?>
<section>
    <?php get_template_part('template-parts/elements/alternate-box/alternate-box-right', null, array('image' => $alternate_box_image_two, 'title' => $alternate_box_title_two, 'button_link' => $alternate_box_button_link_two, 'button_text' => $alternate_box_button_text_two, 'content' => $alternate_box_content_two, 'talk_to_an_expert' => '', 'background_colour' => 'white')); ?>
</section>
<?php endif;?>

<?php if($alternate_box_title_three): ?>
<section>
    <?php get_template_part('template-parts/elements/alternate-box/alternate-box-left', null, array('image' => $alternate_box_image_three, 'title' => $alternate_box_title_three, 'button_link' => $alternate_box_button_link_three, 'button_text' => $alternate_box_button_text_three, 'content' => $alternate_box_content_three, 'talk_to_an_expert' => '', 'background_colour' => 'white')); ?>
</section>
<?php endif; ?>

<?php if($alternate_box_title_four): ?>
<section>
    <?php get_template_part('template-parts/elements/alternate-box/alternate-box-right', null, array('image' => $alternate_box_image_four, 'title' => $alternate_box_title_four, 'button_link' => $alternate_box_button_link_four, 'button_text' => $alternate_box_button_text_four, 'content' => $alternate_box_content_four, 'talk_to_an_expert' => '', 'background_colour' => 'white')); ?>
</section>
<?php endif; ?>

<?php if($alternate_box_title_five): ?>
<section>
    <?php get_template_part('template-parts/elements/alternate-box/alternate-box-left', null, array('image' => $alternate_box_image_five, 'title' => $alternate_box_title_five, 'button_link' => '', 'button_text' => $alternate_box_button_text_five, 'content' => $alternate_box_content_five, 'talk_to_expert' => 'talk-to-an-expert-btn', 'background_colour' => 'white')); ?>
</section>
<?php endif; ?>

<?php if($alternate_box_title_six): ?>
<section>
    <?php get_template_part('template-parts/elements/alternate-box/alternate-box-right', null, array('image' => $alternate_box_image_six, 'title' => $alternate_box_title_six, 'button_link' => '', 'button_text' => $alternate_box_button_text_six, 'content' => $alternate_box_content_six, 'talk_to_expert' => 'talk-to-an-expert-btn', 'background_colour' => 'white')); ?>
</section>
<?php endif; ?>

<?php if($alternate_box_title_seven): ?>
<section>
    <?php get_template_part('template-parts/elements/alternate-box/alternate-box-left', null, array('image' => $alternate_box_image_seven, 'title' => $alternate_box_title_seven, 'button_link' => '', 'button_text' => $alternate_box_button_text_seven, 'content' => $alternate_box_content_seven, 'talk_to_expert' => 'talk-to-an-expert-btn', 'background_colour' => 'white')); ?>
</section>
<?php endif; ?>

<?php if($alternate_box_title_eight): ?>
<section>
    <?php get_template_part('template-parts/elements/alternate-box/alternate-box-right', null, array('image' => $alternate_box_image_eight, 'title' => $alternate_box_title_eight, 'button_link' => '', 'button_text' => $alternate_box_button_text_eight, 'content' => $alternate_box_content_eight, 'talk_to_expert' => 'talk-to-an-expert-btn', 'background_colour' => 'white')); ?>
</section>
<?php endif; ?>

<?php if($alternate_box_title_nine): ?>
<section>
    <?php get_template_part('template-parts/elements/alternate-box/alternate-box-left', null, array('image' => $alternate_box_image_nine, 'title' => $alternate_box_title_nine, 'button_link' => '', 'button_text' => $alternate_box_button_text_nine, 'content' => $alternate_box_content_nine, 'talk_to_expert' => 'talk-to-an-expert-btn', 'background_colour' => 'white')); ?>
</section>
<?php endif; ?>

<div class="responsive-container">
    <section class="service-locations-faqs">
        <h2 style="margin-bottom: 0px;" class="service-locations-faqs__title"><?php echo $faq_title ?></h2>
        <p style="margin-bottom: 0px;" class="service-locations-faqs__subtitle"><?php echo $faq_copy ?></p>
        <div class="service-locations-faqs__accordions">
            <?php get_template_part('template-parts/elements/accordions/accordion-style-one', null, array('post_id' => $page_id, 'headColour' => 'white')); ?>
        </div>
    </section>
</div>

<?php if($alternate_box_title_twelve): ?>
<section>
    <?php get_template_part('template-parts/elements/alternate-box/alternate-box-left', null, array('image' => $alternate_box_image_twelve, 'title' => $alternate_box_title_twelve, 'button_link' => $alternate_box_button_link_twelve, 'button_text' => $alternate_box_button_text_twelve, 'content' => $alternate_box_content_twelve, 'talk_to_an_expert' => '', 'background_colour' => 'white')); ?>
</section>
<?php endif; ?>

<section class="responsive-container">
    <div class="resources-finance-guides service-locations">
        <header>
            <h2 style="margin-bottom: 0px;">Online Finance Guides</h2>
            <div class="resources-finance-guides__meta">
                <p style="margin-bottom: 0px;">Our free finance guides are here to help you prepare for and achieve
                    your financial goals.</p>
                <a href="/finance-resources/" class="desktop-only"><button>View all guides<img style="margin-top: 8px;"
                            src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-arrow-30-3.png" /></button></a>
            </div>
        </header>

        <main class="resources-finance-guides__main desktop-only">

            <button id="nextGuide"><img
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

        <main class="resources-finance-guides__main mobile-only">

            <button id="nextGuideMobile"><img
                    src="https://www.inovayt.com.au/wp-content/uploads/2024/07/right-thin-chevron-svgrepo-com.svg"
                    alt="Next Button Slider" class="slider-buttons__prev" /></button>

            <div class="splide"
                data-splide='{"type":"loop", "perPage":1, "arrows":false, "pagination":false, "gap": "20px", "padding": "0.5rem", "drag": "free", "snap": true }'>
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


<?php if ($location == 'Melbourne' || $location == 'Geelong' ||  $location == 'Brisbane' || $location == 'Sunshine Coast' || $location == 'Newcastle' || $location == 'Nelson Bay' || $location == 'Lake Macquarie' || $location == 'Hunter Valley' || $location == 'Central Coast'): ?>
<div class="responsive-container">
    <section class="service-locations-team desktop-only">
        <h2 style="margin-bottom: 0px;"><?php echo $meet_team_title?></h2>
        <div class="work-with__inner-content-right-splide one" id="work-with-content-one">
            <div id="nextTeam">
                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/chevron.png" alt="">
            </div>
            <div id="prevTeam">
                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/left-chevron.png" alt="">
            </div>
            <div class="splide"
                data-splide='{"type":"loop", "perPage":4, "arrows":false, "pagination":false, "gap": "50px", "padding": "5px", "drag": "free", "snap": true }'>
                <div class="splide__track">
                    <div class="splide__list">
                        <?php if ($location == 'Melbourne' || $location == 'Geelong'): ?>
                        <?php
                            if ($mortgage_broker_melbourne_query->have_posts()) {
                                // Get the number of posts
                                $post_count = $mortgage_broker_melbourne_query->found_posts;

                                // Start the loop
                                while ($mortgage_broker_melbourne_query->have_posts()) {
                                    $mortgage_broker_melbourne_query->the_post();

                                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                    $post_link = get_permalink();
                                    
                                    // Output the title and content of each post
                                    echo '<div class="splide__slide">';
                                    echo '<a href="' . esc_url($post_link) . '" class="work-with__staff">';
                                    echo '<div class="work-with__staff-image">';
                                    echo '<div class="work-with__staff-image-overlay"></div>';
                                    echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . get_the_title() . '" class="staff-thumbnail" />';
                                    echo '</div>';
                                    echo '<div class="work-with__staff-meta">';
                                    echo '<h3 style="margin-bottom: 0px;">' . get_the_title() . '</h3>';
                                    echo '<p>' . get_the_excerpt() . '</p>';
                                    echo '</div>';
                                    echo '</a>';
                                    echo '</div>';
                                }

                                // Restore original Post Data
                                wp_reset_postdata();
                            } else {
                                // No posts found
                                echo '<div class="splide__slide">';
                                echo '<h2>No staff members found in this category.</h2>';
                                echo '</div>';
                            }
                        ?>
                        <?php endif; ?>
                        <?php if ($location == 'Brisbane' || $location == 'Sunshine Coast'): ?>
                        <?php
                                if ($mortgage_broker_brisbane_query->have_posts()) {

                                    // Get the number of posts
                                    $post_count = $mortgage_broker_brisbane_query->found_posts;

                                    // Start the loop
                                    while ($mortgage_broker_brisbane_query->have_posts()) {
                                        $mortgage_broker_brisbane_query->the_post();

                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                        $post_link = get_permalink();
                                        
                                        // Output the title and content of each post
                                        echo '<div class="splide__slide">';
                                        echo '<a href="' . esc_url($post_link) . '" class="work-with__staff">';
                                        echo '<div class="work-with__staff-image">';
                                        echo '<div class="work-with__staff-image-overlay"></div>';
                                        echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . get_the_title() . '"
                                            class="staff-thumbnail" />';
                                        echo '</div>';
                                        echo '<div class="work-with__staff-meta">';
                                        echo '<h3 style="margin-bottom: 0px;">' . get_the_title() . '</h3>';
                                        echo '<p>' . get_the_excerpt() . '</p>';
                                        echo '</div>';
                                        echo '</a>';
                                        echo '</div>';
                                }
                                // Restore original Post Data
                                wp_reset_postdata();
                                } else {
                                // No posts found
                                echo '<div class="splide__slide">';
                                    echo '<h2>No staff members found in this category.</h2>';
                                    echo '</div>';
                                }
                        ?>
                        <?php endif; ?>
                        <?php if ($location == 'Central Coast' || $location == 'Hunter Valley' || $location == 'Lake Macquarie' || $location == 'Hunter Vallery' || $location == 'Nelson Bay' || $location == 'Newcastle'): ?>
                        <?php
                                if ($mortgage_broker_newcastle_query->have_posts()) {
                                    // Start the loop
                                    while ($mortgage_broker_newcastle_query->have_posts()) {

                                        // Get the number of posts
                                        $post_count = $mortgage_broker_newcastle_query->found_posts;
                                    
                                        $mortgage_broker_newcastle_query->the_post();

                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                        $post_link = get_permalink();
                                        
                                        // Output the title and content of each post
                                        echo '<div class="splide__slide">';
                                        echo '<a href="' . esc_url($post_link) . '" class="work-with__staff">';
                                        echo '<div class="work-with__staff-image">';
                                        echo '<div class="work-with__staff-image-overlay"></div>';
                                        echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . get_the_title() . '"
                                            class="staff-thumbnail" />';
                                        echo '</div>';
                                        echo '<div class="work-with__staff-meta">';
                                        echo '<h3 style="margin-bottom: 0px;">' . get_the_title() . '</h3>';
                                        echo '<p>' . get_the_excerpt() . '</p>';
                                        echo '</div>';
                                        echo '</a>';
                                        echo '</div>';
                                }
                                // Restore original Post Data
                                wp_reset_postdata();
                                } else {
                                // No posts found
                                echo '<div class="splide__slide">';
                                    echo '<h2>No staff members found in this category.</h2>';
                                    echo '</div>';
                                }
                        ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-locations-team mobile-only">
        <h2 style="margin-bottom: 0px;"><?php echo $meet_team_title?></h2>
        <div class="work-with__inner-content-right-splide one" id="work-with-content-one">
            <div id="nextTeamMobile">
                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/chevron.png" alt="">
            </div>
            <div id="prevTeamMobile">
                <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/left-chevron.png" alt="">
            </div>
            <div class="splide"
                data-splide='{"type":"loop", "perPage":1, "arrows":false, "pagination":false, "gap": "50px", "padding": "5px", "drag": "free", "snap": true }'>
                <div class="splide__track">
                    <div class="splide__list">
                        <?php if ($location == 'Melbourne' || $location == 'Geelong'): ?>
                        <?php
                                if ($mortgage_broker_melbourne_query->have_posts()) {
                                    // Start the loop
                                    while ($mortgage_broker_melbourne_query->have_posts()) {
                                        $mortgage_broker_melbourne_query->the_post();

                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                        $post_link = get_permalink();
                                        
                                        // Output the title and content of each post
                                        echo '<div class="splide__slide">';
                                        echo '<a href="' . esc_url($post_link) . '" class="work-with__staff">';
                                        echo '<div class="work-with__staff-image">';
                                        echo '<div class="work-with__staff-image-overlay"></div>';
                                        echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . get_the_title() . '"
                                            class="staff-thumbnail" />';
                                        echo '</div>';
                                        echo '<div class="work-with__staff-meta">';
                                        echo '<h3 style="margin-bottom: 0px;">' . get_the_title() . '</h3>';
                                        echo '<p>' . get_the_excerpt() . '</p>';
                                        echo '</div>';
                                        echo '</a>';
                                        echo '</div>';
                                }
                                // Restore original Post Data
                                wp_reset_postdata();
                                } else {
                                // No posts found
                                echo '<div class="splide__slide">';
                                    echo '<h2>No staff members found in this category.</h2>';
                                    echo '</div>';
                                }
                        ?>
                        <?php endif; ?>
                        <?php if ($location == 'Brisbane' || $location == 'Sunshine Coast'): ?>
                        <?php
                                if ($mortgage_broker_brisbane_query->have_posts()) {
                                    // Start the loop
                                    while ($mortgage_broker_brisbane_query->have_posts()) {
                                        $mortgage_broker_brisbane_query->the_post();

                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                        $post_link = get_permalink();
                                        
                                        // Output the title and content of each post
                                        echo '<div class="splide__slide">';
                                        echo '<a href="' . esc_url($post_link) . '" class="work-with__staff">';
                                        echo '<div class="work-with__staff-image">';
                                        echo '<div class="work-with__staff-image-overlay"></div>';
                                        echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . get_the_title() . '"
                                            class="staff-thumbnail" />';
                                        echo '</div>';
                                        echo '<div class="work-with__staff-meta">';
                                        echo '<h3 style="margin-bottom: 0px;">' . get_the_title() . '</h3>';
                                        echo '<p>' . get_the_excerpt() . '</p>';
                                        echo '</div>';
                                        echo '</a>';
                                        echo '</div>';
                                }
                                // Restore original Post Data
                                wp_reset_postdata();
                                } else {
                                // No posts found
                                echo '<div class="splide__slide">';
                                    echo '<h2>No staff members found in this category.</h2>';
                                    echo '</div>';
                                }
                        ?>
                        <?php endif; ?>
                        <?php if ($location == 'Central Coast' || $location == 'Hunter Valley' || $location == 'Lake Macquarie' || $location == 'Hunter Vallery' || $location == 'Nelson Bay' || $location == 'Newcastle'): ?>
                        <?php
                                if ($mortgage_broker_newcastle_query->have_posts()) {
                                    // Start the loop
                                    while ($mortgage_broker_newcastle_query->have_posts()) {
                                        $mortgage_broker_newcastle_query->the_post();

                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                        $post_link = get_permalink();
                                        
                                        // Output the title and content of each post
                                        echo '<div class="splide__slide">';
                                        echo '<a href="' . esc_url($post_link) . '" class="work-with__staff">';
                                        echo '<div class="work-with__staff-image">';
                                        echo '<div class="work-with__staff-image-overlay"></div>';
                                        echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . get_the_title() . '"
                                            class="staff-thumbnail" />';
                                        echo '</div>';
                                        echo '<div class="work-with__staff-meta">';
                                        echo '<h3 style="margin-bottom: 0px;">' . get_the_title() . '</h3>';
                                        echo '<p>' . get_the_excerpt() . '</p>';
                                        echo '</div>';
                                        echo '</a>';
                                        echo '</div>';
                                }
                                // Restore original Post Data
                                wp_reset_postdata();
                                } else {
                                // No posts found
                                echo '<div class="splide__slide">';
                                    echo '<h2>No staff members found in this category.</h2>';
                                    echo '</div>';
                                }
                        ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php endif; ?>

<div class="responsive-container">
    <section class="front-page-awards service-locations">
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
        <div style="padding-top: 30px;">
            <a class="talk-to-an-expert-btn"><button>Talk to an expert</button></a>
        </div>
    </section>
</div>

<?php get_template_part('template-parts/elements/bottom-form-banner', null, array('image' => $bottom_banner_image, 'form_shortcode' => $bottom_banner_form_shortcode, 'form_title' => $bottom_banner_form_title, 'banner_header' => $bottom_banner_title)); ?>

<style>
/* awards */

.front-page-awards.service-locations {
    margin-bottom: 100px;
    padding: 50px;
    text-align: center;
}

/* end awards */

/* guides slider section */

.resources-finance-guides.service-locations {
    background-color: white;
    margin-bottom: 100px;
    margin-top: 0px;
}

.resources-finance-guides.service-locations .resources-finance-guides__main.desktop-only {
    display: block;
}

.resources-finance-guides.service-locations .resources-finance-guides__main.mobile-only {
    display: none;
}

@media screen and (max-width: 768px) {

    .resources-finance-guides.service-locations .resources-finance-guides__main.desktop-only {
        display: none;
    }

    .resources-finance-guides.service-locations .resources-finance-guides__main.mobile-only {
        display: block;
    }

}

/* end guides slider section */

/* alternate box slider */

.alternate-box-left.service-locations-slider {
    margin-top: 100px;
}

.alternate-box-left__right.service-locations-slider {
    background-color: #f7f7f7;
    gap: 20px;
}

.alternate-box-left__right.service-locations-slider img {
    height: 20px;
    width: 20px;
    position: static;
}

.alternate-box-right.service-locations-slider.desktop-only {
    display: flex;
}

.alternate-box-right.service-locations-slider.mobile-only {
    display: none;
}

@media screen and (max-width: 768px) {

    .alternate-box-right.service-locations-slider.desktop-only {
        display: none;
    }

    .alternate-box-right.service-locations-slider.mobile-only {
        display: flex;
        flex-direction: column;
    }

}

.alternate-box-right.service-locations-slider {
    min-height: auto;
}

.alternate-box-right__right.service-locations-slider {
    width: 50%;
    padding-right: 50px;
}

.alternate-box-left__right.service-locations-slider .accordion__styleone-head {
    border-bottom: 3px solid var(--inoblue);
    padding: 24px;
}

.alternate-box-left__right.service-locations-slider .accordion__styleone-head h4 {
    font-size: 18px;
}

.alternate-box-right.service-locations p {
    margin-bottom: 0px;
}

@media screen and (max-width: 1024px) {
    .alternate-box-right__right.service-locations-slider {
        width: 100%;
    }

    .alternate-box-right__right.service-locations-slider .alternate-box-right__right-top .splide .splide__track .splide__list .splide__slide,
    .alternate-box-right__right.service-locations-slider .alternate-box-right__right-bottom .splide .splide__track .splide__list .splide__slide {
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

    .resources-finance-guides.service-locations {
        margin-bottom: 40px;
    }

    .front-page-awards.service-locations {
        margin-bottom: 40px;
        padding: 25px;
    }

    .alternate-box-left.service-locations-slider {
        margin-top: 40px;
        padding-bottom: 0px;
    }

    .alternate-box-left__right.service-locations-slider {
        gap: 5px;
    }

    .alternate-box-left__right.service-locations-slider h2 {
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

/* end alternate box - slider */

/* alternate box */

.alternate-box-right.service-locations {
    min-height: 400px;
}

.alternate-box-right.service-locations .alternate-box-right__left,
.alternate-box-right.service-locations .alternate-box-right__right {
    background-color: white !important;
}

.alternate-box-right.service-locations .alternate-box-right__left {
    padding: 20px;
}

.alternate-box-right.service-locations .alternate-box-right__right {
    display: flex;
    gap: 20px;
    padding: 20px;
}

.alternate-box-right.service-locations .alternate-box-right__right-left-link a,
.alternate-box-right.service-locations .alternate-box-right__right-right-link a {
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: bold;
}

.alternate-box-right.service-locations .alternate-box-right__right .alternate-box-right__right-left,
.alternate-box-right.service-locations .alternate-box-right__right .alternate-box-right__right-right {
    width: 50%;
    display: flex;
    flex-direction: column;
    gap: 20px;

}

.alternate-box-right.service-locations .alternate-box-right__right .alternate-box-right__right-left h3 {
    color: var(--inoblue);
}

.alternate-box-right.service-locations .alternate-box-right__right img {
    position: relative;
    height: 100px;
    width: fit-content;
    object-fit: contain;
}

.alternate-box-right__left-content.reduced-padding {
    padding: 50px;
}

/* accordions */

.service-locations-faqs .accordion__styleone-head {
    border-bottom: 3px solid var(--inoblue);
    padding: 24px;
}

/* end accordions */

.service-locations-banner {
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

.service-locations-banner__background {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
    background-color: white;
}

.service-locations-banner__content {
    display: flex;
    position: relative;
    height: 100%;
    color: white;
    z-index: 1000;
}

.service-locations-banner__dotpoints {
    display: flex;
    align-items: center;
    gap: 16px;
}

.service-locations-banner__dotpoints img {
    min-width: 30px !important;
    min-height: 30px !important;
}

.service-locations-banner__content p {
    margin-bottom: 0px;
}

.service-locations-banner__content-left {
    width: 60%;
}

.service-locations-banner__content-left-title {
    display: flex;
    flex-direction: column;
    gap: 25px;
    max-width: 750px;
}

.service-locations-banner__content-left-title h1 {
    color: white;

}

.service-locations-banner__content-left-title h4 {
    width: 70%;
    color: white !important;
}

.service-locations-banner__content-left-title h3 {
    color: var(--inoblue);
}

.service-locations-banner__content-right {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 20px;
    width: 40%;
}

.service-locations-banner__content-right div {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 32px;
}

.service-locations-banner__content-right img {
    width: 130px;
    height: 130px;
}

.service-locations-banner__overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.4);
}

@media screen and (max-width: 1024px) {
    .service-locations-banner__content {
        flex-direction: column;
        gap: 50px;
    }

    .service-locations-banner__content-left,
    .service-locations-banner__content-right {
        width: 100%;
    }
}

@media screen and (max-width: 768px) {
    .service-locations-banner {
        padding: 80px 0px;
    }

    .service-locations-banner h1 {
        font-size: 33px;
    }

    .service-locations-banner__dotpoints {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        font-size: 18px;
        line-height: 27px;
        font-weight: 700;
    }

    .service-locations-banner__content-left-title {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 25px;
        max-width: 600px;
    }

    .service-locations-banner__content-right div {
        gap: 10px;
    }

    .service-locations-banner__content-right img {
        width: 100px;
        height: 100px;
    }
}

.service-locations-review__container {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 40px;
    padding-top: 100px;
    padding-bottom: 100px;
}

.service-locations-steps {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    background-color: white;
    gap: 40px;
    padding: 50px;
    margin-bottom: 100px;
}

.service-locations-steps__images {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    width: 100%;
}

.service-locations-steps__content {
    position: relative;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    width: 100%;
}

.service-locations-steps__content img {
    height: 120px;
    z-index: 1;
}

.service-locations-steps__line {
    height: fit-content !important;
    width: 80%;
    position: absolute;
    left: 10%;
    top: 20%;
    z-index: 0;
}

.service-locations-steps__content-item {
    display: flex;
    align-items: center;
    flex-direction: column;
    gap: 20px;
}

.service-locations-faqs {
    display: flex;
    align-items: center;
    flex-direction: column;
    gap: 40px;
    margin-bottom: 100px;
}

.service-locations-faqs__title,
.service-locations-faqs__subtitle {
    text-align: center;
}

.service-locations-faqs__accordions {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

.service-locations-team.desktop-only {
    display: flex;
}

.service-locations-team.mobile-only {
    display: none;
}

.service-locations-team {
    position: relative;
    flex-direction: column;
    text-align: center;
    gap: 40px;
    margin-bottom: 100px;
}

@media screen and (max-width: 1024px) {

    .alternate-box-right.service-locations .alternate-box-right__right img {
        height: 70px;
    }

    .service-locations-review__container {
        padding-top: 40px;
        padding-bottom: 40px;
        gap: 15px;
    }

    .service-locations-steps {
        padding: 25px;
        gap: 20px;
    }

    .service-locations-steps__content {
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
    }

    .service-locations-steps__content img {
        height: 60px;
        width: auto;
    }

    .service-locations-steps__line {
        display: none;
    }

    .alternate-box-right.service-locations .alternate-box-right__right {
        flex-direction: column;
    }

    .alternate-box-right.service-locations .alternate-box-right__right .alternate-box-right__right-left,
    .alternate-box-right.service-locations .alternate-box-right__right .alternate-box-right__right-right {
        width: 100%;
    }
}


@media screen and (max-width: 768px) {

    .service-locations-steps {
        margin-bottom: 40px;
    }

    .service-locations-steps__content {
        grid-template-columns: repeat(1, 1fr);
        gap: 40px;
    }

    .service-locations-faqs {
        margin-bottom: 40px;
        gap: 20px;
    }

    .service-locations-faqs__accordions {
        grid-template-columns: repeat(1, 1fr);
        gap: 0px;
    }


    .service-locations-team.desktop-only {
        display: none;
    }

    .service-locations-team.mobile-only {
        display: flex;
    }

    .service-locations-team {
        gap: 20px;
        margin-bottom: 40px;
    }
}
</style>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    let splides = document.querySelectorAll('.splide');

    console.log(splides)

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
                // one: document.getElementById('prevGuide'),
                one: document.getElementById('prevTeam'),
                two: document.getElementById('prevTeamMobile'),
            },
            next: {
                one: document.getElementById('nextGuide'),
                two: document.getElementById('nextTeam'),
                three: document.getElementById('nextTeamMobile'),
                four: document.getElementById('nextGuideMobile'),
            }
        };

        // Bind click events to custom buttons for each Splide instance
        buttons.prev.one.addEventListener('click', function() {
            splideInstances[6].go('-1');
        });
        buttons.next.one.addEventListener('click', function() {
            splideInstances[4].go('+1');
        });
        buttons.next.four.addEventListener('click', function() {
            splideInstances[5].go('+1');
        });
        buttons.next.two.addEventListener('click', function() {
            splideInstances[6].go('+1');
        });
        buttons.prev.two.addEventListener('click', function() {
            splideInstances[7].go('-1');
        });
        buttons.next.three.addEventListener('click', function() {
            splideInstances[7].go('+1');
        });
    }
});
</script>