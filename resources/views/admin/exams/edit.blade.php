@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header"><h3 class="card-title">Edit Exam</h3></div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.exams.update', $exam->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $exam->title) }}" required>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control">{{ old('description', $exam->description) }}</textarea>
                </div>

                <div class="form-group">
                    <label>Exam Date</label>
                    <input type="datetime-local" name="exam_date" class="form-control" value="{{ old('exam_date', \Carbon\Carbon::parse($exam->exam_date)->format('Y-m-d\TH:i')) }}" required>
                </div>

                <div class="form-group">
                    <label>Duration (minutes)</label>
                    <input type="number" name="duration" class="form-control" value="{{ old('duration', $exam->duration) }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.exams.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
