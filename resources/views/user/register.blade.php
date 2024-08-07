<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/registration.css">



</head>

<body >
    {{-- <!-- ======= Header ======= -->
    <header id="header" class=" shadow-sm d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <a href="/" class="logo me-auto"><img src="assets/img/RLlogo.png" alt=""
                    class="img-fluid"></a>

            <nav id="navbar" class=" navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="/announcement">Announcement</a></li>
                    <li><a class="nav-link scrollto" href="/contact">Contact Us</a></li>
                    <li><a class="nav-link scrollto " href="/faq">FAQ</a></li>
                    <li><a class="nav-link scrollto" href="/login">Login</a></li>
                    <li><a class="getstarted scrollto" href="/register">Apply Now</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header> --}}

    <div class="registration-container" >
        <div class="mx-auto container" >
        <!-- ======= STEP REGISTRATION ======= -->
        <h2 class="registration">SCREENING FORM</h2>
        <span style="text-align: center;  display: block;">Please fill out all the forms</span>
        <div class="stepper stepper-pills" id="registration">
            <div class="stepper-nav flex-center flex-wrap mb-10">
                <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                    <div class="stepper-wrapper d-flex align-items-center">
                        <div class="stepper-icon w-40px h-40px">
                            <span class="stepper-number">1</span>
                        </div>

                        <div class="stepper-label">
                            <div class="stepper-desc">
                                Eligibility, Qualifications & Requirements
                            </div>
                        </div>
                    </div>
                </div>


                <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                    <div class="stepper-wrapper d-flex align-items-center">
                        <div class="stepper-icon w-40px h-40px">
                            <span class="stepper-number">2</span>
                        </div>
                        <div class="stepper-label">
                            <div class="stepper-desc">
                                Personal Information
                            </div>
                        </div>
                    </div>
                </div>
                <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                    <div class="stepper-wrapper d-flex align-items-center">
                        <div class="stepper-icon w-40px h-40px">
                            <span class="stepper-number">3</span>
                        </div>

                        <div class="stepper-label">
                            <div class="stepper-desc">
                                Academic Information
                            </div>
                        </div>
                    </div>
                </div>

                <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                    <div class="stepper-wrapper d-flex align-items-center">
                        <div class="stepper-icon w-40px h-40px">
                            <span class="stepper-number">4</span>
                        </div>

                        <div class="stepper-label">
                            <div class="stepper-desc">
                                Family Information
                            </div>
                        </div>
                    </div>
                </div>

                <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                    <div class="stepper-wrapper d-flex align-items-center">
                        <div class="stepper-icon w-40px h-40px">
                            <span class="stepper-number">5</span>
                        </div>

                        <div class="stepper-label">
                            <div class="stepper-desc">
                                Create Account
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert alert-danger mt-4" id="errorMessageFillout" style="display: none;"></div>

        <form class="form w-lg-500px mx-auto" action="{{ route('register.post') }}" method="POST"
            id="step-content-form" enctype="multipart/form-data">
            @csrf
            <!-- ======= STEP 1 ======= -->
            <div class="container mt-5 step-content active" id="step1Content">
                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <div class="card">
                            <div class="card-body m-3 terms-and-conditions">
                                <h4 class="termscondition" style="text-transform: uppercase;">Eligibility, Qualifications & Requirements</h4>
                                <br>
                                <div class="contentterms">
                                    <p style="font-weight: bold; ">To be eligible to receive the Real LIFE scholarship, applicants must:</p>
                                    <ul>
                                        <li>
                                            Be a Filipino citizen
                                        </li>
                                        <li>
                                            Have a grade weighted average (GWA) of at least 88% or its equivalent in the previous academic year for high school students or the previous semester for college students
                                        </li>
                                        <li>
                                            Have a combined monthly household income of no more than 20,000 PHP
                                        </li>
                                        <li>
                                            Not be married, have children, or be older than 25 years of age
                                        </li>
                                        <li>
                                            Be enrolled at a school recognized by the Department of Education (DepEd) or Commission on Higher Education (CHED)
                                        </li>
                                        <li>
                                            For high school applicants, be currently studying or willing to transfer to a public school
                                        </li>
                                        <li>
                                            For college applicants, have tuition fees of not more than 15,000 PHP per semester
                                        </li>
                                        <li>
                                            Be willing to undergo our character formation and leadership development programs
                                        </li>
                                    </ul>
                                     <br>
                                    <p style="font-weight: bold;">Requirements Upon Application:</p>
                                      <ul>
                                        <li>
                                          Official Copy of Grades for three (3) School Years
                                        </li><br>
                                      </ul>
                                    
                                        <p><b>Proof of Financial Status</b> (submit <u><b>ANY</b></u> of the following)</p>
                                        <ul>
                                        <li>
                                          2022 Income Tax Return (ITR)
                                        </li>               
                                        <li>
                                          Payslip for the past 3 months of household members who contribute financialliy
                                        </li>
                                        <li>
                                          Filled out Proof of Employment form (for those without payslip)
                                        </li>
                                        <li>
                                          DSWD Case Report
                                        </li>
                                        <li>
                                          Certificate of Non-Filling of Tax Return (if other options are not available)
                                        </li>
                                      </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" id="agreeCheckbox">
                            <label class="form-check-label" for="agreeCheckbox" style="font-size: 14px;">
                                I understand that the information I will provide will be used by Real LIFE Foundation to screen and process my application for SY 2023-2024. I give my consent to
                                Real LIFE to use the data I will
                                provide and the file attachments for the said application. <span
                                    style="color: red; font-size: 12px; font-weight: normal;">*</span>
                            </label>
                            <span id="error-message" style="display: none; color: red; font-size: 10px;">
                                <i class="fas fa-exclamation-circle"></i>
                                Please ensure the checkbox is checked to proceed with your application.
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ======= STEP 2 ======= -->
            <div class="container mt-4 mb-4" id="step2Content" style="display: none;">
                <div class="row col-xl-10 mx-auto">
                    <span id="step2ErrorMessage"
                        style="display: none; color: red; text-align: center; margin-bottom: 15px;"></span>
                    <div class="col-md-6">
                        <div class="form-group" style="display: flex; align-items: center;">
                            <label for="firstname" style="display: inline-block; margin-right: 5px;">
                                First Name
                                <span style="color: red; font-size: 12px; font-weight: normal;">*</span>
                            </label>
                            <span id="nameErrorMessage"
                                style="display: none; color: red; font-size: 12px; margin-right: 5px;">(Invalid
                                characters entered)</span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="firstname" id="firstname"
                                placeholder="" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group" style="display: flex; align-items: center;">
                            <label for="lastname" style="display: inline-block; margin-right: 5px;">
                                Last Name
                                <span style="color: red; font-size: 12px; font-weight: normal;">*</span>
                            </label>
                            <span id="lnameErrorMessage"
                                style="display: none; color: red; font-size: 12px; margin-right: 5px;">(Invalid
                                characters entered)</span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="lastname" id="lastname"
                                placeholder="" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group" style="display: flex; align-items: center;">
                            <label for="contact_no" style="display: inline-block; margin-right: 5px;">
                                Contact Number
                                <span style="color: red; font-size: 12px; font-weight: normal;">*</span>
                            </label>
                            <span id="contactError"
                                style="display: none; color: red; font-size: 12px;  margin-right: 5px;">(Must be
                                11-digit number)</span>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="contact" id="contact_no"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="birthdate">Birthdate <span
                                    style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                            <input type="date" class="form-control" name="birthdate" id="birthdate"
                                style="color: #444444;" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="house_no">House Number <span
                                    style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                            <input type="text" class="form-control" name="houseNumber" id="house_no"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="street">Street <span
                                    style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                            <input type="text" class="form-control" name="street" id="street" placeholder=""
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="barangay">Barangay <span
                                    style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                            <input type="text" class="form-control" name="barangay" id="barangay"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="municipality">Municipality <span
                                    style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                            <input type="text" class="form-control" name="municipality" id="municipality"
                                placeholder="" required>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary next-button-step2" id="nextButtonStep2" style="margin-right: 9%;">Next</button>
            </div>


            <!-- ======= STEP 3 CONTENT ======= -->
            <div class="container" id="step3Content" style="display: none;">
                <div class="row col-xl-10 mx-auto">
                    <p style="font-weight: bold; margin-top: 30px;">REMINDER: </p>
                    <ul style="margin-left: 40px;">
                        <li>Grade Weighted Average (GWA) of at least 88% or its equivalent in the previous academic year for high school students or the previous semester for college students.</li>
                        <li>Upload the Report of Card for three indicated Grade/Year Levels.</li>
                    </ul>
                    <span id="step3ErrorMessage"
                        style="display: none; color: red; text-align: center; margin-bottom: 15px; margint-top: 20px;">Please fill out all
                        required fields.</span>
                    <span id="step3PdfErrorMessage"
                        style="display: none; color: red; text-align: center; margin-bottom: 15px; margin-top: 20px;">Please upload a PDF file only.</span>
                    <h4 class="acedemic-info" style="font-weight: bold; margin-top: 30px;">
                        Academic Information
                    </h4>
                        <div class="col-md-4">
                        <label class="form-label">Incoming Grade or Year <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label></label>
                        <select class="form-select form-select-solid form-control-long" name="incomingGrade"
                            id="incomingGrade">
                            <option value="" style="color:#444444;">Select grade or year level</option>
                            <option value="GradeSeven">Grade 7</option>
                            <option value="GradeEight">Grade 8</option>
                            <option value="GradeNine">Grade 9</option>
                            <option value="GradeTen">Grade 10</option>
                            <option value="GradeEleven">Grade 11</option>
                            <option value="GradeTwelve">Grade 12</option>
                            <option value="FirstYear">First Year College</option>
                            <option value="SecondYear">Second Year College</option>
                            <option value="ThirdYear">Third Year College</option>
                            <option value="FourthYear">Fourth Year College</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Current School <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="text" class="form-control form-control-solid form-control-long"
                            name="currentSchool" placeholder="" value="" />
                    </div>

                    <div class="col-md-4" style="display: none;" id="currentProgram">
                        <label class="form-label">Current Course or Program<span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="text" class="form-control form-control-solid form-control-long"
                            name="currentProgram" placeholder="" value="" />
                    </div>
                </div>
                <br>
                <br>
                <!-- ======= STEP 3 GRADES ======= -->
                <div class="row col-xl-10 mx-auto">
                    <h4 class="grades" id="gradesText" style="display: none; font-weight: bold;">
                        Grades <span style="color: red; font-size: 10px; font-weight: normal;">*GWA (General Weighted
                            Average):
                            If grades are 5 point scale, write the equivalent. </span>
                    </h4>
                    <div class="col-md-4" id="grade3Gwa" style="display: none;">
                        <label class="form-label">Grade 3 GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="grade3GWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4" id="grade4Gwa" style="display: none;">
                        <label class="form-label">Grade 4 GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="grade4GWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4" id="grade5Gwa" style="display: none;">
                        <label class="form-label">Grade 5 GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="grade5GWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4" id="grade6Gwa" style="display: none;">
                        <label class="form-label">Grade 6 GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="grade6GWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4" id="grade7Gwa" style="display: none;">
                        <label class="form-label">Grade 7 GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="grade7GWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4" id="grade8Gwa" style="display: none;">
                        <label class="form-label">Grade 8 GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="grade8GWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4 mb-3" id="grade9Gwa" style="display: none;">
                        <label class="form-label">Grade 9 GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="grade9GWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4 mb-3" id="grade10Gwa" style="display: none;">
                        <label class="form-label">Grade 10 GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long"
                            name="grade10GWA" placeholder="" value="" />
                    </div>
                    <!-- ======= STEP 3 - G11 SEMESTERS ======= -->

                    <div class="col-md-4 mb-3" id="grade11Sem" style="display: none;">
                        <label class="form-label">Grade 11 Semesters Completed <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <select class="form-select form-select-solid form-control-long" id="grade11SemSelect"
                            name="grade11Semester">
                            <option value="" style="color:#444444;">Select Semester</option>
                            <option value="TwoSem">Two Semesters</option>
                            <option value="ThreeSem">Three Semesters</option>
                            <option value="FourSem">Four Semesters</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3" id="g11FirstSem" style="display: none;">
                        <label class="form-label">Grade 11 First Sem GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="grade11FirstSemGWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4 mb-3" id="g11SecondSem" style="display: none;">
                        <label class="form-label">Grade 11 Second Sem GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long"
                            name="grade11SecondSemGWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4 mb-3" id="g11ThirdSem" style="display: none;">
                        <label class="form-label">Grade 11 Third Sem GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="grade11ThirdSemGWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4 mb-3" id="g11FourthSem" style="display: none;">
                        <label class="form-label">Grade 11 Fourth Sem GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="grade11FourthSemGWA" placeholder="" value="" />
                    </div>

                    <!-- ======= STEP 3 - G12 SEMESTERS ======= -->
                    <div class="col-md-4 mb-3" id="grade12Sem" style="display: none;">
                        <label class="form-label">Grade 12 Semesters Completed<span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <select class="form-select form-select-solid form-control-long" id="grade12SemSelect"
                            name="grade12Semester">
                            <option value="" style="color:#444444;">Select Semester</option>
                            <option value="g12TwoSem">Two Semesters</option>
                            <option value="g12ThreeSem">Three Semesters</option>
                            <option value="g12FourSem">Four Semesters</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3" id="g12FirstSem" style="display: none;">
                        <label class="form-label">Grade 12 First Sem GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="grade12FirstSemGWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4 mb-3" id="g12SecondSem" style="display: none;">
                        <label class="form-label">Grade 12 Second Sem GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long"
                            name="grade12SecondSemGWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4 mb-3" id="g12ThirdSem" style="display: none;">
                        <label class="form-label">Grade 12 Third Sem GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="grade12ThirdSemGWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4 mb-3" id="g12FourthSem" style="display: none;">
                        <label class="form-label">Grade 12 Fourth Sem GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="grade12FourthSemGWA" placeholder="" value="" />
                    </div>

                    <!-- ======= STEP 3 - FIRST YEAR SEMESTERS AND GWA ======= -->
                    <div class="col-md-4 mb-3" id="firstYearSem" style="display: none;">
                        <label class="form-label">1st Year Semesters Completed <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <select class="form-select form-select-solid form-control-long" id="firstYearSemSelect"
                            name="firstYearSemester">
                            <option value="" style="color:#444444;">Select Semester</option>
                            <option value="firstYearTwoSem">Two Semesters</option>
                            <option value="firstYearThreeSem">Three Semesters</option>
                            <option value="firstYearFourSem">Four Semesters</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3" id="firstYearFirstSem" style="display: none;">
                        <label class="form-label">1st Year First Sem GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="firstYearFirstSemGWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4 mb-3" id="firstYearSecondSem" style="display: none;">
                        <label class="form-label">1st Year Second Sem GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long"
                            name="firstYearSecondSemGWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4 mb-3" id="firstYearThirdSem" style="display: none;">
                        <label class="form-label">1st Year Third Sem GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="firstYearThirdSemGWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4 mb-3" id="firstYearFourthSem" style="display: none;">
                        <label class="form-label">1st Year Fourth Sem GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="firstYearFourthSemGWA" placeholder="" value="" />
                    </div>


                    <!-- ======= STEP 3 - SECOND YEAR SEMESTERS AND GWA ======= -->
                    <div class="col-md-4 mb-3" id="secondYearSem" style="display: none;">
                        <label class="form-label">2nd Year Semesters Completed <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <select class="form-select form-select-solid form-control-long" id="secondYearSemSelect"
                            name="secondYearSemester">
                            <option value="" style="color:#444444;">Select Semester</option>
                            <option value="secondYearTwoSem">Two Semesters</option>
                            <option value="secondYearThreeSem">Three Semesters</option>
                            <option value="secondYearFourSem">Four Semesters</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3" id="secondYearFirstSem" style="display: none;">
                        <label class="form-label">2nd Year First Sem GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="secondYearFirstSemGWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4 mb-3" m id="secondYearSecondSem" style="display: none;">
                        <label class="form-label">2nd Year Second Sem GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long"
                            name="secondYearSecondSemGWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4 mb-3" id="secondYearThirdSem" style="display: none;">
                        <label class="form-label">2nd Year Third Sem GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="secondYearThirdSemGWA" placeholder="" value="" />
                    </div>
                    <div class="col-md-4 mb-3" id="secondYearFourthSem" style="display: none;">
                        <label class="form-label">2nd Year Fourth Sem GWA <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="number" class="form-control form-control-solid form-control-long shadow-sm"
                            name="secondYearFourthSemGWA" placeholder="" value="" />
                    </div>

                    <div class="col-md-4 mb-3" id="reportCard" style="display: none;">
                        <label class="form-label">Report Card <span style="color: red; font-size: 10px;">*Upload PDF
                             Only</span></label>
                        <input type="file" id="reportCardFile" class="form-control" name="ReportCard"
                            accept=".pdf">
                    </div>
                </div>
                <br>

                <!-- ======= STEP 3 - SCHOOL APPLICATION & CHOICE COURSE ======= -->

                <div class="row col-xl-10 mx-auto">
                    <h4 class="grades" id="schoolApplicationText" style="display: none; font-weight: bold;">
                        School Application<span style="color: red; font-size: 10px; font-weight: normal;"> *Enter
                            Preferred
                            School and Course </span>
                    </h4>
                    <div class="col-md-4 mb-3" id="schoolChoice1" style="display: none;">
                        <label class="form-label">First Choice School <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="text" class="form-control form-control-solid form-control-long shadow-sm"
                            name="schoolChoice1" placeholder="" value="" />
                    </div>
                    <div class="col-md-4 mb-3" id="schoolChoice2" style="display: none;">
                        <label class="form-label">Second Choice School <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="text" class="form-control form-control-solid form-control-long"
                            name="schoolChoice2" placeholder="" value="" />
                    </div>
                    <div class="col-md-4 mb-3" id="schoolChoice3" style="display: none;">
                        <label class="form-label">Third Choice School <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="text" class="form-control form-control-solid form-control-long"
                            name="schoolChoice3" placeholder=" " value="" />
                    </div>
                </div>

                <div class="row col-xl-10 mx-auto">
                    <div class="col-md-4" id="courseChoice1" style="display: none;">
                        <label class="form-label">First Choice Course <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="text" class="form-control form-control-solid form-control-long shadow-sm"
                            name="courseChoice1" placeholder="" value="" />
                    </div>
                    <div class="col-md-4" id="courseChoice2" style="display: none;">
                        <label class="form-label">Second Choice Course <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="text" class="form-control form-control-solid form-control-long"
                            name="courseChoice2" placeholder="" value="" />
                    </div>
                    <div class="col-md-4" id="courseChoice3" style="display: none;">
                        <label class="form-label">Third Choice Course <span
                                style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                        <input type="text" class="form-control form-control-solid form-control-long"
                            name="courseChoice3" placeholder=" " value="" />
                    </div>
                </div>
                <button type="button" class="btn btn-primary next-button-3" id="nextButtonStep3" style="margin-right: 9%;">Next</button>
            </div>


            <!-- ======= STEP 4 - MONTHLY HOUSEHOLD ======= -->
            <div class="container mt-4 mb-3" id="step4Content" style="display: none;">   
                <div class="row col-xl-10 mx-auto">
                    <p style="font-weight: bold; margin-top: 30px;">PROOF OF FINANCIAL STATUS</p>
                    <p>Submit <u><strong>ANY</strong></u> of the following: </p>
                    <ul style="margin-left: 40px;">
                        <li>2022 Income Tax Return (ITR)</li>
                        <li>Payslip for the past 3 months of household members who contribute financialliy.</li>
                        <li>Filled out Proof of Employment form (for those without payslip)</li>
                        <li>DSWD Case Report</li>
                        <li>Certificate of Non-Filling of Income Tax Return (if other options are not available)</li>
                    </ul>
                    <span id="step4ErrorMessage"
                        style="display: none; color: red; text-align: center; margin-bottom: 15px;">Please fill out all
                        required fields.</span>
                    <span id="step4PdfErrorMessage"
                        style="display: none; color: red; text-align: center; margin-bottom: 15px;">Please upload a PDF
                        file
                        only.</span>
                    <h4 class="acedemic-info" style="font-weight: bold; margin-top: 30px;">
                        Family Information
                    </h4>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="householdSelect">Number of Family Employed <span
                                    style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                            <select class="form-select form-select-solid form-control-long" name="householdMembers"
                                id="householdSelect">
                                <option value="" style="color:#444444;">Select a number </option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="payslip">Payslip/DSWD Report/ITR <span
                                    style="color: red; font-size: 12px; font-weight: normal;">*Upload PDF Only </span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="payslip" id="payslip"
                                    placeholder="" accept=".pdf">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row col-xl-10 mx-auto">
                    <div id="householdSections">
                    </div>
                    <div>
                    </div>
                </div>
                <br>
                <div class="row col-xl-10 mx-auto">
                    <div class="col-md-6 mb-3">
                        <div class="form-group" id="totalMonthlyIncomeField" style="display: none;">
                            <label for="totalMonthlyIncome"><strong>Total Monthly Household
                                Income</strong></label>
                            <input type="text" class="form-control" id="totalMonthlyIncome" required disabled>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary next-button-4" id="nextButtonStep4" style="margin-right: 9%;">Next</button>
            </div>


            <!-- ======= STEP 5 - ACCOUNT INFORMATION ======= -->
           
            <div class="container mt-4 mb-4" id="step5Content" style="display: none;">
                <div class="row col-xl-10 mx-auto">
                    <span style="color: red; display: none;" id="step5ErrorMessage">
                        @if ($errors->has('email'))
                            {{ $errors->first('email') }}
                        @endif
                    </span>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email <span
                                    style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder=""
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Password <span
                                    style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password <span
                                    style="color: red; font-size: 12px; font-weight: normal;">*</span></label>
                            <input type="password" class="form-control" id="confirm_password" placeholder=""
                                required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn submit-button" id="submitButton"
                data-kt-stepper-action="submit" style="display:none;   margin-right: 9%; ">
                Submit
            </button>
            </div>
          

            <!-- ======= NEXT AND PREVIOUS BUTTON ======= -->
            <div class="d-flex justify-content-between mt-3 ">
                <div>
                    <button type="button" class="btn btn-secondary  custom-margin-right previous-button"
                        id="previousButton" data-kt-stepper-action="previous" style="display: none; margin-left: 125%;">
                        Previous
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-primary next-button" id="nextButton"
                        data-kt-stepper-action="next">
                        Next
                    </button>
                </div>
                <div>
                    {{-- <button type="submit" class="btn submit-button" id="submitButton"
                        data-kt-stepper-action="submit" style="display:none; margin-right: 80%;">
                        Submit
                    </button> --}}
                </div>
            </div>
        </form>
    </div>
