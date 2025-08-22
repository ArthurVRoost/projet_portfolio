@extends('layouts.backend.app')

@section('content')
<div class="container contactForm page2 mt-5">
    <h2>Modifier le contact</h2>

    

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Rue</label>
            <input type="text" name="street" class="form-control" value="{{ old('street', $contact->street) }}">
        </div>

        <div class="mb-3">
            <label>Numéro</label>
            <input type="number" name="number" class="form-control" value="{{ old('number', $contact->number) }}">
        </div>

        <div class="mb-3">
            <label>Ville</label>
            <input type="text" name="city" class="form-control" value="{{ old('city', $contact->city) }}">
        </div>

        <div class="mb-3">
            <label>ZIP</label>
            <input type="text" name="zip" class="form-control" value="{{ old('zip', $contact->zip) }}">
        </div>

        <div class="mb-3">
            <label>Téléphone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $contact->phone) }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $contact->email) }}">
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection