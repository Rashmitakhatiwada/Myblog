@extends('back.master');
@section('content')
<div class="container">
	<h2>Edit a form</h2></br>
	<form method="post" action="{{ action('CategoryController@update', $categories->id) }}">
	@csrf
	<input type="hidden" name="_method" value="PATCH">
<div class="row">
	<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="name">Name:</label>
						<input type="text" name="name" class="form-control" value="{{$categories->name}}"/>
					</div>
					
				</div>
					<div class="row">
						<div class="col-md-4"></div>
						<button type="submit" class="btn btn-success" style="margin-left: 38px">Update</button>
				</div>
				
			</div>

		</form>
</div>
@endsection