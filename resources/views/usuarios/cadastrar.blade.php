{{-- views/filmes/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Catálogo de Filmes')

@section('conteudo')
<p>Preencha o formulário</p>

@if($errors->any())
<div>
    <h4>Deu ruim</h4>
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
    @endforeach
</div>  
@endif
<form class="p-10 bg-white rounded shadow-xl" method="post" action="{{route('usuarios.gravar')}}">
    @csrf
    <div class="">
        <label class="block text-sm text-gray-600" for="username">Name:</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" value="{{ old('name') }}" id="username" name="username" type="text"  placeholder="Sua Usuário" aria-label="username">
    </div>
    <div class="mt-2">
        <label class="block text-sm text-gray-600" for="password">Email:</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="email" value="{{ old('email') }}" name="email" type="email"  placeholder="Seu email" aria-label="email">
    </div>
    <div class="mt-2">
        <label class="block text-sm text-gray-600" for="password">Username:</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="username" type="text" value="{{ old('username') }}"  placeholder="Username" aria-label="username">
    </div>
    <div class="mt-2">
        <label class="block text-sm text-gray-600" for="password">Senha:</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password" value="{{ old('password') }}  placeholder="Sua Senha" aria-label="password">
    </div>
    Admin:
    <select class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounde" name="admin">
        <option value="0">Não</option>
        <option value="1">Sim</option>
    </select>
    <div class="mt-6">
        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" value="Gravar">Gravar</button>
    </div>
</form>
@endsection