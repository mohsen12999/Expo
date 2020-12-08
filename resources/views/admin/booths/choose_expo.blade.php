@extends('layouts.admin')

@section('title', __('words.ChooseExpo'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.ChooseExpo') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->
<div class="col-xs-12">
  <div class="box">

    <!-- box-header -->
    <div class="box-header">
      <h3 class="box-title">{{ __('words.YourExpoList') }}</h3>
    </div>
    <!-- /.box-header -->

    <form role="form" method="post"  action="{{ url('admin/booth/choose-expo') }}">
      @csrf

      <input name="package_id" id="package_id" type="hidden" value="{{$package_id}}"/>

      <div class="box-body">
        <div asp-validation-summary="ModelOnly" class="text-danger"></div>

          @foreach ($expos as $expo)

            <label class="expo-label">
              <input id="id" name="id" type="radio" value="{{$expo->id}}" required/>
              <div>
                <img src="{{$expo->pic}}" alt="{{$expo->title}}" />
                <h4>{{$expo->title}}</h4>
                <p>{{$expo->description}}</p>
              </div>
            </label>

          @endforeach

      </div>

      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ __('words.Next') }}</button>
      </div>

    </form>

  </div>
</div>
</section>

@endsection

@section('myfooter')
@endsection