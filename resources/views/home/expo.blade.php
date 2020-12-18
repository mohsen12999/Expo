@extends('layouts.home',compact('categories','expo_categories','pages','footer', 'facebook', 'twitter', 'instagram',
'telegram','logo','tel'))

@section('title', __('words.Booths'))

@section('myheader')
<link rel="stylesheet" href="{{ asset('/css/expo-map.css') }}">
@endsection

@section('content')

<div class="page-content">
    <div class="container info">
        <h3>{{$expo->title}}</h3>

        <div class="row">

            <div class="expo-map col-12">
                <img src="{{asset("/img/expo-map.jpg")}}" style="width: 100%" alt="expo-map" />

                @foreach ($booth_numbers as $booth_number)
                @if (in_array($booth_number,array_column($booths_array,'booth_map_id')))
                @php
                $this_booth = $booths->where("booth_map_id","=",$booth_number)->first();
                @endphp
                <a href="{{url('/map/'.$expo->id.'/'.$booth_number)}}" class="btn btn-primary btn-{{$booth_number}}"
                    title="{{($this_booth && $this_booth->user)?$this_booth->user->name:""}}">{{$booth_number}}</a>
                @else
                <a href="#" class="btn btn-secondary btn-{{$booth_number}}" title="Empty Booth">{{$booth_number}}</a>
                @endif
                @endforeach

            </div>

            <div class="card mt-4 mb-4" style="width: 100%">
                <div class="card-header">
                    {{ __('words.comments')}}
                </div>

                <ul class="list-group list-group-flush">

                    @foreach ($comments as $comment)
                    <li class="list-group-item"><b>{{$comment->name}}</b>: {{$comment->description}}</li>
                    @endforeach

                    <li class="list-group-item">
                        <form method="POST" action="{{ url('/expo/'.$expo->id) }}"> @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="ali saeedi">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="name@example.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">send</button>
                        </form>
                    </li>
                </ul>
            </div>


            <div class="card mt-4 mb-4" style="width: 100%">
                <div class="card-header">
                    {{ __('words.Images')}}
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($images as $image)
                        <div class="col">
                            <img src="{{$images->path}}" alt="{{$images->title}}" class="img-thumbnail"
                                style="max-width: 200px">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>



            @if (count($booths)==0)
            <h3 class="no-news">{{ __('words.NoBooths') }}</h3>
            @else

            <div class="col-xs-12 ">
                <div class="form-group">
                    Search: <input type="text" class="form-control" onkeyup="searchFunction(this)">
                </div>
            </div>

            <div class="col-xs-12 ">

                @foreach ($booths as $booth)
                <div class="booth-row row post-div" data-title="{{$booth->title}}" data-user="{{$booth->user->name}}">
                    <div class="col-sm-4 col-xs-12 img-div">
                        <img src="{{ asset($booth->pic) }}" alt="{{$booth->page}}" />
                    </div>
                    <div class="col-sm-8 col-xs-12 text-div">
                        <h4>{{$booth->title}}</h4>
                        <p>By {{$booth->user->name}} <a href="{{ url('/company/'.$booth->user->id) }}"
                                target="_blank"><img src="{{ asset('/img/bussiness-card.png')}}" style="width: 50px"
                                    alt=""></a> </p>
                        @if ($booth->user && $booth->user->website && $booth->user->website!="") <p>Website: <a
                                href="{{$booth->user->website}}" target="_blank">{{$booth->user->website}}</a></p>
                        @endif

                        <p>{{$booth->description}}</p>
                        <p class="booth-files">
                            @if ($booth->video && $booth->video!='')
                            <a href="{{ asset($booth->video) }}" target="_blank"><img src="{{ asset('/img/video.png')}}"
                                    style="width: 50px" alt=""></a>
                            @endif
                            @if ($booth->catalog && $booth->catalog!='')
                            <a href="{{ asset($booth->catalog) }}" target="_blank"><img
                                    src="{{ asset('/img/catalogue.png')}}" style="width: 50px" alt=""></a>
                            @endif
                        </p>

                        <a href="/booth/{{$booth->id}}" class="btn btn-info">{{__('words.ShowBooth')}}</a>
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
<script>
    function searchFunction(e) {
        const sreach = e.value.toLocaleLowerCase();
        var cards = document.querySelectorAll(".booth-row");
        for (let i = 0; i < cards.length; i++) {
            const element = cards[i];
            const title = element.attributes["data-title"].value.toLocaleLowerCase();
            const user = element.attributes["data-user"].value.toLocaleLowerCase();
            element.style.display = (title.includes(sreach) || user.includes(sreach))?"block":"none";
        }
    }
</script>
@endsection