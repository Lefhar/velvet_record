<?php

namespace Controller;

use Models\headerModel;
use Models\registerModel;
use Models\usersModel;

class Register
{
    public function index()
    {

        $class = new usersModel();
        $user = $class->getUser();
        if (!empty($user)) {
            header('Location: index.php');
        }
        $head = new headerModel();
        $header["menu"] = $head->catHead();

        $class = new registerModel();
        $data = $class->register();

        include(baseDir . 'views/header.php');
        include(baseDir . 'views/register.php');
        include(baseDir . 'views/footer.php');
    }
}