@extends('layouts.app')

@section('content')
<h1>Students List</h1>

@if(session('status'))
    <p style="color:green">{{ session('status') }}</p>
@endif

<a href="{{ route('students.create') }}">Add Student</a>

@foreach($students as $student)
    <p>
        {{ $student->name }} -
        {{ $student->roll_no }}
        <a href="{{ route('students.show', $student->id) }}">View</a>
    </p>
@endforeach
@endsection