@extends('layouts.admin')

@section('title', __('words.BankPage'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.BankPage') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div style="text-align: center; margin:5rem">

    <form role="form" method="post"  action="{{ url('admin/user-expo-package/buy-package') }}">
        @csrf
        <input type="hidden" id="id" name="id" value="{{$request_id}}">
        <h2> ${{$price}} </h2>
        <button type="submit" class="btn btn-primary"> {{ __('words.PayBuyPackage') }} </button>
    </form>
</div>


</section>

@endsection

@section('myfooter')
@endsection
