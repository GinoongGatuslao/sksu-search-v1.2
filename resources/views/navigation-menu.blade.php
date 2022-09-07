<div>
    <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex flex-col flex-1 min-h-0 bg-primary-300">
            <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
                <div class="flex items-center flex-shrink-0 px-4">
                    <a href="{{ route('dashboard') }}" class="">
                        <x-jet-application-mark class="block w-auto h-20" />
                    </a>
                </div>

                <nav x-data="{ open: false }" class="flex-1 px-2 mt-5 space-y-1" aria-label="Sidebar">
                    <!-- Primary Navigation Menu -->




                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        <svg class="flex-shrink-0 w-6 h-6 mr-3 text-primary-700" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Dashboard
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('daashboard')">
                        <svg class="flex-shrink-0 w-6 h-6 mr-3 text-primary-700" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        Teams
                    </x-jet-nav-link>

                </nav>
            </div>
            <div class="flex flex-shrink-0 p-4 border-t border-primary-600">
                <div class="flex-shrink-0 block w-full group">
                    <div class="flex items-center">
                        <div>
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <img class="inline-block rounded-full h-9 w-9"
                            src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" >
                            @else
                            <img class="inline-block rounded-full h-9 w-9"
                            src="https://images.unsplash.com/photo-1659124371713-f3b4931ccca4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="" >
                            
                            @endif
                        </div>
                        <div class="ml-3">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                    <p>
                                        <a href="{{ route('profile.show') }}" class="text-sm font-medium text-white">
                                            {{ Auth::user()->name }}
                                        </a>
                                    </p>
                                    <p>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();"
                                    class="text-xs font-medium text-indigo-200 group-hover:text-white">
                                    Log out
                                    </a>
                                    </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hidden">
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div class="relative z-40 md:hidden" role="dialog" aria-modal="true">

        <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

        <div class="fixed inset-0 z-40 flex">

            <div class="relative flex flex-col flex-1 w-full max-w-xs bg-indigo-700">

                <div class="absolute top-0 right-0 pt-2 -mr-12">
                    <button type="button"
                        class="flex items-center justify-center w-10 h-10 ml-1 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Close sidebar</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-4">
                        <img class="w-auto h-8"
                            src="https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg"
                            alt="Workflow">
                    </div>
                    <nav class="px-2 mt-5 space-y-1">
                        <!-- Current: "bg-indigo-800 text-white", Default: "text-white hover:bg-indigo-600 hover:bg-opacity-75" -->
                        <a href="#"
                            class="flex items-center px-2 py-2 text-base font-medium text-white bg-indigo-800 rounded-md group">
                            <!-- Heroicon name: outline/home -->
                            <svg class="flex-shrink-0 w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Dashboard
                        </a>

                        <a href="#"
                            class="flex items-center px-2 py-2 text-base font-medium text-white rounded-md hover:bg-indigo-600 hover:bg-opacity-75 group">
                            <!-- Heroicon name: outline/users -->
                            <svg class="flex-shrink-0 w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            Team
                        </a>

                        <a href="#"
                            class="flex items-center px-2 py-2 text-base font-medium text-white rounded-md hover:bg-indigo-600 hover:bg-opacity-75 group">
                            <!-- Heroicon name: outline/folder -->
                            <svg class="flex-shrink-0 w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                            Projects
                        </a>

                        <a href="#"
                            class="flex items-center px-2 py-2 text-base font-medium text-white rounded-md hover:bg-indigo-600 hover:bg-opacity-75 group">
                            <!-- Heroicon name: outline/calendar -->
                            <svg class="flex-shrink-0 w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Calendar
                        </a>

                        <a href="#"
                            class="flex items-center px-2 py-2 text-base font-medium text-white rounded-md hover:bg-indigo-600 hover:bg-opacity-75 group">
                            <!-- Heroicon name: outline/inbox -->
                            <svg class="flex-shrink-0 w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                            </svg>
                            Documents
                        </a>

                        <a href="#"
                            class="flex items-center px-2 py-2 text-base font-medium text-white rounded-md hover:bg-indigo-600 hover:bg-opacity-75 group">
                            <!-- Heroicon name: outline/chart-bar -->
                            <svg class="flex-shrink-0 w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            Reports
                        </a>
                    </nav>
                </div>
                <div class="flex flex-shrink-0 p-4 border-t border-indigo-800">
                    <a href="#" class="flex-shrink-0 block group">
                        <div class="flex items-center">
                            <div>
                                <img class="inline-block w-10 h-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </div>
                            <div class="ml-3">
                                <p class="text-base font-medium text-white">Tom Cook</p>
                                <p class="text-sm font-medium text-indigo-200 group-hover:text-white">View profile
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="flex-shrink-0 w-14" aria-hidden="true">
                <!-- Force sidebar to shrink to fit close icon -->
            </div>
        </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex flex-col flex-1 min-h-0 bg-indigo-700">
            <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
                <div class="flex items-center flex-shrink-0 px-4">
                    <img class="w-auto h-8"
                        src="https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg"
                        alt="Workflow">
                </div>
                <nav class="flex-1 px-2 mt-5 space-y-1">
                    <!-- Current: "bg-indigo-800 text-white", Default: "text-white hover:bg-indigo-600 hover:bg-opacity-75" -->
                    <a href="#"
                        class="flex items-center px-2 py-2 text-sm font-medium text-white bg-indigo-800 rounded-md group">
                        <!-- Heroicon name: outline/home -->
                        <svg class="flex-shrink-0 w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Dashboard
                    </a>

                    <a href="#"
                        class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600 hover:bg-opacity-75 group">
                        <!-- Heroicon name: outline/users -->
                        <svg class="flex-shrink-0 w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        Team
                    </a>

                    <a href="#"
                        class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600 hover:bg-opacity-75 group">
                        <!-- Heroicon name: outline/folder -->
                        <svg class="flex-shrink-0 w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                        </svg>
                        Projects
                    </a>

                    <a href="#"
                        class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600 hover:bg-opacity-75 group">
                        <!-- Heroicon name: outline/calendar -->
                        <svg class="flex-shrink-0 w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Calendar
                    </a>

                    <a href="#"
                        class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600 hover:bg-opacity-75 group">
                        <!-- Heroicon name: outline/inbox -->
                        <svg class="flex-shrink-0 w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                        </svg>
                        Documents
                    </a>

                    <a href="#"
                        class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600 hover:bg-opacity-75 group">
                        <!-- Heroicon name: outline/chart-bar -->
                        <svg class="flex-shrink-0 w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        Reports
                    </a>
                </nav>
            </div>
            <div class="flex flex-shrink-0 p-4 border-t border-indigo-800">
                <a href="#" class="flex-shrink-0 block w-full group">
                    <div class="flex items-center">
                        <div>
                            <img class="inline-block rounded-full h-9 w-9"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-white">Tom Cook</p>
                            <p class="text-xs font-medium text-indigo-200 group-hover:text-white">View profile</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
