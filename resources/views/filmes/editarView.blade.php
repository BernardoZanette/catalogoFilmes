{{-- resources/views/filmes/index.blade.php --}}

@extends('base')

@section('titulo', 'Catálogo de Filmes')

@section('conteudo')


<div class="w-full mt-6 ">
    <p class="text-xl pb-3 flex items-center">
        <i class="fas fa-list mr-3"></i> Veja nossa lista de filmes
    </p>
    <div class="p-6 bg-gray-100">
        <div class="max-w-5xl mx-auto w-screen bg-white rounded-lg shadow-lg flex flex-col md:flex-row overflow-hidden">
            <!-- Imagem -->
            <img src="{{ asset('img/' . $filme['capa']) }}" alt="{{ $filme['nome'] }}" class="h-max object-cover md:w-1/3">
            <!-- Informações do Filme -->
            <form method="POST" class="p-6 mr-28 ml-4 flex flex-col" action="{{ route('filmes.editar', $filme['id']) }}">
                @csrf    
                @method('PUT')
                <strong class="text-2xl">Titulo: <input class="border border-balck-800 flex-grow:2 text-2xl font-bold mb-4" name="nome" value="{{ $filme['nome'] }}"></strong>
                <strong class="text-xl">Sinopse: <input class="border border-balck-800 mb-4 break-all" name="sinopse" value="{{ $filme['sinopse'] }}"></strong> 
                <strong class="text-xl">Ano: <input class="border border-balck-800 text-gray-800 mb-2" name="ano" value="{{ $filme['ano'] }}"></strong> 
                <strong class="text-xl">Categoria:  <input class="border border-black-800 text-black-800 mb-4" name="categoria" value="{{ $filme['categoria'] }}"></strong>
                <strong class="text-xl">Trailer:  <input class="border border-black-800 text-black-800 mb-4" name="trailer" value="{{ $filme['trailer'] }}"></strong>
                <div class="flex gap-4 mb-4 h-min">
                    <button class="bg-green-500 hover:bg-green-600 text-white font-semibold py-1 px-4 rounded">Enviar</button>    
                </div>
            </form>
        </div>
    </div>
</div>

@endsection