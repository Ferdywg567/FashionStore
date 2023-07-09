@extends('admin.layouts.app')
@section('admin-content')
    <div class="content">
        <h2>Edit Your Categories</h2>
        <p>Our Category Product here.....</p> <br>
        <form method="POST" action="{{ route('category.update', $data->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Name of Category :</label>
                <input type="text" class="form-control" id="nameCategory" name="namecate" value="{{ $data->name }}">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endsection
</div>
