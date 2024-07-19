@extends('students.layout')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- Bootstrap JavaScript bundle (popper.js included) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- SweetAlert2 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Student Details</h2>
                </div>
                <div class="card-body">
                    <!-- Display success message if it exists -->
                    @if(session('success_message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success_message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Student
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Date of Birth</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Grade</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->dob }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->grade }}</td>
                                    <td>
                                        <a href="{{ url('/student/' . $item->id) }}" title="View Student" class="btn btn-sm" style="background: none;">
                                            <i class="fa fa-eye" aria-hidden="true" style="color: green;"></i>
                                        </a>
                                        <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student" class="btn btn-sm" style="background: none;">
                                            <i class="fa fa-edit" aria-hidden="true" style="color: blue;"></i>
                                        </a>

                                        <button type="button" class="btn btn-sm" style="background: none;" title="Delete Student"
                                                onclick="confirmDelete('{{ $item->id }}')">
                                            <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete(studentId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit the form for deletion
                var form = document.createElement('form');
                form.method = 'POST';
                form.action = '{{ url('/student') }}/' + studentId;
                form.innerHTML = '{{ csrf_field() }}{{ method_field('DELETE') }}';
                document.body.appendChild(form);
                form.submit();
            }
        });
    }
</script>

@endsection
