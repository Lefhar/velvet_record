<?php

namespace Controller;

use Exception;
use Models\HeaderModel;
use Models\RegisterModel;
use Models\UsersModel;

class Register
{
    /**
     * @throws Exception
     */
    public function index()
    {

        $class = new UsersModel();
        $user = $class->getUser();
        if (!empty($user)) {
            header('Location: index.php');
        }
        $head = new HeaderModel();
        $header["menu"] = $head->catHead();

        $class = new RegisterModel();
        $data = $class->register();

        include(baseDir . 'views/header.php');
        include(baseDir . 'views/register.php');
        include(baseDir . 'views/footer.php');
    }
}