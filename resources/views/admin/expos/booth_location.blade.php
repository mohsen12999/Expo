@extends('layouts.admin')

@section('title', __('words.BoothLocation'))

@section('myheader')
<link rel="stylesheet" href="{{ asset('/css/expo-map.css') }}">
@endsection

@section('content')
<section>
    <h1>{{ __('words.BoothLocation') }}</h1>
</section>

<section class="content container-fluid">

    <form action="" method="post">
        @csrf
        <input name="id" id="id" type="hidden" value="{{$booth->id}}" />

        <div class="expo-map col-12">
            <img src="{{ asset("/img/expo-map.jpg") }}" style="width: 100%" alt="expo-map" />

            @foreach ($booth_numbers as $booth_number)

            @if (in_array($booth_number,array_column($other_booths_array,'booth_map_id')))

            @php
            $this_booth = $other_booths->where("booth_map_id","=",$booth_numbers)->first();
            @endphp

            <button type="button" disabled class="btn btn-secondary btn-{{$booth_number}}"
                title="{{($this_booth && $this_booth->user)?$this_booth->user->name:""}}">{{$booth_number}}</button>

            @else
            <button type="submit" formaction="/admin/expo-admin/booth_location/{{$booth_number}}"
                class="btn btn-primary btn-{{$booth_number}}">{{$booth_number}}</button>
            @endif

            @endforeach
        </div>

    </form>

</section>

@endsection

@section('myfooter')
@endsection