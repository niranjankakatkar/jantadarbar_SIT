<?php 
namespace App\Models\Development;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;
 
class DevelopmentModel extends Model
{
    /************ Fetch Zone Dropdown - Nikita Nanaware **************/
    public function getZone()
    {
		$query = $this->db->query("SELECT * FROM `tbl_zone` where isdeleted=0");
		return $query->getResult();
    }
    
}