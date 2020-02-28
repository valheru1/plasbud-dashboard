@extends ('layout')

@section ('header')

@endsection

@section('content')
<div id="wrapper">

	<div id="page" class="container">
		<div id="content">
			<div class="title">
                <h2>{{ $client->surname }} {{ $client->name }}</h2>
                <span class="byline">
                    Adres:
                    @if ($client->street == '' && $client->city_code == '' && $client->city == '')
                        Nie podano.
                        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            <a href="/clients/{{ $client->id }}/edit">Dodaj dane adresowe</a>
                        </button>
                    @elseif ($client->street == '' && $client->city_code != '' || $client->city != '')
                        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            <a href="/clients/{{ $client->id }}/edit">Dodaj ulicę</a>
                        </button>
                        {{ $client->city_code }} {{ $client->city }}, {{ $client->country }}
                    @elseif ($client->street != '' && $client->city_code == '' && $client->city == '')
                        {{ $client->street }} {{ $client->home_number }},
                        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            <a href="/clients/{{ $client->id }}/edit">Dodaj miasto</a>
                        </button>
                    @else
                        {{ $client->street }} {{ $client->home_number }}, {{ $client->city_code }} {{ $client->city }}, {{ $client->country }}
                    @endif

            </div>
            {{ $client->description }}



        </div>



	</div>
</div>

@endsection
