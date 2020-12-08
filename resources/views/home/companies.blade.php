@extends('layouts.home',compact('categories','expo_categories','pages','footer', 'facebook', 'twitter', 'instagram', 'telegram','logo','tel'))

@section('title', __('words.companies'))

@section('myheader')
@endsection

@section('content')

<div class="page-content">
    <div class="container info">
        <h2>{{__('words.companies')}}</h2>

        <div class="form-group">
            <input type="text" class="form-control" onkeyup="searchFunction(this)" placeholder="{{ __('words.SearchCompanyPlaceHolder')}}">
        </div>

        <div class="row">
            @if (count($users)==0)
                <h3 class="mt-4 mb-4">{{ __('words.NoCompanyRegister')}}</h3>
            @else
                @foreach ($users as $user)
                <div class="col-sm-3 col-xs-6 mb-2">

                    <div class="card company-card" data-title="{{$user->title}}" data-description="{{$user->address}}">
                        <img class="card-img-top" src="{{ asset($user->avatar) }}" alt="{{$user->name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$user->title}}</h5>
                            <p class="card-text">{{$user->address}}</p>
                            <a href="/company/{{$user->id}}" class="btn btn-primary">ShowCompany</a>
                        </div>
                    </div>

                </div>
                @endforeach
            @endif

        </div>
    </div>
</div>


@endsection

@section('myfooter')
<script>
    function searchFunction(e) {
        const sreach = e.value.toLocaleLowerCase();
        var cards = document.querySelectorAll(".company-card");
        for (let i = 0; i < cards.length; i++) {
            const element = cards[i];
            const title = element.attributes["data-title"].value.toLocaleLowerCase();
            const description = element.attributes["data-description"].value.toLocaleLowerCase();
            element.style.display = (title.includes(sreach) || description.includes(sreach))?"block":"none";
        }
    }
</script>
@endsection
