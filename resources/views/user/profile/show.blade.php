@extends('user.layouts.master')
@section('title','User Profile')
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
                <div class="name">
                    <p class="text-center fw-bold fs-4 mt-3">{{$data->fname}} {{$data->lname}} {{$data->username}}</p>
                </div>
                </div>

                <div class="col-6 p-5 m-0">
                <div class="fs-4">
                    <b>First name</b>
                    <p>{{$data->fname}}</p>
                </div> 

                <div class="fs-4">
                    <b>Last name</b>
                    <p>{{$data->lname}}</p>
                </div> 

                <div class="fs-4">
                    <b>User name</b>
                    <p>{{$data->username}}</p>
                </div> 

                <div class="fs-4">
                    <b>Email</b>
                    <p>{{$data->email}}</p>
                </div> 

                <div class="fs-4">
                    <b>Phone number</b>
                    <p>{{$data->phone}}</p>
                </div> 

                <div class="fs-4">
                    <b>NID</b>
                    <p>{{$data->nid}}</p>
                </div> 

                <div class="text-start">
               <a href="{{route('profile.edit')}}" class="btn btn-primary">Edit Profile</a>
               </div>

               
                </div>
            </div>
        </div>
    </div>
</div>

     
    @endsection  