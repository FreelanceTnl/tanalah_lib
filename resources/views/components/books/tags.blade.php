
<div class="justify-content-start">
@forelse($tags as $tag)
<a href="{{route('books.index')}}?tag={{$tag->id}}" class="btn btn-outline-success mb-2">
    {{$tag->name}}
</a>
@empty
<h5>Aucuns Catégorie n'a été trouvé</h5>
@endforelse
</div>