@extends('base')

@section('titulo', 'Inserir Filme')

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

<form class="p-10 bg-white rounded shadow-xl" method="post" enctype="multipart/form-data" action="{{ route('filmes.gravar') }}">
    @csrf
    <div class="">
        <label class="block text-sm text-gray-600" for="nome">Nome</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nome" name="nome" type="text" value="{{ old('nome') }}">
    </div>
    <div class="mt-2">
        <label class="block text-sm text-gray-600" for="sinopse">Sinopse</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="sinopse" value="{{ old('sinopse') }}" name="sinopse" type="text" aria-label="sinopse">
    </div>
    <div class="mt-2">
        <label class="block text-sm text-gray-600" for="ano">Ano</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="ano" value="{{ old('ano') }}" name="ano" type="number" aria-label="ano">
    </div>
    <div class="mt-2">
        <label class="block text-sm text-gray-600" for="categoria">Categoria</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="categoria" value="{{ old('categoria') }}" name="categoria" type="text" aria-label="categoria">
    <div>
        <label class="block text-sm text-gray-600" for="capa">Capa</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="capa" name="capa" type="file" aria-label="capa">
    </div>
    <div class="mt-2">
        <label class="block text-sm text-gray-600" for="trailler">Trailer</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="trailler" value="{{ old('trailler') }}" name="trailler" type="text" aria-label="trailler">
    </div>
    <div class="mt-6">
        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" value="Gravar">Gravar</button>
    </div>
</form>
@endsection