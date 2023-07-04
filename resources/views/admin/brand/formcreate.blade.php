@extends('admin.layouts.app')
@section('admin-content')

<form enctype="multipart/form-data" role="form" method='POST' action="{{url('brand')}}" >

                @csrf
                <div class="form-group">
                    <label>Name of Brand :</label>
                    <input type="text" class="form-control" id="nameBrand" name="namebrand" placeholder="Enter name of brand">
                
                </div>
 
                <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
            