<?php 


class Admin extends CI_Controller
{
	 
	public function Index()
	{
		$this->load->model('Database');
		$details = $this->Database->GetData();
		$this->load->view('Admin/dashboard', ['posts'=>$details]);

	}


	public function Update($id)
	{
		
		$this->load->model('Database');
		$post = $this->Database->GetSingleData($id);
		$this->load->view('update', ['post'=>$post]);

	
	}

	public function Change($id)
	{
		
		$this->form_validation->set_rules('fname', 'First Name','required' );
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		
		

				if ($this->form_validation->run() == FALSE)
         	    {
                        $this->load->view('update');
                }
                else 
                {
                		$data = $this->input->post();
                		$this->load->Model('Database');
                        $response = $this->Database->UpdateUserdata($data, $id);

                        if ($response) {

                        	$this->session->set_flashdata('msg', 'Updated Successfully..');
                        	redirect('Admin/Index');
                        } else {
                        	$this->session->set_flashdata('msg', 'Something went wrong..');
                        	redirect('Admin/Update');
                        }

                }


	}

	public function Delete($id)
	{
		$this->load->model('Database');
		$this->Database->DeleteUserData($id);
		redirect('Admin/Index');
	}

	


	
} 
?>