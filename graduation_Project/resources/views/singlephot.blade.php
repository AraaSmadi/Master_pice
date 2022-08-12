@include('layout.Navbar')



{{-- <div class="card" style="width: 18rem;">
    <img src="{{asset($user->Image)}}" class="card-img-top" alt="...">
    <div class="card-body">
        <p>{{$user->id}}</p>
<p></p>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
    {{-- </div>
  </div> --}}

  <img class="mx-auto d-block" src="{{asset($user->Image)}}" alt="https://www.w3schools.com/bootstrap4/paris.jpg"/>

 <h1 style="text-align: center"> {{$user->name}}</h1>
<!-- Gallery -->
<br/><br/><br/><br/>
<h1 style="text-align: center"> Photos </h1>
<div class="row">
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Boat on Calm Water"
      />

      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Wintry Mountain Landscape"
      />
    </div>

    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Mountains in the Clouds"
      />

      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Boat on Calm Water"
      />
    </div>

    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Waves at Sea"
      />

      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Yosemite National Park"
      />
    </div>
  </div>
  <!-- Gallery -->
  <br/><br/><br/><br/>
  <h1 style="text-align: center"> Tools </h1>
  
    @include('layout.Footer')
