@extends('user.layouts.master')

@section('content')
<div class="container">
    <h2>My Exams</h2>
    <ul>
        @foreach($exams as $exam)
            <li>
                <a href="{{ route('exams.show', $exam->id) }}">
                    {{ $exam->title }} - {{ $exam->exam_date->format('Y-m-d H:i') }}
                </a>
            </li>
        @endforeach
    </ul>

    {{ $exams->links() }}
</div>
@endsection
