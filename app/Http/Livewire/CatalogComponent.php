<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{Format, Movie};
class CatalogComponent extends Component
{
    private  $films, $formats = [];
    public $perPage = 6;
    public function mount()
    {
        $this->paginateFilms();
        $this->getFormats();
    }

    private  function paginateFilms()
    {
        $this->films = Movie::paginate($this->perPage);
    }

    private  function getFormats()
    {
        $this->formats = Format::where('state', true)->get();
    }
    public function render()
    {
        return view('livewire.catalog-component', [
            'films' => $this->films,
            'formats' => $this->formats
        ]);
    }

    public function getFilmsProperty()
    {
        return $this->films;
    }
    public function getFormatsProperty()
    {
        return $this->films;
    }
}
