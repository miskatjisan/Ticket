@extends('user.layouts.master2')
@section('title','Bus Ticket Payment')
@section('content')
        <!-- This is main Form Area Start ++ -->
        <div class="bf-container">
           
    
            <!-- Main form Body Start -->
            <div class="bf-body">
    
    
                <!-- Form haed -->
                <div class="bf-head">
                    <h1>Booking Movie Ticket Now</h1>
                    <p>|-Lets start To booking Now-|</p>
                </div>
                <!-- Form haed -->
    
    
                <!-- Form Body Box -->
                <form class="bf-body-box" action="{{route('movieorder.store')}}" method="POST">
                    @csrf
                <input type="hidden" name="useremail" value="{{$data->email}}">
                    <div class="bf-row">
    
                        <div class="bf-col-6">
                            <p>Your Name</p>
                            <input type="text" name="name" id="name" placeholder="Your Name">
                        </div>
                        <div class="bf-col-6">
                            <p>Email Address</p>
                            <input type="email" name="email" id="email" placeholder="Email Address">
                        </div>
    
                    </div>
    
    
    
                    <div class="bf-row">
    
                        <div class="bf-col-6">
                            <p>Select Date</p>
                            <input type="date" name="date" id="date">
                        </div>
                        <div class="bf-col-6">
                            <p>Phone Number </p>
                            <input type="tel" name="phone" id="phone">
                        </div>
                    </div>
                    
                    <div class="bf-row">
                    <div class="bf-col-6">
                            <p>Select Your Cineplex</p>
                            <select name="cineplex">
                                <option>Select One</option>
                                <option value="Shena">Shena</option>
                                <option value="Boshundhora">Boshundhora </option>
                                <option value="Sony">Sony</option>
                                <option value="Shemoly">Shemoly</option>
                            </select>
                        </div>
                        </div>

                    <div class="bf-row">
    
                         <div class="bf-col-6">
                            <p>Select Movie Hall Range</p>
                            <select name="price">
                                <option>Select One</option>
                                <option value="100">Third Class 100 BDT </option>
                                <option value="200">Secound Class 200 BDT </option>
                                <option value="400">First Class 400 BDT</option>
                            </select>
                        </div>
                        <div class="bf-col-6">
                            <p>Number of Seat</p>
                            <input type="number" name="seat" id="seat">
                        </div>
                    </div>
    
    
                    <div class="bf-row">
                        <div class="bf-col-3">
                            <input type="submit" value="Submit">
                        </div>
    
                    </div>
                </form>
                <!-- Form Body Box -->
    
                <!-- This Is For Footer Start -->
                <div class="bf-footer">
                    <p>Designed By <a href="#">|- -|</a></p>
                </div>
                <!-- This Is For Footer End -->
    
    
            </div>
            <!-- Main form Body End -->
    
        </div>
        <!-- This is main Form Area  End -->
@endsection
    
    