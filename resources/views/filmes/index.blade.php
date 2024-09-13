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
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
            @foreach ($filmes as $filme)
                    <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden">
                        <a href={{route ('filmes.mostrar', ['id' => $filme['id']])}}>
                            <img src="img/{{ $filme['capa'] }}" alt="{{ $filme['nome'] }}" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h2 class="text-xl font-bold mb-2">{{ $filme['nome'] }}</h2>
                                <p class="text-gray-600 mb-2"><strong>Ano:</strong> {{ $filme['ano'] }}</p>
                                <p class="text-gray-600 mb-2"><strong>Categoria:</strong> {{ $filme['categoria'] }}</p>
                                <a class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 border border-yellow-500 hover:border-transparent rounded" href="{{ route('filmes.editarView', $filme['id']) }}">Editar</a>
                                <a class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 border border-red-500 hover:border-transparent rounded" href="{{ route('filmes.apagar', $filme['id']) }}">Apagar</a>
                            </div>
                        </a>
                    </div>
            @endforeach
        </div>
    </div>
@endsection