<div>
    <nav
        class="relative bg-gray-800/50 backdrop-blur-md after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:border-b after:border-white/10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                            alt="VSTR4" class="size-8" />
                    </div>

                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <x-nav-link href="/" :active="request()->is('/')" class="text-sm">Home</x-nav-link>
                            <x-nav-link href="/about" :active="request()->is('about')" class="text-sm">About Us</x-nav-link>
                            <x-nav-link href="/kontak" :active="request()->is('kontak')" class="text-sm">Kontak</x-nav-link>
                            <x-nav-link href="/layanan" :active="request()->is('layanan')" class="text-sm">Layanan</x-nav-link>
                            <x-nav-link href="/blog" :active="request()->is('blog')" class="text-sm">Blog</x-nav-link>
                        </div>
                    </div>
                </div>

                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <button type="button"
                            class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                aria-hidden="true" class="size-6">
                                <path
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>

                        <el-dropdown class="relative ml-3">
                            <button
                                class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                                <span class="absolute -inset-1.5"></span>
                                <img src="{{ asset('img/me.png') }}" alt="Avatar"
                                    class="size-8 rounded-full outline -outline-offset-1 outline-white/10 object-cover" />
                            </button>
                            <el-menu anchor="bottom end" popover
                                class="w-48 origin-top-right rounded-md bg-gray-900/95 p-1 backdrop-blur-md outline-1 -outline-offset-1 outline-white/10 shadow-2xl transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                                <a href="/profile"
                                    class="block rounded-md px-4 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white focus:bg-white/5 focus:outline-hidden">Profile Saya</a>
                                <a href="#"
                                    class="block rounded-md px-4 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white focus:bg-white/5 focus:outline-hidden">Settings</a>
                                <a href="#"
                                    class="block rounded-md px-4 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white focus:bg-white/5 focus:outline-hidden">Sign
                                    out</a>
                            </el-menu>
                        </el-dropdown>
                    </div>
                </div>

                <div class="-mr-2 flex md:hidden">
                    <button type="button" command="--toggle" commandfor="mobile-menu"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                        <span class="absolute -inset-0.5"></span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <el-disclosure id="mobile-menu" hidden class="block md:hidden bg-gray-900/40 backdrop-blur-md">
            <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                <x-nav-link href="/" :active="request()->is('/')" class="block text-base py-2 px-3">Home</x-nav-link>
                <x-nav-link href="/about" :active="request()->is('about')" class="block text-base py-2 px-3">About Us</x-nav-link>
                <x-nav-link href="/kontak" :active="request()->is('kontak')" class="block text-base py-2 px-3">Kontak</x-nav-link>
                <x-nav-link href="/layanan" :active="request()->is('layanan')" class="block text-base py-2 px-3">Layanan</x-nav-link>
                <x-nav-link href="/blog" :active="request()->is('blog')" class="block text-base py-2 px-3">Blog</x-nav-link>
            </div>

            <div class="border-t border-white/10 pt-4 pb-3">
                <div class="flex items-center px-5 mb-3">
                    <div class="shrink-0">
                        <img src="{{ asset('img/me.png') }}" alt="Avatar"
                            class="size-10 rounded-full outline -outline-offset-1 outline-white/10 object-cover" />
                    </div>
                    <div class="ml-3">
                        <div class="text-base/5 font-medium text-white">David Guntoro</div>
                        <div class="text-sm font-medium text-gray-400">davidguntoro848@gmail.com</div>
                    </div>
                    <button type="button"
                        class="relative ml-auto shrink-0 rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                        <span class="absolute -inset-1.5"></span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            aria-hidden="true" class="size-6">
                            <path
                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="space-y-1 px-2">
                    <a href="/profile"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Profile
                        Saya</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Settings</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Sign
                        out</a>
                </div>
            </div>
        </el-disclosure>
    </nav>
</div>
