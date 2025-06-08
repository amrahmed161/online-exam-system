@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header"><h3 class="card-title">Add Exam</h3></div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.exams.store') }}">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                </div>

                <div class="form-group">
                    <label>Exam Date</label>
                    <input type="datetime-local" name="exam_date" class="form-control" value="{{ old('exam_date') }}" required>
                </div>

                <div class="form-group">
                    <label>Duration (minutes)</label>
                    <input type="number" name="duration" class="form-control" value="{{ old('duration') }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('admin.exams.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
