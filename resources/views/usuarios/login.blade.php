{{-- resources/views/usuarios/login.blade.php --}}

@extends('base')

@section('titulo', 'Login')

@section('conteudo')


@if($errors->any())
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
    <h4>Preenche a porcaria do formulário</h4>
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
    @endforeach
</div>  
@endif

<form class="p-10 bg-white rounded shadow-xl" method="post" action="{{route('login')}}">
    @csrf
    <div class="">
        <label class="block text-sm text-gray-600" for="username">Usuário</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="username" type="text"  placeholder="Sua Usuário" aria-label="username">
    </div>
    <div class="mt-2">
        <label class="block text-sm text-gray-600" for="password">Senha</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password"  placeholder="Sua Senha" aria-label="password">
    </div>
    <div class="mt-6">
        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" value="Entrar">Entrar</button>
    </div>
</form>

@endsection