<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();

        return view('clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
            'contact_num_one' => ['required', 'regex:/^[0-9]{11}$/'],
            'contact_num_two' => ['regex:/^[0-9]{11}$/'],
            'address' => ['required', 'string', 'max:255'],
        ]);
        Client::create($data);
        return redirect()->route('allClients');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('clients.edit', ['client' => Client::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'contact_num_one' => ['required', 'regex:/^[0-9]{11}$/'],
            'contact_num_two' => ['regex:/^[0-9]{11}$/'],
            'address' => ['required', 'string'],
            'status' => 'required'
        ]);

        $client = Client::findOrFail($request->id);
        if ($client->email !== $data['email']) {
            $request->validate([
                'email' => ['unique:clients'],
            ]);
        }
        $client->update($data);
        return redirect()->route('allClients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::findOrfail($id);
        $client->delete();
        return redirect()->route('allClients');
    }
}
