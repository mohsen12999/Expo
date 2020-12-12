@extends('layouts.admin')

@section('title', __('words.ExpoComments'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.ExpoComments') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div class="col-xs-12">
  <div class="box">

    <!-- box-header -->
    <div class="box-header">
      <h3 class="box-title">{{ __('words.ExpoComments') }}</h3>
    </div>
    <!-- /.box-header -->


    <div class="box-body table-responsive no-padding">

      @if (count($comments) === 0)
        <div class="no-data">
          <h3>{{ __('words.NoExpoMessage') }}</h3>
        </div>
      @else

      <table class="table table-hover persian-table table-striped table-bordered">
        <tr>
          <th>{{ __('words.Name') }}</th>
          <th>{{ __('words.Email') }}</th>
          <th>{{ __('words.Description') }}</th>
          <th>{{ __('words.Status') }}</th>
          <th>{{ __('words.Functions') }}</th>
        </tr>

        @foreach ($comments as $comment)

        <tr>
          <td> {{ $comment->name }} </td>
          <td> {{ $comment->email }} </td>
          <td> {{ $comment->description }} </td>
          <td> {{ $comment->status==0?__('words.Pending'):__('words.Accepted') }} </td>

          <td>
            @if ($comment->status==0)
              <form style="display:inline;" action="{{ url('admin/expo-comment/' . $comment->id) }}" method="post"
                onsubmit="return confirm('{{ __('words.AcceptCommentMessage') }}');">
                    @csrf
                    <button class="btn btn-success" title="{{ __('words.AcceptComment') }}">
                        <i class="fa fa-trash-o" title="{{ __('words.AcceptComment') }}"></i> {{ __('words.AcceptComment') }}
                    </button>
              </form>
            @endif

            <form style="display:inline;" action="{{ url('admin/expo-comment/' . $comment->id) }}" method="post"
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

      @endif

    </div>

  </div>
</div>

</section>

@endsection


@section('myfooter')
@endsection
