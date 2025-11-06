@extends('Admin.layouts.master')

@section('main-content')
<style>
    :root{
        --wa-bg:#ffffff; /* white chat background */
        --wa-sidebar:#ffffff;
        --wa-accent:#128C7E;
        --wa-bubble-me:#1F4E8C;   /* dark blue from logo */
        --wa-bubble-you:#e63946;  /* red from logo */
        --wa-text:#111827;
        --wa-muted:#6b7280;
        --shadow:0 2px 10px rgba(0,0,0,.06);
        --radius:14px;

        --sidebar-w:360px;
        --divider:#e9edef;
    }

    .chat-shell{height:90vh;background:#f8fafc;}
    .card-pane{box-shadow:var(--shadow);overflow:hidden;}

    @media (min-width: 992px){
        .sidebar-col{width:var(--sidebar-w);max-width:var(--sidebar-w);flex:0 0 var(--sidebar-w);}
        .content-col{flex:1 1 auto;min-width:0;max-width:calc(100% - var(--sidebar-w));}
    }

    /* ===== LEFT SIDEBAR ===== */
    .sidebar{background:var(--wa-sidebar);}
    .sidebar-head{position:sticky;top:0;z-index:3;background:var(--wa-sidebar);}
    .sidebar-search{position:sticky;top:56px;z-index:2;background:var(--wa-sidebar);}
    .search-input{
        background:#f2f4f7;border:0;padding-left:44px;border-radius:999px;
        box-shadow:inset 0 1px 2px rgba(0,0,0,.04);
    }

    .contacts-list{
        display:flex;
        flex-direction:column;
        gap:6px;
        padding-top:4px;
        padding-bottom:6px;
    }

    .contact-item{
        position:relative;
        cursor:pointer;
        background:#fff;
        margin:0 6px;
        border-radius:12px;
        padding:12px 16px;
        transition:background .15s ease;
        opacity:1 !important;
    }

    .contact-item h6{ color:var(--wa-text); }
    .contact-item small{ color:var(--wa-muted); }

    .contacts-list .contact-item::after{
        content:"";
        position:absolute;
        left:72px;
        right:16px;
        bottom:0;
        height:1px;
        background:var(--divider);
        opacity:0.9;
        pointer-events:none;
    }
    .contacts-list .contact-item:last-child::after{display:none;}

    .contact-item:hover{
        background:#f3fbf7 !important;
        opacity:1 !important;
    }
    .contact-item:hover::before{
        content:'';position:absolute;left:0;top:0;bottom:0;width:4px;background:#bfead7;border-radius:12px 0 0 12px;
    }
    .contact-item:hover h6{ color:var(--wa-text) !important; }
    .contact-item:hover small{ color:var(--wa-muted) !important; }
    .contact-item:hover .badge{ background:#111827 !important; color:#fff !important; }

    .contact-active{
        background:#e7f6ee !important;
    }
    .contact-active::before{
        content:'';position:absolute;left:0;top:0;bottom:0;width:6px;background:var(--wa-accent);border-radius:12px 0 0 12px;
    }

    .avatar{
        width:48px;height:48px;border-radius:50%;
        display:flex;align-items:center;justify-content:center;
        font-weight:600;color:#fff;flex:0 0 48px;
    }

    /* ===== RIGHT CHAT AREA ===== */
    .chat-header{position:sticky;top:0;z-index:3;background:#ffffff;border-bottom:1px solid #eef2f7;}
    .online-dot{width:10px;height:10px;border-radius:50%;background:#22c55e;display:inline-block;margin-left:8px;}

    .chat-body{
        background:var(--wa-bg);
        background-image:none; /* no pattern, pure white */
    }

    .bubble{
        max-width:66%;padding:.65rem .8rem;border-radius:var(--radius);
        box-shadow:0 1px 1px rgba(0,0,0,.04);
        font-size:15px;line-height:1.4;color:#fff; /* text white for colored bubbles */
    }
    .bubble-you{
        background:var(--wa-bubble-you);
        border-top-left-radius:4px;
        color:#fff;
    }
    .bubble-me{
        background:var(--wa-bubble-me);
        border-top-right-radius:4px;
        color:#fff;
    }
    .msg-time{font-size:11px;color:#f1f1f1;margin-top:4px;}

    .chat-input{position:sticky;bottom:0;z-index:3;background:#ffffff;border-top:1px solid #eef2f7;}
    .input-field{background:#f5f7fa;border:0;border-radius:999px;padding:.6rem 1rem;box-shadow:inset 0 1px 2px rgba(0,0,0,.04);}
    .round-btn{width:38px;height:38px;border-radius:50%;display:flex;align-items:center;justify-content:center;border:0;}
    .btn-ghost{background:#f5f7fa;}
    .btn-send{background:var(--wa-accent);color:#fff;box-shadow:0 3px 10px rgba(18,140,126,.25);}
    .scroll-thin{scrollbar-width:thin;}
</style>

<div class="container-fluid py-4 chat-shell">
    <div class="row h-100 g-0">

        <!-- LEFT SIDEBAR -->
        <div class="col-12 col-lg-auto sidebar-col d-flex flex-column sidebar border-end rounded-start-4 card-pane">

            <!-- Header -->
            <div class="p-3 d-flex justify-content-between align-items-center sidebar-head">
                <h5 class="mb-0 fw-semibold text-dark">Chats</h5>
                <button class="round-btn btn-ghost" title="New chat">
                    <i class="ph ph-pencil-simple-line fs-5 text-dark"></i>
                </button>
            </div>

            <!-- Search -->
            <div class="p-3 border-bottom sidebar-search">
                <div class="position-relative">
                    <input type="text" class="form-control search-input" placeholder="Search contacts...">
                    <i class="ph ph-magnifying-glass position-absolute top-50 translate-middle-y ms-3 text-muted fs-5"></i>
                </div>
            </div>

            <!-- Contact list -->
            <div class="flex-grow-1 overflow-auto scroll-thin contacts-list">

                <div class="d-flex align-items-center justify-content-between contact-item">
                    <div class="d-flex align-items-center gap-3">
                        <div class="avatar" style="background:#1F3546;">MM</div>
                        <div>
                            <h6 class="mb-0 fw-semibold text-dark">Marvin McKinney</h6>
                            <small class="text-muted">Hey, are you available for a call?</small>
                        </div>
                    </div>
                    <div class="text-end">
                        <small class="text-muted d-block mb-1">6 min</small>
                        <span class="badge bg-dark rounded-pill">5</span>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between contact-item">
                    <div class="d-flex align-items-center gap-3">
                        <div class="avatar" style="background:#dc2626;">RE</div>
                        <div>
                            <h6 class="mb-0 fw-semibold text-dark">Ralph Edwards</h6>
                            <small class="text-muted">Check out this design file</small>
                        </div>
                    </div>
                    <div class="text-end">
                        <small class="text-muted d-block mb-1">27 min</small>
                        <span class="badge bg-dark rounded-pill">2</span>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between contact-item contact-active">
                    <div class="d-flex align-items-center gap-3">
                        <div class="avatar" style="background:#059669;">EP</div>
                        <div>
                            <h6 class="mb-0 fw-semibold text-dark">Eleanor Pena</h6>
                            <small class="text-muted">You: Sounds good to me!</small>
                        </div>
                    </div>
                    <div class="text-end">
                        <small class="text-muted">46 min</small>
                    </div>
                </div>

                <div class="d-flex align-items-center contact-item">
                    <div class="avatar me-3" style="background:#7c3aed;">DS</div>
                    <div>
                        <h6 class="mb-0 fw-semibold text-dark">Darrell Steward</h6>
                        <small class="text-muted">Meeting at 3 PM tomorrow</small>
                    </div>
                </div>

                <div class="d-flex align-items-center contact-item">
                    <div class="avatar me-3" style="background:#0891b2;">DR</div>
                    <div>
                        <h6 class="mb-0 fw-semibold text-dark">Darlene Robertson</h6>
                        <small class="text-muted">Can you review the proposal?</small>
                    </div>
                </div>

                <div class="d-flex align-items-center contact-item">
                    <div class="avatar me-3" style="background:#4b5563;">JL</div>
                    <div>
                        <h6 class="mb-0 fw-semibold text-dark">Jennifer Lee</h6>
                        <small class="text-muted">Thanks for the feedback!</small>
                    </div>
                </div>

            </div>
        </div>

        <!-- RIGHT CHAT AREA -->
        <div class="col-12 col-lg content-col d-flex flex-column bg-white rounded-end-4 card-pane">

            <!-- Header -->
            <div class="p-3 d-flex align-items-center gap-3 chat-header">
                <div class="avatar" style="width:45px;height:45px;background:#059669;">EP</div>
                <div>
                    <h6 class="mb-0 fw-semibold text-dark">Eleanor Pena</h6>
                    <small class="text-muted">Online <span class="online-dot"></span></small>
                </div>
                <div class="ms-auto d-flex align-items-center gap-2">
                    <button class="round-btn btn-ghost" title="Search chat"><i class="ph ph-magnifying-glass fs-5 text-muted"></i></button>
                    <button class="round-btn btn-ghost" title="More"><i class="ph ph-dots-three-outline fs-5 text-muted"></i></button>
                </div>
            </div>

            <!-- Messages -->
            <div class="flex-grow-1 p-4 overflow-auto chat-body">
                <div class="d-flex flex-column" style="gap: 2rem !important;">
                    

                    <div class="d-flex">
                        <div class="bubble bubble-you">
                            Hi Eleanor! Did you check the new design?
                            <div class="msg-time">10:12 AM</div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <div class="bubble bubble-me">
                            Yes, looks great! Let's finalize tomorrow.
                            <div class="msg-time text-end">10:13 AM</div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="bubble bubble-you">
                            Sure, I’ll send the updated file in the morning.
                            <div class="msg-time">10:14 AM</div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <div class="bubble bubble-me">
                            Sounds perfect 👍
                            <div class="msg-time text-end">10:15 AM</div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Input -->
            <div class="p-3 d-flex align-items-center gap-2 chat-input">
                <button class="round-btn btn-ghost" title="Emoji"><i class="ph ph-smiley text-muted fs-5"></i></button>
                <button class="round-btn btn-ghost" title="Attach"><i class="ph ph-paperclip text-muted fs-5"></i></button>
                <input type="text" class="form-control input-field" placeholder="Type a message...">
                <button class="round-btn btn-send" title="Send"><i class="ph ph-paper-plane-right fs-5"></i></button>
            </div>

        </div>
    </div>
</div>
@endsection
