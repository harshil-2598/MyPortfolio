@extends('layout.admin')
@section('title','List Of All Educational  List')
@section('content')


    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">List Of All Educational  List</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Apps</a></li>
                            <li class="breadcrumb-item active" aria-current="page">List Of All Educational  List</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List Of All Educational  List</h3>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-   6">
                                    <a href="{{ route('Eduction.create') }}" type="button" class="btn btn-red me-3  mt-2 ms-2" >Add Eduction</a>

                                    <!-- <button class="btn btn-primary btn-xs removeAll me-3  mt-2 ms-2">Remove All Data</button> -->
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-8 ms-2">
                                    <p id="response"></p>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered border-bottom table-striped table-hover" style="width:100%" id="responsive-datatable1">
                                        <thead>
                                        <tr>
                                            <th>Sr. Number</th>
                                            <th class="wd-15p border-bottom-0">User name</th>
                                            <th class="wd-15p border-bottom-0" >course</th>
                                            <th class="wd-15p border-bottom-0" >school</th>
                                            <th class="wd-15p border-bottom-0" >grade</th>
                                            <th class="wd-15p border-bottom-0" >Passing Year</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="">

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>


    {{--    <div class="spiner">--}}
    {{--        <div class="spinner-border" role="status">--}}
    {{--            <span class="visually-hidden">Loading...</span>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection

@section('script')

    <script>


        $("#image-modal").click(function() {
            $("#image_frm")[0].reset();
        });

        setTimeout(function(){
            $("#response").html('');
        }, 3000)
        $(document).ready(function () {

            var table = $('#responsive-datatable1').DataTable({
                processing: true,
                serverSide: true,
                type: "GET",
                ajax: "{{ route('Eduction.index') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'id'},
                    {
                        data: 'name',
                        name: 'name',
                        {{--render: function(data, type, full, meta) {--}}
                        {{--    return '<img src="{{ URL::asset("assets/about_img/") }}/'+data+'" width="50px" height="50px">';--}}
                        {{--}--}}
                    },
                    {
                        data: 'course',
                        name: 'course',
                        {{--render: function(data, type, full, meta) {--}}
                        {{--    return '<img src="{{ asset('assets/industries/') }}/'+data+'" width="50px" height="50px">';--}}
                        {{--}--}}
                    },
                    {data:'school',name:'school'},
                    {data:'grade',name:'grade'},
                    {data:'passing_year',name:'passing_year'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

        });

        function DeleteIndustry(id) {
            var DeleteImages = confirm("Delete Image?");
            if (DeleteImages === true) {
                $.ajax({
                    type: "GET", // Use DELETE for deleting resources
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    url: 'DeleteIndustry/'+id,
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function(result) {
                        if (result.success === true) {
                            $("#response").html(`<div class="alert alert-success">` + result.msg + `</div>`);
                            setTimeout(function() {
                                $("#response").html("");
                            }, 3000);
                            $('#responsive-datatable1').DataTable().ajax.reload(); // Reload DataTable
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle potential errors (optional)
                        console.error("AJAX Error:", textStatus, errorThrown);
                    }
                });
            }
        }


    </script>

@endsection
