@extends('layout.main')


@section('title', 'Laravel - SI Perpustakaan')


@section('content')


<div class="container">


<div class="jumbotron">


<h1 class="display-6">Create Data Member</h1>


<hr class="my-4">     


<form action="/member" method="POST">


@csrf


<div class="form-group">


    <label for="id_status">Id Status</label>
    
    
    <input type="text" class="form-control" id="id_status" 
    
    
                        name="id_status" placeholder="Id Status" 
    
    
                        value="{{ old('id_status') }}">


<div class="form-group">


<label for="name">Nama Member</label>


<input type="text" class="form-control" id="name" 


                    name="user_name" placeholder="Nama Member" 


                    value="{{ old('user_name') }}">


</div>


<div class="form-group">


<label for="status"><S>Status</S></label>


<input type="text" class="form-control" id="status" 


                    name="status" placeholder="Status Member" 


                    value="{{ old('status') }}">


</div>


<div class="form-group">
                
                
<label for="address">Address</label>
                
                
<input type="text" class="form-control" id="address" 
                
                
            name="address" placeholder="Address Member" 
                
                
            value="{{ old('address') }}">


</div>


<div class="form-group">


<label for="phone_number">Phone Number</label>


<input type="text" class="form-control" id="phone_number" 


                    name="phone_number" placeholder="Phone Number" 


                    value="{{ old('phone_number') }}">


</div>


<button type="submit" class="btn btn-primary">Save</button>


</form>


</div>


</div>


@endsection