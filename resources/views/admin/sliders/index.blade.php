@extends('layouts.admin')

@section('title',  __('words.SliderList'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.SliderList') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div class="col-xs-12">
  <div class="box">

    <!-- box-header -->
    <div class="box-header">
      <h3 class="box-title">{{ __('words.SliderList') }}</h3>
      <a href="{{url('admin\slider\create')}}" class="btn btn-primary pull-right" style="margin-left: 1em;"><i class="fa fa-plus"></i> {{ __('words.NewSlider') }}</a>
    </div>
    <!-- /.box-header -->


    <div class="box-body table-responsive no-padding">
    
      <table class="table table-hover persian-table table-striped table-bordered">
        <tr>
          <th>{{ __('words.Pic') }}</th>
          <th>{{ __('words.Title') }}</th>
          <th>{{ __('words.Description') }}</th>
          <th>{{ __('words.btn_title') }}</th>
          <th>{{ __('words.btn_link') }}</th>
          <th>{{ __('words.Functions') }}</th>
        </tr>

        @foreach ($sliders as $slider)

        <tr>
          <td><img src="{{$slider->pic}}" height="75" alt="{{ $slider->title }} pic" /></td>
          <td>{{$slider->title}}</td>
          <td>{{$slider->description}}</td>
          <td>{{$slider->btn_title}}</td>
          <td>{{$slider->btn_link}}</td>
          <td>
            <a class="btn btn-warning" href="{{action('Admin\SliderController@edit', $slider['id'])}}">
              <i class="fa fa-edit" title="{{ __('words.ChangeSlider') }}"></i>{{ __('words.ChangeSlider') }}
            </a>
            <form style="display:inline;" action="{{ url('admin/slider/' . $slider->id) }}" method="post"
              onsubmit="return confirm('{{ __('words.DeleteSliderMessage') }}');">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" title="{{ __('words.DeleteSlider') }}">
                      <i class="fa fa-trash-o" title="{{ __('words.DeleteSlider') }}"></i> {{ __('words.DeleteSlider') }}
                  </button>
            </form>
          </td>
        </tr>
            
        @endforeach

      </table>
    
    </div>

  </div>
</div>

</section>

@endsection

@section('myfooter')
@endsection