@extends('admin/layouts/master')

@push('styles')
    <!-- BEGIN CSS for this page -->
    <link href="assets/plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
    <link href="assets/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />
    <!-- END CSS for this page -->
@endpush


@section('content')
    <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">


                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Result upload</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Result</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 mx-auto">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3><i class="fa fa-file"></i> Upload xls</h3>
                            </div>

                            <div class="card-body text-center">
                                <form action="{{ route('result.upload') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="btn-group">
                                        <input type="file" class="btn btn-outline-info" name="file" id="filer_example1" multiple="multiple">
                                        <button class="btn btn-info">Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- end card-->
                    </div>
                </div>
            </div>
            <!-- END container-fluid -->
        </div>
        <!-- END content -->
    </div>

    {{--<div class="container">--}}

        {{--<div class="card bg-light mt-3">--}}

            {{--<div class="card-header">--}}

                {{--Laravel 5.7 Import Export Excel to database Example - ItSolutionStuff.com--}}

            {{--</div>--}}

            {{--<div class="card-body">--}}

                {{--<form action="{{ route('result.upload') }}" method="POST" enctype="multipart/form-data">--}}

                    {{--@csrf--}}

                    {{--<input type="file" name="file" class="form-control">--}}

                    {{--<br>--}}

                    {{--<button class="btn btn-success">Import User Data</button>--}}

                    {{--<a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>--}}

                {{--</form>--}}

            {{--</div>--}}

        {{--</div>--}}

    {{--</div>--}}
@endsection

@push('scripts')
    <!-- BEGIN Java Script for this page -->
    {{--<script src="{{ asset('admin-view/plugins/jquery.filer/js/jquery.filer.min.js') }}"></script>--}}
    {{--<script src="{{ asset('admin-view/js/upload.js') }}"></script>--}}
@endpush