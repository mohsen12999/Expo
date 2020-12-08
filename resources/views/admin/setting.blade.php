@extends('layouts.admin')

@section('title', __('words.setting'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.setting') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div class="col-md-6 col-xs-12">
    <div class="box box-primary">

      <div class="box-header with-border">
          <h3 class="box-title">{{ __('words.Tel') }}</h3>
      </div>

      <form role="form" method="post"  action="{{ url('/admin/setting/tel') }}" >
        @csrf

        <div class="box-body">
            <div class="form-group">
                <label for="tel" class="control-label">{{ __('words.Tel') }}</label>
                <input id="tel" name="tel" class="form-control" value="{{$tel}}"/>
                <span for="tel" class="text-danger"></span>
            </div>
        </div>

        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ __('words.Save') }}</button>
        </div>

      </form>

    </div>
</div>

<div class="col-md-6 col-xs-12">
    <div class="box box-primary">

      <div class="box-header with-border">
          <h3 class="box-title">{{ __('words.Address') }}</h3>
      </div>

      <form role="form" method="post"  action="{{ url('/admin/setting/address') }}">
        @csrf

        <div class="box-body">
            <div class="form-group">
                <label for="address" class="control-label">{{ __('words.Address') }}</label>
                <input id="address" name="address" class="form-control" value="{{$address}}"/>
                <span for="address" class="text-danger"></span>
            </div>
        </div>

        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ __('words.Save') }}</button>
        </div>

      </form>

    </div>
</div>

<div class="col-md-6 col-xs-12">
    <div class="box box-primary">

      <div class="box-header with-border">
          <h3 class="box-title">{{ __('words.SocialNetwork') }}</h3>
      </div>

      <form role="form" method="post"  action="{{ url('/admin/setting/social-network') }}">
        @csrf

        <div class="box-body">

            <div class="form-group">
                <label for="facebook" class="control-label">Facebook</label>
                <input id="facebook" name="facebook" class="form-control" value="{{$facebook}}"/>
                <span for="facebook" class="text-danger"></span>
            </div>

            <div class="form-group">
                <label for="twitter" class="control-label">Twitter</label>
                <input id="twitter" name="twitter" class="form-control" value="{{$twitter}}"/>
                <span for="twitter" class="text-danger"></span>
            </div>

            <div class="form-group">
                <label for="instagram" class="control-label">Instagram</label>
                <input id="instagram" name="instagram" class="form-control" value="{{$instagram}}"/>
                <span for="instagram" class="text-danger"></span>
            </div>

            <div class="form-group">
                <label for="telegram" class="control-label">Telegram</label>
                <input id="telegram" name="telegram" class="form-control" value="{{$telegram}}"/>
                <span for="telegram" class="text-danger"></span>
            </div>

        </div>

        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ __('words.Save') }}</button>
        </div>

      </form>

    </div>
</div>

<div class="col-md-6 col-xs-12">
    <div class="box box-primary">

      <div class="box-header with-border">
          <h3 class="box-title">{{ __('words.Logo') }}</h3>
      </div>

      <form role="form" method="post"  action="{{ url('/admin/setting/logo') }}" enctype="multipart/form-data">
        @csrf

        <div class="box-body">

            <div class="form-group">
                <label for="Name" class="control-label">{{ __('words.Logo') }}</label>
                <div>
                  <img id="inputImage" onclick="$('#pic').trigger('click');" style="cursor: pointer;height: auto;max-width: 100%;max-height: 100%;"
                    src="{{$logo===''?asset('/img/no-image.png'):asset($logo)}}" class="img-rounded" alt="no Image Available">
                  <input id="pic" name="pic" type="file" onchange="GetImage()" style="display: none" accept="image/*"/>
                </div>
            </div>

        </div>

        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ __('words.Save') }}</button>
        </div>

      </form>

    </div>
</div>

{{-- <div class="col-md-12">
    <div class="box box-primary">

      <div class="box-header with-border">
          <h3 class="box-title">{{ __('words.Footer') }}</h3>
      </div>

      <form role="form" method="post"  action="{{ url('/admin/setting/footer') }}" enctype="multipart/form-data">
        @csrf

        <div class="box-body">
            <div class="form-group">
                <label for="footer" class="control-label">{{ __('words.Footer') }}</label>
                <textarea name="footer" id="footer" class="form-control">{{$footer}}</textarea>
                <span for="footer" class="text-danger"></span>
            </div>
        </div>

        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ __('words.Save') }}</button>
        </div>

      </form>

    </div>
</div> --}}


<div class="col-md-6 col-xs-12">
  <div class="box box-primary">

    <div class="box-header with-border">
        <h3 class="box-title">{{ __('words.exhibitor_benefit') }}</h3>
    </div>

    <form role="form" method="post"  action="{{ url('/admin/setting/exhibitor-benefit') }}" enctype="multipart/form-data">
      @csrf

      <div class="box-body">

          <div class="form-group">
            <label for="title" class="control-label">{{ __('words.Title') }}</label>
            <input id="title" name="title" class="form-control" value="{{$exhibitor_benefit?$exhibitor_benefit->title:""}}"/>
            <span for="title" class="text-danger"></span>
          </div>

          <div class="form-group">
              <label for="description" class="control-label">{{ __('words.Description') }}</label>
              <textarea name="description" id="description" class="form-control">{{$exhibitor_benefit?$exhibitor_benefit->description:""}}</textarea>
              <span for="description" class="text-danger"></span>
          </div>

          <div class="form-group">
            <label for="other" class="control-label">{{ __('words.btn_title') }}</label>
            <input id="other" name="other" class="form-control" value="{{$exhibitor_benefit?$exhibitor_benefit->other:""}}"/>
            <span for="other" class="text-danger"></span>
          </div>

          <div class="form-group">
            <label for="url" class="control-label">{{ __('words.btn_link') }}</label>
            <input id="url" name="url" class="form-control" value="{{$exhibitor_benefit?$exhibitor_benefit->url:""}}"/>
            <span for="url" class="text-danger"></span>
          </div>

      </div>

      <!-- /.box-body -->
      <div class="box-footer">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ __('words.Save') }}</button>
      </div>

    </form>

  </div>
</div>

<div class="col-md-6 col-xs-12">
  <div class="box box-primary">

    <div class="box-header with-border">
        <h3 class="box-title">{{ __('words.visitor_benefit') }}</h3>
    </div>

    <form role="form" method="post"  action="{{ url('/admin/setting/visitor-benefit') }}" enctype="multipart/form-data">
      @csrf

      <div class="box-body">

        <div class="form-group">
          <label for="title" class="control-label">{{ __('words.Title') }}</label>
          <input id="title" name="title" class="form-control" value="{{$visitor_benefit?$visitor_benefit->title:""}}"/>
          <span for="title" class="text-danger"></span>
        </div>

        <div class="form-group">
            <label for="description" class="control-label">{{ __('words.Description') }}</label>
            <textarea name="description" id="description" class="form-control">{{$visitor_benefit?$visitor_benefit->description:""}}</textarea>
            <span for="description" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="other" class="control-label">{{ __('words.btn_title') }}</label>
          <input id="other" name="other" class="form-control" value="{{$visitor_benefit?$visitor_benefit->other:""}}"/>
          <span for="other" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="url" class="control-label">{{ __('words.btn_link') }}</label>
          <input id="url" name="url" class="form-control" value="{{$visitor_benefit?$visitor_benefit->url:""}}"/>
          <span for="url" class="text-danger"></span>
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
