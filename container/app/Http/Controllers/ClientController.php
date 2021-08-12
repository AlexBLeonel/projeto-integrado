<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $clients = Client::all();
        return view('clients.list', compact('clients'));
    }

    public function create() {
        return view('clients.create');
    }
    
    public function store(Request $request) {
        try {
            Client::create($request->all());
            \Session::flash('flash_message', [
                'msg'   => 'Cliente cadastrado com sucesso!',
                'class' => 'alert-success'
            ]);
        } catch(PDOException $e) {
            \Session::flash('flash_message', [
                'msg'   => 'Ops, algo inesperado aconteceu...',
                'class' => 'alert-danger'
            ]);
        }
        return redirect()->route('clients.list');
    }

    public function show($id) {
        $client = Client::find($id);
        if($client) {
            return view('clients.show', compact('client'));
        } else {
            \Session::flash('flash_message', [
                'msg'   => 'Cliente não encontrad!',
                'class' => 'alert-danger'
            ]);
            return redirect()->route('clients.list');
        }
    }

    public function edit($id) {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id) {
        $client = Client::findOrFail($id);
        try {
            $client->update($request->all());
            \Session::flash('flash_message', [
                'msg'   => 'Cliente atualizado com sucesso!',
                'class' => 'alert-success'
            ]);
        } catch(PDOException $e) {
            \Session::flash('flash_message', [
                'msg'   => 'Ops, algo inesperado aconteceu...',
                'class' => 'alert-danger'
            ]);
        }
        return redirect()->route('clients.list');
    }

    public function destroy($id) {
        $client = Client::findOrFail($id);
        try {
            $client->delete();
            \Session::flash('flash_message', [
                'msg'   => 'Cliente apagado com sucesso!',
                'class' => 'alert-success'
            ]);
        } catch(PDOException $e) {
            \Session::flash('flash_message', [
                'msg'   => 'Ops, algo inesperado aconteceu...',
                'class' => 'alert-danger'
            ]);
        }
        return redirect()->route('clients.list');
    }
}
