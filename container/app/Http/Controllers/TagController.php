<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller {
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
            Tag::create($request->all());
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
        $tag = Tag::findOrFail($id);
        if($tag) {
            // return View('', compact('room'));
        } else {
            // return View();
        }
    }

    public function edit($id) {
        $tag = Tag::findOrFail($id);
        if($tag) {
            // return View('', compact('room'));
        } else {
            // return View();
        }
    }

    public function update(Request $request, $id) {
        try {
            $tag = Tag::findOrFail($id);
            $tag->update($request->all());
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
            Tag::findOrFail($id)->delete();
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
