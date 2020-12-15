@extends('layouts.admin')

@section('title', __('words.InvoiceList'))

@section('myheader')
  <link rel="stylesheet" href="{{ asset("lib/datatables.net-bs/css/dataTables.bootstrap.min.css") }}">
@endsection

@section('content')
<section>
    <h1>{{ __('words.InvoiceList') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div class="col-xs-12">
    <div class="box">
      <div class="box-body table-responsive no-padding">

        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs nav-fill nav-justified ui-sortable-handle">
            <li class="active">
                <a id="pending-users-tab" href="#cat-tab" data-toggle="tab"
                   aria-expanded="true">Category Invoices</a>
            </li>
            <li>
              <a id="accept-users-tab" href="#expo-tab" data-toggle="tab"
                 aria-expanded="false">Expo Invoices
              </a>
            </li>
          </ul>
          <div class="tab-content no-padding">
            <div class="chart tab-pane active" id="cat-tab">
              <table class="table table-hover persian-table table-striped table-bordered" id="cat_invoices_table">
                <thead>
                  <tr>
                    <th>{{ __('words.User') }}</th>
                    <th>{{ __('words.Title') }}</th>
                    <th>{{ __('words.Price') }}</th>
                    <th>{{ __('words.Category') }}</th>
                    <th>{{ __('words.BankName') }}</th>
                    <th>{{ __('words.BankCode') }}</th>
                    <th>{{ __('words.PayTime') }}</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($cat_invoices as $invoice)
                
                  <tr>
                    <td>{{$invoice->user?$invoice->user->id.'- '.$invoice->user->name:""}}</td>
                    <td>{{$invoice->title}}</td>
                    <td>{{$invoice->price}}</td>
                    <td>{{$invoice->item_name}}</td>
                    <td>{{$invoice->bankName}}</td>
                    <td>{{$invoice->bankCode}}</td>
                    <td>{{$invoice->created_at}}</td>
                  </tr>
                    
                @endforeach
                </tbody>
              </table>
            </div>
            <div class="chart tab-pane" id="expo-tab">

              <table class="table table-hover persian-table table-striped table-bordered" id="expo_invoices_table">
                <thead>
                  <tr>
                    <th>{{ __('words.User') }}</th>
                    <th>{{ __('words.Title') }}</th>
                    <th>{{ __('words.Price') }}</th>
                    <th>{{ __('words.Expo') }}</th>
                    <th>{{ __('words.BankName') }}</th>
                    <th>{{ __('words.BankCode') }}</th>
                    <th>{{ __('words.PayTime') }}</th>
                  </tr>
                </thead>
                <tbody>
        
                @foreach ($expo_invoices as $invoice)
        
                  <tr>
                    <td>{{$invoice->user?$invoice->user->id.'- '.$invoice->user->name:""}}</td>
                    <td>{{$invoice->title}}</td>
                    <td>{{$invoice->price}}</td>
                    <td>{{$invoice->item_name}}</td>
                    <td>{{$invoice->bankName}}</td>
                    <td>{{$invoice->bankCode}}</td>
                    <td>{{$invoice->created_at}}</td>
                  </tr>
                    
                @endforeach
                </tbody>
              </table>

            </div>
          </div>
        </div>
      
      </div>
  
    </div>
  </div>

</section>

@endsection

@section('myfooter')
  <script src="{{ asset("lib/datatables.net/js/jquery.dataTables.min.js") }}"></script>
  <script src="{{ asset("lib/datatables.net-bs/js/dataTables.bootstrap.min.js") }}"></script>
  <script>
  $(function () {
    $('#cat_invoices_table').DataTable()
    $('#expo_invoices_table').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  </script>
@endsection