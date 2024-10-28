<?php

$left_content = $args['left_content'];
$left_button = $args['left_button'];
$left_button_link = $args['left_button_link'];

$mortgage_broker_melbourne = array(
    'post_type'      => 'team',          
    'posts_per_page' => -1,                  
    'tax_query'      => array(
        array(
            'taxonomy' => 'category',       
            'field'    => 'slug',           
            'terms'    => 'Mortgage Broker Melbourne',
        ),
    ),
);

$mortgage_broker_brisbane = array(
    'post_type'      => 'team',          
    'posts_per_page' => -1,                  
    'tax_query'      => array(
        array(
            'taxonomy' => 'category',       
            'field'    => 'slug',           
            'terms'    => 'Mortgage Broker Brisbane',   
        ),
    ),
);

$mortgage_broker_newcastle = array(
    'post_type'      => 'team',          
    'posts_per_page' => -1,                  
    'tax_query'      => array(
        array(
            'taxonomy' => 'category',       
            'field'    => 'slug',           
            'terms'    => 'Mortgage Broker Newcastle',   
        ),
    ),
);

$mortgage_broker_melbourne_query = new WP_Query($mortgage_broker_melbourne);
$mortgage_broker_brisbane_query = new WP_Query($mortgage_broker_brisbane);
$mortgage_broker_newcastle_query = new WP_Query($mortgage_broker_newcastle);

?>

