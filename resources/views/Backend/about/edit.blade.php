@extends('layouts.backend.app')

@section('content')

<div class="about-form-container">
    <h2 class="about-form-title">Modifier le profil About</h2>
    {{-- METHODE PUT POUR UPDATE --}}
    <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="formAbout-group">
            <label class="formAbout-label">Subtitle</label>
            <input type="text" name="subtitle" class="formAbout-input" value="{{ old('subtitle', $about->subtitle) }}">
        </div>

        <div class="formAbout-group">
            <label class="formAbout-label">Birthdate</label>
            <input type="date" name="birthdate" class="formAbout-input" value="{{ old('birthdate', $about->birthdate) }}">
        </div>

        <div class="formAbout-group">
            <label class="formAbout-label">Website</label>
            <input type="text" name="website" class="formAbout-input" value="{{ old('website', $about->website) }}">
        </div>

        <div class="formAbout-group">
            <label class="formAbout-label">Phone</label>
            <input type="text" name="phone" class="formAbout-input" value="{{ old('phone', $about->phone) }}">
        </div>

        <div class="formAbout-group">
            <label class="formAbout-label">City</label>
            <input type="text" name="city" class="formAbout-input" value="{{ old('city', $about->city) }}">
        </div>

        <div class="formAbout-group">
            <label class="formAbout-label">Age</label>
            <input type="number" name="age" class="formAbout-input" value="{{ old('age', $about->age) }}">
        </div>

        <div class="formAbout-group">
            <label class="formAbout-label">Degree</label>
            <input type="text" name="degree" class="formAbout-input" value="{{ old('degree', $about->degree) }}">
        </div>

        <div class="formAbout-group">
            <label class="formAbout-label">Email</label>
            <input type="email" name="email" class="formAbout-input" value="{{ old('email', $about->email) }}">
        </div>

        <div class="formAbout-group">
            <label class="formAbout-label">Freelance</label>
            <input type="text" name="freelance" class="formAbout-input" value="{{ old('freelance', $about->freelance) }}">
        </div>

        <div class="formAbout-group">
            <label class="formAbout-label">Subtext</label>
            <textarea name="subtext" class="formAbout-textarea">{{ old('subtext', $about->subtext) }}</textarea>
        </div>

        <div class="formAbout-group">
            <label class="formAbout-label">Image</label>
            <input type="file" name="avatar">
        </div>
        <button type="submit" class="submitAbout-button">Mettre à jour</button>
    </form>
</div>
@endsection