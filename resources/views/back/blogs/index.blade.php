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
			<td>Title</td>
			<td>decription</td>
			<td>figures</td>
			<td>fullstory</td>
			<td>heading</td>
			<td>status</td>
			<td></td>
		</tr>
	</thead>
	<tbody>
			@foreach($cat as $cat)
			<tr>
			<td>{{ $cat->id }}</td>	
			<td>{{ $cat->title }}</td>
			<td>{{ $cat->description }}</td>
			<td>{{ $cat->figures }}</td>
			<td>{{ $cat->fullstory }}</td>
			<td>{{ $cat->heading }}</td>
			<td>{{ $cat->status }}</td>

			<td><a href="/blog/{{$cat->id}}" class="btn btn-primary "> View</a></td>
			<td><a href="{{action('BlogController@edit',$cat['id'])}}" class="btn btn-warning " >Edit</a></td>

			<td> <form action="{{action('BlogController@destroy',$cat['id'])}}" method="post">
			@csrf
			<input type="hidden" name="_method" value="DELETE">
			<button class="btn btn-danger" type="submit">DELETE</button>
		</form></td>
		</tr>
	</tbody>

	@endforeach

<tfoot>
	<tr>
			<td>ID</td>
			<td>Title</td>
			<td>decription</td>
			<td>figures</td>
			<td>fullstory</td>
			<td>heading</td>
			<td>status</td>
			<td></td>
		</tr>
	</tr>
</tfoot>

</table>
@endsection

</div>
</div>

</div>