<div class="work-with">
    <div class="responsive-container">
        <div class="work-with__inner">
            <h2 style="margin-bottom: 0px;">Work with an Inovayt Broker</h2>
            <div class="work-with__inner-buttons">
                <div class="work-with__inner-buttons-button one active" id="work-with-tab-one">Melbourne</div>
                <div class="work-with__inner-buttons-button two" id="work-with-tab-two">Brisbane</div>
                <div class="work-with__inner-buttons-button three" id="work-with-tab-three">Sunshine Coast</div>
                <div class="work-with__inner-buttons-button four" id="work-with-tab-four">Central Coast</div>
                <div class="work-with__inner-buttons-button five" id="work-with-tab-five">Hunter Valley</div>
                <div class="work-with__inner-buttons-button six" id="work-with-tab-six">Lake Macquarie</div>
                <div class="work-with__inner-buttons-button seven" id="work-with-tab-seven">Nelson Bay</div>
            </div>
            <div class="work-with__inner-content">
                <div class="work-with__inner-content-left">
                    <p><?php echo $left_content; ?></p>
                    <a href="<?php echo $left_button_link ?>"><button><?php echo $left_button ?></button></a>
                </div>
                <div class="work-with__inner-content-right">
                    <div class="work-with__inner-content-right-splide one" id="work-with-content-one">
                        <div id="nextButtonWorkOne">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/chevron.png" alt="">
                        </div>
                        <div id="prevButtonWorkOne">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/left-chevron.png" alt="">
                        </div>
                        <div class="splide"
                            data-splide='{"type":"loop", "perPage":2, "arrows":false, "pagination":false, "gap": "50px", "padding": "5px", "drag": "free", "snap": true }'>
                            <div class="splide__track">
                                <div class="splide__list">
                                    <?php
                                if ($mortgage_broker_melbourne_query->have_posts()) {
                                    // Start the loop
                                    while ($mortgage_broker_melbourne_query->have_posts()) {
                                        $mortgage_broker_melbourne_query->the_post();

                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                        $post_link = get_permalink();
                                        
                                        // Output the title and content of each post
                                        echo '<div class="splide__slide">';
                                        echo '<a href="' . esc_url($post_link) . '" class="work-with__staff">';
                                        echo '<div class="work-with__staff-image">';
                                        echo '<div class="work-with__staff-image-overlay"></div>';
                                        echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . get_the_title() . '"
                                            class="staff-thumbnail" />';
                                        echo '</div>';
                                        echo '<div class="work-with__staff-meta">';
                                        echo '<h3 style="margin-bottom: 0px;">' . get_the_title() . '</h3>';
                                        echo '<p>' . get_the_excerpt() . '</p>';
                                        echo '</div>';
                                        echo '</a>';
                                        echo '</div>';
                                }
                                // Restore original Post Data
                                wp_reset_postdata();
                                } else {
                                // No posts found
                                echo '<div class="splide__slide">';
                                    echo '<h2>No staff members found in this category.</h2>';
                                    echo '</div>';
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="work-with__inner-content-right-splide two hidden" id="work-with-content-two">
                        <div id="nextButtonWorkTwo">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/chevron.png" alt="">
                        </div>
                        <div id="prevButtonWorkTwo">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/left-chevron.png" alt="">
                        </div>
                        <div class="splide"
                            data-splide='{"type":"loop", "perPage":2, "arrows":false, "pagination":false, "gap": "50px", "padding": "5px", "drag": "free", "snap": true }'>
                            <div class="splide__track">
                                <div class="splide__list">
                                    <?php
                                if ($mortgage_broker_brisbane_query->have_posts()) {
                                    // Start the loop
                                    while ($mortgage_broker_brisbane_query->have_posts()) {
                                        $mortgage_broker_brisbane_query->the_post();

                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                        $post_link = get_permalink();
                                        
                                        // Output the title and content of each post
                                        echo '<div class="splide__slide">';
                                        echo '<a href="' . esc_url($post_link) . '" class="work-with__staff">';
                                        echo '<div class="work-with__staff-image">';
                                        echo '<div class="work-with__staff-image-overlay"></div>';
                                        echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . get_the_title() . '"
                                            class="staff-thumbnail" />';
                                        echo '</div>';
                                        echo '<div class="work-with__staff-meta">';
                                        echo '<h3 style="margin-bottom: 0px;">' . get_the_title() . '</h3>';
                                        echo '<p>' . get_the_excerpt() . '</p>';
                                        echo '</div>';
                                        echo '</a>';
                                        echo '</div>';
                                }
                                // Restore original Post Data
                                wp_reset_postdata();
                                } else {
                                // No posts found
                                echo '<div class="splide__slide">';
                                    echo '<h2>No staff members found in this category.</h2>';
                                    echo '</div>';
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="work-with__inner-content-right-splide three hidden" id="work-with-content-three">
                        <div id="nextButtonWorkThree">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/chevron.png" alt="">
                        </div>
                        <div id="prevButtonWorkThree">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/left-chevron.png" alt="">
                        </div>
                        <div class="splide"
                            data-splide='{"type":"loop", "perPage":2, "arrows":false, "pagination":false, "gap": "50px", "padding": "5px", "drag": "free", "snap": true }'>
                            <div class="splide__track">
                                <div class="splide__list">
                                    <?php
                                if ($mortgage_broker_brisbane_query->have_posts()) {
                                    // Start the loop
                                    while ($mortgage_broker_brisbane_query->have_posts()) {
                                        $mortgage_broker_brisbane_query->the_post();

                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                        $post_link = get_permalink();
                                        
                                        // Output the title and content of each post
                                        echo '<div class="splide__slide">';
                                        echo '<a href="' . esc_url($post_link) . '" class="work-with__staff">';
                                        echo '<div class="work-with__staff-image">';
                                        echo '<div class="work-with__staff-image-overlay"></div>';
                                        echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . get_the_title() . '"
                                            class="staff-thumbnail" />';
                                        echo '</div>';
                                        echo '<div class="work-with__staff-meta">';
                                        echo '<h3 style="margin-bottom: 0px;">' . get_the_title() . '</h3>';
                                        echo '<p>' . get_the_excerpt() . '</p>';
                                        echo '</div>';
                                        echo '</a>';
                                        echo '</div>';
                                }
                                // Restore original Post Data
                                wp_reset_postdata();
                                } else {
                                // No posts found
                                echo '<div class="splide__slide">';
                                    echo '<h2>No staff members found in this category.</h2>';
                                    echo '</div>';
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="work-with__inner-content-right-splide four hidden" id="work-with-content-four">
                        <div id="nextButtonWorkFour">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/chevron.png" alt="">
                        </div>
                        <div id="prevButtonWorkFour">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/left-chevron.png" alt="">
                        </div>
                        <div class="splide"
                            data-splide='{"type":"loop", "perPage":2, "arrows":false, "pagination":false, "gap": "50px", "padding": "5px", "drag": "free", "snap": true }'>
                            <div class="splide__track">
                                <div class="splide__list">
                                    <?php
                                if ($mortgage_broker_newcastle_query->have_posts()) {
                                    // Start the loop
                                    while ($mortgage_broker_newcastle_query->have_posts()) {
                                        $mortgage_broker_newcastle_query->the_post();

                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                        $post_link = get_permalink();
                                        
                                        // Output the title and content of each post
                                        echo '<div class="splide__slide">';
                                        echo '<a href="' . esc_url($post_link) . '" class="work-with__staff">';
                                        echo '<div class="work-with__staff-image">';
                                        echo '<div class="work-with__staff-image-overlay"></div>';
                                        echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . get_the_title() . '"
                                            class="staff-thumbnail" />';
                                        echo '</div>';
                                        echo '<div class="work-with__staff-meta">';
                                        echo '<h3 style="margin-bottom: 0px;">' . get_the_title() . '</h3>';
                                        echo '<p>' . get_the_excerpt() . '</p>';
                                        echo '</div>';
                                        echo '</a>';
                                        echo '</div>';
                                }
                                // Restore original Post Data
                                wp_reset_postdata();
                                } else {
                                // No posts found
                                echo '<div class="splide__slide">';
                                    echo '<h2>No staff members found in this category.</h2>';
                                    echo '</div>';
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="work-with__inner-content-right-splide five hidden" id="work-with-content-five">
                        <div id="nextButtonWorkFive">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/chevron.png" alt="">
                        </div>
                        <div id="prevButtonWorkFive">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/left-chevron.png" alt="">
                        </div>
                        <div class="splide"
                            data-splide='{"type":"loop", "perPage":2, "arrows":false, "pagination":false, "gap": "50px", "padding": "5px", "drag": "free", "snap": true }'>
                            <div class="splide__track">
                                <div class="splide__list">
                                    <?php
                                if ($mortgage_broker_newcastle_query->have_posts()) {
                                    // Start the loop
                                    while ($mortgage_broker_newcastle_query->have_posts()) {
                                        $mortgage_broker_newcastle_query->the_post();

                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                        $post_link = get_permalink();
                                        
                                        // Output the title and content of each post
                                        echo '<div class="splide__slide">';
                                        echo '<a href="' . esc_url($post_link) . '" class="work-with__staff">';
                                        echo '<div class="work-with__staff-image">';
                                        echo '<div class="work-with__staff-image-overlay"></div>';
                                        echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . get_the_title() . '"
                                            class="staff-thumbnail" />';
                                        echo '</div>';
                                        echo '<div class="work-with__staff-meta">';
                                        echo '<h3 style="margin-bottom: 0px;">' . get_the_title() . '</h3>';
                                        echo '<p>' . get_the_excerpt() . '</p>';
                                        echo '</div>';
                                        echo '</a>';
                                        echo '</div>';
                                }
                                // Restore original Post Data
                                wp_reset_postdata();
                                } else {
                                // No posts found
                                echo '<div class="splide__slide">';
                                    echo '<h2>No staff members found in this category.</h2>';
                                    echo '</div>';
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="work-with__inner-content-right-splide six hidden" id="work-with-content-six">
                        <div id="nextButtonWorkSix">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/chevron.png" alt="">
                        </div>
                        <div id="prevButtonWorkSix">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/left-chevron.png" alt="">
                        </div>
                        <div class="splide"
                            data-splide='{"type":"loop", "perPage":2, "arrows":false, "pagination":false, "gap": "50px", "padding": "5px", "drag": "free", "snap": true }'>
                            <div class="splide__track">
                                <div class="splide__list">
                                    <?php
                                if ($mortgage_broker_newcastle_query->have_posts()) {
                                    // Start the loop
                                    while ($mortgage_broker_newcastle_query->have_posts()) {
                                        $mortgage_broker_newcastle_query->the_post();

                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                        $post_link = get_permalink();
                                        
                                        // Output the title and content of each post
                                        echo '<div class="splide__slide">';
                                        echo '<a href="' . esc_url($post_link) . '" class="work-with__staff">';
                                        echo '<div class="work-with__staff-image">';
                                        echo '<div class="work-with__staff-image-overlay"></div>';
                                        echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . get_the_title() . '"
                                            class="staff-thumbnail" />';
                                        echo '</div>';
                                        echo '<div class="work-with__staff-meta">';
                                        echo '<h3 style="margin-bottom: 0px;">' . get_the_title() . '</h3>';
                                        echo '<p>' . get_the_excerpt() . '</p>';
                                        echo '</div>';
                                        echo '</a>';
                                        echo '</div>';
                                }
                                // Restore original Post Data
                                wp_reset_postdata();
                                } else {
                                // No posts found
                                echo '<div class="splide__slide">';
                                    echo '<h2>No staff members found in this category.</h2>';
                                    echo '</div>';
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="work-with__inner-content-right-splide seven hidden" id="work-with-content-seven">
                        <div id="nextButtonWorkSeven">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/chevron.png" alt="">
                        </div>
                        <div id="prevButtonWorkSeven">
                            <img src="https://www.inovayt.com.au/wp-content/uploads/2024/09/left-chevron.png" alt="">
                        </div>
                        <div class="splide"
                            data-splide='{"type":"loop", "perPage":2, "arrows":false, "pagination":false, "gap": "50px", "padding": "5px", "drag": "free", "snap": true }'>
                            <div class="splide__track">
                                <div class="splide__list">
                                    <?php
                                if ($mortgage_broker_newcastle_query->have_posts()) {
                                    // Start the loop
                                    while ($mortgage_broker_newcastle_query->have_posts()) {
                                        $mortgage_broker_newcastle_query->the_post();

                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                        $post_link = get_permalink();
                                        
                                        // Output the title and content of each post
                                        echo '<div class="splide__slide">';
                                        echo '<a href="' . esc_url($post_link) . '" class="work-with__staff">';
                                        echo '<div class="work-with__staff-image">';
                                        echo '<div class="work-with__staff-image-overlay"></div>';
                                        echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . get_the_title() . '"
                                            class="staff-thumbnail" />';
                                        echo '</div>';
                                        echo '<div class="work-with__staff-meta">';
                                        echo '<h3 style="margin-bottom: 0px;">' . get_the_title() . '</h3>';
                                        echo '<p>' . get_the_excerpt() . '</p>';
                                        echo '</div>';
                                        echo '</a>';
                                        echo '</div>';
                                }
                                // Restore original Post Data
                                wp_reset_postdata();
                                } else {
                                // No posts found
                                echo '<div class="splide__slide">';
                                    echo '<h2>No staff members found in this category.</h2>';
                                    echo '</div>';
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    let splides = document.querySelectorAll('.splide');

    if (splides.length) {
        let splideInstances = [];

        // Create instances of Splide and store them in an array
        for (let i = 0; i < splides.length; i++) {
            let splideElement = splides[i];
            let splideOptions = JSON.parse(splideElement.getAttribute('data-splide')) || {};
            let splide = new Splide(splideElement, splideOptions);
            splide.mount();
            splideInstances.push(splide);
        }

        // Define button elements
        let buttons = {
            prev: {
                one: document.getElementById('prevButtonWorkOne'),
                two: document.getElementById('prevButtonWorkTwo'),
                three: document.getElementById('prevButtonWorkThree'),
                four: document.getElementById('prevButtonWorkFour'),
                five: document.getElementById('prevButtonWorkFive'),
                six: document.getElementById('prevButtonWorkSix'),
                seven: document.getElementById('prevButtonWorkSeven'),
            },
            next: {
                one: document.getElementById('nextButtonWorkOne'),
                two: document.getElementById('nextButtonWorkTwo'),
                three: document.getElementById('nextButtonWorkThree'),
                four: document.getElementById('nextButtonWorkFour'),
                five: document.getElementById('nextButtonWorkFive'),
                six: document.getElementById('nextButtonWorkSix'),
                seven: document.getElementById('nextButtonWorkSeven'),
            }
        };

        // Bind click events to custom buttons for each Splide instance
        buttons.prev.one.addEventListener('click', function() {
            splideInstances[0].go('-1');
        });
        buttons.next.one.addEventListener('click', function() {
            splideInstances[0].go('+1');
        });

        buttons.prev.two.addEventListener('click', function() {
            splideInstances[1].go('-1');
        });
        buttons.next.two.addEventListener('click', function() {
            splideInstances[1].go('+1');
        });

        buttons.prev.three.addEventListener('click', function() {
            splideInstances[2].go('-1');
        });
        buttons.next.three.addEventListener('click', function() {
            splideInstances[2].go('+1');
        });

        buttons.prev.four.addEventListener('click', function() {
            splideInstances[3].go('-1');
        });
        buttons.next.four.addEventListener('click', function() {
            splideInstances[3].go('+1');
        });

        buttons.prev.five.addEventListener('click', function() {
            splideInstances[4].go('-1');
        });
        buttons.next.five.addEventListener('click', function() {
            splideInstances[4].go('+1');
        });

        buttons.prev.six.addEventListener('click', function() {
            splideInstances[5].go('-1');
        });
        buttons.next.six.addEventListener('click', function() {
            splideInstances[5].go('+1');
        });

        buttons.prev.seven.addEventListener('click', function() {
            splideInstances[6].go('-1');
        });
        buttons.next.seven.addEventListener('click', function() {
            splideInstances[6].go('+1');
        });
    }
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    let tabButtons = document.querySelectorAll(
        ".work-with__inner-buttons-button"
    );
    let contentElements = document.querySelectorAll(
        ".work-with__inner-content-right > div"
    );

    // Initial activation
    tabButtons.forEach(function(button, index) {
        button.addEventListener("click", function() {
            // Remove 'active' class from all buttons
            tabButtons.forEach(function(tabButton) {
                tabButton.classList.remove("active");
            });

            // Add 'active' class to the clicked button
            button.classList.add("active");

            // Hide all content elements
            contentElements.forEach(function(contentElement) {
                contentElement.classList.add("hidden");
            });

            // Show the corresponding content based on the clicked button
            let buttonId = button.id.replace("work-with-tab-",
                ""); // Extract the tab number from button id
            let contentId = "work-with-content-" + buttonId;
            document.getElementById(contentId).classList.remove("hidden");
        });
    });
});
</script>