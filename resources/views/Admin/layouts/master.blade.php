<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>EdullAll - LMS, Tutors, Education & Online Course Html Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}admin/assets/images/logo/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/bootstrap.min.css">
    <!-- select2 -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/select2.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/slick.css">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/magnific-popup.css">
    <!-- jquery-ui -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/jquery-ui.css">
    <!-- plyr Css -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/plyr.css">
    <!-- Editor js Toolbar Start -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/editor-quill.css">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/animate.css">
    <!-- dataTables.dataTables -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/aos.css">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/main.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/custom.css">

    
</head>

<body>

    <!--==================== Preloader Start ====================-->
    <div class="preloader">
        <img src="{{ asset('/') }}admin/assets/images/icons/preloader.gif" alt="">
    </div>
    <!--==================== Preloader End ====================-->

    <!--==================== Overlay Start ====================-->
    <div class="overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==================== Scroll to Top End Here ==================== -->

    <!-- ==========admin dashbord start=========== -->
    <div class="overflow-hidden dashbord bg-main-25 w-100">
        <div class="d-flex">

            <!-- ========Dashdord Sidebar start======== -->
           <div class="px-20 py-24 dashboard-sidebar max-w-288-px w-100 border-end position-relative"
                style="background-color: #1b467f; border-color: rgba(255,255,255,0.1) !important;">

                <!-- Logo -->
                <a href="#">
                    <img src="{{ asset('/') }}admin/assets/images/logo/footer-logo.png" alt="Logo">
                </a>

                <span class="h-1 mt-24 mb-24 w-100" style="background: rgba(255,255,255,0.2);"></span>

                <div class="overflow-x-auto">
                    <div class="scrollbar min-w-max">
                        <!-- Welcome Text -->
                        <span class="mb-8 fw-normal text-14 d-block" style="color: rgba(255,255,255,0.8);">Welcome
                            Iashep,</span>

                        <ul>
                            <!-- Dashboard -->
                            <li class="mb-8">
                                <a href="admin-dashbord.html"
                                    class="flex-wrap gap-12 px-24 py-12 fw-medium d-flex align-items-center text-14 rounded-12 item-hover transition-03"
                                    style="color: rgba(255,255,255,0.8); background: transparent;">
                                    <span class="text-16 transition-03"
                                        style="color: rgba(255,255,255,0.7); width: 20px;">
                                        <i class="fas fa-tachometer-alt"></i>
                                    </span>
                                    Dashboard
                                </a>
                            </li>

                            <!-- My Profile -->
                            <li class="mb-8">
                                <a href="my-profile.html"
                                    class="flex-wrap gap-12 px-24 py-12 fw-medium d-flex align-items-center text-14 rounded-12 item-hover transition-03"
                                    style="color: rgba(255,255,255,0.8); background: transparent;">
                                    <span class="text-16 transition-03"
                                        style="color: rgba(255,255,255,0.7); width: 20px;">
                                        <i class="fas fa-user-circle"></i>
                                    </span>
                                    My Profile
                                </a>
                            </li>

                            <!-- Message -->
                            <li class="mb-8">
                                <a href="dashbord-message.html"
                                    class="flex-wrap gap-12 px-24 py-12 fw-medium d-flex align-items-center text-14 rounded-12 item-hover transition-03"
                                    style="color: rgba(255,255,255,0.8); background: transparent;">
                                    <span class="text-16 transition-03"
                                        style="color: rgba(255,255,255,0.7); width: 20px;">
                                        <i class="fas fa-comments"></i>
                                    </span>
                                    Message
                                </a>
                            </li>

                            <!-- Courses -->
                            <li class="mb-8">
                                <a href="dashbord-courses.html"
                                    class="flex-wrap gap-12 px-24 py-12 fw-medium d-flex align-items-center text-14 rounded-12 item-hover transition-03"
                                    style="color: rgba(255,255,255,0.8); background: transparent;">
                                    <span class="text-16 transition-03"
                                        style="color: rgba(255,255,255,0.7); width: 20px;">
                                        <i class="fas fa-graduation-cap"></i>
                                    </span>
                                    Courses
                                </a>
                            </li>

                            <!-- Quiz Attempts -->
                            <li class="mb-8">
                                <a href="dashbord-quiz-attempts.html"
                                    class="flex-wrap gap-12 px-24 py-12 fw-medium d-flex align-items-center text-14 rounded-12 item-hover transition-03"
                                    style="color: rgba(255,255,255,0.8); background: transparent;">
                                    <span class="text-16 transition-03"
                                        style="color: rgba(255,255,255,0.7); width: 20px;">
                                        <i class="fas fa-pencil-alt"></i>
                                    </span>
                                    Quiz Attempts
                                </a>
                            </li>

                            <!-- Admin Section Label -->
                            <li class="mt-16 mb-8">
                                <span class="fw-normal text-14" style="color: rgba(255,255,255,0.6);">⚙️ Admin</span>
                            </li>

                            <!-- Settings -->
                            <li class="mb-8">
                                <a href="dashbord-settings.html"
                                    class="flex-wrap gap-12 px-24 py-12 fw-medium d-flex align-items-center text-14 rounded-12 item-hover transition-03"
                                    style="color: rgba(255,255,255,0.8); background: transparent;">
                                    <span class="text-16 transition-03"
                                        style="color: rgba(255,255,255,0.7); width: 20px;">
                                        <i class="fas fa-sliders-h"></i>
                                    </span>
                                    Settings
                                </a>
                            </li>

                            <!-- Users Management -->
                            <li class="mb-8">
                                <a href="admin-users.html"
                                    class="flex-wrap gap-12 px-24 py-12 fw-medium d-flex align-items-center text-14 rounded-12 item-hover transition-03"
                                    style="color: rgba(255,255,255,0.8); background: transparent;">
                                    <span class="text-16 transition-03"
                                        style="color: rgba(255,255,255,0.7); width: 20px;">
                                        <i class="fas fa-users-cog"></i>
                                    </span>
                                    Users Management
                                </a>
                            </li>

                            <!-- Analytics -->
                            <li class="mb-8">
                                <a href="admin-analytics.html"
                                    class="flex-wrap gap-12 px-24 py-12 fw-medium d-flex align-items-center text-14 rounded-12 item-hover transition-03"
                                    style="color: rgba(255,255,255,0.8); background: transparent;">
                                    <span class="text-16 transition-03"
                                        style="color: rgba(255,255,255,0.7); width: 20px;">
                                        <i class="fas fa-chart-bar"></i>
                                    </span>
                                    Analytics
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Logout Button -->
                <div class="px-16 pb-16 position-absolute inset-block-end-0 inset-inline-start-0 w-100">
                    <a href="sign-in.html"
                        class="flex-wrap gap-12 px-24 py-12 text-14 fw-medium d-flex align-items-center rounded-12 item-hover transition-03"
                        style="color: rgba(255,255,255,0.8); background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2);">
                        <span class="text-16 transition-03" style="color: rgba(255,255,255,0.7); width: 20px;">
                            <i class="fas fa-sign-out-alt"></i>
                        </span>
                        Logout
                    </a>
                </div>
            </div>
            <!-- Font Awesome CDN -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

            <!-- ========Dashdord Sidebar end======== -->

            <div class="dashbord-body flex-grow-1">
                <!-- =====messsage dashbord nab start======== -->
                <div class="bg-white shadow-sm navbar-container border-bottom border-neutral-40 w-100">
                    <div class="gap-24 px-24 py-16 d-flex align-items-center justify-content-between w-100">
                        <!-- Left Section -->
                        <div class="gap-24 d-flex align-items-center">
                            <!-- Mobile Menu Toggle -->
                            <button type="button"
                                class="bg-transparent border-0 toggle-dashbord-button text-main-600 text-24 line-height-1 d-lg-none d-block">
                                <i class="fas fa-bars"></i>
                            </button>

                            <!-- Search Bar -->
                            <div class="max-w-357-px position-relative d-sm-block d-none">
                                <form action="#" class="position-relative">
                                    <input type="text" placeholder="Search courses, students..."
                                        class="border search-input ps-44 pe-36 py-11 border-neutral-40 rounded-pill focus-visible-outline text-14 line-height-1 bg-neutral-10 transition-03 w-100">
                                    <button type="button"
                                        class="bg-transparent search-button w-28 h-28 position-absolute top-50-percent translate-middle-y inset-inline-start-0-px ms-12 transition-03">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <!-- Right Section -->
                        <div class="gap-12 d-flex align-items-center">
                            <!-- Create Course Button -->
                            <a href="#"
                                class="gap-8 px-20 py-10 text-white border shadow-sm nav-primary-btn rounded-pill text-14 d-lg-flex align-items-center d-none line-height-1 transition-03">
                                <i class="fas fa-plus-circle text-16"></i>
                                <span>Create Course</span>
                            </a>

                            <!-- Language Selector -->
                            <div class="position-relative">
                                <!-- <button type="button"
                                    class="w-40 h-40 border-0 nav-icon-btn rounded-pill justify-content-center align-items-center d-flex text-18 text-neutral-600 transition-03">
                                    <i class="fas fa-language"></i>
                                </button> -->
                            </div>

                            <!-- Notifications -->
                            <div class="position-relative">
                                <button
                                    class="w-40 h-40 border-0 nav-icon-btn rounded-pill justify-content-center align-items-center d-flex text-18 text-neutral-600 position-relative transition-03"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ph ph-bell-simple"></i>
                                    <span class="notification-badge">2</span>
                                </button>


                                <!-- Notification Dropdown -->
                                <ul class="p-0 overflow-hidden border-0 shadow-lg dropdown-menu notification-dropdown rounded-12"
                                    style="min-width: 380px;">
                                    <!-- Header -->
                                    <div class="px-20 py-16 border-bottom border-neutral-40 bg-neutral-10">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6 class="mb-0 text-16 fw-semibold text-neutral-700">Notifications</h6>
                                            <span class="text-12 text-neutral-500">2 Unread</span>
                                        </div>
                                    </div>

                                    <!-- Notification Items -->
                                    <div class="overflow-auto max-h-300-px">
                                        <!-- Notification 1 -->
                                        <a class="gap-16 px-20 py-16 dropdown-item d-flex align-items-start border-bottom border-neutral-40 hover-bg-neutral-10 transition-03"
                                            href="javascript:void(0)">
                                            <div class="flex-shrink-0 mt-2">
                                                <div
                                                    class="w-44 h-44 bg-main-600 rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="text-white fas fa-user-plus text-18"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="mb-1 d-flex justify-content-between align-items-start">
                                                    <span class="text-14 fw-semibold text-neutral-700">New Student
                                                        Enrollment</span>
                                                    <span class="flex-shrink-0 text-11 fw-medium text-neutral-400">23m
                                                        ago</span>
                                                </div>
                                                <p class="mb-0 text-13 text-neutral-500">Sarah Johnson enrolled in your
                                                    "Web Development" course</p>
                                            </div>
                                        </a>

                                        <!-- Notification 2 -->
                                        <a class="gap-16 px-20 py-16 dropdown-item d-flex align-items-start border-bottom border-neutral-40 hover-bg-neutral-10 transition-03"
                                            href="javascript:void(0)">
                                            <div class="flex-shrink-0 mt-2">
                                                <div
                                                    class="w-44 h-44 bg-warning-600 rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="text-white fas fa-comment-alt text-18"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="mb-1 d-flex justify-content-between align-items-start">
                                                    <span class="text-14 fw-semibold text-neutral-700">New
                                                        Message</span>
                                                    <span class="flex-shrink-0 text-11 fw-medium text-neutral-400">1h
                                                        ago</span>
                                                </div>
                                                <p class="mb-0 text-13 text-neutral-500">Mike Chen sent you a message
                                                    about course materials</p>
                                            </div>
                                        </a>

                                        <!-- Notification 3 -->
                                        <a class="gap-16 px-20 py-16 dropdown-item d-flex align-items-start hover-bg-neutral-10 transition-03"
                                            href="javascript:void(0)">
                                            <div class="flex-shrink-0 mt-2">
                                                <div
                                                    class="w-44 h-44 bg-success-600 rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="text-white fas fa-dollar-sign text-18"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="mb-1 d-flex justify-content-between align-items-start">
                                                    <span class="text-14 fw-semibold text-neutral-700">Payment
                                                        Received</span>
                                                    <span class="flex-shrink-0 text-11 fw-medium text-neutral-400">2h
                                                        ago</span>
                                                </div>
                                                <p class="mb-0 text-13 text-neutral-500">Payment of $149.00 received for
                                                    "Data Science" course</p>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- Footer -->
                                    <div class="px-20 py-12 bg-neutral-10 border-top border-neutral-40">
                                        <a class="py-8 text-center dropdown-item text-main-600 fw-semibold text-14 d-block"
                                            href="javascript:void(0)">
                                            View All Notifications
                                        </a>
                                    </div>
                                </ul>
                            </div>

                            <!-- Messages -->
                            <div class="position-relative">
                                <!-- <button type="button"
                                    class="w-40 h-40 border-0 nav-icon-btn rounded-pill justify-content-center align-items-center d-flex text-18 text-neutral-600 transition-03">
                                    <i class="fas fa-comments"></i>
                                </button> -->
                            </div>

                            <!-- User Profile -->
                            <div class="dropdown">
                                <button
                                    class="gap-12 p-0 bg-transparent border-0 user-profile-btn d-flex align-items-center"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('/') }}admin/assets/images/thumbs/testimonials-three-img1.png" alt="User"
                                            class="w-40 h-40 border rounded-circle object-fit-cover border-3 border-main-600">
                                    </div>
                                    <div class="d-none d-md-block text-start">
                                        <div class="text-14 fw-semibold text-neutral-700 line-height-1">Alex Johnson
                                        </div>
                                        <div class="text-12 text-neutral-500 line-height-1">Admin</div>
                                    </div>
                                    <i class="fas fa-chevron-down text-16 text-neutral-500 d-none d-md-block"></i>
                                </button>

                                <ul class="p-8 border-0 shadow-lg dropdown-menu user-dropdown rounded-12"
                                    style="min-width: 200px;">
                                    <li>
                                        <a class="gap-12 px-16 py-10 dropdown-item d-flex align-items-center rounded-8 transition-03"
                                            href="my-profile.html">
                                            <span class="w-20 text-center"><i
                                                    class="fas fa-user-circle text-16"></i></span>
                                            <span class="text-14">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="gap-12 px-16 py-10 dropdown-item d-flex align-items-center rounded-8 transition-03"
                                            href="dashbord-settings.html">
                                            <span class="w-20 text-center"><i class="fas fa-cog text-16"></i></span>
                                            <span class="text-14">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="gap-12 px-16 py-10 dropdown-item d-flex align-items-center rounded-8 transition-03"
                                            href="#">
                                            <span class="w-20 text-center"><i
                                                    class="fas fa-question-circle text-16"></i></span>
                                            <span class="text-14">Help & Support</span>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="my-8 dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="gap-12 px-16 py-10 dropdown-item d-flex align-items-center rounded-8 transition-03"
                                            href="sign-in.html">
                                            <span class="w-20 text-center"><i
                                                    class="fas fa-sign-out-alt text-16"></i></span>
                                            <span class="text-14">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =====message nab end======== -->

                <!-- =====dashbord body item start===== -->
               @yield('main-content')
                <!-- =====dashbord body item end===== -->

                <!-- =========message profile footer start============== -->
                <div class="px-40 py-32 mt-auto footer-premium"
                    style="background: linear-gradient(135deg, #2263a3 0%, #2263a3 100%); border-top: 1px solid rgba(255,255,255,0.1);">
                    <div class="container-fluid">


                        <!-- Bottom Copyright -->
                       <div class="border-top" style="border-color: rgba(255,255,255,0.2) !important; background-color: #1b467f;">
    <div class="flex-wrap gap-24 px-24 py-16 d-flex align-items-center justify-content-between">
        <p class="mb-0 fw-medium text-14" style="color: rgba(255,255,255,0.8);">
            Copyright ©2025
            <a href="admin-dashbord.html" class="fw-semibold hover-text-white"
                style="color: rgba(255,255,255,0.9); text-decoration: none;">Iashep</a>.
            All Rights Reserved
        </p>
        <div class="gap-24 d-flex align-items-center">
            <a href="#" class="fw-medium text-14 footer-link"
                style="color: rgba(255,255,255,0.8); text-decoration: none;">Privacy policy</a>
            <a href="#" class="fw-medium text-14 footer-link"
                style="color: rgba(255,255,255,0.8); text-decoration: none;">Terms of service</a>
            <a href="#" class="fw-medium text-14 footer-link"
                style="color: rgba(255,255,255,0.8); text-decoration: none;">Support</a>
        </div>
    </div>
