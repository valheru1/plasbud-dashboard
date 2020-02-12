@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container w-full max-w-xl">
            <h1 class="font-bold">Dodaj nowe zadanie:</h1>
            <form class="bg-white px-8 pt-6 pb-8 mb-4" method="POST" action="/assignments">
                @csrf
                <div class="mb-4">bold
                <label class="block text-gray-700 text-lg font-medium mb-2" for="title">
                    Tytuł zadania:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Tytuł zadania">
                </div>
                <div class="mb-6">
                <label class="block text-gray-700 text-lg font-medium mb-2" for="body">
                    Dokładna treść zadania:
                </label>
                <textarea class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="body" type="text" placeholder="Treść zadania"></textarea>
                </div>
                <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Dodaj zadanie
                </button>
                </div>
            </form>


        </div>
    </div>
@endsection
