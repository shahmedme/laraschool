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

                        <!-- Column 1 (horizontal, vertical, horizontal, vertical) -->
                        <div class="image fit">
                            <img src="{{ asset('assets/img/pic01.jpg') }}" alt="" />
                        </div>
                        <div class="image fit">
                            <img src="{{ asset('assets/img/pic02.jpg') }}" alt="" />
                        </div>
                        <div class="image fit">
                            <img src="{{ asset('assets/img/pic03.jpg') }}" alt="" />
                        </div>
                        <div class="image fit">
                            <img src="{{ asset('assets/img/pic04.jpg') }}" alt="" />
                        </div>

                        <!-- Column 2 (vertical, horizontal, vertical, horizontal) -->
                        <div class="image fit">
                            <img src="{{ asset('assets/img/pic06.jpg') }}" alt="" />
                        </div>
                        <div class="image fit">
                            <img src="{{ asset('assets/img/pic05.jpg') }}" alt="" />
                        </div>
                        <div class="image fit">
                            <img src="{{ asset('assets/img/pic08.jpg') }}" alt="" />
                        </div>
                        <div class="image fit">
                            <img src="{{ asset('assets/img/pic07.jpg') }}" alt="" />
                        </div>

                        <!-- Column 3 (horizontal, vertical, horizontal, vertical) -->
                        <div class="image fit">
                            <img src="{{ asset('assets/img/pic09.jpg') }}" alt="" />
                        </div>
                        <div class="image fit">
                            <img src="{{ asset('assets/img/pic12.jpg') }}" alt="" />
                        </div>
                        <div class="image fit">
                            <img src="{{ asset('assets/img/pic11.jpg') }}" alt="" />
                        </div>
                        <div class="image fit">
                            <img src="{{ asset('assets/img/pic10.jpg') }}" alt="" />
                        </div>

                        <!-- Column 4 (vertical, horizontal, vertical, horizontal) -->
                        <div class="image fit">
                            <img src="{{ asset('assets/img/pic13.jpg') }}" alt="" />
                        </div>
                        <div class="image fit">
                            <img src="{{ asset('assets/img/pic14.jpg') }}" alt="" />
                        </div>
                        <div class="image fit">
                            <img src="{{ asset('assets/img/pic15.jpg') }}" alt="" />
                        </div>
                        <div class="image fit">
                            <img src="{{ asset('assets/img/pic16.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')

@endpush