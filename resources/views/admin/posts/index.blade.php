@extends('layouts.admin')

@section('title', __('words.PostList'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.PostList') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div class="col-xs-12">
  <div class="box">

    <!-- box-header -->
    <div class="box-header">
      <h3 class="box-title">{{ __('words.PostList') }}</h3>
      <a href="{{url('admin\post\create')}}" class="btn btn-primary pull-right" style="margin-left: 1em;"><i class="fa fa-plus"></i> {{ __('words.NewPost') }}</a>
    </div>
    <!-- /.box-header -->


    <div class="box-body table-responsive no-padding">

      @if (count($posts) === 0)
        <div class="no-data">
          <h3>{{ __('words.NoPostMessage') }}</h3>
          <a href="{{url('admin\post\create')}}" class="btn btn-primary" style="margin-left: 1em;"><i class="fa fa-plus"></i> {{ __('words.NewPost') }}</a>
        </div>
      @else
          
      <table class="table table-hover persian-table table-striped table-bordered">
        <tr>
          <th>{{ __('words.Pic') }}</th>
          <th>{{ __('words.Title') }}</th>
          <th>{{ __('words.Abstract') }}</th>
          <th>{{ __('words.Functions') }}</th>
        </tr>

        @foreach ($posts as $post)

        <tr>
          <td><img src="{{$post->pic}}" height="75" alt="{{ $post->title }} pic" /></td>
          <td> {{ $post->title }} </td>
          <td> {{ $post->abstract }} </td>
          <td> {{ $post->status==0?"Saved":"Published" }} </td>
          <td>
            <a class="btn btn-warning" href="{{action('Admin\PostController@edit', $post['id'])}}">
              <i class="fa fa-edit" title="{{ __('words.ChangePost') }}"></i> {{ __('words.ChangePost') }}
            </a>
            <form style="display:inline;" action="{{ url('admin/post/' . $post->id) }}" method="post"
              onsubmit="return confirm('{{ __('words.DeletePostMessage') }}');">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" title="{{ __('words.DeletePost') }}">
                      <i class="fa fa-trash-o" title="{{ __('words.DeletePost') }}"></i> {{ __('words.DeletePost') }}
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