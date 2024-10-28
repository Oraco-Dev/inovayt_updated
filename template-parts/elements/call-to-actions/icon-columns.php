<?php

$action_title = $args['action_title'];
$action_button_title = $args['action_button_title'];
$action_button_link = $args['action_button_link'];
$action_button_class = $args['action_button_class'];

$action_title_one = $args['action_title_one'];
$action_description_one = $args['action_description_one'];
$action_image_one = $args['action_image_one'];
$action_title_two = $args['action_title_two'];
$action_description_two = $args['action_description_two'];
$action_image_two = $args['action_image_two'];
$action_title_three = $args['action_title_three'];
$action_description_three = $args['action_description_three'];
$action_image_three = $args['action_image_three'];
$action_title_four = $args['action_title_four'];
$action_description_four = $args['action_description_four'];
$action_image_four = $args['action_image_four'];

?>

<div class="icon-columns">
    <div class="responsive-container">
        <div class="icon-columns__inner">
            <h2 style="margin-bottom: 0px;"><?php echo $action_title ?></h2>
            <div class="icon-columns__columns">
                <div class="icon-columns__action">
                    <img src="<?php echo $action_image_one ?>" alt="Action Icon" />
                    <div class="icon-columns__action-text">
                        <h3 style="margin-bottom: 0px;"><?php echo $action_title_one ?></h3>
                        <?php echo $action_description_one ?>
                    </div>
                </div>
                <div class="icon-columns__action">
                    <img src="<?php echo $action_image_two ?>" alt="Action Icon" />
                    <div class="icon-columns__action-text">
                        <h3 style="margin-bottom: 0px;"><?php echo $action_title_two ?></h3>
                        <?php echo $action_description_two ?>
                    </div>
                </div>
                <div class="icon-columns__action">
                    <img src="<?php echo $action_image_three ?>" alt="Action Icon" />
                    <div class="icon-columns__action-text">
                        <h3 style="margin-bottom: 0px;"><?php echo $action_title_three ?></h3>
                        <?php echo $action_description_three ?>
                    </div>
                </div>
                <div class="icon-columns__action">
                    <img src="<?php echo $action_image_four ?>" alt="Action Icon" />
                    <div class="icon-columns__action-text">
                        <h3 style="margin-bottom: 0px;"><?php echo $action_title_four ?></h3>
                        <?php echo $action_description_four ?>
                    </div>
                </div>
            </div>
            <!-- button if it has href -->
            <?php if($action_button_link): ?>
            <a href="<?php echo $action_button_link ?>"><button><?php echo $action_button_title ?></button></a>
            <?php endif; ?>
            <!-- button if it has class / talk to an expert -->
            <?php if($action_button_class): ?>
            <a class="<?php echo $action_button_class ?>"><button><?php echo $action_button_title ?></button></a>
            <?php endif; ?>
        </div>
    </div>
</div>