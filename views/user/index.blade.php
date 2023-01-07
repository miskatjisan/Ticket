@extends('user.layouts.master')
@section('title','ticket')

@section('content')
    
    <!----------home-------------->
    <section class="home" id="home">
        <div class="content">
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
            <h3>
                About Our Site
            </h3>
           <p>The project objective is to book bus, train, air & cinema tickets in online. The Ticket Reservation Systemis an Internet based application that can be accessed throughout the Net and can be accessed by anyone who has a net connection. This application will reserve the tickets. This online ticket reservation system provides a website for a bus, train, air & cinema hall where any user of internet can access it. User is required to login to the system and needs a credit card for booking the tickets. Tickets can be collected at the counter . All this excitement vanishes after standing in hours in long queues to get tickets booked. The website provides complete information regarding currently running shedules on all available seats. Ticket reservations are done using credit card and can be cancelled if needed. Our online tickets reservation system is one of the best opportunities for those who cannot afford enough time to get their tickets reserved standing in long queues. People can book tickets online at any time of day or night. Our reservation system also provides option to cancel the tickets which are reserved previously.</p>
            <a href="#" class="btn"> About More</a>
        </div>
        <div class="controls">
            <span class="vid-btn " data-src="{{asset('images/vid-1.mp4')}}"></span>
            <span class="vid-btn" data-src="{{asset('images/vid-2.mp4')}}"></span>
            <span class="vid-btn" data-src="{{asset('images/vid-3.mp4')}}"></span>
            <span class="vid-btn" data-src="{{asset('images/vid-4.mp4')}}"></span>
            <span class="vid-btn" data-src="{{asset('images/vid-5.mp4')}}"></span>
        </div>
        <div class="video-container">
            <video src="{{asset('images/vid-1.mp4')}}" id="video-slider" loop autoplay muted></video>
        </div>

    </section>  
    @endsection