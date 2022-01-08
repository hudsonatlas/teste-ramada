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
				@if (Route::has('login'))
					<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
						@auth
						<form method="POST" action="{{ route('logout') }}">
							@csrf

							<button type="submit" class="text-gray-200 hover:text-gray-900">
								{{ __('Logout') }}
							</button>
						</form>
						@else
							<a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

							@if (Route::has('register'))
								<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
							@endif
						@endauth
					</div>
				@endif
			</div>
		</div>
	</div>
</nav>