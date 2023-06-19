<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

	
	public function index()
	{
		$crud->set_theme('datatables');
			$crud->set_table('offices');
			$crud->set_subject('Office');
			$crud->required_fields('city');
			$crud->columns('city','country','phone','addressLine1','postalCode');

			$output = $crud->render();
		
		$output['nome'] = 'Rafael Franco';
		$this->load->view('crud', $output);
	}

	public function teste () {
		echo "Testando o CI";
	}
}

