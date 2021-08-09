<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
         // return view();
    }

    public function create() {
         // return view();
    }

    public function store(Request $request) {
        try {
            Order::create($request->all());
            \Session::flash('flash_message', [
                'msg'   => 'Quarto criado com sucesso!',
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
        $order = Order::findOrFail($id);
        if($order) {
            // return View('', compact('room'));
        } else {
            // return View();
        }
    }

    public function edit($id) {
        $order = Order::findOrFail($id);
        if($order) {
            // return View('', compact('room'));
        } else {
            // return View();
        }
    }

    public function update(Request $request, $id) {
        try {
            $order = Order::findOrFail($id);
            $order->update($request->all());
            \Session::flash('flash_message', [
                'msg'   => 'Quarto atualizado com sucesso!',
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
        try {
            Order::findOrFail($id)->delete();
            \Session::flash('flash_message', [
                'msg'   => 'Quarto apagado com sucesso!',
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
