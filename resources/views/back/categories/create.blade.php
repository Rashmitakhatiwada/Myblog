@extends('back.master');
@section('content')
<div class="row">
	<div class="col-md-8">
		<form method="post" action="{{url('category')}}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="name">categories:</label>
						<input type="text" name="name" class="form-control">
						<input type="submit" name="submit" value="submit">
				</div>
				
			</div>

		</form>
		@if($errors->any())
		<ul class="alert alert alert-danger">
			@foreach($errors->all() as $error)
			<li>
				{{$error}}
			</li>
			@endforeach
			
		</ul>
		@endif
	</div>
</div>
@endsection