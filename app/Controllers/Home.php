<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $helpers = ["form","url"];
    
    public function index(): string
    {
        return view('login');
    }

    
    public function logout()
    {
        $session = session();
        $session->set(array('id' => '','username' => '','name' => '','user_type' => ''));
        $session->destroy();
        return $this->response->redirect(site_url('/'));
    }
}
