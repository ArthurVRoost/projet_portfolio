@extends('layouts.backend.app')

@section('title', 'Portfolios')

@section('content')


<div class="portfolioIndex-container">
    <h1 class="portfolioIndex-title">Portfolios</h1>
    <a class="portfolioIndex-createLink" href="{{ route('portfolios.create') }}">Créer un nouveau portfolio</a>

    <ul class="portfolioIndex-list">
        @foreach ($portfolios as $portfolio)
            <li class="portfolioIndex-item">
                <img src="{{ asset($portfolio->img) }}" alt="Portfolio" class="portfolioIndex-image">
                <p class="portfolioIndex-filter">{{ $portfolio->filter }}</p>
                <div class="portfolioIndex-actions">
                    <a href="{{ route('portfolios.edit', $portfolio->id) }}" class="portfolioIndex-editLink">Modifier</a>
                    <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST" class="portfolioIndex-deleteForm">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="portfolioIndex-deleteButton" onclick="return confirm('Supprimer ce portfolio ?')">Supprimer</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection