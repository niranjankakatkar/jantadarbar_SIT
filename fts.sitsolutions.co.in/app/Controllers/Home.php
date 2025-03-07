<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $helpers = ["form","url"];
    
    public function __construct() {
        $this->session = \Config\Services::session();
        $this->session->start();
        $db = db_connect();
    }
    
    public function index()
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
