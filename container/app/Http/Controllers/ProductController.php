<?php
namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Requests\StoreProcuctRequest;

class ProductController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $products = Product::all();
        return view('products.list', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(StoreProcuctRequest $request) {
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
        return redirect()->route('products.list');
    }

    public function show($id) {
        $product = Product::find($id);
        if($product) {
            return view('products.show', compact('product'));
        } else {
            \Session::flash('flash_message', [
                'msg'   => 'Produto não encontrado!',
                'class' => 'alert-danger'
            ]);
            return redirect()->route('products.list');
        }
    }

    public function edit($id) {
        $product = Product::findOrFail($id);
        if($product) {
            return view('products.edit', compact('product'));
        } else {
            \Session::flash('flash_message', [
                'msg'   => 'Produto não encontrad!',
                'class' => 'alert-danger'
            ]);
            return redirect()->route('products.list');
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
        return redirect()->route('products.list');
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
        return redirect()->route('products.list');
    }
}
