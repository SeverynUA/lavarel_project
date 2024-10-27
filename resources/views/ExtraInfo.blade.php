@extends('layouts.app')

@section('title', 'Extra Info')

@section('content')
    <h1>ExtraInfo - Інформація про мене</h1>
    <p>Додаткова інформація про мої проєкти...</p>
    <a href="{{ route('MyProfile') }}" class="text-blue-500 hover:underline">Перейти на MyProfile</a>
    <a href="{{ route('dashboard') }}" class="text-blue-500 hover:underline">Перейти на головну</a>
@endsection