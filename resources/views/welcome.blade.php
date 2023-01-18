@extends('layouts.app')


@section('main')
    <h1>All Movies</h1>
    @foreach ($all_movies as $elem)
        <h4>{{ $elem->title }}</h4>
    @endforeach
@endsection
