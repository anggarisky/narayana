<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseVideo extends Model
{
    use HasFactory;

    protected $table = 'course_videos';

    protected $fillable = [
        'video_url',
        'video_title',
        'id_course'
    ];

    protected $hidden = [

    ];
}