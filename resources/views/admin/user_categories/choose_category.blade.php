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

      <form role="form" method="post"  action="{{ url('admin/user-category/store') }}">
        @csrf

        <div class="box-body">
          <div asp-validation-summary="ModelOnly" class="text-danger"></div>
          <input id="package_id" name="package_id" type="hidden" value="{{$package_id}}"/>

          <div class="row radio-list">

            @foreach ($categories as $category)

              <div class="col-md-4 col-xs-12">
                <div class="radio with-img">
                  <label>
                    <input id="id" name="id" type="radio" value="{{$category->id}}"/>
                    <div>
                      <div class="card package-card">
                        <div class="card-header">
                          <div class="img">
                            <img src="{{asset($category->pic)}}" />
                          </div>
                          <div class="header-info">
                            <h3 class="package-name">{{$category->title}}</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </label>
                  <span for="id" class="text-danger"></span>
                </div>
              </div>

            @endforeach

          </div>

        </div>

        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ __('words.BuyThisPackage') }}</button>
        </div>


      </form>

  </div>
</div>


</section>

@endsection

@section('myfooter')
@endsection
