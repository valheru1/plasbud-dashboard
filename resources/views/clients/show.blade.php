@extends ('layout')

@section ('header')

@endsection

@section('content')
<div id="wrapper">

	<div id="page" class="container">
		<div id="content">
			<div class="title">
                <p>
                    <h2>{{ $client->surname }} {{ $client->name }}</h2>
                    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        <a href="/clients/{{ $client->id }}/edit">Zmień</a>
                    </button>
                </p>
                <span class="byline">
                    Adres: {{ $client->street }} {{ $client->home_number }}<br/>{{ $client->city_code }} {{ $client->city }}<br/>{{ $client->country }}
                    <br/>
                    @if ($client->street == '' || $client->home_number == '' || $client->city_code == '' || $client->city == '')
                        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            <a href="/clients/{{ $client->id }}/edit">Uzupełnij pozostałe dane adresowe</a>
                        </button>
                    @endif

            </div>
            {{ $client->description }}



        </div>



	</div>
</div>

@endsection
