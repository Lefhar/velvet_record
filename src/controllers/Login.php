<?php

namespace Controller;

use Exception;
use Models\HeaderModel;
use Models\UsersModel;

class Login
{
    /**
     * @throws Exception
     */
    public function index()
    {
        $head = new headerModel();
        $header["menu"] = $head->catHead();

        $class = new UsersModel();
        $data = $class->sign();

        $user = $class->getUser();
        if (!empty($user)) {
            header('Location: index.php');
        }
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/login.php');
        include(baseDir . 'views/footer.php');
    }
}