@extends('layouts.backend.app')

@section('content')
<h1>Ajouter un Testimonial</h1>

<form action="{{ route('testimonials.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Comment</label>
        <textarea name="comment" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label>Image (chemin)</label>
        <input type="text" name="img" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Positions</label>
        <input type="text" name="positions" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success mt-2">Enregistrer</button>
</form>
@endsection