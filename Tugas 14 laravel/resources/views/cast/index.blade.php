@extends('layouts.master')

@section('title')
    Cast
@endsection

@section('content')
<a href="/cast/create" class="btn btn-sm btn-primary ">Add Cast</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($cast as $key=>$item)
        <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{$item->name}}</td>
            <td>
                
                <form action="/cast/{{$item}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="/cast/{{$item->id}}" class="btn btn-sm btn-info">Detail</a>
                    <a href="/cast/{{$item->id}}/edit" class="btn btn-sm btn-primary">Update</a>
                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                </form>
            </td>
          </tr>
        @empty
            <tr>
                <th>Tidak ada Cast</th>
            </tr>
        @endforelse
    
    </tbody>
  </table>

@endsection