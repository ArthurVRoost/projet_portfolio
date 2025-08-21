@extends('layouts.backend.app')

@section('content')
    <h1>Ajouter un service</h1>

    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <label>Icon :</label>
        <input type="text" name="icon" placeholder="fa-solid fa-laptop" required>
        <br>
        <label>Titre :</label>
        <input type="text" name="title" placeholder="Nom du service" required>
        <br>
        <label>Description :</label>
        <textarea name="text" placeholder="Description..." required></textarea>
        <br>
        <button type="submit">Créer</button>
    </form>
@endsection