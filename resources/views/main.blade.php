@extends('layout')
@section('css')
<link rel="stylesheet" href="{{ asset("css/main.css") }}">
@endsection
@section('content')

<h1>Texttext</h1>
<form action="/sendmail" method="POST">
    @csrf
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="christian@graff-online.de">
    </div>
    <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message" value="Testext"></textarea>
    </div>
    <div>
        <button type="submit">Send</button>
    </div>
</form>

@endsection