@extends('Admin.layouts.master')

@section('main-content')

<style>
  /* ====== Design Tokens ====== */
  :root{
    --brand:#2263a3;
    --ink:#0F172A;
    --muted:#64748B;
    --line:#E7EAF3;
    --field:#D0D5DD;
    --soft:#F1F5F9;
    --focus:rgba(34,99,163,.14);
    --shadow:0 1px 2px rgba(16,24,40,.04);
    --radius:12px;
    --radius-pill:999px;
    --t:.18s ease;
  }

  /* ====== Base ====== */
  .card-soft{background:#fff;border:1px solid var(--line);border-radius:var(--radius);box-shadow:var(--shadow)}
  .section-hd{font-weight:600;font-size:14px;color:var(--ink);margin-bottom:8px}
  .hint{font-size:12px;color:var(--muted)}
  .req::after{content:" *";color:#EF4444}
  .page-hd{font-weight:700;font-size:18px;color:var(--ink)}
  .form-row{display:flex;flex-direction:column;gap:6px}
  .grid-2{display:grid;grid-template-columns:1fr 1fr;gap:16px}
  .grid-1{display:grid;grid-template-columns:1fr;gap:16px}
  .gap-12{gap:12px}.gap-16{gap:16px}.gap-24{gap:24px}
  @media (max-width:992px){.grid-2{grid-template-columns:1fr}}
  .transition-03{transition:all var(--t)}

  /* ====== Controls ====== */
  .course-create .control{
    height:44px;width:100%;
    border:1px solid var(--field);border-radius:10px;background:#fff;
    padding:10px 12px;transition:border-color var(--t),box-shadow var(--t),background var(--t);
  }
  .course-create .control:hover{border-color:#b9c2d0;background:#fff}
  .course-create .control:focus{outline:none;border-color:var(--brand);box-shadow:0 0 0 3px var(--focus)}
  .course-create select.control{
    appearance:none;
    background-image:linear-gradient(45deg,transparent 50%,#94a3b8 50%),linear-gradient(135deg,#94a3b8 50%,transparent 50%);
    background-position:calc(100% - 18px) 19px,calc(100% - 12px) 19px;
    background-size:6px 6px,6px 6px;background-repeat:no-repeat;
  }
  .course-create .textarea{min-height:96px;resize:vertical}
  .course-create .form-row:focus-within label{color:var(--brand)}
  .course-create input[type="file"].control{padding:9px 12px}
  .course-create input[type="file"].control:hover{background:#fafafa}

  /* ====== Buttons ====== */
  .btn{display:inline-flex;align-items:center;justify-content:center;border:1px solid transparent;cursor:pointer;line-height:1;user-select:none}
  .pill{border-radius:var(--radius-pill)}
  .btn-brand{background:var(--brand);color:#fff;border-color:var(--brand);transition:transform var(--t),filter var(--t),box-shadow var(--t)}
  .btn-brand:hover{filter:brightness(.96)}
  .btn-brand:active{transform:translateY(1px)}
  .btn-brand:focus-visible{outline:none;box-shadow:0 0 0 4px var(--focus)}
  .btn-ghost{background:var(--soft);border:1px solid #E2E8F0;color:var(--ink);transition:background var(--t),border-color var(--t)}
  .btn-ghost:hover{background:#e9eef5;border-color:#d7dee8}
  .btn-ghost.is-primary{background:var(--brand);border-color:var(--brand);color:#fff}
  .btn-ghost.is-primary:hover{filter:brightness(.96)}
  .btn-ghost.is-primary:focus-visible{box-shadow:0 0 0 4px var(--focus)}
</style>

<div class="px-24 py-24">
  <div class="mb-20 d-flex align-items-center justify-content-between">
    <h4 class="page-hd">Create New Course</h4>
    <a href="" class="px-16 py-8 btn btn-ghost is-primary pill transition-03">← Back to Courses</a>
  </div>

 <form id="courseform" action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data" class="px-24 py-24 card-soft course-create">
  @csrf

  <div class="gap-24 grid-2">
    {{-- LEFT: Basic Info --}}
    <div>
      <div class="section-hd">Basic Course Information</div>
      <div class="grid-1">
        <div class="form-row">
          <label class="req">Course Title</label>
          <input name="course_title" type="text" class="control" placeholder="Enter course title">
          <small class="text-danger error-course_title"></small>
        </div>

        <div class="form-row">
          <label>Course Type</label>
          <select name="course_type" class="control">
            <option value="">Select Course Type</option>
            <option>Online Course</option>
            <option>Onsite Course</option>
          </select>
          <small class="text-danger error-course_type"></small>
        </div>

        <div class="form-row">
          <label>Price ($)</label>
          <input name="course_price" type="number" step="0.01" min="0" class="control" placeholder="0.00">
          <small class="text-danger error-course_price"></small>
        </div>

        <div class="form-row">
          <label>Course Level</label>
          <select name="course_level" class="control">
            <option value="">Select Level</option>
            <option>Beginner</option>
            <option>Intermediate</option>
            <option>Advanced</option>
          </select>
          <small class="text-danger error-course_level"></small>
        </div>

        <div class="form-row">
          <label class="req">Course Description</label>
          <textarea name="course_description" class="control textarea" placeholder="Describe your course in detail..."></textarea>
          <small class="text-danger error-course_description"></small>
        </div>
      </div>
    </div>

    {{-- RIGHT: Details --}}
    <div>
      <div class="section-hd">Course Details</div>
      <div class="grid-1">
        <div class="form-row">
          <label>Duration (Weeks)</label>
          <input name="course_duration_weeks" type="number" min="0" class="control" placeholder="e.g., 8">
          <small class="text-danger error-course_duration_weeks"></small>
        </div>

        <div class="form-row">
          <label>Total Hours</label>
          <input name="course_total_hours" type="number" class="control" placeholder="e.g., 40">
          <small class="text-danger error-course_total_hours"></small>
        </div>

        <div class="form-row">
          <label>Language</label>
          <input name="course_language" type="text" class="control" placeholder="English">
          <small class="text-danger error-course_language"></small>
        </div>

        <div class="form-row">
          <label>Course Thumbnail</label>
          <input name="course_thumbnail" type="file" class="control" accept=".jpg,.jpeg,.png">
          <small class="text-danger error-course_thumbnail"></small>
          <div class="hint">Recommended size: 400×300px. Max file size: 2MB.</div>
        </div>
      </div>
    </div>
  </div>

  <hr class="my-24">

  {{-- Resources --}}
  <div class="gap-24 grid-2">
    <div>
      <div class="section-hd">Course Book (PDF/DOC)</div>
      <input name="course_book" type="file" class="control" accept=".pdf,.doc,.docx,.txt,.ppt,.pptx">
      <small class="text-danger error-course_book"></small>
      <span class="hint">Supported: PDF, DOC, DOCX, TXT, PPT, PPTX (Max: 10MB)</span>
    </div>

    <div>
      <div class="section-hd">Videos</div>
      <input name="course_videos[]" type="file" class="control" multiple accept=".mp4,.avi,.mov,.wmv,.webm">
      <small class="text-danger error-course_videos"></small>
      <span class="hint">Supported: MP4, AVI, MOV, WMV, WEBM (Max: 100MB each)</span>
    </div>
  </div>

  <div class="gap-12 mt-24 d-flex align-items-center">
    <button type="submit" class="px-16 py-10 btn btn-ghost is-primary pill transition-03">Create Course</button>
    <a href="" class="px-16 py-10 btn btn-ghost pill transition-03">Cancel</a>
    <span class="hint">Tip: You can edit everything later from “All Courses”.</span>
  </div>
</form>

<div id="msg"></div>


  <div id="msg"></div>
  
</div>
@endsection


@section('scripts')
 <script>
    $('#courseform').submit(function(e){
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url:"{{ route('courses.store') }}",
            method: "POST",
            data : formData ,
            processData: false,
            contentType: false,
            
            success:function(res){

                // clear previous error messages
                $('small.text-danger').html('');

                // handle validation errors
                if(res.status === false){
                    $.each(res.errors, function(key, value){
                        $('.error-' + key).html(value[0]);
                    });
                    return;
                }

                // success message
                $('#msg').html('<p style="color:green;">' + res.message + '</p>');
                
                if(res.redirect){
                    window.location.href = res.redirect;
                }

                $('#courseform')[0].reset();
            },

            error:function(xhr){
            console.log(xhr.responseText); // inspect the real error
            $('#msg').html('<p style="color:red">' + xhr.responseText + '</p>');
            }
        });
    });
 </script>
@endsection
