@extends('user.layouts.master2')
@section('title','BUS Ticket Payment')
@section('content')
<header>
	<div class="container">
		<div class="left">
			<h3>BUS TICKET PURCHASE</h3>
			<form action="{{route('moviepayment.store')}}" method="POST">
				@csrf
			<input type="hidden" name="useremail" value="{{$data->email}}">
				Full name
				<input type="text" name="name" placeholder="Enter name">
				Email
				<input type="email" name="email" placeholder="Enter email">

				Address
				<input type="text" name="address" placeholder="Enter address">
				
				City
				<input type="text" name="city" placeholder="Enter City">
			
					<label>
						State
						<select name="state">
							<option>Choose State..</option>
							<option value="Dhaka">Dhaka</option>
							<option value="Barisal">Barisal</option>
							<option value="Rajshahi">Rajshahi</option>
							<option value="Khulna">Khulna</option>
						</select>
					</label>
						<label>
						Zip code
						<input type="number" name="zip" placeholder="Zip code">
					</label>
		</div>
		<div class="right">
			<h3>PAYMENT</h3>
				Accepted Card <br>
				<img src="{{asset('images/card1.png')}}" width="100">
				<img src="{{asset('images/card2.png')}}" width="50">
				<br><br>
				Total Purchase Amount
			<input type="text" name="total" value="{{$total}}">

				Credit card number
			<input type="text" name="creditnumber" placeholder="Enter card number">
				
				Exp month
				<input type="text" name="expmonth" placeholder="Enter Month">
				<div id="zip">
					<label>
						Exp year
						<select name="expyear">
							<option>Choose Year..</option>
							<option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2025">2025</option>
						</select>
					</label>
						<label>
						CVV
						<input type="number" name="cvv" placeholder="CVV">
					</label>
				</div>
				<input type="submit" name="" value="Proceed to Checkout">
			</form>
		</div>
	</div>
</header>
@endsection