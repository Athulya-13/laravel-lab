@extends('layouts.app')

@section('content')
<h1>Student Details</h1>

<p>Name: {{ $student->name }}</p>
<p>Roll Number: {{ $student->roll_no }}</p>
<p>Email: {{ $student->email }}</p>
<p>Department: {{ $student->department }}</p>
<p>Semester: {{ $student->semester }}</p>
<p>CGPA: {{ $student->cgpa }}</p>
@endsection