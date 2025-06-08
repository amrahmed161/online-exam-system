@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <h1>Exams List</h1>
    <a href="{{ route('admin.exams.create') }}" class="btn btn-primary mb-3">Add New Exam</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Exam Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($exams as $exam)
            <tr>
                <td>{{ $exam->title }}</td>
                <td>{{ $exam->exam_date }}</td>
                <td>
                    <a href="{{ route('admin.exams.edit', $exam->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.exams.destroy', $exam->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
