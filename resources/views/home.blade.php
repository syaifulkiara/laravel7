@extends('layouts.master')

@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group pull-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Annex</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->
<div class="row">
    <!-- Column -->
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="mdi mdi-webcam"></i>
                        </div>
                    </div>
                    <div class="col-6 align-self-center text-center">
                        <div class="m-l-10">
                            <h5 class="mt-0 round-inner">$18090</h5>
                            <p class="mb-0 text-muted">Visits Today</p>                                                                 
                        </div>
                    </div>
                    <div class="col-3 align-self-end align-self-center">
                        <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>5.26%</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="mdi mdi-account-multiple-plus"></i>
                        </div>
                    </div>
                    <div class="col-6 text-center align-self-center">
                        <div class="m-l-10 ">
                            <h5 class="mt-0 round-inner">562</h5>
                            <p class="mb-0 text-muted">New Users</p>
                        </div>
                    </div>
                    <div class="col-3 align-self-end align-self-center">
                        <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>8.68%</span></h6>
                    </div>                                                        
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round ">
                            <i class="mdi mdi-basket"></i>
                        </div>
                    </div>
                    <div class="col-6 align-self-center text-center">
                        <div class="m-l-10 ">
                            <h5 class="mt-0 round-inner">7514</h5>
                            <p class="mb-0 text-muted">New Orders</p>
                        </div>
                    </div>
                    <div class="col-3 align-self-end align-self-center">
                        <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="mdi mdi-rocket"></i>
                        </div>
                    </div>
                    <div class="col-6 align-self-center text-center">
                        <div class="m-l-10">
                            <h5 class="mt-0 round-inner">$32874</h5>
                            <p class="mb-0 text-muted">Total Sales</p>
                        </div>
                    </div>
                    <div class="col-3 align-self-end align-self-center">
                        <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>2.35%</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>

<div class="row">
    <div class="col-md-12 col-lg-12 col-xl-8 align-self-center">
        <div class="card bg-white m-b-30">
            <div class="card-body new-user">
                <h5 class="header-title mb-4 mt-0">Members Profiles</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="border-top-0" style="width:60px;">Avatar</th>
                                <th class="border-top-0">Name</th>
                                <th class="border-top-0">Email</th>
                                <th class="border-top-0">Address</th>
                                <th class="border-top-0">Phone Number</th>                                    
                                <th class="border-top-0">Member Since</th>
                                <th class="border-top-0">Progress</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $row)
                            <tr>
                                <td>
                                    <img class="rounded-circle" src="{{ asset($row->avatar) }}" alt="user" width="40"> </td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $row->created_at }}</td>                                   
                                <td>
                                    <div class="progress" style="height:8px;">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100" style="width: 94%;"></div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    {{ $user->links() }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12 col-xl-4">
        <div class="card bg-white m-b-30">
            <div class="card-body new-user">
                    <h5 class="header-title mt-0 mb-4">New Activity</h5>
                <ul class="list-unstyled mb-0 pr-3" id="boxscroll2" tabindex="1" style="overflow: hidden; outline: none;">
                    <li class="p-3">
                        <div class="media">
                            <div class="thumb float-left">
                                <a href="#">
                                    <img class=" rounded-circle" src="assets/images/users/avatar-5.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <p class="media-heading mb-0">Ruby T. Curd <i class="fa fa-circle text-success mr-1 pull-right"></i></p>
                                <small class="pull-right text-muted">Now</small>
                                <small class="text-muted">Newyork</small>
                            </div>
                        </div>
                    </li>
                </ul>                                    
            </div>                                
        </div>
    </div>
</div>
@endsection
