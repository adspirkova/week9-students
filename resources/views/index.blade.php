@extends('layouts/main')

@section('content')
<div class="page page-home">
    
    <img src="img/hogwarts-logo.png" alt="" class="logo">
    <h1>Hogwarts<br><small>Detention system</small></h1>

    <div class="desc">
        Did a student do something wrong? Give him detention, the number 1 punishment at Hogwarts School of Witchcraft & Wizardry.
    </div>

    <a href="#" class="report">Click on the image to give a detention</a>

    <div class="students">
        <a href="{{action('StudentController@show', 'harry')}}">
            <img src="img/harry.jpg" alt="">
        </a>
        <a href="{{action('StudentController@show', 'hermione')}}"">
            <img src="img/hermione.jpg" alt="">
        </a>
        <a href="{{action('StudentController@show', 'ron')}}"">
            <img src="img/ron.jpg" alt="">
        </a>
        <a href="{{action('StudentController@show', 'tom')}}"">
            <img src="img/tom.jpg" alt="">
        </a>
        <a href="{{action('StudentController@show', 'luna')}}"">
            <img src="img/luna.jpg" alt="">
        </a>
    </div>

</div>
@endsection
