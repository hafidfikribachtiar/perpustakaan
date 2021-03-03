@extends('layout.main')


@section('title', 'Laravel - SI Perpustakaan')


@section('content')


<div class="container">


<div class="jumbotron">


@if(session('msg'))


<div class="alert alert-success alert-dismissible fade show mt-2" 


            role="alert">


{{session('msg')}}


<button type="button" class="close" data-dismiss="alert" 


                 aria-label="Close">


<span aria-hidden="true">&times;</span>


</button>


</div>


@endif


<h1 class="display-6">Kategori Book</h1>


<hr class="my-4">     


<a href="category/create" class="btn btn-primary mb-1">


Create Category Book</a>       


<table class="table">


<thead class="thead-dark">


<tr>


<th scope="col">#</th>


<th scope="col">Kategori</th>

<th scope="col">Deskripsi</th>


<th></th>


</tr>


</thead>


<tbody>

<?php $no = 1; ?>
@foreach ($category as $kat)


<tr>
<td>{{ $no++ }}</td>
<td>{{ $kat->category }}</td>
<td>{{ $kat->description }}</td>


<td>


<a href="/editcategory/{{ $kat->id }}" class="badge badge-primary">Edit</a>


<a href="/hapuscategory/{{ $kat->id }}" class="badge badge-danger">Hapus</a>


</td>


</tr>


@endforeach


</tbody>


</table>


</div>

<div class="col-4">
    <a href="/book" class="btn btn-primary btn-block">Submit</a>
  </div>

</div>


@endsection