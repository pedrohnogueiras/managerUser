<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUsuario;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function viewIndex() {
        return view('usuario.index');
    }

    public function viewList(){

        if(  $usuarios = $this->getAll() ){
            return view('usuario.list',[
                'usuarios' => $usuarios
            ]);
        }else {
            return view('usuario.list',['usuarios' => [] ])
                    ->with('message', 'Nenhum usuário cadastrado');
        }
    }
    
    public function viewInsert($id = null){
        return view('usuario.insert');
    }

        
    public function viewEdit($id = null){

        if( $usuario = Usuario::find($id) ){       
            return view('usuario.edit', ['usuario' => $usuario]);
        }
        return view('usuario.edit', ['usuario' => [] ]);
    }

    public function getAll(){
        $usuarios = Usuario::get();
        return $usuarios;
    }

    public function insert(StoreUpdateUsuario $request){
        
        Usuario::create($request->all());

        return redirect()
        ->route('usuario.index')
        ->with('message', 'Usuario cadastrado com Sucesso');
    }

    public function update($id, StoreUpdateUsuario $request){

        if ( $usuario = Usuario::find($id) )  {
            
            $usuario->update($request->all());
            return redirect()
                ->route('usuario.index')
                ->with('message', 'Usuario atualizado com Sucesso');
        }     

        return redirect()
        ->route('usuario.index')
        ->with('message', 'Usuário não localizado');

    }

    public function delete($id){
        if( !$usuario = Usuario::find($id) ){
            return redirect()->route('usuario.index');
        }
        
        $usuario->delete();
        return redirect()
                ->route('usuario.index')
                ->with('message', 'Usuário Deletado com Sucesso');
    }

    public function details($id){
        if( $usuario = Usuario::find($id) ){
            return view('usuario.details',[
                'usuario' => $usuario
            ]);
        }

        return redirect()
                ->route('usuario.index')
                ->with('message', 'Usuário não localizado');
    }

    public function searchByNameOrDocumet(Request $request) {

            $onlyNumber = '/^[0-9]+$/';
            $data = $request->nome_documento;

            if( !empty($data) ){
                if( (preg_match($onlyNumber,$data)) ){
                    $search = ['documento' => $data];
                }else {
                    $search = ['nome' => $data];
                }
                    
            
                if( $usuarios = Usuario::where($search)->get()){
                    return view('usuario.list',[
                        'usuarios' => $usuarios
                    ]);
                }

                return redirect()
                    ->route('usuario.listar')
                    ->with('message', 'Usuário não localizado');

            }

            if( $usuarios = Usuario::get()){
                return view('usuario.list',[
                    'usuarios' => $usuarios
                ]);
            }

    }
}
