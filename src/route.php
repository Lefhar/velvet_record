<?php

namespace Src;


use Controller\addform;
use Controller\addscript;
use Controller\categorie;
use Controller\deleteform;
use Controller\deletescript;
use Controller\details;
use Controller\erreur404;
use Controller\home;
use Controller\login;
use Controller\logout;
use Controller\Register;
use Controller\updateform;
use Controller\updatescript;
use Exception;

class route
{
    /**
     * @brief Charge la include\route par defaut
     * @return void
     * @throws Exception
     */
    public function index()
    {

        if (!empty($_GET['page'])) {


            switch ($_GET['page']) {
                case 'add_form';
                    $controller = new addform();
                    break;

                case 'add_script';
                    $controller = new addscript();
                    break;
                case 'categorie';
                    $controller = new categorie();
                    break;
                case 'delete_form';
                    $controller = new deleteform();
                    break;
                case 'delete_script';
                    $controller = new deletescript();
                    break;
                case 'details';
                    $controller = new details();
                    break;
                case 'login';
                    $controller = new login();
                    break;
                case 'logout';
                    $controller = new logout();
                    break;
                case 'register';
                    $controller = new Register();
                    break;
                case 'update_form';
                    $controller = new updateform();
                    break;
                case 'update_script';
                    $controller = new updatescript();
                    break;
                case 'home';
                    $controller = new home();
                    break;
                default:
                    $controller = new erreur404();


            }
            $controller->index();
        } else {

            $controller = new home();
            $controller->index();
        }
    }
}