<?php
namespace App\Controllers\Deed;
use App\Controllers\BaseController;
use App\Models\Deed\DeedModel;
use App\Models\Development\DevelopmentModel;

class DeedController extends BaseController
{
    protected $helpers = ["form","url"];
    
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
        $db = db_connect();
        $this->DeedModel = new DeedModel($db);
    }
    
    public function ConveyanceForm()
    {
        $DevModel     = new DevelopmentModel();
        $data['Zone'] = $DevModel->getZone();
        return view('Deed/ConveyanceForm',$data);
    }
    
    public function AssignmentForm()
    {
        $DevModel     = new DevelopmentModel();
        $data['Zone'] = $DevModel->getZone();
        return view('Deed/AssignmentForm',$data);
    }
    
}
