@extends('layouts.backend.app')

@section('content')
    <h1>Éditer le service</h1>

    <form action="{{ route('services.update', $service) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Icon :</label>
        <input type="text" name="icon" value="{{ $service->icon }}" required>
        <br>
        <label>Titre :</label>
        <input type="text" name="title" value="{{ $service->title }}" required>
        <br>
        <label>Description :</label>
        <textarea name="text" required>{{ $service->text }}</textarea>
        <br>
        <button type="submit">Mettre à jour</button>
    </form>
@endsection