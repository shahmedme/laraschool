@extends('../layouts/master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/radius/css/main.css') }}" />
@endpush

@section('content')
    <main class="py-3">
        <div class="container">
            <div id="main">
                <div class="inner">
                    <div class="columns">
                        @foreach($images as $image)
                            <div class="image fit">
                                <img src="{{ asset('img/gallery/' . $image->name) }}" alt="" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')

@endpush