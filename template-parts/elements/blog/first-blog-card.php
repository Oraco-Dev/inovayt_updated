<?php
$date = $args['date'];
$link = $args['link'];
$title = $args['title'];
$description = $args['description'];
$image_url = $args['imageUrl'];
$first_blog = $args['first_blog'];

$cleaned_description = preg_replace('/<\/?a[^>]*>/i', '', $description);

$max_length = 200;
if (strlen($cleaned_description) > $max_length) {
    $cleaned_description = substr($cleaned_description, 0, $max_length) . '...';
}

?>

<a href="<?php echo $link ?>" class="first-blog-card">
    <div class="first-blog-card__image-container">
        <img src="<?php echo esc_url($image_url) ?>" class="blog-card__img" />
        <div class="first-blog-card__overlay"></div> <!-- Overlay for the image -->
    </div>
    <div class="first-blog-card__meta">
        <div class="first-blog-card__meta-top">
            <div>
                <span class="first-blog-card__meta-top-title">
                    <?php echo $title ?>
                </span>
            </div>
            <div>
                <span class="first-blog-card__meta-top-date">
                    <?php echo $date ?>
                </span>
            </div>
            <div>
                <span class="first-blog-card__meta-top-description"><?php echo $cleaned_description; ?></span>
            </div>
        </div>
        <span class="first-blog-card__meta-read-more">Read More <span><img
                    src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-arrow-30-1.png"
                    class="blog-card__meta-read-more-img" /></span></span>
    </div>
</a>