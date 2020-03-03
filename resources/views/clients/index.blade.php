@extends('layout')

@section('content')
    <div id="wrapper">

        <div id="page" class="container w-full max-w-6xl">
            <h1>Dane klientów</h1>
            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">

                <a href="/clients/create">Dodaj nowego klienta</a>
            </button>
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="w-1/6 px-4 py-2">Nazwisko</th>
                        <th class="w-1/6 px-4 py-2">Imię</th>
                        <th class="w-1/8 px-4 py-2">Telefon</th>
                        <th class="w-1/4 px-4 py-2">Ulica</th>
                        <th class="w-1/8 px-4 py-2">Nr</th>
                        <th class="w-1/4 px-4 py-2">Kod pocztowy</th>
                        <th class="w-1/4 px-4 py-2">Miasto</th>
                        <th class="w-1/4 px-4 py-2">Kraj</th>
                        <th class="w-1/4 px-4 py-2"></th>
                        <th class="w-1/4 px-4 py-2"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($clients as $client)
                    <tr></tr>
                        <td>{{ $client->surname }}</td>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->street }}</td>
                        <td>{{ $client->home_number }}</td>
                        <td>{{ $client->city_code }}</td>
                        <td>{{ $client->city }}</td>
                        <td>{{ $client->country }}</td>
                        <td>
                            {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded"> --}}
                                <a href="/clients/{{ $client->id }}/edit"><i class="fas fa-user-edit"></i></a>

                            {{-- </button> --}}
                            {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                <a href="/clients/{{ $client->id }}">Wyświetl</a>
                            </button> --}}
                        </td>
                        <td>
                            <a href="/clients/{{ $client->id }}"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                    @endforeach

                    {{-- <tr>
                    <td class="border px-4 py-2">Intro to CSS</td>
                    <td class="border px-4 py-2">Adam</td>
                    <td class="border px-4 py-2">858</td>
                    </tr>
                    <tr class="bg-gray-100">
                    <td class="border px-4 py-2">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                    <td class="border px-4 py-2">Adam</td>
                    <td class="border px-4 py-2">112</td>
                    </tr>
                    <tr>
                    <td class="border px-4 py-2">Intro to JavaScript</td>
                    <td class="border px-4 py-2">Chris</td>
                    <td class="border px-4 py-2">1,280</td>
                    </tr> --}}
                </tbody>
            </table>
            {{ $clients->links() }}
        </div>
    </div>
@endsection
