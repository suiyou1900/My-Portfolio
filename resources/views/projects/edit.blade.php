<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white shadow-md rounded-md">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
	  <form method="POST" action="{{ route('projects.update',$project->id) }}" class='p-4' enctype='multipart/form-data'>
        @csrf
        @method('PUT')
        <label class="block mb-2 text-sm font-medium text-white-900">Select Skill</label>
        <select id="skill_id" name='skill_id' class="bg-gray-50 border border-gray-300 text-white-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        @foreach ($skills as $skill)
        <option value="{{$skill->id}}" @selected(old('skill_id',$project->skill_id) == $skill->id)>{{$skill->name}}
        @endforeach
        </select>
        <div class='mt-2'>
            <x-input-label for="name" :value="__('name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name',$project->name)"  />
        </div>

        <div class='mt-2'>
            <x-input-label for="url" :value="__('url')" />
            <x-text-input id="url" class="block mt-1 w-full" type="text" name="url" :value="old('url',$project->url)" />
        </div>

        <div class="mt-4">
            <x-input-label for="image" :value="__('image')" />

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