<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('search_data');

	}

	function index(){
		$data['data']=$this->search_data->impresion();
		$this->load->view('vistas/index',$data);
	}

	function agregar(){
		$this->load->view('vistas/agregar');
	}
	function reporte(){
		$this->load->view('vistas/reporte');
	}

	function subir(){
		
			$plu = $this->input->post('plu');
			$descripcion = $this->input->post('descripcion');
			$precio = $this->input->post('precio');
			$costo = $this->input->post('costo');
		
		$result=$this->search_data->guardar($titulo,$descripcion,$precio,$costo);
		redirect('test/index');
	}

	function editar($id){
		$data['data']=$this->search_data->editar($id);
		$this->load->view('vistas/editar',$data);
	}

	function update($id){
		$result=$this->search_data->update($id);
		redirect(base_url('test/index'));
	}

	function delete($id){
		$result=$this->search_data->borrar($id);
		redirect(base_url('test/index'));
	}
}