
@extends('back.master');

@section('content')

<div class="row">
    <div class="col-md-12">

         <form method="post" action="{{url('blog')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="form-group col-md-4">
                    <label for="users_id"> user_id: </label>
                    <input type="text" class="form-control" name="users_id">
                    I want to write about:
        <select name="categories_id">

             @foreach($cat as $cat)
             <option value="{{ $cat->id }} ">{{ $cat->name }}</option>
             @endforeach
         </select>
        </br>
         <label for="title"> title: </label>
        <input type="text" class="form-control" name="title">
        <label for="description"> description: </label>
        <input type="text" class="form-control" name="description">
        <label for="figure"> figure: </label>
        <input type="text" class="form-control" name="figure">
        <label for="heading"> heading: </label>
        <input type="text" class="form-control" name="heading">
        <label for="fullstory"> full story: </label>
        <input type="text" class="form-control" name="fullstory">
        <label for="status"> status: </label>
        <input type="text" class="form-control" name="status">
        <input type="submit" name="submit" value="send">





    </div>
</div>

</form>
</div>
</div>

@endsection