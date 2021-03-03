@extends('layout.main')


@section('title', 'Laravel - SI Perpustakaan')


@section('content')


<div class="container">


<div class="jumbotron">


<h1 class="display-6">Create Kategori Book</h1>


<hr class="my-4">     


<form action="/category" method="POST">


@csrf


<div class="form-group">


<label for="category">Category</label>

<input type="text" class="form-control" id="category" 


                    name="category" placeholder="category" 


                    value="{{ old('category') }}">

<label for="deskripsi">Deskripsi</label>

<input type="text" class="form-control" id="deskripsi" 


                    name="deskripsi" placeholder="deskripsi" 


                    value="{{ old('deskripsi') }}">




</div>


<button type="submit" class="btn btn-primary">Save</button>


</form>


</div>


</div>


@endsection