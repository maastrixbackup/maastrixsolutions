<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_opening extends Model
{
    use HasFactory;
     protected $fillable = [
        'job_title', 'job_description','skills','experience', 'location'
    ];
}
