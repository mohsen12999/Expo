@extends('layouts.admin')

@section('title', __('words.BoothInfo'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.BoothInfo') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div class="col-xs-12">
  <div class="box">

    <!-- box-header -->
    <div class="box-header">
      <h3 class="box-title">{{ __('words.YourBoothInfo') }}</h3>
    </div>
    <!-- /.box-header -->

    
    <form role="form" method="post"  action="{{ url('admin/booth') }}" enctype="multipart/form-data">
      @csrf

      <input name="package_id" id="package_id" type="hidden" value="{{$package_id}}" />
      <input name="expo_id" id="expo_id" type="hidden" value="{{$expo_id}}" />

      <div class="box-body">
        <div asp-validation-summary="ModelOnly" class="text-danger"></div>

        <div class="form-group">
          <label for="Name" class="control-label">{{ __('words.Pic') }}</label>
          <div>
            <img id="inputImage" onclick="$('#pic').trigger('click');" style="cursor: pointer;width: auto;height: 180px;"
              src="/img/no-image.png" class="img-rounded" alt="no Image Available">
            <input id="pic" name="pic" type="file" onchange="GetImage()" style="display: none" accept="image/*"/>
          </div>
        </div>

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
          <label for="video" class="control-label">{{ __('words.Video') }}</label>
          <input id="video" name="video" type="file" accept="video/*" class="form-control-file"/>
          <span for="video" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="catalog" class="control-label">{{ __('words.Catalog') }}</label>
          <input id="catalog" name="catalog" type="file" accept="application/pdf" class="form-control-file"/>
          <span for="catalog" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="images" class="control-label">{{ __('words.Images') }}</label>
          <input id="images" name="images[]" type="file" multiple class="form-control-file"/>
          <span for="images" class="text-danger"></span>
        </div>

        <hr>

        @foreach ($themes as $theme)

          <label class="expo-label">
            <input id="theme_id" name="theme_id" type="radio" value="{{$theme->id}}" required/>
            <div>
              <img src="{{$theme->pic}}" alt="{{$theme->title}}" />
              <h4>{{$theme->title}}</h4>
            </div>
          </label>

        @endforeach

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