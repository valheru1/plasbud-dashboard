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
        $validatedAttributes = $this->validateArticle();

        Client::create($validatedAttributes);

        // $client = new Client();


        // $client->surname = request('surname');
        // $client->name = request('name');
        // $client->phone = request('phone');
        // $client->home_number = request('home_number');
        // $client->description = request('description');

        // $client->save();

        return redirect(route('clients.index'));
    }

    public function edit(Client $client)
    {
        //$client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Client $client)
    {
        $validatedAttributes = $this->validateArticle();

        $client->update($validatedAttributes);

        return redirect($client->path());
    }

    protected function validateArticle()
    {
        return request()->validate([
            'surname' => 'required',
            'name' => 'required',
            'phone' => 'required|numeric',
            'street' => '',
            'home_number' => 'max:10',
            'city_code' => '',
            'city' => '',
            'country' => '',
            'description' => 'max:200',
        ], [
            'surname.required' => 'Nie podano nazwiska!',
            'name.required' => 'Nie podano imienia!',
            'phone.required' => 'Nie podano numeru telefonu!',
            'phone.numeric' => 'Numer telefonu może składać się z samych cyfr!',
            'description' => 'Za dużo znaków! Opis możesz zbudować tylko z 200 znaków.',
        ]);
    }
}
