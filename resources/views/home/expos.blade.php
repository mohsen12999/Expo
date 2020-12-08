@extends('layouts.home',compact('categories','expo_categories','pages','footer', 'facebook', 'twitter', 'instagram', 'telegram','logo','tel'))

@section('title', $menu)

@section('myheader')
@endsection

@section('content')

<div class="page-content">
    <div class="container info">
        <h3>{{$menu}}</h3>

        <div class="form-group">
            <input type="text" class="form-control" onkeyup="searchFunction(this)" placeholder="{{ __('words.SearchExpoPlaceHolder')}}">
        </div>

        <div class="row">

            @foreach ($expos as $expo)
            <div class="card-span col-sm-3 col-xs-6 mb-2" data-title="{{$expo->title}}" data-description="{{$expo->description}}">

                <div class="card">
                    <img class="card-img-top" src="{{ asset($expo->pic) }}" alt="{{$expo->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$expo->title}}</h5>
                        <p class="card-text">{{$expo->description}}</p>
                        @if ($expo->video && $expo->video!='')
                            <a href="{{ asset($expo->video) }}" target="_blank"><i class="fas fa-file-video"></i></a>
                        @endif
                        <a href="{{url('/expo/'.$expo->id)}}" class="btn btn-primary">{{__('words.ShowExpo')}}</a>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection


@section('myfooter')
<script>
    function searchFunction(e) {
        const sreach = e.value.toLocaleLowerCase();
        var cards = document.querySelectorAll(".card-span");
        for (let i = 0; i < cards.length; i++) {
            const element = cards[i];
            const title = element.attributes["data-title"].value.toLocaleLowerCase();
            const description = element.attributes["data-description"].value.toLocaleLowerCase();
            element.style.display = (title.includes(sreach) || description.includes(sreach))?"block":"none";
        }
    }
</script>
@endsection
