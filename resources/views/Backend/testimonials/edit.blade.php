@extends('layouts.backend.app')

@section('content')
<h1>Modifier le Testimonial</h1>

<form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Comment</label>
        <textarea name="comment" class="form-control" required>{{ $testimonial->comment }}</textarea>
    </div>
    <div class="form-group">
        <label>Image (chemin)</label>
        <input type="text" name="img" class="form-control" value="{{ $testimonial->img }}" required>
    </div>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{ $testimonial->name }}" required>
    </div>
    <div class="form-group">
        <label>Positions</label>
        <input type="text" name="positions" class="form-control" value="{{ $testimonial->positions }}" required>
    </div>
    <button type="submit" class="btn btn-success mt-2">Modifier</button>
</form>
@endsection