@extends('layout.master')
@section('title')
    Halaman Edit Cast
@endsection
@section('subtitle')
    Form Edit Cast
@endsection
@section('content')
<form action='/cast/{{$cast->id}}'' method="POST">
    @csrf
    @method('put')
    <div class="form-group">
      <label>Nama Cast</label>
      <input type="text" name="nama" value="{{$cast->nama}}" class="form-control">
    </div>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Umur Cast</label>
      <input type="number" name="umur" value="{{$cast->umur}}" class="form-control">
    </div>
    @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Bio Cast</label>
      <textarea name="bio" class="form-control" id="" cols="30" rows="10">{{$cast->bio}}</textarea>
    </div>
    @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection