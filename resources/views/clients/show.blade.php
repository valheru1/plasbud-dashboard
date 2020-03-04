@extends ('layout')

@section ('header')

@endsection

@section('content')
<div id="wrapper">

	<div id="page" class="container">
		<div id="content">
			<div class="title">
                <table>
                    <tr>
                        <td>
                            <h2>{{ $client->surname }} {{ $client->name }}</h2>
                        </td>
                        <td>
                            <a href="{{ route('clients.edit', $client->id) }}"><i class="fas fa-user-edit"></i></a>
                            {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                <a href="/clients/{{ $client->id }}/edit">Zmień</a>
                            </button> --}}
                        </td>
                    </tr>
                </table>
                <span class="byline">
                    Adres: {{ $client->street }} {{ $client->home_number }}<br/>{{ $client->city_code }} {{ $client->city }}<br/>{{ $client->country }}
                    <br/>
                    @if ($client->street == '' || $client->home_number == '' || $client->city_code == '' || $client->city == '')
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            <a href="{{ route('clients.edit', $client->id) }}">Uzupełnij pozostałe dane adresowe</a>
                        </button>
                    @endif

            </div>
            {{ $client->description }}



        </div>



	</div>
</div>

@endsection
