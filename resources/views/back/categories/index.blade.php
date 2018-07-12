@extends('back.master')
	
 <div class="row">
	<div class="col-md-10">
		<div class="agileits-w3layouts-specials" id="categ">
			
  @section('content')
  @if(\Session::has('success'))
  <div class="alert-alert-success">
  	<p>{{\session::get('success')}}</p>
  </div><br/>
  @endif

<table cellpadding=5 cellspacing=4 border=0 class="table">

	<thead>
		<tr>
			<td>ID</td>
			<td>User Name</td>
			<td></td>
		</tr>
	</thead>
	<tbody>
			@foreach($categories as $categories)
			<tr>
			<td>{{ $categories->id }}</td>
			<td>{{ $categories->name }}</td>
			<td><a href="/categories/{{ $categories->id }}" class="btn btn-primary "> View</a></td>
			<td><a href="{{ action('CategoryController@edit', $categories->id) }}" class="btn btn-warning">Edit</a></td>

			<td> <form action="{{action('CategoryController@destroy',$categories['id'])}}" method="post">
			@csrf
			<input type="hidden" name="_method" value="DELETE">
			<button class="btn btn-danger" type="submit">DELETE</button>
		</form></td>
		</tr>
	</tbody>

	@endforeach

<tfoot>
	<tr>
		<td>Id</td>
		<td>User Name</td>
		<td></td>
	</tr>
</tfoot>

</table>
@endsection

</div>
</div>

</div>
