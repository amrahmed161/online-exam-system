<?php

namespace App\Http\Controllers\User;

use App\Models\Exam;
use App\Models\StudentAnwer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function index()
    {
                $student = Auth::user();
        $exams = $student->exams()->paginate(10);

        return view('user.exams.index', compact('exams'));
    }

     public function start($id)
    {
        $exam = Exam::with('questions')->findOrFail($id);
        return view('user.exams.start', compact('exam'));
    }
        public function submit(Request $request, $id)
    {
        $exam = Exam::findOrFail($id);
        $user = auth()->user();

        foreach ($request->answers as $questionId => $answer) {
            StudentAnwer::create([
                'student_id' => $user->id,
                'exam_id' => $exam->id,
                'question_id' => $questionId,
                'answer' => $answer,
            ]);
        }

        return redirect()->route('user.dashboard')->with('success', 'Answers submitted successfully!');
    }
    public function show(Exam $exam)
    {
        $student = Auth::user();

        if (!$student->exams->contains($exam->id)) {
            abort(403, 'You are not authorized to view this exam.');
        }

        $questions = $exam->questions;

        return view('user.exams.show', compact('exam', 'questions'));
    }
}
