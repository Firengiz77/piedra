<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('back/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('back/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('back/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('back/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('back/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('back/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('back/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('back/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('back/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('back/images/favicon.png')}}" />

</head>
<body>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('back/images/logo.svg')}}" alt="logo">
              </div>
              <h4> Register for Piedra's Admin Panel </h4>
         
              <form class="pt-3" method="post" action="{{route('admin.register')}}">
                @csrf
                <div class="form-group">
                  <input type="text" name="name" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                  </div>
                
                <div class="form-group">
                  <input type="text" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
              
                <div class="text-center mt-4 fw-light">
                    <button type="submit" class="btn btn-primary"> Register </button>
                </div>

      
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->



<!-- plugins:js -->
<script src="{{asset('back/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('back/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('back/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('back/vendors/progressbar.js/progressbar.min.js')}}"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('back/js/off-canvas.js')}}"></script>
<script src="{{asset('back/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('back/js/template.js')}}"></script>
<script src="{{asset('back/js/settings.js')}}"></script>
<script src="{{asset('back/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('back/js/jquery.cookie.js')}}" type="text/javascript"></script>
<script src="{{asset('back/js/dashboard.js')}}"></script>
<script src="{{asset('back/js/Chart.roundedBarCharts.js')}}"></script>
<!-- End custom js for this page-->
</body>

</html>