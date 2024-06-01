@extends('layouts.master')

@section('title')
    Edit Cast
@endsection

@section('content')
<form action="/cast/{{$cast->id}}" method="post">

    @error('title')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    
    @csrf
    @method('put')
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="name" value="{{$cast->name}}">
    </div>
    <div class="form-group">
        <label>Umur</label>
        <textarea name="umur" id="" cols="30" rows="10" class="form-control">{{$cast->umur}}</textarea>
    </div>
    div class="form-group">
        <label>Bio</label>
        <input type="text" class="form-control" name="bio" value="{{$cast->bio}}">
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form> 
@endsection