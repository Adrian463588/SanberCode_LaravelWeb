@extends('layouts.master')
@section('judul')
Halaman Tambah Game
@endsection

@section('content')

<form action="/game" method="POST">
  @csrf
    <div class="mb-3">
      <label class="form-label">Nama Game</label>
      <input type="text" class="form-control" name="name" >
    </div>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    <div class="mb-3">
      <label class="form-label">Gameplay</label>
      <textarea name="gameplay" class="form-control"></textarea>
    </div>
    @error('gameplay')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="mb-3">
  <label class="form-label">Developer</label>
  <input type="text" class="form-control" name="developer" >
</div>
@error('developer')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="mb-3">
  <label class="form-label">Year</label>
  <input type="number" class="form-control" name="year" >
</div>
@error('year')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection