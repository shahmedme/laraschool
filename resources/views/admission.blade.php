@extends('../layouts/master')

@push('styles')

@endpush

@section('content')
    <main>
        <!-- details card section starts from here -->
        <section class="details-card">
            <div class="container">
                <div class="row">
                    @foreach($notices as $notice)
                        <div class="col-md-4">
                            <div class="card-content">
                                <div class="card-img">
                                    <img src="https://placeimg.com/380/230/nature" alt="">
                                    <span>
                                    <h4>{{ $notice->topic }}</h4>
                                </span>
                                </div>
                                <div class="card-desc">
                                    <h3><a href="{{ route('post.single', $notice->id) }}">{{ str_limit($notice->title, $limit = 40, $end = '') }}</a></h3>
                                    <p>{{ str_limit(strip_tags($notice->content)) }}</p>
                                    <a href="{{ route('post.single', $notice->id) }}" class="btn-card d-inline-block">Read</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- details card section starts from here -->
    </main>
@endsection

@push('scripts')

@endpush