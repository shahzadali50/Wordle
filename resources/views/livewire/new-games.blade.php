@extends('layouts.app')

@section('title', 'New Games')

@section('content')
    @livewire('game-list', ['games' => $games])
@endsection
