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


<h1 class="display-6">Data Member</h1>

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


<a href="member/create" class="btn btn-primary mb-1">


Create Member</a>       


<table class="table">


<thead class="thead-dark">


<tr>


<th scope="col">#</th>


<th scope="col">Name</th>


<th scope="col">Status</th>


<th scope="col">Address</th>


<th scope="col">Phone Number</th>


<th></th>


</tr>


</thead>


<tbody>


@foreach ($member as $ang)


<tr>


<td>{{ $loop->iteration }}</td>


<td>{{ $ang->member_name }}</td>


<td>{{ $ang->status }}</td>


<td>{{ $ang->address }}</td>


<td>{{ $ang->phone_number }}</td>


<td>


<a href="member/edit/{{ $ang->id }}" class="badge badge-primary">Edit</a>


<a href="/hapusmember/{{ $ang->id}}" class="badge badge-danger">Hapus</a>



</td>


</tr>




@endforeach




</tbody>


</table>


</div>

<div class="col-4">
    <a href="/transaction" class="btn btn-primary btn-block">Submit</a>
  </div>

</div>


@endsection