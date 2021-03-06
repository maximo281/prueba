<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contacto extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->Model("InicioModel");
		$this->load->library('grocery_CRUD');
		$this->load->library('session');
		}
		

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index($output = null){
		//$this->load->view('example',$output);
		$this->load->database();
		

		$data =array('titulo' =>'Borderless');
		$this->load->view("/contacto/headCont", $data);

		$data= array ('Gsl' => 'Gsl');
		$this->load->view("/contacto/navCont",$data);

		$data = array('Gsl' => 'Blog', 'descripcion' => 'Bienvenido a borderles');
		$this->load->view("/contacto/headerCont", $data);
		//$this->load->view("Home",$data);

		$this->load->view("/contacto/contenidoCont");
		$this->load->view("/contacto/footerCont");
		}
	}