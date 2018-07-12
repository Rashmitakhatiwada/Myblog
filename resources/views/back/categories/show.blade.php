 @extends('back.master');
	
 <div class="row">
	<div class="col-md-10">
		<div class="agileits-w3layouts-specials" id="model">
  @section('content')

<table cellpadding=5 cellspacing=4 border=0 class="table">

			
			<tr>
			<td>ID</td> <td>{{ $categories->id }}</td>
			<td>User Name</td> <td>{{ $categories->name }}</td>
			<td>Description</td> <td>{{ $categories->description  }} </td>
		</tr>
	



</table>
 
@endsection

</div>
</div>
</div>
