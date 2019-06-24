@extends('layouts/main')

@section('content')
<div class="page page-student">

    <section class="info">

        <img class="portrait" src="{{ asset('img/'.$student->slug.'.jpg') }}" alt="">

        <div class="data">
            <h1>{{ $student->name }}</h1>

            <div class="story">
                {!! nl2br($student->history) !!}
            </div>
        </div>

        <div class="lessons">
            <h2>Lessons</h2>
            From {{ date('g:i A', strtotime($student->available_from)) }} to {{ date('g:i A', strtotime($student->available_until)) }}.

            <div class="status unavailable">Current status: <span>Unavailable</span></div>
        </div>

    </section>

    <section class="detention-assign">
        <h2>Give detention</h2>

        {{-- Q11 --}}

        <form action="{{action('StudentController@detention')}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="student_id" value="{{$student->id}}">
            <input type="text" name="subject" placeholder="Reason for detention">

            <textarea name="description" placeholder="Thorough description"></textarea>

            <input type="submit" value="Send an owl">
        </form>

        {{-- end of Q11 --}}
    </section>

</div>
@endsection
