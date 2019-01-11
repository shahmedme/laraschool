@extends('admin/layouts/master')

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
                            <h1 class="main-title float-left">Notice Editor</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Notice</li>
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
                                <h3><i class="fa fa-file-o"></i> Add New Notice</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('notice.update', $notice->id) }}" method="POST">
                                    {{ @csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-9 form-group">
                                            <label for="title">Notice Title</label>
                                            <input type="text" id="title" class="form-control" value="{{ $notice->title }}" name="title">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inlineFormCustomSelect">Select Notice Topic</label>
                                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="topic">
                                                <option selected value="Uncategorized">Choose...</option>
                                                <option value="Culture">Culture</option>
                                                <option value="Tech">Tech</option>
                                                <option value="Startup">Startup</option>
                                            </select>
                                        </div>
                                    </div>
                                    <textarea rows="3" class="form-control editor" name="body">
                                        {{ $notice->content }}
                                    </textarea>
                                    <a href="{{ route('notice.all') }}" class="btn btn-info">Cancel</a>
                                    <button class="btn btn-info">Save</button>
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
    <script src="{{ asset('admin-view/plugins/trumbowyg/trumbowyg.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            'use strict';
            $('.editor').trumbowyg();
        });
    </script>
    <!-- END Java Script for this page -->
@endpush