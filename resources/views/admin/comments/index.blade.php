@extends('layouts.admin')

@section('title',  __('words.CommentList'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.CommentList') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div class="col-xs-12">
  <div class="box">

    <!-- box-header -->
    <div class="box-header">
      <h3 class="box-title">{{ __('words.CommentList') }}</h3>
      <a href="{{url('admin\comment\create')}}" class="btn btn-primary pull-right" style="margin-left: 1em;"><i class="fa fa-plus"></i> {{ __('words.NewComment') }}</a>
    </div>
    <!-- /.box-header -->


    <div class="box-body table-responsive no-padding">
    
      <table class="table table-hover persian-table table-striped table-bordered">
        <tr>
          <th>{{ __('words.Pic') }}</th>
          <th>{{ __('words.Name') }}</th>
          <th>{{ __('words.Title') }}</th>
          <th>{{ __('words.Functions') }}</th>
        </tr>

        @foreach ($comments as $comment)

        <tr>
          <td><img src="{{$comment->pic}}" height="75" alt="{{ $comment->title }} pic" /></td>
          <td>{{$comment->name}}</td>
          <td>{{$comment->title}}</td>
          <td>
            <a class="btn btn-warning" href="{{action('Admin\CommentController@edit', $comment['id'])}}">
              <i class="fa fa-edit" title="{{ __('words.ChangeComment') }}"></i>{{ __('words.ChangeComment') }}
            </a>
            <form style="display:inline;" action="{{ url('admin/comment/' . $comment->id) }}" method="post"
              onsubmit="return confirm('{{ __('words.DeleteCommentMessage') }}');">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" title="{{ __('words.DeleteComment') }}">
                      <i class="fa fa-trash-o" title="{{ __('words.DeleteComment') }}"></i> {{ __('words.DeleteComment') }}
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