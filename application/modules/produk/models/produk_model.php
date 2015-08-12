<?php
class Produk_model extends CI_Model
	{
		var $DB;
		 public function Produk_model()
		 {
		  parent::__construct();
		  $CI =& get_instance();
			 $this->instan=$CI;
			  $this->DB = $this->load->database('home', TRUE);
		  
		
		 } 
		
		function get_detail_lelang($data_param)
		{
		
			$id = $data_param['id'];

			$q=$this->DB->query("SELECT * FROM proses_lelang a 
								INNER JOIN produk b 
								ON a.produk_id=b.produk_id 
								AND a.kategori_id=b.kategori_id
								WHERE a.lelang_id='$id'");
				return $q;
			
		}
		
		function get_gambar_produk($data_param)
		{
			$id = $data_param['id'];

			$q=$this->DB->query("select * from gambar WHERE produk_id='$id'");
				return $q;
		} 

	}
?>
