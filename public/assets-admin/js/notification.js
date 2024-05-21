// $(document).ready(function() {
//     // Function to fetch notification count from the server
//     function fetchNotificationCount() {
//         $.ajax({
//             url: '/fetch-notification-count', // Endpoint to fetch notification count
//             type: 'GET',
//             success: function(response) {
//                 $('#notificationCount').text(response.count); // Update notification count
//             },
//             error: function(xhr, status, error) {
//                 console.error('Error fetching notification count:', error);
//             }
//         });
//     }

//     // Fetch notification count initially when the page loads
//     fetchNotificationCount();

//     // Fetch notification count every 10 seconds (adjust interval as needed)
//     setInterval(fetchNotificationCount, 10000); // 10 seconds interval

//     // Handle click event on notification dropdown to reset count
//     $('#messageDropdown').on('click', function() {
//         // Reset the notification count to zero on the client side
//         $('#notificationCount').text('0');
//         // Send request to server to mark notifications as read if needed
//         $.ajax({
//             url: '/mark-notifications-as-read', // Endpoint to mark notifications as read
//             type: 'POST',
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token
//             },
//             success: function(response) {
//                 // Optionally, you can perform additional actions after marking notifications as read
//             },
//             error: function(xhr, status, error) {
//                 console.error('Error marking notifications as read:', error);
//             }
//         });
//     });
// });

$(document).ready(function() {
    // Function to fetch and update notification count
    function fetchNotificationCount() {
        $.ajax({
            url: '/fetch-notification-count', // Endpoint to fetch notification count
            type: 'GET',
            success: function(response) {
                var unreadCount = response.count;

                // Show/hide notification count based on unread count
                if (unreadCount > 0) {
                    $('#notificationCount').text(unreadCount).show();
                } else {
                    $('#notificationCount').hide();
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching notification count:', error);
            }
        });
    }

    // Fetch notification count initially when the page loads
    fetchNotificationCount();

    // Fetch notification count every 10 seconds (adjust interval as needed)
    setInterval(fetchNotificationCount, 10000); // 10 seconds interval

    // Handle click event on notification dropdown to reset count and mark notifications as read
    $('#messageDropdown').on('click', function() {
        // Reset the notification count on the client side
        $('#notificationCount').hide();

        // Send request to server to mark notifications as read
        $.ajax({
            url: '/mark-notifications-as-read', // Endpoint to mark notifications as read
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token
            },
            success: function(response) {
                // Optionally, you can perform additional actions after marking notifications as read
            },
            error: function(xhr, status, error) {
                console.error('Error marking notifications as read:', error);
                // Re-fetch notification count in case of error
                fetchNotificationCount();
            }
        });
    });
});