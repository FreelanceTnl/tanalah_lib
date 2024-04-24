@extends('templates.front')

@section('title','Accueil')

@section('content')<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">{{__('Welcome to').' '.env('APP_NAME')}}</h1>
            <p class="lead fw-normal text-white-50 mb-0">Une bibliothèque gratuite ouverte à tous</p>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 ">
        <h2 class="fw-bold">Derniers Livres</h2>
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