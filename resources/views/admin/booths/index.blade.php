@extends('layouts.admin')

@section('title', __('words.YourBooths'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.YourBooths') }}</h1>
</section>

<section class="content container-fluid">

  <div class="col-md-12">
    <div class="box box-primary">

      <div class="box-header with-border">
        <h3 class="box-title">{{ __('words.YourBooths') }}</h3>
        <a href="{{url('admin\booth\create')}}" class="btn btn-primary pull-right" style="margin-left: 1em;"><i class="fa fa-plus"></i> {{ __('words.NewBooth') }}</a>
      </div>

      @if(count($booths) === 0)
        <div class="no-data">
          <h3>{{ __('words.NoBoothsMessage') }}</h3>
          <a href="{{url('admin\booth\create')}}" class="btn btn-primary" style="margin-left: 1em;"><i class="fa fa-plus"></i> {{ __('words.NewBooth') }}</a>
        </div>
      @else

      <table class="table table-hover persian-table table-striped table-bordered">
        <tr>
          <th>{{ __('words.Title') }}</th>
          <th>{{ __('words.Description') }}</th>
          <th>{{ __('words.Expo') }}</th>
          <th>{{ __('words.Status') }}</th>
          <th>{{ __('words.Functions') }}</th>
        </tr>

        @foreach ($booths as $booth)

          <tr>
            <td> {{ $booth->title }} </td>
            <td> {{ $booth->description }} </td>

            <td> {{ $booth->expo->title }} </td>
            <td> {{ $booth->status_string() }} </td>

            <td>
              <a class="btn btn-warning" href="{{action('Admin\BoothController@edit', $booth['id'])}}">
                <i class="fa fa-edit" title="{{ __('words.ChangeBooth') }}"></i> {{ __('words.ChangeBooth') }}
              </a>
              <form style="display:inline;" action="{{ url('admin/booth/' . $booth->id) }}" method="post"
                onsubmit="return confirm('{{ __('words.DeleteBoothMessage') }}');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" title="{{ __('words.DeleteBooth') }}">
                        <i class="fa fa-trash-o" title="{{ __('words.DeleteBooth') }} "></i> {{ __('words.DeleteBooth') }} 
                    </button>
              </form>

            </td>
          </tr>
          
        @endforeach

      </table>

      <div class="row">

        {{-- @foreach ($booths as $booth)
        <div class="col-md-3 col-xs-6">
          <div class="mycard">
            <img class="mycard-img" src="{{ $booth->pic }}" />
            <h4>{{ $booth->title }}</h4>
          </div>

        </div>
        @endforeach --}}

      </div>

      <div class="no-data">
        <a href="{{url('admin\booth\create')}}" class="btn btn-primary" style="margin-left: 1em;"><i class="fa fa-plus"></i> new Booth</a>
      </div>

      @endif
    </div>
  </div>
</section>

@endsection

@section('myfooter')
@endsection