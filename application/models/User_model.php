 <?php 
	defined('BASEPATH') or exit('No direct access');

	class User_model extends CI_Model{

		public function __construct(){
			parent::__construct();
			$this->load->database();

		}

		public function new_user($firstname,$lastname,$contact,$email,$password){
			/**
			 * new_user function
			 * @access public
			 * @param username
			 * @param email
			 * @param password
			 * @return  bool true|false 
			*/

			$data=array(
				'firstname'=>$firstname,
				'lastname'=>$lastname,
				'contact'=>$contact,
				'email'=>$email,
				'password'=>md5($password),
				'date_created'=>date('Y-m-d H:i:s')
				);

			return $this->db->insert('users',$data);
		}

		public function user_login($email,$password){
			/**
			 * user_login function
			 *@access public
			 *@param email
			 *@param password
			 *@return bool true|false
			*/

		
			$this->db->where('email',$email);
			$this->db->where('password',md5($password));
			$query=$this->db->get('users');

			if($query->num_rows()>0):
				return true;
			else:
				return false;
			endif;


		}

		public function getUserDetails($email){

			$this->db->select('id,firstname,lastname,contact,email,profile');
			$this->db->from('users');
			$this->db->where('email',$email);
			$this->db->limit(1);

			$query=$this->db->get();
			$result=$query->result();

			return $result;

		}
		public function getUsername($email){

			$this->db->select('username');
			$this->db->from('users');
			$this->db->where('email',$email);

			$query=$this->db->get();
			$result=$query->result();

			return $result;

		}

	}