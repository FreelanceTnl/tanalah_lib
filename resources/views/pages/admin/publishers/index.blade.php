@extends('templates.admin')

@section('title','Liste des Auteurs')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Site Web</th>
                <th class="text-end">
                    <a href="{{ route('admin.publishers.create') }}" class="btn btn-primary"> + Ajouter un Auteur</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($publishers as $publisher)
                <tr>
                    <td>{{ $publisher->name }}</td>
                    <td><a href="{{ $publisher->link}}">{{ $publisher->link }}</a></td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                            <a href="{{ route('admin.publishers.edit', $publisher) }}" class="btn btn-primary">Editer</a>
                            <form action="{{ route('admin.publishers.destroy', $publisher) }}" method="post">
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
    {{ $publishers->links() }}
@endsection