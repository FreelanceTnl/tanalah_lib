@extends('templates.admin')

@section('title',$publisher->exists ? 'Editer un Auteur' : 'Ajouter un Auteur')

@section('content')
<form class="vstack gap-2" action="{{ route($publisher->exists ? 'admin.publishers.update' : 'admin.publishers.store' , $publisher) }}" method="post">
    @csrf
    @method($publisher->exists ? 'put' : 'post')
    @include('components.input',['label'=>'Nom', 'name'=>'name', 'value'=>$publisher->name])
    @include('components.input',['label'=>'Lien', 'name'=>'link', 'value'=>$publisher->link])

    <div>
        <button class="btn btn-primary"> 
            @if($publisher->exists)
                Modifier
            @else
                Créer
            @endif
        </button>
    </div>
</form>
@endsection