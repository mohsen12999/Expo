@extends('layouts.home',compact('categories','expo_categories','pages','footer', 'facebook', 'twitter', 'instagram', 'telegram','logo','tel'))

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
                <img src="{{asset("/img/expo-map.jpg")}}" style="width: 100%" alt="expo-map"/>

                <a @if (!in_array("101", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/101')}}" @endif class="btn @if (!in_array("101", $map_ids)) btn-secondary @else btn-primary @endif btn-101">101</a>
                <a @if (!in_array("102", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/102')}}" @endif class="btn @if (!in_array("102", $map_ids)) btn-secondary @else btn-primary @endif btn-102">102</a>
                <a @if (!in_array("103", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/103')}}" @endif class="btn @if (!in_array("103", $map_ids)) btn-secondary @else btn-primary @endif btn-103">103</a>
                <a @if (!in_array("104", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/104')}}" @endif class="btn @if (!in_array("104", $map_ids)) btn-secondary @else btn-primary @endif btn-104">104</a>
                <a @if (!in_array("105", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/105')}}" @endif class="btn @if (!in_array("105", $map_ids)) btn-secondary @else btn-primary @endif btn-105">105</a>
                <a @if (!in_array("106", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/106')}}" @endif class="btn @if (!in_array("106", $map_ids)) btn-secondary @else btn-primary @endif btn-106">106</a>
                <a @if (!in_array("107", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/107')}}" @endif class="btn @if (!in_array("107", $map_ids)) btn-secondary @else btn-primary @endif btn-107">107</a>
                <a @if (!in_array("108", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/108')}}" @endif class="btn @if (!in_array("108", $map_ids)) btn-secondary @else btn-primary @endif btn-108">108</a>
                <a @if (!in_array("109", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/109')}}" @endif class="btn @if (!in_array("109", $map_ids)) btn-secondary @else btn-primary @endif btn-109">109</a>

                <a @if (!in_array("201", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/201')}}" @endif class="btn @if (!in_array("201", $map_ids)) btn-secondary @else btn-primary @endif btn-big btn-big-bottom btn-big-left btn-201">201</a>
                <a @if (!in_array("301", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/301')}}" @endif class="btn @if (!in_array("301", $map_ids)) btn-secondary @else btn-primary @endif btn-big btn-big-middle btn-big-left btn-301">301</a>
                <a @if (!in_array("401", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/401')}}" @endif class="btn @if (!in_array("401", $map_ids)) btn-secondary @else btn-primary @endif btn-big btn-big-top btn-big-left btn-401">401</a>

                <a @if (!in_array("227", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/227')}}" @endif class="btn @if (!in_array("227", $map_ids)) btn-secondary @else btn-primary @endif btn-big btn-big-bottom btn-big-right btn-401">227</a>
                <a @if (!in_array("327", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/327')}}" @endif class="btn @if (!in_array("327", $map_ids)) btn-secondary @else btn-primary @endif btn-big btn-big-middle btn-big-right btn-401">327</a>
                <a @if (!in_array("427", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/427')}}" @endif class="btn @if (!in_array("427", $map_ids)) btn-secondary @else btn-primary @endif btn-big btn-big-top btn-big-right btn-401">427</a>

                <a @if (!in_array("202", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/202')}}" @endif class="btn @if (!in_array("202", $map_ids)) btn-secondary @else btn-primary @endif btn-deep-bottom btn-202">202</a>
                <a @if (!in_array("204", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/204')}}" @endif class="btn @if (!in_array("204", $map_ids)) btn-secondary @else btn-primary @endif btn-deep-bottom btn-204">204</a>
                <a @if (!in_array("206", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/206')}}" @endif class="btn @if (!in_array("206", $map_ids)) btn-secondary @else btn-primary @endif btn-deep-bottom btn-206">206</a>
                <a @if (!in_array("208", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/208')}}" @endif class="btn @if (!in_array("208", $map_ids)) btn-secondary @else btn-primary @endif btn-deep-bottom btn-208">208</a>

                <a @if (!in_array("220", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/220')}}" @endif class="btn @if (!in_array("220", $map_ids)) btn-secondary @else btn-primary @endif btn-deep-bottom btn-220">220</a>
                <a @if (!in_array("221", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/221')}}" @endif class="btn @if (!in_array("221", $map_ids)) btn-secondary @else btn-primary @endif btn-deep-bottom btn-222">222</a>
                <a @if (!in_array("224", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/224')}}" @endif class="btn @if (!in_array("224", $map_ids)) btn-secondary @else btn-primary @endif btn-deep-bottom btn-224">224</a>
                <a @if (!in_array("226", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/226')}}" @endif class="btn @if (!in_array("226", $map_ids)) btn-secondary @else btn-primary @endif btn-deep-bottom btn-226">226</a>

                <a @if (!in_array("504", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/504')}}" @endif class="btn @if (!in_array("504", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-1 col-1-1 btn-504">504</a>
                <a @if (!in_array("506", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/506')}}" @endif class="btn @if (!in_array("506", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-1 col-1-2 btn-506">506</a>
                <a @if (!in_array("508", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/508')}}" @endif class="btn @if (!in_array("508", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-1 col-1-3 btn-508">508</a>

                <a @if (!in_array("510", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/510')}}" @endif class="btn @if (!in_array("510", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-1 col-2-1 btn-510">510</a>
                <a @if (!in_array("512", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/512')}}" @endif class="btn @if (!in_array("512", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-1 col-2-2 btn-512">512</a>
                <a @if (!in_array("514", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/514')}}" @endif class="btn @if (!in_array("514", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-1 col-2-3 btn-514">514</a>

                <a @if (!in_array("516", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/516')}}" @endif class="btn @if (!in_array("516", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-1 col-3-1 btn-516">516</a>
                <a @if (!in_array("518", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/518')}}" @endif class="btn @if (!in_array("518", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-1 col-3-2 btn-518">518</a>
                <a @if (!in_array("520", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/520')}}" @endif class="btn @if (!in_array("520", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-1 col-3-3 btn-520">520</a>

                <a @if (!in_array("522", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/522')}}" @endif class="btn @if (!in_array("522", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-1 col-4-1 btn-522">522</a>
                <a @if (!in_array("524", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/524')}}" @endif class="btn @if (!in_array("524", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-1 col-4-2 btn-524">524</a>
                <a @if (!in_array("526", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/526')}}" @endif class="btn @if (!in_array("526", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-1 col-4-3 btn-526">526</a>

                <a @if (!in_array("403", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/403')}}" @endif class="btn @if (!in_array("403", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-2 col-1-1 btn-403">403</a>
                <a @if (!in_array("405", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/405')}}" @endif class="btn @if (!in_array("405", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-2 col-1-2 btn-405">405</a>
                <a @if (!in_array("407", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/407')}}" @endif class="btn @if (!in_array("407", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-2 col-1-3 btn-407">407</a>

                <a @if (!in_array("400", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/409')}}" @endif class="btn @if (!in_array("409", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-2 col-2-1 btn-409">409</a>
                <a @if (!in_array("411", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/411')}}" @endif class="btn @if (!in_array("411", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-2 col-2-2 btn-411">411</a>
                <a @if (!in_array("413", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/413')}}" @endif class="btn @if (!in_array("413", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-2 col-2-3 btn-413">413</a>

                <a @if (!in_array("415", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/415')}}" @endif class="btn @if (!in_array("415", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-2 col-3-1 btn-415">415</a>
                <a @if (!in_array("417", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/417')}}" @endif class="btn @if (!in_array("417", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-2 col-3-2 btn-417">417</a>

                <a @if (!in_array("423", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/423')}}" @endif class="btn @if (!in_array("423", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-2 col-4-2 btn-423">423</a>
                <a @if (!in_array("425", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/425')}}" @endif class="btn @if (!in_array("425", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-1-2 col-4-3 btn-425">425</a>

                <a @if (!in_array("404", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/404')}}" @endif class="btn @if (!in_array("404", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-1 col-1-1 btn-404">404</a>
                <a @if (!in_array("406", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/406')}}" @endif class="btn @if (!in_array("406", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-1 col-1-2 btn-406">406</a>
                <a @if (!in_array("408", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/408')}}" @endif class="btn @if (!in_array("408", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-1 col-1-3 btn-408">408</a>

                <a @if (!in_array("410", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/410')}}" @endif class="btn @if (!in_array("410", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-1 col-2-1 btn-410">410</a>
                <a @if (!in_array("412", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/412')}}" @endif class="btn @if (!in_array("412", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-1 col-2-2 btn-412">412</a>
                <a @if (!in_array("414", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/414')}}" @endif class="btn @if (!in_array("414", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-1 col-2-3 btn-414">414</a>

                <a @if (!in_array("416", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/416')}}" @endif class="btn @if (!in_array("416", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-1 col-3-1 btn-416">416</a>
                <a @if (!in_array("418", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/418')}}" @endif class="btn @if (!in_array("418", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-1 col-3-2 btn-418">418</a>
                <a @if (!in_array("420", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/420')}}" @endif class="btn @if (!in_array("420", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-1 col-3-3 btn-420">420</a>

                <a @if (!in_array("422", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/422')}}" @endif class="btn @if (!in_array("422", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-1 col-4-1 btn-422">422</a>
                <a @if (!in_array("424", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/424')}}" @endif class="btn @if (!in_array("424", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-1 col-4-2 btn-424">424</a>
                <a @if (!in_array("426", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/426')}}" @endif class="btn @if (!in_array("426", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-1 col-4-3 btn-426">426</a>

                <a @if (!in_array("303", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/303')}}" @endif class="btn @if (!in_array("303", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-2 col-1-1 btn-303">303</a>
                <a @if (!in_array("305", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/305')}}" @endif class="btn @if (!in_array("305", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-2 col-1-2 btn-305">305</a>
                <a @if (!in_array("307", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/307')}}" @endif class="btn @if (!in_array("307", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-2 col-1-3 btn-307">307</a>

                <a @if (!in_array("309", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/309')}}" @endif class="btn @if (!in_array("309", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-2 col-2-1 btn-309">309</a>
                <a @if (!in_array("311", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/311')}}" @endif class="btn @if (!in_array("311", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-2 col-2-2 btn-311">311</a>
                <a @if (!in_array("313", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/313')}}" @endif class="btn @if (!in_array("313", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-2 col-2-3 btn-313">313</a>

                <a @if (!in_array("315", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/315')}}" @endif class="btn @if (!in_array("315", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-2 col-3-1 btn-315">315</a>
                <a @if (!in_array("317", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/317')}}" @endif class="btn @if (!in_array("317", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-2 col-3-2 btn-317">317</a>
                <a @if (!in_array("319", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/319')}}" @endif class="btn @if (!in_array("319", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-2 col-3-3 btn-319">319</a>

                <a @if (!in_array("321", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/321')}}" @endif class="btn @if (!in_array("321", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-2 col-4-1 btn-321">321</a>
                <a @if (!in_array("323", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/323')}}" @endif class="btn @if (!in_array("323", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-2 col-4-2 btn-323">323</a>
                <a @if (!in_array("325", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/325')}}" @endif class="btn @if (!in_array("325", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-2-2 col-4-3 btn-325">325</a>

                <a @if (!in_array("304", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/304')}}" @endif class="btn @if (!in_array("304", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-3-1 col-1-1 btn-304">304</a>
                <a @if (!in_array("306", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/306')}}" @endif class="btn @if (!in_array("306", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-3-1 col-1-2 btn-306">306</a>
                <a @if (!in_array("308", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/308')}}" @endif class="btn @if (!in_array("308", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-3-1 col-1-3 btn-308">308</a>

                <a @if (!in_array("310", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/310')}}" @endif class="btn @if (!in_array("310", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-3-1 col-2-1 btn-310">310</a>
                <a @if (!in_array("312", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/312')}}" @endif class="btn @if (!in_array("312", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-3-1 col-2-2 btn-312">312</a>
                <a @if (!in_array("314", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/314')}}" @endif class="btn @if (!in_array("314", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-3-1 col-2-3 btn-318">318</a>

                <a @if (!in_array("322", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/322')}}" @endif class="btn @if (!in_array("322", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-3-1 col-4-1 btn-322">322</a>
                <a @if (!in_array("324", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/324')}}" @endif class="btn @if (!in_array("324", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-3-1 col-4-2 btn-324">324</a>
                <a @if (!in_array("326", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/326')}}" @endif class="btn @if (!in_array("326", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-3-1 col-4-3 btn-326">326</a>

                <a @if (!in_array("203", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/203')}}" @endif class="btn @if (!in_array("203", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-3-2 col-1-1 btn-203">203</a>
                <a @if (!in_array("205", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/205')}}" @endif class="btn @if (!in_array("205", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-3-2 col-1-2 btn-205">205</a>
                <a @if (!in_array("207", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/207')}}" @endif class="btn @if (!in_array("207", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-3-2 col-1-3 btn-207">207</a>

                <a @if (!in_array("209", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/209')}}" @endif class="btn @if (!in_array("209", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-3-2 col-2-1 btn-209">209</a>

                <a @if (!in_array("219", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/219')}}" @endif class="btn @if (!in_array("219", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-3-2 col-3-3 btn-219">219</a>

                <a @if (!in_array("221", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/221')}}" @endif class="btn @if (!in_array("221", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-3-2 col-4-1 btn-221">221</a>
                <a @if (!in_array("223", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/223')}}" @endif class="btn @if (!in_array("223", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-3-2 col-4-2 btn-223">223</a>
                <a @if (!in_array("225", $map_ids)) href="#" @else href="{{url('/map/'.$expo->id.'/225')}}" @endif class="btn @if (!in_array("225", $map_ids)) btn-secondary @else btn-primary @endif btn-middle row-3-2 col-4-3 btn-225">225</a>
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
                    <form method="POST" action="{{ url('/expo/'.$expo->id) }}" >
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="ali saeedi">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
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
                                <img src="{{$images->path}}" alt="{{$images->title}}" class="img-thumbnail" style="max-width: 200px">
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
                                <p>By {{$booth->user->name}} <a href="{{ url('/company/'.$booth->user->id) }}" target="_blank"><img src="{{ asset('/img/bussiness-card.png')}}" style="width: 50px" alt=""></a> </p>
                                @if ($booth->user && $booth->user->website && $booth->user->website!="") <p>Website: <a href="{{$booth->user->website}}" target="_blank">{{$booth->user->website}}</a></p> @endif

                                <p>{{$booth->description}}</p>
                                <p class="booth-files">
                                    @if ($booth->video && $booth->video!='')
                                        <a href="{{ asset($booth->video) }}" target="_blank"><img src="{{ asset('/img/video.png')}}" style="width: 50px" alt=""></a>
                                    @endif
                                    @if ($booth->catalog && $booth->catalog!='')
                                        <a href="{{ asset($booth->catalog) }}" target="_blank"><img src="{{ asset('/img/catalogue.png')}}" style="width: 50px" alt=""></a>
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
