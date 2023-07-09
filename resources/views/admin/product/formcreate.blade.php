@extends('admin.layouts.app')
@section('admin-content')

    <div class="content">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nama Product :</label>
                <input type="text" class="form-control" id="namaProduct" name="namaprod"
                       placeholder="Isi nama dari product">
                <br>
                <label>Harga :</label>
                <input type="text" class="form-control" id="hargaJual" name="hargajual"
                       placeholder="Isi dengan harga jual product">
                <br>
                <label>Stok :</label>
                <input type="text" class="form-control" id="stok" name="stock" placeholder="Isi dengan jumlah stok">
                <br>
                <label>Size :</label>
                <input type="text" class="form-control" id="size" name="sizes" placeholder="Isi dengan size product">
                <br>
                <label>Description :</label>
                <input type="text" class="form-control" id="description" name="desc"
                       placeholder="Isi dengan description product">
                <br>
                <label>Image :</label>
                <input type="file" class="form-control" id='image' name='images[]' multiple>
                <br>
                <label>Product Type :</label>
                <select name="product_type_id[]" class="form-control" multiple>
                    @foreach ($producttypes as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
                <label>Brand :</label>
                <select name="brand_id" class="form-control">
                    @foreach ($brands as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
