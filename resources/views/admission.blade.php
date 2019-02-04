@extends('../layouts/master')

@push('styles')

@endpush

@section('content')
    <main>
        <!-- details card section starts from here -->
        <section class="details-card">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-content">
                            <div class="card-img">
                                <img src="https://placeimg.com/380/230/nature" alt="">
                                <span>
                                    <h4>heading</h4>
                                </span>
                            </div>
                            <div class="card-desc">
                                <h3>Heading</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum!
                                    Dolor quo, perspiciatis
                                    voluptas totam</p>
                                <a href="#" class="btn-card d-inline-block">Read</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-content">
                            <div class="card-img">
                                <img src="https://placeimg.com/380/230/animals" alt="">
                                <span>
                                    <h4>heading2</h4>
                                </span>
                            </div>
                            <div class="card-desc">
                                <h3>Heading2</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum!
                                    Dolor quo, perspiciatis
                                    voluptas totam</p>
                                <a href="#" class="btn-card d-inline-block">Read</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-content">
                            <div class="card-img">
                                <img src="https://placeimg.com/380/230/tech" alt="">
                                <span>
                                    <h4>heading3</h4>
                                </span>
                            </div>
                            <div class="card-desc">
                                <h3>Heading3</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum!
                                    Dolor quo, perspiciatis
                                    voluptas totam</p>
                                <a href="#" class="btn-card d-inline-block">Read</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- details card section starts from here -->
    </main>
@endsection

@push('scripts')

@endpush