<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderby('surname')->get();
        return view('clients.index', ['clients' => $clients]);
    }

    public function show($id)
    {
        $client = Client::find($id);

        return view('clients.show', compact('client'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store()
    {
        $client = new Client();


        $client->surname = request('surname');
        $client->name = request('name');
        $client->phone = request('phone');
        $client->street = request('street');
        $client->home_number = request('home_number');
        $client->city_code = request('city_code');
        $client->city = request('city');
        $client->country = request('country');
        $client->description = request('description');

        $client->save();

        return redirect('/clients');
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
    }

    public function update($id)
    {
        $client = Client::find($id);

        $client->surname = request('surname');
        $client->name = request('name');
        $client->phone = request('phone');
        $client->street = request('street');
        $client->home_number = request('home_number');
        $client->city_code = request('city_code');
        $client->city = request('city');
        $client->country = request('country');
        $client->description = request('description');

        $client->save();

        return redirect('/clients/' . $client->id);
    }
}
