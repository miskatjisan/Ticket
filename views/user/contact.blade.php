@extends('user.layouts.master2')
@section('title','Bus Ticket Payment')
@section('content')
<header>
	<div class="container">
		<div class="center">
			<h3 style="text-align:center;">Contact Us</h3>
			<p class="contact__section-text">
                If You have any questions or Complain Please Share with Us.
			</p>
			<form action="{{route('contact.store')}}" method="POST">
                @csrf
			<input type="hidden" name="useremail" value="{{Auth::user()->email}}">
				Full name
				<input type="text" name="name" placeholder="Enter name">
				Phone Number
				<input type="tel" name="phone" placeholder="Enter phone">

				Email
				<input type="email" name="email" placeholder="Enter email">

				<div>
				Massage
				<textarea name="details" id="details" cols="30" rows="3" placeholder="Your Massage"></textarea>
				</div>
				<input type="submit"  value="SEND US">
</form>

	</div>
	</div>
</header>
@endsection

