<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Movie;
class WatchMovieComponent extends Component
{
    public $movie_id;
    public function mount($movie)
    {
        $this->movie_id = intval($movie);
    }
    public function render()
    {
        $movie = Movie::where('id', $this->movie_id)->first();
        return view('livewire.watch-movie-component', compact('movie'));
    }
}
