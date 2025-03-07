<?php
namespace App\Controllers\Master;
use App\Controllers\BaseController;
use App\Models\Master\MasterModel;

class MasterController extends BaseController
{
    protected $helpers = ["form","url"];
    
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
        $db = db_connect();
        $this->MasterModel = new MasterModel($db);
    }
   
    
    /************ Department - Nikita Nanaware ****************/
     
    public function Department()
    {
        $data['all_list'] = $this->MasterModel->getAllData('tbl_departments');
        return view('Master/Department/view',$data);
    }
    public function AddDepartment()
    {
        return view('Master/Department/add');
    }
    public function store_dept()
    {
        $session = session();
        $db = db_connect('default');
        $editId     = !empty($_POST['id']) ? $_POST['id'] : '';
        $validation = \Config\Services::validation();
        $validationRules = 
        [
            'name'      => 'required',
            'direction' => 'required'
        ];
        $validationMessages = 
        [
                'name'      => ['required' => 'कृपया शाखेचे नाव प्रविष्ट करा.'],
                'direction' => ['required' => 'कृपया दिशा निवडा.']
        ];
        if ($this->validate($validationRules, $validationMessages))
        {
            $deptData = $_POST;
            $builder = $db->table('tbl_departments');
                
            if($editId=='')
            {
                $builder->insert($deptData);
            }else
            {
                $builder->where('id', $editId)->update($deptData);
            }
            return $this->response->redirect(site_url('/Department'));
            
        }else
        {
            if(empty($editId))
            {
                return view('Master/Department/add', ['validation' => $validation]);
            }else {
                $list = $this->MasterModel->getData('tbl_departments',$editId);
                return view('Master/Department/edit', ['validation' => $validation,'list' => $list]);
            }
        }
    }
    public function updateDept()
    {
        $id = base64_decode($_GET['ID']);
        $data['list'] = $this->MasterModel->getData('tbl_departments',$id);
        return view('Master/Department/edit',$data);
    }
    public function deleteRec()
    {
        $id     = $_POST['id'];
        $table  = $_POST['table'];
        $db = db_connect('default');
        $dDate = array('isdeleted'	=> 1);
        $builder = $db->table($table);
        $builder->where('id', $id)->update($dDate);
        return true;
    }
    
    
    /************ Roles - Niranjan Kakatkar ****************/
     
    public function Role()
    {
        $data['all_list'] = $this->MasterModel->getAllData('tbl_roles');
        return view('Master/Role/view',$data);
    }
    public function AddRole()
    {
        return view('Master/Role/add');
    }
    public function store_role()
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
                'name'      => ['required' => 'कृपया भूमिकेचे नाव प्रविष्ट करा.']
        ];
        if ($this->validate($validationRules, $validationMessages))
        {
            $roleData = $_POST;
            $builder = $db->table('tbl_roles');
                
            if($editId=='')
            {
                $builder->insert($roleData);
            }else
            {
                $builder->where('id', $editId)->update($roleData);
            }
            return $this->response->redirect(site_url('/Role'));
            
        }else
        {
            if(empty($editId))
            {
                return view('Master/Role/add', ['validation' => $validation]);
            }else {
                $list = $this->MasterModel->getData('tbl_roles',$editId);
                return view('Master/Role/edit', ['validation' => $validation,'list' => $list]);
            }
        }
    }
    public function updateRole()
    {
        $id = base64_decode($_GET['ID']);
        $data['list'] = $this->MasterModel->getData('tbl_roles',$id);
        return view('Master/Role/edit',$data);
    }
    
    
    
    
     /************ Designation - Niranjan Kakatkar ****************/
     
    public function Designation()
    {
        $data['all_list'] = $this->MasterModel->getAllData('tbl_designations');
        return view('Master/Designation/view',$data);
    }
    public function AddDesignation()
    {
        return view('Master/Designation/add');
    }
    public function store_desig()
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
                'name'      => ['required' => 'कृपया आधिकार्याचे नाव प्रविष्ट करा.']
        ];
        if ($this->validate($validationRules, $validationMessages))
        {
            $desigData = $_POST;
            $builder = $db->table('tbl_designations');
                
            if($editId=='')
            {
                $builder->insert($desigData);
            }else
            {
                $builder->where('id', $editId)->update($desigData);
            }
            return $this->response->redirect(site_url('/Designation'));
            
        }else
        {
            if(empty($editId))
            {
                return view('Master/Designation/add', ['validation' => $validation]);
            }else {
                $list = $this->MasterModel->getData('tbl_designations',$editId);
                return view('Master/Designation/edit', ['validation' => $validation,'list' => $list]);
            }
        }
    }
    public function updateDesig()
    {
        $id = base64_decode($_GET['ID']);
        $data['list'] = $this->MasterModel->getData('tbl_designations',$id);
        return view('Master/Designation/edit',$data);
    }
    
    /************ Rejection Reason - Nikita Nanaware ****************/
    
    
    public function RejectionReason()
    {
        $data['all_list'] = $this->MasterModel->getAllData('tbl_rejection_reason');
        return view('Master/RejectionReason/view',$data);
    }
    public function AddRejectReason()
    {
        return view('Master/RejectionReason/add');
    }
    public function store_rejection_reason()
    {
        $session = session();
        $db = db_connect('default');
        $editId     = !empty($_POST['id']) ? $_POST['id'] : '';
        $validation = \Config\Services::validation();
        $validationRules = 
        [
            'reason'      => 'required'
        ];
        $validationMessages = 
        [
            'reason'      => ['required' => 'कृपया नकाराचे कारण प्रविष्ट करा.']
        ];
        if ($this->validate($validationRules, $validationMessages))
        {
            $reasonData = $_POST;
            $builder = $db->table('tbl_rejection_reason');
                
            if($editId=='')
            {
                $builder->insert($reasonData);
            }else
            {
                $builder->where('id', $editId)->update($reasonData);
            }
            return $this->response->redirect(site_url('/RejectionReason'));
            
        }else
        {
            if(empty($editId))
            {
                return view('Master/RejectionReason/add', ['validation' => $validation]);
            }else {
                $list = $this->MasterModel->getData('tbl_rejection_reason',$editId);
                return view('Master/RejectionReason/edit', ['validation' => $validation,'list' => $list]);
            }
        }
    }
    public function updateRejectionReason()
    {
        $id = base64_decode($_GET['ID']);
        $data['list'] = $this->MasterModel->getData('tbl_rejection_reason',$id);
        return view('Master/RejectionReason/edit',$data);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   
    /************ Owner Suggestion Dropdown : Tenant Form - Sagar Chavan****************/
    
    public function suggestionsList()
    {
        $MasterModel = new MasterModel();
        $ownerName  = $_POST['name'];
        $table      = $_POST['table'];
        $field      = $_POST['field'];
        $searchType = !empty($_POST['searchType']) ? $_POST['searchType'] : '';
        $owners = $MasterModel->suggestionsList($ownerName,$table,$field);
        foreach($owners as $row){ ?>
        <li style="list-style: none;" class="sercdata" onclick="searchadd<?=$searchType;?>('<?php echo $row['name'];?>','<?php echo $row['id'];?>')">
            <?php echo  $row['name']; ?></li>
        <?php }
    }
 
}
