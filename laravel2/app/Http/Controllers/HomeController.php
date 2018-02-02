<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use DB;
use Form;

class HomeController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $users   = User::all();             
        return View('home', compact('users'));
    }
       
   public function editar(Request $request, $id) {
        User::find($id)->update($request->all());       
        //print_r($request->all());
        //die;
        return redirect('home')->with('status', 'Usuário Atualizado com sucesso!');
    }

    public function excluir($id) {
        $users = User::find($id);
        $users->delete();
        return redirect('home')->with('status', 'Usuário excluído com sucesso!');
    }


}
