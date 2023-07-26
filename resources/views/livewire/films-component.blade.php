<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-4 py-5">


                    {{-- wire:target="photo" --}}
                    <x-form-section submit="submit">
                        <x-slot name="title">
                            {{ __('Registrar pelicula') }}
                        </x-slot>
                        <x-slot name="description">
                            {{ __('Ingresa los datos requeridos(*)') }}`
                            <x-validation-errors class="mt-3 mb-4" />
                        </x-slot>
                        <x-slot name="form">
                            <div class="col-span-6 sm:col-span-3 mx-auto">
                                <div wire:loading wire:target="photo" class="bg-blue-500 text-sm text-white rounded-md p-4"
                                role="alert">
                                <span class="font-bold">Imagen</span> Cargando imagen, espere por favor.
                            </div>
                            @if ($photo)
                                <img class="custom_image" src="{{ $photo->temporaryUrl() }}" alt="front page">
                            @else
                                <img class="custom_image shadow-xl" src="{{ url('../image/image.jpg') }}" alt="front page">
                            @endif
                            <input type="file"
                                class="block w-full text-sm text-gray-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-md file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-blue-500 file:text-white
                                        hover:file:bg-blue-600
                                        mt-2"
                                wire:model="photo" id="{{ $identifier }}">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <x-label for="name" value="{{ __('Nombre*') }}" />
                                <x-input-form id="name" type="text" class="mt-1 block w-full" autocomplete="name" placeholder="Nombre pelicula" wire:model="movie.name"/>
                                <x-input-error for="name" class="mt-2" />

                                <x-label for="name" value="{{ __('Sipnosis*') }}" />
                                <x-input-form id="name" type="text" class="mt-1 block w-full" autocomplete="name" placeholder="Sipnosis" wire:model="movie.synopsis"/>
                                <x-input-error for="name" class="mt-2" />

                                <x-label for="name" value="{{ __('Año de estreno*') }}" />
                                <x-input-form id="anio" type="number" class="mt-1 block w-full" min="1895" max="2023" step="1" autocomplete="name" placeholder="Año" wire:model="movie.year"/>
                                <x-input-error for="name" class="mt-2" />

                                <x-label for="name" value="{{ __('Duración*') }}" />
                                <x-input-form id="duration" type="text" pattern="[0-9]{3}" class="mt-1 block w-full" autocomplete="name" placeholder="Duración en minutos" wire:model="movie.duration"/>
                                <x-input-error for="name" class="mt-2" />

                                <x-label for="name" value="{{ __('Precio*') }}" />
                                <x-input-form id="price" type="text" class="mt-1 block w-full" autocomplete="name" placeholder="Indicar valor" wire:model="movie.price"/>
                                <x-input-error for="name" class="mt-2" />

                                <x-label for="city" value="{{ __('Formato*') }}" />
                                <x-input-select wire:model="movie.format_id" value="{{ __('Formato') }}" class="mt-1 block w-full">
                                    <x-slot name="options">
                                        @if(isset($formats) && count($formats) > 0)
                                            @foreach ($formats as $format)
                                                <option value="{{ $format->id }}">
                                                    {{ $format->name }}
                                                </option>
                                            @endforeach
                                        @else
                                            <option disabled="disabled" value="">
                                                {{ __('No hay registro') }}
                                            </option>
                                        @endif
                                    </x-slot>
                                </x-input-select>
                                <x-input-error for="city" class="mt-2" />
                            </div>
                            <div class="col-span-6 sm:col-span-6 text-right">
                                <x-button type="submit" wire:loading.attr="disabled" wire:target="photo">Crea Pelicula</x-button>
                            </div>
                        </x-slot>
                    </x-form-section>
                </div>
            </div>
        </div>
    </div>
</div>
