$(document).ready(function() {
    $('#recommendationForm').submit(function(e) {
        e.preventDefault(); // Prevent form submission

        const query = $('#query').val();

        $.ajax({
            url: 'recommendations.php', 
            type: 'POST',
            data: { query: query },
            success: function(response) {
                // Parse the JSON response
                const recommendations = JSON.parse(response);
                
                // Display recommendations on the page
                let recommendationsDiv = $('#recommendations');
                recommendationsDiv.html('<h2>Recommended Lawyers:</h2>');
                recommendations.forEach(function(lawyer) {
                    recommendationsDiv.append(`<p>${lawyer.name} - ${lawyer.specialization} - ${lawyer.fees} Fee</p>`);
                });
            },
            error: function() {
                alert('Error processing request.');
            }
        });
    });
});
