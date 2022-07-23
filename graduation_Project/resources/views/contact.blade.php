@include('layout.Navbar')


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">Contact</h3>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="far fa-circle px-3"></i>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53808.19532675392!2d35.81239013156419!3d32.55252499834791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c771fe0c496bb%3A0x79ffde2e08760a2e!2sAydoun!5e0!3m2!1sen!2sjo!4v1658150728187!5m2!1sen!2sjo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="contact-form bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Contact</h6>
                        <h1 class="mb-4">Contact US</h1>
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate" action="{{route('contact')}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control border-0 p-4" id="name" placeholder="Your Name" name="name"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                    @error('name')
                                    <div style="color: #ff0000;">{{$message}}</div>
                                  @enderror

                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control border-0 p-4" id="email" placeholder="Your Email" name="email"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                @error('email')
                        <div style="color: #ff0000;">{{$message}}</div>
                      @enderror
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="subject" placeholder="Subject" name="subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                                @error('Subject')
                        <div style="color: #ff0000;">{{$message}}</div>
                      @enderror
                            </div>
                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="3" id="message" placeholder="Message"  name="message"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            @error('message')
                        <div style="color: #ff0000;">{{$message}}</div>
                      @enderror
                            <div>
                                <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    @include('layout.Footer')
