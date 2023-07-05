@extends('admin.layouts.app')
@section('admin-content')

<div class="container">
  <h2>Edit Your Categories</h2>
  <p>Our Category Product here.....</p> <br>
<form method="POST" action="{{route('product.update', $data->id)}}">
                @csrf
                @method("PUT")

    <div class="form-group">
        <label>Nama Product :</label>
            <input type="text" class="form-control" id="namaProduct" name="namaprod" value="{{$data->name}}">
        <br>
        <label>Harga :</label>
        <input type="text" class="form-control" id="hargaJual" name="hargajual" value="{{$data->price}}">
        <br>
        <label>Stok :</label>
        <input type="text" class="form-control" id="stok" name="stock" value="{{$data->stock}}">
        <br>
        <label>Size :</label>
        <input type="text" class="form-control" id="size" name="sizes" value="{{$data->size}}">
        <br>
        <label>Description :</label>
        <input type="text" class="form-control" id="description" name="desc" value="{{$data->description}}">
        <br>
        <label>Image :</label>
        <input type="file" class="form-control" id='image' name='images' value="{{$data->image}}">
        <br>
        
        
     
    </div>
 
        <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
</div>
            