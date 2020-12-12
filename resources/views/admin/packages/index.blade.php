@extends('layouts.admin')

@section('title', __('words.PackageList'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.PackageList') }}</h1>
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
      <a href="{{url('admin\package\create')}}" class="btn btn-primary pull-right" style="margin-left: 1em;"><i class="fa fa-plus"></i> {{ __('words.NewPackage') }}</a>
    </div>
    <!-- /.box-header -->


    <div class="box-body table-responsive no-padding">

      <table class="table table-hover persian-table table-striped table-bordered">
        <tr>
          <th>{{ __('words.Pic') }}</th>
          <th>{{ __('words.Title') }}</th>
          <th>{{ __('words.Duration') }}</th>
          <th>{{ __('words.Description') }}</th>
          <th>{{ __('words.Functions') }}</th>
        </tr>

        @foreach ($packages as $package)

        <tr>
          <td style="background: lightgray;"><img src="{{$package->pic}}" height="75" alt="{{ $package->title }} pic" /></td>
          <td>{{$package->title}}</td>
          <td>{{$package->duration}}</td>
          <td>{{$package->description}}</td>
          <td>
            <a class="btn btn-warning" href="{{action('Admin\PackageController@edit', $package['id'])}}">
              <i class="fa fa-edit" title="{{ __('words.ChangePackage') }}"></i> {{ __('words.ChangePackage') }}
            </a>
            <form style="display:inline;" action="{{ url('admin/package/' . $package->id) }}" method="post"
              onsubmit="return confirm('{{ __('words.DeletePackageMessage') }}');">
                    @csrf
                    @method('DELETE')
                  <button class="btn btn-danger" title="{{ __('words.DeletePackage') }}">
                      <i class="fa fa-trash-o" title="{{ __('words.DeletePackage') }}"></i> {{ __('words.DeletePackage') }}
                  </button>
            </form>
          </td>
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
