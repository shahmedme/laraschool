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

        <div class="result-confirmation">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        You are viewing <strong>{{ $result->name }}</strong>'s result. Total number is <strong>{{ $totalNumber }}</strong> and grade is <strong>A+</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="result-display-area my-4">
            <div class="container">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Mark</th>
                        <th scope="col">Grade</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Bangla</td>
                        <td>{{ $result->bangla }}</td>
                        <td>{{ $subjArray[0] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>English</td>
                        <td>{{ $result->english }}</td>
                        <td>{{ $subjArray[1] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Math</td>
                        <td>{{ $result->math }}</td>
                        <td>{{ $subjArray[2] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Physics</td>
                        <td>{{ $result->physics }}</td>
                        <td>{{ $subjArray[3] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Biology</td>
                        <td>{{ $result->biology }}</td>
                        <td>{{ $subjArray[4] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Chemistry</td>
                        <td>{{ $result->chemistry }}</td>
                        <td>{{ $subjArray[5] }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection

@push('scripts')

@endpush