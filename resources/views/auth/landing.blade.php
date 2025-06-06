<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome | Online Exam System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/dist/css/adminlte.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background-color: #f4f6f9;">

<div class="login-box">
  <div class="login-logo">
    <b>Online</b> Exam System
  </div>

  <div class="card">
    <div class="card-body text-center">
      <h4 class="mb-4">Welcome to the Online Exam System</h4>
      <a href="{{ route('login') }}" class="btn btn-primary btn-block mb-2">
        <i class="fas fa-sign-in-alt mr-1"></i> Login
      </a>
      <a href="{{ route('register') }}" class="btn btn-success btn-block">
        <i class="fas fa-user-plus mr-1"></i> Register
      </a>
    </div>
  </div>
</div>

<!-- AdminLTE Scripts -->
<script src="{{ asset('dashboard/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dashboard/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
