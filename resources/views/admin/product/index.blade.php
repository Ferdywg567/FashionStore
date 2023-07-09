@extends('admin.layouts.app')
@section('admin-content')
    <div class="content">
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
                        <td style="width: 20%">
                            @php
                                $images = json_decode($d->images);
                            @endphp
                            @forelse ($images as $item)
                                <img style="width:100px" src='{{ asset($item) }}'/>
                            @empty

                            @endforelse
                        </td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->price}}</td>
                        <td>{{$d->stock}}</td>
                        <td>{{$d->size}}</td>
                        <td>{{$d->description}}</td>

                        <td>
                            @foreach ($d->categories as $item)
                                {{ "$item->name" . ($loop->last ? '' : ', ')}}
                            @endforeach
                        </td>
                        <td>{{$d->brand->name}}</td>

                        <td>
                            <a href="{{ route('product.edit',$d->id) }}" class="btn btn-success">Ubah</a>
                            <form method="POST" action="{{ route('product.destroy',$d->id) }} ">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Hapus" class="btn btn-danger"
                                       onclick="return confirm('Do you agree to delete with {{$d->id}} - {{$d->name}} ?');">
                            </form>
                        </td>

                @endforeach

                </tbody>
            </table>
        </div>
@endsection