</div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- =========message profile footer end============== -->
            </div>
        </div>
    </div>

    <!-- Cahtbot Code Starts Here -->

    <!-- Add before closing body -->
    <div class="chatbot-widget">
        <div class="chatbot-toggle">
            <i class="fas fa-robot"></i>
        </div>
        <div class="chatbot-container">
            <div class="chatbot-header">
                <h6 style="color: white;">Iashep Assistant</h6>
                <button class="close-chat"><i class="fas fa-times"></i></button>
            </div>
            <div class="chatbot-messages">
                <div class="message bot-message">
                    <p>Hello! I'm your EduHub assistant. How can I help you today?</p>
                </div>
            </div>
            <div class="chatbot-input">
                <input type="text" placeholder="Type your message...">
                <button><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>
    <!-- Cahtbot Code Ends Here -->
    <!-- ==========admin dashbord end============ -->

    <!-- JavaScript files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/boostrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/select2.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/phosphor-icon.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/slick.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/counter.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/magnific-popup.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/jquery-ui.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/marquee.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/apexcharts.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/plyr.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/editor-quill.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/dataTables.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/vanilla-tilt.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/wow.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/aos.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @yield('scripts')

    <script>
        // Charts JavaScript code
        var options = {
            series: [
                {
                    data: [38, 39, 19, 19.5, 19, 35, 34, 27, 27, 8, 8, 25,]
                },
                {
                    data: [18, 18, 31, 32, 8, 8, 30, 30, 20, 20, 40, 40,]
                }
            ],
            chart: {
                height: 350,
                type: 'line',
                dropShadow: {
                    enabled: false
                },
                zoom: {
                    enabled: false
                },
                toolbar: {
                    show: false
                }
            },
            colors: ['#066AC9', '#F37639'],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 2,
            },
            grid: {
                borderColor: '#e7e7e7',
                row: {
                    colors: ['#f3f3f3', 'transparent'],
                    opacity: 0.5
                }
            },
            markers: {
                size: 1
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                labels: {
                    style: {
                        colors: 'rgba(255, 255, 255, 0.8)'  // White with 80% opacity
                    }
                },
                axisBorder: {
                    color: 'rgba(255, 255, 255, 0.5)'  // White with 50% opacity for border
                },
                axisTicks: {
                    color: 'rgba(255, 255, 255, 0.5)'  // White with 50% opacity for ticks
                }
            },
            yaxis: {
                min: 5,
                max: 40
            },
            legend: {
                position: 'top',
                horizontalAlign: 'right',
                floating: true,
                offsetY: -25,
                offsetX: -5,
                show: false
            }
        };

        var chart = new ApexCharts(document.querySelector("#react-chart"), options);
        chart.render();

        // Donut Chart
        var donutOptions = {
            series: [44, 55, 41, 17, 15],
            chart: {
                type: 'donut',
                height: 240
            },
            colors: ['#00B8D9', '#066AC9', '#FFAB00', '#F37639', '#8E33FF'],
            legend: {
                show: false
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200,
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var donutChart = new ApexCharts(document.querySelector("#donutChart"), donutOptions);
        donutChart.render();
    </script>
    <script>
        document.querySelector('.chatbot-toggle').addEventListener('click', function () {
            document.querySelector('.chatbot-container').classList.toggle('active');
        });

        document.querySelector('.close-chat').addEventListener('click', function () {
            document.querySelector('.chatbot-container').classList.remove('active');
        });

        // Simple chatbot functionality
        document.querySelector('.chatbot-input button').addEventListener('click', sendMessage);
        document.querySelector('.chatbot-input input').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') sendMessage();
        });

        function sendMessage() {
            const input = document.querySelector('.chatbot-input input');
            const message = input.value.trim();

            if (message) {
                // Add user message
                addMessage(message, 'user');
                input.value = '';

                // Simulate bot response
                setTimeout(() => {
                    const botResponse = getBotResponse(message);
                    addMessage(botResponse, 'bot');
                }, 1000);
            }
        }

        function addMessage(text, sender) {
            const messagesContainer = document.querySelector('.chatbot-messages');
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${sender}-message`;
            messageDiv.innerHTML = `<p>${text}</p>`;
            messagesContainer.appendChild(messageDiv);
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }

        function getBotResponse(message) {
            const lowerMessage = message.toLowerCase();

            if (lowerMessage.includes('hello') || lowerMessage.includes('hi')) {
                return "Hello! How can I assist you with EduHub admin tasks today?";
            } else if (lowerMessage.includes('course') || lowerMessage.includes('add course')) {
                return "You can add new courses from the Courses section. Go to Dashboard → Courses → Add New Course.";
            } else if (lowerMessage.includes('user') || lowerMessage.includes('student')) {
                return "User management is available in the Users section. You can view, edit, or remove users from there.";
            } else if (lowerMessage.includes('report') || lowerMessage.includes('analytics')) {
                return "Check the Analytics section for detailed reports on courses, users, and revenue.";
            } else {
                return "I'm here to help with EduHub admin tasks. You can ask me about courses, users, reports, or settings.";
            }
        }
    </script>
</body>

</html>