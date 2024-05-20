@extends('layout.admin')
@section('title','About Us')
@section('content')

    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">About Us</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">About Us Form</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('About.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" id="id" value="{{ isset($about->id)? $about->id :   }}">
                                    <div class="">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">About Us</label>
                                            <textarea name="about_us" class="form-control summernote">{{ (isset($about->About))? $about->About : '' }}</textarea>
                                        </div>
                                        @error('about_us')
                                        <span class="text-danger error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary mt-4 mb-0">Submit</button>
{{--                                    <button type="submit" @disabled($errors->isNotEmpty())>Submit</button>--}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                placeholder: 'Write Here',
                tabsize: 2,
                height: 100,

            });
        });
    </script>
@endsection
