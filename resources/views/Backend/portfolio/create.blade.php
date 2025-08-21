@extends('layouts.backend.app')

@section('title', 'Créer un portfolio')

@section('content')
    <h1 class="porfolioTitreBack">Créer un portfolio</h1>
    <form class="portfolioContentBack" action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Image :</label>
        <input type="file" name="img" required>
        <br>
        <label>Filtre :</label>
        <input type="text" name="filter" required>
        <br>
        <button type="submit">Enregistrer</button>
    </form>
@endsection