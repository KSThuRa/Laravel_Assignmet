<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit Student</title>

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
                <div class="card-header bg-warning py-3">

                    <h4 class="fw-bold mb-0">
                        Edit Student
                    </h4>

                    <small class="text-dark">
                        Update student information
                    </small>

                </div>

                <div class="card-body p-4">

                    {{-- Validation Errors --}}
                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <strong>Please fix the following errors:</strong>

                            <ul class="mb-0 mt-2">

                                @foreach ($errors->all() as $error)

                                    <li>
                                        {{ $error }}
                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    @endif

                    {{-- Update Form --}}
                    <form
                        action="{{ route('students.update', $student) }}"
                        method="POST"
                    >

                        @csrf

                        @method('PUT')

                        {{-- Name --}}
                        <div class="mb-3">

                            <label for="name"
                                   class="form-label fw-semibold">

                                Student Name

                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $student->name) }}"
                                placeholder="Enter student name"
                            >

                            @error('name')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>

                        {{-- Email --}}
                        <div class="mb-3">

                            <label for="email"
                                   class="form-label fw-semibold">

                                Email

                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email', $student->email) }}"
                                placeholder="student@example.com"
                            >

                            @error('email')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>

                        {{-- Phone --}}
                        <div class="mb-4">

                            <label for="phone"
                                   class="form-label fw-semibold">

                                Phone

                            </label>

                            <input
                                type="text"
                                id="phone"
                                name="phone"
                                class="form-control @error('phone') is-invalid @enderror"
                                value="{{ old('phone', $student->phone) }}"
                                placeholder="Enter phone number"
                            >

                            @error('phone')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>

                        {{-- Buttons --}}
                        <div class="d-flex gap-2">

                            <button
                                type="submit"
                                class="btn btn-success"
                            >
                                Update Student
                            </button>

                            <a
                                href="{{ route('students.index') }}"
                                class="btn btn-secondary"
                            >
                                Cancel
                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
