{{-- views/Filmes/apagar.blade.php --}}
@extends('base')

@section('titulo', 'Apagar | Filmes')

@section('conteudo')
<p>Tem certeza que quer apagar?</p>
<p><em>{{ $filme['nome'] }}</em></p>

<form action="{{ route('Filmes.apagar', $filme['id']) }}" method="post">
@method('delete')
@csrf

<input type="submit" value="Pode apagar sem medo"  class="mb-4 bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">

</form>

<a class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded" href="{{ route('filmes') }}">Cancelar</a>
@endsection