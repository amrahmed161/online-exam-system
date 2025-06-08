@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <h4>Add New Question</h4>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.questions.store') }}">
                @csrf

                <div class="form-group">
                    <label>Exam</label>
                    <select name="exam_id" class="form-control" required>
                        <option disabled selected>Select Exam</option>
                        @foreach($exams as $exam)
                            <option value="{{ $exam->id }}">{{ $exam->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Question</label>
                    <textarea name="question_text" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label>Option A</label>
                    <input type="text" name="option_a" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Option B</label>
                    <input type="text" name="option_b" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Option C</label>
                    <input type="text" name="option_c" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Option D</label>
                    <input type="text" name="option_d" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Correct Answer</label>
                    <select name="correct_answer" class="form-control" required>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                </div>

                <button class="btn btn-success" type="submit">Save</button>
                <a href="{{ route('admin.questions.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
