@extends('layouts.backend.app')

@section('content')
<div class="testimonials-container">
    <h1 class="testimonials-title">Testimonials</h1>
    <a href="{{ route('testimonials.create') }}" class="testimonials-btn-add">Ajouter</a>

    <table class="testimonials-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Positions</th>
                <th>Comment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testimonials as $testimonial)
            <tr>
                <td><img src="{{ asset($testimonial->img) }}" class="testimonials-img" alt=""></td>
                <td>{{ $testimonial->name }}</td>
                <td>{{ $testimonial->positions }}</td>
                <td>{{ $testimonial->comment }}</td>
                <td class="testimonials-actions">
                    <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="testimonials-btn-edit">Edit</a>
                    <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" class="testimonials-form-delete">
                        @csrf
                        @method('DELETE')
                        <button class="testimonials-btn-delete" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection