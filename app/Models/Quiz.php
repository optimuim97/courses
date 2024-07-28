<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'course_id',
        'title',
        'type'
    ];

    public static $rules = [
        'course_id' => 'required',
        'title' => 'required|string',
        'type' => 'string'
    ];

    use HasFactory;
}
