@extends('layout.admin')
@section('title', 'Experience Display')
@section('content')

<style>



</style>
<div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Your Experirnce</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Experience</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Your Experirnce</li>
                        </ol>
                    </div>
                </div>
                @foreach($data as $d)
                <div class="animate">
                    <div class="card">
                        <div class="card-body">
                            <h1>{{ $d->job_title }}</h1> <br>
                            <h4><strong>{{ $d->employer }}</strong></h4>
                            <p class=""><b>Start Date:</b><span class="taxt-strong">{{ $d->start_date }}</span></p>
                            <p class=""><b>End Data Date:</b><span class="taxt-strong">{{ $d->end_date }}</span></p>
                            <p class=""><b>Description:</b><span class="taxt-strong">{{ $d->description }}</span></p>
                            <a href="{{ route('edit_experience', $d->id) }}">
                                <span class="badge rounded-pill bg-warning-gradient badge-sm me-1 mb-1 mt-1">Edit</span>
                            </a>

                            <a href="{{ route('delete_experience',$d->id) }}">
                                <span class="badge rounded-pill bg-danger badge-sm me-1 mb-1 mt-1">Delete</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
</div>

@endsection

@section('script')

<script>
    $(document).ready(function(){
        $(".animate").fadeIn(10000);
        $(function(){
            // $(".animate").fadeIn();
            // $(".animate").fadeIn("slow");

        });
    });
</script>

@endsection
