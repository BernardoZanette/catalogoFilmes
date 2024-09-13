{{-- resources/views/filmes/index.blade.php --}}

@extends('base')

@section('titulo', 'Catálogo de Filmes')

@section('conteudo')
<p>
    <a href="{{ route('filmes.cadastrar') }}" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded">Cadastrar filme</a>
</p>

<div class="w-full mt-6">
    <p class="text-xl pb-3 flex items-center">
        <i class="fas fa-list mr-3"></i> Veja nossa lista de filmes
    </p>
    <div class="overflow-auto">
        <div>
            <form method="GET" action="{{ route('filmes') }}" class="mb-6">
                <div class="flex items-center">
                    <label for="ano" class="mr-2">Ano:</label>
                    <input type="number" id="ano" name="ano" value="{{ request('ano') }}" class="px-2 py-1 border border-gray-300 rounded">
                    <button type="submit" class="ml-4 px-4 py-1 bg-gray-900 text-white rounded">Filtrar</button>
                </div>
            </form>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
            @foreach ($filmes as $filme)
                @if (isset($_GET['ano']) && $filme['ano'] == $_GET['ano'])
                    <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden">
                        <a href={{route ('filmes.mostrar', ['id' => $filme['id']])}}>
                            <img src="img/{{ $filme['capa'] }}" alt="{{ $filme['nome'] }}" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h2 class="text-xl font-bold mb-2">{{ $filme['nome'] }}</h2>
                                <p class="text-gray-600 mb-2"><strong>Ano:</strong> {{ $filme['ano'] }}</p>
                                <p class="text-gray-600 mb-2"><strong>Categoria:</strong> {{ $filme['categoria'] }}</p>
                                <a href="{{ $filme['trailer'] }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded" target="_blank">Assistir Trailer</a>
                                <a href="{{ route('filmes.mostrar', ['id' => $filme['id']]) }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">Detalhes</a>
                            </div>
                        </a>
                    </div>
                @endif
                @if (!isset($_GET['ano']) || $_GET['ano'] == null)
                    <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden">
                        <a href={{route ('filmes.mostrar', ['id' => $filme['id']])}}>
                            <img src="img/{{ $filme['capa'] }}" alt="{{ $filme['nome'] }}" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h2 class="text-xl font-bold mb-2">{{ $filme['nome'] }}</h2>
                                <p class="text-gray-600 mb-2"><strong>Ano:</strong> {{ $filme['ano'] }}</p>
                                <p class="text-gray-600 mb-2"><strong>Categoria:</strong> {{ $filme['categoria'] }}</p>
                                <a href="{{ $filme['trailer'] }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded" target="_blank">Assistir Trailer</a>
                                <a href="{{ route('filmes.mostrar', ['id' => $filme['id']]) }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">Detalhes</a>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection