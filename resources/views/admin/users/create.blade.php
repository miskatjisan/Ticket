@extends('admin.layouts.master')
@section('title','Create User')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Create New User</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">User</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('users.index') }}">Back</a>
                </div>
                </div>
    
            <div class="ecommerce-widget">
            <div class="card">
                <div class="card-body">

                @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif

<form action="{{route('teams.store')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label  class="form-label">Frist Name</label>
    <input type="text" class="form-control" name="fname">
  </div>
  <div class="mb-3">
    <label  class="form-label">Last Name</label>
    <input type="text" class="form-control" name="lname">
  </div>
  <div class="mb-3">
    <label  class="form-label">Username</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="mb-3">
    <label  class="form-label">Upload Profile Image</label>
    <input type="file" name="image">
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="text" class="form-control" name="email" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Phone</label>
    <input type="text" class="form-control" name="phone" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="text" class="form-control" name="password" >
  </div>
  <div class="mb-3">
    <label  class="form-label">NID</label>
    <input type="text" class="form-control" name="nid" >
  </div>
  
  <button type="submit" class="btn btn-primary">Add New User</button>
</form>

        </div>
            </div>   
        </div>    


</div> 
</div>
</div>
@endsection