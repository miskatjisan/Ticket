@extends('admin.layouts.master')
@section('title','Team Members')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Team members</h2>
                        <div class="page-breadcrumb  ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Team Members</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Team Members</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
         
            <div class="ecommerce-widget">
                <div class="card">
                    <div class="card-body">

                    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>User Name</th>
                    <th>Profile Image</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>NID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$user->fname}}</td>
                        <td>{{$user->lname}}</td>
                        <td>{{$user->username}}</td>
                        <td><img src="{{asset('assets/img/'.$user->image)}}" style="width:50px;height:50px;" alt="profile Image"></td>
                        <td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->nid }}</td>
                        
                            <form action="{{ route('users.destroy',$user->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                <a class="btn btn-secondary" href="{{ route('users.show',$user->id) }}">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $users->links() !!}

                    </div>
                </div>   
            </div>    

</div> 
</div>
</div>

@endsection