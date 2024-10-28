<?php

$post_id = get_the_ID();

// post fields
$post_title = get_the_title();
$post_content = get_the_content();
$featured_image_url = get_the_post_thumbnail_url($post_id, 'full'); // 'full' specifies the image size, change as needed
$author_name = get_the_author_meta('display_name');
$post_date = get_the_date('F j, Y');

// custom fields
$blog_cta_title = get_field('blog_cta_text', $post_id);
$blog_cta_button_title = get_field('blog_cta_button_text', $post_id);

// Calculate estimated reading time
$word_count = str_word_count(strip_tags($post_content));
$reading_time = ceil($word_count / 200); // Assuming average reading speed is 200 words per minute

$current_post_categories = wp_get_post_categories($current_post_id);


// Prepare the query arguments
$relatedPosts= array(
        'post_type' => 'post', // Ensure to use 'post' or the custom post type if you have one
        'posts_per_page' => 4, // Number of posts to display
        'post__not_in' => array($current_post_id), // Exclude current post
        'category__in' => $current_post_categories, // Get posts in the same category
        'orderby' => 'date', // Order by date
        'order' => 'DESC', // Most recent first
);

$relatedPostsQuery = new WP_Query($relatedPosts);

?>

<section class="single-blog-banner">
    <div class="single-blog-banner__overlay"></div>
    <img class="single-blog-banner__background" src="<?php echo $featured_image_url ?>" alt="Blog Background Image" />

    <section class="responsive-container">
        <div class="single-blog-banner__content">
            <h1 style="margin-bottom: 0px;"><?php echo $post_title ?></h1>
        </div>
    </section>
</section>

<section class="single-blog-container">
    <div class="responsive-container">
        <div class="single-blog-container__inner">
            <div class="single-blog-container__inner-left">
                <div class="single-blog-container__inner-left-top">
                    <div class="single-blog-container__inner-left-top-meta">
                        <h4 style="margin-bottom: 0px;"><?php echo $post_date ?></h4>
                        <div>
                            <span>Read Time:</span>
                            <span class="single-blog-container__inner-left-top-meta-blue"><?php echo $reading_time ?>
                                minutes</span>
                        </div>
                        <div>
                            <span>Author:</span>
                            <span
                                class="single-blog-container__inner-left-top-meta-blue"><?php echo $author_name ?></span>
                        </div>
                    </div>
                    <div class="single-blog-container__inner-left-top-share">
                        <h3 style="margin-bottom: 0px;">Share</h3>
                        <div class="single-blog-container__inner-left-top-share-buttons">
                            <a id="facebook-share" href="#" target="_blank">
                                <img src="https://www.inovayt.com.au/wp-content/uploads/2020/10/INO_Web_Icon-FB-01.svg"
                                    alt="Share on Facebook" />
                            </a>
                            <a id="linkedin-share" href="#" target="_blank">
                                <img src="https://www.inovayt.com.au/wp-content/uploads/2020/10/INO_Web_Icon-IN-01.svg"
                                    alt="Share on LinkedIn" />
                            </a>
                        </div>
                    </div>
                    <div class="single-blog-container__inner-left-top-more">
                        <h3>Read More</h3>
                        <a href="/blog-finance-tips/"><button>View All Blogs</button></a>
                    </div>
                </div>
            </div>
            <div class="single-blog-container__inner-middle">
                <img src="<?php echo $featured_image_url ?>" alt="Blog Background Image" />
                <?php echo $post_content ?>
                <div class="single-blog-container__inner-middle-cta">
                    <h2><?php echo $blog_cta_title ?></h2>
                    <a class="talk-to-an-expert-btn"><button>Talk to an expert</button></a>
                </div>
            </div>
            <div class="single-blog-container__inner-right">
                <!-- EMPTY -->
            </div>
        </div>
    </div>
</section>

<div class="single-blog-related">
    <div class="responsive-container">
        <div class="single-blog-related__inner">
            <h2 style="margin-bottom: 0px;">Related Blogs</h2>
            <div class="single-blog-related__inner-row">
                <?php
                if ($relatedPostsQuery->have_posts()) {
                    while ($relatedPostsQuery->have_posts()) {
                        $relatedPostsQuery->the_post();

                        $post_id = get_the_ID();
                        $link = get_permalink();
                        $title = get_the_title();
                        $content = get_the_content();
                        $featured_image_url = get_the_post_thumbnail_url(get_the_ID());
                        // Retrieve the categories assigned to the current post
                        $categories = get_the_category($post_id);
                        $date = get_the_date();

                        get_template_part('template-parts/elements/blog/blog-card', null, array('link' => $link, 'title' => $title, 'imageUrl' => $featured_image_url, 'date' => $date, 'description' => $content));

                    }
                } else {
                    "<h4> Oops, there doesn't seem to be any blogs right now.";
                }
                // Restore original post data
                wp_reset_postdata();
                ?>
            </div>
            <div class="single-blog-related__inner-more">
                <a href="/blog-finance-tips/"><button>View All Blogs</button></a>
            </div>
        </div>
    </div>
</div>

<script>
// Get the current page URL
var currentUrl = encodeURIComponent(window.location.href);

// Set the share URLs for Facebook and LinkedIn
document.getElementById('facebook-share').href = 'https://www.facebook.com/sharer/sharer.php?u=' + currentUrl;
document.getElementById('linkedin-share').href = 'https://www.linkedin.com/sharing/share-offsite/?url=' + currentUrl;
</script>