<?php 
namespace App\Models\Master;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;
 
class MasterModel extends Model
{
     /************ Dynamic fetch data - Nikita Nanaware ****************/
     
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