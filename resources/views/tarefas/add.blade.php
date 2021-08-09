@extends('layouts.admin')

@section('title', 'Adição de Tarefas')

@section('conteudo')
    <h1>Adição</h1>

    {{-- @if(session('warning'))
        <x-alert>
            {{ session('warning') }}
        </x-alert>
    @endif --}}

    @if ($errors->any())
        <x-alert>
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </x-alert>
    @endif

    <form method="POST">
        @csrf

        <label for="">
            Título: <br>
            <input type="text" name="titulo">
        </label>

        <input type="submit" value="Adicionar">
    </form>
@endsection
