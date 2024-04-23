@extends('templates.admin')

@section('title','Liste des Livres')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Nombre de pages</th>
                <th class="text-end">
                    <a href="{{ route('admin.books.create') }}" class="btn btn-primary"> + Ajouter un Livre</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td><a href="{{ $book->publisher?->link}}">{{ $book->publisher?->name }}</a></td>
                    <td>{{ $book->page_number }}</td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                            <a href="{{ route('admin.books.edit', $book) }}" class="btn btn-primary">Editer</a>
                            <form action="{{ route('admin.books.destroy', $book) }}" method="post">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $books->links() }}
@endsection