<?php

$banner_title = $args['banner_header'];
$image = $args['image'];
$form_title = $args['form_title'];
$form = $args['form_shortcode'];
$phone = isset($args['phone']) ? $args['phone'] : '1300 345 355'; // Initialize $phone with empty string if not set
$email = isset($args['email']) ? $args['email'] : 'info@inovayt.com.au'; // Initialize $email with empty string if not set


?>

<div id="bottom-form" class="bottom-banner">
    <img src="<?php echo $image ?>" alt="Banner Image" class="bottom-banner__background" />
    <div class="bottom-banner__overlay"></div>
    <div class="responsive-container">
        <div class="bottom-banner__inner">
            <div class="bottom-banner__left">
                <h3 style="margin-bottom: 0px;">
                    <?php echo $banner_title ?>
                </h3>
                <div class="bottom-banner__cards desktop-only">
                    <a href="tel:1300354355" class="bottom-banner__card">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2020/10/INO_Web_Icons-08.svg"
                            alt="Phone Icon" class="bottom-banner__card-icon" />
                        <div class="bottom-banner__card-meta">
                            <p style="margin-bottom: 0px;">Get in touch</p>
                            <span><?php echo $phone ?></span>
                        </div>
                    </a>
                    <a href="mailto:info@inovayt.com.au" class="bottom-banner__card">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/01/INO_Brand-Icons-08.svg"
                            alt="Email Icon" class="bottom-banner__card-icon" />
                        <div class="bottom-banner__card-meta">
                            <p style="margin-bottom: 0px;">Send us an email</p>
                            <span><?php echo $email ?></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="bottom-banner__right">
                <div class="bottom-banner__right-form">
                    <h3><?php echo $form_title ?></h3>
                    <?php echo do_shortcode($form) ?>
                </div>
                <div class="bottom-banner__cards mobile-only">
                    <a href="tel:<?php echo $phone ?>" class="bottom-banner__card">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2020/10/INO_Web_Icons-08.svg"
                            alt="Phone Icon" class="bottom-banner__card-icon" />
                        <div class="bottom-banner__card-meta">
                            <p style="margin-bottom: 0px;">Phone</p>
                            <span><?php echo $phone ?></span>
                        </div>
                    </a>
                    <a href="mailto:info@inovayt.com.au" class="bottom-banner__card">
                        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/01/INO_Brand-Icons-08.svg"
                            alt="Email Icon" class="bottom-banner__card-icon" />
                        <div class="bottom-banner__card-meta">
                            <p style="margin-bottom: 0px;">Email</p>
                            <span><?php echo $email ?></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>