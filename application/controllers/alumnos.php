<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('alumnos_model');
	}

	
	public function registrarAlumno()
	{
		$data['nivel'] = $this->nivel_model->obtenerNiveles();
		$this->load->model('nivel_model');
		$this->load->helper('form');
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/agregar_alumno',$data);
		$this->load->view('plantillas/footer');
	}

	public function agregarAlumno(){
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'apellido' => $this->input->post('apellido'),
			'genero' => $this->input->post('genero'),
			'fnacimiento' => $this->input->post('fnacimiento'),
			'estatura' => $this->input->post('estatura'),
			'peso' => $this->input->post('peso'),
			'dir' => $this->input->post('dir'),
			'tel' => $this->input->post('tel'),
			'madre' => $this->input->post('madre'),
			'duim' => $this->input->post('duim'),
			'tbjm' => $this->input->post('tbjm'),
			'telm' => $this->input->post('telm'),
			'padre' => $this->input->post('padre'),
			'duip' => $this->input->post('duip'),
			'tbjp' => $this->input->post('tbjp'),
			'telp' => $this->input->post('telp'),
			'resp' => $this->input->post('resp'),
			'duir' => $this->input->post('duir'),
			'tbjr' => $this->input->post('tbjr'),
			'telr' => $this->input->post('telr'),
			'exp' => $this->input->post('exp'),
			'padecimiento' => $this->input->post('padecimiento'),
			'medic' => $this->input->post('medic'),
			'nombre' => $this->input->post('nombre'),
			'nivel' => $this->input->post('nivel')
			);
		$this->nivel_model->crearAlumno($data);
		redirect(base_url('Alumnos/gestionarAlumnos'));
	}

	public function gestionarAlumnos(){
		$this->load->helper('form');
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/gestionar_alumnos');
		$this->load->view('plantillas/footer');
	}
	public function verAlumno(){
		//$data['alumno']=$this->alumno_model->obtenerAlumnos();
		$this->load->helper('form');
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/ficha_alumno');
		$this->load->view('plantillas/footer');
	}

	public function actualizarAlumno(){
		$id = $this->input->post('id');
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'apellido' => $this->input->post('apellido'),
			'genero' => $this->input->post('genero'),
			'fnacimiento' => $this->input->post('fnacimiento'),
			'estatura' => $this->input->post('estatura'),
			'peso' => $this->input->post('peso'),
			'dir' => $this->input->post('dir'),
			'tel' => $this->input->post('tel'),
			'madre' => $this->input->post('madre'),
			'duim' => $this->input->post('duim'),
			'tbjm' => $this->input->post('tbjm'),
			'telm' => $this->input->post('telm'),
			'padre' => $this->input->post('padre'),
			'duip' => $this->input->post('duip'),
			'tbjp' => $this->input->post('tbjp'),
			'telp' => $this->input->post('telp'),
			'resp' => $this->input->post('resp'),
			'duir' => $this->input->post('duir'),
			'tbjr' => $this->input->post('tbjr'),
			'telr' => $this->input->post('telr'),
			'exp' => $this->input->post('exp'),
			'padecimiento' => $this->input->post('padecimiento'),
			'medic' => $this->input->post('medic'),
			'nombre' => $this->input->post('nombre'),
			'nivel' => $this->input->post('nivel')
			);
		$this->nivel_model->actualizarAlumno($data,$id);
		redirect(base_url('Alumnos/gestionarAlumnos'));
	}
}