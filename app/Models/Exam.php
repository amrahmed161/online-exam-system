<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
        protected $fillable = [
        'title',
        'description',
        'exam_date',
        'created_by',
        'duration',
    ];


    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function students()
    {
        return $this->belongsToMany(User::class, 'exam_student', 'exam_id', 'student_id');
    }


    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function exams()
{
    return $this->belongsToMany(Exam::class);
}

}
