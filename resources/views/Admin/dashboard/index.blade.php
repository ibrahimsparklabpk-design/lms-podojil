 @extends('Admin.layouts.master')
 
 
 
 @section('main-content')
 <div class="dashboard-content">
                    <div class="px-24 py-24">
                        <h4 class="fw-semibold text-neutral-500 text-20 mb-24">Dashboard Overview</h4>

                        <!-- Statistics Cards Row -->
                        <div class="row gy-4 mb-30">
                            <!-- Total Students Card -->
                            <div class="col-xl-3 col-md-6">
                                <div class="stat-card"
                                    style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%);">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <span class="text-white-70 text-14">Total Students</span>
                                            <h6 class="text-white mb-0 mt-1">88,000+</h6>
                                        </div>
                                        <span class="icon-circle bg-white-20">
                                            <i class="fas fa-users text-white"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="text-success text-12 me-2">↑ 12%</span>
                                        <span class="text-white-50 text-12">vs last month</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Active Courses Card -->
                            <div class="col-xl-3 col-md-6">
                                <div class="stat-card"
                                    style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%);">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <span class="text-white-70 text-14">Active Courses</span>
                                            <h6 class="text-white mb-0 mt-1">100+</h6>
                                        </div>
                                        <span class="icon-circle bg-white-20">
                                            <i class="fas fa-book-open text-white"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="text-success text-12 me-2">↑ 8%</span>
                                        <span class="text-white-50 text-12">vs last month</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Online Classes Today -->
                            <div class="col-xl-3 col-md-6">
                                <div class="stat-card"
                                    style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%);">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <span class="text-white-70 text-14">Online Classes Today</span>
                                            <h6 class="text-white mb-0 mt-1">45</h6>
                                        </div>
                                        <span class="icon-circle bg-white-20">
                                            <i class="fas fa-desktop text-white"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="text-success text-12 me-2">↑ 15%</span>
                                        <span class="text-white-50 text-12">vs yesterday</span>
                                    </div>
                                </div>
                            </div>

                            <!-- On-Campus Classes -->
                            <div class="col-xl-3 col-md-6">
                                <div class="stat-card"
                                    style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%);">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <span class="text-white-70 text-14">On-Campus Classes</span>
                                            <h6 class="text-white mb-0 mt-1">32</h6>
                                        </div>
                                        <span class="icon-circle bg-white-20">
                                            <i class="fas fa-building text-white"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="text-success text-12 me-2">↑ 5%</span>
                                        <span class="text-white-50 text-12">vs last week</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Cards Row -->
                        <div class="row gy-4 mb-30">
                            <!-- New Orders Card -->
                            <div class="col-xl-3 col-md-6">
                                <div class="stat-card"
                                    style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%);">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <span class="text-white-70 text-14">New Orders</span>
                                            <h6 class="text-white mb-0 mt-1">156</h6>
                                        </div>
                                        <span class="icon-circle bg-white-20">
                                            <i class="fas fa-shopping-cart text-white"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="text-success text-12 me-2">↑ 23%</span>
                                        <span class="text-white-50 text-12">pending orders</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Total Courses -->
                            <div class="col-xl-3 col-md-6">
                                <div class="stat-card"
                                    style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%);">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <span class="text-white-70 text-14">Total Courses</span>
                                            <h6 class="text-white mb-0 mt-1">2,000+</h6>
                                        </div>
                                        <span class="icon-circle bg-white-20">
                                            <i class="fas fa-graduation-cap text-white"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="text-success text-12 me-2">↑ 18%</span>
                                        <span class="text-white-50 text-12">this quarter</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Enrolled Courses -->
                            <div class="col-xl-3 col-md-6">
                                <div class="stat-card"
                                    style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%);">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <span class="text-white-70 text-14">Enrolled Courses</span>
                                            <h6 class="text-white mb-0 mt-1">900+</h6>
                                        </div>
                                        <span class="icon-circle bg-white-20">
                                            <i class="fas fa-user-graduate text-white"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="text-success text-12 me-2">↑ 9%</span>
                                        <span class="text-white-50 text-12">active enrollments</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Total Earnings -->
                            <div class="col-xl-3 col-md-6">
                                <div class="stat-card"
                                    style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%);">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <span class="text-white-70 text-14">Total Earnings</span>
                                            <h6 class="text-white mb-0 mt-1">$956,542</h6>
                                        </div>
                                        <span class="icon-circle bg-white-20">
                                            <i class="fas fa-dollar-sign text-white"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="text-success text-12 me-2">↑ 32%</span>
                                        <span class="text-white-50 text-12">this year</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Charts and Tables Section -->
                        <div class="row gy-4">
                            <!-- Chart Section -->
                            <div class="col-xl-8">
                                <div class="chart-container px-20 py-20 rounded-10 shadow-sm border border-neutral-40"
                                    style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%);">
                                    <div class="d-flex align-items-center justify-content-between gpa-24">
                                        <span class="text-16 fw-medium" style="color: white;">Overview
                                            Information</span>
                                        <div class="d-flex align-items-center gap-8">
                                            <span class="fw-medium text-12" style="color: rgba(255,255,255,0.8);">Sort
                                                By :</span>
                                            <select class="form-select text-12 w-auto pe-26 px-16 py-8 fw-normal"
                                                style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.3); color: white;">
                                                <option value="1" style="background: #2d3748; color: white;">Last 2
                                                    years</option>
                                                <option value="2" style="background: #2d3748; color: white;">Last 3
                                                    years</option>
                                                <option value="3" style="background: #2d3748; color: white;">Last 4
                                                    years</option>
                                                <option value="4" style="background: #2d3748; color: white;">Last 1
                                                    years</option>
                                            </select>
                                        </div>
                                    </div>
                                    <span class="mt-20 mb-20 border-bottom-solid d-inline-block w-100"
                                        style="border-color: rgba(255,255,255,0.2);"></span>
                                    <div id="react-chart"
                                        style="min-height: 300px; background: rgba(255,255,255,0.05); border-radius: 8px; padding: 20px;">
                                        <!-- Chart will be rendered here -->
                                        <div class="d-flex align-items-center justify-content-center h-100">
                                            <span class="text-14" style="color: rgba(255,255,255,0.7);">Chart will be
                                                displayed here</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center text-center mt-20">
                                        <ul class="d-flex align-items-center gap-24">
                                            <li class="text-14 fw-normal d-flex align-items-center gap-8"
                                                style="color: rgba(255,255,255,0.8);">
                                                <span class="w-6 h-6 bg-white rounded-circle z-1 flex-shrink-0"></span>
                                                Total Students
                                            </li>
                                            <li class="text-14 fw-normal d-flex align-items-center gap-8"
                                                style="color: rgba(255,255,255,0.8);">
                                                <span
                                                    class="w-6 h-6 bg-warning-400 rounded-circle z-1 flex-shrink-0"></span>
                                                Total Courses
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Donut Chart Section -->
                            <div class="col-xl-4">
                                <div class="px-20 py-20 rounded-10 shadow-sm border border-neutral-40"
                                    style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%);">
                                    <div class="d-flex align-items-center justify-content-between gpa-24">
                                        <span class="text-14 fw-normal"
                                            style="color: rgba(255,255,255,0.8);">Reports</span>
                                        <div class="d-flex align-items-center gap-8">
                                            <span class="fw-normal text-12" style="color: rgba(255,255,255,0.7);">Sort
                                                By :</span>
                                            <div class="custom-select-wrapper">
                                                <select class="custom-select-professional">
                                                    <option value="weekly">Weekly</option>
                                                    <option value="yearly">Yearly</option>
                                                    <option value="monthly">Monthly</option>
                                                    <option value="daily">Daily</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <span class="mt-20 mb-20 border-bottom-solid d-inline-block w-100"
                                        style="border-color: rgba(255,255,255,0.2);"></span>
                                    <div id="donutChart"
                                        style="min-height: 200px; background: rgba(255,255,255,0.05); border-radius: 8px; padding: 20px;">
                                        <!-- Donut Chart will be rendered here -->
                                        <div class="d-flex align-items-center justify-content-center h-100">
                                            <span class="text-14" style="color: rgba(255,255,255,0.7);">Donut Chart will
                                                be displayed here</span>
                                        </div>
                                    </div>
                                    <span class="mt-20 mb-20 border-bottom-solid d-inline-block w-100"
                                        style="border-color: rgba(255,255,255,0.2);"></span>
                                    <div class="d-flex align-items-center flex-wrap gap-20">
                                        <ul>
                                            <li class="text-14 fw-normal d-flex flex-wrap align-items-center gap-12 mb-16"
                                                style="color: rgba(255,255,255,0.8);">
                                                <span class="w-6 h-6 bg-blue-400 rounded-circle z-1"></span>
                                                Total Courses
                                            </li>
                                            <li class="text-14 fw-normal d-flex flex-wrap align-items-center gap-12"
                                                style="color: rgba(255,255,255,0.8);">
                                                <span class="w-6 h-6 bg-purple-400 rounded-circle z-1"></span>
                                                Enrolled Courses
                                            </li>
                                        </ul>
                                        <span class="h-50-px bg-neutral-40 w-1"
                                            style="background: rgba(255,255,255,0.3);"></span>
                                        <ul>
                                            <!-- <li class="text-14 fw-normal d-flex flex-wrap align-items-center gap-12 mb-16" style="color: rgba(255,255,255,0.8);">
                        <span class="w-6 h-6 bg-yellow-500 rounded-circle z-1"></span>
                        Active Courses
                    </li> -->
                                            <li class="text-14 fw-normal d-flex flex-wrap align-items-center gap-12"
                                                style="color: rgba(255,255,255,0.8);">
                                                <span class="w-6 h-6 bg-green-400 rounded-circle z-1"></span>
                                                Completed Courses
                                            </li>
                                        </ul>
                                        <!-- <span class="h-50-px bg-neutral-40 w-1" style="background: rgba(255,255,255,0.3);"></span>
                <ul>
                    <li class="text-14 fw-normal d-flex flex-wrap align-items-center gap-12 mb-16" style="color: rgba(255,255,255,0.8);">
                        <span class="w-6 h-6 bg-blue-600 rounded-circle z-1"></span>
                        Total Students
                    </li>
                    <li class="text-14 fw-normal d-flex flex-wrap align-items-center gap-12" style="color: rgba(255,255,255,0.8);">
                        <span class="w-6 h-6 bg-yellow-400 rounded-circle z-1"></span>
                        Total Earnings
                    </li>
                </ul> -->
                                    </div>
                                    <span class="mt-20 border-bottom-solid d-inline-block w-100"
                                        style="border-color: rgba(255,255,255,0.2);"></span>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Tables Section -->
                        <div class="row gy-4 mt-4">
                            <div class="col-xl-12">
                                <div class="px-24 py-24 bg-white rounded-10 shadow-sm border border-neutral-40">
                                    <div class="d-flex align-items-center justify-content-between mb-24">
                                        <h6 class="mb-0 fw-semibold text-18" style="color: #1F3546;">Popular Instructor
                                        </h6>
                                        <a href="#" class="text-14 fw-medium px-16 py-8 rounded-pill transition-03"
                                            style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%); color: white; text-decoration: none;">
                                            View all
                                        </a>
                                    </div>
                                    <div class="overflow-x-auto">
                                        <table id="example" class="display min-w-max">
                                            <thead>
                                                <tr class="border-bottom flex-wrap"
                                                    style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%);">
                                                    <th class="text-14 fw-semibold py-16 px-20 text-white">Instructor
                                                    </th>
                                                    <th class="text-14 fw-semibold py-16 px-20 text-white">Courses</th>
                                                    <th class="text-14 fw-semibold py-16 px-20 text-white">Students</th>
                                                    <th class="text-14 fw-semibold py-16 px-20 text-white">Reviews</th>
                                                </tr>
                                            </thead>
                                            <tbody style="background-color: #f8fafc;">
                                                <!-- Record 1 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%);">
                                                                SJ
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">Sarah Johnson</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">Web Development</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        15
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        3,245
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="fw-normal text-14 d-flex align-items-center gap-8"
                                                            style="color: #1F3546;">
                                                            <div class="d-flex align-items-center gap-4">
                                                                <span class="text-16 text-warning-600">
                                                                    <i class="fas fa-star"></i>
                                                                </span>
                                                                <span class="fw-semibold">4.9</span>
                                                            </div>
                                                            <span class="text-12" style="color: #6b7280;">(2.1K
                                                                Reviews)</span>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Record 2 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);">
                                                                MC
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">Michael Chen</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">Data Science</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        12
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        2,876
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="fw-normal text-14 d-flex align-items-center gap-8"
                                                            style="color: #1F3546;">
                                                            <div class="d-flex align-items-center gap-4">
                                                                <span class="text-16 text-warning-600">
                                                                    <i class="fas fa-star"></i>
                                                                </span>
                                                                <span class="fw-semibold">4.8</span>
                                                            </div>
                                                            <span class="text-12" style="color: #6b7280;">(1.8K
                                                                Reviews)</span>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Record 3 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                                                ER
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">Emily Rodriguez</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">UI/UX Design</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        18
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        4,123
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="fw-normal text-14 d-flex align-items-center gap-8"
                                                            style="color: #1F3546;">
                                                            <div class="d-flex align-items-center gap-4">
                                                                <span class="text-16 text-warning-600">
                                                                    <i class="fas fa-star"></i>
                                                                </span>
                                                                <span class="fw-semibold">4.7</span>
                                                            </div>
                                                            <span class="text-12" style="color: #6b7280;">(2.5K
                                                                Reviews)</span>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Record 4 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #7c3aed 0%, #6d28d9 100%);">
                                                                DW
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">David Wilson</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">Mobile Development</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        9
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        1,956
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="fw-normal text-14 d-flex align-items-center gap-8"
                                                            style="color: #1F3546;">
                                                            <div class="d-flex align-items-center gap-4">
                                                                <span class="text-16 text-warning-600">
                                                                    <i class="fas fa-star"></i>
                                                                </span>
                                                                <span class="fw-semibold">4.9</span>
                                                            </div>
                                                            <span class="text-12" style="color: #6b7280;">(1.2K
                                                                Reviews)</span>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Record 5 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);">
                                                                LT
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">Lisa Thompson</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">Digital Marketing</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        14
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        3,421
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="fw-normal text-14 d-flex align-items-center gap-8"
                                                            style="color: #1F3546;">
                                                            <div class="d-flex align-items-center gap-4">
                                                                <span class="text-16 text-warning-600">
                                                                    <i class="fas fa-star"></i>
                                                                </span>
                                                                <span class="fw-semibold">4.6</span>
                                                            </div>
                                                            <span class="text-12" style="color: #6b7280;">(1.9K
                                                                Reviews)</span>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Record 6 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #0891b2 0%, #0e7490 100%);">
                                                                RM
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">Robert Martinez</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">Cloud Computing</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        11
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        2,345
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="fw-normal text-14 d-flex align-items-center gap-8"
                                                            style="color: #1F3546;">
                                                            <div class="d-flex align-items-center gap-4">
                                                                <span class="text-16 text-warning-600">
                                                                    <i class="fas fa-star"></i>
                                                                </span>
                                                                <span class="fw-semibold">4.8</span>
                                                            </div>
                                                            <span class="text-12" style="color: #6b7280;">(1.4K
                                                                Reviews)</span>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Record 7 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #4b5563 0%, #374151 100%);">
                                                                JL
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">Jennifer Lee</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">Machine Learning</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        16
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        3,789
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="fw-normal text-14 d-flex align-items-center gap-8"
                                                            style="color: #1F3546;">
                                                            <div class="d-flex align-items-center gap-4">
                                                                <span class="text-16 text-warning-600">
                                                                    <i class="fas fa-star"></i>
                                                                </span>
                                                                <span class="fw-semibold">4.7</span>
                                                            </div>
                                                            <span class="text-12" style="color: #6b7280;">(2.3K
                                                                Reviews)</span>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Record 8 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%);">
                                                                KB
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">Kevin Brown</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">Cyber Security</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        8
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        1,678
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="fw-normal text-14 d-flex align-items-center gap-8"
                                                            style="color: #1F3546;">
                                                            <div class="d-flex align-items-center gap-4">
                                                                <span class="text-16 text-warning-600">
                                                                    <i class="fas fa-star"></i>
                                                                </span>
                                                                <span class="fw-semibold">4.9</span>
                                                            </div>
                                                            <span class="text-12" style="color: #6b7280;">(956
                                                                Reviews)</span>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Record 9 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #0369a1 0%, #0c4a6e 100%);">
                                                                AG
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">Amanda Garcia</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">Graphic Design</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        13
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        2,987
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="fw-normal text-14 d-flex align-items-center gap-8"
                                                            style="color: #1F3546;">
                                                            <div class="d-flex align-items-center gap-4">
                                                                <span class="text-16 text-warning-600">
                                                                    <i class="fas fa-star"></i>
                                                                </span>
                                                                <span class="fw-semibold">4.8</span>
                                                            </div>
                                                            <span class="text-12" style="color: #6b7280;">(1.7K
                                                                Reviews)</span>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Record 10 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #d97706 0%, #b45309 100%);">
                                                                DT
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">Daniel Taylor</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">Business Analytics</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        10
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        2,134
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="fw-normal text-14 d-flex align-items-center gap-8"
                                                            style="color: #1F3546;">
                                                            <div class="d-flex align-items-center gap-4">
                                                                <span class="text-16 text-warning-600">
                                                                    <i class="fas fa-star"></i>
                                                                </span>
                                                                <span class="fw-semibold">4.6</span>
                                                            </div>
                                                            <span class="text-12" style="color: #6b7280;">(1.3K
                                                                Reviews)</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row gy-4 mt-4">
                            <div class="col-xl-12">
                                <div class="px-24 py-24 bg-white rounded-10 shadow-sm border border-neutral-40">
                                    <div class="d-flex align-items-center justify-content-between mb-24">
                                        <h6 class="mb-0 fw-semibold text-18" style="color: #1F3546;">Recent Courses</h6>
                                        <a href="#" class="text-14 fw-medium px-16 py-8 rounded-pill transition-03"
                                            style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%); color: white; text-decoration: none;">
                                            View all
                                        </a>
                                    </div>
                                    <div class="overflow-x-auto">
                                        <table id="example" class="display min-w-max" style="width: 100%;">
                                            <thead>
                                                <tr class="border-bottom flex-wrap"
                                                    style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%);">
                                                    <th class="text-14 fw-semibold py-16 px-20 text-white">Course Code
                                                    </th>
                                                    <th class="text-14 fw-semibold py-16 px-20 text-white">Course Title
                                                        | Hours</th>
                                                    <th class="text-14 fw-semibold py-16 px-20 text-white">Total Lesson
                                                    </th>
                                                    <th class="text-14 fw-semibold py-16 px-20 text-white">Students</th>
                                                    <th class="text-14 fw-semibold py-16 px-20 text-white">Student Email
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody style="background-color: #f8fafc;">
                                                <!-- Course 1 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        WD-101
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-8 d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%);">
                                                                WD
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">Web Development
                                                                    Bootcamp</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">42 Hours</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        28
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        3,245
                                                    </td>
                                                    <td class="text-14 fw-normal py-22 px-20 shadow-none"
                                                        style="color: #6b7280;">
                                                        john.doe@email.com
                                                    </td>
                                                </tr>

                                                <!-- Course 2 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        DS-202
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-8 d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);">
                                                                DS
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">Data Science
                                                                    Fundamentals</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">36 Hours</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        24
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        2,876
                                                    </td>
                                                    <td class="text-14 fw-normal py-22 px-20 shadow-none"
                                                        style="color: #6b7280;">
                                                        sarah.wilson@email.com
                                                    </td>
                                                </tr>

                                                <!-- Course 3 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        UX-303
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-8 d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                                                                UX
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">UI/UX Design
                                                                    Masterclass</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">30 Hours</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        22
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        4,123
                                                    </td>
                                                    <td class="text-14 fw-normal py-22 px-20 shadow-none"
                                                        style="color: #6b7280;">
                                                        mike.chen@email.com
                                                    </td>
                                                </tr>

                                                <!-- Course 4 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        MD-404
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-8 d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #7c3aed 0%, #6d28d9 100%);">
                                                                MD
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">Mobile App
                                                                    Development</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">48 Hours</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        32
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        1,956
                                                    </td>
                                                    <td class="text-14 fw-normal py-22 px-20 shadow-none"
                                                        style="color: #6b7280;">
                                                        emma.rodriguez@email.com
                                                    </td>
                                                </tr>

                                                <!-- Course 5 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        DM-505
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-8 d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);">
                                                                DM
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">Digital Marketing
                                                                    Strategy</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">28 Hours</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        20
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        3,421
                                                    </td>
                                                    <td class="text-14 fw-normal py-22 px-20 shadow-none"
                                                        style="color: #6b7280;">
                                                        david.wilson@email.com
                                                    </td>
                                                </tr>

                                                <!-- Course 6 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        CC-606
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-8 d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #0891b2 0%, #0e7490 100%);">
                                                                CC
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">Cloud Computing
                                                                    Basics</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">35 Hours</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        26
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        2,345
                                                    </td>
                                                    <td class="text-14 fw-normal py-22 px-20 shadow-none"
                                                        style="color: #6b7280;">
                                                        lisa.thompson@email.com
                                                    </td>
                                                </tr>

                                                <!-- Course 7 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        ML-707
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-8 d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #4b5563 0%, #374151 100%);">
                                                                ML
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">Machine Learning
                                                                    Fundamentals</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">40 Hours</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        30
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        3,789
                                                    </td>
                                                    <td class="text-14 fw-normal py-22 px-20 shadow-none"
                                                        style="color: #6b7280;">
                                                        robert.martinez@email.com
                                                    </td>
                                                </tr>

                                                <!-- Course 8 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        CS-808
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-8 d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%);">
                                                                CS
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">Cyber Security
                                                                    Essentials</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">38 Hours</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        25
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        1,678
                                                    </td>
                                                    <td class="text-14 fw-normal py-22 px-20 shadow-none"
                                                        style="color: #6b7280;">
                                                        jennifer.lee@email.com
                                                    </td>
                                                </tr>

                                                <!-- Course 9 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        GD-909
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-8 d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #0369a1 0%, #0c4a6e 100%);">
                                                                GD
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">Graphic Design
                                                                    Principles</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">32 Hours</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        24
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        2,987
                                                    </td>
                                                    <td class="text-14 fw-normal py-22 px-20 shadow-none"
                                                        style="color: #6b7280;">
                                                        kevin.brown@email.com
                                                    </td>
                                                </tr>

                                                <!-- Course 10 -->
                                                <tr class="hover-bg-neutral-20 border-bottom transition-03"
                                                    style="background-color: white;">
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        BA-010
                                                    </td>
                                                    <td class="py-22 px-20 shadow-none line-height-1">
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="w-40 h-40 rounded-8 d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                                                style="background: linear-gradient(135deg, #d97706 0%, #b45309 100%);">
                                                                BA
                                                            </div>
                                                            <div>
                                                                <span class="fw-semibold text-14 d-block"
                                                                    style="color: #1F3546;">Business Analytics
                                                                    Course</span>
                                                                <span class="fw-normal text-12 d-block mt-1"
                                                                    style="color: #6b7280;">34 Hours</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                                        style="color: #1F3546;">
                                                        28
                                                    </td>
                                                    <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                                        style="color: #1F3546;">
                                                        2,134
                                                    </td>
                                                    <td class="text-14 fw-normal py-22 px-20 shadow-none"
                                                        style="color: #6b7280;">
                                                        amanda.garcia@email.com
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 @endsection