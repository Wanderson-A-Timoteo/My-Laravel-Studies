@extends('layouts.admin')

@section('title', 'Configurações')

@section('conteudo')

    <h1>Configurações</h1>

    @component('components.alert')
        @slot('title')
            Titulo 2:
        @endslot
            Conteúdo da mensagem de alerta 2
    @endcomponent



{{--

    <x-alert>
        @slot('title')
            Titulo 2:
        @endslot
        Conteúdo da mensagem de alerta 2
    </x-alert>

    @component('alert')
        @slot('title')
            Sucesso:
        @endslot
         Cadastro realizado!
    @endcomponent

    @component('alert')
        Erro ao cadastrar...
    @endcomponent

    <?php
        $i = 0;
    ?>

    @while ( $i < 10 )
        <p> Valor: {{ $i }} </p>
        <?php
            $i++;
        ?>
    @endwhile


  <ul>
        @forelse ($lista as $item)
            <li>{{ $item }}</li>
        @empty
            <li>Não existe ingredientes</li>
        @endforelse
    </ul>


    Meu nome é {{ $nome }}. Eu tenho {{ $idade }} anos.

    @if (count($lista) > 0)
        Ingredientes do bolo:
        <ul>
            @foreach ($lista as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @else
        Não existe ingredientes.
    @endif


    @for ($i = 0; $i < 10; $i++)
        O valor é {{$i}} <br>
    @endfor

    @if ($idade > 18 && $idade <= 60)
        Eu sou adulto
    @elseif($idade > 60 && $idade <= 120)
        Eu sou idoso
    @else
        Eu sou MENOR de idade
    @endif

    @isset($versao)
        Este sistema esta na versão: {{ $versao }}
    @endisset

    @empty($cidade)
        A variável esta vazia
    @endempty

    @unless (isset($nome))
        A variável não existe
    @else
        A variável existe
    @endunless --}}


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
