<?php

$page_id = get_the_ID();

// custom fields
$first_name = get_field('first_name', $page_id);
$last_name = get_field('last_name', $page_id);
$phone = get_field('phone', $page_id);
$email = get_field('email', $page_id);
$location = get_field('location', $page_id);
$image = get_field('image', $image);
$facebook_link = get_field('facebook_link', $page_id);
$linkedin_link = get_field('linkedin_link', $page_id);
$banner_job_title = get_field('banner_-_job_title', $page_id);
$banner_description = get_field('banner_-_description', $page_id);
$award_image_one = get_field('award_-_one', $page_id);
$award_image_two = get_field('award_-_two', $page_id);
$about_description = get_field('about_description', $page_id);
$about_qualifications = get_field('about_-_qualifications', $page_id);
$about_achievements = get_field('about_-_achievements', $page_id);
$about_map = get_field('about_-_map', $page_id);

// bottom banner
$bottom_banner_image = get_field('bottom_banner_-_image', $page_id);
$bottom_banner_form_title = get_field('bottom_banner_-_form_title', $page_id);
$bottom_banner_form_shortcode = get_field('bottom_banner_-_form_shortcode', $page_id);
$bottom_banner_title = get_field('bottom_banner_-_banner_title', $page_id);

// Determine the href value based on the condition
if (!empty($bottom_banner_form_shortcode)) {
    $href_value = '#bottom-form';
} else {
    $href_value = 'mailto:' . $email;
}

// post fields
$post_title = get_the_title();
$featured_image_url = get_the_post_thumbnail_url($post_id, 'full'); // 'full' specifies the image size, change as needed

?>

