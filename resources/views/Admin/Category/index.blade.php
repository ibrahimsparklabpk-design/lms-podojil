@extends('Admin.layouts.master')

@section('main-content')
<div class="px-24 py-24" style="min-height:80vh; background: #f0f2f5;">

    <div class="p-24 rounded-20 glass-card shadow-lg">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-30">
            <h4 class="fw-bold text-20" style="color: #000;">Category Management</h4>
            <a href="#" class="btn btn-primary-custom px-20 py-10 fw-medium">
                <i class="fas fa-plus me-2"></i> Add Category
            </a>
        </div>

        <!-- Categories Table -->
        <div class="table-responsive">
            <table class="table table-borderless text-black">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Row -->
                    <tr class="table-row-glass">
                        <td>1</td>
                        <td>Finance</td>
                        <td>Short description of the finance category...</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <a href="#" class="btn btn-sm" style="background-color: #1b467f; color: #000;"><i class="fas fa-edit"></i></a>
                            <button class="btn btn-sm" style="background-color: #1b467f; color: #fff;"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr class="table-row-glass">
                        <td>2</td>
                        <td>Marketing</td>
                        <td>Short description of the marketing category...</td>
                        <td><span class="badge bg-secondary">Inactive</span></td>
                        <td>
                            <a href="#" class="btn btn-sm" style="background-color: #1b467f; color: #000;"><i class="fas fa-edit"></i></a>
                            <button class="btn btn-sm" style="background-color: #1b467f; color: #fff;"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

<style>
/* Glass Card */
.glass-card {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);
    border: 1px solid rgba(0, 0, 0, 0.1);
}

/* Add Category Button */
.btn-primary-custom {
    background-color: #1b467f;
    color: #fff;
    border-radius: 50px;
    transition: all 0.3s ease;
}

.btn-primary-custom:hover {
    background-color: #15335d;
    transform: translateY(-2px);
}

/* Table Rows */
.table-row-glass {
    background: rgba(255,255,255,0.8);
    border-radius: 12px;
    transition: all 0.3s ease;
}

.table-row-glass:hover {
    background: rgba(255,255,255,0.9);
}

/* Table Styles */
.table th, .table td {
    vertical-align: middle;
    border: none !important;
}

.table thead th {
    color: #000;
    font-weight: 600;
}

.badge {
    font-size: 12px;
    padding: 6px 10px;
    border-radius: 12px;
}

.btn-sm i {
    pointer-events: none;
}
</style>
@endsection
