<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
    'title',
    'subject_id',
    'user_id',
    'duration',
];

public function subject()
{
    return $this->belongsTo(Subject::class);
}

public function teacher()
{
    return $this->belongsTo(User::class, 'user_id');
}

public function questions()
{
    return $this->hasMany(Question::class);
}

public function studentAnswers()
{
    return $this->hasMany(StudentAnswer::class);
}

}
