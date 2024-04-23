@extends('templates.admin')

@section('title',$tag->exists ? 'Editer un Tag' : 'Ajouter un Tag')

@section('content')
<form class="vstack gap-2" action="{{ route($tag->exists ? 'admin.tags.update' : 'admin.tags.store' , $tag) }}" method="post">
    @csrf
    @method($tag->exists ? 'put' : 'post')
    @include('components.input',['label'=>'Nom', 'name'=>'name', 'value'=>$tag->name])

    <div>
        <button class="btn btn-primary"> 
            @if($tag->exists)
                Modifier
            @else
                Créer
            @endif
        </button>
    </div>
</form>
@endsection