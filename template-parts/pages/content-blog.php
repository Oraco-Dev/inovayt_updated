<?php

$page_id = get_the_ID();

// post fields
$post_title = get_the_title();
$featured_image_url = get_the_post_thumbnail_url($post_id, 'full'); // 'full' specifies the image size, change as needed

// Determine the current category
$category = get_queried_object(); // Get the current category object
$category_id = $category->term_id; // Get the current category ID

// query - all posts but first
$allPosts = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'offset' => 1,
    'posts_per_page' => 20,
);

// query - only first post
$firstPost = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 1,
);


$allPostsQuery = new WP_Query($allPosts);
$firstPostQuery = new WP_Query($firstPost);

?>

<section class="blog-banner">
    <div class="blog-banner__overlay"></div>
    <img class="blog-banner__background" src="<?php echo $featured_image_url ?>" alt="Blog Background Image" />

    <section class="responsive-container">
        <div class="blog-banner__content">
            <h1 style="margin-bottom: 0px;"><?php echo $post_title ?></h1>
        </div>
    </section>
</section>

<section class="blog-header">
    <div class="responsive-container">
        <!-- desktop -->
        <div class="blog-header__buttons">
            <a href="/blog-finance-tips/" class="blog-header__buttons-button"
                style="background-color: #00b9f2; color: white;">All</a>
            <a href="/category/finance/" class="blog-header__buttons-button">Finance</a>
            <a href="/category/wealth/" class="blog-header__buttons-button">Wealth</a>
            <a href="/category/commercial/" class="blog-header__buttons-button">Commercial</a>
        </div>
        <!-- mobile -->
        <select class="blog-header__buttons-select" onchange="window.location.href=this.value;">
            <option value="/blog-finance-tips/">All</option>
            <option value="/category/finance/" <?php echo $category_url === 'finance' ? 'selected' : ''; ?>>Finance
            </option>
            <option value="/category/wealth/" <?php echo $category_url === 'wealth' ? 'selected' : ''; ?>>Wealth
            </option>
            <option value="/category/commercial/" <?php echo $category_url === 'commercial' ? 'selected' : ''; ?>>
                Commercial</option>
        </select>
    </div>
</section>

<section class="blog-first-container">
    <div class="responsive-container">
        <div class="blog-first-container__inner">
            <div class="blog-first-container__inner-row">
                <?php
                if ($firstPostQuery->have_posts()) {
                    while ($firstPostQuery->have_posts()) {
                        $firstPostQuery->the_post();

                        $post_id = get_the_ID();
                        $link = get_permalink();
                        $title = get_the_title();
                        $content = get_the_content();
                        $featured_image_url = get_the_post_thumbnail_url(get_the_ID());
                        // Retrieve the categories assigned to the current post
                        $categories = get_the_category($post_id);
                        $date = get_the_date();

                        get_template_part('template-parts/elements/blog/first-blog-card', null, array('link' => $link, 'title' => $title, 'imageUrl' => $featured_image_url, 'date' => $date, 'description' => $content));

                    }
                } else {
                    "<h4> Oops, there doesn't seem to be any blogs right now.";
                }
                // Restore original post data
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>

<section class="blog-container">
    <div class="responsive-container">
        <div class="blog-container__inner">
            <div class="blog-container__inner-row">
                <?php
                if ($allPostsQuery->have_posts()) {
                    while ($allPostsQuery->have_posts()) {
                        $allPostsQuery->the_post();

                        $post_id = get_the_ID();
                        $link = get_permalink();
                        $title = get_the_title();
                        $excerpt = get_the_excerpt();
                        $featured_image_url = get_the_post_thumbnail_url(get_the_ID());
                        // Retrieve the categories assigned to the current post
                        $categories = get_the_category($post_id);
                        $date = get_the_date();

                        get_template_part('template-parts/elements/blog/blog-card', null, array('link' => $link, 'title' => $title, 'imageUrl' => $featured_image_url, 'date' => $date));
                    }
                } else {
                    "<h4> Oops, there doesn't seem to be any blogs right now.";
                }
                // Restore original post data
                wp_reset_postdata();
                ?>
            </div>
            <button id="load-more-button">Load More</button>
        </div>
    </div>
</section>