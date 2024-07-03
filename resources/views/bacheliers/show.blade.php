<!-- resources/views/bacheliers/show.blade.php -->

@extends('layouts.app')

@section('title', 'Détails du Bachelier')

@section('content')
    <h1>Détails du Bachelier</h1>
    <p><strong>Numero de table:</strong> {{ $bachelier->numero_table }}</p>
    <p><strong>Prénom:</strong> {{ $bachelier->prenom }}</p>
    <p><strong>Nom:</strong> {{ $bachelier->nom }}</p>
    <p><strong>Établissement:</strong> {{ $bachelier->etablissement }}</p>
    <p><strong>Mention:</strong> {{ $bachelier->mention }}</p>

    <a href="{{ url('/bacheliers/' . $bachelier->id . '/edit') }}">Modifier</a>
@endsection
