@extends('layouts.master')

@section('title')
    Add Cast
@endsection

@section('content')
<form action="/cast" method="post">
    @error('title')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    
    @csrf
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label>Umur</label>
        <textarea name="umur" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Bio</label>
        <input type="text" class="form-control" name="bio">
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form> 
@endsection