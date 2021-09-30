<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'dob',
        'gender',
        'nationality',
        'email',
        'phone_no',
        'father_name',
        'father_phone_no',
        'mother_name',
        'mother_phone_no',
        'address',
        'grade_id',
        'note',
        'status',
    ];
    /**
     * Get the user that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student_results()
    {
        return $this->hasMany(StudentResult::class);
    }
    public function student_comments()
    {
        return $this->hasMany(StudentsComment::class);
    }


}
