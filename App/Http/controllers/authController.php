<?php

namespace App\Http\controllers;
use App\models\userModel;
use \Sirius\Validation\Validator;
use Laminas\Diactoros\Response\RedirectResponse;

class authController extends baseController
{
    public function postlogin($request)
    {
        
        $errores = [];
        $result = false;
        $validate = new validator();
        $validate->add([
            "email" => "required | email",
            "pass" => "required"
        ]);
        $body = $request->getParsedBody();
        if($validate->validate($request->getParsedBody()))
        {
            $email = $body['email'];
            $pass  = $body['pass'];
            
            $user = userModel::where('email',$email)->first();
            if($user)
            {
                if(password_verify($pass, $user->password))
                {
                    $_SESSION['userID'] = $user->id_usuario;
                    return new RedirectResponse('/usuarios');                 
                }else
                {
                    
                    $errores = $validate->addMessage('email', 'Email o Pass Incorrectos');
                }
            }else{
                $errores = $validate->addMessage('email', 'Email o Pass Incorrectos');

            }
            $errores = $validate->getMessages();

            return $this->renderHTML("index.twig",
            [
                "errores" => $errores
            ]);
        }
       


    }

    public function getLogaut()
    {
        
        unset($_SESSION['userID']);
        session_destroy($_SESSION['userID']);
        return new RedirectResponse('/');
       
    }
}
