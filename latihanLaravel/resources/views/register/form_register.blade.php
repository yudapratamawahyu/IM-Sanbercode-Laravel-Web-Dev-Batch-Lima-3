@extends('layouts.master')

@section('judul', 'Form Fegister')

@section('content')
<form action="/signup" method="POST">
    @csrf
<h1>Selamat Datang Form Register</h1>
<label for="">Nama Depan: </label> <br>
<input type="text" name="fname" required> <br> <br>
<label for="">Nama Belakang: </label> <br>
<input type="text" name="lname" required> <br> <br>
<label for="">Gender: </label> <br>
<input type="radio" name="status"> Men <br>
<input type="radio" name="status"> Women <br>
<input type="radio" name="status"> Other <br> <br>
<label> Nationality: </label> <br> <br>
<select name="national">
    <option value="">Indonesia</option>
    <option value="">Korea</option>
    <option value="">Malaysia</option>
</select> <br> <br>
<label for="">Language Spoken: </label> <br> <br>
<input type="checkbox" name="bahasa"> Indonesia <br>
<input type="checkbox" name="bahasa"> English <br>
<input type="checkbox" name="bahasa"> Arabic <br>
<input type="checkbox" name="bahasa"> Japanese <br>
<input type="checkbox" name="bahasa"> Lainnya <br> <br>
<label>Bio: </label> <br> <br>
<textarea name="bio" cols="30" rows="10"></textarea> <br> <br>


<button type="submit">Sign Up</button>
</form>
@endsection
