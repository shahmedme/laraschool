@extends('admin/layouts/master')

@section('content')
    <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">About Institute</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">institute</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3><i class="fa fa-university" aria-hidden="true"></i> {{ $infos[0] }}</h3>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('option') }}" method="POST" class="form-row" enctype="multipart/form-data">
                                    {{ @csrf_field() }}
                                    <div class="col-md-6 ml-1">
                                        <div class="form-group row">
                                            <label for="phone" class="col-sm-4 col-form-label">Phone</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control-plaintext" name="phone" id="name" value="{{ $infos[1] }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label">Email</label>
                                            <div class="col-sm-6">
                                                <input type="email" class="form-control-plaintext" name="email" id="email" value="{{ $infos[2] }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="address" class="col-sm-4 col-form-label">Address</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control-plaintext" name="address" id="address" value="{{ $infos[3] }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="facebook" class="col-sm-4 col-form-label">Facebook</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control-plaintext" name="facebook" id="facebook" value="{{ $infos[5] }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="instagram" class="col-sm-4 col-form-label">Instagram</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control-plaintext" name="instagram" id="instagram" value="{{ $infos[6] }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="twitter" class="col-sm-4 col-form-label">Twitter</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control-plaintext" name="twitter" id="twitter" value="{{ $infos[7] }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="youtube" class="col-sm-4 col-form-label">Youtube</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control-plaintext" name="youtube" id="youtube" value="{{ $infos[8] }}">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info">Save Changes</button>
                                    </div>
                                    <div class="col-md-4 border-left ml-auto d-flex justify-content-center align-items-center">
                                        <div class="logo-wrapper">
                                            <div id="avatar_image" class="mt-4 text-center">
                                                <img alt="image" style="width:100px; height:auto;" src="{{ asset('img/' . $infos[4]) }}" />
                                            </div>
                                            <div class="custom-file mt-3">
                                                <input type="file" class="custom-file-input" id="customFile" name="logo">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END container-fluid -->
        </div>
        <!-- END content -->
    </div>
@endsection