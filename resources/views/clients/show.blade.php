@extends ('layout')

@section ('header')

@endsection

@section('content')
<div id="wrapper">

	<div id="page" class="container">
		<div id="content">
			<div class="title">
                <h2>{{ $client->surname }} {{ $client->name }}</h2>
                <span class="byline"> Adres: {{ $client->street }} {{ $client->home_number }}, {{ $client->city_code }} {{ $client->city }}, {{ $client->country }}</span>
            </div>
            {{ $client->description }}



        </div>



	</div>
</div>

@endsection
