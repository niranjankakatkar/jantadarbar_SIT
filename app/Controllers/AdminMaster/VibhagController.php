<?php
namespace App\Controllers\Master;
use App\Controllers\BaseController;
use App\Models\Master\MasterModel;

class VibhagController extends BaseController
{
    protected $helpers = ["form","url"];
    
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
        $db = db_connect();
        $this->MasterModel = new MasterModel($db);
    }
   
    
    /************ Vibhag - Nikita Nanaware ****************/
     
    public function Vibhag()
    {
        $data['all_list'] = $this->MasterModel->getAllData('tbl_vibhag');
        return view('Master/Vibhag/view',$data);
    }
    public function AddVibhag()
    {
        return view('Master/Vibhag/add');
    }
    public function store_vibhag()
    {
        $session = session();
        $db = db_connect('default');
        $editId     = !empty($_POST['id']) ? $_POST['id'] : '';
        $validation = \Config\Services::validation();
        $validationRules = 
        [
            'name'      => 'required'
        ];
        $validationMessages = 
        [
            'name'      => ['required' => 'कृपया विभागाचे नाव प्रविष्ट करा.'],
        ];
        if ($this->validate($validationRules, $validationMessages))
        {
            $vibhagData = $_POST;
            $builder = $db->table('tbl_vibhag');
                
            if($editId=='')
            {
                $builder->insert($vibhagData);
            }else
            {
                $builder->where('id', $editId)->update($vibhagData);
            }
            return $this->response->redirect(site_url('/Vibhag'));
            
        }else
        {
            if(empty($editId))
            {
                return view('Master/Vibhag/add', ['validation' => $validation]);
            }else {
                $list = $this->MasterModel->getData('tbl_vibhag',$editId);
                return view('Master/Vibhag/edit', ['validation' => $validation,'list' => $list]);
            }
        }
    }
    public function updateVibhag()
    {
        $id = base64_decode($_GET['ID']);
        $data['list'] = $this->MasterModel->getData('tbl_vibhag',$id);
        return view('Master/Vibhag/edit',$data);
    }
    
 
}