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
                <h3 class="page-title"> Tools and works </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Tools and works </li>
                    </ol>
                </nav>
            </div>
            <form class="forms-sample"  action="{{route('tools')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Work</h4>
                                <p class="card-description"> Photos </p>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Photo 1 : </label>
                                    <input type="file" class="form-control" id="exampleInputUsername1" name="image1"
                                        placeholder="Username">
                                </div>
                                @error('image1')
                    <div style="color: #ff0000;">{{$message}}</div>
                  @enderror
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Photo 2 : </label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" name="image2"
                                        placeholder="Email">
                                </div>
                                @error('image2')
                                <div style="color: #ff0000;">{{$message}}</div>
                              @enderror
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Photo 3 : </label>
                                    <input type="file" class="form-control" id="exampleInputPassword1" name="image3"
                                        placeholder="Password">
                                </div>
                                @error('image3')
                                <div style="color: #ff0000;">{{$message}}</div>
                              @enderror
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Photo 4 : </label>
                                    <input type="file" class="form-control" id="exampleInputConfirmPassword1" name="image4"
                                        placeholder="Password">
                                </div>
                                @error('image4')
                                <div style="color: #ff0000;">{{$message}}</div>
                              @enderror
                                {{-- <button type="submit" class="btn btn-gradient-primary me-2">Add</button>
                                <button class="btn btn-light">Cancel</button> --}}

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add tools</h4>
                                <p class="card-description"> Tools </p>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Tool 1 : </label>
                                    <input type="file" class="form-control" id="exampleInputUsername1" name="tool1"
                                        placeholder="Username">
                                </div>
                                @error('tool1')
                                <div style="color: #ff0000;">{{$message}}</div>
                              @enderror
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tool 2 : </label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" name="tool2"
                                        placeholder="Email">
                                </div>
                                @error('tool2')
                                <div style="color: #ff0000;">{{$message}}</div>
                              @enderror
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tool 3 : </label>
                                    <input type="file" class="form-control" id="exampleInputPassword1" name="tool3"
                                        placeholder="Password">
                                </div>
                                @error('tool3')
                                <div style="color: #ff0000;">{{$message}}</div>
                              @enderror
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Tool 4 :</label>
                                    <input type="file" class="form-control" id="exampleInputConfirmPassword1" name="tool4"
                                        placeholder="Password">
                                </div>
                                @error('tool4')
                                <div style="color: #ff0000;">{{$message}}</div>
                              @enderror
                                {{-- <button type="submit" class="btn btn-gradient-primary me-2">Add</button>
                                <button class="btn btn-light">Cancel</button> --}}


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Describtion</h4>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Describtion for yourself </label>
                                    {{-- <input type="textarea" class="form-control" id="exampleInputUsername1"
                                        placeholder="Username"> --}}
                                        <textarea class="form-control" id="desc" name="describtion"
                                        placeholder="Describtion">
                                        </textarea>
                                </div>
                                @error('describtion')
                                <div style="color: #ff0000;">{{$message}}</div>
                              @enderror

                              <button type="submit" class="btn btn-gradient-primary me-2">Add</button>
                                <button class="btn btn-light">Cancel</button>


                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
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
