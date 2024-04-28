@extends('templates.front')

@section('title',ucwords($book->title))

@section('content')

<section class="py-5">
    <div class="container px-4 px-lg-5 ">
        <h2 class="fw-bold">{{ucwords($book->title)}}</h2>
        <hr>
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6 bg-secondary p-2"><img class="card-img-top  mb-0 rounded" src="{{ $book->thumbnail_link }}" alt="{{$book->title}}" /></div>
                    <div class="col-md-6">
                        <h2 class="display-5 fw-bolder">{{ucwords($book->title)}}</h2>
                        <div class="fs-5 mb-5">
                            <div class="ms-auto d-flex">
                                <div class="my-2 fw-bold">
                                <a class="text-success text-decoration-none" href="{{$book->publisher->link}}">                    
                                <img class="rounded" src="{{$book->publisher->logo}}" width="30" height="30" alt="">
                                {{$book->publisher->name}}
                                </a>
                                </div>
                                <div class="ms-auto my-2 text-muted">
                                    {{ucwords($book->size)}} Mo
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            @include('components.books.download-button')
                        </div>
                    </div>
                </div>
        <hr>
        <!-- Related items section-->
                <h3 class="fw-bolder mb-4">Autres Livres qui pourraient vous intéréssé : </h3>
                <div class="row justify-content-start {{$books->isEmpty() ? '' : 'gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4'}}">
                @forelse($books as $book)
                @include('components.books.card')
                @empty
                <h5 class="text-muted">Aucun Livre n'a été trouvé</h5>
                @endforelse
                </div>
    </div>
</section>
@endsection
