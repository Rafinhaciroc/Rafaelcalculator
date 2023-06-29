<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Avaliacao extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}

	public function index()

	{
			$crud = new grocery_CRUD();
			$crud->set_table('avaliacao');
			$crud->display_as("conteudo", "Conteúdo");
			$crud->display_as("disciplina_iddisciplina", "Disciplina");
			$crud->required_fields("data","disciplina_iddisciplina","valor");
			$crud->set_relation("disciplina_iddisciplina","disciplina","nome");
			$output = $crud->render();
			$this->load->view('example_view', $output);

		
		}
	}