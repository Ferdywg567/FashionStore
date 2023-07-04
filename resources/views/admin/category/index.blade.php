@extends('admin.layouts.app')
@section('admin-content')

<div class="container">
  <h2>Table Categories</h2>

  <p></p>            

@if (session('status'))
 <div class="alert alert-success">{{session('status')}}</div>
 @endif

 
 <a href="{{route('category.create')}}" class="btn btn-success"> + New Category </a>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($queryModel as $d)
      <tr>
        <td>{{ $d->id }}</td>
        <td>{{$d->name}}</td>
   

        <td>
          <a href="{{ route('category.edit',$d->id) }}" class="btn btn-success">Ubah</a>
          <form method="POST" action="{{ route('category.destroy',$d->id) }} ">
          @csrf
            @method('DELETE')
            <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('Do you agree to delete with {{$d->id}} - {{$d->name}} ?');">
          </form>
        </td>
        

      @endforeach
     
    </tbody>
  </table>

@endsection



