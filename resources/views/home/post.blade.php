@extends('layouts.home',compact('categories','expo_categories','pages','footer', 'facebook', 'twitter', 'instagram', 'telegram','logo','tel'))

@section('title', __('words.News'))

@section('myheader')
@endsection

@section('content')

<div class="page-content">
    <div class="container info">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb news">
              <li class="breadcrumb-item"><a href="#">{{__('words.News')}}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$post->title}}</li>
            </ol>
        </nav>

        <div class="row single-post">
            <div class="col-xs-12">

                <div class="row">
                    <div class="col-12 post-img">
                        <img src="{{ asset($post->pic) }}" alt="{{$post->page}}" />
                    </div>
                    <div class="col-12 text-div">
                        <h2 class="post-title">{{$post->title}}</h2>
                        <p class="post-abstract">{{$post->abstract}}</p>
                        <p>{{$post->description}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <a href="/news" class="btn btn-info">{{__('words.NewsList')}}</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection


@section('myfooter')
@endsection
