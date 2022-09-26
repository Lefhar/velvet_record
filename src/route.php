<?php

namespace Src;


use Controller\add_form;
use Controller\add_script;
use Controller\categorie;
use Controller\delete_form;
use Controller\delete_script;
use Controller\details;
use Controller\erreur404;
use Controller\home;
use Controller\login;
use Controller\logout;
use Controller\Signup;
use Controller\update_form;
use Controller\update_script;
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
                    $controller = new add_form();
                    break;

                case 'add_script';
                    $controller = new add_script();
                    break;
                case 'categorie';
                    $controller = new categorie();
                    break;
                case 'delete_form';
                    $controller = new delete_form();
                    break;
                case 'delete_script';
                    $controller = new delete_script();
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
                    $controller = new Signup();
                    break;
                case 'update_form';
                    $controller = new update_form();
                    break;
                case 'update_script';
                    $controller = new update_script();
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