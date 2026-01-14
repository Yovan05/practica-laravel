@extends('layouts.app')

@section('title', 'Laravel 12')
    
@push('css')
    <style>
        body{
            background-color: beige
        }
    </style>
@endpush

@push('css')
    
    <style>
        body {
            color:brown
        }
    </style>

@endpush

@section('content')

    <x-alert2 type="danger" class="mb-4">
            <x-slot name="title">
                Titulo de la alerta
            </x-slot>
            Contenido de la alerta
        </x-alert2>
        <p>Hola, Adios</p>

@endsection
        