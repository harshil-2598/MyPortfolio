@extends('layout.admin')
@section('title', 'Personal Information')
@section('content')
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Eduction</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Personal</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Personal-Information</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-xl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Personal Information</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('Portfolio.store') }}" method="POST" enctype="multipart/form-data">
                                    <div class="">
                                        @csrf
                                        <input type="hidden" name="id" id="id" value="{{ isset($data->id)?$data->id:'' }}">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" autocomplete="name" value="{{ isset($data->name)? $data->name : '' }}">
                                            @error('name')<span class="error text-danger-gradient">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" autocomplete="username" value="{{ isset($data->email)? $data->email : '' }}">
                                            @error('email')<span class="error text-danger-gradient">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="city" class="form-label">City</label>
                                            <input type="text" class="form-control" id="city" name="city" placeholder="Enter city" value="{{ isset($data->city)? $data->city : '' }}">
                                            @error('city')<span class="error text-danger-gradient">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="state" class="form-label">State</label>
                                            <input type="text" class="form-control" id="state"name="state"  placeholder="Enter State" value="{{ isset($data->state)? $data->state : '' }}">
                                            @error('state')<span class="error text-danger-gradient">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="country" class="form-label">Country</label>
                                            <input type="text" class="form-control" id="country" name="country" placeholder="Enter State" value="{{ isset($data->country)? $data->country    : '' }}">
                                            @error('country')<span class="error text-danger-gradient">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="country" class="form-label">Mobile Number</label>
                                            <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter State" value="{{ isset($data->mobile_number)? $data->mobile_number    : '' }}">
                                            @error('mobile_number')<span class="error text-danger-gradient">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="address1" class="form-label">Address</label>
                                            <textarea name="address1" id="address1" class="form-control" placeholder="Enter Address">{{ isset($data->address1)? $data->address1 : '' }}</textarea>
                                            @error('address1')<span class="error text-danger-gradient">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="address2" class="form-label">Office Address</label>
                                            <textarea name="address2" id="address2" class="form-control" placeholder="Enter Office Address">{{ isset($data->address2)? $data->address2 : '' }}</textarea>
                                            @error('address2')<span class="error text-danger-gradient">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="objective" class="form-label">Objective</label>
                                            <input type="text" class="form-control" id="objective" name="objective" placeholder="Enter State" value="{{ isset($data->objective)? $data->objective : '' }}">
                                            @error('objective')<span class="error text-danger-gradient">{{ $message }}</span>@enderror
                                        </div>

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Check me Out</span>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-4 mb-0">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
