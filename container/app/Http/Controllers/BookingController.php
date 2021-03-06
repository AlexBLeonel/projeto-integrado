<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Client;
use App\Models\Room;

class BookingController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $bookings = Booking::with(['clients','rooms'])->get();
        return view('bookings.list', compact('bookings'));
    }

    public function create() {
        $clients = Client::all();
        $rooms   = Room::where('status', '=', 1)->get();
        return view('bookings.create', compact('clients', 'rooms'));
    }

    public function store(Request $request) {
        try {
            Booking::create($request->all());
            \Session::flash('flash_message', [
                'msg'   => 'Reserva cadastrada com sucesso!',
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
        $clients = Client::all();
        $rooms   = Room::all();
        if($booking) {
            return view('bookings.edit', compact('booking', 'clients', 'rooms'));
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


    public function destroy($id)
    {
        try {
            Booking::findOrFail($id)->delete();
            return (['deleted' => true]);
        } catch (PDOException $e) {
            return Http::response('Erro - Não foi possível excluir', 500);
        }
    }
}
