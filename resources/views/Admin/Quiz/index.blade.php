@extends('Admin.layouts.master')
 
@section('main-content')
 <div class="row gy-4 mt-4">
    <div class="col-xl-12">
        <div class="px-24 py-24 bg-white rounded-10 shadow-sm border border-neutral-40">
            <div class="d-flex align-items-center justify-content-between mb-24">
                <h6 class="mb-0 fw-semibold text-18" style="color: #1F3546;">My Quiz Attempts</h6>
                <a href="#" class="text-14 fw-medium px-16 py-8 rounded-pill transition-03"
                    style="background: linear-gradient(135deg, #1F4E8C 0%, #163B6C 100%); color: white; text-decoration: none;">
                    View all
                </a>
            </div>
            <div class="overflow-x-auto">
                <table id="example" class="display min-w-max">
                    <thead>
                        <tr class="border-bottom flex-wrap"
                            style="background: linear-gradient(135deg, #1F4E8C 0%, #163B6C 100%);">
                            <th class="text-14 fw-semibold py-16 px-20 text-white">Quiz</th>
                            <th class="text-14 fw-semibold py-16 px-20 text-white">Date</th>
                            <th class="text-14 fw-semibold py-16 px-20 text-white">Qus</th>
                            <th class="text-14 fw-semibold py-16 px-20 text-white">TM</th>
                            <th class="text-14 fw-semibold py-16 px-20 text-white">CA</th>
                            <th class="text-14 fw-semibold py-16 px-20 text-white">Result</th>
                            <th class="text-14 fw-semibold py-16 px-20 text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: #f8fafc;">
                        <!-- Record 1 -->
                        <tr class="hover-bg-neutral-20 border-bottom transition-03"
                            style="background-color: white;">
                            <td class="py-22 px-20 shadow-none line-height-1">
                                <div class="d-flex align-items-center gap-12">
                                    <div class="w-40 h-40 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm"
                                        style="background: linear-gradient(135deg, #1F3546 0%, #20282D 100%);">
                                        FP
                                    </div>
                                    <div>
                                        <span class="fw-semibold text-14 d-block"
                                            style="color: #1F3546;">Financial Planning</span>
                                        <span class="fw-normal text-12 d-block mt-1"
                                            style="color: #6b7280;">Brooklyn Simmons</span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-14 fw-semibold py-22 px-20 shadow-none line-height-1"
                                style="color: #1F3546;">
                                Jan 20, 2025
                            </td>
                            <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                style="color: #1F3546;">
                                4
                            </td>
                            <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                style="color: #1F3546;">
                                7
                            </td>
                            <td class="py-22 text-14 fw-semibold px-20 shadow-none"
                                style="color: #1F3546;">
                                1
                            </td>
                            <td class="py-22 px-20 shadow-none line-height-1">
                                <div class="fw-normal text-14 d-flex align-items-center gap-8"
                                    style="color: #1F3546;">
                                    <span class="px-16 py-4 rounded-pill fw-semibold text-12"
                                        style="background: #d1fae5; color: #065f46;">
                                        Pass
                                    </span>
                                </div>
                            </td>
                            <td class="py-22 px-20 shadow-none line-height-1">
                                <div class="d-flex align-items-center gap-12">
                                    <button
                                        class="text-16 text-neutral-500 hover-text-primary transition-03 bg-transparent border-0">
                                        <i class="ph-bold ph-pencil-simple-line"></i>
                                    </button>
                                    <button
                                        class="text-16 text-neutral-500 hover-text-primary transition-03 bg-transparent border-0">
                                        <i class="ph-bold ph-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- The rest of your records remain unchanged -->
                        <!-- Record 2, 3, 4 ... 10 -->
                        <!-- (No color edits made below) -->

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
