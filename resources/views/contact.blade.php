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
                        <form action="{{ route('send.contact') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control mb-3" placeholder="Name" name="name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control mb-3" placeholder="Phone" name="phone">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control mb-3" placeholder="Email" name="email">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control mb-3" placeholder="Subject" name="subj">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control mb-3" cols="30" rows="5" name="msg"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success w-100">Send</button>
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