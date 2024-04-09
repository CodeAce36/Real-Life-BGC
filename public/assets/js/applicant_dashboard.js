
            $(document).ready(function() {
                console.log("Document is ready.");
        
                // Check if success message is stored in session storage
                var successMessage = sessionStorage.getItem('successMessage');
                if (successMessage) {
                    $('#successMessage').show();
                    sessionStorage.removeItem('successMessage'); // Clear success message from session storage
                    setTimeout(function() {
                        $('#successMessage').fadeOut('slow'); // Hide success message after 4 seconds
                    }, 4000);
                }
        
                function toggleSubmitButton() {
                    var documentType = $('#documentType').val();
                    var fileName = $('#fileUpload').val();
                    var fileExtension = fileName.split('.').pop().toLowerCase();

                    if (documentType !== '' && fileName !== '' && fileExtension === 'pdf') {
                        $('#submitForm').prop('disabled', false);
                    } else {
                        $('#submitForm').prop('disabled', true);
                    }
                }

                // Event listener for document type change
                $('#documentType').change(function() {
                    toggleSubmitButton();
                });

                // Event listener for file upload change
                $('#fileUpload').change(function() {
                    var fileName = $(this).val().split('\\').pop();
                    var fileExtension = fileName.split('.').pop().toLowerCase();
                    $('#fileUploadLabel').text(fileName);
                    toggleSubmitButton();
                });
                // Event listener for Save Changes button click
                $('#submitForm').click(function(e) {
                    e.preventDefault(); // Prevent default button behavior
        
                    console.log("Save Changes button clicked.");
        
                    // Get CSRF token value
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
        
                    // Create FormData object
                    var formData = new FormData();
        
                    // Append other form fields
                    formData.append('documentType', $('#documentType').val());
                    formData.append('notes', $('#notes').val());
                    formData.append('_token', csrfToken);
        
                    // Append file input
                    var fileUpload = $('#fileUpload')[0].files[0];
                    formData.append('fileUpload', fileUpload);
        
                    // Debugging statement
                    console.log("Form data:", formData);
        
                    // Send AJAX request
                    $.ajax({
                        url: $('#uploadForm').attr('action'),
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            console.log("AJAX request successful:", response); // Handle success response
        
                            // Store success message in session storage
                            sessionStorage.setItem('successMessage', 'Changes saved successfully.');
        
                            // Reload the page
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            console.error("AJAX request failed:", xhr.responseText); // Handle error response
                            // Optionally, you can display an error message to the user
                        }
                    });
                });
            });
            
            $(document).ready(function() {
                $('#fileUpload').change(function() {
                    var fileName = $(this).val().split('\\').pop(); // Get the filename
                    $('#fileUploadLabel').text(fileName); // Update the header with the filename
                });
            });