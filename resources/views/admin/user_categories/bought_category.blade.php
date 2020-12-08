@extends('layouts.admin')

@section('title', __('words.BoughtPackage'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.BoughtCategoryInfo') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->
<div class="col-xs-12">
  <div class="box">

    <!-- box-header -->
    <div class="box-header">
      <h3 class="box-title">{{ __('words.BoughtCategoryInfo') }}</h3>
    </div>
    <!-- /.box-header -->

    <div class="box-body table-responsive no-padding">
      <div class="no-data">
        <h3>{{ __('words.BoughtCategoryInfo') }}</h3>
        <p>{{ __('words.PackageNumber') }}: {{ $userCategory->id }}</p>
        <p>{{ __('words.PackageBoughtTime') }}: {{ $userCategory->created_at }}</p>
        <a href="{{url('admin/user-category')}}" class="btn btn-info" style="margin-left: 1em;"><i class="fa fa-list"></i> See Your Categories</a>
      </div>
    </div>
    
  </div>
</div>


</section>

@endsection

@section('myfooter')
@endsection