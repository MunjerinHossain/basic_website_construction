// This JS Script to handle the form submission:

$(document).ready(function() {
    // Load reviews when page is ready
    loadReviews();

    // Handle form submission
    $('#reviewForm').submit(function(event) {
        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'handleReview.php',
            data: $(this).serialize(),
            success: function() {
                loadReviews(); // Reload reviews after submission
                $('#reviewForm')[0].reset(); // Clear form
            }
        });
    });

    function loadReviews() {
        $.get('get_reviews.php', function(data) {
            $('#reviews-container').html(data);
        });
    }
});

