    <!-- Start Navbar Section -->
    <header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
        <div class="container">
            <div class="relative flex items-center justify-between">
                <div class="px-4">
                    <a href="#home" class="block py-6 text-lg font-bold text-primary">Portof-Thomas</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
                        <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                    </button>

                    <nav
                        id="nav-menu"
                        class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark dark:shadow-slate-500 lg:static lg:block lg:max-w-full lg:rounded-none lg:border-none lg:bg-transparent lg:shadow-none lg:dark:bg-transparent"
                    >
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="/#home" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="/#about" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Tentang Saya</a>
                            </li>
                            <li class="group">
                                <a href="/#portofolio" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Portofolio</a>
                            </li>
                            <li class="group">
                                <a href="/#clients" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Client</a>
                            </li>
                            <li class="group">
                                <a href="/#blog" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Blog</a>
                            </li>
                            <li class="group">
                                <a href="/#contact" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Contact</a>
                            </li>
                            <li class="mt-3 flex items-center pl-8 lg:mt-0">
                                <div class="flex">
                                    <span class="mr-2 text-sm text-slate-500">Light</span>
                                    <input type="checkbox" class="hidden" id="dark-toggle" />
                                    <label for="dark-toggle">
                                        <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                                            <div class="toggle-circle h-4 w-4 rounded-full bg-white transition-all duration-300 ease-in-out"></div>
                                        </div>
                                    </label>
                                    <span class="ml-2 text-sm text-slate-500">Dark</span>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- End Navbar Section -->