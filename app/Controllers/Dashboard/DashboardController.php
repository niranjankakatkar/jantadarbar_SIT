<?php
namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;
use App\Models\AdminMaster\MasterModel;

class DashboardController extends BaseController
{
    protected $helpers = ["form","url"];
    
    public function __construct() {
                
        $this->session = \Config\Services::session();
        $this->session->start();
        $db = db_connect();
        $this->MasterModel = new MasterModel($db);
        
    }
    
    public function adminDashboard()
    {
     return view('Dashboard/adminDashboard',);
    }


}