@extends('layouts.admin')

@section('title', __('words.Dashboard'))

@section('myheader')
@endsection

@section('content')
<section class="content-header">
    <h1>{{ __('words.Dashboard') }}</h1>
</section>

<section class="content">
  <div class="row">

    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{$expo_count}}</h3>

          <p>{{ __('words.Expos') }}</p>
        </div>
        <div class="icon">
          <i class="fa fa-image"></i>
        </div>
        <a href="{{url('admin\expo')}}" class="small-box-footer">{{ __('words.ExpoList') }} <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{$category_count}}</h3>

          <p>{{ __('words.Categories') }}</p>
        </div>
        <div class="icon">
          <i class="fa fa-list"></i>
        </div>
        <a href="{{url('admin\category')}}" class="small-box-footer">{{ __('words.CategoryList') }} <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{$package_count }}</h3>

          <p>{{ __('words.Packages') }}</p>
        </div>
        <div class="icon">
          <i class="fa fa-shopping-cart"></i>
        </div>
        <a href="{{url('admin\package')}}" class="small-box-footer">{{ __('words.PackageList') }} <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$User_count}}</h3>

            <p>{{ __('words.Users') }}</p>
          </div>
          <div class="icon">
            <i class="fa fa-user"></i>
          </div>
          <a href="{{url('admin\users')}}" class="small-box-footer">{{ __('words.UserList') }} <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{$invoice_count}}</h3>

            <p>{{ __('words.Invoices') }}</p>
          </div>
          <div class="icon">
            <i class="fa fa-object-ungroup"></i>
          </div>
          <a href="{{url('admin\invoices')}}" class="small-box-footer">{{ __('words.InvoiceList') }} <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

  </div>
</section>

@endsection

@section('myfooter')
@endsection
