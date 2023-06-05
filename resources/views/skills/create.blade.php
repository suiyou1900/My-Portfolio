<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Store New Skill') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white shadow-md rounded-md">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
	  <form method="POST" action="{{ route('skills.store') }}" class='p-4' enctype='multipart/form-data'>
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="image" :value="__('Image')" />

            <x-text-input id="image" class="block mt-1 w-full"
                            type="file"
                            name="image" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ml-3">
                {{ __('保存する') }}
            </x-primary-button>
        </div>
    </form>
            </div>
        </div>
    </div>
</x-app-layout>