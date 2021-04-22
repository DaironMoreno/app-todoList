<?php

namespace App\Http\controllers\usuarios;

use App\Http\controllers\baseController;
use App\models\userModel;
use \Sirius\Validation\Validator;

class usuariosController extends baseController
{
    
    public function postRegistro($request)
    {

        $errores = [];
        $registro = false;
        $validate = new validator();
        $validate->add([
            "email" => "required | email",
            "pass" => "required | minlength(8)"
        ]);
            $data = $request->getParsedBody();
        if ($validate->validate($request->getParsedBody())) {

            $user = new userModel();
            $user->email    = $data['email'];
            $user->password = password_hash($data['pass'],PASSWORD_DEFAULT);
            $user->save();
            $registro = true;
        } else {
            $errores = $validate->getMessages();
        }
        return $this->renderHTML("formRegistro.twig", [
            "errores" => $errores,
            "registro" => $registro
        ]);
    }
}
