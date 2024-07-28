<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;

    protected $fillable = [
        "designation",
        "description",
        "image"
    ];

    public static $rules=[
        "designation"=> 'required',
        "description"=> 'max:255'
    ];
}
