 @extends('back.master')
	
 <div class="row">
	<div class="col-md-10">
		<div class="agileits-w3layouts-specials" id="models">
  @section('content')

<table cellpadding=5 cellspacing=4 border=0 class="table">
			<tr>
			<td>{{ $cat->id }}</td>	
			<td>{{ $cat->title }}</td>
			<td>{{ $cat->description }}</td>
			<td>{{ $cat->figures }}</td>
			<td>{{ $cat->fullstory }}</td>
			<td>{{ $cat->heading }}</td>
			<td>{{ $cat->status }}</td>
			
		</tr>
	



</table>
 
@endsection

</div>
</div>
</div>
