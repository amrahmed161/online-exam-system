@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-3">
        <h4>All Questions</h4>
        <a href="{{ route('admin.questions.create') }}" class="btn btn-primary">Add Question</a>
    </div>

    <div class="card">
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Exam</th>
                        <th>Question</th>
                        <th>Correct Answer</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($questions as $question)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $question->exam->title }}</td>
                        <td>{{ Str::limit($question->question_text, 50) }}</td>
                        <td>{{ $question->correct_answer }}</td>
                        <td>
                            <a href="{{ route('admin.questions.edit', $question->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.questions.destroy', $question->id) }}" method="POST" style="display:inline-block;">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
