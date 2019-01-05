@extends('../layouts/master')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Teachers Arena</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Tables</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h3><i class="fa fa-table"></i> Here's the list of all teachers</h3>
                                <a href="{{ route('add-teacher') }}" class="btn btn-success">Add Teachers</a>
                            </div>

                            <div class="card-body">
                                <table class="table table-responsive-xl table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th>Picture</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone No</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($teachers as $teacher)
                                        <tr>
                                            <th scope="row">{{ $teacher->id }}</th>
                                            <td>
                                                <div class="img-wrapper" style="width: 60px; height: 60px; overflow: hidden;">
                                                    <img src="{{ asset('img/' . $teacher->dp) }}" alt="avatar" class="img-fluid">
                                                </div>
                                            </td>
                                            <td>{{ $teacher->name }}</td>
                                            <td>{{ $teacher->email }}</td>
                                            <td>{{ $teacher->phone_no }}</td>
                                            <td>{{ $teacher->address }}</td>
                                            <td>{{ $teacher->role }}</td>
                                            <td>
                                                <a href="{{ route('edit-teacher', $teacher->id) }}" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <a href="{{ route('delete-teacher', $teacher->id) }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

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