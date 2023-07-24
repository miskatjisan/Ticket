@extends('user.layouts.master')
@secttion('title','Booking')
@section('content')
    <div class="book" style=" background-image: url('{{asset('images/rd.jpg')}}'); background-size: cover; hight:500px; ">
        <h1 class="bg-primary p-4" style="color:#fff;  text-align: center;">Give Your  Dectination!</h1>
        <p class="text-center p-5" style="font-size:22px; color:#fff;">We have the largest ONLINE  TICKETS INVENTORY in Bangladesh; with a coverage of 60 districts operating in more than 400 routes.This is the safest, easiest, QUICKEST ONLINE TICKETING service platform in Bangladesh. Book or buy your preferred Ac/Non Ac straight from your desktop or smartphone, anywhere, anytime!</p>
        <a href="{{route('airorder.create')}}" class="btn">Flight  &#8594;</a>
        <a href="{{route('busorder.create')}}" class="btn">Bus &#8594;</a>
        <a href="{{route('movieorder.create')}}" class="btn">Movies &#8594;</a>
    </div>
   @endsection 
