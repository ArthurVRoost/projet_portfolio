@extends('layouts.backend.app')

@section('title', 'Ajouter un Skill')

@section('content')
<div class="container mt-4">
    <h1>Ajouter un Skill</h1>
    <a href="{{ route('skills.index') }}" class="btn btn-secondary mb-3">Retour</a>


    <form action="{{ route('skills.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="skill" class="form-label">Nom du Skill</label>
            <input type="text" name="skill" id="skill" class="form-control" value="{{ old('skill') }}" required>
        </div>

        <div class="mb-3">
            <label for="pourcentage" class="form-label">Pourcentage</label>
            <input type="number" name="pourcentage" id="pourcentage" class="form-control" value="{{ old('pourcentage') }}" min="0" max="100" required>
        </div>

        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
</div>
@endsection