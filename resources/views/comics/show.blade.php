@extends('layouts.app')
@section('content')
<div class="paralax-img">
    
</div>
<div class="blue-line">
    <div class="container">
        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
    </div>
</div>

<div class="col-2 mb-5 text-start">
    <div class="comic ">
        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
    </div>
    <h4>{{$comic['title']}}</h4>
</div>
@endsection