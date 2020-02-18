<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="/css/default.css" rel="stylesheet"/>
<link href="/css/fonts.css" rel="stylesheet"/>
<link rel="stylesheet" href="/css/app.css">

</head>
<body class="text-lg">

    <div id="header-wrapper">
    @if (!$errors->isempty())
        <div role="alert">
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                Błędy:
            </div>
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                @yield('errors')
            </div>
        </div>
    @endif
        <nav class="flex items-center justify-between flex-wrap p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                <span class="font-semibold text-xl tracking-tight">Plasbud Dashboard</span>
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-lg lg:flex-grow">
                    <a href="/" title="" class="block mt-4 mr-4 lg:inline-block lg:mt-0 hover:text-white {{ Request::path() === '/' ? 'text-white' : ''}}">Tablica</a>
                    <a href="/assignments" title="" class="block mt-4 mr-4 lg:inline-block lg:mt-0 hover:text-white {{ Request::path() === 'assignments' ? 'text-white' : ''}}">Zadania</a>
                    <a href="#" title="" class="block mt-4 mr-4 lg:inline-block lg:mt-0 hover:text-white {{ Request::path() === 'registry' ? 'text-white' : ''}}">Rejestr zleceń</a>
                    <a href="/calendar" title="" class="block mt-4 mr-4 lg:inline-block lg:mt-0 hover:text-white {{ Request::path() === 'calendar' ? 'text-white' : ''}}">Kalendarz</a>
                    <a href="/clients" title="" class="block mt-4 mr-4 lg:inline-block lg:mt-0 hover:text-white {{ Request::path() === 'clients' ? 'text-white' : ''}}">Klienci</a>
                </div>
                <div>
                    <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Download</a>
                </div>
            </div>
        </nav>

        @yield('header')
    </div>
    @yield('content')

    <div id="copyright" class="container">
        <p>&copy; Plas-bud. All rights reserved. | | Design by <a href="http://szkadlubowicz.com">szkadlubowicz.com</a>.</p>
    </div>

    <script src='/js/app.js'></script>
</body>
</html>
