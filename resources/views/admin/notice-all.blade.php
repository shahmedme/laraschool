@extends('../layouts/master')

@section('content')
    <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">



                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">All Notice</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">notices</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3><i class="fa fa-sticky-note" aria-hidden="true"></i> All Notices</h3>
                            <a href="{{ route('notice.new') }}" class="btn btn-secondary">New Notice</a>
                        </div>

                        <div class="card-body pt-0 row">
                            @foreach($notices as $notice)
                                <div class="col-lg-4">
                                    <div class="card text-white bg-info mt-3">
                                        <div class="card-header text-white d-flex justify-content-between align-items-center">
                                            <p class="m-0">{{ $notice->topic}}</p>
                                            <div class="btn-wrapper">
                                                <a href="{{ route('notice.edit', $notice->id) }}" class="btn btn-sm btn-info">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{ route('notice.delete', $notice->id) }}" class="btn btn-sm btn-info">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">{{ str_limit($notice->title, $limit = 20, $end = '...') }}</h4>
                                            <p class="card-text">{{ str_limit(strip_tags($notice->content), $limit = 150, $end = '...') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{ $notices->links() }}
                        </div>
                    </div><!-- end card-->
                </div>
            </div>
            <!-- END container-fluid -->
        </div>
        <!-- END content -->
    </div>
@endsection