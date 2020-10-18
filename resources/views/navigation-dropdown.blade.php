<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">

                        <svg enable-background="new 0 0 256 256" height="512" viewBox="0 0 256 256" width="512"
                             class="block h-9 w-auto"
                             xmlns="http://www.w3.org/2000/svg">
                            <g id="Layer_1"><g><g><g><path d="m250.528 195.135h-245.056c-1.641 0-2.972 1.331-2.972 2.972 0 8.26 6.696 17.13 14.956 17.13h221.087c8.26 0 14.956-8.869 14.956-17.13.001-1.641-1.33-2.972-2.971-2.972z" fill="#edf4fc"/></g></g><g><g><path d="m158.19 204.371h-60.38c-4.03 0-7.297-3.267-7.297-7.297v-1.939h74.974v1.939c0 4.03-3.267 7.297-7.297 7.297z" fill="#c7d7e5"/></g></g><g><g><path d="m225.663 41.841h-195.326c-4.553 0-8.279 3.725-8.279 8.279v136.737c0 4.553 3.725 8.279 8.279 8.279h195.325c4.553 0 8.279-3.725 8.279-8.279v-136.738c0-4.553-3.725-8.278-8.278-8.278z" fill="#3a70bf"/></g></g><g><g><path d="m228.135 53.793h-200.27c-3.194 0-5.806 2.613-5.806 5.806v117.084c0 3.194 2.613 5.806 5.806 5.806h200.27c3.194 0 5.806-2.613 5.806-5.806v-117.084c0-3.193-2.612-5.806-5.806-5.806z" fill="#edf4fc"/></g></g><g><g><path d="m22.059 170.538v6.146c0 3.194 2.613 5.806 5.806 5.806h200.27c3.194 0 5.806-2.613 5.806-5.806v-6.146z" fill="#5290db"/></g></g><g><g><path d="m41.617 170.538h-19.558v6.146c0 3.194 2.613 5.806 5.806 5.806h13.752z" fill="#fcdd86"/></g></g><g><g><g><path d="m145.629 140.077c-1.659-2.208-1.213-5.342.994-7.001l26.002-19.537-26.002-19.537c-2.208-1.659-2.653-4.793-.994-7.001s4.793-2.653 7.001-.994l31.323 23.535c2.663 2.002 2.658 5.997 0 7.995l-31.323 23.535c-2.204 1.655-5.338 1.217-7.001-.995z" fill="#70d6f9"/></g></g></g><g><g><g><path d="m103.37 141.071-31.322-23.535c-2.663-2.002-2.658-5.997 0-7.995l31.322-23.535c2.208-1.658 5.342-1.213 7.001.994s1.214 5.342-.994 7.001l-26.002 19.537 26.002 19.537c2.208 1.659 2.653 4.793.994 7.001s-4.793 2.654-7.001.995z" fill="#70d6f9"/></g></g></g><g><g><g><path d="m114.844 149.888c-2.603-.922-3.966-3.779-3.043-6.382l22.409-63.272c.921-2.603 3.778-3.966 6.382-3.043 2.603.922 3.966 3.779 3.043 6.382l-22.409 63.272c-.921 2.603-3.78 3.965-6.382 3.043z" fill="#70d6f9"/></g></g></g><g><g><path d="m238.543 217.737h-221.086c-9.992 0-17.457-10.364-17.457-19.63 0-3.018 2.455-5.472 5.472-5.472h245.056c3.018 0 5.472 2.455 5.472 5.472 0 9.266-7.465 19.63-17.457 19.63zm-233.071-20.102c-.26 0-.472.212-.472.472 0 6.766 5.441 14.63 12.457 14.63h221.087c7.015 0 12.457-7.864 12.457-14.63 0-.26-.212-.472-.472-.472z"/></g></g><g><g><path d="m107.705 234.192c-4.498-.838-8.043-4.31-8.898-8.716-.043-.221-.352-.221-.395 0-.855 4.406-4.4 7.879-8.898 8.716-.226.042-.226.345 0 .387 4.498.838 8.043 4.31 8.898 8.717.043.221.352.221.395 0 .855-4.406 4.4-7.879 8.898-8.717.226-.042.226-.345 0-.387z" fill="#f5c84c"/></g></g><g><g><path d="m129.941 18.026h-2.33v-2.33c0-1.744-1.413-3.157-3.157-3.157s-3.157 1.413-3.157 3.157v2.33h-2.329c-1.744 0-3.157 1.413-3.157 3.157s1.413 3.157 3.157 3.157h2.329v2.33c0 1.744 1.413 3.157 3.157 3.157s3.157-1.413 3.157-3.157v-2.33h2.33c1.744 0 3.157-1.413 3.157-3.157s-1.413-3.157-3.157-3.157z" fill="#70d6f9"/></g></g><g><g><circle cx="154.662" cy="15.916" fill="#87d147" r="3.377"/></g></g><g><g><circle cx="72.662" cy="227.916" fill="#fc657e" r="3.377"/></g></g><g><g><circle cx="246.662" cy="141.916" fill="#f5c84c" r="3.377"/></g></g><g><g><path d="m158.19 206.871h-60.38c-5.402 0-9.797-4.395-9.797-9.797v-1.354c0-1.381 1.119-2.5 2.5-2.5s2.5 1.119 2.5 2.5v1.354c0 2.645 2.152 4.797 4.797 4.797h60.38c2.645 0 4.797-2.152 4.797-4.797v-1.356c0-1.381 1.119-2.5 2.5-2.5s2.5 1.119 2.5 2.5v1.356c0 5.402-4.395 9.797-9.797 9.797z"/></g></g><g><g><path d="m225.663 197.635c-1.381 0-2.5-1.119-2.5-2.5s1.119-2.5 2.5-2.5c3.187 0 5.779-2.592 5.779-5.779v-136.736c0-3.187-2.592-5.779-5.779-5.779h-195.326c-3.187 0-5.779 2.592-5.779 5.779v136.736c0 3.187 2.592 5.779 5.779 5.779 1.381 0 2.5 1.119 2.5 2.5s-1.119 2.5-2.5 2.5c-5.943 0-10.779-4.835-10.779-10.779v-136.736c0-5.943 4.835-10.779 10.779-10.779h195.325c5.943 0 10.779 4.835 10.779 10.779v136.736c0 5.943-4.835 10.779-10.778 10.779z"/></g></g><g><g><path d="m233.933 61.83c-1.328 0-2.434-1.044-2.496-2.384-.08-1.738-1.562-3.152-3.302-3.152h-200.27c-1.741 0-3.191 1.361-3.3 3.099-.086 1.378-1.28 2.424-2.652 2.338-1.378-.086-2.425-1.274-2.338-2.652.274-4.365 3.916-7.785 8.29-7.785h200.271c4.447 0 8.092 3.479 8.297 7.921.063 1.379-1.003 2.549-2.382 2.613-.04.001-.079.002-.118.002z"/></g></g><g><g><path d="m233.042 173.038h-210.417c-1.381 0-2.5-1.119-2.5-2.5s1.119-2.5 2.5-2.5h210.417c1.381 0 2.5 1.119 2.5 2.5s-1.119 2.5-2.5 2.5z"/></g></g><g><g><path d="m228.135 184.99h-200.27c-4.276 0-7.828-3.208-8.263-7.46-.141-1.374.859-2.601 2.232-2.741 1.372-.149 2.601.859 2.741 2.232.17 1.665 1.615 2.969 3.289 2.969h200.271c1.693 0 3.14-1.321 3.293-3.007.125-1.375 1.342-2.387 2.715-2.264 1.375.125 2.389 1.34 2.264 2.715-.384 4.237-4.017 7.556-8.272 7.556z"/></g></g><g><g><path d="m41.617 184.438c-1.381 0-2.5-1.119-2.5-2.5v-11c0-1.381 1.119-2.5 2.5-2.5s2.5 1.119 2.5 2.5v11c0 1.381-1.119 2.5-2.5 2.5z"/></g></g><g><g><g><path d="m149.636 144.57c-2.28 0-4.533-1.033-6.005-2.992-2.484-3.306-1.815-8.017 1.491-10.501l23.343-17.539-23.344-17.538c-3.306-2.485-3.975-7.196-1.491-10.501 1.203-1.602 2.958-2.639 4.942-2.92 1.983-.28 3.958.226 5.56 1.43l31.323 23.535c1.902 1.43 2.993 3.616 2.993 5.996 0 2.381-1.091 4.566-2.993 5.996l-31.323 23.535c-1.347 1.011-2.928 1.499-4.496 1.499zm-2.009-5.995c.828 1.102 2.398 1.326 3.5.498l31.323-23.535c.633-.476.997-1.205.997-2 0-.793-.364-1.522-.998-1.999l-31.322-23.534c-.533-.401-1.188-.571-1.853-.477-.661.094-1.246.44-1.647.974-.828 1.102-.605 2.672.497 3.501l26.002 19.537c.628.472.998 1.212.998 1.999s-.37 1.526-.998 1.999l-26.002 19.537c-1.101.827-1.324 2.398-.497 3.5z"/></g></g></g><g><g><g><path d="m106.357 144.575c-1.613 0-3.176-.519-4.489-1.505l-31.322-23.535c-1.902-1.43-2.993-3.616-2.993-5.996 0-2.381 1.091-4.566 2.993-5.996l31.323-23.535c3.307-2.483 8.018-1.815 10.501 1.491 2.484 3.306 1.815 8.017-1.491 10.501l-23.342 17.539 23.342 17.539c3.306 2.484 3.975 7.195 1.491 10.501-1.203 1.601-2.958 2.638-4.941 2.92-.359.05-.717.076-1.072.076zm.013-57.07c-.523 0-1.05.163-1.499.5l-31.322 23.535c-.633.476-.997 1.205-.997 2 0 .793.364 1.522.998 1.999l31.322 23.534c.534.401 1.19.572 1.853.476.661-.094 1.246-.439 1.647-.973.828-1.102.605-2.673-.498-3.501l-26.002-19.537c-.628-.472-.998-1.212-.998-1.999s.37-1.526.998-1.999l26.002-19.537c1.103-.828 1.325-2.399.498-3.5-.491-.653-1.242-.998-2.002-.998z"/></g></g></g><g><g><g><path d="m116.52 152.679c-.844 0-1.691-.145-2.511-.435-1.888-.669-3.403-2.033-4.265-3.841-.863-1.808-.969-3.844-.3-5.732l22.409-63.272c.668-1.888 2.032-3.403 3.84-4.266 1.81-.863 3.846-.969 5.733-.3 1.888.668 3.403 2.033 4.265 3.841.863 1.808.969 3.844.3 5.732l-22.409 63.272c-.668 1.889-2.033 3.404-3.841 4.266-1.023.489-2.12.735-3.221.735zm22.4-73.278c-.367 0-.732.082-1.073.245-.603.288-1.057.792-1.28 1.422l-22.409 63.272c-.223.63-.188 1.309.1 1.911.288.603.792 1.057 1.422 1.28h.001c.629.223 1.307.187 1.91-.1s1.058-.792 1.281-1.422l22.409-63.272c.223-.63.188-1.309-.1-1.911-.288-.603-.792-1.057-1.422-1.28-.275-.097-.557-.145-.839-.145z"/></g></g></g></g></g></svg>
{{--                        <x-jet-application-mark class="block h-9 w-auto" />--}}
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('clients') }}" :active="request()->routeIs('clients')">
                        {{ __('Clients') }}
                    </x-jet-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                        @else
                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        @endif
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>

                        <!-- Team Management -->
                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Team') }}
                            </div>

                            <!-- Team Settings -->
                            <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                {{ __('Team Settings') }}
                            </x-jet-dropdown-link>

                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                </x-jet-dropdown-link>
                            @endcan

                            <div class="border-t border-gray-100"></div>

                            <!-- Team Switcher -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Switch Teams') }}
                            </div>

                            @foreach (Auth::user()->allTeams() as $team)
                                <x-jet-switchable-team :team="$team" />
                            @endforeach

                            <div class="border-t border-gray-100"></div>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </div>

                <div class="ml-3">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-jet-responsive-nav-link>

                    <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                        {{ __('Create New Team') }}
                    </x-jet-responsive-nav-link>

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>