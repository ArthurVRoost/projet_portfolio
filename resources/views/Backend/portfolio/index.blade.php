@extends('layouts.backend.app')

@section('title', 'Portfolios')

@section('content')
    <h1 class="portfolioTitreBack">Portfolios</h1>
    <a class="portfolioTitreBack" href="{{ route('portfolios.create') }}">Créer un nouveau portfolio</a>

    <ul class="portfolioContentBack">
        @foreach ($portfolios as $portfolio)
            <li>
                <img src="{{ asset($portfolio->img) }}" alt="Portfolio" width="150">
                <p>{{ $portfolio->filter }}</p>
                <a href="{{ route('portfolios.edit', $portfolio->id) }}">Modifier</a>
                <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Supprimer ce portfolio ?')">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection