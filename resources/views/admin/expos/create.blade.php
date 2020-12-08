@extends('layouts.admin')

@section('title', __('words.NewExpo'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.NewExpo') }}</h1>
</section>

<section class="content container-fluid">

<div class="col-xs-12">
  <div class="box box-primary">
      
    <div class="box-header with-border">
      <h3 class="box-title">{{ __('words.NewExpo') }}</h3>
    </div>

    <form role="form" method="post"  action="{{ url('admin/expo/') }}" enctype="multipart/form-data">
      @csrf

      <div class="box-body">
        <div asp-validation-summary="ModelOnly" class="text-danger"></div>

        <div class="form-group">
            <label for="Name" class="control-label">{{ __('words.Avatar') }}</label>
            <div>
              <img id="inputImage" onclick="$('#pic').trigger('click');" style="cursor: pointer;width: 400px;height: 600px;"
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
          <textarea id="description" name="description" class="form-control" placeholder="{{ __('words.Description') }} ..." ></textarea>
          <span for="description" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="start" class="control-label">{{ __('words.StartTime') }}</label>
          <input id="start" name="start" type="date"/>
          <span for="start" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="end" class="control-label">{{ __('words.EndTime') }}</label>
          <input id="end" name="end" type="date"/>
          <span for="end" class="text-danger"></span>
        </div>

        <div class="checkbox">
          {{-- <label>
            <input id="type" name="type" type="checkbox"/>
            {{ __('words.Permanently') }}
          </label> --}}
          <label for="category_id" class="control-label">{{ __('words.ExpoType') }}</label>
          <select id="type" name="type">
            <option value="0">{{ __('words.Periodic') }}</option>
            <option value="1">{{ __('words.Yearly') }}</option>
          </select>
          <span for="type" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="video" class="control-label">{{ __('words.Video') }}</label>
          <input id="video" name="video" type="file" accept="video/*" class="form-control-file"/>
          <span for="video" class="text-danger"></span>
        </div>

        <div class="checkbox">
          <label>
            <input id="history" name="history" type="checkbox"/>
            {{ __('words.ShowInHistory') }}
          </label>
          <span for="history" class="text-danger"></span>
        </div>

        <div class="checkbox">
          <label>
            <input id="status" name="status" type="checkbox"/>
            {{ __('words.Active') }}
          </label>
          <span for="status" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="category_id" class="control-label">{{ __('words.Category') }}</label>
          <select id="category_id" name="category_id" class="form-control">
            @if($categories)
              @foreach ($categories as $cat)
                <option value="{{$cat->id}}">{{$cat->title}}</option>
              @endforeach
            @endif
          </select>
          <span for="category_id" class="text-danger"></span>
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