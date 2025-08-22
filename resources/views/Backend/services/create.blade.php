@extends('layouts.backend.app')

@section('content')


<div class="serviceCreate-container">
    <h1 class="serviceCreate-title">Ajouter un service</h1>

    <form action="{{ route('services.store') }}" method="POST" class="serviceCreate-form">
        @csrf
        
        <div class="serviceCreate-group">
            <label class="serviceCreate-label">Icon :</label>
            <select name="icon" required class="serviceCreate-select">
                <option value="">Choisir une icône</option>
                <option value="fa-solid fa-chart-line">Analytics </option>
                <option value="fa-solid fa-gear">Settings</option>
                <option value="fa-solid fa-image">Image</option>
                <option value="fa-solid fa-laptop">Laptop</option>
                <option value="fa-solid fa-globe">Web </option>
                <option value="fa-solid fa-list-check">Tasks</option>
            </select>
        </div>
        
        <div class="serviceCreate-group">
            <label class="serviceCreate-label">Titre :</label>
            <input type="text" name="title" placeholder="Nom du service" required class="serviceCreate-input">
        </div>
        
        <div class="serviceCreate-group">
            <label class="serviceCreate-label">Description :</label>
            <textarea name="text" placeholder="Description..." required class="serviceCreate-textarea"></textarea>
        </div>
        
        <button type="submit" class="serviceCreate-submitButton">Créer</button>
    </form>
</div>
@endsection