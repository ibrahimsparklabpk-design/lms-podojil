<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
use Validator;
use File;
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
                'course_slug' => 'required',
                'course_type' => 'required',
                'course_price' => 'required',
                'course_level' => 'required',
                'course_description' => 'required',
                'course_duration_weeks' => 'required',
                'course_total_hours' => 'required',
                'course_language' => 'required',
                 'status' => 'required',
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
            'course_slug' => $request->course_slug,
            'course_type' => $request->course_type,
            'course_price' => $request->course_price,
            'course_level' => $request->course_level,
            'course_description' => $request->course_description,
            'course_duration_weeks' => $request->course_duration_weeks,
            'course_total_hours' => $request->course_total_hours,
           'status' => $request->status ,
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
        $course = courses::find($id);
        return view('Admin.courses.view' , compact('course'));
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
    // ===== Validation =====
    $validation = Validator::make($request->all(), [
        'course_title' => 'required',
         'course_slug' => 'required',
        'course_type' => 'required',
        'course_price' => 'required',
        'course_level' => 'required',
        'course_description' => 'required',
        'status' => 'required',
        'course_duration_weeks' => 'required',
        'course_total_hours' => 'required',
        'course_language' => 'required',
    ]);

    if ($validation->fails()) {
        return response()->json([
            'status' => false,
            'errors' => $validation->errors(),
            'redirect' => route('courses.edit', $id)
        ]);
    }

    // ===== Fetch the course =====
    $course = Courses::find($id);
    if (!$course) {
        return response()->json([
            'status' => false,
            'message' => 'Course not found!'
        ]);
    }

    // ===== THUMBNAIL UPLOAD =====
    $thumbnailName = $course->course_thumbnail;
    if ($request->hasFile('course_thumbnail')) {
        $file = $request->file('course_thumbnail');
        $thumbnailName = md5($file->getClientOriginalName()) . "_" . time() . "_" . date('y_m_d') . "." . $file->getClientOriginalExtension();
        $file->move(public_path('admin/course_thumbnail/'), $thumbnailName);

        // delete old thumbnail
        if ($course->course_thumbnail && File::exists(public_path('admin/course_thumbnail/' . $course->course_thumbnail))) {
            File::delete(public_path('admin/course_thumbnail/' . $course->course_thumbnail));
        }
    }

    // ===== BOOK UPLOAD =====
    $bookName = $course->course_book;
    if ($request->hasFile('course_book')) {
        $file = $request->file('course_book');
        $bookName = md5($file->getClientOriginalName()) . "_" . time() . "_" . date('y_m_d') . "." . $file->getClientOriginalExtension();
        $file->move(public_path('admin/course_book/'), $bookName);

        // delete old book
        if ($course->course_book && File::exists(public_path('admin/course_book/' . $course->course_book))) {
            File::delete(public_path('admin/course_book/' . $course->course_book));
        }
    }

    // ===== VIDEOS UPLOAD =====
    $videoNames = $course->course_video;
    $videos = [];

    if ($request->hasFile('course_videos')) {
        foreach ($request->file('course_videos') as $video) {
            $filename = md5($video->getClientOriginalName()) . "_" . time() . "_" . date('y_m_d') . "." . $video->getClientOriginalExtension();
            $video->move(public_path('admin/course_videos/'), $filename);
            $videos[] = $filename;
        }

        // combine multiple video filenames
        $videoNames = implode(',', $videos);

        // delete old videos
        if ($course->course_video) {
            foreach (explode(',', $course->course_video) as $oldVideo) {
                if (File::exists(public_path('admin/course_videos/' . $oldVideo))) {
                    File::delete(public_path('admin/course_videos/' . $oldVideo));
                }
            }
        }
    }

    // ===== UPDATE DATABASE =====
    $course->update([
        'course_title' => $request->course_title,
        'course_slug' => $request->course_slug,
        'course_type' => $request->course_type,
        'course_price' => $request->course_price,
        'course_level' => $request->course_level,
        'course_description' => $request->course_description,
        'course_duration_weeks' => $request->course_duration_weeks,
        'course_total_hours' => $request->course_total_hours,
          'status' => $request->status ,
        'course_language' => $request->course_language,
        'course_thumbnail' => $thumbnailName ?? 'NO FOUND IMAGE',
        'course_book' => $bookName ?? 'NO FOUND IMAGE',
        'course_video' => $videoNames ?? 'NO FOUND VIDEO',
    ]);

    return response()->json([
        'status' => true,
        'message' => 'Course updated successfully!',
        'redirect' => route('courses.index')
    ]);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = courses::find($id);

        // Delete course thumbnail
            if ($course->course_thumbnail && File::exists(public_path('admin/course_thumbnail/' . $course->course_thumbnail))) {
                File::delete(public_path('admin/course_thumbnail/' . $course->course_thumbnail));
            }

             // Delete course book
               if ($course->course_book && File::exists(public_path('admin/course_book/' . $course->course_book))) {
                File::delete(public_path('admin/course_book/' . $course->course_book));
            }

               // Delete course videos
                if ($course->course_video) {
                    $videos = explode(',', $course->course_video); // split comma-separated list
                    foreach ($videos as $video) {
                        $videoPath = public_path('admin/course_videos/' . $video);
                        if (File::exists($videoPath)) {
                            File::delete($videoPath);
                        }
                    }
                }

        $course->delete();


        return redirect()->back()->with('success' , 'courses delete successfully');
    }
}
