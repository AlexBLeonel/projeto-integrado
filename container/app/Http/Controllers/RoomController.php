<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller {
    public function index() {
        $rooms = Room::all();
        return view('rooms.list', compact('rooms'));
    }

    public function create() {
        return view('rooms.create');
    }

    public function store(Request $request) {
        try {
            Room::create($request->all());
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
        return redirect()->route('rooms.list');
    }

    public function show($id) {
        $room = Room::find($id);
        if($room) {
            return View('rooms.show', compact('room'));
        } else {
            \Session::flash('flash_message', [
                'msg'   => 'Quarto não encontrado!',
                'class' => 'alert-danger'
            ]);
            return redirect()->route('rooms.list');
        }
    }

    public function edit($id) {
        $room = Room::findOrFail($id);
        if($room) {
            return View('rooms.edit', compact('room'));
        } else {
            \Session::flash('flash_message', [
                'msg'   => 'Quarto não encontrado!',
                'class' => 'alert-danger'
            ]);
            return redirect()->route('rooms.list');
        }
    }

    public function update(Request $request, $id) {
        try {
            $room = Room::findOrFail($id);
            $room->update($request->all());
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
        return redirect()->route('rooms.list');
    }



    public function destroy($id) {
        try {
            Room::findOrFail($id)->delete();
            return(['deleted' => true]);

        } catch(PDOException $e) {
            return Http::response('Erro - Não foi possível excluir', 500);
        }
    }
}

