{{-- resources/views/filmes/index.blade.php --}}

@extends('base')

@section('titulo', 'Usuários')

@section('conteudo')
<p>
    <a class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" href="{{ route('usuarios.inserir') }}">Cadastrar usuário</a>
</p>

<div class="w-full mt-6">
    <p class="text-xl pb-3 flex items-center">
        <i class="fas fa-list mr-3"></i> lista de Usuários
    </p>
    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Id</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Admin</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Botão</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($usuarios as $usuario)
                    <tr @if ($loop->even) class="bg-gray-200" @endif>
                        <td class="w-1/3 text-left py-3 px-4">{{ $usuario['id'] }}</td>
                        <td class="w-1/3 text-left py-3 px-4">{{ $usuario['name'] }}</td>
                        <td class="w-1/3 text-left py-3 px-4">{{ $usuario['email'] }}</td>
                        <td class="w-1/3 text-left py-3 px-4">{{ $usuario->admin ? 'Sim' : 'Não' }}</td>
                        <td class="text-left py-3 px-4"><a class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded" href="{{ route('usuarios.apagar', $usuario['id']) }}">Apagar</a></td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
