<?php 
namespace App\Models\AdminMaster;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;
 
class MasterModel extends Model
{
     /************ Dynamic fetch data - Niranjan Kakatkar ****************/
     

     
    public function getAllData($tableName)
    {
        $query = $this->db->query("SELECT * FROM $tableName WHERE isdeleted = 0 order by id desc");
        return $query->getResultArray();
	}
	public function getData($tableName,$id)
    {
        $query = $this->db->query("SELECT * FROM $tableName WHERE id = $id ");
        return $query->getRowArray();
	}
	public function getWhereData($tableName,$field,$value)
    {
        $query = $this->db->query("SELECT * FROM $tableName WHERE $field = $value ");
        return $query->getResultArray();
	}
	
}