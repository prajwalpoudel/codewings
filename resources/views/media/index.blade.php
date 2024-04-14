<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Media') }}
            </h2>

            <div class="flex justify-between">
                <a href="{{ route('media.create') }}">
                    <x-secondary-button>
                        Create
                    </x-secondary-button>
                </a>
            </div>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-table>
                        @slot('header')
                            <th>Name</th>
                            <th>Action</th>
                        @endslot
                        @forelse($medias as $media)
                            <tr>
                                <td>
                                    <a href="{{ \Illuminate\Support\Facades\Storage::url($media->file) }}" target="_blank" class="text-blue-700">{{ $media->name }}</a>
                                </td>
                                <td>
                                        <a href="{{ route('media.export', $media) }}">
                                            <x-secondary-button>
                                                Export
                                            </x-secondary-button>
                                        </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2">No Media Found</td>
                            </tr>
                            @endforelse
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
