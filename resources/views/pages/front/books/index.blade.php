@extends('templates.front')

@section('title','Liste des Livres')

@section('content')
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 ">
        <h2 class="fw-bold">Tout les Livres</h2>
        <hr>
        <div class="row justify-content-start {{$books->isEmpty() ? '' : 'gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4'}}">
            @forelse($books as $book)
            @include('components.books.card')
            @empty
            <h5>Aucun Livre n'a été trouvé</h5>
            @endforelse
        </div>
    </div>
</section>
@endsection