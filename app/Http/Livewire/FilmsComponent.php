<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\{Format, Movie};
use Intervention\Image\Facades\Image;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class FilmsComponent extends Component
{

    use LivewireAlert;
    use WithFileUploads;
    public $movie = [], $rules = [];
    public $photo, $identifier;
    protected function rules()
    {
        $rules = [
            'movie.name' => 'required|string',
            'movie.synopsis' => 'required|string',
            'movie.year' => 'required|string|max:4',
            'movie.duration' => 'required|max:3',
            'movie.price' => 'required|integer',
            'movie.format_id' => 'required|integer',
            'photo' => 'required|image|mimes:jpeg,png|max:2048'
        ];

        return $rules;
    }

    protected $messages = [
        'movie.name.required' => 'Campo nombre es requerido.',
        'movie.synopsis.required' => 'Campo sipnosis es requerido.',
        'movie.year.required' => 'Campo año es requerido.',
        'movie.duration.required' => 'Campo duración es requerido.',
        'movie.price.required' => 'Campo precio es requerido.',
        'movie.format_id.required' => 'Debes seleccionar un formato.',
        'photo.required' => 'Debes seleccionar una portada.',
        'photo.mimes' => 'Formato incorrecto debe ser JPG o PNG',
    ];

    public function mount()
    {
        $this->identifier = rand();
    }
    public function render()
    {
        $formats = Format::where('state', true)->get();
        return view('livewire.films-component', compact('formats'));
    }

    public function submit()
    {
        $this->resetValidation();

        $this->validate();
        $this->resize();

        $movie = array_map('trim', $this->movie);

        try {
            Movie::create($movie);

            $this->msg('success','Registro exitoso', 'Pelicula creada correctamente');

            $this->reset();

            $this->identifier = rand();

        } catch (\Throwable $th) {
            echo 'Error al crear la película: ' . $th->getMessage();
        }

    }

    public function resize()
    {
        $imagePath = $this->photo->store('frontPage', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"));
        $image->resize(300, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $image->save();

        $this->movie["image"] = $imagePath;
    }

    public function msg($type,$title,$caption)
    {
        $this->alert($type,$title, [
            'position' => 'center',
            'timer' => 3000,
            'toast' => false,
            'text' => $caption,
            'showConfirmButton' => true,
            'onConfirmed' => '',
        ]);
    }
}
