{{-- resources/views/filmes/index.blade.php --}}

@extends('base')

@section('titulo', 'Catálogo de Filmes')

@section('conteudo')

<div class="w-full mt-6 ">
    <p class="text-xl pb-3 flex items-center">
        <i class="fas fa-list mr-3"></i> Veja nossa lista de filmes
    </p>
    <div class="p-6 bg-gray-100">
        <div class="max-w-6xl mx-auto w-screen bg-white rounded-lg shadow-lg flex flex-col md:flex-row overflow-hidden">
            <!-- Imagem -->
            <img src="{{ asset('img/' . $filme['capa']) }}" alt="{{ $filme['nome'] }}" class="w-1/4 object-cover">
            <!-- Informações do Filme -->
            <div class="p-6 mr-28 ml-4">
                <h2 class="flex-grow:2 text-2xl font-bold mb-4"> {{ $filme['nome'] }}</h2>
                <p class="mb-4 break-all"><strong>Sinopse:</strong> {{ $filme['sinopse'] }}</p>
                <p class="text-gray-600 mb-2"><strong>Ano:</strong> {{ $filme['ano'] }}</p>
                <p class="text-gray-600 mb-4"><strong>Categoria:</strong> {{ $filme['categoria'] }}</p>
                <div class="flex gap-4 mb-4 h-min">
                    @if (Auth::user() && Auth::user()['admin'])
                        <a class="min-h-min bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-1 px-4 border border-yellow-500 hover:border-transparent rounded" href="{{ route('filmes.editarView', $filme['id']) }}">Editar</a>
                        <a class="min-h-min bg-red-500 hover:bg-red-600 text-white font-semibold py-1 px-4 border border-red-500 hover:border-transparent rounded" href="{{ route('filmes.apagar', $filme['id']) }}">Apagar</a>
                    @endif
                    <a href="{{ $filme['trailer'] }}" class="min-h-min bg-blue-500 hover:bg-blue-600 text-white font-semibold py-1 px-4 rounded" target="_blank">Assistir Trailer</a>
                    <a href="{{ route('filmes') }}" class="min-h-min bg-green-500 hover:bg-green-600 text-white font-semibold py-1 px-4 rounded">Voltar à Listagem</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection