@extends('layout')

@section('errors')
    <p>{{ $errors->first('surname') }}</p>
    <p>{{ $errors->first('name') }}</p>
    <p>{{ $errors->first('street') }}</p>
    <p>{{ $errors->first('home_number') }}</p>
    <p>{{ $errors->first('phone') }}</p>
    <p>{{ $errors->first('city_code') }}</p>
    <p>{{ $errors->first('city') }}</p>
    <p>{{ $errors->first('country') }}</p>
    <p>{{ $errors->first('description') }}</p>
@endsection

@section('content')
    <div id="wrapper">

        <div id="page" class="container mx-auto w-full max-w-4xl">
            <h1 class="font-bold">Podaj dane nowego klienta:</h1>

            <form class="w-full max-w-lg mx-auto" method="POST" action="/clients">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block text-gray-700 text-lg font-medium mb-2" for="surname">
                            Nazwisko
                        </label>
                    <input class="shadow appearance-none border {{ $errors->first('surname') ? 'border-red-500' : '' }} rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="surname" name="surname" type="text" placeholder="Nazwisko:" value="{{ old('surname') }}">

                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block text-gray-700 text-lg font-medium mb-2" for="name">
                            Imię:
                        </label>
                        <input class="shadow appearance-none border {{ $errors->first('name') ? 'border-red-500' : '' }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Imię:" value="{{ old('name') }}"></input>

                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block text-gray-700 text-lg font-medium mb-2" for="phone">
                            Telefon:
                        </label>
                        <input class="shadow appearance-none border {{ $errors->first('phone') ? 'border-red-500' : '' }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="phone" name="phone" type="text" placeholder="Numer telefonu:" value="{{ old('phone') }}"></input>

                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-3/4 px-3 mb-6 md:mb-0">
                        <label class="block text-gray-700 text-lg font-medium mb-2" for="street">
                            Ulica:
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="street" name="street" type="text" placeholder="Ulica:" value="{{ old('street') }}"></input>
                    </div>
                    <div class="w-full md:w-1/4 px-3">
                        <label class="block text-gray-700 text-lg font-medium mb-2" for="home_number">
                            Numer:
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="home_number" name="home_number" type="text" placeholder="Numer:" value="{{ old('home_number') }}"></input>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block text-gray-700 text-lg font-medium mb-2" for="city_code">
                            Kod:
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="city_code" name="city_code" type="text" placeholder="Kod:" value="{{ old('city_code') }}"></input>
                    </div>
                    <div class="w-full md:w-1/3 px-3">
                        <label class="block text-gray-700 text-lg font-medium mb-2" for="city">
                            Miasto:
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="city" name="city" type="text" placeholder="Miasto:" value="{{ old('city') }}"></input>
                    </div>
                    <div class="w-full md:w-1/3 px-3">
                        <label class="block text-gray-700 text-lg font-medium mb-2" for="country">
                            Kraj:
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="country" name="country" type="text" placeholder="Kraj:" value="{{ old('country') }}"></input>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-lg font-medium mb-2" for="description">
                        Notatka:
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" type="text" placeholder="Notatka:" value="{{ old('description') }}"></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Dodaj nowego klienta
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
