@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @if($errors->any())
          <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
              </ul>
          </div>
        @endif
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Main Functions</a></li>
            <li class="breadcrumb-item active" aria-current="page">Report</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
      <form action="/report/show" method="GET">
        <div class="col-md-12">
        <label>Choose Date For Report</label>
          <div class="form-group">
            <div class="input-group date" id="date-start" data-target-input="nearest">
                  <input type="text" name="dateStart" class="form-control datetimepicker-input" data-target="#date-start"/>
                  <div class="input-group-append" data-target="#date-start" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
              </div>
          </div>

          <div class="form-group">
           <div class="input-group date" id="date-end" data-target-input="nearest">
                <input type="text" name="dateEnd" class="form-control datetimepicker-input" data-target="#date-end"/>
                <div class="input-group-append" data-target="#date-end" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
          </div>
          <input class="btn btn-primary" type="submit" value="Show Report">
        
        </div>
      </form>
    </div>
  </div>

  <script type="text/javascript">
      $(function () {
          $('#date-start').datetimepicker({
            format : 'L'
          });
          $('#date-end').datetimepicker({
              format : 'L',
              useCurrent: false
          });
          $("#date-start").on("change.datetimepicker", function (e) {
              $('#date-end').datetimepicker('minDate', e.date);
          });
          $("#date-end").on("change.datetimepicker", function (e) {
              $('#date-start').datetimepicker('maxDate', e.date);
          });
      });
  </script>


@endsection





</head>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.js"></script>
        <script type="text/javascript"></script>
         


		