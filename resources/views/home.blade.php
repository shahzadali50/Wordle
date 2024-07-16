@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="flex mb-20 flex-col md:flex-row items-start gap-5 flex-grow relative w-full">
    <div class="w-full md:w-3/4">
        <a href="{{ url('/') }}"
            class="absolute cursor-pointer top-2 left-2 text-white flex items-center text-lg gap-2">
            <svg fill="red" height="20" width="20" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path
                    d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
            </svg>
            Close
        </a>
        <iframe class="rounded-lg border-2 w-full" style="height: 750px; background: #fff; overflow: auto;"
            id="iframehtml5" src="https://wordlewebsite.com/game/wordle.embed" frameborder="0" scrolling="yes"
            allowfullscreen="yes">
        </iframe>

    </div>

    <div class="w-full md:w-1/4 min-h-screen px-5 py-5  rounded-lg flex flex-grow">
        <p class="text-white">This section will be used for ads</p>
    </div>
</div>
@livewire('game-list', ['games' => config('games')])
<div>
    <div class="bg-slate-200 px-10 py-10 border rounded-lg mt-8">
        <p class="text-3xl text-start font-bold">Wordle Website</p>
        <p class="text-lg">Wordle Website - is a place to play the Wordle games that have consistently appeared on
            informal networks and sites. This is a fundamental game with many lines of letters like other word puzzles.
            You have 6 lines of letters to figure out the right expression of the day. If you fill in an English word
            and the shade of the line changes to green, it implies you are correct.
            <br />
            <br />Conversely, if the shading is
            yellow, this implies the expected word has similar letters but is coordinated in another request.

            After each season of speculating, the shades of the tiles steadily change to show how you are near the right
            response. The game is almost similar to certain games that expect players to eliminate the given numbers and
            discover the last key.<br />
            <br />

            The game's connection point incorporates 30 separate squares above, coordinated like a table with 6 lines
            and 5 sections and tiles of various letters beneath. You can enter 6 words utilizing the given letters. As
            such, you can utilize the initial 5 words to track down hints about their letters and the place of the
            letters. Then, at that point, players ultimately triumph over the last opportunity to figure out the final
            word, and its shading changes to green.
            <br />
            <br />
            Wordle website is a good website to use when you are looking to play Wordle, as it can help relax and
            challenge your limit. It's also very fun and engaging, so you'll want to play Wordle often and share your
            results with your friends!
        </p>
        <p class="text-3xl text-start font-bold mt-5 mb-3">Similar Word Game To Wordle
        </p>
        <p class="text-2xl text-start font-semibold text-[#020028]">Dordle
        </p>
        <p class="text-lg">This is a game that you can play with your friends and family. It’s called Dordle. This
            simple but highly addictive game is all about strategy, luck, and planning. You need to have a lot of
            patience to play this one as there are so many phases and challenges involved in the gameplay. But trust us,
            once you get the hang of it, it will be hard not to spend hours upon hours just playing this one single
            game! What we love about this is that there are no complicated rules or anything like that. So anyone can
            play, regardless of their gaming skills!
        </p>
        <p class="text-2xl text-start font-semibold text-[#020028] mt-3">Sedecordle
        </p>
        <p class="text-lg">Phrazle is a new, addictive, and challenging word game. You can play it with your friends or
            family members, at any time and place. It requires no special skills to play, just concentration and fast
            thinking. Each player sees the same board filled with letters in different colors, but only one player can
            see the right words at the same time.


        </p>

        <p class="text-2xl text-start font-semibold text-[#020028] mt-3">Sedecordle
        </p>
        <p class="text-lg">What is Sedecordle? This is a word puzzle game, the player has to find the secret word. You
            could say this game is the mightiest Wordle alternative. While the gamer's job on Wordle is only to think of
            a word with 5 considerable letters as well as is enabled to guess 6 times, Sedecordle on the other hand,
            tasks you with finding 16 strange 5-letter words. Players locate that 16 mystical words are not easy so the
            video game is one of the most challenging word puzzle video games currently. When you type in each word as
            well as press Enter, the letters in the right setting and also in the solution will certainly be
            environment-friendly; letters in the solution however in the incorrect area will certainly be displayed in
            yellow as well as the wrong letters will certainly be gray. As a result, as the game progresses, you will be
            prohibited from using the available letters.

        </p>

        <p class="text-2xl text-start font-semibold text-[#020028] mt-3">Phrazle
        </p>
        <p class="text-lg">Phrazle is a new, addictive, and challenging word game. You can play it with your friends or
            family members, at any time and place. It requires no special skills to play, just concentration and fast
            thinking. Each player sees the same board filled with letters in different colors, but only one player can
            see the right words at the same time.


        </p>
        <p class="text-2xl italic text-start font-semibold text-[#020028] mt-3">If you are looking for more brain
            teasers than wordle, try exploring these games.


        </p>
    </div>
</div>
@endsection
