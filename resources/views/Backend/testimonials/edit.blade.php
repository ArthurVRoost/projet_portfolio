@extends('layouts.backend.app')

@section('content')
<div class="testimonials-edit-container">
    <h1 class="testimonials-edit-title">Modifier le Testimonial</h1>

    <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" class="testimonials-edit-form" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="testimonials-edit-group">
            <label for="comment">Comment</label>
            <textarea id="comment" name="comment" required>{{ $testimonial->comment }}</textarea>
        </div>

        <div class="testimonials-edit-group">
            <label for="img">Image</label>
            <input id="img" type="file" name="img" required>
        </div>

        <div class="testimonials-edit-group">
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ $testimonial->name }}" required>
        </div>

        <div class="testimonials-edit-group">
            <label for="positions">Positions</label>
            <input id="positions" type="text" name="positions" value="{{ $testimonial->positions }}" required>
        </div>

        <button type="submit" class="testimonials-edit-btn-submit">Modifier</button>
    </form>
</div>
@endsection