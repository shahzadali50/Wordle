<?php

namespace App\Http\Controllers;

use App\Models\GameContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Response;

class GameContentController extends Controller
{
    public function image_upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');
            $url = asset(Storage::url($path));
            return response()->json(['success' => true, 'url' => $url]);
        }
        return response()->json(['success' => false, 'message' => 'Image upload failed'], 500);
    }
    public function index()
    {

        $games = config('games');

        return view('admin.game-content.create', compact('games'));
    }
    public function insert(Request $request)

    {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $description = $request->input('description');
        $slug = Str::slug(Str::lower($validatedData['title']), '-');

        // Use updateOrCreate to either update an existing record or create a new one
        $gameContent = GameContent::updateOrCreate(
            ['title' => $validatedData['title']], // Attributes to check
            [
                'description' => $description,
                'slug' => $slug,
            ] // Values to update or insert
        );

        return redirect()->route('admin.game.create')->with('success', 'Game Content saved successfully.');
    }
    public function getDescription(Request $request)
    {
        $title = $request->input('title');
        $gameContent = GameContent::where('title', $title)->first();

        if ($gameContent) {
            return Response::json(['description' => $gameContent->description]);
        } else {
            return Response::json(['description' => null]);
        }
    }
}
