@extends('admin.layouts.app')
@section('admin-content')
    <div class="content">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form enctype="multipart/form-data" role="form" method='POST' action="{{ route('brand.store') }}">

            @csrf
            <div class="form-group">
                <label>Name of Brand :</label>
                <input type="text" class="form-control" id="nameBrand" name="name" placeholder="Enter name of brand">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
