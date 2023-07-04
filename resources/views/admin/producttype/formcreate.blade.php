@extends('admin.layouts.app')
@section('admin-content')

<form enctype="multipart/form-data" role="form" method='POST' action="{{url('producttype')}}" >

                @csrf
                <div class="form-group">
                    <label>Name of Product Type :</label>
                    <input type="text" class="form-control" id="nameProductType" name="nameproducttype" placeholder="Enter name of product type">
                
                </div>
 
                <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
            