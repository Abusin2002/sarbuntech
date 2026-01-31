@extends('admin.layouts.app')

@section('content')
<div class="container-fluid p-4" id="pageContent">
    <!-- Page Title -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">User Emails</h1>
        <div class="d-flex">
            <button class="btn btn-primary me-2">
                <i class="bi bi-plus-circle me-1"></i> Add New
            </button>
            <button class="btn btn-outline-secondary">
                <i class="bi bi-calendar me-1"></i> This Month
            </button>
        </div>
    </div>

    <!-- Emails Table -->
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">Emails List</h5>
            <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>john.smith@example.com</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">View</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>emma.johnson@example.com</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">View</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>michael.brown@example.com</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">View</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>sarah.davis@example.com</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">View</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>robert.wilson@example.com</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">View</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-5 pt-3 border-top">
        <div class="row">
            <div class="col-md-6">
                <p class="text-muted">&copy; 2026 AdminPro. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-end">
                <p class="text-muted">Dashboard v1.0.0</p>
            </div>
        </div>
    </footer>
</div>
@endsection
