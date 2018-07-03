<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Research extends CI_Controller {

	
	public function index()
	{
		$this->load->view('components/header');
		
		$system_data['building'] = $this->system_model->get_systems();
		$system_data['states'] = $this->system_model->get_state();
		
		$this->load->view('list_system', $system_data);
		
		$this->load->view('components/footer');
	}
	

	public function system_edit($id)
	{

		$this->load->view ('components/header');

		// Do the update if required
		if ($this->input->post ()) {

			$save = array (
				'buildingId' => $this->input->post ('buildingId'),
				'serviceNum' => $this->input->post ('serviceNum'),
				'buildingGroup' => $this->input->post ('buildingGroup'),
				'buildingName' => $this->input->post ('buildingName'),
				'description' => $this->input->post ('description'),
				'status' => $this->input->post ('status'),
				'state' => $this->input->post ('state')
			);


			$this->system_model->update_system ($id, $save);
			// append some info to be displayed on the edit page
			$system_data['msg'] = 'Updated';

		}


		$system_data['states'] =$this->system_model->get_state ();
		$system_data['systemData'] = $this->system_model->get_system_byid ($id);

		$this->load->view ('get_system', $system_data);

		
		
		$this->load->view ('components/footer');
	}
	
	public function system_added ()
	{
		$system_data = array ();
		$system_data['buildingId'] = '';
		$system_data['serviceNum'] = '';
		$system_data['buildingGroup'] = '';
		$system_data['buildingName'] = '';
		$system_data['description'] = '';
		$system_data['status'] = '';
		$system_data['state'] = '';


		if ($this->input->post ()) {


			if ($this->input->post ('buildingId').trim (' ') != ''
			   &&$this->input->post ('serviceNum').trim (' ') != ''
			   &&$this->input->post ('buildingGroup').trim (' ') != ''
			   &&$this->input->post ('buildingName').trim (' ') != ''
			   &&$this->input->post ('description').trim (' ') != ''
			   &&$this->input->post ('status').trim (' ') != ''
			   &&$this->input->post ('state').trim (' ') != '') {


				$data = array (
					'buildingId' => $this->input->post ('buildingId'),
					'serviceNum' => $this->input->post ('serviceNum'),
					'buildingGroup' => $this->input->post ('buildingGroup'),
					'buildingName' => $this->input->post ('buildingName'),
					'description' => $this->input->post ('description'),
					'status' => $this->input->post ('status'),
					'state' => $this->input->post ('state')
				);
				
				
				$this->system_model->insert_system ($data);
				header ('Location: '.base_url(''));
				exit;


			} else {
				
				$system_data['msg'] = 'Please ensure all fields are complete.';
				$system_data['buildingId'] = $this->input->post ('buildingId');
				$system_data['serviceNum'] = $this->input->post ('serviceNum');
				$system_data['buildingGroup'] = $this->input->post ('buildingGroup');
				$system_data['buildingName'] = $this->input->post ('buildingName');
				$system_data['description'] = $this->input->post ('description');
				$system_data['status'] = $this->input->post ('status');
				$system_data['state'] = $this->input->post ('state');
				
			}


		} 

		$this->load->view ('components/header');
		$this->load->view ('new_system', $system_data);
		$this->load->view ('components/footer');
	}
	
	public function delete_system()
	{	
		
		$id = $this->input->get('id');
		
		alert ($id);
		
		if($this->system_model->delete_system ($id))
		{
			$system_data['building'] = $this->system_model->get_systems();
			$system_data['states'] = $this->system_model->get_state();
			 
			$this->load->view ('components/header');
			$this->load->view ('list_system', $system_data);
			$this->load->view ('components/footer');
		}
	} 
}
