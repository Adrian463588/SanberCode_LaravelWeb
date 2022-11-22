@extends('layout.master')
@section('title')
    Halaman Form
@endsection
@section('subtitle')
    halaman Form
@endsection
@section('content')
<h3>Sign Up Form</h3>
<form action="/welcome" method="post">
    @csrf
    <label>First name:</label> <br><br>
    <input type="text" name="fname"> <br><br>
    <label>Last name:</label> <br><br>
    <input type="text" name="lname"> <br><br>
    <label>Gender:</label> <br><br>
    <input type="radio" name="gender">Male <br>
    <input type="radio" name="gender">Female <br>
    <input type="radio" name="gender">Other <br>
    <label>Nationality:</label> <br><br>
    <select>
        <option>Indonesia</option>
        <option>English</option>
        <option>Other</option>
    </select> <br><br>
    <label>Language Spoken:</label> <br><br>
    <input type="checkbox">Bahasa Indonesia <br>
    <input type="checkbox">English <br>
    <input type="checkbox">Other <br><br>
    <label>Bio:</label> <br><br>
    <textarea cols="30" rows="10"></textarea> <br><br>
    <button>Sign Up</button>
</form>
@endsection
    
