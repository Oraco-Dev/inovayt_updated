<?php

get_header();

$page_id = get_the_ID();

// post fields
$featured_image_url = get_the_post_thumbnail_url($post_id, 'full'); // 'full' specifies the image size, change as needed

// Determine the current category
$category = get_queried_object(); // Get the current category object
$category_url = $category ? $category->slug : '';
$category_id = $category->term_id; // Get the current category ID

// query - all posts but first
$allPosts = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 20,
    'offset' => 1,
    'cat' => $category_id, // Filter posts by category ID
);

// query - only first post
$firstPost = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 1,
    'cat' => $category_id, // Filter posts by category ID
);

$allPostsQuery = new WP_Query($allPosts);
$firstPostQuery = new WP_Query($firstPost);



?>

<input type="hidden" id="current-category" value="<?php echo get_queried_object_id(); ?>">

<section class="blog-banner">
    <div class="blog-banner__overlay"></div>
    <img class="blog-banner__background" src="<?php echo $featured_image_url ?>" alt="Blog Background Image" />

    <section class="responsive-container">
        <div class="blog-banner__content">
            <h1>Category: <?php echo $category->name ?></h1>
        </div>
    </section>
</section>

<section class="blog-header">
    <div class="responsive-container">
        <div class="blog-header__buttons">
            <a href="/blog-finance-tips/" class="blog-header__buttons-button">All</a>
            <a href="/category/finance/"
                class="blog-header__buttons-button <?php echo $category_url === 'finance' ? 'active' : ''; ?>">Finance</a>
            <a href="/category/wealth/"
                class="blog-header__buttons-button <?php echo $category_url === 'wealth' ? 'active' : ''; ?>">Wealth</a>
            <a href="/category/commercial/"
                class="blog-header__buttons-button <?php echo $category_url === 'commercial' ? 'active' : ''; ?>">Commercial</a>
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

<section class="blog-secondary-header">
    <div class="responsive-container">
        <div class="blog-secondary-header__buttons">
            <?php if ($category_url === 'finance'): ?>
            <a href="/tag/first-home-buyer/" class="blog-secondary-header__buttons-button">First Home Buyer</a>
            <a href="/tag/mortgage/" class="blog-secondary-header__buttons-button">Mortgage</a>
            <a href="/tag/home-owner/" class="blog-secondary-header__buttons-button">Home Owner</a>
            <a href="/tag/personal-finance/" class="blog-secondary-header__buttons-button">Personal Finance</a>
            <?php endif; ?>
            <?php if ($category_url === 'wealth'): ?>
            <a href="/tag/superannuation/" class="blog-secondary-header__buttons-button">Superannuation</a>
            <a href="/tag/property-investing/" class="blog-secondary-header__buttons-button">Property Investing</a>
            <a href="/tag/stock-market/" class="blog-secondary-header__buttons-button">Stock Market</a>
            <a href="/tag/retirement/" class="blog-secondary-header__buttons-button">Retirement</a>
            <?php endif; ?>
            <?php if ($category_url === 'commercial'): ?>
            <a href="/tag/business-loans/" class="blog-secondary-header__buttons-button">Business Loans</a>
            <a href="/tag/self-employed/" class="blog-secondary-header__buttons-button">Self Employed</a>
            <?php endif; ?>
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
                        $excerpt = get_the_excerpt();
                        $featured_image_url = get_the_post_thumbnail_url(get_the_ID());
                        // Retrieve the categories assigned to the current post
                        $categories = get_the_category($post_id);
                        $date = get_the_date();

                        get_template_part('template-parts/elements/blog/first-blog-card', null, array('link' => $link, 'title' => $title, 'imageUrl' => $featured_image_url, 'date' => $date, 'description' => $excerpt));

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
            <button id="load-more-categories-button">Load More</button>
        </div>
    </div>
</section>

<?php get_footer(); ?>