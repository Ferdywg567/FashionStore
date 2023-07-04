@extends('admin.layouts.app')
@section('admin-content')

<div class="container">
  <h2>Table Products</h2>
  <p></p>            

  @if (session('status'))
 <div class="alert alert-success">{{session('status')}}</div>
 @endif

 
 <a href="{{route('product.create')}}" class="btn btn-success"> + New Product </a>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Size</th>
        <th>Description</th>
        <th>Product Type</th>
        <th>Brand</th>
        <!-- <th>Category</th> -->
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($queryModel as $d)
      <tr>
        <td><img src='{{ $d->image }}' height='200px' /></td>
        <td>{{$d->name}}</td>
        <td>{{$d->price}}</td>
        <td>{{$d->stock}}</td>
        <td>{{$d->size}}</td>
        <td>{{$d->description}}</td>

        <td>{{$d->product_types->name}}</td>
        <td>{{$d->brands->name}}</td>

        <td>
          <a href="{{ route('product.edit',$d->id) }}" class="btn btn-success">Ubah</a>
          <form method="POST" action="{{ route('product.destroy',$d->id) }} ">
          @csrf
            @method('DELETE')
            <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('Do you agree to delete with {{$d->id}} - {{$d->name}} ?');">
          </form>
        </td>
        

      @endforeach
     
    </tbody>
  </table>
  
@endsection



