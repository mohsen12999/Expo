@extends('layouts.admin')

@section('title', __('words.Profile') )

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.Profile') }}</h1>
</section>

<section class="content container-fluid">

<div class="col-md-12">
  <div class="box box-primary">

    <div class="box-header with-border">
        <h3 class="box-title">{{ __('words.YourProfileInfo') }}</h3>
    </div>

    <form role="form" method="post"  action="{{ url('admin/profile/') }}" enctype="multipart/form-data">
      @csrf

      <div class="box-body">
        <div asp-validation-summary="ModelOnly" class="text-danger"></div>
        <input name="id" id="id" type="hidden" value="{{$user->id}}" />

        <div class="form-group">
            <label for="Name" class="control-label">{{ __('words.Avatar') }}</label>
            <div>
              <img id="inputImage" onclick="$('#pic').trigger('click');" style="cursor: pointer;width: auto;height: 180px;"
                src="{{$user->avatar===''?asset('/img/no-image.png'):asset($user->avatar)}}" class="img-rounded" alt="no Image Available">
              <input id="pic" name="pic" type="file" onchange="GetImage()" style="display: none" accept="image/*"/>
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="control-label">{{ __('words.name') }}</label>
            <input id="name" name="name" class="form-control" value="{{$user->name}}"/>
            <span for="name" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="mobile" class="control-label">{{ __('words.Mobile') }}</label>
          <input id="mobile" name="mobile" type="tel" class="form-control" value="{{$user->mobile}}"/>
          <span for="mobile" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="tel" class="control-label">{{ __('words.Tel') }}</label>
          <input id="tel" name="tel" type="tel" class="form-control" value="{{$user->tel}}"/>
          <span for="tel" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="website" class="control-label">{{ __('words.Website') }}</label>
          <input id="website" name="website" type="text" class="form-control" value="{{$user->website}}"/>
          <span for="website" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="address" class="control-label">{{ __('words.Address') }}</label>
          <textarea id="address" name="address" type="address" class="form-control">{{$user->address}}</textarea>
          <span for="address" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="country" class="control-label">{{ __('words.Country') }}</label>
          <input id="country" name="country" type="text" class="form-control" value="{{$user->country}}"/>
          <span for="country" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="presenter" class="control-label">{{ __('words.Presenter') }}</label>
          <input id="presenter" list="presenters" name="presenter" type="text" class="form-control" value="{{$user->presenter}}"/>
          <datalist id="presenters">
            @foreach ($presenters as $presenter)
              <option value="{{$presenter->name}}">
            @endforeach
          </datalist>
          <span for="presenter" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="color" class="control-label">{{ __('words.Color') }}</label>
          <input id="color" name="color" type="color" value="{{$user->color}}"/>
          <span for="color" class="text-danger"></span>
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