<?php

namespace App\Controllers;

use App\Http\Request;
use App\Http\Session;

abstract class BaseController
{

    protected $request;
    protected $session;

    public function __construct()
    {
        $this->request = new Request();
        $this->session = Session::getInstance();
    }

    public function loadView($name, $data = [])
    {
        $view = VIEW_PATH . '/' . $name . '.php';

        if (!$view) {
            throw new Exeception($view . ' not found');
        }

        ob_start();
        extract($data);
        require_once VIEW_PATH . '/' . $name . '.php';
        $content = ob_get_contents();
        ob_clean();

        echo $content;
    }

    public function redirect($to)
    {
        header('Location:' . $to);
        exit;
    }

    protected function checkLogin()
    {
        $userId = $this->session->get(USER_SESSION_KEY_NAME);

        if (!$userId) {
            $this->session->setFlash('info', 'you must be logged in to continue');
            $this->redirect('/auth/login');
            exit;
        }
    }

}
