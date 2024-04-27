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
<form class="vstack gap-2" action="{{ route($book->exists ? 'admin.books.update' : 'admin.books.store' , ['book'=>$book]) }}" method="post">
    @csrf
    @method($book->exists ? 'put' : 'post')
    @include('components.input',[ 'label'=>'Titre', 'name'=>'title', 'value'=>$book->title])
    <div class="row">    
        @include('components.select',['class'=>'col-10','label'=>'Editeur', 'name'=>'publisher_id', 'value'=>$book->publisher()->pluck('id'), 'multiple'=>false, 'options'=>$publishers])
        @include('components.input',['class'=>'col-2','type'=>'number', 'label'=>'Taille', 'name'=>'size', 'value'=>$book->size])
    </div>
    @include('components.select',['label'=>'Tags', 'name'=>'tags', 'value'=>$book->tags()->pluck('id'), 'multiple'=>true, 'options'=>$tags])
    @include('components.checkbox',['label'=>'Disponible', 'name'=>'available', 'value'=>$book->available])
    <div class="row">
        @include('components.input',['class'=>'col', 'name'=>'thumbnail_link','label'=>'Lien de la Miniature', 'value'=>$book->thumbnail_link])
        @include('components.input',['class'=>'col', 'label'=>'Lien du Livre', 'name'=>'book_link', 'value'=>$book->book_link])
        
    </div>

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