<?php
namespace App\Controllers\Development;
use App\Controllers\BaseController;
use App\Models\Development\DevelopmentModel;

class DevelopmentController extends BaseController
{
    protected $helpers = ["form","url"];
    
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
        $db = db_connect();
        $this->DevelopmentModel = new DevelopmentModel($db);
    }
    
   /************ Tenant Form - Nikita Nanaware **************/
    public function TenantForm()
    {
        $DevModel     = new DevelopmentModel();
        $data['Zone'] = $DevModel->getZone();
        return view('Development/TenantForm',$data);
    }
    
    
    /************ Society Form - Nikita Nanaware **************/
    public function SocietyForm()
    {
        $session = session();
        session()->remove('societymsg');
        $DevModel     = new DevelopmentModel();
        $data['Zone'] = $DevModel->getZone();
        return view('Development/SocietyForm',$data);
    }
    
    public function create_society_form()
    {
        $session = session();
        $db = db_connect('default');
        
        $validation = \Config\Services::validation();
        $validationRules = [
            'society'     => 'required'
        ];
        
        $validationMessages = [
            'society' => [
                'required'    => 'society number is required.'
            ]
        ];

        if ($this->validate($validationRules, $validationMessages))
        { 
            $societymsg  = "Society successfully added.";
            $SocietyData = $_POST;
            $builder = $db->table('tbl_society_form');
            $builder->insert($SocietyData);
            session()->set('societymsg',$societymsg);    
            return $this->response->redirect(base_url('SocietyForm')); 
        }else
        {
            $DevModel     = new DevelopmentModel();
            $data['Zone'] = $DevModel->getZone();
            $data['validation'] = $validation;
            return view('Development/SocietyForm',$data);
        }
        
    }
    
}
