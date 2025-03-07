<?php
namespace App\Controllers\Login;
use App\Controllers\BaseController;
use App\Models\Login\LoginModel;

class LoginController extends BaseController
{
    protected $helpers = ["form","url"];
    
    public function __construct() {

        $this->session = \Config\Services::session();
        $this->session->start();
        $db = db_connect();
        $this->LoginModel = new LoginModel($db);

        //print_r($db);
        
    }

    // public function index()
    // {
     
    //     $session = session();
    //     $session->set(array('oldUsernmsg' => ''));
    //     $session->destroy();
        
    //     return view('Frontend/login');
    // }

    public function showpassword()
    {
        $LoginModel = new LoginModel();
        $phoneNo    = !empty($_POST['phone_no']) ? $_POST['phone_no'] : '';
        $data['showpassword']  = $LoginModel->showpassword($phoneNo);
		return view('Frontend/showpassword',$data);
    }

    public function signIn()
    {
        
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];
        if($this->validate($rules))
        {
            $result = $this->LoginModel->checkUsernamePass();
            $result1 = $this->LoginModel->getTitle();
            //print_r($result);die;
           if(!empty($result))
           {
               
            
                $currentYs = $this->LoginModel->getCurrentYear();
                $currentY = $currentYs['year'];
            
                $session = session();
                $id         = $result['id'];
                $username   = $result['username'];
                $name       = $result['name'];
                $user_type  = $result['user_type'];
                session()->set('id',$id);
                session()->set('username',$username);
                session()->set('name',$name);
                session()->set('user_type',$user_type);
                session()->set('Current_Year',$currentY);
                $this->session->set('username',$username);
                $this->session->set('name',$name);
                $this->session->set('user_type',$user_type);
                $this->session->set('Current_Year',$currentY);
             
  
                 if($user_type == 1)
                {
                    return $this->response->redirect(site_url('adminDashboard')); 
                }
                else if($user_type == 2)
                {
                    return $this->response->redirect(site_url('clerkDashboard')); 
                }
                else if($user_type == 3)
                {
                    return $this->response->redirect(site_url('atpDashboard')); 
                }
                else{
                    //session distroy
                    return $this->response->redirect(site_url('/')); 
                }
                
           }else
           {
               $invalid = 'Provide valid credentials for login.';
               session()->set('invalidLoginD',$invalid);
               $this->session->set('invalidLoginD',$invalid);
              return $this->response->redirect(site_url('/')); 
           }      
          
        }else
        {
            $data['validation'] = $this->validator;
            echo view('login',$data);
        }
    }
   
    public function distroySession()
    {
        $session = session();
        $session->set(array('pageName' => '','transactionId' => '','amount' => '','fullName' => ''));
        //$session->destroy(); 
    }
    
}
