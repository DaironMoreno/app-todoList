<?php

namespace App\Http\controllers;
use App\Http\controllers\baseController;


class indexController extends baseController
{
    public function getIndex()
    {
        
        return $this->renderHTML("index.twig");
    }
    public function getRegistro()
    {
        return $this->renderHTML("formRegistro.twig");
    }

} 