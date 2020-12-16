@extends('layouts.admin')

@section('title', __('words.TicketsList'))

@section('myheader')
@endsection

@section('content')
<section>
  <h1>{{ __('words.TicketsList') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

  <div class="col-xs-12">
    <div class="box">

      <!-- box-header -->
      <div class="box-header">
        <h3 class="box-title">{{ __('words.TicketsList') }}</h3>
      </div>
      <!-- /.box-header -->


      <div class="box-body table-responsive no-padding">

        <table class="table table-hover persian-table table-striped table-bordered">
          <tr>
            <th>{{ __('words.TicketNo') }}</th>
            <th>{{ __('words.User') }}</th>
            <th>{{ __('words.Title') }}</th>
            <th>{{ __('words.Subject') }}</th>
            <th>{{ __('words.Status') }}</th>
            <th>{{ __('words.Functions') }}</th>
          </tr>

          @foreach ($tickets as $ticket)

          <tr>
            <td>{{ $ticket->id }}</td>
            <td>{{ $ticket->name }}</td>
            <td>{{ $ticket->title }}</td>
            <td>{{ $ticket->type_string() }}</td>
            <td>{{ $ticket->status_string() }}</td>

            <td>
              {{-- <a class="btn btn-warning" href="{{ action('Admin\AdminController@answerTicket', $ticket['id'])}}">
              --}}
              <a class="btn btn-warning" href="{{ url('/admin/answer-ticket/'.$ticket['id'])}}">
                <i class="fa fa-edit" title="{{ __('words.SeeTicket') }}"></i> {{ __('words.SeeTicket') }}
              </a>

              @if ($ticket->status != 3)
              <form style="display:inline;" action="{{ url('admin/tickets/' . $ticket->id) }}" method="post"
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

      </div>

    </div>
  </div>

</section>

@endsection

@section('myfooter')
@endsection