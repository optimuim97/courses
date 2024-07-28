<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title',
        'content',
        'image'
    ];

    public static $rules = [
        'course_id' => 'required',
        'title' => 'required|max:255',
        'content' => 'required|max:255',
        'image' => 'required|max:255'
    ];
}
