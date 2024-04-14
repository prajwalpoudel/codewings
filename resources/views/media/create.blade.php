<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Import JSON') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                {!! Form::open(['route' => 'media.store', 'method' => 'post', 'files' => true]) !!}
                <!-- File Upload-->
                    <div>
                        {!! Form::label('name', 'File Name') !!}
                        {!! Form::text('name', null, ['class' => 'mt-2 w-full rounded-md shadow-sm']) !!}
                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                    </div>
                    <div class="mt-4">
                        {!! Form::label('file', 'File') !!}
                        {!! Form::file('file', ['class' => 'mt-2 w-full rounded-md']) !!}
                        <x-input-error :messages="$errors->get('file')" class="mt-2"/>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button>
                            {{ __('Submit') }}
                        </x-primary-button>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
