@extends('layouts.app')

@section('title', 'My Profile')

@section('content')
    <h1>MyProfile - Інформація про мене</h1>
    <p>Тут розміщена інформація про попередні проєкти...</p>
    <a href="{{ route('ExtraInfo') }}" class="text-blue-500 hover:underline">Перейти на ExtraInfo</a>
    <a href="{{ route('dashboard') }}" class="text-blue-500 hover:underline">Перейти на головну</a>
@endsection