<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutservice extends Model
{
    use HasFactory;
    protected $fillable =[
        'about_heading','about_content','about_image'
    ];
}
