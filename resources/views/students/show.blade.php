<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Student Details</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body class="bg-light">

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card border-0 shadow-sm">

                {{-- Header --}}
                <div class="card-header bg-primary text-white py-3">

                    <h4 class="fw-bold mb-0">
                        Student Details
                    </h4>

                    <small>
                        View student information
                    </small>

                </div>

                <div class="card-body p-4">

                    {{-- Student Profile --}}
                    <div class="text-center mb-4">

                        <div
                            class="bg-primary text-white rounded-circle
                                   d-inline-flex align-items-center
                                   justify-content-center"
                            style="width: 80px; height: 80px;"
                        >
                            <span class="fs-2 fw-bold">
                                {{ strtoupper(substr($student->name, 0, 1)) }}
                            </span>
                        </div>

                        <h4 class="fw-bold mt-3 mb-1">
                            {{ $student->name }}
                        </h4>

                        <span class="badge bg-secondary">
                            Student #{{ $student->id }}
                        </span>

                    </div>

                    <hr>

                    {{-- ID --}}
                    <div class="row py-3 border-bottom">

                        <div class="col-sm-4 text-muted fw-semibold">
                            ID
                        </div>

                        <div class="col-sm-8">
                            #{{ $student->id }}
                        </div>

                    </div>

                    {{-- Name --}}
                    <div class="row py-3 border-bottom">

                        <div class="col-sm-4 text-muted fw-semibold">
                            Name
                        </div>

                        <div class="col-sm-8 fw-semibold">
                            {{ $student->name }}
                        </div>

                    </div>

                    {{-- Email --}}
                    <div class="row py-3 border-bottom">

                        <div class="col-sm-4 text-muted fw-semibold">
                            Email
                        </div>

                        <div class="col-sm-8">

                            <a
                                href="mailto:{{ $student->email }}"
                                class="text-decoration-none"
                            >
                                {{ $student->email }}
                            </a>

                        </div>

                    </div>

                    {{-- Phone --}}
                    <div class="row py-3 mb-4">

                        <div class="col-sm-4 text-muted fw-semibold">
                            Phone
                        </div>

                        <div class="col-sm-8">

                            <a
                                href="tel:{{ $student->phone }}"
                                class="text-decoration-none"
                            >
                                {{ $student->phone }}
                            </a>

                        </div>

                    </div>

                    {{-- Actions --}}
                    <div class="d-flex gap-2">

                        <a
                            href="{{ route('students.index') }}"
                            class="btn btn-secondary"
                        >
                            ← Back
                        </a>

                        <a
                            href="{{ route('students.edit', $student) }}"
                            class="btn btn-warning"
                        >
                            Edit Student
                        </a>

                        <form
                            action="{{ route('students.destroy', $student) }}"
                            method="POST"
                            class="d-inline"
                        >

                            @csrf

                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-danger"
                                onclick="return confirm(
                                    'Are you sure you want to delete this student?'
                                )"
                            >
                                Delete
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
