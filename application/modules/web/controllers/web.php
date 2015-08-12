<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {

	 function Web()
	{
		parent::__construct();	
		$this->load->helper('load_controller');
	
		$this->load->helper('load_model');
		
		
		
		
	}
	
	function index()
	{
		$data_param="";
		
		$this->web_header($data_param);
		$this->web_slider_front($data_param);
		$this->web_open_content($data_param);
		$this->web_premium_lelang($data_param);
		$this->web_feature_lelang($data_param);
		$this->web_close_content($data_param);
		$this->web_footer($data_param);	
	}
	function web_header($data_param) {
		$data_param="";
		return $this->load->view("web/header",$data_param);
	}
	function web_footer($data_param) {
		$data_param="";
		return $this->load->view("web/footer",$data_param);
	}
	
	function web_slider_front($data_param) {
		$data_param="";
		return $this->load->view("web/slider_front",$data_param);
	}
	function web_premium_lelang($data_param) {
		
		
		$data['data_premium_lelang'] = load_model("web","web_model","get_list_premium_lelang");
		//$data_param['data_premium_lelang'] = $data->result_array();
		//$data_param['status_id'] = 1;
		 $this->load->view("web/premium_lelang",$data);
		
	}
	function web_feature_lelang($data_param) {
		$data_param="";
		return $this->load->view("web/feature_lelang",$data_param);
	}
	function web_open_content($data_param) {
		$data_param="";
		return $this->load->view("web/open_content",$data_param);
	}
	function web_close_content($data_param) {
		$data_param="";
		return $this->load->view("web/close_content",$data_param);
	}
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
