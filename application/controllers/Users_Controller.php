<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Controller extends CI_Controller {

	public function index()
	{
    $this->template('pages/users_view');
	}

	public function template( $view, $data = [] )
	{
		$this->load->view('inc/header', $data);
		$this->load->view($view, $data);
		$this->load->view('inc/footer', $data);
	}

  public function add(){


    echo json_encode('test');
  }

	function do_upload(){
			$config['upload_path']="./assets/images";
			$config['allowed_types']='gif|jpg|png';
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload',$config);
			if($this->upload->do_upload("photo")){
					$data = array('upload_data' => $this->upload->data());

					$title= $this->input->post('photo');
					$data['upload_data']['file_name'] = $this->input->post('name').time();
					$image = $data['upload_data']['file_name'];
					print_r($data['upload_data']);

					// $result= $this->upload_model->save_upload($title,$image);
					echo json_decode($image);
			}else{
				echo json_encode('sorry');
			}

	 }
}
