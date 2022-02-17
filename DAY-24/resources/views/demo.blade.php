@extends('master')

@section('title')
    Demo Page
@endsection

@section('body')
    <h1>{{$a}}</h1>
    <h1>{{$b}}</h1>
    <h2>{{$email}}</h2>

    @foreach($array1 as $key => $value)
        @foreach($value as $item)
            <span>{{$item}}</span>
        @endforeach <br/>
    @endforeach
    <h5>Out of range...</h5>

@endsection
