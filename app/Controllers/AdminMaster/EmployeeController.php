<?php
namespace App\Controllers\Master;
use App\Controllers\BaseController;
use App\Models\Master\MasterModel;

class EmployeeController extends BaseController
{
    protected $helpers = ["form","url"];
    
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
        $db = db_connect();
        $this->MasterModel = new MasterModel($db);
    }
   
    
    /************ Employee - Sagar ****************/
     
    public function Employee()
    {
        $data['all_list'] = $this->MasterModel->getAllData('tbl_employees');
        return view('Master/Employee/view',$data);
    }
    public function AddEmployee()
    {
        $data['dept_list']      = $this->MasterModel->getAllData('tbl_departments');
        $data['desi_list']      = $this->MasterModel->getAllData('tbl_designations');
        $data['vibhag_list']    = $this->MasterModel->getAllData('tbl_vibhag');
        return view('Master/Employee/add',$data);
    }
    public function store_emp()
    {
        $session = session();
        $db = db_connect('default');
        $editId     = !empty($_POST['id']) ? $_POST['id'] : '';
        $validation = \Config\Services::validation();
        $validationRules = 
        [
            'name'          => 'required',
            'phone_no'      => 'required',
            'email'         => 'required',
            'department_id' => 'required',
            'designation_id' => 'required',
            'vibhag_id'     => 'required',
            'direction'     => 'required'
        ];
        $validationMessages = 
        [
                'name'          => ['required' => 'कृपया कर्मचाराचे नाव प्रविष्ट करा.'],
                'phone_no'      => ['required' => 'कृपया फोन नंबर प्रविष्ट करा.'],
                'email'         => ['required' => 'कृपया ई-मेल प्रविष्ट करा.'],
                'department_id' => ['required' => 'कृपया शाखा निवडा करा.'],
                'designation_id' => ['required' => 'कृपया आधिकारी निवडा करा.'],
                'vibhag_id'     => ['required' => 'कृपया विभाग निवडा करा.'],
                'direction'     => ['required' => 'कृपया दिशा निवडा.']
        ];
        if ($this->validate($validationRules, $validationMessages))
        {
            $deptData = $_POST;
            $builder = $db->table('tbl_employees');
                
            if($editId=='')
            {
                $builder->insert($deptData);
            }else
            {
                $builder->where('id', $editId)->update($deptData);
            }
            return $this->response->redirect(site_url('/Employee'));
            
        }else
        {
            if(empty($editId))
            {
                $dept_list      = $this->MasterModel->getAllData('tbl_departments');
                $desi_list      = $this->MasterModel->getAllData('tbl_designations');
                $vibhag_list    = $this->MasterModel->getAllData('tbl_vibhag');
                return view('Master/Employee/add', ['validation' => $validation,'dept_list' => $dept_list,'desi_list' => $desi_list,'vibhag_list' => $vibhag_list]);
            }else {
                $list = $this->MasterModel->getData('tbl_employees',$editId);
                $dept_list      = $this->MasterModel->getAllData('tbl_departments');
                $desi_list      = $this->MasterModel->getAllData('tbl_designations');
                $vibhag_list    = $this->MasterModel->getAllData('tbl_vibhag');
                return view('Master/Employee/edit', ['validation' => $validation,'list' => $list,'dept_list' => $dept_list,'desi_list' => $desi_list,'vibhag_list' => $vibhag_list]);
            }
        }
    }
    public function updateEmployee()
    {
        $id = base64_decode($_GET['ID']);
        $data['list'] = $this->MasterModel->getData('tbl_employees',$id);
        return view('Master/Employee/edit',$data);
    }
    
 
}
