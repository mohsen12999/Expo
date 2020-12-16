@extends('layouts.admin')

@section('title', __('words.CreateTicket'))

@section('myheader')
@endsection

@section('content')
<section>
  <h1>{{ __('words.CreateTicket') }}</h1>
</section>

<section class="content container-fluid">
  <!--------------------------
| Your Page Content Here |
-------------------------->

  <div class="col-xs-12">
    <div class="box box-primary">

      <div class="box-header with-border">
        <h3 class="box-title">{{ __('words.CreateTicket') }}</h3>
      </div>

      <form role="form" method="post" action="{{ url('admin/ticket/') }}" enctype="multipart/form-data">
        @csrf

        <div class="box-body">
          <div asp-validation-summary="ModelOnly" class="text-danger"></div>

          <div class="form-group">
            <label for="type" class="control-label">{{ __('words.TicketSubject') }}</label>
            <select id="type" name="type" class="form-control">
              <option value="0">{{ __('words.Other') }}</option>
              <option value="1">{{ __('words.Technical') }}</option>
              <option value="2">{{ __('words.Financial') }}</option>
            </select>
            <span for="type" class="text-danger"></span>
          </div>

          <div class="form-group">
            <label for="title" class="control-label">{{ __('words.Title') }}</label>
            <input id="title" name="title" class="form-control" required />
            <span for="title" class="text-danger"></span>
          </div>

          <div class="form-group">
            <label for="description" class="control-label">{{ __('words.Description') }}</label>
            <textarea id="description" name="description" class="form-control"
              placeholder="{{ __('words.Description') }} ..." required></textarea>
            <span for="description" class="text-danger"></span>
          </div>

          <div class="form-group">
            <label for="attachment" class="control-label">{{ __('words.Attachment') }}</label>
            <input id="attachment" name="attachment" type="file" accept="image/*,video/*,text/plain,application/pdf"
              class="form-control-file" />
            <span for="attachment" class="text-danger"></span>
          </div>

        </div>

        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ __('words.SendTicket') }}</button>
        </div>

      </form>

    </div>
  </div>

</section>

@endsection

@section('myfooter')
@endsection