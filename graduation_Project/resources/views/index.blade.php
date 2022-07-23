@include('layout.Navbar')

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 pb-5" >
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item position-relative active" style="min-height: 100vh;">
                <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                            style="letter-spacing: 3px;">grade</h6>
                        <h3 class="display-3 text-capitalize text-white mb-3">Massage Treatment</h3>
                        <p class="mx-md-5 px-5">Perfect graduation photos, made perfectly easy</p>
                        <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                            href="#">Make Appointment</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item position-relative" style="min-height: 100vh;">
                <img class="position-absolute w-100 h-100" src="img/carousel-3.jpeg" style="object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                            style="letter-spacing: 3px;">grade</h6>
                        <h3 class="display-3 text-capitalize text-white mb-3">Facial Treatment</h3>
                        <p class="mx-md-5 px-5">Perfect graduation photos, made perfectly easy</p>
                        <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                            href="#">Make Appointment</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item position-relative" style="min-height: 100vh;">
                <img class="position-absolute w-100 h-100" src="img/carouse-4.webp" style="object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                            style="letter-spacing: 3px;">grade</h6>
                        <h3 class="display-3 text-capitalize text-white mb-3">Cellulite Treatment</h3>
                        <p class="mx-md-5 px-5">Perfect graduation photos, made perfectly easy</p>
                        <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                            href="#">Make Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->



<!--catogry start -->
<div class="container" style=" text-align:center;">

    <!-- Card deck -->
    <div class="card-deck row">
        @foreach ($data as $value)
        <div class="col-xs-12 col-sm-6 col-md-4 mt-5">
            <!-- Card -->
            <div class="card">

                <!--Card image-->
                <div class="view overlay">

                   <img class="card-img-top"   src="{{$value->Image}}"  alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">{{$value->name}}</h4>
                    <!--Text-->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Make
                        Appointment</button>
                </div>
            </div>
            <!-- Card -->
        </div>
        @endforeach


    </div>
