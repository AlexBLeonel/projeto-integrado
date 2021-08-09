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
        // return view('', compact('clients'));
    }

    public function create() {
        // return view('');
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
        // return redirect()->route();
    }

    public function show($id) {
        $client = Client::findOrFail($id);
        // return view('', compact(''));
    }

    public function edit($id) {
        $client = Client::findOrFail($id);
        return view('', compact('client'));
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
        // return redirect()->route();
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
        // return redict()->route();
    }
}
