<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<div class="row">
	<div class="col-lg-6">
		<form class="form-vertical" role="form" method="post" action="{{route('addtemplateitem')}}">
			<div class="form-group">
				<label for="text1" class="control-label">Text1</label>
				<input type="text" name="text1" class="form-control" id="text1">

        @if ($errors->has('text1'))
                <span class="help-block">{{ $errors->first('text1') }}</span>
        @endif

			</div>

      <div class="form-group">
        <label for="text2" class="control-label">Text2</label>
        <input type="text" name="text2" class="form-control" id="text2">

        @if ($errors->has('text2'))
                <span class="help-block">{{ $errors->first('text2') }}</span>
        @endif
      </div>

      <div class="form-group">
        <label for="text3" class="control-label">Text3</label>
        <input type="text" name="text3" class="form-control" id="text3">

        @if ($errors->has('text3'))
                <span class="help-block">{{ $errors->first('text3') }}</span>
        @endif
      </div>

      <div class="form-group">
        <label for="int1" class="control-label">int1</label>
        <input type="text" name="int1" class="form-control" id="int1">

        @if ($errors->has('int1'))
                <span class="help-block">{{ $errors->first('int1') }}</span>
        @endif
      </div>

      <div class="form-group">
        <label for="int2" class="control-label">int2</label>
        <input type="text" name="int2" class="form-control" id="int2">

        @if ($errors->has('int2'))
                <span class="help-block">{{ $errors->first('int2') }}</span>
        @endif
      </div>

      <div class="form-group">
        <label for="float1" class="control-label">float1</label>
        <input type="text" name="float1" class="form-control" id="float1">

        @if ($errors->has('flaot1'))
                <span class="help-block">{{ $errors->first('float1') }}</span>
        @endif
      </div>

      <div class="form-group">
        <label for="datetime" class="control-label">datetime</label>
        <input type="text" name="datetime" class="form-control" id="datetime">
      </div>

			<div class="form-group">
				<label for="password" class="control-label">Password</label>
				<input type="password" name="password" class="form-control" id="password">
			</div>

			<div class="checkbox">
				<label>
					<input type="checkbox" name="remember">Remember me
				</label>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-default"> Sign in </button>
			</div>


        <input type="hidden" name="_token" value="{{ Session::token() }}">
		</from>
	</div>
</div>
