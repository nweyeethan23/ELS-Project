<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'course_id'
    ];

    // Relationship: An apply course belongs to one user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship: An apply course belongs to one course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
