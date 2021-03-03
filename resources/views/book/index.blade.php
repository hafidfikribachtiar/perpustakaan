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


<h1 class="display-6"> Book Data</h1>

<p class="mb-1">
<div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

<hr class="my-4">     


<a href="book/create" class="btn btn-primary mb-1">Create Book</a>       


<table class="table">


<thead class="thead-dark">


<tr>


<th scope="col">#</th>


<th scope="col">Title Book</th>


<th scope="col">Type Book</th>


<th scope="col">Author</th>


<th scope="col">Publisher</th>


<th></th>


</tr>


</thead>


<tbody>

<?php $no = 1; ?>
@foreach ($book as $book)


<tr>
    
<td>{{ $no++ }}</td>


<td>{{ $book->title_book }}</td>


<td>{{ $book->type_book }}</td>


<td>{{ $book->author }}</td>


<td>{{ $book->publisher }}</td>


<td>


<a href="book/edit/{{ $book->id }}" class="badge badge-primary">Edit</a>


<a href="hapusmember/{{ $book->id }}" class="badge badge-danger">Hapus</a>


</td>


</tr>


@endforeach


</tbody>


</table>


</div>

<div class="col-4">
    <a href="/home" class="btn btn-primary btn-block">Submit</a>
  </div>

</div>


@endsection