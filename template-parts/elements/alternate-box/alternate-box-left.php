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
    <div class="alternate-box-left">
        <div class="alternate-box-left__left">
            <img src="<?php echo $image ?>" alt="<?php echo $title ?> - Image" />
        </div>
        <div class="alternate-box-left__right <?php echo $background_colour ?>">
            <div class="alternate-box-left__right-content">
                <h2><?php echo $title ?></h2>
                <?php echo $content ?>
                <?php if($talk_to_expert): ?>
                <a class="<?php echo $talk_to_expert ?>"><button><?php echo $button_text ?></button></a>
                <?php endif; ?>
                <?php if(!$talk_to_expert): ?>
                <a href="<?php echo $button_link ?>"><button><?php echo $button_text ?></button></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>