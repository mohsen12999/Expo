@extends('layouts.theme',['images'=>$booth->images])

@section('title', 'Booth name')

@section('myheader')
@endsection

@section('content')

    <div
        id="theme-3"
        class="theme-div"
    >

      <div>
        <div class="company-name-row">
          <h1 class="company-name">{{$booth->title}}</h1>
        </div>
        <div class="poster">
          <img src="{{$booth->pic}}" alt="{{$booth->name}} pic" alt="" />
        </div>

        <div class="bottom-logo">
          <div>
            <h1 class="company-name">{{$booth->title}}</h1>
            <img class="logo" src="{{$booth->user->avatar}}" alt="{{$booth->user->name}} pic" />
          </div>
        </div>
      </div>

    </div>

@endsection

@section('myfooter')
@endsection
