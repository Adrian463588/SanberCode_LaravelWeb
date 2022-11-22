@extends('layouts.master')
@section('judul')
Detail {{$game->name}}
@endsection

@section('content')
<h2>{{$game->name}}({{$game->year}})</h2>
<p>Developer By {{$game->developer}}</>
<h5>Gameplay</h5>
<p>{{$game->gameplay}}</p>

Platform <br>
@forelse ($platform as $key => $value)
<label class="btn btn-primary btn-sm mb-5">{{$value->nama}}</label>
@empty
<label class="btn btn-primary btn-sm mb-5">Platform No Input</label>
@endforelse


<br><br>
<a href="/game/{{$game->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
<a href="/game" class="btn btn-primary btn-sm">Back</a>
@endsection