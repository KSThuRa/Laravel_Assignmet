<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Instructor Details</title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
        }

        .page-header {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            border-radius: 18px;
            padding: 30px;
            margin-bottom: 30px;
        }

        .profile-card {
            border: none;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }

        .profile-header {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            padding: 35px;
            color: white;
            text-align: center;
        }

        .avatar {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: white;
            color: #0d6efd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            font-weight: bold;
            margin: 0 auto 15px;
        }

        .info-item {
            padding: 20px;
            border-bottom: 1px solid #eee;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            font-size: 13px;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: .5px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .info-value {
            font-size: 17px;
            font-weight: 500;
            color: #212529;
        }

        .id-badge {
            background: #e7f1ff;
            color: #0d6efd;
            border-radius: 20px;
            padding: 6px 14px;
            font-size: 14px;
            font-weight: 600;
        }

        .btn {
            border-radius: 9px;
            padding: 10px 20px;
        }
    </style>
</head>

<body>

<div class="container py-5">

    <!-- Page Header -->
    <div class="page-header">

        <div class="d-flex flex-column flex-md-row
                    justify-content-between
                    align-items-md-center">

            <div>
                <h1 class="fw-bold mb-2">
                    Instructor Details
                </h1>

                <p class="mb-0 opacity-75">
                    View complete instructor information
                </p>
            </div>

            <div class="mt-3 mt-md-0">

                <a href="{{ route('instructors.index') }}"
                   class="btn btn-light">

                    ← Back to Instructors

                </a>

            </div>

        </div>

    </div>


    <!-- Instructor Card -->
    <div class="row justify-content-center">

        <div class="col-lg-8 col-xl-7">

            <div class="card profile-card">

                <!-- Profile Header -->
                <div class="profile-header">

                    <div class="avatar">
                        {{ strtoupper(substr($instructor->name, 0, 1)) }}
                    </div>

                    <h2 class="fw-bold mb-1">
                        {{ $instructor->name }}
                    </h2>

                    <span class="badge bg-light text-primary">
                        Instructor
                    </span>

                </div>


                <!-- Instructor Information -->
                <div class="card-body p-0">

                    <!-- ID -->
                    <div class="info-item">

                        <div class="info-label">
                            Instructor ID
                        </div>

                        <div class="info-value">
                            <span class="id-badge">
                                #{{ $instructor->id }}
                            </span>
                        </div>

                    </div>


                    <!-- Name -->
                    <div class="info-item">

                        <div class="info-label">
                            Full Name
                        </div>

                        <div class="info-value">
                            {{ $instructor->name }}
                        </div>

                    </div>


                    <!-- Email -->
                    <div class="info-item">

                        <div class="info-label">
                            Email Address
                        </div>

                        <div class="info-value">

                            <a
                                href="mailto:{{ $instructor->email }}"
                                class="text-decoration-none">

                                {{ $instructor->email }}

                            </a>

                        </div>

                    </div>


                    <!-- Phone -->
                    <div class="info-item">

                        <div class="info-label">
                            Phone Number
                        </div>

                        <div class="info-value">

                            <a
                                href="tel:{{ $instructor->phone }}"
                                class="text-decoration-none">

                                {{ $instructor->phone }}

                            </a>

                        </div>

                    </div>

                </div>


                <!-- Card Footer -->
                <div class="card-footer bg-white border-0 p-4">

                    <div class="d-flex flex-column flex-sm-row
                                justify-content-between gap-2">

                        <a
                            href="{{ route('instructors.index') }}"
                            class="btn btn-outline-secondary">

                            ← Back

                        </a>


                        <a
                            href="{{ route('instructors.edit', $instructor->id) }}"
                            class="btn btn-primary">

                            ✏️ Edit Instructor

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- Bootstrap JS -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>
