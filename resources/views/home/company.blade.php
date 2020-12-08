@extends('layouts.home',compact('categories','expo_categories','pages','footer', 'facebook', 'twitter', 'instagram', 'telegram','logo','tel'))

@section('title', __('words.companies'))

@section('myheader')
@endsection

@section('content')

<div class="page-content">
    <div class="container info">
        <h3>{{__('words.company')}}</h3>

        <div class="row post-div">
            <div class="col-sm-4 col-xs-12 img-div">
                <img src="{{ asset($user->avatar) }}" alt="{{$user->name}}" />
            </div>
            <div class="col-sm-8 col-xs-12 text-div">
                <h4>{{$user->name}}</h4>
                <p><Address>Address: {{$user->address}}</Address></p>
                <p>Tel: {{$user->tel}}</p>
                <p>Country: {{$user->country}}</p>
                <p>Website: <a href="{{$user->website}}" target="_blank">{{$user->website}}</a> </p>
            </div>
        </div>

    </div>
</div>

@endsection


@section('myfooter')
@endsection
