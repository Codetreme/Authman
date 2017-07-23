<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class UserModel extends CI_Model{

function __construct(){
	//database table
$this->userTbl='users';
}

/*
 * get rows
*/
	function getRows($params=array()){
		$this->db->select('*');
		$this->db->from($this->userTbl);

		//fetch data by conditions
		if(array_key_exists("conditions", $params)):
			foreach($params['conditions'] as $key => $value):
				$this->db->where($key,$value);
			endforeach;
		endif;

		if(array_key_exists("id", $params)):
			$this->db->where('id',$params['id']);
			$query=$this->db->get();
			$result=$query->row_array();

		else:
			//set start and limit
			if(array_key_exists("start", $params)&&array_key_exists("limit", $params)){
				$this->db->limit($params['limit'],$params['start']);
			}
			elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
			}
            
            $query = $this->db->get();
           
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $query->num_rows();
            }
            elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
                $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
            }
            else{
            	$result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
            endif;

            return $result;

	}
	
	public function insert($data=array()){
		//add created or modified data
		if(!array_key_exists("created", $data)):
			$data['created']=date("Y-m-d H:i:s");

		endif;
		if(!array_key_exists("modified", $data)):
			$data['modified']=date("Y-m-d H:i:s");
			
		endif;

		//insert into table users
		$insert=$this->db->insert($this->userTbl,$data);

		//return status
		if($insert):
			return $this->db->insert_id();
		else:
			return false;
		endif;
	}
}

