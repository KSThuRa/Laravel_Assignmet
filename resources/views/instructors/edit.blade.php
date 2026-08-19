<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Instructor</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fb;
        }

        .page-header {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            border-radius: 15px;
            padding: 25px;
        }

        .form-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
        }

        .btn {
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="container py-5">

    <!-- Header -->
    <div class="page-header mb-4">

        <h1 class="mb-1">Edit Instructor</h1>

        <p class="mb-0 opacity-75">
            Update instructor information
        </p>

    </div>


    <!-- Form Card -->
    <div class="card form-card">

        <div class="card-body p-4 p-md-5">

            <!-- Validation Errors -->
            @if ($errors->any())

                <div class="alert alert-danger alert-dismissible fade show"
                     role="alert">

                    <h6 class="alert-heading">
                        Please fix the following errors:
                    </h6>

                    <ul class="mb-0">

                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert">
                    </button>

                </div>

            @endif


            <!-- Edit Form -->
            <form
                action="{{ route('instructors.update', $instructor->id) }}"
                method="POST">

                @csrf
                @method('PUT')


                <!-- Name -->
                <div class="mb-4">

                    <label for="name"
                           class="form-label fw-semibold">
                        Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name', $instructor->name) }}"
                        class="form-control @error('name') is-invalid @enderror"
                        placeholder="Enter instructor name"
                    >

                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- Email -->
                <div class="mb-4">

                    <label for="email"
                           class="form-label fw-semibold">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email', $instructor->email) }}"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="example@gmail.com"
                    >

                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- Phone -->
                <div class="mb-4">

                    <label for="phone"
                           class="form-label fw-semibold">
                        Phone
                    </label>

                    <input
                        type="text"
                        id="phone"
                        name="phone"
                        value="{{ old('phone', $instructor->phone) }}"
                        class="form-control @error('phone') is-invalid @enderror"
                        placeholder="Enter phone number"
                    >

                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- Buttons -->
                <div class="d-flex gap-2">

                    <button type="submit"
                            class="btn btn-primary px-4">

                        Update Instructor

                    </button>

                    <a href="{{ route('instructors.index') }}"
                       class="btn btn-outline-secondary px-4">

                        Back

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>

</html>
