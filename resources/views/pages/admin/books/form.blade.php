@extends('templates.admin')

@section('title',$book->exists ? 'Editer un Livre' : 'Ajouter un Livre')

@section('header-script')
<link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.bootstrap5.css" rel="stylesheet">
@endsection

@section('footer-script')
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
<script>new TomSelect('select[multiple]',{plugins:{remove_button:{title:'Supprimer'}}})</script>
@endsection

@section('content')
<form class="vstack gap-2" action="{{ route($book->exists ? 'admin.books.update' : 'admin.books.store' , ['book'=>$book]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method($book->exists ? 'put' : 'post')
    @include('components.input',[ 'label'=>'Titre', 'name'=>'title', 'value'=>$book->title])
    <div class="row">    
        @include('components.select',['class'=>'col-10','label'=>'Auteur', 'name'=>'publisher', 'value'=>$book->publisher()->pluck('id'), 'multiple'=>false, 'options'=>$publishers])
        @include('components.input',['class'=>'col-2','type'=>'number', 'label'=>'Nombre de Page', 'name'=>'page_number', 'value'=>$book->page_number])
    </div>
    @include('components.select',['label'=>'Tags', 'name'=>'tags', 'value'=>$book->tags()->pluck('id'), 'multiple'=>true, 'options'=>$tags])
    @include('components.input',['type'=>'textarea','name'=>'description', 'value'=>$book->description])
    @include('components.checkbox',['label'=>'Disponible', 'name'=>'available', 'value'=>$book->available])
    @if(!$book->exists)
    <div class="row">
        @include('components.input',['class'=>'col', 'name'=>'thumbnail','label'=>'Miniature', 'type'=>'file'])
        @include('components.input',['class'=>'col', 'label'=>'Livre', 'name'=>'book', 'type'=>'file'])
        
    </div>
    @endif

    <div>
        <button class="btn btn-primary"> 
            @if($book->exists)
                Modifier
            @else
                Créer
            @endif
        </button>
    </div>
</form>
@endsection