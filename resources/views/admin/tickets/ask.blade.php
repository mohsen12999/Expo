@extends('layouts.admin')

@section('title', __('words.ShowTicket'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.ShowTicket') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div class="col-xs-12">

  <div class="box direct-chat direct-chat-warning">

    <!-- .box-header -->
    <div class="box-header with-border">
      <h3 class="box-title">{{ $ticket->title}} <span class="label label-info">{{ $ticket->type_string()}}</span></h3>
    </div>
    <!-- /.box-header -->

    <!-- .box-body -->
    <div class="box-body">
    
      @if ($messages)

        @foreach ($messages as $message)
        
          <div class="direct-chat-msg @if($message->type==1) right @endif">
            <div class="direct-chat-info clearfix">
              <span class="direct-chat-name pull-left">{{$message->sender->name}}</span>
              <span class="direct-chat-timestamp pull-right">{{$message->created_at}}</span>
            </div>
    
            <img class="direct-chat-img" src="{{$message->sender->avatar_or_default()}}" alt="message user image">
            <div class="direct-chat-text">
              <h4>{{$message->title}}</h4>
              <p>{{$message->description}}</p>

              @if ($message->file!='')
                <a href="{{asset($message->file)}}" target = "_blank">{{ __('words.AttachedFile') }}</a>
              @endif

            </div>
          </div>

        @endforeach
          
      @endif
    
    </div>
    <!-- /.box-body -->

    <!-- .box-footer -->
    <div class="box-footer">
      <form role="form" method="post"  action="{{ url('admin/ticket/'.$ticket->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for="title" class="control-label">{{ __('words.Title') }}</label>
          <input id="title" name="title" class="form-control"/>
          <span for="title" class="text-danger"></span>
      </div>

      <div class="form-group">
        <label for="description" class="control-label">{{ __('words.Description') }}</label>
        <textarea id="description" name="description" class="form-control" placeholder="description ..." ></textarea>
        <span for="description" class="text-danger"></span>
      </div>

      <div class="form-group">
        <label for="attachment" class="control-label">{{ __('words.Attachment') }}</label>
        <input id="attachment" name="attachment" type="file" accept="image/*,video/*,text/plain,application/pdf" class="form-control-file"/>
        <span for="attachment" class="text-danger"></span>
      </div>

        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ __('words.AskAgain') }}</button>
      </form>
    </div>
    <!-- /.box-footer -->
  </div>

</div>

</section>

@endsection

@section('myfooter')
@endsection