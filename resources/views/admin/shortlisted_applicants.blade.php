<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shortlisted Applicants</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets-admin/img/RLlogo1.png" rel="icon">
 

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets-admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets-admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets-admin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets-admin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets-admin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets-admin/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets-admin/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets-admin/img/RLlogo1.png" alt="">
            <span class="d-none d-lg-block" style="font-size: 20px;">Real LIFE Foundation </span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="assets-admin/img/user.png"  alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">Shiloh Eugenio</span>
                </a><!-- End Profile Image Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>Shiloh Eugenio</h6>
                        <span>Admin</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-gear"></i>
                            <span>Account Settings</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                            <i class="bi bi-question-circle"></i>
                            <span>Need Help?</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>
                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->
        </ul>
    </nav><!-- End Icons Navigation -->
</header><!-- End Header -->


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="index.html">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
      </li><!-- End Dashboard Nav -->

      
      <li class="nav-item">
        <a class="nav-link" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Applicants</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="new_applicants.html">
              <i class="bi bi-circle"></i><span>New Applicants</span>
            </a>
          </li>
          <li>
            <a href="shortlisted_applicants.html"  class="active">
              <i class="bi bi-circle"></i><span>Shortlisted</span>
            </a>
          </li>
          <li>
            <a href="for_interview_applicants.html">
              <i class="bi bi-circle"></i><span>For Interview</span>
            </a>
          </li>
          <li>
            <a href="house_visitation_applicants.html">
              <i class="bi bi-circle"></i><span>For House Visitation</span>
            </a>
          </li>
          <li>
            <a href="approved_applicants.html">
              <i class="bi bi-circle"></i><span>Approved</span>
            </a>
          </li>
          <li>
            <a href="declined_applicants.html">
              <i class="bi bi-circle"></i><span>Declined</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

  
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-journal-text"></i><span>Announcement</span></i>
        </a>
       
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-envelope-arrow-up"></i><span>Notify</span></i>
        </a>
       
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-person-plus"></i><span>Create Account</span></i>
        </a>
        
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-box-arrow-in-right"></i><span>Sign out</span></i>
        </a>
      </li><!-- End Icons Nav -->

    </ul>

</aside><!-- End Sidebar-->
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Shortlisted</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Applicants</li>
          <li class="breadcrumb-item active">Shortlisted</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Shortlisted Applicants</h5>
              <button type="button" class="btn btn-secondary" style="font-size: 12px; width: 120px; margin-bottom: 10px;">Export as Excel</button>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col" >Incoming Grade/Year Level</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Shiloh</td>
                    <td>Eugenio</td>
                    <td>Fourth Year College</td>
                    <td> <span class="badge bg-primary">Shortlisted</span></td>
                    <td>
                        <div style="margin-bottom: 3px;">
                            <button type="button" class="btn" style="background-color: #356ddc; color: white; font-size: 12px; width: 100px; ">For Interview</button>         
                          </div>
                          <div style="margin-bottom: 3px;">
                            <button type="button" class="btn" style="background-color: #db2828; color: white; font-size: 12px; width: 100px;">Decline</button>
                          </div> 
                          <div style="margin-bottom: 3px;">
                            <button type="button" class="btn" style="background-color: #2EB85C; color: white; font-size: 12px; width: 100px;">View</button> 
                          </div>
                        </div>
                      </td>        
                  </tr>
                 
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <!-- Vendor JS Files -->
  <script src="assets-admin/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets-admin/vendor/chart.js/chart.umd.js"></script>
  <script src="assets-admin/vendor/echarts/echarts.min.js"></script>
  <script src="assets-admin/vendor/quill/quill.min.js"></script>
  <script src="assets-admin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets-admin/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets-admin/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets-admin/js/main.js"></script>

</body>

</html>