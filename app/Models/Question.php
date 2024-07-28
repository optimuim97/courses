<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'quiz_id',
        'title',
        'number',
        'content',
        'explication',
        'comment',
    ];

    public static $rules = [
        'quiz_id' => 'required',
        'title' => 'required',
        'number' => 'required',
        'content' => 'required'
    ];
}
