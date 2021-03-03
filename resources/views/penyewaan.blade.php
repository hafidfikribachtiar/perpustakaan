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


<h1 class="display-6"> Penyewaan Buku Perpustakaan</h1>