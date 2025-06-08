@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <h4>Edit Question</h4>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.questions.update', $question->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Exam</label>
                    <select name="exam_id" class="form-control" required>
                        @foreach($exams as $exam)
                            <option value="{{ $exam->id }}" {{ $exam->id == $question->exam_id ? 'selected' : '' }}>
                                {{ $exam->title }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Question</label>
                    <textarea name="question_text" class="form-control" required>{{ $question->question_text }}</textarea>
                </div>

                <div class="form-group">
                    <label>Option A</label>
                    <input type="text" name="option_a" class="form-control" value="{{ $question->option_a }}" required>
                </div>

                <div class="form-group">
                    <label>Option B</label>
                    <input type="text" name="option_b" class="form-control" value="{{ $question->option_b }}" required>
                </div>

                <div class="form-group">
                    <label>Option C</label>
                    <input type="text" name="option_c" class="form-control" value="{{ $question->option_c }}" required>
                </div>

                <div class="form-group">
                    <label>Option D</label>
                    <input type="text" name="option_d" class="form-control" value="{{ $question->option_d }}" required>
                </div>

                <div class="form-group">
                    <label>Correct Answer</label>
                    <select name="correct_answer" class="form-control" required>
                        <option value="A" {{ $question->correct_answer == 'A' ? 'selected' : '' }}>A</option>
                        <option value="B" {{ $question->correct_answer == 'B' ? 'selected' : '' }}>B</option>
                        <option value="C" {{ $question->correct_answer == 'C' ? 'selected' : '' }}>C</option>
                        <option value="D" {{ $question->correct_answer == 'D' ? 'selected' : '' }}>D</option>
                    </select>
                </div>

                <button class="btn btn-primary" type="submit">Update</button>
                <a href="{{ route('admin.questions.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
