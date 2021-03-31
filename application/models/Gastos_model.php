<?php  

/**
 * 
 */
class Gastos_model extends CI_Model
{
	
	public function guardar ($sql)
	{

		$this->db->insert('gastos', $sql);

		if ($this->db->affected_rows() ===1) {
			return  [
				'message' => 'Datos insertados correctamente',
				'error' => true,
				'class' =>' alert alert-success'
			];
		}else {
			return  [
				'message' => 'Error en la inserción',
				'error' => false,
				'class' =>'alert alert-danger'
			];
		}

	}

	public function mostrar()
	{
		return $this->db->select('*')
		->from('gastos')
		->get()
		->result();
	}
}