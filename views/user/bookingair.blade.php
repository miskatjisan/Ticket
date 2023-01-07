@extends('user.layouts.master2')
@section('title','Air Ticket Book Now')
@section('content')
        <!-- This is main Form Area Start ++ -->
        <div class="bf-container">
           
    
            <!-- Main form Body Start -->
            <div class="bf-body">
    
    
                <!-- Form haed -->
                <div class="bf-head">
                    <h1>Booking Flight Ticket Now</h1>
                    <p>|-Lets start To booking Now-|</p>
                </div>
                <!-- Form haed -->
    
    
                <!-- Form Body Box -->
                <form action="{{route('airorder.store')}}" class="bf-body-box" method="POST">
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
                            <p>Phone Number </p>
                            <input type="tel" name="phone" id="phone" placeholder="Phone Number">
                        </div>
                    
                        <div class="bf-col-6">
                        <p>Vat 10%</p>
                        <input type="text" name="vat" id="vat" value="0.1" readonly>
                    </div>
                    </div>

                    <div class="bf-row">
                        <div class="bf-col-6">
                            <p>Flying From</p>
                            <input type="text" name="from" id="from" placeholder="Flying From">
                        </div>
                        <div class="bf-col-6">
                            <p>Flying To</p>
                            <input type="text" name="to" id="to" placeholder="Flying To">
                        </div>
                    </div>

                    <div class="bf-row">
                        <div class="bf-col-6">
                            <p>Departure</p>
                            <input type="date" name="departure" id="departure" placeholder="Select Date">
                        </div>
                        <div class="bf-col-6">
                            <p>Return</p>
                            <input type="date" name="return" id="return" placeholder="Select Date">
                        </div>
                    </div>

                    <div class="bf-row">
    
                         <div class="bf-col-6">
                            <p>Select Flight Type</p>
                            <select name="price">
                                <option>Select One</option>
                                <option value="12000">Secound Class 12000 BDT </option>
                                <option value="22000">First Class 22000 BDT</option>
    
                            </select>
                        </div>
                        <div class="bf-col-6">
                            <p>Number of Seat</p>
                            <input type="number" name="seat" id="seat" placeholder="Number Of Seat">
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
    