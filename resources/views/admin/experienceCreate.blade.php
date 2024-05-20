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
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                <form method="POST" enctype="multipart/form-data" action="{{ route('Experience.store') }}">
                                    @csrf

                                    <div class="">
                                        <div class="form-group">
                                            <label for="" class="form-label">User Name</label>
                                            <input type="text" class="form-control" id="user_name" placeholder="" value="{{ $user->name }}" readonly>
                                            <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
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
                                                        <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Employer</label>
                                                        <input type="text" class="form-control" name="employer" id="employer" placeholder="Enter employer name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">City</label>
                                                        <input type="text" class="form-control" name="city" id="city" placeholder="City">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Country</label>
                                                        <input type="text" class="form-control" name="country" id="country" placeholder="Enter country name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Start Data</label>
                                                        <input type="text" id="datepicker-2" class="form-control" name="start_date" id="start_date" placeholder="date">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">End Date</label>
                                                        <input type="text" class="disableFuturedate form-control" name="end_date" id="end_date" placeholder="Date">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6"></div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" name="current_working" id="current_working" class="form-check-input">
                                                    <label class="form-check-label">Currently Working</label>
                                                </div>
                                            </div>


                                            <div class="row">

                                                <div class="col-md-12">
                                                    <label class="form-label">Description</label>
                                                    <textarea class="form-control content" name="description" id="description"></textarea>
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

            $('#add_row').click(function() {
                var counts = $("#count").val();
                // var newRow = $('#educationRows').find('.education-row').first().clone();
                // newRow.find('input').val(''); // Clear input values of cloned row
                // $('#educationRows').append(newRow);
                let row = ` <tr class="rowClass" id="remove_` + counts + `">
                            <td>
                                <input type="text" class="form-control" name="course[]" id="course_`+counts+`">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="school[]" id="school_`+counts+`">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="grade[]" id="grade_`+counts+`">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="passing_year[]" id="passing_year_`+counts+`">
                            </td>
                            <td>
                                <button type="button" id="remove_`+counts+`" data-id="`+counts+`" class="btn badge badge-danger-light remove"><i class="fa-solid fa-xmark"></i></button>
                            </td>
                            </tr>`;

                $("#educationRows").append(row);
                counts++
                $("#count").val(counts++);
                count++
            });

            // Remove row
            $(document).on('click', '.remove', function() {
                let rowId = $(this).data('id');
                $(`#remove_`+rowId).remove();
            });
        });

        $("#current_working").on('change', function (){
            if($(this).prop("checked")){
                $("#end_date").prop('disabled', true);
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

