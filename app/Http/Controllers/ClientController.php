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
        request()->validate([
            'surname' => 'required',
            'name' => 'required',
            'phone' => 'required|numeric'
        ],[
            'surname.required' => 'Nie podano nazwiska!',
            'name.required' => 'Nie podano imienia!',
            'phone.required' => 'Nie podano numeru telefonu!',
            'phone.numeric' => 'Numer telefonu może składać się z samych cyfr!',
        ]);

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
        request()->validate([
            'surname' => 'required',
            'name' => 'required',
            'phone' => 'required|numeric'
        ],[
            'surname.required' => 'Nie podano nazwiska!',
            'name.required' => 'Nie podano imienia!',
            'phone.required' => 'Nie podano numeru telefonu!',
            'phone.numeric' => 'Numer telefonu może składać się z samych cyfr!',
        ]);

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


    public function messages()
{
    return [
        'phone.numeric' => 'Numer telefonu może składać się z samych cyfr',
        
    ];
}
}
