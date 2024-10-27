@extends('layouts.app')

@section('title', 'Edit Person')

@section('content')
    <h1>Редагувати інформацію про {{ $person->name }}</h1>
    <form action="{{ route('people.update', $person->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Ім'я:</label>
        <input type="text" name="name" value="{{ $person->name }}" required>
        <label for="age">Вік:</label>
        <input type="number" name="age" value="{{ $person->age }}" required>
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $person->email }}" required>
        <button type="submit">Зберегти</button>
    </form>
@endsection
