<?php echo $_REQUEST['id'];
$id = $_REQUEST['id'];
//use DB;
DB::table('template_tables')->where('id', '=', $id)->delete();

?>

<form action="{{route('deletetemplateitem')}}" method="post">
  <input type="submit" value="go back">


  <input type="hidden" name="_token" value="{{ Session::token() }}">
</form>
