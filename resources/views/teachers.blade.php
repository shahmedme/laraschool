@extends('../layouts/master')

@push('styles')

@endpush

@section('content')
    <main>
        <div class="team-area sp-1">
            <div class="container">
                <div class="team-item-wrapper">
                    <div class="row">
                        @foreach($teachers as $teacher)
                            <div class="col-sm-6 col-lg-3">
                                <div class="mt-4 team-item-2">
                                    <div class="img-wrapper-tlist">
                                        <img src="{{ asset('img/' . $teacher->dp) }}" alt="#" class="img-fluid">
                                    </div>
                                    <div class="team-item-content pb-3">
                                        <h5 class="mb-0 mt-2">{{ $teacher->name }}</h5>
                                        <small>{{ $teacher->role }}</small>
                                        <ul class="list-unstyled">
                                            <li>{{ $teacher->email }}</li>
                                            <li>{{ $teacher->phone_no }}</li>
                                            <li>{{ $teacher->address }}</li>
                                        </ul>
                                    </div>
                                </div>
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