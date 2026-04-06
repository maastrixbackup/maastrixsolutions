<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
        protected $fillable = [
        'heading','content1', 'content2', 'content3','content4','content5','image'
    ];
}
