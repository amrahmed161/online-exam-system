@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Exam: {{ $exam->title }}</h2>
    <form action="{{ route('exams.submit', $exam->id) }}" method="POST">
        @csrf
        @foreach($exam->questions as $index => $question)
            <div class="mb-4">
                <label><strong>Question {{ $index + 1 }}:</strong> {{ $question->title }}</label>
                <input type="text" name="answers[{{ $question->id }}]" class="form-control" required>
            </div>
        @endforeach
        <button type="submit" class="btn btn-success">Submit Answers</button>
    </form>
</div>
@endsection

