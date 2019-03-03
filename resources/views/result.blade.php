@extends('../layouts/master')

@push('styles')

@endpush

@section('content')
    <main>
        <div class="result-searchbox my-5">
            <div class="container">
                <form action="{{ route('result.view.front') }}" method="POST">
                    @csrf
                    <div class="form-inline justify-content-center">
                        <input type="text" class="form-control mx-2" id="studentId" placeholder="Student Id" name="id">
                        <select name="semester" id="" class="form-control mx-2">
                            <option value="1st">First Semester</option>
                            <option value="2nd">Second Semester</option>
                            <option value="3rd">Third Semester</option>
                        </select>
                        <button class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection

@push('scripts')

@endpush