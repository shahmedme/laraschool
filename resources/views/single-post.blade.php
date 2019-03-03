@extends('../layouts/master')

@push('styles')

@endpush

@section('content')
    <main class="py-5">
        <div class="container">
            <article class="blog-content">
                <img src="{{ asset('img/' . $post->thumbnail) }}" class="img-fluid">
                <header class="mt-3">
                    <h2>{{ $post->title }}</h2>
                </header>
                <section class="p-0">
                    {{ strip_tags($post->content) }}
                </section>
            </article>
        </div>
    </main>
@endsection

@push('scripts')

@endpush