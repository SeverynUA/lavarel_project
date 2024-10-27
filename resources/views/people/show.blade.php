@extends('layouts.app')

@section('title', 'Person Details')

@section('content')
    <h1>{{ $person->name }}</h1>
    <p>Вік: {{ $person->age }}</p>
    <p>Email: {{ $person->email }}</p>
    <a href="{{ route('people.index') }}">Повернутись до списку</a>
@endsection
