@extends('layouts.master')
@section('judul')
Halaman Edit Game
@endsection

@section('content')

<form action="/game/{{$game->id}}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label class="form-label">Nama Game</label>
    <input type="text" class="form-control" name="name" value="{{$game->name}}" >
  </div>
  @error('name')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror

  <div class="mb-3">
    <label class="form-label">Gameplay</label>
    <textarea name="gameplay" class="form-control">{{$game->gameplay}}</textarea>
  </div>
  @error('gameplay')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="mb-3">
<label class="form-label">Developer</label>
<input type="text" class="form-control" name="developer" value="{{$game->developer}}" >
</div>
@error('developer')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="mb-3">
<label class="form-label">Year</label>
<input type="number" class="form-control" name="year" value="{{$game->year}}" >
</div>
@error('year')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
  <button type="submit" class="btn btn-primary">Submit</button>
    <button type="submit" class="btn btn-warning">Update Data</button>
    <a href="/game" class="btn btn-primary ">Back</a>
  </form>
@endsection
