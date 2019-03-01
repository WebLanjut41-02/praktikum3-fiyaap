
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fykitch extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_data');
	}


	public function index(){
		$this->load->view('v_cust');
	}

	public function inputcust(){
		$nama_cust = $this->input->post('nmcus');
		$no_tlp = $this->input->post('nhpcus');
		$input = $this->model_data->inputcust($nama_cust,$no_tlp);
	}

	public function allcust()
    {
        $data['nama_cust'] = $this->model_data->alldata();
		$this->load->view('v_menu',$data);
    }

	public function cekcust(){
		$data = $this->input->post('nmcus');
		$cek = $this->model_data->cekcust();

		foreach ($cek as $hasil) {
			if ($hasil->nama_cust == $data) {		
				$this->session->set_userdata('customer',$data);
			}
		}
		
	}
}
