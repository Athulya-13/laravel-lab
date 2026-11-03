@extends('layouts.app')

@section('content')
<h1>Add Student</h1>

<form action="{{ route('students.store') }}" method="POST">
    @csrf

    Roll Number: <input name="roll_no" required><br>
    Name: <input name="name" required><br>
    Email: <input name="email" type="email" required><br>
    Department: <input name="department" required><br>
    Semester: <input name="semester" type="number" required><br>
    CGPA: <input name="cgpa" type="number" step="0.01" required><br>

    <button type="submit">Save Student</button>
</form>
@endsection