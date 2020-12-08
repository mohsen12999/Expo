@extends('layouts.admin')

@section('title', __('words.EditBooth'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.EditBooth') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div class="col-xs-12">
  <div class="box box-primary">

    <div class="box-header with-border">
      <h3 class="box-title">{{ __('words.EditBooth') }}</h3>
    </div>


    <form role="form" method="post"  action="{{ url('admin/booth/'.$booth->id) }}" enctype="multipart/form-data">
      @csrf
      @method('PATCH')

      <div class="box-body">
        <div asp-validation-summary="ModelOnly" class="text-danger"></div>
        <input name="id" id="id" type="hidden" value="{{$booth->id}}" />

        <div class="form-group">
          <label for="Name" class="control-label">{{ __('words.Pic') }}</label>
          <div>
            <img id="inputImage" onclick="$('#pic').trigger('click');" style="cursor: pointer;width: auto;height: 180px;"
              src="{{$booth->pic==''?"/img/no-image.png":$booth->pic}}" class="img-rounded" alt="no Image Available">
            <input id="pic" name="pic" type="file" onchange="GetImage()" style="display: none" accept="image/*"/>
          </div>
        </div>

        <div class="form-group">
          <label for="title" class="control-label">{{ __('words.Title') }}</label>
          <input id="title" name="title" class="form-control" value="{{$booth->title}}"/>
          <span for="title" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="description" class="control-label">{{ __('words.Description') }}</label>
          <textarea id="description" name="description" class="form-control" placeholder="description ..." >{{$booth->description}}</textarea>
          <span for="description" class="text-danger"></span>
        </div>


        <div class="form-group">
          <label for="package_id" class="control-label">{{ __('words.YourPackage') }}</label>
          <select id="package_id" name="package_id" class="form-control" >
            @if($userPackages)
              @foreach ($userPackages as $package)
                <option value="{{$package->id}}" @if($booth->package_id==$package->id ) selected @endif >{{$package->title}}</option>
              @endforeach
            @endif
          </select>
          <span for="category_id" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="package_id" class="control-label"></label>
          <select id="package_id" name="package_id" class="form-control" >
            @if($expos)
              @foreach ($expos as $expo)
                <option value="{{$expo->id}}" @if($booth->expo_id==$expo->id ) selected @endif >{{$expo->title}}</option>
              @endforeach
            @endif
          </select>
          <span for="package_id" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="theme_id" class="control-label"></label>
          <select id="theme_id" name="theme_id" class="form-control" >
            @if($themes)
              @foreach ($themes as $theme)
                <option value="{{$theme->id}}" @if($booth->theme_id==$theme->id ) selected @endif >{{$theme->title}}</option>
              @endforeach
            @endif
          </select>
          <span for="theme_id" class="text-danger"></span>
        </div>

        @if ($booth->video!=null && $booth->video!='')
          <video src="{{$booth->video}}" controls></video>
        @endif

        <div class="form-group">
          <label for="video" class="control-label">{{ __('words.NewVideo') }}</label>
          <input id="video" name="video" type="file" accept="video/*" class="form-control-file"/>
          <span for="video" class="text-danger"></span>
        </div>

        @if ($booth->catalog!=null && $booth->catalog!='')
          <a href="{{asset($booth->catalog)}}" title="{{ __('words.Catalog') }}">{{ __('words.Catalog') }}</a>
        @endif

        <div class="form-group">
          <label for="catalog" class="control-label">{{ __('words.Catalog') }}</label>
          <input id="catalog" name="catalog" type="file" accept="application/pdf" class="form-control-file"/>
          <span for="catalog" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label for="images" class="control-label">{{ __('words.NewImages') }}</label>
          <input id="images" name="images[]" type="file" multiple class="form-control-file"/>
          <span for="images" class="text-danger"></span>
        </div>

        @if ($booth_images)
          <div class="well">
            @foreach ($booth_images as $booth_image)
            <span>
              <img width="100" src="{{$booth_image->pic}}" alt="{{$booth_image->id}}" />
              <form action="{{ url('admin/booth/image' . $expo->id) }}" method="post"
                onsubmit="return confirm('{{ __('words.DeleteImageConfirm') }}');">
                    @csrf
                    @method('DELETE')
                <input type="hidden" id="id" name="id" value="{{$booth_image->id}}" />
                <button type="submit" class="btn btn-danger">{{ __('words.DeleteImage') }}</button>
              </form>
            </span>
            @endforeach
          </div>
        @endif


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
@endsection