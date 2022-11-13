@extends('start.layout')
@section('tytul')post
@endsection
@section('naglowek')
    Szczegóły postu
@endsection
@section('tresc')
<form method="GET" action="{{ route('posty.index') }}">
    <div class="form-group">
      <label for="tytul">Tytuł</label>
      <input type="text" class="form-control" id="tytul" value="{{ $post->tytul }}" name="tytul" disabled="disabled">
    </div>
    <div class="p-2">
      Data dodania postu: <b>{{ date('j F Y H:i:s', strtotime($post->created_at)) }} </b><br />
      Data modyfikacji postu: <b>{{ date('j F Y H:i:s', strtotime($post->updated_at )) }} </b>
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" id="autor" value="{{ $post->autor }}" name="autor" disabled="disabled">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" value="{{ $post->email }}" name="email" disabled="disabled">
    </div>
    <div class="form-group">
      <label for="tresc">Treść</label>
      <textarea class="form-control" id="tresc" name="tresc" rows="4" disabled="disabled">{{ $post->tresc }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Powrót do listy</button>
    <a href="{{ route('posty.edit', $post->id) }}"><button type="button" class="btn btn-success">Edycja</button></a>
  </form>
@endsection

