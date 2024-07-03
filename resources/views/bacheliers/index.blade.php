<!-- resources/views/bacheliers/index.blade.php -->

@extends('layouts.app')

@section('title', 'Liste des Bacheliers')

@section('content')
    <h1>Liste des Bacheliers</h1>

    <a href="{{ url('/bacheliers/create') }}">Ajouter un nouveau bachelier</a>

    <ul>
        @foreach($bacheliers as $bachelier)
            <li>
                <a href="{{ url('/bacheliers/' . $bachelier->id) }}">
                    {{ $bachelier->prenom }} {{ $bachelier->nom }}
                </a>
                <form action="{{ url('/bacheliers/' . $bachelier->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
