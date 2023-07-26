<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-4 py-5">
                    <div class="mb-2 flex items-center justify-between">
                        <div class="title">
                            <p class="text-white">Peliculas y juegos disponibles</p>
                            <h2 class="font-bold text-white text-4xl">Catalogo</h2>
                        </div>
                        <div class="filter">
                            <select class="py-3 px-4 pr-9 block w-full bg-white/30 rounded-full text-sm text-white focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                <option selected disabled>Selecciona un formato</option>
                                @foreach ($formats as $format)
                                    <option value="{{ $format->id }}">
                                        {{ $format->name}}
                                    </option>
                                @endforeach
                              </select>
                        </div>
                    </div>

                    <!-- Grid -->
                    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-10">
                        <!-- Card -->
                        @foreach ($films as $film)
                        <div class="group flex flex-col items-center">
                            <a class="w-max h-full border border-slate-800 hover:border-gray-200 hover:shadow-lg transition-all duration-300 rounded-xl p-2 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4]" href="{{ route('watchMovie', $film->id) }}">
                                <div class="aspect-w-16 aspect-h-11 overflow-hidden">
                                    <img class="w-[230px] h-[300px] mx-auto object-cover rounded-xl" src="{{Storage::url($film->image)}}" alt="Image Description">
                                </div>
                                <div class="p-2">
                                    <h3 class="text-xl font-semibold text-white dark:text-gray-300 dark:group-hover:text-white">
                                        {{$film->name}}
                                    </h3>
                                    <p class="mt-5 text-white dark:text-gray-400">
                                        {{$film->synopsis}}
                                    </p>
                                </div>
                                <div class="mt-auto flex items-center gap-x-1 p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 icon">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5" />
                                    </svg>
                                    <div>
                                        <h5 class="text-sm text-white dark:text-gray-200">
                                            {{$film->format->name}}
                                        </h5>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 icon">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div>
                                        <h5 class="text-sm text-white dark:text-gray-200">
                                            {{$film->price}}
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    {{ $films->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
