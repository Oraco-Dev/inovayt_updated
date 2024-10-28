<?php

$link = $args['link'];
$icon = $args['icon'];
$title = $args['title'];
$description = $args['description'];
$is_hover = $args['hover_flag'];
$hover_description = $args['hover_description'];
$link_text = $args['link_text'];
$colour = $args['text_colour'];

?>

<div class="resources-box">
    <a href="<?php echo $link ?>" target="_blank" class="resources-box__link <?php echo $is_hover ?>">
        <h4 style="margin-bottom: 0px;"><?php echo $title ?></h4>
        <p style="margin-bottom: 0px;"><?php echo $hover_description ?></p>
        <span class="resources-box__link-meta <?php echo $colour ?>"><?php echo $link_text ?><img
                src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-arrow-30-3.png" /></span>
    </a>


    <div class="resources-box__meta">
        <img src="<?php echo $icon ?>" alt="<?php echo $title ?> - Icon" class="resources-box__icon" />
        <div class="resources-box__meta-container">
            <h4 style="margin-bottom: 0px;"><?php echo $title ?></h4>
            <span class="resources-box__meta-description"><?php echo $description ?></span>
            <!-- mobile -->
            <?php if ($colour === 'blue'): ?>
            <span class="resources-box__meta-link <?php echo $colour ?>"><?php echo $link_text ?><img
                    src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-arrow-30-1.png" /></span>
            <?php endif; ?>
            <?php if ($colour === 'green'): ?>
            <span class="resources-box__meta-link <?php echo $colour ?>"><?php echo $link_text ?><img
                    src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-arrow-30-1-1.png" /></span>
            <?php endif; ?>
            <!-- end mobile -->
        </div>
    </div>

    <!-- desktop -->
    <div class="resources-box__links">
        <?php if ($colour === 'blue'): ?>
        <span class="resources-box__meta-link desktop <?php echo $colour ?>"><?php echo $link_text ?> <img
                src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-arrow-30-1.png" /></span>
        <?php endif; ?>
        <?php if ($colour === 'green'): ?>
        <span class="resources-box__meta-link desktop <?php echo $colour ?>"><?php echo $link_text ?> <img
                src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-arrow-30-1-1.png" /></span>
        <?php endif; ?>
    </div>
    <!-- end desktop -->

</div>