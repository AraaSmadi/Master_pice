@include('layout.Navbar')
 <!-- Header Start -->
 <div class="jumbotron jumbotron-fluid bg-jumbotron2" >
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">Photographer</h3>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="far fa-circle px-3"></i>
            <p class="m-0">Photographer</p>
        </div>
    </div>
</div>
<!-- Header End -->


<div class="container">
    <div class="main-body">



        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="img/user.png" alt="Admin" width="150">
                            <div class="mt-3">
                                <h4>Araa Smadi</h4>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                Araa Smadi
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                araa2016@gmail.com
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                0786543217
                            </div>
                        </div>
                        <hr>


                        <div class="row">
                            <div class="col-sm-12">
                                <a class="btn btn-primary " target="__blank" href="doneredit">Edit</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layout.Footer')
