@extends('layouts.backend.app')

@section('title', 'Liste des Skills')

@section('content')
<div class="container page3 mt-4 page2">
    <h1>Skills</h1>
    <a href="{{ route('skills.create') }}" class="btn btn-primary mb-3">Ajouter un Skill</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom du Skill</th>
                <th>Pourcentage</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($skills as $skill)
                <tr>
                    <td>{{ $skill->id }}</td>
                    <td>{{ $skill->skill }}</td>
                    <td>{{ $skill->pourcentage }}%</td>
                    <td>
                        <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-sm btn-warning">Éditer</a>
                        <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection