@extends('layouts.backend.app')

@section('content')
    <h1>Liste des services</h1>
    <a href="{{ route('services.create') }}">Ajouter un service</a>

    <ul>
        @foreach($services as $service)
            <li>
                <i class="{{ $service->icon }}"></i>
                <strong>{{ $service->title }}</strong> - {{ $service->text }}
                <a href="{{ route('services.edit', $service) }}">Éditer</a>
                <form action="{{ route('services.destroy', $service) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection