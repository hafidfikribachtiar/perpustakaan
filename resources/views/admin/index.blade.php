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


<h1 class="display-6">Admin</h1>


<hr class="my-4">     


<a href="admin/create" class="btn btn-primary mb-1">


Create Admin</a>       


<table class="table">


<thead class="thead-dark">


<tr>


<th scope="col">#</th>


<th scope="col">Admin Name</th>

<th scope="col">Address</th>

<th scope="col">Phone Number</th>

<th scope="col">Password</th>

<th scope="col">Level</th>


<th></th>


</tr>


</thead>


<tbody>

<?php $no = 1; ?>
@foreach ($admin as $admin)


<tr>
<td>{{ $no++ }}</td>
<td>{{ $admin->admin_name }}</td>
<td>{{ $admin->address }}</td>
<td>{{ $admin->phone_number }}</td>
<td>{{ $admin->password }}</td>
<td>{{ $admin->level }}</td>


<td>


<a href="" class="badge badge-primary">Edit</a>


<a href="/hapusadmin/{{ $admin->id }}" class="badge badge-danger">Hapus</a>


</td>


</tr>


@endforeach


</tbody>


</table>


</div>

<div class="col-4">
    <a href="/home" class="btn btn-primary btn-block">Perpustakaan</a>
  </div>

</div>


@endsection