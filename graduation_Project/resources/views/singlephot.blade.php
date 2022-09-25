@include('layout.Navbar')


<!-- Header Start -->
<div class="jumbotron jumbotron-fluid bg-jumbotron2" style="margin-bottom: 90px;">
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
<!-- About Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 " >
                <img  src="{{ asset($user->Image) }}"
                alt="https://www.w3schools.com/bootstrap4/paris.jpg" style="width:60% ; margin-left:30px">
                {{-- <div class="position-relative overflow-hidden ps-5 pt-5 h-100" >
                    <img class="position-absolute w-100 h-100" src="{{ asset($user->Image) }}"
                        alt="https://www.w3schools.com/bootstrap4/paris.jpg" style="width: 100%">

                </div> --}}
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s" style="margin-top:50px">
                <div class="h-100">
                    <h1 class="display-6 mb-4" style=" color:#f9a392 ">About</h1>
                    <p>My name is <span style="color: #f9a392">{{$user->name}}</span> of You, Life Doesn’t Stop
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
                            <i class="fa fa-check text-primary me-2"></i>Imagination
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- About End -->


<!-- About Section -->
{{-- <div id="about" class="container">
    <div>
        <div class="section-title text-center center">
            {{-- <h2>About Me</h2>
        <hr> --}}
{{-- </div>
        <div class="row">
            <div class="col-5">
                <div class="col-md-12 text-center"><img class="mx-auto d-block" src="{{ asset($user->Image) }}"
                        alt="https://www.w3schools.com/bootstrap4/paris.jpg" style="margin: 50px" />
                        <h3 style=" color:#f9a392 "> {{ $user->name }}</h3></div>
            </div>
            <div class="col-7">

                <div class="col-md-8 col-md-offset-2" style="margin-top: 20px">
                    <div class="about-text">
                        <h3 style=" color:#f9a392 "> About Me :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare
                            diam.
                            Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare
                            diam
                            commodo nibh.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare
                            diam.
                            Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.
                        </p>


                    </div>
                </div>
            </div>
        </div> --}}
<!-- Portfolio Section -->





{{-- <div class="card" style="width: 18rem;">
    <img src="{{asset($user->Image)}}" class="card-img-top" alt="...">
    <div class="card-body">
        <p>{{$user->id}}</p>
<p></p>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
{{-- </div>
  </div> --}}
{{-- <img class="mx-auto d-block" src="{{ asset($user->Image) }}" alt="https://www.w3schools.com/bootstrap4/paris.jpg" style="width:5%" />
<div class='col-12'>
    <div class='row col-3'>

<h3 style="text-align: center ; display:flex"> {{ $user->name }}</h3>
</div>
</div> --}}



<!-- Gallery -->
<br /><br /><br /><br />
<h2 class="display-6 mb-4" style=" color:#f9a392 ; text-align:center">My Work</h2>
<section class="container">
    <!-- Section: Images -->
    <section class="">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
            src="../img/grade14.jpg"
              class="w-100"
            />
            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
            </a>
          </div>
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
            src="../img/grade15.jpg"
              class="w-100"
            />
            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
            </a>
          </div>
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
            src="../img/grade16.jpg"
              class="w-100"
            />
            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Images -->

    <!-- Section: Modals -->
    <section class="">
      <!-- Modal 1 -->
      <div
        class="modal fade"
        id="exampleModal1"
        tabindex="-1"
        aria-labelledby="exampleModal1Label"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="ratio ratio-16x9">
              <iframe
                src="https://www.youtube.com/embed/A3PDXmYoF5U"
                title="YouTube video"
                allowfullscreen
              ></iframe>
            </div>

            <div class="text-center py-3">
              <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal 2 -->
      <div
        class="modal fade"
        id="exampleModal2"
        tabindex="-1"
        aria-labelledby="exampleModal2Label"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="ratio ratio-16x9">
              <iframe
                src="https://www.youtube.com/embed/wTcNtgA6gHs"
                title="YouTube video"
                allowfullscreen
              ></iframe>
            </div>

            <div class="text-center py-3">
              <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal 3 -->
      <div
        class="modal fade"
        id="exampleModal3"
        tabindex="-1"
        aria-labelledby="exampleModal3Label"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="ratio ratio-16x9">
              <iframe
                src="https://www.youtube.com/embed/vlDzYIIOYmM"
                title="YouTube video"
                allowfullscreen
              ></iframe>
            </div>

            <div class="text-center py-3">
              <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Modals -->
  </section>
  <!-- Modal gallery -->






<!-- Gallery -->
<br /><br /><br /><br />
<!-- Modal gallery -->
<h2 class="display-6 mb-4" style=" color:#f9a392 ; text-align:center">Tools</h2>
<section class="container">
    <!-- Section: Images -->
    <section class="">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
            src="../img/tool3.jpg"
              class="w-100"
            />
            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
            </a>
          </div>
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
            src="../img/tool2.jpg"
              class="w-100"
            />
            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
            </a>
          </div>
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
            src="../img/tool1.jpg"
              class="w-100"
            />
            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Images -->

    <!-- Section: Modals -->
    <section class="">
      <!-- Modal 1 -->
      <div
        class="modal fade"
        id="exampleModal1"
        tabindex="-1"
        aria-labelledby="exampleModal1Label"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="ratio ratio-16x9">
              <iframe
                src="https://www.youtube.com/embed/A3PDXmYoF5U"
                title="YouTube video"
                allowfullscreen
              ></iframe>
            </div>

            <div class="text-center py-3">
              <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal 2 -->
      <div
        class="modal fade"
        id="exampleModal2"
        tabindex="-1"
        aria-labelledby="exampleModal2Label"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="ratio ratio-16x9">
              <iframe
                src="https://www.youtube.com/embed/wTcNtgA6gHs"
                title="YouTube video"
                allowfullscreen
              ></iframe>
            </div>

            <div class="text-center py-3">
              <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal 3 -->
      <div
        class="modal fade"
        id="exampleModal3"
        tabindex="-1"
        aria-labelledby="exampleModal3Label"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="ratio ratio-16x9">
              <iframe
                src="https://www.youtube.com/embed/vlDzYIIOYmM"
                title="YouTube video"
                allowfullscreen
              ></iframe>
            </div>

            <div class="text-center py-3">
              <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Modals -->
  </section>
  <!-- Modal gallery -->


<!-- Open Hours Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative ">
                    <img class="position-absolute w-100 " src="../img/Time22.png" style="object-fit: cover; margin-right:40px" width="20%">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                    <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Open Hours</h6>
                    <h1 class="mb-4">Available Time</h1>
                    <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum
                        labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat
                        duo eos et erat sed diam duo</p>
                    <ul class="list-inline">
                        <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Mon – Fri : 9:00 AM -
                            7:00 PM</li>
                        <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Saturday : 9:00 AM -
                            6:00 PM</li>
                        <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Sunday : Closed</li>
                    </ul>
                    <a href="{{route('Booking',['id'=>$user->id])}}" class="btn btn-primary mt-2">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Open Hours End -->


{{-- <h1 style="text-align: center"> Appointment </h1>
<div class="row justify-content-center bg-appointment mx-0">
    <div class="col-lg-6 py-5">
        <div class="p-5 my-5" style="background: #211e1c14;">
            <h1 class="text-white text-center mb-4">Make Appointment</h1>
            <form>
                <div class="form-row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control bg-transparent p-4" placeholder="Your Name"
                                required="required" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="email" class="form-control bg-transparent p-4" placeholder="Your Email"
                                required="required" />
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="date" id="date" data-target-input="nearest">
                                <input type="text" class="form-control bg-transparent p-4 datetimepicker-input"
                                    placeholder="Select Date" data-target="#date" data-toggle="datetimepicker" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="time" id="time" data-target-input="nearest">
                                <input type="text" class="form-control bg-transparent p-4 datetimepicker-input"
                                    placeholder="Select Time" data-target="#time" data-toggle="datetimepicker" />
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
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Make
                            Appointment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
        <!-- Service End --> --}}
@include('layout.Footer')
