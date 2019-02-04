@extends('../layouts/master')

@push('styles')

@endpush

@section('content')
    <main>
        <div class="result-searchbox my-5">
            <div class="container">
                <form action="#">
                    <div class="form-inline justify-content-center">
                        <input type="text" class="form-control mx-2" id="studentId" placeholder="Student Id">
                        <select name="" id="" class="form-control mx-2">
                            <option value="">First Semester</option>
                            <option value="">Second Semester</option>
                            <option value="">Third Semester</option>
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
                        You are viewing <strong>Rayan Khan</strong>'s result. Total number is <strong>998</strong> and grade is <strong>A+</strong>
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
                        <td>80</td>
                        <td>A+</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>English</td>
                        <td>77</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Math</td>
                        <td>90</td>
                        <td>A+</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Physics</td>
                        <td>79</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Biology</td>
                        <td>99</td>
                        <td>A+</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Chemistry</td>
                        <td>72</td>
                        <td>A</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection

@push('scripts')

@endpush