@props(['skills','projects'])
<div class="container mx-auto">
<section class='grid gap-y-12 h-full mt-8 md:grid-cols-2 md:gap-4 lg:grid-cols-3 lg:gap-8'>
	@foreach ($projects as $project )
		<x-frontend.project :project='$project'></x-frontend.project>
	@endforeach
</section>	
</div>
