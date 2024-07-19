@extends('students.layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h3><b>{{ $students->name }}</b>'s Profile</h3></div>
                <div class="card-body">
                <table class="mx-auto">
                    <tr>
                        <th>Name</th>
                        <td>:</td>
                        <td> {{ $students->name }}</td>
                    </tr>
                    <tr>
                        <th>Date of birth</th>
                        <td>:</td>
                        <td>{{ $students->dob}}</td>
                    </tr>
                     <tr>
                        <th>Address</th>
                        <td>:</td>
                        <td>{{ $students->address}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>:</td>
                        <td>{{ $students->email}}</td>
                    </tr>
                     <tr>
                        <th>Phone</th>
                        <td>:</td>
                        <td>{{ $students->phone}}</td>
                    </tr>
                    <tr>
                        <th>Grade</th>
                        <td>:</td>
                        <td>{{ $students->grade}}</td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
