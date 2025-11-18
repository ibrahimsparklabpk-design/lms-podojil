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
  .category-create .control{
    height:44px;width:100%;
    border:1px solid var(--field);border-radius:10px;background:#fff;
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
    <h4 class="page-hd">Create New Category</h4>
    <a href="#" class="px-16 py-8 btn btn-ghost is-primary pill transition-03">← Back to Categories</a>
  </div>

  <div class="px-24 py-24 card-soft category-create">

    <div class="gap-24 grid-2">
      {{-- LEFT: Basic Info --}}
      <div>
        <div class="section-hd">Basic Category Information</div>
        <div class="grid-1">
          <div class="form-row">
            <label class="req">Category Name</label>
            <input type="text" class="control" placeholder="Enter category name">
          </div>

          <div class="form-row">
            <label class="req">Category Slug</label>
            <input type="text" class="control" placeholder="Enter category slug">
          </div>

          <div class="form-row">
            <label>Status</label>
            <select class="control">
              <option value="">Select Status</option>
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select>
          </div>
        </div>
      </div>

      {{-- RIGHT: Description --}}
      <div>
        <div class="section-hd">Category Description</div>
        <div class="grid-1">
          <div class="form-row">
            <textarea class="control textarea" placeholder="Enter category description..."></textarea>
          </div>
        </div>
      </div>
    </div>

    <div class="gap-12 mt-24 d-flex align-items-center">
      <button type="button" class="px-16 py-10 btn btn-ghost is-primary pill transition-03">Create Category</button>
      <button type="button" class="px-16 py-10 btn btn-ghost pill transition-03">Cancel</button>
    </div>
    
  </div>
</div>

@endsection
