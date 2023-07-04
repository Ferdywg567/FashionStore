@extends('admin.layouts.app')
@section('admin-content')

<div class="container">
  <h2>Edit Your Product Type</h2>
  <p>Our Product Types here.....</p> <br>
<form method="POST" action="{{route('producttype.update', $data->id)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label>Name of Product Type :</label>
                    <input type="text" class="form-control" id="nameProductType" name="nameproducttype" value="{{$data->name}}" >
              
                </div>
 
                <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
</div>       