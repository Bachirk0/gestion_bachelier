<!-- resources/views/bacheliers/edit.blade.php -->

@extends('layouts.app')

@section('title', 'Modifier le Bachelier')

@section('content')
    <h1>Modifier le Bachelier</h1>

    <form action="{{ route('bacheliers.update', $bachelier->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="numero_table">Numero de table:</label>
        <input type="id" id="numero_table" name="numero_table" value="{{ $bachelier->numero_table }}" required><br><br>

        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" value="{{ $bachelier->prenom }}" required><br><br>

        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="{{ $bachelier->nom }}" required><br><br>

        <label for="etablissement">Établissement:</label>
        <input type="text" id="etablissement" name="etablissement" value="{{ $bachelier->etablissement }}" required><br><br>

        <label for="mention">Mention:</label>
        <input type="text" id="mention" name="mention" value="{{ $bachelier->mention }}"><br><br>

        <button type="submit">Modifier</button>
    </form>
@endsection
