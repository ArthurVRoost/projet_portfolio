@extends('layouts.backend.app')

@section('title', 'Créer un portfolio')

@section('content')


<div class="portfolioCreate-container">
    <h1 class="portfolioCreate-title">Créer un portfolio</h1>
    {{-- ENCTYPE POUR LES IMAGES --}}
    <form class="portfolioCreate-form" action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="portfolioCreate-group">
            <label class="portfolioCreate-label">Image :</label>
            <input type="file" name="img" required class="portfolioCreate-fileInput">
        </div>
        
        <div class="portfolioCreate-group">
            <label class="portfolioCreate-label">Filtre :</label>
            <input type="text" name="filter" required class="portfolioCreate-textInput">
        </div>
        
        <button type="submit" class="portfolioCreate-submitButton">Enregistrer</button>
    </form>
</div>
@endsection