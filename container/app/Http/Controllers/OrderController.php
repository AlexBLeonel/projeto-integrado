<?php
namespace App\Http\Controllers;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Models\Client;

class OrderController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $orders = Order::all();
        return View('orders.list', compact('orders'));
    }

    public function create() {
        return View('orders.create');
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
        return redirect()->route('orders.list');
    }

    public function show($id) {
        $order  = Order::find($id);
        $room = Client::findOrFail($order->room_id);
        if($order) {
            return view('orders.show', compact('order'));
        } else {
            \Session::flash('flash_message', [
                'msg'   => 'Pedido não encontrad!',
                'class' => 'alert-danger'
            ]);
            return redirect()->route('orders.list');
        }
    }

    public function edit($id) {
        $order = Order::findOrFail($id);
        if($order) {
            return View('orders.edit', compact('room'));
        } else {
            return redirect()->route('orders.list');
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
        return redirect()->route('orders.list');
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
        return redirect()->route('orders.list');
    }
}
