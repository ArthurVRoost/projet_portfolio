@extends('layouts.backend.app')

@section('content')
<h1 class="messages-title">Messages reçus</h1>



<table class="messages-table">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Sujet</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($messages as $message)
        <tr>
            <td>{{ $message->nom }}</td>
            <td>{{ $message->email }}</td>
            <td>{{ $message->sujet }}</td>
            <td>{{ $message->message }}</td>
            <td>
                <form action="{{ route('messages.destroy', $message->id) }}" method="POST" class="messages-delete-form" onsubmit="return confirm('Supprimer ce message ?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="messages-delete-btn">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection