<?php
namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;
use App\Models\Master\MasterModel;

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
      $data['all_files'] = $this->MasterModel->getAllData('tbl_file');
      $data['pen_files'] = $this->MasterModel->getWhereData('tbl_file','add_ceo_status',1);
      $data['apr_files'] = $this->MasterModel->getWhereData('tbl_file','add_ceo_status',3);
      $data['rej_files'] = $this->MasterModel->getWhereData('tbl_file','add_ceo_status',4);
      return view('Dashboard/adminDashboard',$data);
    }


}