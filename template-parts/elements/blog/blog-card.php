<?php
$date = $args['date'];
$link = $args['link'];
$title = $args['title'];
$image_url = $args['imageUrl'];


?>

<a href="<?php echo $link ?>" class="blog-card">
    <div class="blog-card__image-container">
        <?php if ($image_url): ?>
        <img src="<?php echo esc_url($image_url) ?>" class="blog-card__img" />
        <div class="blog-card__overlay"></div> <!-- Overlay for the image -->
        <?php endif; ?>
    </div>
    <div class="blog-card__meta">
        <div class="blog-card__meta-top">
            <span class="blog-card__meta-top-title">
                <?php echo $title ?>
            </span>
            <span class="blog-card__meta-top-date">
                <?php echo $date ?>
            </span>
        </div>
        <span class="blog-card__meta-read-more">Read More <span><img
                    src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-arrow-30-1.png"
                    class="blog-card__meta-read-more-img" /></span></span>
    </div>
</a>