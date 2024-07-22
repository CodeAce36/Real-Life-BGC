<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Verification</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link href="assets/img/RLlogo1.png" rel="icon">
    <link href="assets/img/RLlogo1.png" rel="apple-touch-icon">
</head>

<body style="background-color: #fafafa;">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; padding: 20px;">
        <div class="card text-center" style="padding: 20px;">
            <div class="card-body">
                <img src="assets-applicant/img/verification_sent.png" class="img-fluid" alt="Successfully Sent Image"
                    style="max-width: 30%; height: auto;">
                <h1>Verify your email</h1>
                <p style="padding: 10px;">Thanks for interested for applying! We've sent an email to verify your email
                    address and activate your account.</p>
                {{-- <button type="button" class="btn " style="background-color: #71BF44; color:white;">Resend Email </button> --}}
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>