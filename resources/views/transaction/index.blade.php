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


<h1 class="display-6">Book Borrower Data</h1>


<hr class="my-4">     


<a href="transaction/create" class="btn btn-primary mb-1">


Book Borrower</a>


<!-- <a href="buku/kembali" class="btn btn-primary mb-1">Pengembalian Buku</a>        -->


<table class="table">


<thead class="thead-dark">


<tr>


<th scope="col">Id Book</th>


<th scope="col">Borrow Number</th>


<th scope="col">Return Date</th>


<th scope="col">Borrow Date</th>


<th scope="col">Fine</th>


<th scope="col">Amount</th>


<th></th>


</tr>


</thead>


<tbody>


@foreach ($transaction as $trans)


<tr>


<td>{{ $trans->id_book }}</td>


<td>{{ $trans->borrow_number }}</td>


<td>{{ $trans->return_date }}</td>


<td>{{ $trans->borrow_date }}</td>


<td>{{ $trans->fine }}</td>


<td>{{ $trans->amount }}</td>


<td>


@if($trans->return_date == null)


<a href="transaction/edit/{{ $trans->id }}" class="badge badge-primary">Belom Dikembalikan</a>


@else


<a href="hapustransaction/{{ $trans->id }}" class="badge badge-success">Dikembalikan</a>


@endif


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
