@extends('layouts.home',compact('categories','expo_categories','pages','footer', 'facebook', 'twitter', 'instagram', 'telegram','logo','tel'))


@section('title', $page->title)

@section('myheader')
@endsection

@section('content')

{!! $page->description !!}

@endsection


@section('myfooter')
@endsection
