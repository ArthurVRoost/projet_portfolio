@extends('layouts.backend.app')

@section('title', 'Ajouter un Skill')

@section('content')


<div class="skillCreate-container">
    <h1 class="skillCreate-title">Ajouter un Skill</h1>
    <a href="{{ route('skills.index') }}" class="skillCreate-backLink">Retour</a>

    <form action="{{ route('skills.store') }}" method="POST" class="skillCreate-form">
        @csrf
        
        <div class="skillCreate-group">
            <label for="skill" class="skillCreate-label">Nom du Skill</label>
            <input type="text" name="skill" id="skill" class="skillCreate-input" value="{{ old('skill') }}" required>
        </div>

        <div class="skillCreate-group">
            <label for="pourcentage" class="skillCreate-label">Pourcentage</label>
            <input type="number" name="pourcentage" id="pourcentage" class="skillCreate-numberInput" value="{{ old('pourcentage') }}" min="0" max="100" required>
        </div>

        <button type="submit" class="skillCreate-submitButton">Ajouter</button>
    </form>
</div>
@endsection