@extends('start.layout')
@section('tytul')Modyfikacja postu
@endsection
@section('naglowek')
    Zmiana postu
@endsection
@section('tresc')
<form method="POST" action="{{ route('posty.update', $post->id) }}">
    @csrf
    @method('PUT')
    @if ($errors->any())
    <div class="alert alert-danger">
        <p>Uzupełnij poniższe błędne pola</p>
    </div>
    @endif
    <div class="form-group">
      <label for="tytul">Tytuł</label>
      <input type="text" class="form-control" id="tytul" value="@if(old('tytul') !== null) {{ old('tytul') }} @else {{ $post->tytul }} @endif" name="tytul" placeholder="Podaj tytuł">
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
        <input type="text" class="form-control" id="autor" value="@if(old('autor') !== null) {{ old('autor') }} @else {{ $post->autor }} @endif" name="autor" placeholder="Podaj autora">
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
        <input type="text" class="form-control" id="email" value="@if(old('email') !== null) {{ old('email') }} @else {{ $post->email }} @endif" name="email" placeholder="Podaj maila">
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
      <textarea class="form-control" id="tresc" name="tresc" rows="4"> @if(old('tresc') !== null) {{ old('tresc') }} @else {{ $post->tresc }} @endif </textarea>
    </div>
    @if ($errors->get('tresc'))
    <div class="alert alert-danger">
            @foreach ($errors->get('tresc') as $error)
                <div>{{ $error }}</div>
            @endforeach
    </div>
    @endif
    <a href="{{ route('posty.index') }}"><button type="button" class="btn btn-primary m-1">Powrót do listy</button></a>
    <button type="submit" class="btn btn-success">Zmień post</button>
  </form>
@endsection

