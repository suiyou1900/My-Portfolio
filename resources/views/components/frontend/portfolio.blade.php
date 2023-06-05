@props(['skills','projects'])
<section id='portfolio' class='section bg-light-primary dark:bg-dark-primary'>
	<div class='container mx-auto'>
		<div class='flex flex-col items-center text-center'>
			<h2 class='section-title'>My Latest Work</h2>
			<p class='subtitle'>
			私の最近の制作物です。
			</p>
		</div>

	</div>
	<x-frontend.projects :skills='$skills' :projects='$projects'></x-frontend.projects>
</section>