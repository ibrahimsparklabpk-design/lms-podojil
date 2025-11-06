<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = [
       'course_title',
        'course_type',
        'course_price',
        'course_level',
        'course_description',
        'course_duration_weeks',
        'course_total_hours',
        'course_language',
        'course_thumbnail',
        'course_book',
        'course_video',
    ];
}
