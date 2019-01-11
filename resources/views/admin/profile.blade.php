@extends('admin/layouts/master')

@section('content')
    <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">


                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">My Profile</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Profile</li>
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
                                <h3><i class="fa fa-user"></i> Profile details</h3>
                            </div>

                            <div class="card-body">


                                <form action="{{ route('profile-store') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">

                                        <div class="col-lg-9 col-xl-9">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Full name (required)</label>
                                                        <input class="form-control" name="full_name" type="text" value="{{ $user->full_name }}" required />
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Valid Email (required)</label>
                                                        <input class="form-control" name="email" type="email" value="{{ $user->email }}" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Password (leave empty not to change)</label>
                                                        <input class="form-control" name="password" type="password" value="" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Skype</label>
                                                        <input class="form-control" name="social" type="text" value="{{ $user->social }}" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </div>

                                        </div>



                                        <div class="col-lg-3 col-xl-3 border-left">
                                            <div id="avatar_image" class="mt-4 text-center">
                                                <img alt="image" style="width:73px; height:auto;" src="{{ asset('img/'.$user->avatar) }}" />
                                                <br />
                                                <div class="d-none"><i class="fa fa-trash-o fa-fw"></i> <a class="delete_image" href="#">Remove avatar</a></div>
                                            </div>
                                            <div id="image_deleted_text"></div>


                                            <div class="m-b-10"></div>

                                            <div class="custom-file mt-3">
                                                <input type="file" class="custom-file-input" id="customFile" name="img">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>

                                        </div>
                                    </div>

                                </form>

                            </div>
                            <!-- end card-body -->

                        </div>
                        <!-- end card -->

                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->


            </div>
            <!-- END container-fluid -->

        </div>
        <!-- END content -->

    </div>
@endsection