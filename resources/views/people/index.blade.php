@extends('layouts.app')

@section('title', 'People List')

@section('content')
    <h1>Список людей</h1>
    <a href="{{ route('people.create') }}">Додати нову особу</a>
    <ul>
        @foreach($people as $person)
            <li>
                <a href="{{ route('people.show', $person->id) }}">{{ $person->name }}</a>
                <a href="{{ route('people.edit', $person->id) }}">Редагувати</a>
                <form action="{{ route('people.destroy', $person->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Видалити</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
