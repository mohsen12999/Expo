@extends('layouts.admin')

@section('title',  __('words.brandList'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.brandList') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div class="col-xs-12">
  <div class="box">

    <!-- box-header -->
    <div class="box-header">
      <h3 class="box-title">{{ __('words.brandList') }}</h3>
      <a href="{{url('admin\brand\create')}}" class="btn btn-primary pull-right" style="margin-left: 1em;"><i class="fa fa-plus"></i> {{ __('words.newBrand') }}</a>
    </div>
    <!-- /.box-header -->


    <div class="box-body table-responsive no-padding">

        @foreach ($brands as $brand)
            <figure class="brand-figure">
                <img src="{{ asset($brand->pic) }}" alt="Brand {{$brand->id}}">
                <figcaption>
                    <form style="display:inline;" action="{{ url('admin/brand/' . $brand->id) }}" method="post"
                        onsubmit="return confirm('{{ __('words.DeleteBrandMessage') }}');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" title="{{ __('words.DeleteBrand') }}">
                                <i class="fa fa-trash-o" title="{{ __('words.DeleteBrand') }}"></i> {{ __('words.DeleteBrand') }}
                            </button>
                      </form>
                </figcaption>
            </figure> 
        @endforeach
    
    </div>

  </div>
</div>

</section>

@endsection

@section('myfooter')
@endsection