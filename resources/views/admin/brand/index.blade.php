@extends('admin.layouts.app')
@section('admin-content')
    <div class="content">
        <h2>Table Brands</h2>
        <p></p>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif


        <a href="{{ route('brand.create') }}" class="btn btn-success"> Buat Brand + </a>

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
                            <a href="{{ route('brand.edit', $d->id) }}" class="btn btn-sm btn-success mr-2">Ubah</a>
                            <form method="POST" action="{{ route('brand.destroy', $d->id) }} ">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Hapus" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Anda Yakin ingin menghapus brand {{ $d->name }} ?');">
                            </form>
                        </td>
                @endforeach

            </tbody>
        </table>
    @endsection
