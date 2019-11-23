<?php 
 
class M_masterdata extends CI_Model{
	function tampil_data(){
		return $this->db->get('masterdata');
	}
}