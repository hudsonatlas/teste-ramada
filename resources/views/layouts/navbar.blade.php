<nav class="bg-gray-800">
	<div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
		<div class="relative flex items-center justify-between h-16">
			<div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
				<button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
					<span class="sr-only">Open main menu</span>
				</button>
			</div>
			<div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-between">
				<div class="flex-shrink-0 flex items-center">
					<a href="{{ route('comics.index') }}" class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Hudson Teste Ramada</a>
				</div>

				<div class="flex border-2 rounded">
					<form action="{{ route('comics.search') }}" method="post" class="flex items-center justify-center">
						@csrf
						<input name="search" type="text" class="px-4 py-2 w-80" placeholder="Pesquisa">
						<button class="flex items-center justify-center px-4 border-l" type="submit">
							<svg class="w-6 h-6 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
							</svg>
						</button>
					</form>
				</div>

			</div>
			<div class="ml-3 relative">
				<div>
					<button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
						<span class="sr-only">Open user menu</span>
						<img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
					</button>
				</div>
			</div>
		</div>
	</div>
</nav>