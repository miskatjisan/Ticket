@extends('user.layouts.master2')
@section('title','Bus Order')
@section('content')
        <!-- This is main Form Area Start ++ -->
        <div class="bf-container">
           
    
            <!-- Main form Body Start -->
            <div class="bf-body">
    
    
                <!-- Form haed -->
                <div class="bf-head">
                    <h1>Booking Bus Ticket Now</h1>
                    <p>|-Lets start To booking Now-|</p>
                </div>
                <!-- Form haed -->
    
    
                <!-- Form Body Box -->
                <form class="bf-body-box" action="{{route('busorder.store')}}" method="POST">
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
                            <p>Destination From</p>
                            <input type="text" name="from" id="from" placeholder="Destination From">
                        </div>
                        <div class="bf-col-6">
                            <p>Destination To</p>
                            <input type="text" name="to" id="to" placeholder="Destination To">
                        </div>
                    </div>

                    <div class="bf-row">
    
                         <div class="bf-col-6">
                            <p>Select Bus Type</p>
                            <select name="price">
                                <option>Select One</option>
                                <option value="400">Non AC 400 BDT </option>
                                <option value="800">AC 800 BDT</option>
    
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
    