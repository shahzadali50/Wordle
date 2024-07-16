@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="flex flex-col md:flex-row items-start gap-5 flex-grow relative w-full">
    <div class="w-full md:w-3/4">
        <a href="{{ url('/') }}" class="absolute cursor-pointer top-2 left-2 text-white flex items-center text-lg gap-2">
            <svg fill="red" height="20" width="20" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
            </svg>
            Close
        </a>
        <iframe class="rounded-lg border-2 w-full" style="height: 750px; background: #fff; overflow: auto;" id="iframehtml5" src="{{ $gameUrl }}" frameborder="0" scrolling="yes" allowfullscreen="yes">
        </iframe>
        <div class="bg-slate-200 px-10 py-10 border rounded-lg mt-8">
            <p class="text-3xl text-start font-bold">{{ $title }}</p>
            <p class="text-lg">{!! $description !!}</p>
        </div>
    </div>
    <div class="w-full md:w-1/4 min-h-screen px-5 py-5  rounded-lg flex flex-grow">
        <p class="text-white">This section will be used for ads</p>
    </div>
</div>

<div class="mt-20">
    @livewire('game-list')
</div>
@endsection
