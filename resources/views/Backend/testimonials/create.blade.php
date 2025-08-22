@extends('layouts.backend.app')

@section('content')
<div class="testimonials-create-container">
    <h1 class="testimonials-create-title">Ajouter un Testimonial</h1>

    <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data" class="testimonials-create-form">
        @csrf

        
        <div class="testimonials-create-group">
            <label for="comment">Comment</label>
            <textarea id="comment" name="comment" placeholder="Écrivez le commentaire ici..." required></textarea>
        </div>

        
        <div class="testimonials-create-group">
            <label >Image</label>
            <input id="img" type="file" name="img" required>
        </div>

       
        <div class="testimonials-create-group">
            <label >Name</label>
            <input id="name" type="text" name="name" placeholder="Nom du client" required>
        </div>

       
        <div class="testimonials-create-group">
            <label >Positions</label>
            <input id="positions" type="text" name="positions" placeholder="Poste ou rôle" required>
        </div>

        
        <button type="submit" class="testimonials-create-btn-submit">Enregistrer</button>
    </form>
</div>
@endsection