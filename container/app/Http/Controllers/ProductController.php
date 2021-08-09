<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        // return view('');
    }

    public function create() {
        // return view('');
    }

    public function store(Request $request) {
        try {
            Product::create($request->all());
            \Session::flash('flash_message', [
                'msg'   => 'Produto criado com sucesso!',
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
        $product = Product::findOrFail($id);
        if($product) {
            // return view();
        } else {
            // return view();
        }
    }

    public function edit($id) {
        $product = Prodcut::findOrFail($id);
        if($product) {
            // return view('', compact('product')); 
        } else {
            // return view();
        }
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
        try {
            $product->update($request->all());
            \Session::flash('flash_message', [
                'msg'   => 'Produto criado com sucesso!',
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
            Product::findOrFail($id)->delete();
            \Session::flash('flash_message', [
                'msg'   => 'Produto apagado com sucesso!',
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
