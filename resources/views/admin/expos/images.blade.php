@extends('layouts.admin')

@section('title', __('words.ExpoImages'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.ExpoImages') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div class="col-xs-12">
  <div class="box">

    <!-- box-header -->
    <div class="box-header">
      <h3 class="box-title">{{ __('words.ExpoImages') }}</h3>
      <form method="POST" action="{{ url('admin/expo-image/' . $expo_id) }}" name="pic-form" id="pic-form" style="display: none" enctype="multipart/form-data">
        @csrf
        <input type="file" name="pic" id="pic" onchange="$('#pic-form').submit();">
      </form>
      <button class="btn btn-primary pull-right" style="margin-left: 1em;" onclick="$('#pic').click()"><i class="fa fa-plus"></i> {{ __('words.NewImages') }}</button>
    </div>
    <!-- /.box-header -->


    <div class="box-body table-responsive no-padding">

      @if (count($images) === 0)
        <div class="no-data">
          <h3>{{ __('words.NoExpoMessage') }}</h3>
          <button class="btn btn-primary" style="margin-left: 1em;" onclick="$('#pic').click()"><i class="fa fa-plus"></i> {{ __('words.NewImages') }}</button>
        </div>
      @else

      <div class="">

        @foreach ($images as $image)
          <div class="col-sm-4 col-xs-6">
            <img src="{{ $image->path }}" style="width: 100%" alt="">
            <form style="display:inline;" action="{{ url('admin/expo-image/' . $image->id) }}" method="post"
              onsubmit="return confirm('{{ __('words.DeleteImageMessage') }}');">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" title="{{ __('words.DeleteImage') }}">
                      <i class="fa fa-trash-o" title="{{ __('words.DeleteImage') }}"></i> {{ __('words.DeleteImage') }}
                  </button>
            </form>
          </div>
        @endforeach

      </div>

      @endif

    </div>

  </div>
</div>

</section>

@endsection


@section('myfooter')
@endsection
