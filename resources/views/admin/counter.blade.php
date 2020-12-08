@extends('layouts.admin')

@section('title', __('words.counter'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.counter') }}</h1>
</section>

<section class="content container-fluid">

<div class="col-md-12">
  <div class="box box-primary">

    <div class="box-header with-border">
        <h3 class="box-title">{{ __('words.counterConfig') }}</h3>
    </div>

    <form role="form" method="post"  action="{{ url('admin/counter/'.$counter->id) }}" enctype="multipart/form-data">
      @csrf

      <div class="box-body">
        <div asp-validation-summary="ModelOnly" class="text-danger"></div>
        <input name="id" id="id" type="hidden" value="{{$counter->id}}" />

        <div class="form-group">
            <label for="title" class="control-label">{{ __('words.Title') }}</label>
            <input id="title" name="title" class="form-control" value="{{$counter->title}}"/>
            <span for="title" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="description" class="control-label">{{ __('words.Description') }}</label>
          <textarea id="description" name="description" type="description" class="form-control">{{$counter->description}}</textarea>
          <span for="description" class="text-danger"></span>
        </div>

        <div class="form-group">
            <label for="launch_day" class="control-label">{{ __('words.launch_day') }}</label>
            <input id="launch_day" name="launch_day" type="datetime" @if ($counter->launch_day!=null && $counter->launch_day!='') value="{{$counter->launch_day->format('Y-m-d')}}" @endif />
            <span for="launch_day" class="text-danger"></span>
        </div>

        <div class="form-group">
            <label for="expo_id" class="control-label">{{ __('words.ChooseExpo') }}</label>
            <select id="expo_id" name="expo_id" class="form-control" >
              @if($expos)
                @foreach ($expos as $expo)
                  <option value="{{$expo->id}}" @if($counter->expo_id==$expo->id ) selected @endif >{{$expo->id.". ".$expo->title}}</option>
                @endforeach
              @endif
            </select>
            <span for="category_id" class="text-danger"></span>
        </div>

        <div class="checkbox">
          <label>
            <input id="status" name="status" type="checkbox" @if($counter->status==1 ) checked @endif/>
            {{ __('words.Active') }}
          </label>
          <span for="status" class="text-danger"></span>
        </div>

      </div>

      <!-- /.box-body -->
      <div class="box-footer">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
      </div>

    </form>

  </div>
</div>

</section>

@endsection

@section('myfooter')
@endsection
