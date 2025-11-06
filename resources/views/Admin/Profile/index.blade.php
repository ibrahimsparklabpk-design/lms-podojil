@extends('Admin.layouts.master')

@section('main-content')

<div class="px-24 py-24">
    <div class="rounded-10 px-24 py-24 shadow-sm border border-neutral-40"
        style="background: linear-gradient(135deg, #1F4E8C 0%, #163B6C 100%);">
        <!-- Header Section -->
        <div class="d-flex align-items-center justify-content-between mb-30">
            <span class="fw-semibold text-18" style="color: white;">My Profile</span>
            <div class="d-flex align-items-center gap-12">
                <button
                    class="btn d-flex align-items-center gap-8 px-16 py-8 rounded-pill transition-03"
                    style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.3); color: white;">
                    <i class="fas fa-download text-14"></i>
                    <span class="text-12 fw-medium">Download</span>
                </button>
                <button
                    class="btn d-flex align-items-center gap-8 px-16 py-8 rounded-pill transition-03"
                    style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.3); color: white;">
                    <i class="fas fa-print text-14"></i>
                    <span class="text-12 fw-medium">Print</span>
                </button>
                <button
                    class="btn d-flex align-items-center gap-8 px-16 py-8 rounded-pill transition-03"
                    style="background: linear-gradient(135deg, #1F3546 0%, #20282D 100%); color: white; border: none;">
                    <i class="fas fa-edit text-14"></i>
                    <span class="text-12 fw-medium">Edit Profile</span>
                </button>
            </div>
        </div>

        <!-- Main Profile Content -->
        <div class="row gx-30 gy-20">
            <!-- Left Column -->
            <div class="col-lg-6">
                <!-- Profile Header Card -->
                <div class="profile-header-card mb-25">
                    <div class="d-flex align-items-center gap-15">
                        <div class="avatar-container">
                            <div class="w-100 h-100 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-lg"
                                style="background: linear-gradient(135deg, #E63946 0%, #C62828 100%); font-size: 28px; min-width: 100px; min-height: 100px;">
                                JP
                            </div>
                        </div>
                        <div class="profile-info flex-grow-1">
                            <h4 class="fw-semibold mb-5" style="color: white; font-size: 18px;">John Paul</h4>
                            <p class="mb-0" style="color: rgba(255,255,255,0.7); font-size: 13px;">Super
                                Admin</p>
                        </div>
                        <div class="admin-badge">
                            <span class="d-flex align-items-center gap-6 px-12 py-6 rounded-pill"
                                style="background: rgba(16, 185, 129, 0.2); border: 1px solid rgba(16, 185, 129, 0.4);">
                                <i class="fas fa-shield-alt"
                                    style="color: #10B981; font-size: 12px;"></i>
                                <span class="fw-semibold" style="color: white; font-size: 12px;">Admin
                                    Access</span>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Personal Information -->
                <div class="info-section">
                    <div class="info-item d-flex align-items-center justify-content-between py-15">
                        <div class="d-flex align-items-center gap-10">
                            <i class="fas fa-user"
                                style="color: rgba(255,255,255,0.7); font-size: 14px; width: 20px;"></i>
                            <span class="fw-medium"
                                style="color: rgba(255,255,255,0.9); font-size: 14px;">Full Name</span>
                        </div>
                        <span class="fw-normal"
                            style="color: rgba(255,255,255,0.8); font-size: 14px;">John Paul</span>
                    </div>

                    <div class="info-item d-flex align-items-center justify-content-between py-15">
                        <div class="d-flex align-items-center gap-10">
                            <i class="fas fa-at"
                                style="color: rgba(255,255,255,0.7); font-size: 14px; width: 20px;"></i>
                            <span class="fw-medium"
                                style="color: rgba(255,255,255,0.9); font-size: 14px;">Username</span>
                        </div>
                        <span class="fw-normal"
                            style="color: rgba(255,255,255,0.8); font-size: 14px;">john_paul</span>
                    </div>

                    <div class="info-item d-flex align-items-center justify-content-between py-15">
                        <div class="d-flex align-items-center gap-10">
                            <i class="fas fa-envelope"
                                style="color: rgba(255,255,255,0.7); font-size: 14px; width: 20px;"></i>
                            <span class="fw-medium"
                                style="color: rgba(255,255,255,0.9); font-size: 14px;">Email</span>
                        </div>
                        <span class="fw-normal"
                            style="color: rgba(255,255,255,0.8); font-size: 14px;">johnpaul@iashep.com</span>
                    </div>

                    <div class="info-item d-flex align-items-center justify-content-between py-15">
                        <div class="d-flex align-items-center gap-10">
                            <i class="fas fa-phone"
                                style="color: rgba(255,255,255,0.7); font-size: 14px; width: 20px;"></i>
                            <span class="fw-medium"
                                style="color: rgba(255,255,255,0.9); font-size: 14px;">Phone
                                Number</span>
                        </div>
                        <span class="fw-normal"
                            style="color: rgba(255,255,255,0.8); font-size: 14px;">+92 312
                            4567890</span>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6">
                <!-- Admin Information -->
                <div class="info-section">
                    <div class="info-item d-flex align-items-center justify-content-between py-15">
                        <div class="d-flex align-items-center gap-10">
                            <i class="fas fa-user-tag"
                                style="color: rgba(255,255,255,0.7); font-size: 14px; width: 20px;"></i>
                            <span class="fw-medium"
                                style="color: rgba(255,255,255,0.9); font-size: 14px;">Role</span>
                        </div>
                        <span class="fw-normal"
                            style="color: rgba(255,255,255,0.8); font-size: 14px;">Super Admin</span>
                    </div>

                    <div class="info-item d-flex align-items-center justify-content-between py-15">
                        <div class="d-flex align-items-center gap-10">
                            <i class="fas fa-calendar"
                                style="color: rgba(255,255,255,0.7); font-size: 14px; width: 20px;"></i>
                            <span class="fw-medium"
                                style="color: rgba(255,255,255,0.9); font-size: 14px;">Registration
                                Date</span>
                        </div>
                        <span class="fw-normal"
                            style="color: rgba(255,255,255,0.8); font-size: 14px;">January 15, 2023
                            10:30 AM</span>
                    </div>

                    <div class="info-item d-flex align-items-center justify-content-between py-15">
                        <div class="d-flex align-items-center gap-10">
                            <i class="fas fa-id-card"
                                style="color: rgba(255,255,255,0.7); font-size: 14px; width: 20px;"></i>
                            <span class="fw-medium"
                                style="color: rgba(255,255,255,0.9); font-size: 14px;">Employee
                                ID</span>
                        </div>
                        <span class="fw-normal"
                            style="color: rgba(255,255,255,0.8); font-size: 14px;">ADM-2023-001</span>
                    </div>
                </div>

                <!-- Stats Section -->
                <div class="stats-grid mt-25">
                    <div class="row gx-15 gy-15">
                        <div class="col-6">
                            <div class="stat-card text-center py-15 rounded-8"
                                style="background: rgba(255,255,255,0.05);">
                                <div class="fw-semibold mb-5" style="color: white; font-size: 18px;">156
                                </div>
                                <div class="fw-normal"
                                    style="color: rgba(255,255,255,0.7); font-size: 12px;">Total Users
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card text-center py-15 rounded-8"
                                style="background: rgba(255,255,255,0.05);">
                                <div class="fw-semibold mb-5" style="color: white; font-size: 18px;">42
                                </div>
                                <div class="fw-normal"
                                    style="color: rgba(255,255,255,0.7); font-size: 12px;">Courses</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card text-center py-15 rounded-8"
                                style="background: rgba(255,255,255,0.05);">
                                <div class="fw-semibold mb-5" style="color: white; font-size: 18px;">98%
                                </div>
                                <div class="fw-normal"
                                    style="color: rgba(255,255,255,0.7); font-size: 12px;">System Uptime
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card text-center py-15 rounded-8"
                                style="background: rgba(255,255,255,0.05);">
                                <div class="fw-semibold mb-5" style="color: white; font-size: 18px;">2
                                </div>
                                <div class="fw-normal"
                                    style="color: rgba(255,255,255,0.7); font-size: 12px;">Years</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
