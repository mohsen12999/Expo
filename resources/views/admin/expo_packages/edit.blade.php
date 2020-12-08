@extends('layouts.admin')

@section('title', __('words.EditPackage'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.EditPackage') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div class="col-xs-12">
  <div class="box box-primary">

    <div class="box-header with-border">
      <h3 class="box-title">{{ __('words.EditPackage') }}</h3>
    </div>

    <form role="form" method="post"  action="{{ url('admin/expo-package/'.$package->id) }}" enctype="multipart/form-data">
      @csrf
      @method('PATCH')

      <div class="box-body">
        <div asp-validation-summary="ModelOnly" class="text-danger"></div>
        <input name="id" id="id" type="hidden" value="{{$package->id}}" />

        <div class="form-group">
            <label for="Name" class="control-label">{{ __('words.Pic') }}</label>
            <div>
              <img id="inputImage" onclick="$('#pic').trigger('click');" style="cursor: pointer;width: auto;height: 180px;background:lightgray"
                src="{{$package->pic==''?"/img/no-image.png":$package->pic}}" class="img-rounded" alt="no Image Available">
              <input id="pic" name="pic" type="file" onchange="GetImage()" style="display: none" accept="image/*"/>
            </div>
        </div>

        <div class="form-group">
            <label for="title" class="control-label">{{ __('words.Title') }}</label>
            <input id="title" name="title" class="form-control" value="{{$package->title}}" required/>
            <span for="title" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="price" class="control-label">{{ __('words.Price') }}</label>
          <input id="price" name="price" class="form-control" value="{{$package->price}}" required/>
          <span for="price" class="text-danger"></span>
        </div>

        <div class="form-group">
            <label for="video_time" class="control-label">{{ __('words.video_time') }}</label>
            <input id="video_time" name="video_time" type="number" class="form-control" value="{{$package->video_time}}"/>
            <span for="video_time" class="text-danger"></span>
        </div>

        <div class="form-group">
            <label for="photo_count" class="control-label">{{ __('words.photo_count') }}</label>
            <input id="photo_count" name="photo_count" type="number" class="form-control" value="{{$package->photo_count}}"/>
            <span for="photo_count" class="text-danger"></span>
        </div>

        <div class="form-group">
            <label for="catalog_page" class="control-label">{{ __('words.catalog_page') }}</label>
            <input id="catalog_page" name="catalog_page" type="number" class="form-control" value="{{$package->catalog_page}}"/>
            <span for="catalog_page" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="color" class="control-label">{{ __('words.Color') }}</label>
          <input id="color" name="color" type="color" value="{{$package->color}}"/>
          <span for="color" class="text-danger"></span>
        </div>

      </div>

      <!-- /.box-body -->
      <div class="box-footer">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ __('words.Save') }}</button>
      </div>

    </form>

  </div>
</div>

</section>

@endsection

@section('myfooter')
  <script>
    function GetImage() {
      try {
        var input = document.getElementById("pic");
        if (input.files && input.files[0]) {
          //var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
          var fileExtension = ['jpg'];
          if ($.inArray(input.value.split('.')[input.value.split('.').length - 1].toLowerCase(), fileExtension) === -1) {
            $("#pic").val("");
            showAppMessage("فایل ها تنها با فرمت تصویر مجاز می باشند. " + fileExtension.join(', '), "warning");
          }
          var reader = new FileReader();
          reader.onload = function (e) {
            $('#inputImage').attr('src', e.target.result);
            changeImage = true;
          }
          reader.readAsDataURL(input.files[0]);
        }
      } catch (e) {
        showAppMessage(e.statusMessage, "error");
      }
    };
  </script>
@endsection
