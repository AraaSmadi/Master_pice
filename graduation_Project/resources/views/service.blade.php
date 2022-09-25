@include('layout.Navbar')


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid bg-jumbotron2" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">Appointment</h3>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="far fa-circle px-3"></i>
                <p class="m-0">Appointment</p>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <form class="forms-sample"  action="{{route('book')}}" method="POST"  enctype="multipart/form-data">
        @csrf

    @if ($message = Session::get('success'))
    <div class="alert alert-success container">
      {{ $message }}
      </div>
  @endif
    <!-- Service Start -->
    <div class="container-fluid px-0 py-5 my-5">
        <div class="row mx-0 justify-content-center text-center">
            <div class="col-lg-6">
                <img src="../img/logo.png" width="90px">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Appointment</h6>

            </div>
        </div>

        <div class="row justify-content-center bg-appointment mx-0">
            <div class="col-lg-6 py-5">
                <div class="p-5 my-5" style="background: #211e1c14;">
                    <h1 class="text-white text-center mb-4" style="color:black;">Make Appointment</h1>


                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-transparent p-4" placeholder="Your Name" required="required" name='name'/>
                                    @error('date')
                                    <div style="color: #ff0000;">{{$message}}</div>
                                  @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control bg-transparent p-4" placeholder="Your Email" required="required" name='email'/>
                                    @error('date')
                                    <div style="color: #ff0000;">{{$message}}</div>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="date" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker" name='date'/>
                                        @error('date')
                                        <div style="color: #ff0000;">{{$message}}</div>
                                      @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="time" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker" name='hour'/>
                                        @error('date')
                                        <div style="color: #ff0000;">{{$message}}</div>
                                      @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">

                                        <input type="number" class="form-control bg-transparent p-4" placeholder="Phone" required="required" name='phone'/>
                                        @error('date')
                                        <div style="color: #ff0000;">{{$message}}</div>
                                      @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                @if (session()->has('name') && session()->has('id'))
                                <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Make Appointment</button>
                                @else
                                <div class="alert alert-warning" role="alert">
                                    You need to login to access this page.
                                  </div>

                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->





    @include('layout.Footer')
