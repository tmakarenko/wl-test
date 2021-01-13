<?php
namespace App\Controllers;

class HomeController
{

    public function test(){
        \App\Services\ViewService::$twig->display('index.html.twig', []);
    }

}