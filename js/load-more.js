// LOADMORE.JS

// posts
document.addEventListener('DOMContentLoaded', function() {
    let page = 2; // Start from page 2 since page 1 is already loaded

    console.log('load-more-function');

    document.getElementById('load-more-button').addEventListener('click', function() {

        console.log('load-more-button');

        fetch(my_ajax_obj.ajax_url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
                action: 'load_more_posts',
                page: page
            })
        })
        .then(response => response.text())
        .then(responseText => {
            if (responseText.trim()) {
                document.querySelector('.blog-container__inner-row').insertAdjacentHTML('beforeend', responseText);
                page++;
            } else {
                document.getElementById('load-more-button').style.display = 'none'; // Hide button if no more posts
            }
        })
        .catch(error => {
            console.error('Error loading more posts:', error);
        });
    });
});

// categories
document.addEventListener('DOMContentLoaded', function() {
    let page = 2; // Start from page 2 since page 1 is already loaded
    let currentCategory = document.getElementById('current-category').value; // Retrieve current category ID

    document.getElementById('load-more-categories-button').addEventListener('click', function() {

        fetch(my_ajax_obj.ajax_url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
                action: 'load_more_category_posts',
                page: page,
                category: currentCategory // Pass the category ID to the AJAX request
            })
        })
        .then(response => response.text())
        .then(responseText => {

            console.log(responseText);

            if (responseText.trim()) {
                document.querySelector('.blog-container__inner-row').insertAdjacentHTML('beforeend', responseText);
                page++;
            } else {
                document.getElementById('load-more-categories-button').style.display = 'none'; // Hide button if no more posts
            }
        })
        .catch(error => {
            console.error('Error loading more posts:', error);
        });
    });
});

// tags
document.addEventListener('DOMContentLoaded', function() {
    let page = 2; // Start from page 2 since page 1 is already loaded
    let currentCategory = document.getElementById('current-category').value; // Retrieve current category ID

    document.getElementById('load-more-tags-button').addEventListener('click', function() {

        fetch(my_ajax_obj.ajax_url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
                action: 'load_more_tag_posts',
                page: page,
                category: currentCategory // Pass the category ID to the AJAX request
            })
        })
        .then(response => response.text())
        .then(responseText => {

            console.log(responseText);

            if (responseText.trim()) {
                document.querySelector('.blog-container__inner-row').insertAdjacentHTML('beforeend', responseText);
                page++;
            } else {
                document.getElementById('load-more-tags-button').style.display = 'none'; // Hide button if no more posts
            }
        })
        .catch(error => {
            console.error('Error loading more posts:', error);
        });
    });
});

