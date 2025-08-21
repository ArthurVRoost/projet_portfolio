@extends('layouts.backend.app')

@section('content')
<div class="container mt-5">
    <h2>Modifier le profil About</h2>

    
    <form action="{{ route('about.update', $about->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Subtitle</label>
            <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $about->subtitle) }}">
        </div>

        <div class="mb-3">
            <label>Birthdate</label>
            <input type="date" name="birthdate" class="form-control" value="{{ old('birthdate', $about->birthdate) }}">
        </div>

        <div class="mb-3">
            <label>Website</label>
            <input type="text" name="website" class="form-control" value="{{ old('website', $about->website) }}">
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $about->phone) }}">
        </div>

        <div class="mb-3">
            <label>City</label>
            <input type="text" name="city" class="form-control" value="{{ old('city', $about->city) }}">
        </div>

        <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age" class="form-control" value="{{ old('age', $about->age) }}">
        </div>

        <div class="mb-3">
            <label>Degree</label>
            <input type="text" name="degree" class="form-control" value="{{ old('degree', $about->degree) }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $about->email) }}">
        </div>

        <div class="mb-3">
            <label>Freelance</label>
            <input type="text" name="freelance" class="form-control" value="{{ old('freelance', $about->freelance) }}">
        </div>

        <div class="mb-3">
            <label>Subtext</label>
            <textarea name="subtext" class="form-control">{{ old('subtext', $about->subtext) }}</textarea>
        </div>

        <div class="mb-3">
            <label>Image Src</label>
            <input type="text" name="src" class="form-control" value="{{ old('src', $about->src) }}">
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection