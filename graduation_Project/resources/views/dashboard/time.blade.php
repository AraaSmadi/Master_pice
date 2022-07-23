<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
</head>

<body>
    @include('dashboard.layout.Navbar')
    <!-- partial -->

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Avalibale Time </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Time</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Avalibale Time </h4>
                            <p class="card-description">  </p>
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      {{ $message }}
      </div>
  @endif
                        <form class="forms-sample" action="{{route('times')}}" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Date: </label>
                                    <input type="date" class="form-control" id="exampleInputUsername1"
                                        placeholder="Username" name="date">
                                </div>
                                @error('date')
                                <div style="color: #ff0000;">{{$message}}</div>
                              @enderror
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Day: </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="day"
                                        placeholder="Email">

                                        @error('day')
                                        <div style="color: #ff0000;">{{$message}}</div>
                                      @enderror    </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hour : </label>
                                     <input type="text" class="form-control" id="exampleInputPassword1" name="hour"
                                        placeholder="Password">
                                </div>
                                @error('hour')
                                <div style="color: #ff0000;">{{$message}}</div>
                              @enderror
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Price per hour : </label>
                                    <input type="text" class="form-control" id="exampleInputConfirmPassword1" name="hour"
                                        placeholder="Password">
                                </div>
                                @error('price')
                                <div style="color: #ff0000;">{{$message}}</div>
                              @enderror
                                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>

    </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="container-fluid d-flex justify-content-between">
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com
                2021</span>
            <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a
                    href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin
                    template</a> from Bootstrapdash.com</span>
        </div>
    </footer>
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/file-upload.js"></script>
    <!-- End custom js for this page -->
</body>

</html>
