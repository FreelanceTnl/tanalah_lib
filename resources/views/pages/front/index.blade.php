@extends('templates.front')

@section('title','Accueil')

@section('content')<!-- Header-->
<header class="bg-dark py-3">
    <div class="container px-4 px-lg-5 my-3">
        <div class="text-center text-white">
            <img src="http://localhost:8001/favicon.png" alt="" width="150" height="150">
            <h1 class="display-4 fw-bolder">{{__('Welcome to').' '.env('APP_NAME')}}</h1>
            <p class="lead fw-normal text-white-50 mb-0">Un Site de referencement de livres sur l'informatique</p>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 ">
        <div class="mb-5">
        @include('components.searchform')
        </div>
        <hr>
        @include('components.books.tags')
        <hr>
        @include('components.books.bookslist')
    </div>
</section>
@endsection