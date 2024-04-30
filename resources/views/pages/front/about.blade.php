@extends('templates.front')

@section('title','A Propos')

@section('content')<!-- Header-->
<header class="bg-dark py-3">
    <div class="container px-4 px-lg-5 my-3">
        <div class="text-center text-white">
            <img src="/favicon.png" alt="" width="150" height="150">
            <h1 class="display-4 fw-bolder">A propos de {{env('APP_NAME')}}</h1>
        </div>
    </div>
</header>

<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 ">
        <h2>C'est quoi {{env('APP_NAME')}} ?</h2>
        <hr>
        <p>
            {{ env('APP_NAME')}} est un projet personnel conçu pour créer une bibliothèque numérique de référencement de livres francophones sur l'informatique, disponibles en format PDF et accessibles gratuitement sur le Web.
            L'objectif est de faciliter la recherche de ces resources pdf.
        </p>
        <hr>
        <h2>Qui suis-je ?</h2>
        <p>
            Je m'appelle Toavina et je suis développeur web, spécialisé principalement dans le développement BackEnd.<br>
            Mon expertise repose sur le langage PHP, avec une affinité particulière pour le framework Laravel. <br>
            J'ai également acquis des connaissances en travaillant sur quelques projets utilisant le Framework Symfony ainsi que le CMS WordPress. <br>
            Bien que mon domaine de prédilection soit le BackEnd, j'ai des compétences en développement FrontEnd, notamment avec React, ainsi qu'en développement mobile utilisant le framework Ionic. <br>
            Ayant une passion pour la création de solutions web robustes et évolutives, et je suis toujours à la recherche de nouvelles technologies à explorer.<br>
        </p>
        <p> Vous pouvez me contacter via mes différents contact</p> 
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fa-brands fa-whatsapp"></i> WhatsApp : <span class="text-success">+261 33 29 545 51</span> 
            <li class="list-group-item"><i class="fa-regular fa-envelope"></i> E-Mail : <a class="text-success" href="mailto:tanalah.dev@gmail.com">tanalah.dev@gmail.com</a></li>
    </div>
</section>
@endsection
