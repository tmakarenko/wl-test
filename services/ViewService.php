<?php


namespace App\Services;
use \Smarty;

class ViewService
{
    static $smarty;
    static $twig;


    public function __construct()
    {
        return false;
    }

    public static function launch(){
        self::$smarty = new Smarty();


        self::$smarty->setTemplateDir('views/templates/');
        self::$smarty->setCompileDir('views/templates_c/');

    }

    public static function launchTwig(){
        $loader = new \Twig\Loader\FilesystemLoader('views/twig/tpl/');
        self::$twig = new \Twig\Environment($loader, [
            'cache' => 'views/twig/cache/',
        ]);

    }


}