</div>


    {{-- <!-- Assuming there's an element with class 'submission-message' to display the submission message -->
    <div class="submission-message" style="display: none;">
        <h1>
            Thank you for your interest in applying!
            Please wait for a notification. Your papers are in the process of
            review and a verification link has been sent to your email.
        </h1>
        <a href="/">
            <button class="btn btn-primary home-button">
                Back to Home
            </button>
        </a>
    </div> --}}



    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const nextButtonStep2 = document.getElementById("nextButtonStep2");
            const step2ErrorMessage = document.getElementById("step2ErrorMessage");
            const nextButtonStep3 = document.getElementById("nextButtonStep3");
            const step3ErrorMessage = document.getElementById("step3ErrorMessage");


            const elements = {
                stepperItems: document.querySelectorAll(".stepper-item"),
                step1Content: document.getElementById("step1Content"),
                step2Content: document.getElementById("step2Content"),
                step3Content: document.getElementById("step3Content"),
                step4Content: document.getElementById("step4Content"),
                step5Content: document.getElementById("step5Content")
            };

            function validateInput(input) {
                const trimmedValue = input.value.trim();
                const isValid = trimmedValue !== '';
                if (!isValid) {
                    input.classList.add('border', 'border-danger', 'is-invalid');
                } else {
                    input.classList.remove('border', 'border-danger', 'is-invalid');
                }
                return isValid;
            }


            function validateNameInput(input, errorMessageElement) {
                const trimmedValue = input.value.trim();
                const hasSpecialChars = /[!@#$%^&*()_+\-=\[\]{};':"\\|,<>\/?]+/.test(trimmedValue);
                const isValid = /^[A-Za-z\s]*$/.test(trimmedValue);
                const isRequiredField = input.getAttribute('required') !== null;

                if (isRequiredField && trimmedValue === '') {
                    input.classList.add('border', 'border-danger', 'is-invalid');
                    errorMessageElement.style.display = 'block';
                    errorMessageElement.innerText = '';
                    return false;
                } else if (!hasSpecialChars && !isRequiredField && trimmedValue === '') {
                    input.classList.remove('border', 'border-danger', 'is-invalid');
                    errorMessageElement.style.display = 'none';
                    return true;
                } else if (hasSpecialChars || !isValid) {
                    input.classList.add('border', 'border-danger', 'is-invalid');
                    errorMessageElement.style.display = 'block';
                    errorMessageElement.innerText = '(Invalid characters entered)';
                    return false;
                } else {
                    input.classList.remove('border', 'border-danger', 'is-invalid');
                    errorMessageElement.style.display = 'none';
                    return true;
                }
            }

            function validateContactLength(input) {
                const contactError = document.getElementById('contactError');
                const expectedLength = 11;
                const trimmedValue = input.value.trim();

                if (trimmedValue === '') {
                    contactError.style.display = 'none';
                    return false;
                } else if (trimmedValue.length !== expectedLength) {
                    contactError.style.display = 'block';
                    return false;
                } else {
                    contactError.style.display = 'none';
                    return true;
                }
            }

            const firstNameInput = document.getElementById('firstname');
            const lastNameInput = document.getElementById('lastname');

            const nameErrorMessage = document.getElementById('nameErrorMessage');
            const lnameErrorMessage = document.getElementById('lnameErrorMessage');

            firstNameInput.addEventListener('input', function() {
                validateNameInput(this, nameErrorMessage);
            });

            lastNameInput.addEventListener('input', function() {
                validateNameInput(this, lnameErrorMessage);
            });

            //CONTACT NUMBER LENGTH
            function validateContactLength(input) {
                const contactError = document.getElementById('contactError');
                const expectedLength = 11;
                const isValidLength = input.value.trim().length === expectedLength;

                contactError.style.display = isValidLength ? 'none' : 'block';
                return isValidLength;
            }

            // REAL-TIME VALIDATION
            const contactInput = document.getElementById('contact_no');
            contactInput.addEventListener('input', function() {
                validateInput(this);
                validateContactLength(this);
            });

            document.querySelectorAll('#step2Content input[required]').forEach(function(input) {
                input.addEventListener('input', function() {
                    validateInput(this);
                });
            });

            const birthdateInput = document.getElementById('birthdate');
            birthdateInput.addEventListener('input', function() {
                validateInput(this);
            });

            //BIRTHDATE VALIDATION
            const today = new Date();
            const maxDate = new Date(today.getFullYear() - 25, today.getMonth(), today.getDate());
            const maxDateString = today.toISOString().split('T')[0];
            birthdateInput.setAttribute('max', maxDateString);

            function calculateAge(birthdate) {
                const today = new Date();
                const birthDate = new Date(birthdate);
                let age = today.getFullYear() - birthDate.getFullYear();
                const monthDiff = today.getMonth() - birthDate.getMonth();

                if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                    age--;
                }
                return age;
            }

            function validateAge(input) {
                if (input.value === '') {
                    return false;
                }

                const age = calculateAge(input.value);
                 return age >= 12 && age <= 25;
            }

            //NEXT BUTTON
            nextButtonStep2.addEventListener("click", function(e) {
                e.preventDefault();

                const inputs = document.querySelectorAll('#step2Content input[required]');
                let isValid = true;
                let hasSpecialCharacters = false;
                let ageValid = true;
                let birthdateEmpty = false;
                let contactValid = true;
                let firstNameValid = true;
                let lastNameValid = true;
                let addressFieldsValid = true;

                inputs.forEach(function(input) {
                    if (input.id === 'firstname') {
                        firstNameValid = validateNameInput(input, nameErrorMessage);
                        if (!firstNameValid) {
                            hasSpecialCharacters = true;
                        }
                    } else if (input.id === 'lastname') {
                        lastNameValid = validateNameInput(input, lnameErrorMessage);
                        if (!lastNameValid) {
                            hasSpecialCharacters = true;
                        }
                    } else if (input.id === 'house_no' || input.id === 'street' || input.id ===
                        'barangay' || input.id === 'municipality') {
                        if (!input.value.trim()) {
                            validateInput(input);
                            addressFieldsValid = false;
                            isValid = false;
                        }
                    } else {
                        if (!input.value.trim()) {
                            validateInput(input);
                            isValid = false;
                        }
                    }
                });

                // VALDATION AGE AND BDAY
                if (birthdateInput.value === '') {
                    birthdateEmpty = true;
                    isValid = false;
                } else {
                    if (!validateAge(birthdateInput)) {
                        ageValid = false;
                        isValid = false;
                    }
                }

                const contactInput = document.getElementById('contact_no');
                const trimmedContactValue = contactInput.value.trim();
                if (!trimmedContactValue) {
                    validateInput(contactInput);
                    isValid = false;
                    contactError.style.display = 'none';
                } else {
                    contactValid = validateContactLength(contactInput);
                    if (!contactValid) {
                        isValid = false;
                        step2ErrorMessage.innerText = '';
                    }
                    contactError.style.display = contactValid ? 'none' : 'block';
                }

                if (isValid && ageValid && !hasSpecialCharacters && !birthdateEmpty && addressFieldsValid) {
                    handleStepTransition(2);
                    setTimeout(() => {
                        elements.stepperItems[1].classList.add('done');
                        handleStepperNumberColors(2);
                        step2ErrorMessage.style.display = "none";
                    }, 100);
                } else {
                    if (birthdateEmpty) {
                        step2ErrorMessage.innerText = "Please fill out all required fields.";
                    } else if (!ageValid) {
                        step2ErrorMessage.innerText =
                            "You must be between the ages of 12 and 25 to qualify for the scholarship.";
                    } else if (hasSpecialCharacters) {
                        step2ErrorMessage.innerText = "";
                    } else if (!addressFieldsValid) {
                        step2ErrorMessage.innerText = "Please fill out all address fields.";
                    }

                    nameErrorMessage.style.display = firstNameValid ? 'none' : 'block';
                    lnameErrorMessage.style.display = lastNameValid ? 'none' : 'block';
                }


                document.querySelectorAll('#step2Content input[type="text"][required]').forEach(function(
                    input) {
                    if (!input.value.trim()) {
                        const errorMessageElement = document.getElementById(input.id +
                            "ErrorMessage");
                        if (errorMessageElement) {
                            errorMessageElement.style.display = 'block';
                        }
                    }
                });

                step2ErrorMessage.style.display = (isValid && !hasSpecialCharacters) ? 'none' : 'block';
            });



            //STEP 3

            // REQUIRED FIELDS
            function validateRequiredFields(selectedGrade) {
                const incomingGrade = document.getElementById("incomingGrade");
                const currentSchool = document.getElementsByName("currentSchool")[0];
                const currentProgram = document.getElementsByName("currentProgram")[0];
                // const currentCourse = document.getElementsByName("currentCourse")[0];

                const grade3GWA = document.getElementsByName("grade3GWA")[0];
                const grade4GWA = document.getElementsByName("grade4GWA")[0];
                const grade5GWA = document.getElementsByName("grade5GWA")[0];
                const grade6GWA = document.getElementsByName("grade6GWA")[0];
                const grade7GWA = document.getElementsByName("grade7GWA")[0];
                const grade8GWA = document.getElementsByName("grade8GWA")[0];
                const grade9GWA = document.getElementsByName("grade9GWA")[0];
                const grade10GWA = document.getElementsByName("grade10GWA")[0];
                const reportCard = document.getElementsByName("ReportCard")[0];

                // SCHOOL CHOICE
                const schoolChoice1 = document.getElementsByName("schoolChoice1")[0];
                const schoolChoice2 = document.getElementsByName("schoolChoice2")[0];
                const schoolChoice3 = document.getElementsByName("schoolChoice3")[0];

                //COURSE CHOICE
                const courseChoice1 = document.getElementsByName("courseChoice1")[0];
                const courseChoice2 = document.getElementsByName("courseChoice2")[0];
                const courseChoice3 = document.getElementsByName("courseChoice3")[0];

                //GRADE 11 GWA
                const grade11SemSelect = document.getElementById("grade11SemSelect");
                const g11FirstSem = document.getElementsByName("grade11FirstSemGWA")[0];
                const g11SecondSem = document.getElementsByName("grade11SecondSemGWA")[0];
                const g11ThirdSem = document.getElementsByName("grade11ThirdSemGWA")[0];
                const g11FourthSem = document.getElementsByName("grade11FourthSemGWA")[0];

                //GRADE 12 GWA
                const grade12SemSelect = document.getElementById("grade12SemSelect");
                const g12FirstSem = document.getElementsByName("grade12FirstSemGWA")[0];
                const g12SecondSem = document.getElementsByName("grade12SecondSemGWA")[0];
                const g12ThirdSem = document.getElementsByName("grade12ThirdSemGWA")[0];
                const g12FourthSem = document.getElementsByName("grade12FourthSemGWA")[0];

                //FIRST YEAR GWA
                const firstYearSemSelect = document.getElementById("firstYearSemSelect");
                const firstYearFirstSem = document.getElementsByName("firstYearFirstSemGWA")[0];
                const firstYearSecondSem = document.getElementsByName("firstYearSecondSemGWA")[0];
                const firstYearThirdSem = document.getElementsByName("firstYearThirdSemGWA")[0];
                const firstYearFourthSem = document.getElementsByName("firstYearFourthSemGWA")[0];

                //SECOND YEAR GWA
                const secondYearSemSelect = document.getElementById("secondYearSemSelect");
                const secondYearFirstSem = document.getElementsByName("secondYearFirstSemGWA")[0];
                const secondYearSecondSem = document.getElementsByName("secondYearSecondSemGWA")[0];
                const secondYearThirdSem = document.getElementsByName("secondYearThirdSemGWA")[0];
                const secondYearFourthSem = document.getElementsByName("secondYearFourthSemGWA")[0];


                const grade11Semesters = {
                    TwoSem: ["g11FirstSem", "g11SecondSem"],
                    ThreeSem: ["g11FirstSem", "g11SecondSem", "g11ThirdSem"],
                    FourSem: ["g11FirstSem", "g11SecondSem", "g11ThirdSem", "g11FourthSem"]
                };

                const grade12Semesters = {
                    TwoSem: ["g12FirstSem", "g12SecondSem"],
                    ThreeSem: ["g12FirstSem", "g12SecondSem", "g12ThirdSem"],
                    FourSem: ["g12FirstSem", "g12SecondSem", "g12ThirdSem", "g12FourthSem"]
                };

                const firstYearSemesters = {
                    TwoSem: ["firstYearFirstSem", "firstYearSecondSem"],
                    ThreeSem: ["firstYearFirstSem", "firstYearSecondSem", "firstYearThirdSem"],
                    FourSem: ["firstYearFirstSem", "firstYearSecondSem", "firstYearThirdSem",
                        "firstYearFourthSem"
                    ]
                };

                const secondYearSemesters = {
                    TwoSem: ["secondYearFirstSem", "secondYearSecondSem"],
                    ThreeSem: ["secondYearFirstSem", "secondYearSecondSem", "secondYearThirdSem"],
                    FourSem: ["secondYearFirstSem", "secondYearSecondSem", "secondYearThirdSem",
                        "secondYearFourthSem"
                    ]
                };


                const requiredFields = {
                    GradeSeven: [incomingGrade, currentSchool, grade3GWA, grade4GWA, grade5GWA, reportCard],
                    GradeEight: [incomingGrade, currentSchool, grade4GWA, grade5GWA, grade6GWA, reportCard],
                    GradeNine: [incomingGrade, currentSchool, grade5GWA, grade6GWA, grade7GWA, reportCard],
                    GradeTen: [incomingGrade, currentSchool, grade6GWA, grade7GWA, grade8GWA, reportCard],
                    GradeEleven: [incomingGrade, currentSchool, grade7GWA, grade8GWA, grade9GWA, reportCard],
                    GradeTwelve: [incomingGrade, currentSchool, currentProgram, grade8GWA, grade9GWA,
                        grade10GWA, reportCard
                    ],
                    FirstYear: [currentSchool, currentProgram, grade9GWA, grade10GWA, grade11SemSelect,
                        reportCard, schoolChoice1, schoolChoice2, schoolChoice3, courseChoice1,
                        courseChoice2, courseChoice3
                    ],
                    SecondYear: [incomingGrade, currentProgram, currentSchool, grade10GWA, grade11SemSelect,
                        grade12SemSelect, reportCard
                    ],
                    ThirdYear: [incomingGrade, currentProgram, currentSchool, grade11SemSelect,
                        grade12SemSelect, firstYearSemSelect, reportCard
                    ],
                    FourthYear: [incomingGrade, currentProgram, currentSchool, grade12SemSelect,
                        firstYearSemSelect, secondYearSemSelect, reportCard
                    ]
                };

                let isValid = true;

                //RESET GRADE 12 SEMESTER FIELDS
                function resetGrade12SemesterFields() {
                    g12FirstSem.value = '';
                    g12SecondSem.value = '';
                    g12ThirdSem.value = '';
                    g12FourthSem.value = '';

                    // REMOVE ANY VALIDATION
                    g12FirstSem.classList.remove('border', 'border-danger', 'is-invalid');
                    g12SecondSem.classList.remove('border', 'border-danger', 'is-invalid');
                    g12ThirdSem.classList.remove('border', 'border-danger', 'is-invalid');
                    g12FourthSem.classList.remove('border', 'border-danger', 'is-invalid');
                }

                document.getElementById("grade12SemSelect").addEventListener('change', function() {
                    resetGrade12SemesterFields(); // RESET GRADE 11
                });


                // VALIDATION FOR INCOMING GRADE
                const requiredIncomingGrade = [incomingGrade];
                requiredIncomingGrade.forEach(field => {
                    if (!validateInput(field)) {
                        isValid = false;
                    }
                });

                // VALIDATION FOR CURRENT SCHOOL
                const requiredCurrentSchool = [currentSchool];
                requiredCurrentSchool.forEach(field => {
                    if (!validateInput(field)) {
                        isValid = false;
                    }
                });

                //FIRST YEAR REQUIRED - GRADE11 SEMESTERS REQUIRED

                if (selectedGrade === 'FirstYear' || selectedGrade === 'SecondYear' || selectedGrade ===
                    'ThirdYear') {
                    const grade11SemSelect = document.getElementById("grade11SemSelect");
                    const selectedSemesters11 = grade11SemSelect.value;


                    const filledSemesters11 = [g11FirstSem, g11SecondSem, g11ThirdSem, g11FourthSem]
                        .filter(semester => semester.value.trim() !== '');

                    const requiredSemesterFields11 = [g11FirstSem, g11SecondSem];

                    if (selectedSemesters11 === "ThreeSem") {
                        requiredSemesterFields11.push(g11ThirdSem);
                    } else if (selectedSemesters11 === "FourSem") {
                        requiredSemesterFields11.push(g11ThirdSem, g11FourthSem);
                    }

                    requiredSemesterFields11.forEach(semesterField => {
                        if (!filledSemesters11.includes(semesterField)) {
                            semesterField.classList.add('border', 'border-danger', 'is-invalid');
                            isValid = false;
                        } else {
                            semesterField.classList.remove('border', 'border-danger', 'is-invalid');
                        }
                    });

                    if (selectedGrade === 'SecondYear' || selectedGrade === 'ThirdYear') {
                        const grade12SemSelect = document.getElementById("grade12SemSelect");
                        const selectedSemesters12 = grade12SemSelect.value;
                        const filledSemesters12 = [g12FirstSem, g12SecondSem, g12ThirdSem, g12FourthSem]
                            .filter(semester => semester.value.trim() !== '');

                        const requiredSemesterFields12 = [g12FirstSem, g12SecondSem];

                        if (selectedSemesters12 === "g12ThreeSem") {
                            requiredSemesterFields12.push(g12ThirdSem);
                        } else if (selectedSemesters12 === "g12FourSem") {
                            requiredSemesterFields12.push(g12ThirdSem, g12FourthSem);
                        }

                        requiredSemesterFields12.forEach(semesterField => {
                            if (!filledSemesters12.includes(semesterField)) {
                                semesterField.classList.add('border', 'border-danger', 'is-invalid');
                                isValid = false;
                            } else {
                                semesterField.classList.remove('border', 'border-danger', 'is-invalid');
                            }
                        });

                        if (!validateInput(grade12SemSelect)) {
                            isValid = false;
                        }
                    }

                    if (selectedGrade === 'ThirdYear') {
                        const firstYearSemSelect = document.getElementById("firstYearSemSelect");
                        const selectedFirstYearSemesters = firstYearSemSelect.value;

                        const firstYearSemesterFields = [
                            document.getElementsByName("firstYearFirstSemGWA")[0],
                            document.getElementsByName("firstYearSecondSemGWA")[0],
                            document.getElementsByName("firstYearThirdSemGWA")[0],
                            document.getElementsByName("firstYearFourthSemGWA")[0]
                        ];

                        const filledFirstYearSemesters = firstYearSemesterFields
                            .filter(semester => semester.value.trim() !== '');

                        const requiredFirstYearSemesterFields = [
                            document.getElementsByName("firstYearFirstSemGWA")[0],
                            document.getElementsByName("firstYearSecondSemGWA")[0]
                        ];

                        if (selectedFirstYearSemesters === "firstYearThreeSem") {
                            requiredFirstYearSemesterFields.push(document.getElementsByName("firstYearThirdSemGWA")[
                                0]);
                        } else if (selectedFirstYearSemesters === "firstYearFourSem") {
                            requiredFirstYearSemesterFields.push(
                                document.getElementsByName("firstYearThirdSemGWA")[0],
                                document.getElementsByName("firstYearFourthSemGWA")[0]
                            );
                        }

                        requiredFirstYearSemesterFields.forEach(semesterField => {
                            if (!filledFirstYearSemesters.includes(semesterField)) {
                                semesterField.classList.add('border', 'border-danger', 'is-invalid');
                                isValid = false;
                            } else {
                                semesterField.classList.remove('border', 'border-danger', 'is-invalid');
                            }
                        });
                        if (selectedGrade === 'FourthYear') {
                            const grade12SemSelect = document.getElementById("grade12SemSelect");
                            const selectedSemesters12 = grade12SemSelect.value;
                            const filledSemesters12 = [g12FirstSem, g12SecondSem, g12ThirdSem, g12FourthSem]
                                .filter(semester => semester.value.trim() !== '');

                            const requiredSemesterFields12 = [g12FirstSem, g12SecondSem, g12ThirdSem, g12FourthSem];

                            if (selectedSemesters12 === "g12ThreeSem") {
                                requiredSemesterFields12.pop();
                            }

                            requiredSemesterFields12.forEach(semesterField => {
                                if (!filledSemesters12.includes(semesterField)) {
                                    semesterField.classList.add('border', 'border-danger', 'is-invalid');
                                    isValid = false;
                                } else {
                                    semesterField.classList.remove('border', 'border-danger', 'is-invalid');
                                }
                            });

                            if (!validateInput(grade12SemSelect) || filledSemesters12.length !==
                                requiredSemesterFields12.length) {
                                isValid = false;
                            }

                            const firstYearSemesterFields = [
                                document.getElementsByName("firstYearFirstSemGWA")[0],
                                document.getElementsByName("firstYearSecondSemGWA")[0],
                                document.getElementsByName("firstYearThirdSemGWA")[0],
                                document.getElementsByName("firstYearFourthSemGWA")[0]
                            ];

                            const filledFirstYearSemesters = firstYearSemesterFields
                                .filter(semester => semester.value.trim() !== '');

                            const requiredFirstYearSemesterFields = [
                                document.getElementsByName("firstYearFirstSemGWA")[0],
                                document.getElementsByName("firstYearSecondSemGWA")[0],
                                document.getElementsByName("firstYearThirdSemGWA")[0],
                                document.getElementsByName("firstYearFourthSemGWA")[0]
                            ];

                            const firstYearSemSelect = document.getElementById("firstYearSemSelect");
                            const selectedFirstYearSemesters = firstYearSemSelect.value;

                            if (selectedFirstYearSemesters === "firstYearThreeSem") {
                                requiredFirstYearSemesterFields.pop();
                            }

                            requiredFirstYearSemesterFields.forEach(semesterField => {
                                if (!filledFirstYearSemesters.includes(semesterField)) {
                                    semesterField.classList.add('border', 'border-danger', 'is-invalid');
                                    isValid = false;
                                } else {
                                    semesterField.classList.remove('border', 'border-danger', 'is-invalid');
                                }
                            });

                            if (!validateInput(firstYearSemSelect) || filledFirstYearSemesters.length !==
                                requiredFirstYearSemesterFields.length) {
                                isValid = false;
                            }
                        }


                    }
                }

                //RESET GRADE 11 SEMESTER FIELDS
                function resetGrade11SemesterFields() {
                    g11FirstSem.value = '';
                    g11SecondSem.value = '';
                    g11ThirdSem.value = '';
                    g11FourthSem.value = '';

                    // REMOVE ANY VALIDATION
                    g11FirstSem.classList.remove('border', 'border-danger', 'is-invalid');
                    g11SecondSem.classList.remove('border', 'border-danger', 'is-invalid');
                    g11ThirdSem.classList.remove('border', 'border-danger', 'is-invalid');
                    g11FourthSem.classList.remove('border', 'border-danger', 'is-invalid');
                }

                //RESET GRADE FIRST YEAR SEMESTER FIELDS
                function resetFirstYearSemesterFields() {
                    firstYearFirstSem.value = '';
                    firstYearSecondSem.value = '';
                    firstYearThirdSem.value = '';
                    firstYearFourthSem.value = '';

                    // REMOVE ANY VALIDATION
                    firstYearFirstSem.classList.remove('border', 'border-danger', 'is-invalid');
                    firstYearSecondSem.classList.remove('border', 'border-danger', 'is-invalid');
                    firstYearThirdSem.classList.remove('border', 'border-danger', 'is-invalid');
                    firstYearFourthSem.classList.remove('border', 'border-danger', 'is-invalid');
                }

                document.getElementById("firstYearSemSelect").addEventListener('change', function() {
                    resetFirstYearSemesterFields();
                });

                document.getElementById("grade11SemSelect").addEventListener('change', function() {
                    resetGrade11SemesterFields(); // RESET GRADE 11
                });

                if (!selectedGrade || !requiredFields[selectedGrade]) {
                    return false;
                }

                //GRADE 11 SEMESTERS
                const thirdYearSelectedSemesters11 = grade11SemSelect.value;
                const selectedSemesters = grade11SemSelect.value;
                const semesterFields = grade11Semesters[selectedSemesters] || [];
                const requiredSemesterFields = [];

                requiredFields.FirstYear.forEach(function(field) {
                    if (semesterFields.includes(field.id)) {
                        requiredSemesterFields.push(field);
                    }
                });

                requiredFields[selectedGrade].forEach(function(field) {
                    if (!validateInput(field)) {
                        isValid = false;
                    }
                });

                requiredSemesterFields.forEach(function(field) {
                    if (!validateInput(field)) {
                        isValid = false;
                    }
                });

                if (!selectedGrade || !requiredFields[selectedGrade]) {
                    return false;
                }

                //GRADE 12 SEMESTERS 
                // const selectedSemesters12 = grade12SemSelect.value;
                // const semesterFields12 = grade11Semesters[selectedSemesters12] || [];
                const requiredSemesterFields12 = [];

                requiredFields.SecondYear.forEach(function(field) {
                    if (semesterFields.includes(field.id)) {
                        requiredSemesterFields.push(field);
                    }
                });

                requiredFields[selectedGrade].forEach(function(field) {
                    if (!validateInput(field)) {
                        isValid = false;
                    }
                });

                requiredSemesterFields12.forEach(function(field) {
                    if (!validateInput(field)) {
                        isValid = false;
                    }
                });

                return isValid;
            }

            //NEXT BUTTON IN STEP 3
            document.getElementById("nextButtonStep3").addEventListener("click", function() {
                const step3ErrorMessage = document.getElementById("step3ErrorMessage");
                const incomingGrade = document.getElementById("incomingGrade");
                const selectedGrade = incomingGrade.value;

                const isValid = validateRequiredFields(selectedGrade);
                const gwaInputs = document.querySelectorAll('.form-control-long[type="number"]');
                let isValidGWAs = true;

                gwaInputs.forEach(input => {
                    const gwaValue = parseFloat(input.value);
                    if (input.value.trim() === '' || gwaValue < 88 || gwaValue > 100 || isNaN(gwaValue)) {
                        isValidGWAs = false;
                        input.classList.add('border', 'border-danger', 'is-invalid');
                    } else {
                        input.classList.remove('border', 'border-danger', 'is-invalid');
                    }
                });

                if (!isValid) {
                    step3ErrorMessage.textContent = "Please fill out all required fields.";
                    step3ErrorMessage.style.display = 'block';
                } else if (!isValidGWAs) {
                    const anyBelow88 = Array.from(gwaInputs).some(input => {
                        const gwaValue = parseFloat(input.value);
                        return gwaValue < 88 && input.value.trim() !== '';
                    });

                    if (anyBelow88) {
                        step3ErrorMessage.textContent =
                            "The Grade Weighted Average (GWA) should fall within the range of 88 to 100. Please confirm that the provided GWA meets this requirement before proceeding to the next step.";
                        step3ErrorMessage.style.fontSize = '14px';
                        step3ErrorMessage.style.display = 'block';
                    } else {
                        step3ErrorMessage.style.display = 'none';
                        handleStepTransition(3);
                        setTimeout(() => {
                            elements.stepperItems[2].classList.add('done');
                            handleStepperNumberColors(3);
                        }, 100);
                    }
                } else {
                    step3ErrorMessage.style.display = 'none';
                    handleStepTransition(3);
                    setTimeout(() => {
                        elements.stepperItems[2].classList.add('done');
                        handleStepperNumberColors(3);
                    }, 100);
                }
            });

            //REAL-TIME VALIDATION
            const elementNames = [
                "incomingGrade", "currentSchool", "currentProgram", "ReportCard", "grade3GWA", "grade4GWA",
                "grade5GWA",
                "grade6GWA",
                "grade7GWA", "grade8GWA", "grade9GWA", "grade10GWA", "grade11Semester", "grade11FirstSemGWA",
                "grade11SecondSemGWA",
                "grade11ThirdSemGWA", "grade11FourthSemGWA", "schoolChoice1", "schoolChoice2", "schoolChoice3",
                "courseChoice1",
                "courseChoice2", "courseChoice3", "grade12Semester", "grade12FirstSemGWA",
                "grade12SecondSemGWA",
                "grade12ThirdSemGWA", "grade12FourthSemGWA", "firstYearSemester", "firstYearFirstSemGWA",
                "firstYearSecondSemGWA",
                "firstYearThirdSemGWA", "firstYearFourthSemGWA", "secondYearSemester", "secondYearFirstSemGWA",
                "secondYearSecondSemGWA",
                "secondYearThirdSemGWA", "secondYearFourthSemGWA"
            ];

            elementNames.forEach(name => {
                const elements = document.getElementsByName(name);
                if (elements.length > 0) {
                    elements[0].addEventListener('input', function() {
                        validateInput(this);
                    });
                } else if (name === 'incomingGrade') {
                    const element = document.getElementById(name);
                    element.addEventListener('input', function() {
                        validateInput(this);
                    });
                }
            });

            //PDF FILE VALIDATION
            const reportCardField = document.getElementById('reportCardFile');
            reportCardField.addEventListener('change', function(event) {
                const file = event.target.files[0];
                const fileType = file.type;

                if (fileType !== 'application/pdf') {
                    step3PdfErrorMessage.style.display = 'block';
                    event.target.value = '';
                } else {
                    step3PdfErrorMessage.style.display = 'none';
                }
            });


            // STEP 4    
            const householdSelect = document.getElementById('householdSelect');
            const totalMonthlyIncomeField = document.getElementById('totalMonthlyIncome');
            const householdSections = document.getElementById('householdSections');

            function validateInput(input) {
                const trimmedValue = input.value.trim();
                const isValid = trimmedValue !== '';

                if (input.id !== 'totalMonthlyIncome') {
                    if (!isValid) {
                        input.classList.add('border', 'border-danger', 'is-invalid');
                    } else {
                        input.classList.remove('border', 'border-danger', 'is-invalid');
                    }
                } else {
                    input.classList.remove('border', 'border-danger', 'is-invalid');
                }

                return isValid;
            }

            householdSections.addEventListener('input', function(event) {
                if (event.target.matches('input[required], select[required]')) {
                    validateInput(event.target);
                }
            });

            const payslipField = document.getElementById('payslip');
            payslipField.addEventListener('change', function(event) {
                const file = event.target.files[0];
                const fileType = file.type;

                if (fileType !== 'application/pdf') {
                    step4PdfErrorMessage.style.display = 'block';
                    event.target.value = '';
                } else {
                    step4PdfErrorMessage.style.display = 'none';
                }
            });

            document.getElementById("nextButtonStep4").addEventListener("click", function() {
                const step4ErrorMessage = document.getElementById("step4ErrorMessage");
                const householdFields = document.querySelectorAll(
                    '#step4Content input[required], #step4Content select[required]');
                const payslipField = document.getElementById('payslip');
                const householdSelect = document.getElementById('householdSelect');
                const totalMonthlyIncomeField = document.getElementById('totalMonthlyIncome');

                let isValid = true;

                householdFields.forEach(field => {
                    if (!validateInput(field)) {
                        isValid = false;
                    }
                });

                // VALIDATION
                const occupationFields = document.querySelectorAll('[id^="occupation"]');
                occupationFields.forEach(field => {
                    field.addEventListener('input', function(event) {
                        validateInput(event.target);
                    });
                    if (!validateInput(field)) {
                        isValid = false;
                    }
                });


                if (!validateInput(householdSelect)) {
                    isValid = false;
                }

                if (!validateInput(payslipField)) {
                    isValid = false;
                }

                if (!isValid) {
                    step4ErrorMessage.style.display = 'block';
                } else {
                    step4ErrorMessage.style.display = 'none';
                    handleStepTransition(4);
                    setTimeout(() => {
                        elements.stepperItems[3].classList.add('done');
                        handleStepperNumberColors(4);
                    }, 100);
                }

            });

     


            //STEPPER CHECK
            function handleStepTransition(currentIndex) {
                const stepsContent = ["step1Content", "step2Content", "step3Content", "step4Content",
                    "step5Content"];
                const submitButton = document.getElementById('submitButton');

                stepsContent.forEach((content, index) => {
                    const stepContent = document.getElementById(content);
                    stepContent.style.display = (index === currentIndex ? "block" : "none");
                    elements.stepperItems[index].classList.toggle('current', index === currentIndex);

                    if (index === 4) {
                        submitButton.style.display = (index === currentIndex ? 'block' : 'none');
                    }
                });

            handleStepperNumberColors(currentIndex);
        }

            const handleStepperNumberColors = (currentIndex) => {
                elements.stepperItems.forEach((item, index) => {
                    const stepperNumber = item.querySelector('.stepper-number');
                    if (item.classList.contains('done')) {
                        stepperNumber.style.backgroundColor = '#518630';
                        stepperNumber.innerHTML = '<i class="fas fa-check"></i>';
                        stepperNumber.style.color = '#fff';
                    } else if (index === currentIndex) {
                        stepperNumber.style.backgroundColor = '#518630';
                        stepperNumber.innerHTML = (index + 1).toString();
                        stepperNumber.style.color = '#fff';
                    } else {
                        stepperNumber.style.backgroundColor = '#D9D9D9';
                        stepperNumber.innerHTML = (index + 1).toString();
                        stepperNumber.style.color = '#000';
                    }
                });
            };

            function displayStepContent(currentIndex) {
                const stepsContent = [
                    elements.step1Content,
                    elements.step2Content,
                    elements.step3Content,
                    elements.step4Content,
                    elements.step5Content
                ];

                elements.stepperItems.forEach((item, index) => {
                    const stepContent = stepsContent[index];
                    if (index === currentIndex) {
                        item.classList.add('current');
                        stepContent.style.display = 'block';
                        if (index === 4) {
                            document.getElementById('submitButton').style.display = 'block';
                        } else {
                            document.getElementById('submitButton').style.display = 'none';
                        }
                    } else {
                        item.classList.remove('current');
                        stepContent.style.display = 'none';
                    }
                });
            }
        });
    </script>


</body>

</html>
