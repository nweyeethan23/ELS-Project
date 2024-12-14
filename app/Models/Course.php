<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'image', 'class_size', 'schedule', 'duration', 'start_date'
    ];

    public function applyCourses()
    {
        return $this->hasMany(ApplyCourse::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