</div>
        </div>
        <!-- catogry end -->
        {{-- <nav aria-label="Page navigation example mt-5">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav> --}}




        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 pb-5 pb-lg-0">
                        <img class="img-fluid w-100" src="img/carouse-4.webp" alt="">
                    </div>
                    <div class="col-lg-6">

                        <h1 class="mb-4">Your Best photos website</h1>
                        <p class="pl-4 border-left border-primary">We've simplified the process of finding you the
                            right graduation photographer, whatever your needs. Booking a photographer through Perfocal
                            is simple as 1, 2, 3.</p>
                        <div class="row pt-3">
                            <div class="col-6">
                                <div class="bg-light text-center p-4">
                                    <h3 class="display-4 text-primary" data-toggle="counter-up">99</h3>
                                    <h6 class="text-uppercase">Users</h6>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bg-light text-center p-4">
                                    <h3 class="display-4 text-primary" data-toggle="counter-up">999</h3>
                                    <h6 class="text-uppercase">Photographer</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="container px-0 py-5 my-5">
            <div class="row mx-0 justify-content-center text-center">
                <div class="col-lg-6">

                    <h1>Galary</h1>
                </div>
            </div>
            <div class="owl-carousel service-carousel">
                <div class="service-item position-relative">
                    <img class="img-fluid" src="img/grade4.jpg" alt="">

                </div>
                <div class="service-item position-relative">
                    <img class="img-fluid" src="img/grade2.jpg" alt="">

                </div>
                <div class="service-item position-relative">
                    <img class="img-fluid" src="img/grade4.jpg" alt="">

                </div>
                <div class="service-item position-relative">
                    <img class="img-fluid" src="img/grade4.jpg" alt="">

                </div>
                <div class="service-item position-relative">
                    <img class="img-fluid" src="img/grade5.jpg" alt="">

                </div>
                <div class="service-item position-relative">
                    <img class="img-fluid" src="img/grade4.jpg" alt="">

                </div>
            </div>
            {{-- <div class="row justify-content-center bg-appointment mx-0">
            <div class="col-lg-6 py-5">
                <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
                    <h1 class="text-white text-center mb-4">Make Appointment</h1>
                    <form>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-transparent p-4" placeholder="Your Name" required="required" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control bg-transparent p-4" placeholder="Your Email" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="custom-select bg-transparent px-4" style="height: 47px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 1</option>
                                        <option value="3">Service 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Make Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
        </div>
        <!-- Service End -->
{{--

        <!-- Open Hours Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="img/opening.jpg"
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-5 pb-lg-5">
                        <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                            <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Open Hours</h6>
                            <h1 class="mb-4">Best Relax And Spa Zone</h1>
                            <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum
                                labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat
                                duo eos et erat sed diam duo</p>
                            <ul class="list-inline">
                                <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Mon – Fri : 9:00 AM
                                    - 7:00 PM</li>
                                <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Saturday : 9:00 AM
                                    - 6:00 PM</li>
                                <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Sunday : Closed
                                </li>
                            </ul>
                            <a href="" class="btn btn-primary mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Open Hours End -->


        <!-- Pricing Start -->
        <div class="container-fluid bg-pricing" style="margin: 90px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="img/pricing.jpg"
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-7 pt-5 pb-lg-5">
                        <div class="pricing-text bg-light p-4 p-lg-5 my-lg-5">
                            <div class="owl-carousel pricing-carousel">
                                <div class="bg-white">
                                    <div
                                        class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                        <h1 class="display-4 mb-0">
                                            <small class="align-top text-muted font-weight-medium"
                                                style="font-size: 22px; line-height: 45px;">$</small>49<small
                                                class="align-bottom text-muted font-weight-medium"
                                                style="font-size: 16px; line-height: 40px;">/Mo</small>
                                        </h1>
                                        <h5 class="text-primary text-uppercase m-0">Basic Plan</h5>
                                    </div>
                                    <div class="p-4">
                                        <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                                        <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                                        <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                                        <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                                        <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                                        <a href="" class="btn btn-primary my-2">Order Now</a>
                                    </div>
                                </div>
                                <div class="bg-white">
                                    <div
                                        class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                        <h1 class="display-4 mb-0">
                                            <small class="align-top text-muted font-weight-medium"
                                                style="font-size: 22px; line-height: 45px;">$</small>99<small
                                                class="align-bottom text-muted font-weight-medium"
                                                style="font-size: 16px; line-height: 40px;">/Mo</small>
                                        </h1>
                                        <h5 class="text-primary text-uppercase m-0">Family Plan</h5>
                                    </div>
                                    <div class="p-4">
                                        <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                                        <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                                        <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                                        <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                                        <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                                        <a href="" class="btn btn-primary my-2">Order Now</a>
                                    </div>
                                </div>
                                <div class="bg-white">
                                    <div
                                        class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                        <h1 class="display-4 mb-0">
                                            <small class="align-top text-muted font-weight-medium"
                                                style="font-size: 22px; line-height: 45px;">$</small>149<small
                                                class="align-bottom text-muted font-weight-medium"
                                                style="font-size: 16px; line-height: 40px;">/Mo</small>
                                        </h1>
                                        <h5 class="text-primary text-uppercase m-0">VIP Plan</h5>
                                    </div>
                                    <div class="p-4">
                                        <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                                        <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                                        <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                                        <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                                        <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                                        <a href="" class="btn btn-primary my-2">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing End -->


        <!-- Team Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Spa Specialist</h6>
                        <h1 class="mb-5">Spa & Beauty Specialist</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team position-relative overflow-hidden mb-5">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="position-relative text-center">
                                <div class="team-text bg-primary text-white">
                                    <h5 class="text-white text-uppercase">Olivia Mia</h5>
                                    <p class="m-0">Spa & Beauty Expert</p>
                                </div>
                                <div class="team-social bg-dark text-center">
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team position-relative overflow-hidden mb-5">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="position-relative text-center">
                                <div class="team-text bg-primary text-white">
                                    <h5 class="text-white text-uppercase">Cory Brown</h5>
                                    <p class="m-0">Spa & Beauty Expert</p>
                                </div>
                                <div class="team-social bg-dark text-center">
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team position-relative overflow-hidden mb-5">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="position-relative text-center">
                                <div class="team-text bg-primary text-white">
                                    <h5 class="text-white text-uppercase">Elizabeth Ross</h5>
                                    <p class="m-0">Spa & Beauty Expert</p>
                                </div>
                                <div class="team-social bg-dark text-center">
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team position-relative overflow-hidden mb-5">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="position-relative text-center">
                                <div class="team-text bg-primary text-white">
                                    <h5 class="text-white text-uppercase">Kelly Walke</h5>
                                    <p class="m-0">Spa & Beauty Expert</p>
                                </div>
                                <div class="team-social bg-dark text-center">
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->--}}


        <!-- Testimonial Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 pb-5 pb-lg-0">
                        <img class="img-fluid w-100" src="img/grade6.jpg" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Testimonial</h6>
                        <h1 class="mb-4">What Our Clients Say!</h1>
                        <div class="owl-carousel testimonial-carousel">
                            <div class="position-relative">
                                <i class="fa fa-3x fa-quote-right text-primary position-absolute"
                                    style="top: -6px; right: 0;"></i>
                                <div class="d-flex align-items-center mb-3">
                                    <img class="img-fluid rounded-circle" src="img/grade6.jpg"
                                        style="width: 60px; height: 60px;" alt="">
                                    <div class="ml-3">
                                        <h6 class="text-uppercase">Client Name</h6>
                                        <span>Profession</span>
                                    </div>
                                </div>
                                <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy.
                                    Tempor sea ipsum diam sed clita dolore eos dolores magna erat dolore sed stet justo
                                    et dolor.</p>
                            </div>
                            <div class="position-relative">
                                <i class="fa fa-3x fa-quote-right text-primary position-absolute"
                                    style="top: -6px; right: 0;"></i>
                                <div class="d-flex align-items-center mb-3">
                                    <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg"
                                        style="width: 60px; height: 60px;" alt="">
                                    <div class="ml-3">
                                        <h6 class="text-uppercase">Client Name</h6>
                                        <span>Profession</span>
                                    </div>
                                </div>
                                <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy.
                                    Tempor sea ipsum diam sed clita dolore eos dolores magna erat dolore sed stet justo
                                    et dolor.</p>
                            </div>
                            <div class="position-relative">
                                <i class="fa fa-3x fa-quote-right text-primary position-absolute"
                                    style="top: -6px; right: 0;"></i>
                                <div class="d-flex align-items-center mb-3">
                                    <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg"
                                        style="width: 60px; height: 60px;" alt="">
                                    <div class="ml-3">
                                        <h6 class="text-uppercase">Client Name</h6>
                                        <span>Profession</span>
                                    </div>
                                </div>
                                <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy.
                                    Tempor sea ipsum diam sed clita dolore eos dolores magna erat dolore sed stet justo
                                    et dolor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        @include('layout.Footer')
