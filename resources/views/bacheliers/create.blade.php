<!-- resources/views/bacheliers/create.blade.php -->

@extends('layouts.app')

@section('title', 'Ajouter un Nouveau Bachelier')

@section('content')
    <h1>Ajouter un Nouveau Bachelier</h1>

    <form action="{{ route('bacheliers.store') }}" method="POST">
        @csrf
        <label for="numero_table">Numero de table:</label>
        <input type="id" id="numero_table" name="numero_table" required><br><br>

        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="etablissement">Établissement:</label>
        <input type="text" id="etablissement" name="etablissement" required><br><br>

        <label for="mention">Mention:</label>
        <input type="text" id="mention" name="mention"><br><br>

        <button type="submit">Ajouter</button>
    </form>
@endsection
