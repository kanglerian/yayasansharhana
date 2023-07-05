<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-5 text-base leading-tight">
            <a href="{{ route('articles.index') }}"
                class="{{ request()->routeIs('articles.index') == 1 ? 'font-bold bg-gray-700 text-white' : 'border border-gray-700 text-gray-800' }} px-4 py-2 rounded-lg inline-block">Daftar
                Artikel</a>
            <a href="{{ route('articles.create') }}"
                class="{{ request()->routeIs('articles.create') == 1 ? 'font-bold bg-gray-700 text-white' : 'border border-gray-700 text-gray-800' }} px-4 py-2 rounded-lg inline-block">Buat
                artikel baru</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-5">
            <header class="space-y-1 px-4">
                <h2 class="text-lg font-medium text-gray-900">
                    Buat Artikel Baru
                </h2>
                <p class="text-sm text-gray-600">
                    Ekspresikan Kreativitasmu dengan Lebih Bebas!
                </p>
            </header>
            <div class="bg-white shadow sm:rounded-lg">
                <form method="post" action="{{ route('articles.store') }}" class="flex flex-col md:flex-row items-center gap-7 px-6 py-6">
                    @csrf
                    <div class="w-full md:w-2/3 order-2 md:order-none">
                        <section class="space-y-5">
                            <div>
                                <label class="block font-medium text-sm text-gray-700">
                                    Judul Artikel
                                </label>
                                <input id="title" name="title" type="text" class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ old('title') }}" required autofocus autocomplete="date" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <label class="block font-medium text-sm text-gray-700">
                                    Tanggal
                                </label>
                                <input id="date" name="date" type="date" class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ old('date') }}" required autofocus autocomplete="title" />
                                <x-input-error class="mt-2" :messages="$errors->get('date')" />
                            </div>

                            <div>
                                <label class="block font-medium text-sm text-gray-700">
                                    Deskripsi
                                </label>
                                <textarea name="description" id="description" cols="30" rows="5"
                                    class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    required autofocus></textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('date')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Publish</button>
                            </div>
                        </section>
                    </div>
                    <div class="w-full md:w-1/3 space-y-2 order-1 md:order-none">
                        <div class="w-full h-52 bg-red-500 rounded-lg"></div>
                        <input type="file" name="cover" id="cover" class="mt-1 block w-full text-sm" required>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
