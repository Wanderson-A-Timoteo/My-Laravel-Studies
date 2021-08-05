@extends('layouts.admin')

@section('title', 'Configurações')

@section('conteudo')

    <h1>Configurações</h1>

    Meu nome é {{ $nome }}. Eu tenho {{ $idade }} anos.

    <form action="" method="POST">
        @csrf

        Nome: <br>
        <input type="text" name="nome"> <br>

        Idade: <br>
        <input type="text" name="idade"> <br>

        Cidade: <br>
        <input type="text" name="cidade"> <br>

        <input type="submit" value="Enviar">
    </form>

    <a href="/config/info">Configurações INFO da view config.blade</a>
@endsection
