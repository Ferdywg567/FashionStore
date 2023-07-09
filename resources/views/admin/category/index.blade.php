@extends('admin.layouts.app')
@section('admin-content')
    <div class="content">
        <h2>Table Categories</h2>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif


        <a href="{{ route('category.create') }}" class="btn btn-success"> + New Category </a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($queryModel as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->name }}</td>
                        <td class="d-flex">
                            <a href="{{ route('category.edit', $d->id) }}" class="btn btn-sm btn-success mr-2">Ubah</a>
                            <form method="POST" action="{{ route('category.destroy', $d->id) }} ">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Hapus" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Do you agree to delete with {{ $d->id }} - {{ $d->name }} ?');">
                            </form>
                        </td>
                @endforeach

            </tbody>
        </table>
    @endsection
