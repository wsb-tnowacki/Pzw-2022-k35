@extends('layout')
@section('tytul')
    Kontakt
@endsection
@section('naglowek')
    Kontakt test
@endsection
@section('tresc1')
    Tekst treści 1
@endsection

@section('tresc2')
@isset($id, $tekst)
{{ "Id: $id, tekst: $tekst" }}
@endisset

@endsection

@section('tresc3')
    Tekst treści 3
@endsection
