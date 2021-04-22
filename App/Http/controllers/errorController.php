<?php

namespace App\Http\controllers;

class ErrorController extends baseController
{
    public function getIndex()
    {
       
        return $this->renderHTML("error.twig");
    }

} 