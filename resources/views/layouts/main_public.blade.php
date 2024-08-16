<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Mas Thomas</title>
        <link rel="stylesheet" href="{{ asset('dist/css/final.css') }}" />
        <script>
            if (localStorage.theme === "dark" || (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
                document.documentElement.classList.add("dark");
            } else {
                document.documentElement.classList.remove("dark");
            }
        </script>
    </head>
    <body>
        @include('partials.header_home')

        @yield('content')

        @include('partials.footer_home')

        <!-- Ke atas -->
        <a href="#home" id="to-top" class="fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-primary p-4 duration-200 hover:animate-pulse">
            <span class="mt-2 block h-5 w-5 rotate-45 border-t-2 border-l-2"></span>
        </a>

        <!-- Ke bawah -->

        <script src="{{ asset('dist/js/script.js') }}"></script>
    </body>
</html>
