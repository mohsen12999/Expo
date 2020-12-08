@extends('layouts.theme',['images'=>$booth->images])

@section('title', 'Booth name')

@section('myheader')
@endsection

@section('content')

    <div
        id="theme-1"
        class="theme-div"
    >
        <h1 class="company-name">{{$booth->title}}</h1>
        <div class="logo-div">
            <img src="{{$booth->user->avatar}}" class="logo left" alt="{{$booth->user->name}} pic"  />
            <img src="{{$booth->user->avatar}}" class="logo right" alt="{{$booth->user->name}} pic"  />
        </div>
        <div class="poster">
            <img src="{{$booth->pic}}" alt="{{$booth->name}} pic" alt="" />
        </div>

        <div class="bottom-logo">
            <img src="{{$booth->user->avatar}}" />
        </div>
    </div>

@endsection

@section('myfooter')
@endsection