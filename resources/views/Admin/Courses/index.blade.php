@extends('Admin.layouts.master')

@section('main-content')
<div class="px-24 py-24">
    <div class="px-24 py-24 border shadow-sm rounded-10 border-neutral-40"
        style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%);">
        <!-- Header Section -->
        <div class="flex-wrap d-flex align-items-center justify-content-between mb-30">
            <h4 class="fw-semibold text-18" style="color: white;">Courses Management</h4>
            <div class="gap-12 d-flex align-items-center">
                <a href="{{ route('courses.create') }}"
                   class="gap-8 px-16 py-8 btn d-flex align-items-center rounded-pill transition-03"
                   style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.3); color: white; text-decoration:none;">
                    <i class="fas fa-plus text-14"></i>
                    <span class="text-12 fw-medium">Add Course</span>
                </a>
            </div>
        </div>

        <!-- Tabs Section -->
        <div class="gap-8 d-flex align-items-center mb-30">
            <ul class="gap-12 nav nav-pills common-tab" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="gap-8 nav-link rounded-pill fw-medium text-14 flex-center active"
                        style="background: rgba(255,255,255,0.2); color: white; border: 1px solid rgba(255,255,255,0.4); padding: 10px 20px;"
                        id="pills-published-tab" data-bs-toggle="pill" data-bs-target="#pills-published"
                        type="button" role="tab" aria-controls="pills-published" aria-selected="true">
                        <i class="fas fa-check-circle text-14"></i>
                        Published (24)
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="gap-8 nav-link rounded-pill fw-medium text-14 flex-center"
                        style="background: rgba(255,255,255,0.1); color: rgba(255,255,255,0.8); border: 1px solid rgba(255,255,255,0.2); padding: 10px 20px;"
                        id="pills-pending-tab" data-bs-toggle="pill" data-bs-target="#pills-pending"
                        type="button" role="tab" aria-controls="pills-pending" aria-selected="false">
                        <i class="fas fa-clock text-14"></i>
                        Pending (8)
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="gap-8 nav-link rounded-pill fw-medium text-14 d-flex justify-content-center align-items-center"
                        style="background: rgba(255,255,255,0.1); color: rgba(255,255,255,0.8); border: 1px solid rgba(255,255,255,0.2); padding: 10px 20px;"
                        id="pills-draft-tab" data-bs-toggle="pill" data-bs-target="#pills-draft"
                        type="button" role="tab" aria-controls="pills-draft" aria-selected="false">
                        <i class="fas fa-edit text-14"></i>
                        Draft (5)
                    </button>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <!-- Published Courses -->
            <div class="tab-pane fade show active" id="pills-published" role="tabpanel"
                aria-labelledby="pills-published-tab" tabindex="0">
                <div class="row gy-4">
                    <!-- Course 1 -->
                    @foreach ( $courses as $course )
                        <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="p-16 course-card rounded-16 h-100 transition-03"
                            style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                            <div class="mb-16 course-header position-relative">
                                <div class="overflow-hidden course-thumb rounded-12">
                                    @if($course->course_thumbnail && $course->course_thumbnail !="no found image")
                                    <img src="{{ asset('admin/course_thumbnail/' . $course->course_thumbnail) }}"
                                        alt="Financial Accounting" class="w-100 cover-img rounded-12"
                                        style="height: 180px; object-fit: cover;">
                                     @else
                                        {{ "no found image" }}   
                                      @endif  
                                </div>
                                <div class="course-actions position-absolute top-12 right-12">
                                    <div class="dropdown">
                                        <button class="p-0 btn" type="button" data-bs-toggle="dropdown"
                                            style="background: rgba(255,255,255,0.2); border: 1px solid rgba(255,255,255,0.3); width: 32px; height: 32px; border-radius: 8px; margin-left: 12rem; margin-top: 9px;  ">
                                            <i class="fas fa-ellipsis-v text-12" style="color: white;"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ route('courses.edit' , $course->id) }}"><i class="fas fa-edit me-2" ></i>Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View</a></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="course-content">
                                <div class="mb-12 course-category">
                                    <span class="px-10 py-4 text-12 fw-medium rounded-pill d-inline-block"
                                        style="background: rgba(255,255,255,0.1); color: rgba(255,255,255,0.9);">
                                        Finance & Accounting
                                    </span>
                                </div>

                                <h5 class="mb-12">
                                    <a href="course-details.html" class="fw-semibold text-16"
                                        style="color: white; text-decoration: none; line-height: 1.4; display: block;">
                                        {{ $course->course_title }}
                                    </a>
                                </h5>

                                <p class="mb-16 text-14"
                                    style="color: rgba(255,255,255,0.7); line-height: 1.5;">
                                    {{ Str::limit($course->course_description, 10, '...') }}
                                </p>

                                <div class="mb-0 course-stats d-flex align-items-center justify-content-between">
                                    <div class="gap-8 d-flex align-items-center">
                                        <div class="gap-6 d-flex align-items-center">
                                            <i class="fas fa-video text-12" style="color: rgba(255,255,255,0.7);"></i>
                                            <span class="text-12 fw-medium" style="color: rgba(255,255,255,0.8);"> videos
                                                    {{ $course->course_video ? count(explode(',', $course->course_video)) : 0 }}
                                            </span>
                                        </div>
                                        <div class="gap-6 d-flex align-items-center">
                                            <i class="fas fa-clock text-12" style="color: rgba(255,255,255,0.7); margin-left: 59px;"></i>
                                            <span class="text-12 fw-medium" style="color: rgba(255,255,255,0.8); ">{{ $course->course_total_hours }} totel Hours</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Rating & Instructor footer REMOVED -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Pending and Draft tabs would follow same structure with different badges -->
        </div>

        <!-- Pagination -->
        <div class="mt-30">
            <ul class="gap-8 text-center d-flex align-items-center justify-content-center">
                <li class="pagination-item">
                    <a href="#" class="w-40 h-40 d-flex align-items-center justify-content-center rounded-circle transition-03"
                        style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); color: rgba(255,255,255,0.8); text-decoration: none;">
                        <i class="fas fa-chevron-left text-12"></i>
                    </a>
                </li>
                <li class="pagination-item">
                    <a href="#" class="w-40 h-40 d-flex align-items-center justify-content-center rounded-circle transition-03 pagination-active"
                        style="background: rgba(255,255,255,0.2); border: 1px solid rgba(255,255,255,0.3); color: white; text-decoration: none;">
                        1
                    </a>
                </li>
                <li class="pagination-item">
                    <a href="#" class="w-40 h-40 d-flex align-items-center justify-content-center rounded-circle transition-03"
                        style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); color: rgba(255,255,255,0.8); text-decoration: none;">
                        2
                    </a>
                </li>
                <li class="pagination-item">
                    <a href="#" class="w-40 h-40 d-flex align-items-center justify-content-center rounded-circle transition-03"
                        style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); color: rgba(255,255,255,0.8); text-decoration: none;">
                        3
                    </a>
                </li>
                <li class="pagination-item">
                    <a href="#" class="w-40 h-40 d-flex align-items-center justify-content-center rounded-circle transition-03"
                        style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); color: rgba(255,255,255,0.8); text-decoration: none;">
                        <i class="fas fa-ellipsis-h text-12"></i>
                    </a>
                </li>
                <li class="pagination-item">
                    <a href="#" class="w-40 h-40 d-flex align-items-center justify-content-center rounded-circle transition-03"
                        style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); color: rgba(255,255,255,0.8); text-decoration: none;">
                        <i class="fas fa-chevron-right text-12"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
