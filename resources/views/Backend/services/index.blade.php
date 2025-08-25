@extends('layouts.backend.app')

@section('content')


<div class="serviceIndex-container">
    <h1 class="serviceIndex-title">Liste des services</h1>
    <a href="{{ route('services.create') }}" class="serviceIndex-createLink">Ajouter un service</a>

    <ul class="serviceIndex-list">
        @foreach($services as $service)
            <li class="serviceIndex-item">
                <div class="serviceIndex-header">
                    <i class="{{ $service->icon }} serviceIndex-icon"></i>
                    <h3 class="serviceIndex-title-text">{{ $service->title }}</h3>
                </div>
                
                <p class="serviceIndex-description">{{ $service->text }}</p>
                
                <div class="serviceIndex-actions">
                    <a href="{{ route('services.edit', $service) }}" class="serviceIndex-editLink">Éditer</a>
                    
                </div>
                <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce service ?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">
                        Supprimer
                     </button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection