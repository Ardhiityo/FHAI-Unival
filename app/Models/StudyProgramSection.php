<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyProgramSection extends Model
{
    protected $fillable = [
        'title',
        'image_url',
        'description',
        'detail_url',
        'degree',
        'academic_degree',
    ];
}
