@extends('layouts.admin')

@section('title', __('words.YourPackages'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.YourPackages') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->
{{-- userPackages --}}


<div class="col-xs-12">
  <div class="box">

    <!-- box-header -->
    <div class="box-header">
      <h3 class="box-title">{{ __('words.YourPackagesList') }}</h3>
      <a href="{{url('admin/user-package/buy-package')}}" class="btn btn-primary pull-right" style="margin-left: 1em;"><i class="fa fa-plus"></i> {{ __('words.BuyPackage') }}</a>
    </div>
    <!-- /.box-header -->


    <div class="box-body table-responsive no-padding">

      @if (count($userPackages) === 0)
        <div class="no-data">
          <h3>{{ __('words.NoPackageMessage') }}</h3>
          <a href="{{url('admin/user-package/buy-package')}}" class="btn btn-primary" style="margin-left: 1em;"><i class="fa fa-plus"></i> {{ __('words.BuyPackage') }}</a>
        </div>
      @else
          
      <table class="table table-hover persian-table table-striped table-bordered">
        <tr>
          <th>{{ __('words.Title') }}</th>
          <th>{{ __('words.Description') }}</th>
          <th>{{ __('words.BuyTime') }}</th>
          <th>{{ __('words.InvoiceCode') }}</th>
        </tr>

        @foreach ($userPackages as $userPackage)

        <tr>
          <td> {{ $userPackage->title }} </td>
          <td> {{ $userPackage->description }} </td>
          <td> {{ $userPackage->created_at }} </td>
          <td> {{ $userPackage->invoice_id }} </td>
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