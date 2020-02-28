<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderby('surname')->paginate(20);
        return view('clients.index', ['clients' => $clients]);
    }

    public function show(Client $client)
    {
        // $client = Client::findOrFail($id);

        return view('clients.show', compact('client'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store()
    {
        request()->validate([
            'surname' => 'required',
            'name' => 'required',
            'phone' => 'required|numeric',
            'home_number' => 'max:10',
            'description' => 'max:200',
        ], [
            'surname.required' => 'Nie podano nazwiska!',
            'name.required' => 'Nie podano imienia!',
            'phone.required' => 'Nie podano numeru telefonu!',
            'phone.numeric' => 'Numer telefonu może składać się z samych cyfr!',
            'description' => 'Za dużo znaków! Opis możesz zbudować tylko z 200 znaków.',
        ]);

        Client::create([
            'surname' => request('surname'),
            'name' => request('name'),
            'phone' => request('phone'),
            'street' => request('street'),
            'home_number' => request('home_number'),
            'city_code' => request('city_code'),
            'city' => request('city'),
            'country' => request('country'),
            'description' => request('description')
        ]);

        // $client = new Client();


        // $client->surname = request('surname');
        // $client->name = request('name');
        // $client->phone = request('phone');
        // $client->home_number = request('home_number');
        // $client->description = request('description');

        // $client->save();

        return redirect('/clients');
    }

    public function edit(Client $client)
    {
        //$client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Client $client)
    {
        request()->validate([
            'surname' => 'required',
            'name' => 'required',
            'phone' => 'required|numeric',
            'home_number' => 'max:10',
            'description' => 'max:200',
        ], [
            'surname.required' => 'Nie podano nazwiska!',
            'name.required' => 'Nie podano imienia!',
            'phone.required' => 'Nie podano numeru telefonu!',
            'phone.numeric' => 'Numer telefonu może składać się z samych cyfr!',
            'description' => 'Za dużo znaków! Opis możesz zbudować tylko z 200 znaków.',
        ]);

        //die(request());

        //$client = Client::findOrFail($id);

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
