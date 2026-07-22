<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <title>{{ $title ?? config('app.name') }}</title>
 

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        @livewireStyles
    </head>
    <body>
        {{-- warna logo har
        #2B2523 HITAM
        #757273 ABU
        #931913 MERAH
        --}}

        {{-- header --}}
        <div class="sticky top-0  relative z-50 bg-white border-b border-[#931913]">
            @include('layouts.frontend.header')
        </div>

        {{-- isi --}}
        <div class="min-h-screen max-w-6xl mx-auto mt-4 px-4 sm:px-6 sm:mt-2 lg:px-8">

        {{ $slot }}

        </div>
        
        {{-- footer --}}
        <div>
            @include('layouts.frontend.footer')
        </div>
        @livewireScripts    

        {{-- tawk.to --}}
        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6a3bb03d210b631d477f249e/1jrsigs62';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    </body>
</html>