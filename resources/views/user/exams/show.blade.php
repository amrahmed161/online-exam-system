@extends('user.layouts.master')

@section('content')
<div class="container">
    <h2>{{ $exam->title }}</h2>
    <p>{{ $exam->description }}</p>
    <p>Duration: {{ $exam->duration }} minutes</p>
    <p>Date: {{ $exam->exam_date->format('Y-m-d H:i') }}</p>

    <h4>Questions</h4>
    <ul>
        @foreach($questions as $question)
            <li>{{ $question->question_text }}</li>
        @endforeach
    </ul>
</div>
@endsection
