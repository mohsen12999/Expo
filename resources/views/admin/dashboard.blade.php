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
                    <h3>{{$package_count}}</h3>

                    <p>{{ __('words.YourCategoryPackage') }}</p>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="{{url('admin\user-package')}}" class="small-box-footer">{{ __('words.YourPackageList') }} <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{$expo_package_count}}</h3>

                    <p>{{ __('words.YourExpoPackage') }}</p>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="{{url('admin\user-expo-package')}}" class="small-box-footer">{{ __('words.YourPackageList') }}
                    <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{$booth_count}}</h3>

                    <p>{{ __('words.YourBooth') }}</p>
                </div>
                <div class="icon">
                    <i class="fa fa-object-ungroup"></i>
                </div>
                <a href="{{url('admin\booth')}}" class="small-box-footer">{{ __('words.YourBoothList') }} <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{$invoice_count }}</h3>

                    <p>{{ __('words.YourInvoice') }}</p>
                </div>
                <div class="icon">
                    <i class="fa fa-money"></i>
                </div>
                <a href="{{url('admin\your-invoice')}}" class="small-box-footer">{{ __('words.YourInvoiceList') }} <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-purple">
                <div class="inner">
                    <h3>{{$ticket_count}}</h3>

                    <p>{{ __('words.Tickets') }}</p>
                </div>
                <div class="icon">
                    <i class="fa fa-comments"></i>
                </div>
                <a href="{{url('admin\tickets')}}" class="small-box-footer">{{ __('words.TicketsList') }} <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>
</section>

@endsection

@section('myfooter')
@endsection
