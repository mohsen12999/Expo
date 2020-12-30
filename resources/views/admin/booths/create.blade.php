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


            <form role="form" method="post" action="{{ url('admin/booth') }}" enctype="multipart/form-data">
                @csrf

                <input name="package_id" id="package_id" type="hidden" value="{{$package_id}}" />
                <input name="expo_id" id="expo_id" type="hidden" value="{{$expo_id}}" />

                <div class="box-body">
                    <div asp-validation-summary="ModelOnly" class="text-danger"></div>

                    <div class="form-group">
                        <label for="Name" class="control-label">{{ __('words.Pic') }}</label>
                        <div>
                            <img id="inputImage" onclick="$('#pic').trigger('click');"
                                style="cursor: pointer;width: auto;height: 180px;" src="/img/no-image.png"
                                class="img-rounded" alt="no Image Available">
                            <input id="pic" name="pic" type="file" onchange="GetImage()" style="display: none"
                                accept="image/*" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="control-label">{{ __('words.Title') }}</label>
                        <input id="title" name="title" class="form-control" required />
                        <span for="title" class="text-danger"></span>
                    </div>

                    <div class="form-group">
                        <label for="description" class="control-label">{{ __('words.Description') }}</label>
                        <textarea id="description" name="description" class="form-control" placeholder="description ..."
                            required></textarea>
                        <span for="description" class="text-danger"></span>
                    </div>

                    <div class="form-group">
                        <label for="images" class="control-label">{{ __('words.Images') }}</label>
                        <input id="images" name="images[]" type="file" multiple class="form-control-file"
                            onchange="imageCheck()" />
                        <span for="images" class="text-danger"></span>
                    </div>

                    <div class="form-group">
                        <label for="videos" class="control-label">{{ __('words.Video') }}</label>
                        <input id="videos[]" name="videos[]" type="file" multiple accept="video/*"
                            class="form-control-file" onchange="videoCheck()" />
                        <span for="video" class="text-danger"></span>
                    </div>

                    <div class="form-group">
                        <label for="catalog" class="control-label">{{ __('words.Catalog') }}</label>
                        <input id="catalog" name="catalog" type="file" accept="application/pdf"
                            class="form-control-file" onchange="catalogCheck()" />
                        <span for="catalog" class="text-danger"></span>
                    </div>

                    <hr>

                    @foreach ($themes as $theme)

                    <label class="expo-label">
                        <input id="theme_id" name="theme_id" type="radio" value="{{$theme->id}}" required />
                        <div>
                            <img src="{{$theme->pic}}" alt="{{$theme->title}}" />
                            <h4>{{$theme->title}}</h4>
                        </div>
                    </label>

                    @endforeach

                </div>

                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                        {{ __('words.Save') }}</button>
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



    function imageCheck() {
        const el = document.querySelector('#images');
        const fies = el.files;

        @if ($package->photo_count)
        const maxFileCount = {{ $package->photo_count }}
        if(files.length>maxFileCount){
            alert("you can only upload up to " + maxFileCount + " files");
            el.value = "";
            return false;
        }
        @endif

        @if ($package->photo_size)
        var totalSize = 0
        var maxFileSize = {{ $package->photo_size }}
        for (i = 0; i < files.length; i++)
        {
            if (files[i].size > maxFileSize*1024*1024){
                alert("some of your file are too big, mor than " + maxFileSize + "MB");
                el.value = "";
                return false;
            }
            totalSize +=files[i].size;
        }
        if(totalSize > maxFileSize*1024*1024){
            alert("your files are too big, mor than " + maxFileSize + "MB");
            el.value = "";
            return false;
        }
        @endif
    }

    function videoCheck() {
        const el = document.querySelector('#video');
        const files = el.files;

        @if ($package->video_count)
        const maxFileCount = {{ $package->video_count }}
        if(files.length>maxFileCount){
            alert("you can only upload up to " + maxFileCount + " files");
            el.value = "";
            return false;
        }
        @endif

        @if ($package->video_size)
        var totalSize = 0
        var maxFileSize = {{ $package->video_size }}
        for (i = 0; i < files.length; i++)
        {
            if (files[i].size > maxFileSize*1024*1024){
                alert("some of your file are too big, mor than " + maxFileSize + "MB");
                el.value = "";
            return false;
            }
            totalSize +=files[i].size;
        }
        if(totalSize > maxFileSize*1024*1024){
            alert("your files are too big, mor than " + maxFileSize + "MB");
            el.value = "";
            return false;
        }
        @endif


        @if ($package->video_time)
        var maxTime = {{ $package->video_time }}
        var vid = [];
        for (i = 0; i < files.length; i++)
        {
            var vid[i]= document.createElement('video');
            vid[i].src = URL.createObjectURL(files[i]);
            vid[i].ondurationchange = function() {
                if(vid[i].duration> maxTime*60){
                alert("you can only upload video up to " + maxTime + " minute");
                el.value = "";
                return false;
                }
                vid[i] = null;
            }
        }
        @endif
    }

    function catalogCheck() {
        const el = document.querySelector('#catalog');
        const file = el.files[0];

        @if ($package->catalog_size)
        var maxFileSize = {{ $package->catalog_size }}
        if(file.size>maxFileSize*1024*1024){ // 10MB
            alert("you can only upload up to " + maxFileSize + "MB file");
            el.value = "";
            return false;
        }
        @endif

        @if ($package->catalog_page)
        const maxCatalogPage = {{ $package->catalog_page }}
        var reader = new FileReader();
        reader.readAsBinaryString(file);
        reader.onloadend = function(){
            var count = reader.result.match(/\/Type[\s]*\/Page[^s]/g).length;
            if(count>maxCatalogPage){
                alert("you can only upload up to " + maxCatalogPage + " pages for catalog");
            }
        }
        @endif
    }

</script>
@endsection
