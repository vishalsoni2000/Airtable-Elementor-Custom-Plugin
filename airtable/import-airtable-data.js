jQuery(document).ready(function($) {
    $('.loader').hide();
    $('#import-now-button').click(function() {
        var importButton = $(this); // Store a reference to the button element

        // Add the loader class to the button
        $('.loader').show();

        // Send an AJAX request to trigger the import.
        $.ajax({
            type: 'POST',
            url: import_airtable_data_ajax.ajax_url,
            data: {
                action: 'import_airtable_data', // Action defined in the PHP code.
            },
            beforeSend: function() {
                // This function is called before the AJAX request is sent.
                // You can show a loader or perform other actions here.
            },
            success: function(response) {
                alert('Import Success'); // Show a success message.
                // You can update the page or perform other actions as needed.
		console.log(response.data);
		$('.reponse-data pre').append(response);
		console.log(response);
            },
            error: function(response) {
		alert(response);

		console.log(response);
                alert('Error importing data.'); // Handle errors if necessary.
                $('.loader').hide();
            },
            complete: function() {
                // This function is called regardless of whether the request succeeds or fails.
                // Remove the loader class from the button
                $('.loader').hide();
            }
        });
    });
});
