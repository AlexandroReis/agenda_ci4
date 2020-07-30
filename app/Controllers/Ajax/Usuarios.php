<?php namespace App\Controllers\Ajax;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class Usuarios extends Controller
{
  public function getDados(){
    $usuarioModel = new UsuarioModel();

    //echo '<pre>';
    
        $usuarioModel -> select("id,nome,sobrenome,email,endereco");
       
        $usuarios = $usuarioModel -> findAll();

        foreach($usuarios as $usuario){

            $result[] = [

                $usuario['id'],
                $usuario['nome'],
                $usuario['sobrenome'],
                $usuario['email'],
                $usuario['endereco']


            ];

        }


        $usuarios =[
            'data'=>$result
            ];

    //print_r(json_encode($usuarios));
    echo json_encode($usuarios);

    }

}