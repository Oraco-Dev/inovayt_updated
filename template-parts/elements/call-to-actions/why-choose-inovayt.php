<?php

$why_choose_title_one = $args['why_choose_title_one'];
$why_choose_description_one = $args['why_choose_description_one'];
$why_choose_image_one = $args['why_choose_image_one'];
$why_choose_title_two = $args['why_choose_title_two'];
$why_choose_description_two = $args['why_choose_description_two'];
$why_choose_image_two = $args['why_choose_image_two'];
$why_choose_title_three = $args['why_choose_title_three'];
$why_choose_description_three = $args['why_choose_description_three'];
$why_choose_image_three = $args['why_choose_image_three'];

?>

<div class="why-choose">
    <div class="responsive-container">
        <div class="why-choose__inner">
            <h2 style="margin-bottom: 0px;">Why Choose Inovayt</h2>
            <div class="why-choose__columns">
                <div class="why-choose__action">
                    <img src="<?php echo $why_choose_image_one ?>" alt="Action Icon" />
                    <div class="why-choose__action-text">
                        <h3 style="margin-bottom: 0px;"><?php echo $why_choose_title_one ?></h3>
                        <?php echo $why_choose_description_one ?>
                    </div>
                </div>
                <div class="why-choose__action">
                    <img src="<?php echo $why_choose_image_two ?>" alt="Action Icon" />
                    <div class="why-choose__action-text">
                        <h3 style="margin-bottom: 0px;"><?php echo $why_choose_title_two ?></h3>
                        <?php echo $why_choose_description_two ?>
                    </div>
                </div>
                <div class="why-choose__action">
                    <img src="<?php echo $why_choose_image_three ?>" alt="Action Icon" />
                    <div class="why-choose__action-text">
                        <h3 style="margin-bottom: 0px;"><?php echo $why_choose_title_three ?></h3>
                        <?php echo $why_choose_description_three ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>