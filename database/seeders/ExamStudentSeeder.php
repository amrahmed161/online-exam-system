<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Exam;
use App\Models\User;
class ExamStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = User::where('role', 'student')->get();
        $exams = Exam::all();

        foreach ($exams as $exam) {
            $randomStudents = $students->random(rand(1, min(5, $students->count())));
            $exam->students()->attach($randomStudents);
        }
    }
}
