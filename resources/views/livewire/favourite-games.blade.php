@extends('layouts.app')

@section('title', 'Favourite Games')

@section('content')
    @livewire('game-list', ['games' => $games])
@endsection
