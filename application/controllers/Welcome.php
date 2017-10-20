<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('form_model');  
	}

	public function index()
	{
		$this->load->view('formulario');

    }
function validar()
    {	
		//echo "Hola<br>";
		//Aqui estamos recibiendo los datos del formulario.

		$name = $this->input->post('nombre');
		$lastname = $this->input->post('apellido');
        $DirecciondeEmail = $this->input->post('correo')
		echo "Nombre: ".$name."  Apellido: ".$lastname."correo" .$DirecciondeEmail;
    //Aqui estamos creando el array para la evaluacion
		$data = array('nombre' => $this->input->post('nombre'),'apellido' => $this->input->post('apellido'), "DirecciondeEmail" = $this->input->post('correo'));
    //Aqui se llama la funcion para guardar en la BDeval3
		$this->form_model->guardar($data);
	

	

	}



}



