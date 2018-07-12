@extends('back.master');
@section('content')
<div class="container">
	<h2>Edit a form</h2></br>
	<form method="post" action="{{action('BlogController@update',$id)}}">
	@csrf
	<input type="hidden" name="_method" value="PATCH">
<div class="row">
	<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="title"> title: </label>
        <input type="text" class="form-control" name="title" value="{{$cat->title}}">
        <label for="description"> description: </label>
        <input type="text" class="form-control" name="description" value="{{$cat->description}}">
        <label for="figure"> figure: </label>
        <input type="text" class="form-control" name="figure" value="{{$cat->figure}}">
        <label for="heading"> heading: </label>
        <input type="text" class="form-control" name="heading" value="{{$cat->heading}}">
        <label for="fullstory"> full story: </label>
        <input type="text" class="form-control" name="fullstory" value="{{$cat->fullstory}}">
        <label for="status"> status: </label>
        <input type="text" class="form-control" name="status" value="{{$cat->status}}">
        <input type="submit" name="submit" value="send">
						
					</div>
				</div>
				
			</div>

		</form>
</div>
@endsection