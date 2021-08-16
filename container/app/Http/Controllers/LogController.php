<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogController extends Controller {
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
            Log::create($request->all());
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
        $log = Log::findOrFail($id);
        if($log) {
            // return View('', compact('room'));
        } else {
            // return View();
        }
    }

    public function edit($id) {
        $log = Log::findOrFail($id);
        if($log) {
            // return View('', compact('room'));
        } else {
            // return View();
        }
    }

    public function update(Request $request, $id) {
        try {
            $log = Log::findOrFail($id);
            $log->update($request->all());
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

    public function destroy($id)
    {
        try {
            Log::findOrFail($id)->delete();
            return (['deleted' => true]);
        } catch (PDOException $e) {
            return Http::response('Erro - Não foi possível excluir', 500);
        }
    }
}
        // return redirect()->route();
    }
}
