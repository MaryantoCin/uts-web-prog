@extends('layout')
@section('title', $current)
@section('content')
    <p class="bg-warning p-1 fs-2">{{ $current }}</p>
    <table class="table table-borderless table-hover">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr class="table-secondary">
                    <th>
                        <a class="text-decoration-none text-black"
                            href="{{ url('/book/' . $book->id) }}">{{ $book->title }}</a>
                    </th>
                    <td>{{ $book->detail->author }}</td>
                </tr>
            @empty
                <tr class="table-secondary">
                    <td class="bg-warning">
                        No data...
                    </td>
                    <td class="bg-warning">
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
