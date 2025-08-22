@extends('layouts.backend.app')

@section('content')


<div class="portfolioEdit-container">
    <h1 class="portfolioEdit-title">Modifier le portfolio</h1>
    
    <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data" class="portfolioEdit-form">
        @csrf
        @method('PUT')
        
        <div class="portfolioEdit-group">
            <label class="portfolioEdit-label">Image actuelle:</label>
            <div class="portfolioEdit-imagePreview">
                <img src="{{ asset($portfolio->img) }}" alt="Image" class="portfolioEdit-currentImage">
            </div>
        </div>
        
        <div class="portfolioEdit-group">
            <label class="portfolioEdit-label">Nouvelle image:</label>
            <input type="file" name="img" class="portfolioEdit-fileInput">
        </div>
        
        <div class="portfolioEdit-group">
            <label class="portfolioEdit-label">Filtre:</label>
            <input type="text" name="filter" value="{{ $portfolio->filter }}" required class="portfolioEdit-textInput">
        </div>
        
        <button type="submit" class="portfolioEdit-submitButton">Mettre à jour</button>
    </form>
</div>
@endsection