<?php

namespace App\Http\Controllers;

use App\Models\MsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Js;

class TheMovieController extends Controller
{
    public function getMovie()
    {
        $movie = Http::get('https://api.themoviedb.org/3/movie/550?api_key=e0002570829d1812033cca14a904ae57');
        $menus = MsCategory::get();
        return view('welcome', [
            'movie' => $movie,
            'menus' => $menus
        ]);
    }
    public function nowPlaying()
    {
        $menus = MsCategory::get();
        $playing = Http::get('https://api.themoviedb.org/3/movie/550?api_key=e0002570829d1812033cca14a904ae57');
        return view('nowplaying', [
            'playing' => json_decode($playing),
            'menus' => $menus
        ]);
    }
    public function popular()
    {

        $playing = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=e0002570829d1812033cca14a904ae57&language=en-US');
        $menus = MsCategory::get();

        return view('popular', [
            'playing' => json_decode($playing),
            'menus' => $menus
        ]);
    }
    public function toprated()
    {
        $playing = Http::get('https://api.themoviedb.org/3/movie/top_rated?api_key=e0002570829d1812033cca14a904ae57');
        $menus = MsCategory::get();

        return view('toprated', [
            'playing' => json_decode($playing),
            'menus' => $menus
        ]);
    }
    public function upcoming()
    {
        $playing = Http::get('https://api.themoviedb.org/3/movie/upcoming?api_key=e0002570829d1812033cca14a904ae57&language=en-US');
        $menus = MsCategory::get();

        return view('upcoming', [
            'playing' => json_decode($playing),
            'menus' => $menus
        ]);
    }
    public function details($id)
    {
        $playing = Http::get("https://api.themoviedb.org/3/movie/{$id}?api_key=e0002570829d1812033cca14a904ae57&language=en-US");

        return view('detail', [
            'playing' => json_decode($playing)
        ]);
    }
    public function create(Request $request)
    {
        $category = new MsCategory;

        $category->name = $request->name;
        $category->action = $request->action;
        $category->save();

        return redirect()->back();
    }
    public function update()
    {
        # co
    }
    public function delete()
    {
    }
}
 // dd(json_decode($movie));