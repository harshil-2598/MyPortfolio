@extends('layout.admin')

@section('title','Dashboard')
@section('content')

    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Form-Layouts</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form-Layouts</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Vertical Form</h4>
                            </div>
                            <div class="card-body">
                                <form enctype="multipart/form-data">
                                    <div class="">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" autocomplete="username">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="new-password">
                                        </div>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Check me Out</span>
                                        </label>
                                    </div>
                                    <button class="btn btn-primary mt-4 mb-0">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Horizontal Form</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal">
                                    <div class=" row mb-4">
                                        <label for="inputName" class="col-md-3 form-label">User Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="inputName" placeholder="Name" autocomplete="username">
                                        </div>
                                    </div>
                                    <div class=" row mb-4">
                                        <label for="inputEmail3" class="col-md-3 form-label">Email</label>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" autocomplete="username">
                                        </div>
                                    </div>
                                    <div class=" row mb-4">
                                        <label for="inputPassword3" class="col-md-3 form-label">Password</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="mb-0 row justify-content-end">
                                        <div class="col-md-9">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                <span class="custom-control-label">Check me Out</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-0 mt-4 row justify-content-end">
                                        <div class="col-md-9">
                                            <button class="btn btn-primary">Sign in</button>
                                            <button class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
