
<header>
        <a href="{{'/'}}" class="logo"> <span>T</span>icket</a>

        <div class="menu">
            <a href="{{route('booking')}}">Booking</a>
            <a href="{{route('service')}}">Service</a>
            <a href="{{route('contact.create')}}">Contact</a>
            <a class="dropdown-toggle"  id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user" id="login-btn"></i></a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item active" href="#">{{Auth::user()->username}}</a></li>
    <li><a class="dropdown-item" href="{{route('profile')}}">User Profile</a></li>
    <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
  </ul>
</div>
        

    </header>
