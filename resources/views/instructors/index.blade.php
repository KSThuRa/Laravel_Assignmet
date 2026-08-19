<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Instructors</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background-color: #f5f7fb;
        }

        .page-header {
            background: #fff;
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 24px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .table-card {
            background: #fff;
            border: 0;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background-color: #f8f9fa;
            color: #6c757d;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .4px;
            padding: 16px;
            border-bottom: 1px solid #e9ecef;
        }

        .table tbody td {
            padding: 16px;
            vertical-align: middle;
        }

        .table tbody tr {
            transition: .2s ease;
        }

        .table tbody tr:hover {
            background-color: #f8faff;
        }

        .instructor-avatar {
            width: 52px;
            height: 52px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .12);
        }

        .no-image {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e9ecef;
            color: #6c757d;
            font-size: 20px;
        }

        .instructor-name {
            font-weight: 600;
            color: #212529;
        }

        .instructor-id {
            color: #6c757d;
            font-size: 14px;
        }

        .email-text {
            color: #495057;
        }

        .phone-text {
            color: #495057;
        }

        .action-btn {
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
        }

        .search-box {
            max-width: 300px;
        }

        .empty-state {
            padding: 60px 20px;
            text-align: center;
        }

        .empty-state i {
            font-size: 48px;
            color: #adb5bd;
        }
    </style>
</head>

<body>

    <div class="container py-5">

        {{-- Page Header --}}
        <div class="page-header">

            <div class="row align-items-center">

                <div class="col-md-6">

                    <div class="d-flex align-items-center gap-3">

                        <div class="bg-primary text-white rounded-3 p-3">
                            <i class="bi bi-person-workspace fs-4"></i>
                        </div>

                        <div>
                            <h3 class="mb-1 fw-bold">
                                Instructors
                            </h3>

                            <p class="text-muted mb-0">
                                Manage your instructors and their information.
                            </p>
                        </div>

                    </div>

                </div>

                <div class="col-md-6 mt-3 mt-md-0">

                    <div class="d-flex justify-content-md-end gap-2">

                        <div class="input-group search-box">

                            <span class="input-group-text bg-white">
                                <i class="bi bi-search"></i>
                            </span>

                            <input type="text" id="searchInstructor" class="form-control"
                                placeholder="Search instructor...">

                        </div>

                        <a href="{{ route('instructors.create') }}"
                            class="btn btn-primary d-flex align-items-center gap-2">

                            <i class="bi bi-plus-lg"></i>

                            Add Instructor

                        </a>

                    </div>

                </div>

            </div>

        </div>


        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">

                <i class="bi bi-check-circle-fill me-2"></i>

                {{ session('success') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert">
                </button>

            </div>
        @endif


        {{-- Instructor Table --}}
        <div class="table-card">

            <div class="table-responsive">

                <table class="table align-middle" id="instructorTable">

                    <thead>

                        <tr>

                            <th>Instructor</th>

                            <th>ID</th>

                            <th>Email</th>

                            <th>Phone</th>

                            <th class="text-center">
                                Action
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse($instructors as $instructor)
                            <tr>

                                {{-- Instructor --}}
                                <td>

                                    <div class="d-flex align-items-center gap-3">

                                        @if ($instructor->image)
                                            <img src="{{ asset('uploads/instructors/' . $instructor->image) }}"
                                                alt="{{ $instructor->name }}" class="instructor-avatar">
                                        @else
                                            <div class="no-image">

                                                <i class="bi bi-person"></i>

                                            </div>
                                        @endif


                                        <div>

                                            <div class="instructor-name">
                                                {{ $instructor->name }}
                                            </div>

                                            <small class="text-muted">
                                                Instructor
                                            </small>

                                        </div>

                                    </div>

                                </td>


                                {{-- ID --}}
                                <td>

                                    <span class="badge bg-light text-dark border">
                                        #{{ $instructor->id }}
                                    </span>

                                </td>


                                {{-- Email --}}
                                <td>

                                    <span class="email-text">

                                        <i class="bi bi-envelope me-1 text-primary"></i>

                                        {{ $instructor->email }}

                                    </span>

                                </td>


                                {{-- Phone --}}
                                <td>

                                    <span class="phone-text">

                                        <i class="bi bi-telephone me-1 text-success"></i>

                                        {{ $instructor->phone }}

                                    </span>

                                </td>


                                {{-- Actions --}}
                                <td class="text-center">

                                    <a href="{{ route('instructors.edit', $instructor->id) }}"
                                        class="btn btn-outline-warning action-btn me-1" title="Edit">

                                        <i class="bi bi-pencil"></i>

                                    </a>


                                    <a href="{{ route('instructors.show', $instructor->id) }}"
                                         class="btn btn-outline-primary action-btn" title="View">

                                        <i class="bi bi-eye"></i>

                                    </a>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="5">

                                    <div class="empty-state">

                                        <i class="bi bi-people"></i>

                                        <h5 class="mt-3">
                                            No Instructors Found
                                        </h5>

                                        <p class="text-muted">
                                            Start by adding your first instructor.
                                        </p>

                                        <a href="{{ route('instructors.create') }}" class="btn btn-primary">

                                            <i class="bi bi-plus-lg me-1"></i>

                                            Add Instructor

                                        </a>

                                    </div>

                                </td>

                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        // Search instructors
        document.getElementById('searchInstructor')
            .addEventListener('keyup', function() {

                const search = this.value.toLowerCase();

                const rows = document.querySelectorAll(
                    '#instructorTable tbody tr'
                );

                rows.forEach(row => {

                    const text = row.textContent.toLowerCase();

                    row.style.display =
                        text.includes(search) ? '' : 'none';

                });

            });
    </script>

</body>

</html>
