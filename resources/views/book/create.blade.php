@extends('layout.main')


@section('title', 'Laravel - SI Perpustakaan')


@section('content')


<div class="container">


<div class="jumbotron">


<h1 class="display-6">Create Data Book</h1>


<hr class="my-4">     


<form action="/book" method="POST" enctype="multipart/form-data">


@csrf


<div class="form-group">


<label for="title_book">Title Book</label>


<input type="text" class="form-control" name="title_book" 


                    placeholder="Title Book" value="{{ old('title_book') }}">


</div>


<div class="form-group">


<label for="type_book">Type Book</label>


<input type="text" class="form-control" name="type_book" 


                    placeholder="Type Book" value="{{ old('type_book') }}">


</div>


<div class="form-group">


<label for="author">Author</label>


<input type="text" class="form-control" name="author" 


                    placeholder="Author" value="{{ old('author') }}">


</div>


<div class="form-group">


<label for="publisher">Publisher</label>


<input type="text" class="form-control" name="publisher" 


                    placeholder="Publisher" value="{{ old('publisher') }}">


</div>


<button type="submit" class="btn btn-primary">Save</button>


</form>


</div>


</div>


@endsection