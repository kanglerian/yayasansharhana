<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-5 text-base leading-tight">
            <a href="{{ route('articles.index') }}" class="{{ request()->routeIs('articles.index') ? 'font-bold bg-gray-700 text-white ' : 'border border-gray-700 text-gray-800' }} px-4 py-2 rounded-lg inline-block">Daftar Artikel</a>
            <a href="{{ route('articles.create') }}" class="{{ request()->routeIs('articles.create') ? 'font-bold bg-gray-700 text-white ' : 'border border-gray-700 text-gray-800' }} px-4 py-2 rounded-lg inline-block">Buat artikel baru</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($articles as $no => $article)
                            <tr>
                                <td>{{ $no + 1 }} </td>
                                <td>{{ $article->title }}</td>
                                <td>Action</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">Artikel tidak ditemukan</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
