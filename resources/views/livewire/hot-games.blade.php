@extends('layouts.app')

@section('title', 'Hot Games')

@section('content')
    @livewire('game-list', ['games' => $games])
@endsection
