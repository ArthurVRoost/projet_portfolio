@extends('layouts.backend.app')

@section('content')


<div class="serviceEdit-container">
    <h1 class="serviceEdit-title">Éditer le service</h1>

    <form action="{{ route('services.update', $service) }}" method="POST" class="serviceEdit-form">
        @csrf
        @method('PUT')
        
        <div class="serviceEdit-group">
            <label class="serviceEdit-label">Icon :</label>
            <select name="icon" required class="serviceEdit-select">
                <option value="fa-solid fa-chart-line" {{ $service->icon == 'fa-solid fa-chart-line' ? 'selected' : '' }}>Analytics </option>
                <option value="fa-solid fa-gear" {{ $service->icon == 'fa-solid fa-gear' ? 'selected' : '' }}>Settings </option>
                <option value="fa-solid fa-image" {{ $service->icon == 'fa-solid fa-image' ? 'selected' : '' }}>Image </option>
                <option value="fa-solid fa-laptop" {{ $service->icon == 'fa-solid fa-laptop' ? 'selected' : '' }}>Laptop </option>
                <option value="fa-solid fa-globe" {{ $service->icon == 'fa-solid fa-globe' ? 'selected' : '' }}> Web </option>
                <option value="fa-solid fa-list-check" {{ $service->icon == 'fa-solid fa-list-check' ? 'selected' : '' }}> Tasks </option>
            </select>
        </div>
        
        <div class="serviceEdit-group">
            <label class="serviceEdit-label">Titre :</label>
            <input type="text" name="title" value="{{ $service->title }}" required class="serviceEdit-input">
        </div>
        
        <div class="serviceEdit-group">
            <label class="serviceEdit-label">Description :</label>
            <textarea name="text" required class="serviceEdit-textarea">{{ $service->text }}</textarea>
        </div>
        
        <button type="submit" class="serviceEdit-submitButton">Mettre à jour</button>
    </form>
</div>
@endsection