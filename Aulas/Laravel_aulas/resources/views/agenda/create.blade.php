@extends('agenda.layout')

@section('titulo', 'Agenda - Create')

@section('conteudo')

<form action="{{ route('agenda.store') }}">
    @method('POST')
    @component('agenda.form')
    @endcomponent
</form>


@endsection