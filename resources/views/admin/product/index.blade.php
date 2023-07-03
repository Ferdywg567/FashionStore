@extends('admin.layouts.app')
@section('admin-content')

<div class="container">
  <h2>Table Products</h2>
  <p></p>            

  <!-- @if (session('status'))
 <div class="alert alert-success">{{session('status')}}</div>
 @endif

 
 <a href="{{route('product.create')}}" class="btn btn-success"> + New Product </a> -->

  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Size</th>
        <th>Description</th>
        <!-- <th>Image</th> -->
        <th>Created At</th>
        <th>Updated At</th>
        <th>Product Type</th>
        <th>Brand</th>
        <!-- <th>Action</th> -->
      </tr>
    </thead>
    <tbody>
        @foreach($queryModel as $d)
      <tr>
        <td>{{ $d->id }}</td>
        <td>{{$d->name}}</td>
        <td>{{$d->price}}</td>
        <td>{{$d->stock}}</td>
        <td>{{$d->size}}</td>
        <td>{{$d->description}}</td>
        <!-- <td>{{$d->image}}</td> -->
        <td>{{$d->created_at}}</td>
        <td>{{$d->updated_at}}</td>
        <td>{{$d->product_type_id}}-{{$d->product_types->name}}</td>
        <td>{{$d->brand_id}}-{{$d->brands->name}}</td>
        <!-- <td>
          <a href="{{ route('product.edit',$d->id) }}">Ubah</a>
          <form method="POST" action="{{ route('product.destroy',$d->id) }} ">
          @csrf
            @method('DELETE')
            <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('Do you agree to delete with {{$d->id}} - {{$d->name}} ?');">
          </form>
        </td> -->
        

<!-- <td>
<a class="btn btn-primary"  
  data-toggle="modal" href="#showphoto_{{$d->id}}">Show Photo</a>  
<div class="modal fade" id="showphoto_{{$d->id}}" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header">
           <h4 class="modal-title">{{$d->name}}</h4>
        </div>
        <div class="modal-body">
           <img src='image/{{ $d->id }}.jpg' height='200px' />
         
        </div>
	<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
     </div>
  </div>
</div>
</td>


      </tr> -->
      @endforeach
     
    </tbody>
  </table>
  <!-- <div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title">DISCLAIMER</h4>
        </div>
        <div class="modal-body">
          Pictures shown are for illustration purpose only. Actual product may vary due to product enhancement.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
   </div>
</div> -->
@endsection



