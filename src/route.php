<?php

namespace Src;


use Controller\Addform;
use Controller\Addscript;
use Controller\Categorie;
use Controller\Deleteform;
use Controller\Deletescript;
use Controller\Details;
use Controller\Erreur404;
use Controller\Home;
use Controller\Login;
use Controller\Logout;
use Controller\Register;
use Controller\Updateform;
use Controller\Updatescript;
use Exception;

class route
{
    /**
     * @brief Charge la route par default
     * @return void
     * @throws Exception
     */
    public function index()
    {

        if(!empty($_GET['page'])) {


            switch ($_GET['page']) {
                case 'add_form';
                    $controller = new Addform();
                    break;

                case 'add_script';
                    $controller = new Addscript();
                    break;
                case 'categorie';
                    $controller = new Categorie();
                    break;
                case 'delete_form';
                    $controller = new Deleteform();
                    break;
                case 'delete_script';
                    $controller = new Deletescript();
                    break;
                case 'details';
                    $controller = new Details();
                    break;
                case 'login';
                    $controller = new Login();
                    break;
                case 'logout';
                    $controller = new Logout();
                    break;
                case 'register';
                    $controller = new Register();
                    break;
                case 'update_form';
                    $controller = new Updateform();
                    break;
                case 'update_script';
                    $controller = new Updatescript();
                    break;
                case 'home';
                    $controller = new Home();
                    break;
                default:
                    $controller = new Erreur404();


            }
        } else {

            $controller = new Home();
        }
        $controller->index();
    }
}