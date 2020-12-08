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

    <form role="form" method="post"  action="{{ url('admin/user-category/buy-category') }}">
        @csrf
        <input type="hidden" id="id" name="id" value="{{$category->id}}">
        <h2> ${{$price}} </h2>
        <button type="submit" class="btn btn-primary"> {{ __('words.PayBuyCategory') }} </button>
    </form>
</div>


</section>

@endsection

@section('myfooter')
@endsection