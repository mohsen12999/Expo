@extends('layouts.theme',['images'=>$booth->images])

@section('title', 'Booth name')

@section('myheader')
@endsection

@section('content')

    <div
        id="theme-2"
        class="theme-div"
    >
      <div class="company-name-row">
        <h1 class="company-name">{{$booth->title}}</h1>
        <h1 class="company-name">{{$booth->title}}</h1>
      </div>

      <div class="poster">
        <img src="{{$booth->pic}}" alt="{{$booth->name}} pic" alt="" />
      </div>

      <div class="bottom-logo">
        <img class="logo left" src="{{$booth->user->avatar}}" alt="{{$booth->user->name}} pic" />
        <img class="logo right" src="{{$booth->user->avatar}}" alt="{{$booth->user->name}} pic" />
      </div>
    </div>

@endsection

@section('myfooter')
@endsection