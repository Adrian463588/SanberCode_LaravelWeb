@extends('layout.master')
@section('title')
    Halaman Detail Cast
@endsection
@section('subtitle')
    Detail Cast
@endsection
@section('content')
    <h1 class="text-primary">{{$cast->nama}}</h1>
    <h4 class="text-secondary">Umur : {{$cast->umur}}</h4>
    <p>{{$cast->bio}}</p>
    <a href="/cast" class="btn btn-secondary btn-sm">Kembali</a>
@endsection