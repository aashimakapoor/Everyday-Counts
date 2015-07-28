<?php 
	class Project extends CI_Model{

			function submission()
			{
				$email=$_POST['email'];
				$pass=$_POST['pass'];
				$con_pass=$_POST['con_pass'];
				if($pass==$con_pass)
				{

				$this->db->query("INSERT INTO `sign_up`(`id`, `email`, `pass`, `confirm_pass`) VALUES (NULL,'".$email."','".$pass."' ,'".$con_pass."') ");
				
				redirect('firstpage');	
			}

			
		}


			function verify()
			{

				$email=$_POST['email'];
				$pass=$_POST['pass'];
				//$q=$this->db->get('sign_up');
				$query=$this->db->query("SELECT * from sign_up where  email='$email' and pass='$pass'");
				//$data['q']=$query->result();
				
				/*foreach($query->result() as $row)
				{

						if($row->pass==$pass)
						{
								//$this->load->view('display');
								//redirect('firstpage');
								echo "Login Successful";
								
						}

				}*/

				if($query->num_rows()==0)
				{
					echo "login failed";
				}
				else
				{
					$this->load->view('display');
				}



			}


			function admit()
			{
				$email=$_POST['email'];
				$msg=$_POST['msg'];

				$this->db->query("INSERT INTO `contact_us`(`id`, `email`, `message`) VALUES (NULL,'".$email."','".$msg."')");
				echo "submitted";

			}
	

		
			function question($c)
			{

				$query=$this->db->query("SELECT * FROM `apti_test` WHERE `t_id`='$c'");

				return $query->result();
				
			}
           
			function question1()
			{

				$query=$this->db->query("SELECT * FROM `ver_test` WHERE 1");
				return $query->result();
				
			}
           	
			function user()
			{
				$query=$this->db->query("SELECT `id`, `email` FROM `sign_up` WHERE 1");
				return $query->result();
			}

			function submit()
			{
				$a1=$_POST['ans'];
				
			}



	}

?>
