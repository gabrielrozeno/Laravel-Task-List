<!DOCTYPE html>
<html>
    <head>
        <title>Rozeno's Task List</title>
        @yield('styles')
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        {{-- blade-formatter-disable --}}
        <style type="text/tailwindcss">
        .btn {
            @apply rounded-md px-2 py-1 text-center text-slate-700 font-medium shadow-sm ring-1 ring-slate-300 hover:ring-emerald-500/50
        }

        .link{
            @apply mt-4 mb-4 font-medium underline decoration-emerald-500 text-gray-700 cursor-pointer
        }

        label {
            @apply block mb-2 mt-2 uppercase text-slate-700
        }

        input, textarea {
            @apply rounded-sm shadow-sm appearance-none border w-full py-2 px-3 leading-tight focus:outline-none
        }

        .error {
            @apply text-red-500 text-sm
        }
        </style>
        {{-- blade-formatter-enable --}}

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <h1 class="text-2xl mb-4">@yield('title')</h1>
    <div x-data="{flash: true}">
        @if(session()->has('success')) {

        <div x-show="flash" class="relative mb-10 rounded border border-emerald-500 bg-emerald-100 px-4 py-3 text-lg text-emerald-700" role="alert">
            <strong class="font-bold">Success!</strong>
            <div>{{session('success')}}</div>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" @click="flash = false"
                  stroke="currentColor" class="h-6 w-6 cursor-pointer">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </span>
        </div>
        @endif
        @yield('content')
    </div>
</body>
</html>
