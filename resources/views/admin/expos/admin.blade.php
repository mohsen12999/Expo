@extends('layouts.admin')

@section('title', __('words.ExpoAdmin'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ $expo->title }}</h1>
</section>

<section class="content container-fluid">
    <!--------------------------
| Your Page Content Here |
-------------------------->

    <div class="col-xs-12">
        <div class="box">

            <!-- box-header -->
            <div class="box-header">
                <h3 class="box-title">{{ __('words.ExpoAdmin') }}</h3>
            </div>
            <!-- /.box-header -->


            <div class="box-body table-responsive no-padding">

                @if (count($booths) === 0)
                <div class="no-data">
                    <h3>{{ __('words.NoExpoMessage') }}</h3>
                </div>
                @else

                <table class="table table-hover persian-table table-striped table-bordered">
                    <tr>
                        <th>{{ __('words.Title') }}</th>
                        <th>{{ __('words.Description') }}</th>
                        <th>{{ __('words.BoothNumber') }}</th>
                        <th>{{ __('words.Status') }}</th>
                        <th>{{ __('words.Confirmed') }}</th>
                        <th>{{ __('words.Functions') }}</th>
                    </tr>

                    @foreach ($booths as $booth)

                    <tr>
                        <td> {{ $booth->title }} </td>
                        <td> {{ $booth->description }} </td>
                        <td> {{ $booth->booth_map_id }} </td>
                        <td> {{ $booth->status_string() }} </td>
                        <td> {{ $booth->confirm==0?__('words.Pending'):__('words.Accepted') }} </td>

                        <td>
                            @if ($booth->confirm==0)
                            <form style="display:inline;" action="{{ url('admin/expo-admin/' . $booth->id) }}"
                                method="post" onsubmit="return confirm('{{ __('words.AcceptExpoMessage') }}');">
                                @csrf
                                <button class="btn btn-success" title="{{ __('words.AcceptExpo') }}">
                                    <i class="fa fa-trash-o" title="{{ __('words.AcceptExpo') }}"></i>
                                    {{ __('words.AcceptExpo') }}
                                </button>
                            </form>
                            @endif

                            <a class="btn btn-info" href="admin/expo-admin/booth_location/{{$booth->id}}">
                                <i class="fa-map-o" title="{{ __('words.ChangeLocation') }}"></i>
                                {{ __('words.ChangeLocation') }}
                            </a>
                        </td>
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