<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
use Validator;
use Illuminate\Support\Str;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Courses::latest()->get();
          return view('Admin.courses.index' , compact('courses')  );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all() , [
                'course_title' => 'required',
                'course_type' => 'required',
                'course_price' => 'required',
                'course_level' => 'required',
                'course_description' => 'required',
                'course_duration_weeks' => 'required',
                'course_total_hours' => 'required',
                'course_language' => 'required',
        ]);

        if($validation->fails()){
            return response()->json([
                'status' => false,
                'errors' => $validation->errors(),
                'redirect' => route('courses.create')
            ]);     
        }else{


            //course thumbnail file uploading
            $fillname = null;
            if($request->hasfile('course_thumbnail')){
                $file = $request->file('course_thumbnail');
                $fillname = md5($file->getClientOriginalName()) . "." . time() . "." . date('d-m-y') . "." . $file->getClientOriginalExtension();
                $file->move(public_path('admin/course_thumbnail/') , $fillname);
                 $course_thumbnail = $fillname;
            }else{
                 $course_thumbnail  = "no found course thumbnail";
            }

             //course book file uploading
            $fillname = null;
            if($request->hasfile('course_book')){
                $file = $request->file('course_book');
                $fillname = md5($file->getClientOriginalName()) . "." . time() . "." . date('d_m_y') . "." . $file->getClientOriginalExtension();
                $file->move(public_path('admin/course_book/') , $fillname);
               $course_book = $fillname;
            }else{
                 $course_book = "no found course book";
            }

           // course video file uploading
                $fillname = null;
                $videos = [];

                if ($request->hasFile('course_videos')) {
                    foreach ($request->file('course_videos') as $video) {
                        $fillname = md5($video->getClientOriginalName()) . "." . time() . "." . date('d-m-y') . "." . $video->getClientOriginalExtension();
                        $video->move(public_path('admin/course_videos/'), $fillname);
                        $videos[] = $fillname; // ✅ Actual filename save ho raha hai
                    }

                    $course_videos = implode(',', $videos); // ✅ Multiple names ko ek string me convert
                } else {
                    $course_videos = 'no found video';
                }




           Courses::create([
            'course_title' => $request->course_title,
            'course_type' => $request->course_type,
            'course_price' => $request->course_price,
            'course_level' => $request->course_level,
            'course_description' => $request->course_description,
            'course_duration_weeks' => $request->course_duration_weeks,
            'course_total_hours' => $request->course_total_hours,
            'course_language' => $request->course_language,
            'course_thumbnail' => $course_thumbnail ?? 'no found course thumbnail',
            'course_book' => $course_book ?? 'no found course book',
            'course_video' => $course_videos, // comma-separated filenames
            ]);

             return response()->json([
                'status' => true,
                'message' => 'Course created successfully!',
                'redirect' => route('courses.index')
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses = Courses::find($id);
        return view('Admin.courses.edit' , compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation = Validator::make($request->all() , [
                'course_title' => 'required',
                'course_type' => 'required',
                'course_price' => 'required',
                'course_level' => 'required',
                'course_description' => 'required',
                'course_duration_weeks' => 'required',
                'course_total_hours' => 'required',
                'course_language' => 'required',
        ]);

        if($validation->fails()){
            return response()->json([
                'status' => false,
                'errors' => $validation->errors,
                'redirect' => route('courses.edit')
            ]);
        }else{
            $course = Courses::find($id);
            $course->update([
                'course_title' => $request->course_title,
                'course_type' => $request->course_type,
                'course_price' => $request->course_price,
                'course_level' => $request->course_level,
                'course_description' => $request->course_description,
                'course_duration_weeks' => $request->course_duration_weeks,
                'course_total_hours' => $request->course_total_hours,
                'course_language' => $request->course_language,
                'course_thumbnail' => 'NO FOUND IMAGE',
                'course_book' => 'NO FOUND IMAGE',
                 'course_video' => 'NO FOUND VIDEO' , // comma-separated filenames
            ]);

            return redirect()->route('courses.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
