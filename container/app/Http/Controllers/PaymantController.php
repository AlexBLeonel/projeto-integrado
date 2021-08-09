<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paymant;

class PaymantController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $paymants = Paymant::all();
        // return view('', compact('paymants'));
    }

    public function create() {
        return view('');
    }

    public function store(Request $request) {
        try {
            Paymant::create($request->all());
            \Session::flash('flash_message', [
                'msg'   => 'Pagamento registrado com sucesso!',
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
        $paymant = Paymant::findOrFail($id);
        if($paymant) {
            // return view('', 'paymant');
        } else {
            // return view();
        }
    }

    public function edit($id) {
        $paymant = Paymant::findOrFail($id);
        if($paymant) {
            // return view('', 'paymant');
        } else {
            // return view();
        }
    }

    public function update(Request $request, $id) {
        $paymant = Paymant::findOrFail($id);
        try {
            $paymant->update($request->all());
            \Session::flash('flash_message', [
                'msg'   => 'Pagamento atualizado com sucesso!',
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
        $paymant = Paymant::findOrFail($id);
        try {
            $paymant->delete();
            \Session::flash('flash_message', [
                'msg'   => 'Pagamento excluido com sucesso!',
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
}
