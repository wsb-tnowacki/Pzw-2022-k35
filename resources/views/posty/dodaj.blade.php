@extends('start.layout')
@section('tytul')Dodanie postu
@endsection
@section('naglowek')
    Dodanie postu
@endsection
@section('tresc')
<form method="POST" action="{{ route('posty.store') }}">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <p>Uzupełnij poniższe błędne pola</p>
    </div>
    @endif
    <div class="form-group">
      <label for="tytul">Tytuł</label>
      <input type="text" class="form-control" id="tytul" value="{{ old('tytul') }}" name="tytul" placeholder="Podaj tytuł">
    </div>
    @if ($errors->get('tytul'))
    <div class="alert alert-danger">
            @foreach ($errors->get('tytul') as $error)
            <div>{{ $error }}</div>
            @endforeach
    </div>
    @endif
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" id="autor" value="{{ old('autor') }}" name="autor" placeholder="Podaj autora">
    </div>
    @if ($errors->get('autor'))
    <div class="alert alert-danger">
            @foreach ($errors->get('autor') as $error)
            <div>{{ $error }}</div>
            @endforeach
    </div>
    @endif
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" value="{{ old('email') }}" name="email" placeholder="Podaj maila">
    </div>
    @if ($errors->get('email'))
    <div class="alert alert-danger">
            @foreach ($errors->get('email') as $error)
            <div>{{ $error }}</div>
            @endforeach
    </div>
    @endif
    <div class="form-group">
      <label for="tresc">Treść</label>
      <textarea class="form-control" id="tresc" name="tresc" rows="4">{{ old('tresc') }}</textarea>
    </div>
    @if ($errors->get('tresc'))
    <div class="alert alert-danger">
            @foreach ($errors->get('tresc') as $error)
                <div>{{ $error }}</div>
            @endforeach
    </div>
    @endif
    <button type="submit" class="btn btn-primary">Dodaj post</button>
  </form>
@endsection

