@extends('layouts/main')

@section('content')

<h1>The students list</h1>

{{-- ----Q10------ --}}
@foreach ($students as $student)
   <p>{{$student->name}}</p> 
@endforeach

@endsection