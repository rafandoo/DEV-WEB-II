@extends('agenda.layout')

@section('titulo', 'Agenda - Edit')

@section('conteudo')

@component('agenda.form', ['agenda' => $agenda])
@endcomponent

@endsection