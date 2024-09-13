{{-- resources/views/filmes/index.blade.php --}}

@extends('base')

@section('titulo', 'Catálogo de Filmes')

@section('conteudo')


<div class="w-full mt-6 ">
    <p class="text-xl pb-3 flex items-center">
        <i class="fas fa-list mr-3"></i> Veja nossa lista de filmes
    </p>
    <div class="p-6 bg-gray-100">
        <div class="max-w-4xl mx-auto w-screen bg-white rounded-lg shadow-lg flex flex-col md:flex-row overflow-hidden">
            <!-- Imagem -->
            <img src="{{ asset('img/' . $filme['capa']) }}" alt="{{ $filme['nome'] }}" class="h-max object-cover md:w-1/3">
            <!-- Informações do Filme -->
            <form class="p-6 mr-28 ml-4">
                <strong>Titulo: <input class="border border-balck-800 flex-grow:2 text-2xl font-bold mb-4" placeholder="{{ $filme['nome'] }}"></strong>
                <strong>Sinopse: <input class="border border-balck-800 mb-4 break-all" placeholder="{{ $filme['sinopse'] }}"></strong> 
                <strong>Ano: <input class="border border-balck-800 text-gray-800 mb-2" placeholder="{{ $filme['ano'] }}"></strong> 
                <strong>Categoria:  <input class="border border-black-800 text-black-800 mb-4" placeholder="{{ $filme['categoria'] }}"></strong>
                <div class="flex gap-4 mb-4 h-min">
                    <a class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded" href="{{ route('filmes.apagar', $filme['id']) }}">Apagar</a
                </div>
            </form>
        </div>
    </div>
</div>

@endsection