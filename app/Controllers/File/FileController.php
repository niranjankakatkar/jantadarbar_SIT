<?php
namespace App\Controllers\File;
use App\Controllers\BaseController;
use App\Models\File\FileModel;
use App\Models\Master\MasterModel;

class FileController extends BaseController
{
    protected $helpers = ["form","url"];
    
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
        $db = db_connect();
        $this->MasterModel = new MasterModel($db);
    }
   
    
    /************ File - Nikita Nanaware ****************/
     
    public function File()
    {
        $data['all_list'] = $this->MasterModel->getAllData('tbl_file');
        return view('File/view',$data);
    }
    public function AddFile()
    {
        $data['dept_list'] = $this->MasterModel->getAllData('tbl_departments');
        return view('File/add',$data);
    }
    public function store_file()
    {
        $session = session();
        $db = db_connect('default');
        $editId     = !empty($_POST['id']) ? $_POST['id'] : '';
        $validation = \Config\Services::validation();
        $validationRules = 
        [
            'file_no'      => 'required',
            'file_name'    => 'required',
            'inward_no'    => 'required',
            'cover_page_photo'   => 'required'
        ];
        $validationMessages = 
        [
            'file_no'   => ['required' => 'कृपया फाईल नंबर प्रविष्ट करा.'],
            'file_name' => ['required' => 'कृपया फाईलचे नाव प्रविष्ट करा.'],
            'inward_no' => ['required' => 'कृपया इनवॉर्ड नंबर प्रविष्ट करा.'],
            'cover_page_photo'=> ['required' => 'कृपया कव्हर पेज फोटो अपलोड करा.']
        ];
        if ($this->validate($validationRules, $validationMessages))
        {
            $fileData = $_POST;
            $builder = $db->table('tbl_file');
                
            if($editId=='')
            {
                $builder->insert($fileData);
            }else
            {
                $builder->where('id', $editId)->update($fileData);
            }
            return $this->response->redirect(site_url('/File'));
            
        }else
        {
            if(empty($editId))
            {
                return view('File/add', ['validation' => $validation]);
            }else {
                $list = $this->MasterModel->getData('tbl_fileg',$editId);
                return view('File/edit', ['validation' => $validation,'list' => $list]);
            }
        }
    }
    public function updateFile()
    {
        $id = base64_decode($_GET['ID']);
        $data['list'] = $this->MasterModel->getData('tbl_file',$id);
        return view('File/edit',$data);
    }
    
 
}