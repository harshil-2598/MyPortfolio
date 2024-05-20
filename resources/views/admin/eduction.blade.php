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
                                <form method="POST" enctype="multipart/form-data" action="{{ route('Eduction.store') }}">
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
                                        <div class="form-group">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <td>Course</td>
                                                        <td>School/College Name</td>
                                                        <td>Gread</td>
                                                        <td>Passing year</td>
                                                        <td>Add/Remove</td>
                                                    </tr>
                                                </thead>
                                                @php
                                                    $count = 0;
                                                @endphp
                                                <tbody id="educationRows">
                                                    <tr class="education-row">
                                                        <td>
                                                            <input type="text" class="form-control" name="course[]" id="course">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="school[]" id="school">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="grade[]" id="grade">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="passing_year[]" id="passing_year">
                                                        </td>
                                                        <td>
                                                            <button type="button" id="add_row" class="btn badge-success-light"><i class="fa fa-plus-square"></i></button>
                                                        </td>
                                                    </tr>
                                                <tr>

                                                    @if($errors->any())
                                                            @foreach($errors->all() as $error)
                                                            <td>
                                                                <span class="text-danger">{{ $error }}</span>
                                                            </td>
                                                            @endforeach
                                                    @endif

                                                </tr>
                                                </tbody>
                                            </table>
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
    </script>
@endsection

