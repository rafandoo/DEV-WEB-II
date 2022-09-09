@extends('agenda.layout')

@section('titulo', 'Agenda - Edit')

@section('conteudo')
    <fieldset>
        <form action="{{ route('agenda.update', $agenda[0]['id']) }}" method="post">
            @method('PATCH')
            <label for="id" >ID: </label>
            <input type="text" disabled value="{{ $agenda[0]['id'] }}">
            <br><br>
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" value="{{ $agenda[0]['nome'] }}">
            <br><br>
            <label for="telefone">Telefone: </label>
            <input type="tel" id="telefone" name="telefone" value="{{ $agenda[0]['telefone'] }}">
            <br><br>
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" value="{{ $agenda[0]['email'] }}">
            <br><br>
            <input type="submit" value="Salvar">
        </form>
    </fieldset>
@endsection