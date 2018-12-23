@extends('../layouts/master')

@push('styles')
    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" href="{{ asset('admin-view/plugins/trumbowyg/ui/trumbowyg.min.css') }}">
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
                            <h1 class="main-title float-left">WYSIWYG text editor</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">WYSIWYG text editor</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3><i class="fa fa-file-o"></i> WYSIWYG editor example</h3>
                                Editor and generated code are optimized for HTML5 support. Compatible with all recents browsers like IE9+, Chrome, Opera and Firefox.
                            </div>

                            <div class="card-body">

                                <textarea rows="3" class="form-control editor" name="content"></textarea>

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
    <script src="{{ asset('admin-view/plugins/trumbowyg/trumbowyg.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            'use strict';
            $('.editor').trumbowyg();
        });
    </script>
    <!-- END Java Script for this page -->
@endpush