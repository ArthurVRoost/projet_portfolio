@extends('layouts.backend.app')

@section('title', 'Éditer un Skill')

@section('content')
<div class="container mt-4">
    <h1>Éditer le Skill : {{ $skill->skill }}</h1>
    <a href="{{ route('skills.index') }}" class="btn btn-secondary mb-3">Retour</a>


    <form action="{{ route('skills.update', $skill->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="skill" class="form-label">Nom du Skill</label>
            <input type="text" name="skill" id="skill" class="form-control" value="{{ old('skill', $skill->skill) }}" required>
        </div>

        <div class="mb-3">
            <label for="pourcentage" class="form-label">Pourcentage</label>
            <input type="number" name="pourcentage" id="pourcentage" class="form-control" value="{{ old('pourcentage', $skill->pourcentage) }}" min="0" max="100" required>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection