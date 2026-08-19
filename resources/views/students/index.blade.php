<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Students</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">

        {{-- Header --}}
        <div
            class="d-flex flex-column flex-md-row
                justify-content-between
                align-items-md-center
                gap-3 mb-4">

            <div>
                <h2 class="fw-bold mb-1">
                    Student Management
                </h2>

                <p class="text-muted mb-0">
                    Manage all registered students
                </p>
            </div>

            <a href="{{ route('students.create') }}" class="btn btn-primary px-4">
                + Add Student
            </a>

        </div>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">

                <strong>Success!</strong>
                {{ session('success') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert">
                </button>

            </div>
        @endif

        {{-- Student Count --}}
        <div class="card border-0 shadow-sm mb-4">

            <div class="card-body">

                <div class="row">

                    <div class="col-md-4">

                        <div class="d-flex align-items-center">

                            <div class="bg-primary text-white rounded p-3 me-3">
                                👨‍🎓
                            </div>

                            <div>
                                <small class="text-muted">
                                    Total Students
                                </small>

                                <h4 class="fw-bold mb-0">
                                    {{ $students->count() }}
                                </h4>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        {{-- Students Table --}}
        <div class="card border-0 shadow-sm">

            <div class="card-header bg-white border-0 py-3">

                <h5 class="fw-bold mb-0">
                    Student List
                </h5>

            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered table-hover">

                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($students as $student)
                                <tr>

                                    <td>
                                        @if ($student->image)
                                            <img src="{{ asset('uploads/students/' . $student->image) }}"
                                                alt="{{ $student->name }}" width="60" height="60"
                                                class="rounded-circle" style="object-fit:cover;">
                                        @else
                                            <span class="badge bg-secondary">
                                                No Image
                                            </span>
                                        @endif
                                    </td>

                                    <td>{{ $student->id }}</td>

                                    <td>{{ $student->name }}</td>

                                    <td>{{ $student->email }}</td>

                                    <td>{{ $student->phone }}</td>

                                    <td>
                                        

                                         <a href="{{ route('students.show', $student->id) }}"
                                            class="btn btn-warning btn-sm">
                                            More
                                        </a>


                                    </td>

                                </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
