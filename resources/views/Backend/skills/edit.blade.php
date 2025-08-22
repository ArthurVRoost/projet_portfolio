@extends('layouts.backend.app')

@section('title', 'Éditer un Skill')

@section('content')

<div class="skillEdit-container">
    <h1 class="skillEdit-title">Éditer le Skill : {{ $skill->skill }}</h1>
    <a href="{{ route('skills.index') }}" class="skillEdit-backLink">Retour</a>

    <form action="{{ route('skills.update', $skill->id) }}" method="POST" class="skillEdit-form">
        @csrf
        @method('PUT')

        <div class="skillEdit-group">
            <label for="skill" class="skillEdit-label">Nom du Skill</label>
            <input type="text" name="skill" id="skill" class="skillEdit-input" value="{{ old('skill', $skill->skill) }}" required>
        </div>

        <div class="skillEdit-group">
            <label for="pourcentage" class="skillEdit-label">Pourcentage</label>
            <input type="number" name="pourcentage" id="pourcentage" class="skillEdit-numberInput" value="{{ old('pourcentage', $skill->pourcentage) }}" min="0" max="100" required>
        </div>

        <button type="submit" class="skillEdit-submitButton">Mettre à jour</button>
    </form>
</div>
@endsection