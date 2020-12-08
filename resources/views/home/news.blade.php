@extends('layouts.home',compact('categories','expo_categories','pages','footer', 'facebook', 'twitter', 'instagram', 'telegram','logo','tel'))

@section('title', __('words.News'))

@section('myheader')
@endsection

@section('content')

<div class="page-content">
    <div class="container info">
        <h3>{{__('words.News')}}</h3>

        <div class="row">

            @if (count($posts)==0)
                <h3 class="no-news">{{ __('words.NoNews') }}</h3>
            @else
                <div class="col-xs-12">

                    @foreach ($posts as $post)
                        <div class="row post-div">
                            <div class="col-sm-4 col-xs-12 img-div">
                                <img src="{{ asset($post->pic) }}" alt="{{$post->page}}" />
                            </div>
                            <div class="col-sm-8 col-xs-12 text-div">
                                <h4>{{$post->title}}</h4>
                                <p>{{$post->abstract}}</p>
                                <a href="/post/{{$post->id}}" class="btn btn-info">{{__('words.More')}}</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            @endif
        </div>
    </div>
</div>

@endsection


@section('myfooter')
@endsection
