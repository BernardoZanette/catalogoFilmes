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
    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Sinopse</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Ano</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Categoria</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Capa</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Trailer</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Botão</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($filmes as $filme)
                    <tr @if ($loop->even) class="bg-gray-200" @endif>
                        <td class="w-1/3 text-left py-3 px-4">{{ $filme['nome'] }}</td>
                        <td class="w-1/3 text-left py-3 px-4">{{ $filme['Sinopse'] }}</td>
                        <td class="w-1/3 text-left py-3 px-4">{{ $filme['Ano'] }}</td>
                        <td class="w-1/3 text-left py-3 px-4">{{ $filme['categoria'] }}</td>
                        <td class="w-1/3 text-left py-3 px-4">{{ $filme['capa'] }}</td>
                        <td class="w-1/3 text-left py-3 px-4">{{ $filme['trailer'] }}</td>
                        <td class="text-left py-3 px-4"><a class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded" href="{{ route('animais.apagar', $filme['id']) }}">Apagar</a></td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection