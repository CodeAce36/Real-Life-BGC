<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/RLlogo1.png" rel="icon">
    <link href="assets/img/RLlogo1.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/aos/aos.css">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/jolty/dist/jolty.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="  https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/faq.css" rel="stylesheet">
     <link href="assets/css/applicant_dashboard.css" rel="stylesheet">
    <style type="text/scss">
    
    </style>
</head>

<body>
    @php
    if (auth()->check()) {
        $personalInfo = auth()->user()->personalInformation()->first();
    }
@endphp
    <!-- ======= Header ======= -->
    <header id="header" class=" shadow-sm d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <a href="/" class="logo me-auto"><img src="assets/img/RLlogo.png" alt=""
                    class="img-fluid"></a>

                    @if(auth()->check())
                    <!-- Navigation for logged-in users -->
                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a class="nav-link scrollto{{ request()->is('/') ? ' active' : '' }}" href="/">Home</a></li>
                            <li><a class="nav-link scrollto{{ request()->is('announcement') ? ' active' : '' }}" href="/announcement">Announcement</a></li>
                            <li><a class="nav-link scrollto{{ request()->is('contact') ? ' active' : '' }}" href="/contact">Contact Us</a></li>
                            <li><a class="nav-link scrollto{{ request()->is('faq') ? ' active' : '' }}" href="/faq">FAQ</a></li>
                            <!-- Add other logged-in user links here -->
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                        
                    </nav><!-- .navbar -->

                    <div class="header-nav d-flex align-items-center">
                        <a class="nav-link nav-icon notification-icon" id="messageDropdown" href="#" data-bs-toggle="dropdown">
                            <i class="bi bi-bell bell-icon"></i>
                            <span class="badge bg-danger badge-number count" id="notificationCount" style="display: none;"></span>
                        </a>
                    
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications" aria-labelledby="messageDropdown">
                            <li class="dropdown-header" style="font-weight: medium; color:#151515; font-weight: 500; font-size: 17px;">
                                Notifications
                                {{-- <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a> --}}
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <div class="notifications-container">
                                @if(isset($notifications) && count($notifications) > 0)
                                @foreach ($notifications as $notification)
                                <a href="/applicant_dashboard" class="dropdown-item preview-item notification" data-notification-id="{{ $notification->id }}">
                                    <li class="notification-item">
                                        <i></i>
                                        <div>
                                            <h4 style="margin: 0%">{{ $notification->admin_name }}</h4>
                                            <p>{{ $notification->message }}</p>
                                            <p>
                                                @if($notification->created_at->gt(now()->subDay()))
                                                    {{ $notification->created_at->diffForHumans() }}
                                                @else
                                                    <em>{{ $notification->created_at->format('F d, Y \a\t g:iA') }}</em>
                                                @endif
                                            </p>
                                        </div>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                    </li>
                                @endforeach
                                @else
                                <li class="notification-item">
                                    <div>
                                        <p style="text-align: center;">No notifications</p>
                                    </div>
                                </li>
                                @endif
                       
                        {{-- <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li> --}}

                    </ul><!-- End Notification Dropdown Items -->

                    </li><!-- End Notification Nav -->

                    <div class="nav-item dropdown pe-3 ">
                        <a class="nav-link nav-icon nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">
                            <i class="bi bi-person"></i>
                            <span
                                class="d-none d-md-block dropdown-toggle ps-2 nav-link scrollto" style="font-family: 'Poppins', san-serif; font-size:16px; font-weight: medium;">{{ explode(' ', $personalInfo->first_name)[0] }}</span>
                        </a><!-- End Profile Image Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6 class="font-weight: bold; font-size: 5px;">{{ $personalInfo->first_name ?? '' }}
                                    {{ $personalInfo->last_name ?? '' }}</h6>
                                <span></span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="/applicant_dashboard">
                                    <i class="bi bi-speedometer"></i>
                                    <span style="color: #444444;  font-size: 14px;">Dashboard</span>
                                </a>
                            </li>
                            <hr class="dropdown-divider">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="/personal-details">
                                    <i class="bi bi-person"></i>
                                    <span  style="color: #444444; font-size: 14px;">Personal Details</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="/change_password">
                                    <i class="bi bi-gear"></i>
                                    <span  style="color: #444444; font-size: 14px;">Change Password</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="dropdown-item d-flex align-items-center">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span  style="color: #444444;  font-size: 14px;" >Log out</span>
                                    </button>
                                </form>
                            </li>
                            <hr class="dropdown-divider">
                @else
                    <!-- Navigation for non-logged-in users -->
                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a class="nav-link scrollto" href="/">Home</a></li>
                            <li><a class="nav-link scrollto" href="/announcement">Announcement</a></li>
                            <li><a class="nav-link scrollto" href="/contact">Contact Us</a></li>
                            <li><a class="nav-link scrollto" href="/faq">FAQ</a></li>
                            <li><a class="nav-link scrollto" href="/login">Login</a></li>
                            <li><a class="getstarted scrollto" href="/register">Apply Now</a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->
                @endif
                
            </ul><!-- End Profile Dropdown Items -->
        </div><!-- End Profile Nav -->
    </div><!-- End header-nav -->
</div><!-- End container -->
</header><!-- End Header -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script src="assets/js/applicant_notification.js"></script>

{{-- <script>
       $(document).ready(function () {
        // Get the current URL path
        var currentPath = window.location.pathname;

        // Add the "active" class to the corresponding link
        $('.nav-link').each(function () {
            var linkPath = $(this).attr('href');
            if (currentPath === linkPath) {
                $(this).addClass('active');
            }
        });
    });
   
   
function fetchNotificationCount() {
    $.ajax({
        url: '/applicant-fetch-notification-count', // Endpoint to fetch notification count
        type: 'GET',
        success: function(response) {
            var count = response.count;
            // Update notification count
            if (count === 0) {
                // If count is zero, remove the badge
                $('#notificationCount').removeClass('badge bg-danger badge-number').text('');
            } else {
                // If count is greater than zero, update the badge with the count
                $('#notificationCount').addClass('badge bg-danger badge-number').text(count);
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

// Handle click event on notification dropdown to reset count
$('#messageDropdown').on('click', function() {
    // Send request to server to mark notifications as read
    $.ajax({
        url: '/applicant-mark-notifications-as-read', // Endpoint to mark notifications as read
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token
        },
        success: function(response) {
            // Update notification count to zero on the client side
            $('#notificationCount').removeClass('badge bg-danger badge-number').text('');
        },
        error: function(xhr, status, error) {
            console.error('Error marking notifications as read:', error);
        }
    });
});
</script> --}}
