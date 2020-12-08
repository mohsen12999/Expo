@extends('layouts.admin')

@section('title', __('words.MyInvoice') )

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.MyInvoice') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div class="col-xs-12">
    <div class="box">
  
      <!-- box-header -->
      <div class="box-header">
        <h3 class="box-title">{{ __('words.InvoiceList') }}</h3>
      </div>
      <!-- /.box-header -->
  
  
      <div class="box-body table-responsive no-padding">
      
        <table class="table table-hover persian-table table-striped table-bordered">
          <tr>
            <th>{{ __('words.Title') }}</th>
            <th>{{ __('words.Price') }}</th>
            <th>{{ __('words.BankName') }}</th>
            <th>{{ __('words.BankCode') }}</th>
            <th>{{ __('words.PayTime') }}</th>
          </tr>
  
          @foreach ($invoices as $invoice)
  
          <tr>
            <td>{{$invoice->title}}</td>
            <td>{{$invoice->price}}</td>
            <td>{{$invoice->bankName}}</td>
            <td>{{$invoice->bankCode}}</td>
            <td>{{$invoice->created_at}}</td>
          </tr>
              
          @endforeach
  
        </table>
      
      </div>
  
    </div>
  </div>

</section>

@endsection

@section('myfooter')
@endsection