@extends('layout')
@section('title', $book->title)
@section('content')
    <p class="bg-warning p-1 fs-2">Book List</p>
    <p>Title: {{ $book->title }}</p>
    <p>Author: {{ $book->detail->author }}</p>
    <p>Publisher: {{ $book->detail->publisher }}</p>
    <p>Year: {{ $book->detail->year }}</p>
    <p>Description: </p>
    <p>{{ $book->detail->description }}</p>
@endsection
