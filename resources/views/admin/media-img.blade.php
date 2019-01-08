@extends('../layouts/master')

@push('styles')
    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <!-- END CSS for this page -->

    <style>
        .img-wrapper {
            width: 145px;
            height: 100px;
            overflow: hidden;
            margin: 5px 0px;
        }
    </style>
@endpush


@section('content')
    <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">


                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Images</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Images</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h3><i class="fa fa-image"></i> Image Gallery</h3>
                                <a href="{{ route('upload.view') }}" class="btn btn-info">Add New</a>
                            </div>

                            <div class="card-body">

                                <div class="d-flex flex-wrap">
                                    @foreach($images as $image)
                                        <div class="img-wrapper">
                                            <a data-fancybox="gallery" href="{{ asset('img/gallery/' . $image->name) }}" class="col-sm-2">
                                                <img alt="image" src="{{ asset('img/gallery/' . $image->name) }}" class="img-fluid">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>

                                {{ $images->links() }}

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
    <!-- END Java Script for this page -->
@endpush