<?php

namespace App\Http\controllers\usuarios;
use App\Http\controllers\baseController;
use App\models\tareaModel;
use App\models\usuarioModel;
use \Sirius\Validation\Validator;
use \Laminas\Diactoros\ServerRequest;
use Laminas\Diactoros\Response\RedirectResponse;

class tareaController extends baseController
{
    public function getIndex()
    {

        $tareas = tareaModel::Join('usuarios','usuarios.id_usuario','=','tareas.id_usuario')
        ->select('tareas.id_tarea','tareas.titulo','tareas.contenido','tareas.estado','tareas.updated_at','usuarios.email')
        ->where('usuarios.id_usuario','=',$_SESSION['userID'])
        ->get();
        
     
        return $this->renderHTML("tareas/tarea.twig",[
           "tareas" =>  $tareas 
        ]);
    }


    public function postTarea($request)
    {
        $registro = false;
        $validate = new Validator();
        $validate->add([
            'titulo' => 'required',
            'contenido' => 'required'
        ]);
        $data = $request->getParsedBody();
        if($validate->validate($request->getParsedBody()))
        {
            $tareas = new tareaModel(
            [
                'titulo' => $data['titulo'],
                'contenido' => $data['contenido'],
                'id_usuario' => $_SESSION['userID']    
            ]);

            $registro = true;
            $tareas->save();    

        }else{
            
        }    

            return new RedirectResponse('/usuarios');
        
    }
    public function geteditar($request)
    {
        $parametro = $request->getqueryparams();

            $tarea = tareaModel::where('id_tarea',$parametro['id_tarea'])
                ->update([
                    "estado" => "completa"
                ]);
            
            return new RedirectResponse('/usuarios'); 
    }
    public function eliminar($request)
    { 
        $parametro = $request->getqueryparams();

        tareaModel::where('id_tarea',$parametro['id_tarea'])->delete();
        return new RedirectResponse('/usuarios'); 
        
    }
} 