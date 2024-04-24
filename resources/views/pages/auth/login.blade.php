@extends('templates.front')

@section('title','Connexion')

@section('content')
<main class="flex-shrink-0">
<div class="container my-5">
    <h1>@yield('title')</h1>
    <hr>
    @include('components.flash')
    <form action="{{ route('login') }}" method="post" class="vstack gap-3">
        @csrf
        @include('components.input',['class'=>'', 'label'=>'E-Mail', 'name'=>'email','type'=>'email'])
        @include('components.input',['class'=>'', 'label'=>'Mot de passe', 'name'=>'password','type'=>'password'])
        <div>
            <button class="btn btn-primary">Se Connecter</button>
        </div>
    </form>
</div>
</main>
@endsection