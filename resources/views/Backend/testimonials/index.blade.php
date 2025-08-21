@extends('layouts.backend.app')

@section('content')
<h1>Testimonials</h1>
<a href="{{ route('testimonials.create') }}" class="btn btn-primary">Ajouter</a>

<table class="table">
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
            <td><img src="{{ asset($testimonial->img) }}" width="80" alt=""></td>
            <td>{{ $testimonial->name }}</td>
            <td>{{ $testimonial->positions }}</td>
            <td>{{ $testimonial->comment }}</td>
            <td>
                <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection