@extends('layouts.admin')

@section('title', __('words.YourTicketsList'))

@section('myheader')
@endsection

@section('content')
<section>
  <h1>{{ __('words.YourTicketsList') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

  <div class="col-xs-12">
    <div class="box">

      <!-- box-header -->
      <div class="box-header">
        <h3 class="box-title">{{ __('words.YourTicketsList') }}</h3>
        <a href="{{url('admin\ticket\create')}}" class="btn btn-primary pull-right" style="margin-left: 1em;"><i
            class="fa fa-plus"></i> {{ __('words.NewTicket') }}</a>
      </div>
      <!-- /.box-header -->


      <div class="box-body table-responsive no-padding">

        @if (count($tickets) === 0)
        <div class="no-data">
          <h3>{{ __('words.NoTicketMessage') }}</h3>
          <a href="{{url('admin\ticket\create')}}" class="btn btn-primary" style="margin-left: 1em;"><i
              class="fa fa-plus"></i> {{ __('words.NewTicket') }}</a>
        </div>
        @else

        <table class="table table-hover persian-table table-striped table-bordered">
          <tr>
            <th>{{ __('words.TicketNo') }}</th>
            <th>{{ __('words.Title') }}</th>
            <th>{{ __('words.Subject') }}</th>
            <th>{{ __('words.Status') }}</th>
            <th>{{ __('words.Functions') }}</th>
          </tr>

          @foreach ($tickets as $ticket)

          <tr>
            <td>{{ $ticket->id }}</td>
            <td>{{ $ticket->title }}</td>
            <td>{{ $ticket->type_string() }}</td>
            <td>{{ $ticket->status_string() }}</td>

            <td>
              <a class="btn btn-warning" href="{{action('Admin\TicketController@edit', $ticket['id'])}}">
                <i class="fa fa-edit" title="{{ __('words.SeeTicket') }}"></i> {{ __('words.SeeTicket') }}
              </a>

              @if ($ticket->status != 3)
              <form style="display:inline;" action="{{ url('admin/ticket/' . $ticket->id) }}" method="post"
                onsubmit="return confirm('{{ __('words.CloseTicketMessage') }}');">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" title="{{ __('words.CloseTicket') }}">
                  <i class="fa fa-trash-o" title="{{ __('words.CloseTicket') }}"></i> {{ __('words.CloseTicket') }}
                </button>
              </form>
              @endif


            </td>
          </tr>

          @endforeach

        </table>

        @endif

      </div>

    </div>
  </div>

</section>

@endsection

@section('myfooter')
@endsection