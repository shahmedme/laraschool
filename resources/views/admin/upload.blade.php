@extends('../layouts/master')

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
                            <h1 class="main-title float-left">Multiple file upload</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Multiple file upload</li>
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
                                <h3><i class="fa fa-file"></i> Upload Image</h3>
                            </div>

                            <div class="card-body text-center">
                                <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                                    {{ @csrf_field() }}
                                    <div class="btn-group">
                                        <input type="file" class="btn btn-outline-info" name="files[]" id="filer_example1" multiple="multiple">
                                        <button class="btn btn-info">Submit</button>
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
@endsection

@push('scripts')
    <!-- BEGIN Java Script for this page -->
    {{--<script src="{{ asset('admin-view/plugins/jquery.filer/js/jquery.filer.min.js') }}"></script>--}}
    {{--<script src="{{ asset('admin-view/js/upload.js') }}"></script>--}}
@endpush