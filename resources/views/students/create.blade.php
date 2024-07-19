@extends('students.layout')
@section('content')

<div class="d-flex justify-content-center mt-5"> 
    <div class="card col-md-8">
        <div class="card-header"><h3>Add Student</h3></div>
        <div class="card-body">

            <form action="{{ url('student') }}" method="post">
                {!! csrf_field() !!}
                <table class="mx-auto">
                    <tr>
                        <th>Name</th>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="text" name="name" id="name" class="form-control" required></td>
                    </tr>
                    <tr>
                        <th>Date of birth</th><th>Address</th><th>Email</th>
                    </tr>
                    <tr>
                        <td><input type="date" name="dob" id="dob" class="form-control" required></td>
                        <td><input type="text" name="address" id="address" class="form-control"></td>
                        <td><input type="text" name="email" id="email" class="form-control" required></td>
                    </tr>
                    <tr>
                        <th>Phone</th><th>Grade</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="phone" id="phone" class="form-control"></td>
                        <td><input type="text" name="grade" id="grade" class="form-control" required></td>
                    </tr>
                    <tr><td><br></td><td><br></td><td><br></td></tr>
                    <tr>
                        <th colspan="3">
                            <input type="submit" value="Save" class="btn btn-primary btn-lg btn-block" style="width: 100%;"> <!-- Changed color to btn-primary -->

                        </th>
                    </tr>
                </table>
                <br>
            </form>

        </div>
    </div>
</div>

@stop
