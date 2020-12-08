@extends('layouts.admin')

@section('title', __('words.PageList'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.PageList') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div class="col-xs-12">
  <div class="box">

    <!-- box-header -->
    <div class="box-header">
      <h3 class="box-title">{{ __('words.PageList') }}</h3>
      <a href="{{url('admin\page\create')}}" class="btn btn-primary pull-right" style="margin-left: 1em;"><i class="fa fa-plus"></i> {{ __('words.NewPage') }}</a>
    </div>
    <!-- /.box-header -->


    <div class="box-body table-responsive no-padding">

      @if (count($pages) === 0)
        <div class="no-data">
          <h3>{{ __('words.NoPageMessage') }}</h3>
          <a href="{{url('admin\page\create')}}" class="btn btn-primary" style="margin-left: 1em;"><i class="fa fa-plus"></i> {{ __('words.NewPage') }}</a>
        </div>
      @else
          
      <table class="table table-hover persian-table table-striped table-bordered">
        <tr>
          <th>{{ __('words.Title') }}</th>
          <th>{{ __('words.Functions') }}</th>
        </tr>

        @foreach ($pages as $page)

        <tr>
          <td> {{ $page->title }} </td>
          <td>
            <a class="btn btn-warning" href="{{action('Admin\PageController@edit', $page['id'])}}">
              <i class="fa fa-edit" title="{{ __('words.ChangePage') }}"></i> {{ __('words.ChangePage') }}
            </a>
            <form style="display:inline;" action="{{ url('admin/page/' . $page->id) }}" method="post"
              onsubmit="return confirm('{{ __('words.DeletePageMessage') }}');">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" title="{{ __('words.DeletePage') }}">
                      <i class="fa fa-trash-o" title="{{ __('words.DeletePage') }}"></i> {{ __('words.DeletePage') }}
                  </button>
            </form>

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