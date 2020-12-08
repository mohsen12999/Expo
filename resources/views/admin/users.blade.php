@extends('layouts.admin')

@section('title', __('words.UserList'))

@section('myheader')
@endsection

@section('content')
<section>
    <h1>{{ __('words.UserList') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

<div class="col-xs-12">
  <div class="box">

    <!-- box-header -->
    <div class="box-header">
      <h3 class="box-title">{{ __('words.UserList') }}</h3>
    </div>
    <!-- /.box-header -->


    <div class="box-body table-responsive no-padding">
    
      <table class="table table-hover persian-table table-striped table-bordered">
        <tr>
          <th>{{ __('words.Name') }}</th>
          <th>{{ __('words.Email') }}</th>
          <th>{{ __('words.Mobile') }}</th>
          <th>{{ __('words.Tel') }}</th>
          <th>{{ __('words.Address') }}</th>
          <th>{{ __('words.Functions') }}</th>
        </tr>

        @foreach ($users as $user)

          @if ($user->id != $user_id)
            <tr>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->mobile}}</td>
              <td>{{$user->tel}}</td>
              <td>{{$user->address}}</td>
              <td>
                <form style="display:inline;" action="{{ url('admin/users/' . $user->id) }}" method="post"
                  onsubmit="return confirm('{{ __('words.DeleteUserMessage') }}');">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" title="{{ __('words.DeleteUser') }}">
                          <i class="fa fa-trash-o" title="{{ __('words.DeleteUser') }}"></i> {{ __('words.DeleteUser') }}
                      </button>
                </form>

              </td>
            </tr>
          @endif
            
        @endforeach

      </table>
    
    </div>

  </div>
</div>


</section>

@endsection

@section('myfooter')
@endsection