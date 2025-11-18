@extends('Admin.layouts.master')

@section('main-content')

<style>
:root{
  --brand:#2263a3; --ink:#0F172A; --muted:#64748B; --line:#E7EAF3;
  --field:#D0D5DD; --soft:#F1F5F9; --focus:rgba(34,99,163,.14);
  --shadow:0 1px 2px rgba(16,24,40,.04); --radius:12px; --radius-pill:999px;
  --t:.18s ease;
}

.card-soft{background:#fff;border:1px solid var(--line);border-radius:var(--radius);box-shadow:var(--shadow)}
.section-hd{font-weight:600;font-size:14px;color:var(--ink);margin-bottom:8px}
.hint{font-size:12px;color:var(--muted)}
.req::after{content:" *";color:#EF4444}
.page-hd{font-weight:700;font-size:18px;color:var(--ink)}
.form-row{display:flex;flex-direction:column;gap:6px}
.grid-2{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.grid-1{display:grid;grid-template-columns:1fr;gap:16px}
@media (max-width:992px){.grid-2{grid-template-columns:1fr}}
.transition-03{transition:all var(--t)}

.category-create .control{
  height:44px;width:100%;border:1px solid var(--field);border-radius:10px;background:#fff;
  padding:10px 12px;transition:border-color var(--t),box-shadow var(--t),background var(--t);
}
.category-create .control:hover{border-color:#b9c2d0;background:#fff}
.category-create .control:focus{outline:none;border-color:var(--brand);box-shadow:0 0 0 3px var(--focus)}
.category-create select.control{
  appearance:none;
  background-image:linear-gradient(45deg,transparent 50%,#94a3b8 50%),linear-gradient(135deg,#94a3b8 50%,transparent 50%);
  background-position:calc(100% - 18px) 19px,calc(100% - 12px) 19px;
  background-size:6px 6px,6px 6px;background-repeat:no-repeat;
}
.category-create .textarea{min-height:96px;resize:vertical}

.btn{display:inline-flex;align-items:center;justify-content:center;border:1px solid transparent;cursor:pointer;line-height:1;user-select:none}
.pill{border-radius:var(--radius-pill)}
.btn-ghost{background:var(--soft);border:1px solid #E2E8F0;color:var(--ink);transition:background var(--t),border-color var(--t)}
.btn-ghost:hover{background:#e9eef5;border-color:#d7dee8}
.btn-ghost.is-primary{background:var(--brand);border-color:var(--brand);color:#fff}
.btn-ghost.is-primary:hover{filter:brightness(.96)}
.text-danger{color:red;font-size:13px;margin-top:4px}
</style>

<div class="px-24 py-24">
  <div class="mb-20 d-flex align-items-center justify-content-between">
    <h4 class="page-hd">Create New Category</h4>
    <a href="{{ route('category.index') }}" class="px-16 py-8 btn btn-ghost is-primary pill transition-03">← Back to Categories</a>
  </div>

  <div class="px-24 py-24 card-soft category-create">

    <form  id="categoryform" action="{{ route('category.store') }}" method="post">
      @csrf
      
      <div class="gap-24 grid-2">
        {{-- LEFT --}}
        <div>
          <div class="section-hd">Basic Category Information</div>
          <div class="grid-1">
            <div class="form-row">
              <label class="req">Category Name</label>
              <input type="text" name="category_name" class="control" placeholder="Enter category name">
              <small class="text-danger error-category_name"></small>
            </div>

            <div class="form-row">
              <label class="req">Category Slug</label>
              <input type="text" name="category_slug" class="control" placeholder="Enter category slug">
              <small class="text-danger error-category_slug"></small>
            </div>

            <div class="form-row">
              <label>Status</label>
              <select name="status" class="control">
                <option value="">Select Status</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
              </select>
              <small class="text-danger error-status"></small>
            </div>
          </div>
        </div>

        {{-- RIGHT --}}
        <div>
          <div class="section-hd">Category Description</div>
          <div class="grid-1">
            <div class="form-row">
              <textarea name="category_description" class="control textarea" placeholder="Enter category description..."></textarea>
              <small class="text-danger error-category_description"></small>
            </div>
          </div>
        </div>
      </div>

      <div class="gap-12 mt-24 d-flex align-items-center">
        <button type="submit" class="px-16 py-10 btn btn-ghost is-primary pill transition-03">Create Category</button>
        <button type="button" onclick="window.location='{{ route('category.index') }}'" class="px-16 py-10 btn btn-ghost pill transition-03">Cancel</button>
      </div>

      <div id="msg"></div>

    </form>
  </div>
</div>

@endsection

@section('script')
<script>
$('#categoryform').submit(function(e){
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
        url : "{{ route('category.store') }}",
        method: "POST",
        data : formData,
        processData : false,
        contentType : false,
        success:function(res){
            // clear previous errors
            $('small.text-danger').html('');

            if(res.status === false){
                $.each(res.errors, function(key, value){
                    $('.error-' + key).html(value[0]);
                });
                return;
            }

            // show success
            $('#msg').html('<p style="color:green;">' + res.message + '</p>');
            $('#categoryform')[0].reset();

            // redirect after 0.5s
            if(res.redirect){
                setTimeout(function(){
                    window.location.href = res.redirect;
                }, 500);
            }
        },
        error:function(xhr){
            console.log(xhr.responseText);
            $('#msg').html('<p style="color:red">' + xhr.responseText + '</p>');
        }
    });
});
</script>
@endsection
