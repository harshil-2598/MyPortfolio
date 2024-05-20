@extends('layout.admin')
@section('title', 'Eduction Page')
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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Eduction</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Eduction-Add</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Vertical Form</h4>
                            </div>
                            <div class="card-body">
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif


                                @if(session()->has('fails'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('fails') }}
                                    </div>
                                @endif

                                <form method="POST" enctype="multipart/form-data" action="{{ route('Experience.update',['Experience' => $data->id]) }}">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" id="id" value="{{$data->id}}">
                                    <div class="">
                                        <div class="form-group">
                                            <label for="" class="form-label">User Name</label>
                                            <input type="text" class="form-control" id="user_name" placeholder="" value="{{ $data->user->name }}" readonly>
                                            <input type="hidden" name="user_id" id="user_id" value="{{ $data->user->id }}">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" name="count" id="count" value="2">
                                            </div>
                                        </div>
                                        <div id="dynamic_field">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Job Title</label>
                                                        <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title" value="{{ $data->job_title }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Employer</label>
                                                        <input type="text" class="form-control" name="employer" id="employer" placeholder="Enter employer name" value="{{ $data->employer }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">City</label>
                                                        <input type="text" class="form-control" name="city" id="city" placeholder="City" value="{{ $data->city }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Country</label>
                                                        <input type="text" class="form-control" name="country" id="country" placeholder="Enter country name" value="{{ $data->country }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Start Data</label>
                                                        <input type="text" id="datepicker-2" class="form-control" name="start_date" id="start_date" placeholder="date" value="{{ $data->start_date }}" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">End Date</label>
                                                        <input type="text" class="disableFuturedate form-control" name="end_date" id="end_date" placeholder="Date" value="{{$data->end_date }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6"></div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" name="current_working" id="current_working" class="form-check-input" value="" {{ $data->current_work == 'Yes' ? 'checked' : '' }}>
                                                    <label class="form-check-label">Currently Working</label>
                                                </div>
                                            </div>


                                            <div class="row">

                                                <div class="col-md-12">
                                                    <label class="form-label">Description</label>
                                                    <textarea class="form-control content" name="description" id="description">{!! $data->description !!}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary mt-4 mb-0">Submit</button>
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
    <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script>
        $(document).ready(function (){

            setTimeout(function() {
                $(".alert-success").hide();
            }, 5000);

            let count = 1;


        });

        $("#current_working").on('change', function (){
            if($(this).prop("checked")){
                <?php $currentDate = \Carbon\Carbon::now()->format('d/m/Y'); ?>
                const d = "<?php echo $currentDate; ?>";
                $("#end_date").prop('disabled', true);
                $("#end_date").val(d);
            } else {
                $("#end_date").prop('disabled', false);
                // Add any actions you want to perform when the checkbox is unchecked
            }
        });

    </script>


    <script>
        $(document).ready(function () {
            var currentDate = new Date();
            $('.disableFuturedate').datepicker({
                format: 'dd/mm/yy',
                autoclose:true,
                maxDate: currentDate,
                changeMonth: true,
                changeYear: true,
                dateFormat: "dd/mm/yy",
                yearRange: "-90:+00",
                defaultValue: null,
            }).on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });
            $('.disableFuturedate').keyup(function () {
                if (this.value.match(/[^0-9]/g)) {
                    this.value = this.value.replace(/[^0-9^-]/g, '');
                }
            });



            $('#datepicker-2').on('change', function() {
                if ($(this).val() === '') {
                    $(this).datepicker('setDate', null);
                }
            });


            $( "#datepicker-2" ).datepicker({
                format: 'dd/mm/yy',
                autoclose:true,
                changeMonth: true,
                changeYear: true,
                dateFormat: "dd/mm/yy",
                yearRange: "-90:+00"
            });
        });


    </script>

@endsection

