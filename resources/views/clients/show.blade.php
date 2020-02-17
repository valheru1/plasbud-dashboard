@extends ('layout')

@section ('header')

@endsection

@section('content')
<div id="wrapper">

	<div id="page" class="container">
		<div id="content">
			<div class="title">
            <h2>{{ $client->surname }} {{ $client->name }}</h2>




        </div>



	</div>
</div>

@endsection
