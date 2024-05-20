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
                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                <form method="POST" enctype="multipart/form-data" action="{{ route('update', $user->id) }}">
                                    @csrf
                                    
                                    <div class="">
                                        <div class="form-group">
                                            <label for="" class="form-label">User Name</label>
                                            <input type="text" class="form-control" id="user_name" placeholder=""
                                                value="{{ $user->name }}" readonly>
                                            <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="button" id="add_row" class="btn badge-success-light"><i
                                                        class="fa fa-plus-square"></i></button>
                                                <input type="text" name="count" id="count" value="2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <table class="table" id="table-id">
                                                <thead>
                                                    <tr>
                                                        <th>Course</th>
                                                        <th>School/College Name</th>
                                                        <th>Grade</th>
                                                        <th>Passing Year</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="educationRows">
                                                    @php
                                                        $count = 1;
                                                    @endphp
                                                    @foreach ($data as $d)
                                                    <input type="hidden" name="eduction_id[]" id="eduction_id" value="{{ $d->id }}"
                                                        <tr class="education-row" data-count="{{ $count }}" id="">
                                                            <td>
                                                                <input type="text" class="form-control" name="course[]"
                                                                    id="course_{{ $count }}"
                                                                    value="{{ $d->course }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="school[]"
                                                                    id="school_{{ $count }}"
                                                                    value="{{ $d->school }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="grade[]"
                                                                    id="grade_{{ $count }}"
                                                                    value="{{ $d->grade }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    name="passing_year[]"
                                                                    id="passing_year_{{ $count }}"
                                                                    value="{{ $d->passing_year }}">
                                                            </td>
                                                            <td class="actions-cell">
                                                                <button type="button"
                                                                    class="btn btn-danger remove-education-row"
                                                                    onclick="remove_row({{ $d->id }})"
                                                                    data-education-id="{{ $d->id }}">
                                                                    <i class="fa-solid fa-trash"></i> Remove
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        @php
                                                            $count++;
                                                        @endphp
                                                    @endforeach

                                                    @if ($errors->any())
                                                        <tr>
                                                            <td colspan="5">
                                                                <ul class="text-danger">
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @endif
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
        $(document).ready(function() {

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
                                <input type="text" class="form-control" name="course[]" id="course_` + counts + `">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="school[]" id="school_` + counts + `">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="grade[]" id="grade_` + counts + `">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="passing_year[]" id="passing_year_` +
                    counts + `">
                            </td>
                            <td>
                                <button type="button" id="remove_` + counts + `" data-id="` + counts + `" class="btn badge badge-danger-light remove"><i class="fa-solid fa-xmark"></i></button>
                            </td>
                            </tr>`;

                $("#educationRows").append(row);
                counts++
                $("#count").val(counts++);
                count++
            });

            // Remove row
            $(document).on('click', '.remove', function() {
                let Id = $(this).data('id');
                // let rowID = $(this).val();
                $(`#remove_`+Id).remove();
            });

             $('.remove-education-row').click(function() {
                var educationId = $(this).data('education-id');
                var counts = $("#count").val();
                $.post("{{route('remove')}}", {
                    "_token": "{{csrf_token()}}",
                    "id": educationId
                }, function(result) {
                    if (result.success == true) {
                        $(`#remove_"${counts}`).remove();
                        // $('#table-id').DataTable().ajax.reload();
                        setTimeout(function() {
                            window.location.reload();
                        }, 3000);
                        //     education-row
                    } else {
                        console.error("Error removing row:", result.msg || "Unknown error");
                        // You can display an error message to the user here
                    }
                });
             });

        });

        // function remove_row(id) {
        //     $.ajax({
        //         type: "GET",
        //         url: "remove_row/" + id, // 'url' should be lowercase
        //         success: function(res) {
        //             alert(res.msg);
        //             if (res.success == true) {
        //                 $('#table-id').DataTable().ajax.reload();
        //             }
        //         }
        //     });
        // }
    </script>
@endsection
