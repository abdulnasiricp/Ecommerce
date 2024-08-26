
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Truelysell | Template</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="{{url('assets/css/admin.css')}}">
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
</head>

<body>
    <!-- Admin Sidebar -->
    @include('Dashboard.navbar-header')

    <!-- Main Content -->
    @yield('admin-content')


    <script src="assets/js/jquery-3.6.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/moment.min.js"></script>
      <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
      <script src="assets/js/slimscroll.min.js"></script>
      <script src="assets/js/jquery.dataTables.min.js"></script>
      <script src="assets/js/datatables.min.js"></script>
      <script src="assets/js/select2.min.js"></script>
      <script src="assets/js/admin.js"></script>
</body>

</html>