<div class="single-team-banner">
    <section class="responsive-container single-team">
        <div class="single-team-banner__content">
            <div class="single-team-banner__content-left">
                <h1 style="margin-bottom: 0px;"><?php echo $post_title ?></h1>
                <h3 style="margin-bottom: 0px;"><?php echo $banner_job_title . ' in ' . $location ?></h3>
                <p style="margin-bottom: 0px;" class="tablet-up"><?php echo $banner_description ?></p>
                <?php if (!$bottom_banner_form_shortcode): ?>
                <a class="talk-to-an-expert-btn"><button>Talk to an expert</button></a>
                <?php endif; ?>
                <?php if ($bottom_banner_form_shortcode): ?>
                <a href="<?php echo htmlspecialchars($href_value); ?>"><button>Speak with
                        <?php echo $first_name ?></button></a>
                <?php endif; ?>
                <div class="single-team__cards">
                    <a href="tel:<?php echo $phone ?>" class="single-team__card">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2020/10/INO_Web_Icons-08.svg"
                            alt="Phone Icon" class="single-team__card-icon" />
                        <div class="single-team__card-meta">
                            <p style="margin-bottom: 0px;">Phone</p>
                            <span><?php echo $phone ?></span>
                        </div>
                    </a>
                    <a href="mailto:info@inovayt.com.au" class="single-team__card">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/01/INO_Brand-Icons-08.svg"
                            alt="Email Icon" class="single-team__card-icon" />
                        <div class="single-team__card-meta">
                            <p style="margin-bottom: 0px;">Email</p>
                            <span><?php echo $email ?></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="single-team-banner__content-right">
                <img src="<?php echo $image ?>" alt="<?php echo $first_name . ' ' . $last_name ?>"
                    class="single-team-banner__content-right-person" />
                <div class="single-team-banner__awards">
                    <div class="single-team__awards">
                        <?php if($award_image_two): ?>
                        <img src="<?php echo $award_image_two ?>" alt="Inovayt Broker Award" />
                        <?php endif; ?>
                        <?php if($award_image_one): ?>
                        <img src="<?php echo $award_image_one ?>" alt="Inovayt Broker Award" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="single-team-about">
    <section class="responsive-container">
        <div class="single-team-about__content">
            <div class="single-team-about__content-top">
                <div class="single-team-about__content-top-left">
                    <h2 style="margin-bottom: 0px;">About <?php echo $first_name ?></h2>
                    <p style="margin-bottom: 0px;"><?php echo $about_description ?></p>
                </div>
                <div class="single-team-about__content-top-right">
                    <?php if ($about_qualifications): ?>
                    <div class="single-team__qualifications">
                        <header>
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2020/11/INO_Web_Icons-19-01.svg"
                                alt="Qualifications Icon" />
                            <h2 style="margin-bottom: 0px;">Qualifications</h2>
                        </header>
                        <p><?php echo $about_qualifications ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if ($about_achievements): ?>
                    <div class="single-team__achievements">
                        <header>
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2020/11/INO_Web_Icons-20-01.svg"
                                alt="Achievements Icon" />
                            <h2 style="margin-bottom: 0px;">Achievements</h2>
                        </header>
                        <p><?php echo $about_achievements ?></p>
                    </div>
                    <?php endif; ?>
                    <div class="single-team__awards  mobile">
                        <?php if($award_image_two): ?>
                        <img src="<?php echo $award_image_two ?>" alt="Inovayt Broker Award" />
                        <?php endif; ?>
                        <?php if($award_image_one): ?>
                        <img src="<?php echo $award_image_one ?>" alt="Inovayt Broker Award" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="single-team-about__content-bottom">

                <div class="single-team-about__content-bottom-left">
                    <div class="single-team-horizontal-border"></div>
                    <div class="single-team-about__phone">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2020/10/INO_Web_Icons-08.svg"
                            alt="Phone Icon" />
                        <div class="single-team-about__contact">
                            <p>Phone</p>
                            <h3><?php echo $phone ?></h3>
                        </div>
                    </div>
                    <div class="single-team-about__email">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2020/10/INO_Web_Icons-09.svg"
                            alt="Email Icon" />
                        <div class="single-team-about__contact">
                            <p style="margin-bottom: 0px;">Email</p>
                            <h3><?php echo $email ?></h3>
                        </div>
                    </div>
                    <div class="single-team-about__location">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2020/10/INO_Web_Icons-10.svg"
                            alt="Location Icon" />
                        <div class="single-team-about__contact">
                            <p style="margin-bottom: 0px;">Location</p>
                            <h3 style="margin-bottom: 0px;"><?php echo $location ?></h3>
                        </div>
                    </div>
                    <div class="single-team-horizontal-border"></div>
                    <div class="single-team-socials">
                        <div class="single-team-socials__content">
                            <p style="margin-bottom: 0px;">Follow <?php echo $first_name ?> on</p>
                            <a href="<?php $facebook_link ?>" target="_blank">
                                <img src="https://www.inovayt.com.au/wp-content/uploads/2020/10/INO_Web_Icon-FB-01.svg"
                                    alt="Facebook Icon" />
                            </a>
                            <a href="<?php $linkedIn_link ?>" target="_blank">
                                <img src="https://www.inovayt.com.au/wp-content/uploads/2020/10/INO_Web_Icon-IN-01.svg"
                                    alt="LinkedIn Icon" />
                            </a>
                        </div>
                        <?php if (!$bottom_banner_form_shortcode): ?>
                        <a class="talk-to-an-expert-btn"><button>Talk to an expert</button></a>
                        <?php endif; ?>
                        <?php if ($bottom_banner_form_shortcode): ?>
                        <a href="<?php echo htmlspecialchars($href_value); ?>"><button>Speak with
                                <?php echo $first_name ?></button></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="single-team-about__content-bottom-right">
                    <?php if ($location == 'Melbourne' || $location == 'Geelong'): ?>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12608.8294087844!2d144.9527948!3d-37.8086119!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9e6734bb87f67a42!2sInovayt!5e0!3m2!1sen!2sau!4v1655360089567!5m2!1sen!2sau"
                        style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php endif; ?>
                    <?php if ($location == 'Brisbane'): ?>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3543.454717134246!2d153.02473381414956!3d-27.361510982936416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b93e320d099a1e7%3A0x56005dfc99f061a0!2sInovayt%20Brisbane!5e0!3m2!1sen!2sau!4v1655360835878!5m2!1sen!2sau"
                        width="400" height="320" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php endif; ?>
                    <?php if ($location == 'Sunshine Coast'): ?>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.0363487552413!2d153.1147358147145!3d-26.67931993743905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b91057a28f56513%3A0xe21cbfb213076859!2sInovayt%20Sunshine%20Coast!5e0!3m2!1sen!2sau!4v1655360910461!5m2!1sen!2sau"
                        width="400" height="320" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php endif; ?>
                    <?php if ($location == 'Adelaide'): ?>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.257291124221!2d138.604525914647!3d-34.925083682078416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0ced186953699%3A0x79fa0fd83a7b4389!2slevel%202%2F70%20Hindmarsh%20Square%2C%20Adelaide%20SA%205000!5e0!3m2!1sen!2sau!4v1666237193540!5m2!1sen!2sau"
                        width="600" height="320" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php endif; ?>
                    <?php if ($location == 'Canberra' || $location == 'Sydney'): ?>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4236.610054296963!2d151.20383348372306!3d-33.87737709091559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12af40a32f8f7d%3A0x8ea97b6f792061c2!2s680%20George%20St%2C%20Haymarket%20NSW%202000!5e0!3m2!1sen!2sau!4v1666237255395!5m2!1sen!2sau"
                        width="600" height="320" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php endif; ?>
                    <?php if ($location == 'Central Coast' || $location == 'Hunter Valley' || $location == 'Lake Macquarie' || $location == 'Hunter Vallery' || $location == 'Nelson Bay' || $location == 'Newcastle'): ?>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.813683577957!2d151.76451269999998!3d-32.929520499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b73144477487159%3A0x26ccca2a056c4682!2s2%20Dick%20St%2C%20Newcastle%20West%20NSW%202302!5e0!3m2!1sen!2sau!4v1679634632683!5m2!1sen!2sau"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php if (!$bottom_banner_form_shortcode): ?>
<div class="single-team-cta">
    <div class="responsive-container">
        <div class="single-team-cta__inner">
            <h2>Financial solutions as individual as you</h2>
            <a class="talk-to-an-expert-btn"><button>Talk to an expert</button></a>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if ($bottom_banner_form_shortcode): ?>
<?php get_template_part('template-parts/elements/bottom-form-banner', null, array('image' => $bottom_banner_image, 'form_shortcode' => $bottom_banner_form_shortcode, 'form_title' => $bottom_banner_form_title, 'banner_header' => $bottom_banner_title, 'phone' => $phone, 'email' => $email)); ?>
<?php endif; ?>