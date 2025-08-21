@extends('layouts.backend.app')

@section('title', 'Modifier un portfolio')

@section('content')
    <h1>Modifier le portfolio</h1>
    <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>Image actuelle :</label>
        <img src="{{ asset($portfolio->img) }}" alt="Image" width="150">
        <br>
        <label>Nouvelle image (facultatif) :</label>
        <input type="file" name="img">
        <br>
        <label>Filtre :</label>
        <input type="text" name="filter" value="{{ $portfolio->filter }}" required>
        <br>
        <button type="submit">Mettre à jour</button>
    </form>
@endsection