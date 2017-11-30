<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class search_data extends CI_Model{

	public function impresion(){
		$query= $this->db->get('articulos');
		if ($query->num_rows()>0) {
			return $query->result();
		}else{
			return false;
		}
	}

	function guardar($plu,$descripcion,$precio,$costo){
		$campos=array(
			'plu'=>$this->input->post('plu'),
			'descripcion'=>$this->input->post('descripcion'),
			'precio'=>$this->input->post('precio'),
			'costo'=>$this->input->post('costo')
		);
		$this->db->insert('articulos',$campos);
		if ($this->db->affected_rows()>0) {
			return true;
		}else{
			return false;
		}
	}

	function editar($id){
		$this->db->where('id',$id);
		$this->db->from('articulos');
	$query = $this->db->get();
	return $query->result();
	}

	function update($id){
		$id = $this->input->post('hidden');
		$campos=array(
			'plu'=>$this->input->post('plu'),
			'descripcion'=>$this->input->post('descripcion'),
			'precio'=>$this->input->post('precio'),
			'costo'=>$this->input->post('costo')
		);
		$this->db->where('id',$id);
		$this->db->update('articulos',$campos);
		if($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}

	function borrar($id){
		$this->db->where('id',$id);
		$this->db->delete('articulos');
		if($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}
}