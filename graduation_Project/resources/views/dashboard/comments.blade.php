

    @include('dashboard.layout.Navbar')
    {{-- <!-- partial -->
    <div class="container">
        <div class="card-group vgr-cards">
          <div class="card">
            <div class="card-img-body">

            </div>
            @foreach ($data as $value)

            <div class="card-body">
              <h4 class="card-title">{{$value->name}}</h4>
              <h6 class="card-title">{{$value->subject}}</h6>
              <p class="card-text">{{ $value->message}}</p>

            </div>
          </div>
          @endforeach

        </div>
      </div> --}}
 <!--start-->
 <div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Comments </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Comments</li>
                </ol>
            </nav>
        </div>
        <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Comments</h4>
            <p class="card-description"> <code></code>
            </p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> # </th>
                        <th> Name </th>
                        <th> subject </th>
                        <th> message </th>


                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Ara'a</td>
                        <td>Hello</td>
                        <td>Amazing work</td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
</div>
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
