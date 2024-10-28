<?php

$image = $args['image'];
$title = $args['title'];
$content = $args['content'];
$button_text = $args['button_text'];
$button_link = $args['button_link'];
$talk_to_expert = $args['talk_to_expert'];
$background_colour = $args['background_colour'];

?>

<section class="responsive-container">
    <div class="alternate-box-right">
        <div class="alternate-box-right__left <?php echo $background_colour ?>">
            <div class="alternate-box-right__left-content">
                <h2><?php echo $title ?></h2>
                <?php echo $content ?>
                <a class="<?php echo $talk_to_expert?>"
                    href="<?php echo $button_link ?>"><button><?php echo $button_text ?></button></a>
            </div>
        </div>
        <div class="alternate-box-right__right">
            <img src="<?php echo $image ?>" alt="<?php echo $title ?> - Image" />
        </div>
    </div>
</section>