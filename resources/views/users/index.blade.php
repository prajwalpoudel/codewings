<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Users') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-table>
                        @slot('header')
                            <th>Name</th>
                            <th>Email</th>
                            <th>Provider</th>
                            <th>Provider Id</th>
                        @endslot
                        @forelse($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->provider }}</td>
                                <td>{{ $user->provider_id }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No Users Found</td>
                            </tr>
                        @endforelse

                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
