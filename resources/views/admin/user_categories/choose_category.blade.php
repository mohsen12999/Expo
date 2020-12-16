@extends('layouts.admin')

@section('title', __('words.ChooseCategory'))

@section('myheader')
@endsection

@section('content')
<section>
  <h1>{{ __('words.ChooseCategory') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

  <div class="col-xs-12">
    <div class="box">

      <!-- box-header -->
      <div class="box-header">
        <h3 class="box-title">{{ __('words.CategoryList') }}</h3>
      </div>
      <!-- /.box-header -->

      <form role="form" method="post" action="{{ url('admin/user-category/store') }}">
        @csrf

        <div class="box-body">
          <div asp-validation-summary="ModelOnly" class="text-danger"></div>
          <input id="package_id" name="package_id" type="hidden" value="{{$package_id}}" />

          <div class="row radio-list">

            @foreach ($categories as $category)

            <label class="expo-label">
              <input id="id" name="id" type="radio" value="{{$category->id}}" required />
              <div>
                <img src="{{$category->pic}}" alt="{{$category->title}}" />
                <h4>{{$category->title}}</h4>
                <p>{{$category->description}}</p>
              </div>
            </label>

            @endforeach

          </div>

        </div>

        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
            {{ __('words.BuyThisPackage') }}</button>
        </div>


      </form>

    </div>
  </div>


</section>

@endsection

@section('myfooter')
@endsection