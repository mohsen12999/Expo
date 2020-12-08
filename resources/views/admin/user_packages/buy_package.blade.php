@extends('layouts.admin')

@section('title', __('words.BuyPackage'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.BuyPackage') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div class="col-xs-12">
    <div class="box">
  
      <!-- box-header -->
      <div class="box-header">
        <h3 class="box-title">{{ __('words.PackageList') }}</h3>
      </div>
      <!-- /.box-header -->

      <form role="form" method="post"  action="{{ url('admin/user-package/bank-page') }}">
        @csrf
        
        <div class="box-body">
          <div asp-validation-summary="ModelOnly" class="text-danger"></div>

          <div class="row radio-list">

            @foreach ($packages as $package)
            
              <div class="col-md-4 col-xs-12">
                <div class="radio with-img">
                  <label>
                    <input id="id" name="id" type="radio" value="{{$package->id}}"/>
                    <div>
                      <div class="card package-card" style="background-color: {{$package->color}}">
                        <div class="card-header">
                          <div class="img">
                            <img src="{{asset($package->pic)}}" />
                          </div>
                          <div class="header-info">
                            <h3 class="package-name">{{$package->title}}</h3>
                            <h1 class="package-price"><span class="price">${{number_format($package->price,0)}}</span><span class="duration">/Monthly</span></h1>
          
                          </div>
                        </div>
          
                        <div class="card-body">
                          <h3 class="card-title">{{__('words.Benefits')}}</h3>
                            {!! $package->description !!}
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