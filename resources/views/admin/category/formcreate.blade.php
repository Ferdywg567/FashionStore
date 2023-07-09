@extends('admin.layouts.app')
@section('admin-content')
    <div class="content">
        <form enctype="multipart/form-data" role="form" method='POST' action="{{ route('category.store') }}">

            @csrf
            <div class="form-group">
                <label>Name of Category :</label>
                <input type="text" class="form-control" id="nameCategory" name="namecate"
                    placeholder="Enter name of category">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
