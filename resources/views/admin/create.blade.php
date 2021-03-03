@extends('layout.main')


@section('title', 'Laravel - SI Perpustakaan')


@section('content')


<div class="container">


<div class="jumbotron">


<h1 class="display-6">Create Kategori Admin</h1>


<hr class="my-4">     


<form action="/admin" method="POST">


@csrf


<div class="form-group">


<label for="admin_name">Admin Name</label>

<input type="text" class="form-control" id="admin_name" 


                    name="admin_name" placeholder="admin_name" 


                    value="{{ old('admin_name') }}">

<label for="address">Address</label>

<input type="text" class="form-control" id="address" 


                    name="address" placeholder="address" 


                    value="{{ old('address') }}">

<label for="phone_number">Phone Number</label>

<input type="text" class="form-control" id="phone_number" 
                    
                    
                    name="phone_number" placeholder="phone_number" 
                    
                    
                    value="{{ old('phone_number') }}">

<label for="password">Password</label>

<input type="text" class="form-control" id="password" 


                    name="password" placeholder="password" 


                    value="{{ old('password') }}">

<label for="level">Level</label>

<input type="text" class="form-control" id="level" 


                    name="level" placeholder="level" 


                    value="{{ old('level') }}">

</div>


<button type="submit" class="btn btn-primary">Save</button>


</form>


</div>


</div>


@endsection