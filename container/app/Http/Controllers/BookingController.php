<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BookingController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $bookings = Booking::all();
        return view('bookings.list', compact('bookings'));
    }

    public function create() {
        return view('bookings.create');
    }

    public function store(Request $request) {
        try {
            Booking::create($request->all());
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
        return redirect()->route('bookings.list');
    }

    public function show($id) {
        $booking = Booking::find($id);
        if($booking) {
            return View('bookings.show', compact('booking'));
        } else {
            \Session::flash('flash_message', [
                'msg'   => 'Reserva não encontrada!',
                'class' => 'alert-danger'
            ]);
            return redirect()->route('bookings.list');
        }
    }

    public function edit($id) {
        $booking = Booking::findOrFail($id);
        if($booking) {
            return view('bookings.edit', compact('booking'));
        } else {
            return redirect()->route('bookings.list');
        }
    }

    public function update(Request $request, $id) {
        try {
            $booking = Booking::findOrFail($id);
            $booking->update($request->all());
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
        return redirect()->route('bookings.list');
    }

    public function destroy($id) {
        try {
            Booking::findOrFail($id)->delete();
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
        return redirect()->route('bookings.list');
    }
}
