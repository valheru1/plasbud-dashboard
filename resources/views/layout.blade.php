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
<body>
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="/">Plasbud Dashboard</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li class="{{ Request::path() === '/' ? 'current_page_item' : ''}}"><a href="/" accesskey="1" title="">Tablica</a></li>
                    <li class="{{ Request::path() === 'assignments' ? 'current_page_item' : ''}}"><a href="/assignments" accesskey="2" title="">Zadania</a></li>
                    <li class="{{ Request::path() === 'registry' ? 'current_page_item' : ''}}"><a href="#" accesskey="3" title="">Rejestr zleceń</a></li>
                    <li class="{{ Request::path() === 'calendar' ? 'current_page_item' : ''}}"><a href="/calendar" accesskey="4" title="">Kalendarz</a></li>
                </ul>
            </div>
        </div>
        @yield('header')
    </div>
    @yield('content')

    <div id="copyright" class="container">
        <p>&copy; Plas-bud. All rights reserved. | | Design by <a href="http://szkadlubowicz.com">szkadlubowicz.com</a>.</p>
    </div>

    <script src='/js/app.js'></script>
</body>
</html>
