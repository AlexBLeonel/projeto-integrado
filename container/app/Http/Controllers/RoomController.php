<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller {
    public function index() {
        return view('rooms.list');
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
        // return redirect()->route();
    }

    public function show($id) {
        $room = Room::findOrFail($id);
        if($room) {
            // return View('', compact('room'));
        } else {
            // return View();
        }
    }

    public function edit($id) {
        $room = Room::findOrFail($id);
        if($room) {
            // return View('', compact('room'));
        } else {
            // return View();
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
        // return redirect()->route();
    }

    public function destroy($id) {

    }
}
