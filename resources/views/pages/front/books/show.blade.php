@extends('templates.front')

@section('title',ucwords($book->title))

@section('content')

        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('storage/'.$book->thumbnail) }}" alt="{{$book->title}}" /></div>
                    <div class="col-md-6">
                        <h2 class="display-5 fw-bolder">{{ucwords($book->title)}}</h2>
                        <div class="fs-5 mb-5">
                            <span><a class="btn btn-link " href="{{$book->publisher->link}}">{{$book->publisher->name}}</a></span>
                        </div>
                        <p class="lead">{!! nl2br($book->description) !!}</p>
                        <div class="d-flex">
                            @include('components.books.download-button')
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5">
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