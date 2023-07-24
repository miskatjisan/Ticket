@extends('user.layouts.master')
@section('title','ticket')

@section('content')
    
    <!----------home-------------->

       
    <!-- slider -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('images/airplane.jpg')}}" class="d-block w-100" height="500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/trainbg.jpg')}}" class="d-block w-100" height="500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/road.jpg')}}" class="d-block w-100" height="500px" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- about -->

<div class="content text-center">
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
<div class="about">
<h1 class="text-center p-3 bg-primary text-white mt-5">About Us</h1>
<p class="text-center p-5 fs-4  mt-3">It is a travel document purchased on websites, mobile applications. There is no need to print tickets thanks to e-tickets. In other words, e-ticket or online flight tickets have replaced the print ones. Passengers and airline company makes a contract through e-tickets.</p>
</div>

<h1 class="h1-responsive bg-primary  p-3 font-weight-bold text-white text-center my-4">Contact us</h1>
<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
 
    <!--Section description-->
    <p class="text-center p-5 fs-4 w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="{{route('contact.store')}}" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="tel" id="phone" name="phone" class="form-control">
                            <label for="phone" class="">Your phone</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="email" id="email" name="email" class="form-control">
                            <label for="email" class="">Your Email</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="details" name="details" rows="2" class="form-control md-textarea"></textarea>
                            <label for="details">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

      

            <div class="text-center text-md-left">
                <a class="btn btn-primary" type="submit" onclick="document.getElementById('contact-form').submit();">SEND US</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->
        </form>
        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Defodill University Bangladesh, Birulia, Savar,Dhaka</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+88017XXXXXX</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>ticket@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->

@endsection