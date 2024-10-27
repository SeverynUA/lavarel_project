@extends('layouts.app')

@section('title', 'Create Person')

@section('content')
    <h1>Додати нову особу</h1>
    <form action="{{ route('people.store') }}" method="POST">
        @csrf
        <label for="name">Ім'я:</label>
        <input type="text" name="name" required>
        <label for="age">Вік:</label>
        <input type="number" name="age" required>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Зберегти</button>
    </form>
@endsection
