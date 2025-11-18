@extends('Admin.layouts.master')

@section('main-content')

<style>
    /* ==== Glass UI Helpers ==== */
    .glass-card{
        background: rgba(255,255,255,0.18);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        border: 1px solid rgba(255,255,255,0.28);
        box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        border-radius: 20px;
    }

    .glass-section{
        background: rgba(255,255,255,0.12);
        backdrop-filter: blur(16px);
        border: 1px solid rgba(255,255,255,0.20);
        border-radius: 14px;
        padding: 18px 20px;
        margin-bottom: 18px;
    }

    .glass-badge{
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255,255,255,0.4);
        padding: 4px 14px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 12px;
        display: inline-block;
    }

    .active{
        background: rgba(16,185,129,0.25);
        color: #065f46;
    }
    .inactive{
        background: rgba(239,68,68,0.25);
        color:#7f1d1d;
    }

    .thumb-img{
        width:100%;
        border-radius:14px;
        box-shadow:0 8px 24px rgba(0,0,0,0.18);
        border:1px solid rgba(255,255,255,0.4);
        object-fit:cover;
    }
</style>

<div class="p-8"
     style="
        background:#1B467F;
        min-height:100vh;
     ">

    <div class="max-w-6xl mx-auto">

        <!-- Back Button -->
        <a href="{{ route('courses.index') }}"
           class="text-white text-sm font-semibold hover:underline">
            ← Back to Courses
        </a>

        <h2 class="text-3xl font-extrabold text-white mt-4 drop-shadow-lg">Course Details</h2>

        <!-- MAIN GLASS CONTAINER -->
        <div class="glass-card p-8 mt-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                {{-- LEFT SIDE – Thumbnail --}}
                <div>
                    <div class="glass-section text-white">
                        <h3 class="font-bold text-lg mb-2">📘 Course Thumbnail</h3>

                        @if(!empty($course->course_thumbnail) && $course->course_thumbnail != "no found image")
                            <img src="{{ asset('admin/course_thumbnail/' . $course->course_thumbnail) }}" class="thumb-img">
                        @else
                            <p>No Thumbnail Uploaded</p>
                        @endif
                    </div>
                </div>

                {{-- RIGHT SIDE – Basic Info --}}
                <div>
                    <div class="glass-section text-white">
                        <h3 class="font-bold text-lg mb-3">📌 Basic Information</h3>

                        <p class="mb-3">
                            <span class="font-semibold text-slate-200">Title:</span>
                            {{ $course->course_title }}
                        </p>

                          <p class="mb-3">
                            <span class="font-semibold text-slate-200">Slug:</span>
                            {{ $course->course_slug }}
                        </p>

                        <p class="mb-3">
                            <span class="font-semibold text-slate-200">Course Type:</span>
                            {{ $course->course_type ?? 'N/A' }}
                        </p>

                        <p class="mb-3">
                            <span class="font-semibold text-slate-200">Price:</span>
                            ${{ number_format($course->course_price, 2) }}
                        </p>

                        <p class="mb-3">
                            <span class="font-semibold text-slate-200">Level:</span>
                            {{ $course->course_level }}
                        </p>

                        <p class="mt-3">
                            <span class="glass-badge {{ $course->status == 1 ? 'active' : 'inactive' }}">
                                {{ $course->status == 1 ? 'Active' : 'Inactive' }}
                            </span>
                        </p>
                    </div>
                </div>

            </div>

            {{-- DESCRIPTION --}}
            <div class="glass-section text-white mt-6">
                <h3 class="font-bold text-lg mb-3">📝 Description</h3>
                <div style="line-height:1.6;">
                    {!! nl2br(e($course->course_description)) !!}
                </div>
            </div>

            {{-- MORE DETAILS --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-4">

                <div class="glass-section text-white">
                    <h3 class="font-bold text-lg mb-3">⏱ Duration Details</h3>

                    <p class="mb-3"><b>Weeks:</b> {{ $course->course_duration_weeks ?? 'Not specified' }}</p>
                    <p><b>Total Hours:</b> {{ $course->course_total_hours }} Hours</p>
                </div>

                <div class="glass-section text-white">
                    <h3 class="font-bold text-lg mb-3">🌐 Language & Material</h3>

                    <p class="mb-3"><b>Language:</b> {{ $course->course_language ?? 'N/A' }}</p>

                    @if($course->course_book && $course->course_book !="no found image")
                        <a href="{{ asset('admin/course_book/'.$course->course_book) }}"
                           target="_blank"
                           class="glass-badge active hover:opacity-80">
                            📄 View / Download Book
                        </a>
                    @else
                        No Book Uploaded
                    @endif
                </div>

            </div>

            {{-- VIDEOS --}}
         <{{-- VIDEOS --}}
<div class="glass-section text-white mt-6">
    <h3 class="font-bold text-lg mb-3">🎥 Course Videos</h3>

    @php
        $videos = explode(',', $course->course_video);
    @endphp

    @if(!empty($videos) && is_array($videos))
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4" style="display: flex">
            @foreach($videos as $video)
                @if(!empty($video))
                    <div class="video-wrapper glass-section p-2">
                        <video width="100%" controls class="rounded-lg" style="    padding: 1rem;">
                            <source src="{{ asset('admin/course_videos/' . $video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                @endif
            @endforeach
        </div>
    @else
        <p>No Videos Uploaded</p>
    @endif
</div>



        </div>

    </div>

</div>

@endsection
