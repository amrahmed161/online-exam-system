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
        'created_by',  // المستخدم اللي أنشأ الامتحان
        'duration',
    ];

    // علاقة الامتحان بالـ User (اللي هو المُنشئ)
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // علاقة الامتحان بالـ Subject (لو عندك كورسات/مواد)
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    // علاقة الامتحان بالأسئلة
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
