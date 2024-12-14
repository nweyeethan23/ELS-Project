<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'nationality', 'age', 'phone', 'social_id', 'email', 'course_id', 'hear_about',
        'specify_heard_about', 'question', 'check_read_status', 'status'
    ];

    // Relationship: A contact belongs to one course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
