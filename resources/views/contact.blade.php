@extends('../layouts/master')

@push('styles')

@endpush

@section('content')
    <main class="contact-1">
        <div class="sp-2 contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 order-md-2">
                        <div class="d-flex d-md-block flex-wrap justify-content-between address">
                            <div class="pr-3 call">
                                <h6>Call Us</h6>
                                <p>{{ $infos[1] }}</p>
                            </div>
                            <div class="pr-3 email">
                                <h6>Email</h6>
                                <p>{{ $infos[2] }}</p>
                            </div>
                            <div class="pr-3 visit">
                                <h6>Visit Us</h6>
                                <p>{{ $infos[3] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 order-md-1">
                        <form action="#">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control mb-3" placeholder="Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control mb-3" placeholder="Phone">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control mb-3" placeholder="Email">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control mb-3" placeholder="Department">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control mb-3" cols="30" rows="5"></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="btn btn-success d-block">Send</div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')

@endpush