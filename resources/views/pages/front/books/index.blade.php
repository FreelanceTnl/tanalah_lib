@extends('templates.front')

@section('title','Liste des Livres')

@section('content')
<!-- Section-->
<section class="py-3 px-5">
    <div class="container px-4 px-lg-5 ">
        <h2 class="fw-bold">La Bibliothèque</h2>
        <hr>
        @include('components.searchform')
        <hr>
        @include('components.books.tags')
        <hr>
        @include('components.books.bookslist')
    </div>
    {{$books->onEachSide(2)->links()}}
</section>
@endsection