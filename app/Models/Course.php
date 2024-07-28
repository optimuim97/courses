<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    use HasFactory;

    protected $fillable = [
        "category_id",
        "speciality_id",
        "title",
        "description"
    ];

    public static $rules = [
        "category_id" => 'required',
        "speciality_id" => 'required',
        "title" => 'required',
        "description" => 'required'
    ];

}
