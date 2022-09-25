@include('layout.Navbar')

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 pb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item position-relative active" style="min-height: 100vh;">
                <img class="position-absolute w-100 h-100" src="img/image1.jpg" style="object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                            style="letter-spacing: 3px;">grade</h6>
                        <h3 class="display-3 text-capitalize text-white mb-3">Kharyij</h3>
                        <p class="mx-md-5 px-5">Perfect graduation photos, made perfectly easy</p>
                        <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                            href="/photographers">Make Appointment</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item position-relative" style="min-height: 100vh;">
                <img class="position-absolute w-100 h-100" src="img/image4.jpg" style="object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                            style="letter-spacing: 3px;">grade</h6>
                        <h3 class="display-3 text-capitalize text-white mb-3">Facial Treatment</h3>
                        <p class="mx-md-5 px-5">Perfect graduation photos, made perfectly easy</p>
                        <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                            href="/photographers">Make Appointment</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item position-relative" style="min-height: 100vh;">
                <img class="position-absolute w-100 h-100" src="img/phtogrher3.jpg" style="object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                            style="letter-spacing: 3px;">grade</h6>
                        <h3 class="display-3 text-capitalize text-white mb-3">Cellulite Treatment</h3>
                        <p class="mx-md-5 px-5">Perfect graduation photos, made perfectly easy</p>
                        <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                            href="/photographers">Make Appointment</a>
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

                        <img class="card-img-top" src="{{ $value->Image }}" alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">{{ $value->name }}</h4>
                        <!--Text-->

                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <a href="{{ route('singlePage', ['id' => $value->id]) }}"> <button
                                class="btn btn-primary btn-block" style="height: 47px;  text-decoration: none;">Make
                                Appointment</button></a>
                    </div>
                </div>
                <!-- Card -->
            </div>
        @endforeach


    </div>
</div>
</div>


<!-- About Start -->
<div class="container-xxl py-6" style="margin-top:150px">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/grade2.jpg" alt=""
                        style="object-fit: cover;">

                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h1 class="display-6 mb-4">We Make Momments</h1>
                    <p>Because of You, Life Doesn’t Stop
                        Every 2 seconds, someone in many studies. needs blood.
                        This constant need for blood can only be met by generous donors like you, and when you give
                        blood, you could save the life of a cancer patient or someone needing open-heart surgery.
                    </p>
                    <p class="mb-4"> Remember, it’s the blood on the shelves hospitals turn to in emergency
                        situations. Make
                        blood donations a part of your routine, and schedule your next appointment to give blood
                        today. Or learn how you can host a blood drive virtually or in person.

                    </p>
                    <p class="mb-4">Thank you for everything you do for patients.</p>
                    <div class="row g-2 mb-4 pb-2">
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Creativity
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Imageination
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- About End -->

 <!-- video-->
 <div class="container-xxl py-6" style="margin-top: 150px">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5 wow fadeInUp pt-5" data-wow-delay="0.1s">
                <div class="h-100">
                    <h1 class="display-6 mb-4">Graduation Momments</h1>
                    <p> There are very specific ways in which blood types must be matched for a safe transfusion. The
                        right blood transfusion can mean the difference between life and death. Use the interactive
                        graphic below to learn more about matching blood types for transfusions.
                    </p>
                    <p class="mb-4"> Also, Rh-negative blood is given to Rh-negative patients, and Rh-positive
                        or Rh-negative blood may be given to Rh-positive patients. The rules for plasma are the
                        reverse.<br>
                        The typical donation is one pint of whole blood, but special equipment allows us to collect
                        parts of your blood separately (a process called apheresis). The information below shows how
                        these individual blood components often help specific patients.

                        You can make the greatest impact by giving the recommended donation based on your blood type.
                        Patients in need will be grateful for whatever type of donation you make!
                    </p>


                </div>

            </div>
            <div class="col-lg-7  wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative overflow-hidden   ">
                    <iframe width="650" height="700" src="https://www.youtube.com/embed/rEyz5SZBJbg"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen autoplay></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end video-->



<!-- Testimonial Start -->
<div class="container-fluid py-5" >
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-5 pb-lg-0">
                <img class="img-fluid w-100" src="img/istockphoto-613884660-612x612.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Testimonial</h6>
                <h1 class="mb-4">Success stories</h1>
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!--v and m -->
<div class=" py-4 container  d-flex justify-content-center align-items-center " style="margin-top: 70px" >
    <div class="row">
        <div class="col-md-6">
            <div class="card1  mt-3 p-3 g-2" style="background-color: #f9a3925e ">
                <div class="d-flex align-items-center">
                    <small class="first"></small>
                </div>
                <div class="mt-3">
                    <h2 class="text1">Mission</h2>
                </div>

                <div class="detail mt-5">
                    <h6 style="color: white">Graduation ceremonies are a special and unforgettable event that a person
                        may experience in his or her life. This project aims to find good photographers that help them
                        mark down their memorable moments.

                    </h6>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card2  mt-3 p-3 g-2">
                <div class="d-flex align-items-center">
                    <small class="second"></small>
                </div>
                <div class="mt-3">
                    <h2 class="text2">Vision</h2>
                </div>
                <div class="detail mt-5">
                    <div class="px-1">

                        <h6>To be the first site for collecting photographers around the world.
                            We aspire to turn compassion into action so that , all people affected by disaster in
                            jordan receive care.
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<BR><br><br><br>

@include('layout.Footer')
