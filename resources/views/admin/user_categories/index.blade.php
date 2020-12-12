@extends('layouts.admin')

@section('title', __('words.YourCategory'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.YourCategory') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div class="col-xs-12">
  <div class="box">

    <!-- box-header -->
    <div class="box-header">
      <h3 class="box-title">{{ __('words.YourCategory') }}</h3>
      <a href="{{url('admin/user-category/buy-category')}}" class="btn btn-primary pull-right" style="margin-left: 1em;"><i class="fa fa-plus"></i> {{ __('words.BuyCategory') }}</a>
    </div>
    <!-- /.box-header -->


    <div class="box-body table-responsive no-padding">

      @if (count($userCategories) === 0)
        <div class="no-data">
          <h3>{{ __('words.NoPackageMessage') }}</h3>
          <a href="{{url('admin/user-package/buy-package')}}" class="btn btn-primary" style="margin-left: 1em;"><i class="fa fa-plus"></i> {{ __('words.BuyCategory') }}</a>
        </div>
      @else
          
      <table class="table table-hover persian-table table-striped table-bordered">
        <tr>
          <th>{{ __('words.Pic') }}</th>
          <th>{{ __('words.Title') }}</th>
        </tr>

        @foreach ($userCategories as $category)

          <tr>
            <td><img src="{{$category->category->pic}}" height="75" alt="{{ $category->category->title }} pic" /></td>
            <td>{{$category->category->title}}</td>
          </tr>

        @endforeach

      </table>

      @endif

    </div>

  </div>
</div>

</section>

@endsection

@section('myfooter')
@endsection