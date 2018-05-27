<?php

class Cheque extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function addCheque()
	{
		//list($dia, $mes, $ano) = explode("-", $this->input->post('fecha'));
		//list($dia2, $mes2, $ano2) = explode("-", $this->input->post('vencimiento'));
		$data = array(
			'banco' => strtoupper($this->input->post('banco')),
			'importe' => $this->input->post('importe'),		
		//	'fecha' => $ano."-".$mes."-".$dia,
		//	'fechavto' => $ano2."-".$mes2."-".$dia2,
			'proviene' => $this->input->post('origen'),
			'entregado' => $this->input->post('destino'),
		);
		
		return $this->db->insert('cheques', $data);
	}
	
	function getCheques(){
		$this -> db -> from('cheques');
		$query = $this -> db -> get();
		return $query->result();
	}
	
	function delCheques($identificador){
		return $this->db->delete('cheques', array('id' => $identificador));
	}
	function getCheque($nombre){
		$this -> db -> from('cheques');
		$this -> db -> like("banco",$nombre);
		$query = $this -> db -> get();
		return $query->result();
	}
	
	function updateCheques($id){
		list($dia, $mes, $ano) = explode("-", $this->input->post('fecha'));
		list($dia2, $mes2, $ano2) = explode("-", $this->input->post('fechavto'));
		$data = array(
			'banco' => strtoupper($this->input->post('banco')),
			'importe' => $this->input->post('importe'),		
			'fecha' => $ano."-".$mes."-".$dia,
			'fechavto' => $ano2."-".$mes2."-".$dia2,
			'proviene' => $this->input->post('proviene'),
			'entregado' => $this->input->post('entregado'),
		);
		$this->db->where('id', $id);
        return $this->db->update('cheques', $data);
	}
	
	function  getChequeTotal($fechaDesde,$fechaHasta){
		return $this->db->query("select sum(importe) as importe from cheques where fecha BETWEEN '".$fechaDesde."' AND '".$fechaHasta."'")->result();
	}
}
?>