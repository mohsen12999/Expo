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
        <input name="id" id="id" type="hidden" value="{{$booth_id}}"/>

        <div class="expo-map col-12">
            <img src="{{ asset("/img/expo-map.jpg") }}" style="width: 100%" alt="expo-map"/>

            <button type="submit" @if (!in_array("101", $map_ids)) formaction="/admin/booth/booth-location/101" @else disabled @endif class="btn @if (!in_array("101", $map_ids)) btn-primary @else btn-secondary @endif  btn-101">101</button>
            <button type="submit" @if (!in_array("102", $map_ids)) formaction="/admin/booth/booth-location/102" @else disabled @endif class="btn @if (!in_array("102", $map_ids)) btn-primary @else btn-secondary @endif  btn-102">102</button>
            <button type="submit" @if (!in_array("103", $map_ids)) formaction="/admin/booth/booth-location/103" @else disabled @endif class="btn @if (!in_array("103", $map_ids)) btn-primary @else btn-secondary @endif  btn-103">103</button>
            <button type="submit" @if (!in_array("104", $map_ids)) formaction="/admin/booth/booth-location/104" @else disabled @endif class="btn @if (!in_array("104", $map_ids)) btn-primary @else btn-secondary @endif  btn-104">104</button>
            <button type="submit" @if (!in_array("105", $map_ids)) formaction="/admin/booth/booth-location/105" @else disabled @endif class="btn @if (!in_array("105", $map_ids)) btn-primary @else btn-secondary @endif  btn-105">105</button>
            <button type="submit" @if (!in_array("106", $map_ids)) formaction="/admin/booth/booth-location/106" @else disabled @endif class="btn @if (!in_array("106", $map_ids)) btn-primary @else btn-secondary @endif  btn-106">106</button>
            <button type="submit" @if (!in_array("107", $map_ids)) formaction="/admin/booth/booth-location/107" @else disabled @endif class="btn @if (!in_array("107", $map_ids)) btn-primary @else btn-secondary @endif  btn-107">107</button>
            <button type="submit" @if (!in_array("108", $map_ids)) formaction="/admin/booth/booth-location/108" @else disabled @endif class="btn @if (!in_array("108", $map_ids)) btn-primary @else btn-secondary @endif  btn-108">108</button>
            <button type="submit" @if (!in_array("109", $map_ids)) formaction="/admin/booth/booth-location/109" @else disabled @endif class="btn @if (!in_array("109", $map_ids)) btn-primary @else btn-secondary @endif  btn-109">109</button>

            <button type="submit" @if (!in_array("201", $map_ids)) formaction="/admin/booth/booth-location/201" @else disabled @endif class="btn @if (!in_array("201", $map_ids)) btn-primary @else btn-secondary @endif  btn-big btn-big-bottom btn-big-left btn-201">201</button>
            <button type="submit" @if (!in_array("301", $map_ids)) formaction="/admin/booth/booth-location/301" @else disabled @endif class="btn @if (!in_array("301", $map_ids)) btn-primary @else btn-secondary @endif  btn-big btn-big-middle btn-big-left btn-301">301</button>
            <button type="submit" @if (!in_array("401", $map_ids)) formaction="/admin/booth/booth-location/401" @else disabled @endif class="btn @if (!in_array("401", $map_ids)) btn-primary @else btn-secondary @endif  btn-big btn-big-top btn-big-left btn-401">401</button>

            <button type="submit" @if (!in_array("227", $map_ids)) formaction="/admin/booth/booth-location/227" @else disabled @endif class="btn @if (!in_array("227", $map_ids)) btn-primary @else btn-secondary @endif  btn-big btn-big-bottom btn-big-right btn-401">227</button>
            <button type="submit" @if (!in_array("327", $map_ids)) formaction="/admin/booth/booth-location/327" @else disabled @endif class="btn @if (!in_array("327", $map_ids)) btn-primary @else btn-secondary @endif  btn-big btn-big-middle btn-big-right btn-401">327</button>
            <button type="submit" @if (!in_array("427", $map_ids)) formaction="/admin/booth/booth-location/427" @else disabled @endif class="btn @if (!in_array("427", $map_ids)) btn-primary @else btn-secondary @endif  btn-big btn-big-top btn-big-right btn-401">427</button>

            <button type="submit" @if (!in_array("202", $map_ids)) formaction="/admin/booth/booth-location/202" @else disabled @endif class="btn @if (!in_array("202", $map_ids)) btn-primary @else btn-secondary @endif  btn-deep-bottom btn-202">202</button>
            <button type="submit" @if (!in_array("204", $map_ids)) formaction="/admin/booth/booth-location/204" @else disabled @endif class="btn @if (!in_array("204", $map_ids)) btn-primary @else btn-secondary @endif  btn-deep-bottom btn-204">204</button>
            <button type="submit" @if (!in_array("206", $map_ids)) formaction="/admin/booth/booth-location/206" @else disabled @endif class="btn @if (!in_array("206", $map_ids)) btn-primary @else btn-secondary @endif  btn-deep-bottom btn-206">206</button>
            <button type="submit" @if (!in_array("208", $map_ids)) formaction="/admin/booth/booth-location/208" @else disabled @endif class="btn @if (!in_array("208", $map_ids)) btn-primary @else btn-secondary @endif  btn-deep-bottom btn-208">208</button>

            <button type="submit" @if (!in_array("220", $map_ids)) formaction="/admin/booth/booth-location/220" @else disabled @endif class="btn @if (!in_array("220", $map_ids)) btn-primary @else btn-secondary @endif  btn-deep-bottom btn-220">220</button>
            <button type="submit" @if (!in_array("222", $map_ids)) formaction="/admin/booth/booth-location/222" @else disabled @endif class="btn @if (!in_array("222", $map_ids)) btn-primary @else btn-secondary @endif  btn-deep-bottom btn-222">222</button>
            <button type="submit" @if (!in_array("224", $map_ids)) formaction="/admin/booth/booth-location/224" @else disabled @endif class="btn @if (!in_array("224", $map_ids)) btn-primary @else btn-secondary @endif  btn-deep-bottom btn-224">224</button>
            <button type="submit" @if (!in_array("226", $map_ids)) formaction="/admin/booth/booth-location/226" @else disabled @endif class="btn @if (!in_array("226", $map_ids)) btn-primary @else btn-secondary @endif  btn-deep-bottom btn-226">226</button>

            <button type="submit" @if (!in_array("504", $map_ids)) formaction="/admin/booth/booth-location/504" @else disabled @endif class="btn @if (!in_array("504", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-1 col-1-1 btn-504">504</button>
            <button type="submit" @if (!in_array("506", $map_ids)) formaction="/admin/booth/booth-location/506" @else disabled @endif class="btn @if (!in_array("506", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-1 col-1-2 btn-506">506</button>
            <button type="submit" @if (!in_array("508", $map_ids)) formaction="/admin/booth/booth-location/508" @else disabled @endif class="btn @if (!in_array("508", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-1 col-1-3 btn-508">508</button>

            <button type="submit" @if (!in_array("510", $map_ids)) formaction="/admin/booth/booth-location/510" @else disabled @endif class="btn @if (!in_array("510", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-1 col-2-1 btn-510">510</button>
            <button type="submit" @if (!in_array("512", $map_ids)) formaction="/admin/booth/booth-location/512" @else disabled @endif class="btn @if (!in_array("512", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-1 col-2-2 btn-512">512</button>
            <button type="submit" @if (!in_array("514", $map_ids)) formaction="/admin/booth/booth-location/514" @else disabled @endif class="btn @if (!in_array("514", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-1 col-2-3 btn-514">514</button>

            <button type="submit" @if (!in_array("516", $map_ids)) formaction="/admin/booth/booth-location/516" @else disabled @endif class="btn @if (!in_array("516", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-1 col-3-1 btn-516">516</button>
            <button type="submit" @if (!in_array("518", $map_ids)) formaction="/admin/booth/booth-location/518" @else disabled @endif class="btn @if (!in_array("518", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-1 col-3-2 btn-518">518</button>
            <button type="submit" @if (!in_array("520", $map_ids)) formaction="/admin/booth/booth-location/520" @else disabled @endif class="btn @if (!in_array("520", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-1 col-3-3 btn-520">520</button>

            <button type="submit" @if (!in_array("522", $map_ids)) formaction="/admin/booth/booth-location/522" @else disabled @endif class="btn @if (!in_array("522", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-1 col-4-1 btn-522">522</button>
            <button type="submit" @if (!in_array("524", $map_ids)) formaction="/admin/booth/booth-location/524" @else disabled @endif class="btn @if (!in_array("524", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-1 col-4-2 btn-524">524</button>
            <button type="submit" @if (!in_array("526", $map_ids)) formaction="/admin/booth/booth-location/526" @else disabled @endif class="btn @if (!in_array("526", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-1 col-4-3 btn-526">526</button>

            <button type="submit" @if (!in_array("403", $map_ids)) formaction="/admin/booth/booth-location/403" @else disabled @endif class="btn @if (!in_array("403", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-2 col-1-1 btn-403">403</button>
            <button type="submit" @if (!in_array("405", $map_ids)) formaction="/admin/booth/booth-location/405" @else disabled @endif class="btn @if (!in_array("405", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-2 col-1-2 btn-405">405</button>
            <button type="submit" @if (!in_array("407", $map_ids)) formaction="/admin/booth/booth-location/407" @else disabled @endif class="btn @if (!in_array("407", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-2 col-1-3 btn-407">407</button>

            <button type="submit" @if (!in_array("409", $map_ids)) formaction="/admin/booth/booth-location/409" @else disabled @endif class="btn @if (!in_array("409", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-2 col-2-1 btn-409">409</button>
            <button type="submit" @if (!in_array("411", $map_ids)) formaction="/admin/booth/booth-location/411" @else disabled @endif class="btn @if (!in_array("411", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-2 col-2-2 btn-411">411</button>
            <button type="submit" @if (!in_array("413", $map_ids)) formaction="/admin/booth/booth-location/413" @else disabled @endif class="btn @if (!in_array("413", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-2 col-2-3 btn-413">413</button>

            <button type="submit" @if (!in_array("415", $map_ids)) formaction="/admin/booth/booth-location/415" @else disabled @endif class="btn @if (!in_array("415", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-2 col-3-1 btn-415">415</button>
            <button type="submit" @if (!in_array("417", $map_ids)) formaction="/admin/booth/booth-location/417" @else disabled @endif class="btn @if (!in_array("417", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-2 col-3-2 btn-417">417</button>

            <button type="submit" @if (!in_array("423", $map_ids)) formaction="/admin/booth/booth-location/423" @else disabled @endif class="btn @if (!in_array("423", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-2 col-4-2 btn-423">423</button>
            <button type="submit" @if (!in_array("425", $map_ids)) formaction="/admin/booth/booth-location/425" @else disabled @endif class="btn @if (!in_array("425", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-1-2 col-4-3 btn-425">425</button>

            <button type="submit" @if (!in_array("404", $map_ids)) formaction="/admin/booth/booth-location/404" @else disabled @endif class="btn @if (!in_array("404", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-1 col-1-1 btn-404">404</button>
            <button type="submit" @if (!in_array("406", $map_ids)) formaction="/admin/booth/booth-location/406" @else disabled @endif class="btn @if (!in_array("406", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-1 col-1-2 btn-406">406</button>
            <button type="submit" @if (!in_array("408", $map_ids)) formaction="/admin/booth/booth-location/408" @else disabled @endif class="btn @if (!in_array("408", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-1 col-1-3 btn-408">408</button>

            <button type="submit" @if (!in_array("410", $map_ids)) formaction="/admin/booth/booth-location/410" @else disabled @endif class="btn @if (!in_array("410", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-1 col-2-1 btn-410">410</button>
            <button type="submit" @if (!in_array("412", $map_ids)) formaction="/admin/booth/booth-location/412" @else disabled @endif class="btn @if (!in_array("412", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-1 col-2-2 btn-412">412</button>
            <button type="submit" @if (!in_array("414", $map_ids)) formaction="/admin/booth/booth-location/414" @else disabled @endif class="btn @if (!in_array("414", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-1 col-2-3 btn-414">414</button>

            <button type="submit" @if (!in_array("416", $map_ids)) formaction="/admin/booth/booth-location/416" @else disabled @endif class="btn @if (!in_array("416", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-1 col-3-1 btn-416">416</button>
            <button type="submit" @if (!in_array("418", $map_ids)) formaction="/admin/booth/booth-location/418" @else disabled @endif class="btn @if (!in_array("418", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-1 col-3-2 btn-418">418</button>
            <button type="submit" @if (!in_array("420", $map_ids)) formaction="/admin/booth/booth-location/420" @else disabled @endif class="btn @if (!in_array("420", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-1 col-3-3 btn-420">420</button>

            <button type="submit" @if (!in_array("422", $map_ids)) formaction="/admin/booth/booth-location/422" @else disabled @endif class="btn @if (!in_array("422", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-1 col-4-1 btn-422">422</button>
            <button type="submit" @if (!in_array("424", $map_ids)) formaction="/admin/booth/booth-location/424" @else disabled @endif class="btn @if (!in_array("424", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-1 col-4-2 btn-424">424</button>
            <button type="submit" @if (!in_array("426", $map_ids)) formaction="/admin/booth/booth-location/426" @else disabled @endif class="btn @if (!in_array("426", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-1 col-4-3 btn-426">426</button>

            <button type="submit" @if (!in_array("303", $map_ids)) formaction="/admin/booth/booth-location/303" @else disabled @endif class="btn @if (!in_array("303", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-2 col-1-1 btn-303">303</button>
            <button type="submit" @if (!in_array("305", $map_ids)) formaction="/admin/booth/booth-location/305" @else disabled @endif class="btn @if (!in_array("305", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-2 col-1-2 btn-305">305</button>
            <button type="submit" @if (!in_array("307", $map_ids)) formaction="/admin/booth/booth-location/307" @else disabled @endif class="btn @if (!in_array("307", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-2 col-1-3 btn-307">307</button>

            <button type="submit" @if (!in_array("309", $map_ids)) formaction="/admin/booth/booth-location/309" @else disabled @endif class="btn @if (!in_array("309", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-2 col-2-1 btn-309">309</button>
            <button type="submit" @if (!in_array("311", $map_ids)) formaction="/admin/booth/booth-location/311" @else disabled @endif class="btn @if (!in_array("311", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-2 col-2-2 btn-311">311</button>
            <button type="submit" @if (!in_array("313", $map_ids)) formaction="/admin/booth/booth-location/313" @else disabled @endif class="btn @if (!in_array("313", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-2 col-2-3 btn-313">313</button>

            <button type="submit" @if (!in_array("315", $map_ids)) formaction="/admin/booth/booth-location/315" @else disabled @endif class="btn @if (!in_array("315", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-2 col-3-1 btn-315">315</button>
            <button type="submit" @if (!in_array("317", $map_ids)) formaction="/admin/booth/booth-location/317" @else disabled @endif class="btn @if (!in_array("317", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-2 col-3-2 btn-317">317</button>
            <button type="submit" @if (!in_array("319", $map_ids)) formaction="/admin/booth/booth-location/319" @else disabled @endif class="btn @if (!in_array("319", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-2 col-3-3 btn-319">319</button>

            <button type="submit" @if (!in_array("321", $map_ids)) formaction="/admin/booth/booth-location/321" @else disabled @endif class="btn @if (!in_array("321", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-2 col-4-1 btn-321">321</button>
            <button type="submit" @if (!in_array("323", $map_ids)) formaction="/admin/booth/booth-location/323" @else disabled @endif class="btn @if (!in_array("323", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-2 col-4-2 btn-323">323</button>
            <button type="submit" @if (!in_array("325", $map_ids)) formaction="/admin/booth/booth-location/325" @else disabled @endif class="btn @if (!in_array("325", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-2-2 col-4-3 btn-325">325</button>

            <button type="submit" @if (!in_array("304", $map_ids)) formaction="/admin/booth/booth-location/304" @else disabled @endif class="btn @if (!in_array("304", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-3-1 col-1-1 btn-304">304</button>
            <button type="submit" @if (!in_array("306", $map_ids)) formaction="/admin/booth/booth-location/306" @else disabled @endif class="btn @if (!in_array("306", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-3-1 col-1-2 btn-306">306</button>
            <button type="submit" @if (!in_array("308", $map_ids)) formaction="/admin/booth/booth-location/308" @else disabled @endif class="btn @if (!in_array("308", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-3-1 col-1-3 btn-308">308</button>

            <button type="submit" @if (!in_array("310", $map_ids)) formaction="/admin/booth/booth-location/310" @else disabled @endif class="btn @if (!in_array("310", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-3-1 col-2-1 btn-310">310</button>
            <button type="submit" @if (!in_array("312", $map_ids)) formaction="/admin/booth/booth-location/312" @else disabled @endif class="btn @if (!in_array("312", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-3-1 col-2-2 btn-312">312</button>
            <button type="submit" @if (!in_array("318", $map_ids)) formaction="/admin/booth/booth-location/318" @else disabled @endif class="btn @if (!in_array("318", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-3-1 col-2-3 btn-318">318</button>

            <button type="submit" @if (!in_array("322", $map_ids)) formaction="/admin/booth/booth-location/322" @else disabled @endif class="btn @if (!in_array("322", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-3-1 col-4-1 btn-322">322</button>
            <button type="submit" @if (!in_array("324", $map_ids)) formaction="/admin/booth/booth-location/324" @else disabled @endif class="btn @if (!in_array("324", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-3-1 col-4-2 btn-324">324</button>
            <button type="submit" @if (!in_array("326", $map_ids)) formaction="/admin/booth/booth-location/326" @else disabled @endif class="btn @if (!in_array("326", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-3-1 col-4-3 btn-326">326</button>

            <button type="submit" @if (!in_array("203", $map_ids)) formaction="/admin/booth/booth-location/203" @else disabled @endif class="btn @if (!in_array("203", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-3-2 col-1-1 btn-203">203</button>
            <button type="submit" @if (!in_array("205", $map_ids)) formaction="/admin/booth/booth-location/205" @else disabled @endif class="btn @if (!in_array("205", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-3-2 col-1-2 btn-205">205</button>
            <button type="submit" @if (!in_array("207", $map_ids)) formaction="/admin/booth/booth-location/207" @else disabled @endif class="btn @if (!in_array("207", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-3-2 col-1-3 btn-207">207</button>

            <button type="submit" @if (!in_array("209", $map_ids)) formaction="/admin/booth/booth-location/209" @else disabled @endif class="btn @if (!in_array("209", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-3-2 col-2-1 btn-209">209</button>

            <button type="submit" @if (!in_array("219", $map_ids)) formaction="/admin/booth/booth-location/219" @else disabled @endif class="btn @if (!in_array("219", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-3-2 col-3-3 btn-219">219</button>

            <button type="submit" @if (!in_array("221", $map_ids)) formaction="/admin/booth/booth-location/221" @else disabled @endif class="btn @if (!in_array("221", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-3-2 col-4-1 btn-221">221</button>
            <button type="submit" @if (!in_array("223", $map_ids)) formaction="/admin/booth/booth-location/223" @else disabled @endif class="btn @if (!in_array("223", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-3-2 col-4-2 btn-223">223</button>
            <button type="submit" @if (!in_array("225", $map_ids)) formaction="/admin/booth/booth-location/225" @else disabled @endif class="btn @if (!in_array("225", $map_ids)) btn-primary @else btn-secondary @endif  btn-middle row-3-2 col-4-3 btn-225">225</button>
        </div>

    </form>

</section>

@endsection

@section('myfooter')
@endsection
