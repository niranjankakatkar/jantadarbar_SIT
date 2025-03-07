<?php 
namespace App\Models\Login;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;
 
class LoginModel extends Model
{
	public function checkUsernamePass() {
	    $username = $_POST['username'];
	    $password = $_POST['password'];
	    $db = \Config\Database::connect();
	    $LoginName = $db->table('login_master');
	    $data_array = array('username' => $username,'password' => $password,'isdeleted' => '0');
       return $loginD = $LoginName->select('*')
		    ->where($data_array)
		    ->get()->getRowArray();

	}
	public function checkSubheOldNewUser($id)
    {
        $query = $this->db->query("SELECT old_user,id FROM `tbl_subhe_appli_form` WHERE login_id='$id' ");
		return $query->getRowArray();
	}
	public function checkSocietyOldNewUser($id)
    {
        $query = $this->db->query("SELECT old_user,id FROM `tb_society_appli_form` WHERE login_id='$id' ");
		return $query->getRowArray();
	}
	public function checkOpenOldNewUser($id)
    {
        $query = $this->db->query("SELECT old_user,id FROM `tbl_open_application` WHERE login_id='$id' ");
		return $query->getRowArray();
	}
	public function approvedList()
    {
        $query = $this->db->query("SELECT CONCAT(last_name, ' ',first_name, ' ',middle_name) as applicant_name,a.id,a.phone_no,b.username,b.password FROM `tbl_subhe_appli_form` a,login_master b WHERE a.SMS_Flag=0 and a.login_id=b.id");
        //$query = $this->db->query("SELECT a.institution as applicant_name,a.id,a.phone_no,b.username,b.password FROM `tb_society_appli_form` a,login_master b WHERE a.SMS_Flag=0 and a.login_id=b.id");
		return $query->getResult();
	}
	public function updateSMSFLag($id)
	{
			$insert = "update tbl_subhe_appli_form set SMS_Flag=1 where id='$id' ";
			$res = $this->db->query($insert);
			return true;
	}
	public function getCurrentYear()
	{
		$query = $this->db->query("SELECT year FROM `tbl_current_year` WHERE selected=1");
		return $query->getRowArray();
	}
	public function getTitle()
	{
		$query = $this->db->query("SELECT * FROM `tbl_title`");
		return $query->getRowArray();
	}
	
	public function showpassword($phoneNo)
	{
	    if(!empty($phoneNo)){
	     $query = $this->db->query("SELECT * FROM `login_master` WHERE `phone` LIKE '%$phoneNo%' and isdeleted = '0' ORDER BY `username` ASC");
	     }else {
	     $query = $this->db->query("SELECT * FROM `login_master` WHERE isdeleted = '0'");
	     }
		 return $query->getResultArray();
	}
}