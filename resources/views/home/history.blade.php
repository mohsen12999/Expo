@extends('layouts.home',compact('categories','expo_categories','pages','footer', 'facebook', 'twitter', 'instagram',
'telegram','logo','tel'))

@section('title', __('words.history'))

@section('myheader')
<link type="text/css" rel="stylesheet" href="{{ asset('css/lightslider/lightslider.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('/lib/lightGallery/css/lightgallery.min.css') }}" />
@endsection

@section('content')

<div class="page-content">
    <div class="container info">
        <h3>{{__('words.history')}}</h3>


        <div class="form-group">
            <input type="text" class="form-control" onkeyup="searchFunction(this)"
                placeholder="{{ __('words.SearchExpoPlaceHolder')}}">
        </div>

        <div class="row">

            @foreach ($expos as $expo)
            <div class="card-span col-sm-4 col-xs-6 mb-2" data-title="{{$expo->title}}"
                data-description="{{$expo->description}}">

                <div class="card">
                    <img class="card-img-top" src="{{ asset($expo->pic) }}" alt="{{$expo->title}}">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{url('/expo/'.$expo->id)}}">{{$expo->title}}</a></h5>
                        <p class="card-text">{{$expo->description}}</p>

                        @if ($expo->video && $expo->video!='')
                        <a href="{{ asset($expo->video) }}" target="_blank">
                            <img src="{{ asset('/img/video.png')}}" style="width: 50px" alt="expo video"></a>
                        @endif


                        @if ($expo->expoImages)

                        <img id="gallery_img_{{ $expo->id }}" src="{{asset('/img/catalogue.png')}}"
                            style="width: 50px; cursor:pointer" onclick="show_gallery_{{ $expo->id }}()">
                        <script>
                            function show_gallery_{{ $expo->id }}() {
                                $(this).lightGallery({
                                    dynamic: true,
                                    dynamicEl: [
                                        @foreach ($expo->expoImages as $expoImage)
                                            { "src": '{{url($expoImage->path)}}', 'thumb': '{{url($expoImage->path)}}', },
                                        @endforeach
                                    ]
                                });
                                }
                        </script>

                        {{-- <div class="row">
                            @foreach ($expo->expoImages as $expoImage)
                            <div class="col-md-3 col-xs-6">
                                <a href="{{url($expoImage->path)}}" target="_blank">
                        <img src="{{url($expoImage->path)}}" style="max-width: 100%">
                        </a>
                    </div>
                    @endforeach
                </div> --}}

                @endif
                <p> {{$expo->start->format('Y-m-d')}} - {{$expo->end->format('Y-m-d')}}</p>
            </div>
        </div>

    </div>
    @endforeach

</div>
</div>
</div>

@endsection

@section('myfooter')
<script src="{{ asset('/lib/lightGallery/js/lightgallery-all.min.js') }}"></script>
<script src="{{ asset('js/lightslider/lightslider.js') }}"></script>

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
