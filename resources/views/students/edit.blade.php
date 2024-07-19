@extends('students.layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center"> <!-- Centering the row horizontally -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Edit <b>{{ $students->name }}'s</b> Profile</h3></div>
                <div class="card-body">

                    <form action="{{ url('student/' . $students->id) }}" method="post">
                        {!! csrf_field() !!}
                        @method("PATCH")
                        <table class="mx-auto">
                            <tr>
                                <th>Name</th>
                            </tr>
                            <tr>
                                <td colspan="3"><input type="text" name="name" id="name" value="{{ $students->name }}" class="form-control" required></td>
                            </tr>
                            <tr>
                                <th>Date of birth</th><th>Address</th><th>Email</th>
                            </tr>
                            <tr>
                                <td><input type="date" name="dob" id="dob" value="{{ $students->dob }}" class="form-control" required></td>
                                <td><input type="text" name="address" id="address" value="{{ $students->address }}" class="form-control"></td>
                                <td><input type="text" name="email" id="email" value="{{ $students->email }}" class="form-control" required></td>
                            </tr>
                            <tr>
                                <th>Phone</th><th>Grade</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="phone" id="phone" value="{{ $students->phone }}" class="form-control"></td>
                                <td><input type="text" name="grade" id="grade" value="{{ $students->grade }}" class="form-control" required></td>
                            </tr>
                            <tr><td><br></td><td><br></td><td><br></td></tr>
                            <tr>
                                <th colspan="3">
                                <input type="submit" value="Save" class="btn btn-primary btn-lg btn-block" style="width: 100%;"> <!-- Changed color to btn-primary -->
                                </th>
                            </tr>
                        </table>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@stop
