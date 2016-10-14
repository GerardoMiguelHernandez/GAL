@extends('layouts.app')
@section('css')
    <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="row"    >
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Dropzone
                </div>
                <div class="panel-body">
                    {!! Form::open(['route'=> 'imagenes.store', 'method' => 'POST', 'files'=>'true']) !!}
                    {{ csrf_token() }}

<div class="fallback">               
	  <input type="file" class="dropzone" id="my-dropzone" name="file[]" value="" multiple>
	  <div class="dropzone-previews"></div>
	 </div>
                    <button type="submit" class="btn btn-success" id="submit">Save</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>





<html>
<head>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Language', 'Speakers (in millions)'],
          ['German',  5.85],
          ['French',  1.66],
          ['Italian', 0.316],
          ['Romansh', 0.0791]
        ]);

      var options = {
        legend: 'none',
        pieSliceText: 'label',
        title: 'Swiss Language Use (100 degree rotation)',
        pieStartAngle: 100,
      };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script> 

  
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    
  </body>
</html>
@endsection
@section('scripts')
    {!! Html::script('js/dropzone.js'); !!}
     
  
@endsection
