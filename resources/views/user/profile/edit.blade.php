@extends('user.layouts.master')
@section('title','Update Profile')
@section('content')
<div class="profile">
    <div class="card">
        <div class="card-title">
            <h1 class="p-3 text-white bg-primary text-center" style="margin-top:10rem">{{Auth::user()->username}} Profile Update</h1>
        </div>
        <div class="card-body m-0">
            <div class="row">
                <div class="col-6 p-5 text-center">
                <img src="{{asset('assets/img/'.$data->image)}}" class="w-80 h-50" alt="Profile" />
                <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" class="input mt-3" name="image">

                <div class="name">
                    <p class="text-center fw-bold fs-4 mt-3">{{$data->fname}} {{$data->lname}} {{$data->username}}</p>
                </div>
                </div>

                <div class="col-6 p-5 m-0">
                <input type="text" class="form-control w-50 mt-3" placeholder="Write first name" id="firstName" name="fname" value="{{$data->fname}}"/> <br>

                <input type="text" class="form-control w-50 mt-3" placeholder="Write last name" id="lastName" name="lname" value="{{$data->lname}}"/> <br>

                <input type="text" class="form-control w-50 mt-3" placeholder="Write username" id="userName" name="username" value="{{$data->username}}"/> <br>

                <input type="text" class="form-control w-50 mt-3" placeholder="Write new email" id="email" name="email" value="{{$data->email}}"/> <br>

                <input type="tel" class="form-control w-50 mt-3" placeholder="Write new phone Number" id="phone" name="phone" value="{{$data->phone}}"/>

                <input type="text" class="form-control w-50 mt-3" placeholder="Write new NID" id="nid" value="{{$data->nid}}"/> <br>

                <input type="text" class="form-control w-50 mt-3" placeholder="Write new password" name="password" id="newPass" value="{{$data->password}}"/> <span>( Change Password )</span> <br>

               <div class="text-start">
                <input type="submit" class="btn btn-primary" value="Update Profile" class="input__button" />
               </div>
               </form>
                </div>
            </div>
        </div>
    </div>
</div>


    @endsection  