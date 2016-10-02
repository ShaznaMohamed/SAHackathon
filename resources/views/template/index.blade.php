<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<h1> TEMPLATE HOME PAGE </h1>
<div class="container">
<table class="table table-striped">

@foreach($data as $item)
  <tr>
    <td>{{$item->text1}}</td>
    <td>{{$item->text2}}</td>
    <td>{{$item->text3}}</td>
    <td>{{$item->int1}}</td>
    <td>{{$item->int2}}</td>
    <td>{{$item->float1}}</td>
    <td>{{$item->datetime}}</td>
    <td><a href="http://localhost:8000/template/{{$item->id}}">View</a></td>
    <td><a href="{{route('deletetemplateitem')}}?id={{$item->id}}">Delete</a></td>

  </tr>
@endforeach
      <input type="hidden" name="_token" value="{{ Session::token() }}">
</table>
</div>
