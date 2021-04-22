<?php
namespace App\Http\controllers;
use Laminas\Diactoros\Response\HtmlResponse;

Class baseController 
{
    protected $templateEngine;

    public function __construct()
    {
      $loader = new \Twig\Loader\FilesystemLoader('../views');
      $SesionID = new \Twig\TwigFunction('SesionID', function () {
        $userData = null;
        if(isset($_SESSION['userID']))
        {
          $userData   = $_SESSION['userID'];
        }
        return $userData;
      });  
     

          $this->templateEngine = new \Twig\Environment($loader, [
          'cache' => 'false',
          'debug' => 'true'
      ]);
      $this->templateEngine->addFunction($SesionID);
      $this->templateEngine->addExtension(new \Twig\Extension\DebugExtension());
    }
    public function renderHTML($archivo,$data = [])
    {
        return new HtmlResponse($this->templateEngine->render($archivo,$data));
    }
  }