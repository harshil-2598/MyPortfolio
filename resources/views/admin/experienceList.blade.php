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
                                    <a href="{{ route('Experience.create') }}" type="button" class="btn btn-red me-3  mt-2 ms-2" ><i class="fa-solid fa-plus" title="Add Experience"></i></a>

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
                                            <th class="wd-15p border-bottom-0" >Job title</th>
                                            <th class="wd-15p border-bottom-0" >Employer</th>
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
        $(document).ready(function () {

            var table = $('#responsive-datatable1').DataTable({
                processing: true,
                serverSide: true,
                type: "GET",
                ajax: "{{ route('Experience.index') }}",
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
                        data: 'job_title',
                        name: 'job_title',
                        {{--render: function(data, type, full, meta) {--}}
                        {{--    return '<img src="{{ asset('assets/industries/') }}/'+data+'" width="50px" height="50px">';--}}
                        {{--}--}}
                    },
                    {data:'employer',name:'employer'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

        });

    </script>

@endsection
