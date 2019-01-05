@extends('../layouts/master')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Edit Teacher Info</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Forms</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3><i class="fa fa-check-square-o"></i> You can edit any information</h3>
                            </div>

                            <div class="card-body">

                                <form autocomplete="off" action="{{ route('update-teacher', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                                    {{ @csrf_field() }}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Full Name</label>
                                            <input type="text" class="form-control" id="inputEmail4" value="{{ $teacher->name }}" name="name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Email</label>
                                            <input type="email" class="form-control" id="inputPassword4" value="{{ $teacher->email }}" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Phone Number</label>
                                        <input type="text" class="form-control" id="inputAddress2" value="{{ $teacher->phone_no }}" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" class="form-control" id="inputAddress" value="{{ $teacher->address }}" name="address">
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <label for="inputState">Upload Display Picture</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="dp">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Role</label>
                                            <select id="inputState" class="form-control" name="role">
                                                <option selected>{{ $teacher->role }}</option>
                                                <option value="head">Head Teacher</option>
                                                <option value="professor">Professor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
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