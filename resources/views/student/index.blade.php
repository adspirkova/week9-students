@extends('layouts/main')

@section('content')

<h1>The students list</h1>

{{-- ----Q10------ --}}
@foreach ($students as $student)
   <p>{{$student->name}}</p> 
   <img class="portrait" src="{{ asset('img/'.$student->slug.'.jpg') }}" alt="" style="height:40px ; width:40px">
@endforeach

@endsection