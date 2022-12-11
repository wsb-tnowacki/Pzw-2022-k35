@extends('start.layout')
@section('tytul')post
@endsection
@section('naglowek')
    Szczegóły postu
@endsection
@section('tresc')
<form method="POST" action="{{ route('posty.destroy', $post->id) }}">
  @csrf
  @method('DELETE')
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
        <input type="text" class="form-control" id="autor" value="{{ $post->autor }} / {{ $post->user->name }}" name="autor" disabled="disabled">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" value="{{ $post->email }} / {{ $post->user->email }}" name="email" disabled="disabled">
    </div>
    <div class="form-group">
      <label for="tresc">Treść</label>
      <textarea class="form-control" id="tresc" name="tresc" rows="4" disabled="disabled">{{ $post->tresc }}</textarea>
    </div>
    <a href="{{ route('posty.index') }}"><button type="button" class="btn btn-primary m-1">Powrót do listy</button></a>
    @auth
    <a href="{{ route('posty.edit', $post->id) }}"><button type="button" class="btn btn-success m-1">Edycja</button></a>
    <button type="submit" class="btn btn-danger m-1">Usuń</button>  
    @endauth
  </form>
  {{-- dump($post) --}}
@endsection

