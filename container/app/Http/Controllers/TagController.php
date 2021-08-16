<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tags;

class TagController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $tags = Tags::all();
        return view('tags.list', compact('tags'));
    }

    public function create() {
        return view('tags.create');
    }

    public function store(Request $request) {
        try {
            Tags::create($request->all());

            \Session::flash('flash_message', [
                'msg'   => 'Criado com sucesso!',
                'class' => 'alert-success'
            ]);
        } catch(PDOException $e) {
            \Session::flash('flash_message', [
                'msg'   => 'Ops, algo inesperado aconteceu...',
                'class' => 'alert-danger'
            ]);
        }
        return redirect()->route('tags.list');
    }

    public function show($id) {
        $tag = Tags::findOrFail($id);
        if($tag) {
            return view('tags.show', compact('tag'));
        } else {
            return Http::response('Tag não encontrada', 404);
        }
    }

    public function edit($id) {
        $tag = Tags::findOrFail($id);
        if($tag) {
            return view('tags.edit', compact('tag'));
        } else {
            return Http::response('Tag não encontrada', 404);
        }
    }

    public function update(Request $request, $id) {
        try {
            $tag = Tags::findOrFail($id);
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
        return redirect()->route('tags.list');
    }

    public function destroy($id) {
        try {
            Tags::findOrFail($id)->delete();
            return(['deleted' => true]);

        } catch(PDOException $e) {
            return Http::response('Erro - Não foi possível excluir', 500);
        }
    }
}
