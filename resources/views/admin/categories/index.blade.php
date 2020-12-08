@extends('layouts.admin')

@section('title',  __('words.CategoryList'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.CategoryList') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div class="col-xs-12">
  <div class="box">

    <!-- box-header -->
    <div class="box-header">
      <h3 class="box-title">{{ __('words.CategoryList') }}</h3>
      <a href="{{url('admin\category\create')}}" class="btn btn-primary pull-right" style="margin-left: 1em;"><i class="fa fa-plus"></i> {{ __('words.NewCategory') }}</a>
    </div>
    <!-- /.box-header -->


    <div class="box-body table-responsive no-padding">
    
      <table class="table table-hover persian-table table-striped table-bordered">
        <tr>
          <th>{{ __('words.Pic') }}</th>
          <th>{{ __('words.Title') }}</th>
          <th>{{ __('words.Functions') }}</th>
        </tr>

        @foreach ($categories as $category)

        <tr>
          <td><img src="{{$category->pic}}" height="75" alt="{{ $category->title }} pic" /></td>
          <td>{{$category->title}}</td>
          <td>
            <a class="btn btn-warning" href="{{action('Admin\CategoryController@edit', $category['id'])}}">
              <i class="fa fa-edit" title="{{ __('words.ChangeCategory') }}"></i>{{ __('words.ChangeCategory') }}
            </a>
            <form style="display:inline;" action="{{ url('admin/category/' . $category->id) }}" method="post"
              onsubmit="return confirm('{{ __('words.DeleteCategoryMessage') }}');">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" title="{{ __('words.DeleteCategory') }}">
                      <i class="fa fa-trash-o" title="{{ __('words.DeleteCategory') }}"></i> {{ __('words.DeleteCategory') }}
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