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

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Photographer </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Reservition</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">User</h4>
                            <p class="card-description"> <code></code>
                            </p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Name </th>
                                        <th> Phone </th>
                                        <th> Email </th>
                                        <th> Image </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($data as $value)
                                    <tr>
                                        <td>{{ $value->id}}</td>
                                        <td>{{ $value->name}}</td>
                                        <td>{{ $value->phone}}</td>
                                        <td>{{ $value->email}}</td>

                                        <td><label class="badge badge-danger"><img src="{{ $value->Image}}"></label></td>
                                        <td>
                                            <a class="btn btn-danger" href={{"rejected/".$value->id}} > Rejected </a>
                                            <a class="btn btn-info" href={{"accepted/".$value->id}}> Accepted </a>
                                        </td>
                                    </tr>
                                    @endforeach --}}

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> User accepted </h4>
                            <p class="card-description">  <code></code>
                            </p>
                            <table class="table">
                                <thead>

                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($data2 as $value)
                                    <tr>
                                        <td>{{ $value->id}}</td>
                                        <td>{{ $value->name}}</td>
                                        <td>{{ $value->phone}}</td>
                                        <td>{{ $value->email}}</td>

                                        <td><label class="badge badge-danger"><img src="{{ $value->Image}}"></label></td>

                                    </tr>
                                    @endforeach --}}

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> User Rejected </h4>
                            <p class="card-description">  <code></code>
                            </p>
                            <table class="table table-hover">
                                <thead>

                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($data3 as $value)
                                    <tr>
                                        <td>{{ $value->id}}</td>
                                        <td>{{ $value->name}}</td>
                                        <td>{{ $value->phone}}</td>
                                        <td>{{ $value->email}}</td>

                                        <td><label class="badge badge-danger"><img src="{{ $value->Image}}"></label></td>

                                    </tr>
                                    @endforeach --}}

                                </tbody>
                            </table>
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
    <!-- End custom js for this page -->
</body>

</html>
