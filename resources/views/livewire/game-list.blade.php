<div>
    <div class="flex gap-10 justify-stretch  w-full flex-wrap" style="margin-top: 115px;">
        @foreach ($games as $slug => $game)
            <x-game-card title="{{ $game['title'] }}" image="{{ $game['image'] ?? 'default-image-url.png' }}"
                route="{{ route('games.show', ['slug' => $slug]) }}" />
        @endforeach
    </div>
</div>
