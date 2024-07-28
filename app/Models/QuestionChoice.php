<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionChoice extends Model
{
    protected $table = 'question_choices';
    protected $fillable = [
        'question_id',
        'designation',
        'content',
    ];

    public static $rules = [
        'question_id' => 'required',
        'designation' => 'required',
        'content' => 'required'
    ];

    use HasFactory;
}
