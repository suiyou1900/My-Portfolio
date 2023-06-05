<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Skills') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
	<div class='flex justify-end m-2 p-2'>
	<a href="{{route('skills.create')}}">	
	<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">データを作成する</button>
          </a>
	</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
	@forelse ($skills as $skill)
	<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$skill->name}}
                </th>
                <td class="px-6 py-4">
	                <img src="{{ asset('storage/'.$skill->image)}}" class='w-12 h-12'/>
                </td>
                <td class=" px-6 py-4 text-right">
                    <a href="{{route('skills.edit',$skill->id)}}" class="font-medium text-blue-600 mr-3 dark:text-blue-500 hover:underline">Edit</a>
                    <form method='POST' action="{{route('skills.destroy',$skill->id)}}">
                    @csrf
                    @method('DELETE')
                    <a href="{{route('skills.destroy',$skill->id)}}" 
                    onclick="event.preventDefault(); this.closest('form').submit();" 
                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                    </form>
                </td>
            </tr>
		
	@empty
	<tr>
		<td>
			<h2>No skills</h2>
		</td>
	</tr>
		
	@endforelse
        </tbody>
    </table>
</div>

        </div>
    </div>
</x-app-layout>