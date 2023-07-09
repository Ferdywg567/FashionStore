@extends('admin.layouts.app')
@section('admin-content')
    <div class="content">
        <h2>Edit Data Brand</h2>
        <form method="POST" action="{{ route('brand.update', $data->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Name of Brand :</label>
                <input type="text" class="form-control" id="nameBrand" name="namebrand" value="{{ $data->name }}">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endsection
</div>
