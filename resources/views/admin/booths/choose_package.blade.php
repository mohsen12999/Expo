@extends('layouts.admin')

@section('title', __('words.ChoosePackage'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.ChoosePackage') }}</h1>
</section>

<section class="content container-fluid">
    <!--------------------------
| Your Page Content Here |
-------------------------->

    <div class="col-xs-12">
        <div class="box">

            <!-- box-header -->
            <div class="box-header">
                <h3 class="box-title">{{ __('words.YourPackageList') }}</h3>
            </div>
            <!-- /.box-header -->

            @if(count($userPackages) === 0)

            <div class="no-data">
                <h3>{{ __('words.NoPackageMessage') }}</h3>
                <a href="{{url('admin/user-expo-package/buy-package')}}" class="btn btn-primary"
                    style="margin-left: 1em;"><i class="fa fa-plus"></i> {{ __('words.BuyPackage') }}</a>
            </div>

            @else

            <form role="form" method="post" action="{{ url('admin/booth/choose-package') }}">
                @csrf

                <div class="box-body">
                    <div asp-validation-summary="ModelOnly" class="text-danger"></div>

                    <div class="row radio-list">

                        @foreach ($userPackages as $userPackage)

                        <div class="col-md-4 col-xs-12">
                            <div class="radio with-img">
                                <label>
                                    <input id="id" name="id" type="radio" value="{{$userPackage->id}}" required />
                                    <div>
                                        <div class="card package-card"
                                            style="background-color: {{$userPackage->expo_package->color}}">
                                            <div class="card-header">
                                                <div class="img">
                                                    <img src="{{asset($userPackage->expo_package->pic)}}" />
                                                </div>
                                                <div class="header-info">
                                                    <h3 class="package-name">{{$userPackage->expo_package->title}}</h3>
                                                    <h1 class="package-price"><span
                                                            class="price">${{number_format($userPackage->expo_package->price,0)}}</span><span
                                                            class="duration">/Monthly</span></h1>

                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <h3 class="card-title">{{__('words.Benefits')}}</h3>
                                                {!! $userPackage->expo_package->description !!}
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
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                        {{ __('words.Next') }}</button>
                </div>

            </form>

            @endif

        </div>
    </div>

</section>

@endsection

@section('myfooter')
@endsection
