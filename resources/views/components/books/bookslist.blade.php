
<div class="row justify-content-start {{$books->isEmpty() ? '' : 'gx-3 row-cols-sm-2 row-cols-md-3 row-cols-lg-4'}}">
    @forelse($books as $book)
    @include('components.books.card')
    @empty
    <h5>Aucun Livre n'a été trouvé</h5>
    @endforelse
</div>