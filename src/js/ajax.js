jQuery.ajax({
    type: 'POST',
    url: '/wordpress/wp-admin/admin-ajax.php',
    data: {
        action: 'get_posts_data'
    },
    success: function(response) {
        console.log(response); // Display the posts data in the console
    },
    error: function(xhr, status, error) {
        console.log('Error:', error, status, xhr);
    }
 });
