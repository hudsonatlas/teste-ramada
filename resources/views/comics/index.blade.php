@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="alert alert-success flex flex-row-reverse p-1">
        <a href=" {{ route('comics.create') }}" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 border border-gray-700 rounded" >Criar Quadrinhos</a>
    </div>

    <div class="md:px-32 py-8 w-full">
        <div class="shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th>id</th>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>EAN</th>
                        <th>Preços</th>
                        <th>Data</th>
                        <th width="280px">Criadores</th>
                    </tr>
                </thead>
                    @foreach ($comics as $comic)
                    <tbody class="text-gray-700">
                        <tr>                             
                            <td class="text-left py-3 px-4">{{ $comic->id }}</td>
                            <td class="text-left py-3 px-4">{{ $comic->title }}</td>
                            <td class="text-left py-3 px-4">{{ $comic->description }}</td>
                            <td class="text-left py-3 px-4">{{ $comic->ean }}</td>
                            <td class="text-left py-3 px-4">{{ $comic->price }}</td>
                            <td class="text-left py-3 px-4">{{ date_format($comic->created_at, 'j M Y') }}</td>
                            <td class="text-left py-3 px-4">
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    <a href="{{ route('comics.show', $comic->id) }}" title="show">
                                        <i class="fas fa-eye text-success  fa-lg"></i>
                                    </a>

                                    <a href="{{ route('comics.edit', $comic->id) }}">
                                        <i class="fas fa-edit  fa-lg"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                        <i class="fas fa-trash fa-lg text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
            </table>

            {!! $comics->links() !!}

        @endsection

