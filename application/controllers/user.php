<?php
class User extends CI_Controller{
	function __construct(){
		parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('model_user');
        $this->load->helper(array('form', 'url'));
        $this->load->library('m_pdf');

        if($this->session->userdata('status') != "login"){
            redirect(base_url(index.php/login));
        }
	
	}

    function index(){
        $this->load->model('model_user');
        $data['user'] = $this->model_user->list_user()->result();

        $this->load->view('login/dashboard',$data);
    }

    function detail($detail = NULL){

        
    	$data['user_detail'] = $this->model_user->getUser($detail);

        
        $this->load->view('user/detail_user2', $data);
    }

    function input(){
        $this->load->view('user/input_user2');
	}
	    
	function input_simpan(){
	    $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggl_lahir', 'Tanggal Lahir', 'required');

         //$this->model_user->set_user();
            //redirect('user');
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
            $this->model_user->set_user();
            redirect('user');
        }

        // if($this->form_validation->run() === FALSE){
        //     $this->load->view('user/input_user2');
        // }else{
        //     $this->model_user->set_user();
        //     redirect('user');
        // }
	}

	function edit($edit = NULL){
        $username = $this->uri->segment(3);
        $where = array('nik' => $username);
        $data['user'] = $this->model_user->edit_data($where,'data_diri')->result();
        $this->load->view('user/edit_user2', $data);
	}
	    
	function edit_simpan(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $foto = $_FILES['foto']['name'];
	    $nik               = $this->input->post('nik');
        $nama              = $this->input->post('nama');
        $email             = $this->input->post('email');
        $tempat_lahir      = $this->input->post('tempat_lahir');
        $tanggl_lahir      = $this->input->post('tanggl_lahir');
        $alamat            = $this->input->post('alamat');
        $kota_asal         = $this->input->post('kota_asal');
        $agama             = $this->input->post('agama');
        $jenis_kelamin     = $this->input->post('jenis_kelamin');
        $status            = $this->input->post('status');
        $pekerjaan         = $this->input->post('pekerjaan');
        $kewarganegaraan   = $this->input->post('kewarganegaraan');
        $hobi              = $this->input->post('hobi');
        $deskripsi         = $this->input->post('deskripsi');
        $foto              = $foto;
        $data = array(
            'nik'               => $nik,
            'nama'              => $nama,
            'email'             => $email,
            'tempat_lahir'      => $tempat_lahir,
            'tanggl_lahir'      => $tanggl_lahir,
            'alamat'            => $alamat,
            'kota_asal'         => $kota_asal,
            'agama'             => $agama,
            'jenis_kelamin'     => $jenis_kelamin,
            'status'            => $status,
            'pekerjaan'         => $pekerjaan,
            'kewarganegaraan'   => $kewarganegaraan,
            'hobi'              => $hobi,
            'deskripsi'         => $deskripsi,
            'foto'              => $foto
        );

        $where = array(
            'nik' => $nik
        );
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
            $where = array(
                'nik' => $nik
            );
            $this->model_user->update_data($where,$data,'data_diri');
            redirect('user');
        }
	}

	function delete(){
        $username = $this->uri->segment(3);
        $this->db->where('nik',$username);
        $this->db->delete('data_diri');
        redirect('user');
	}

    public function cetakpdf($detail){
        

        $data['user_detail'] = $this->model_user->getUser($detail);


        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->filename = "detail_user.pdf";
        $this->load->view('user/print_user', $data);
    }

    public function aksi_upload(){
        $config['upload_path']          = '../../assets/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 400;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
 
        $this->load->library('upload', $config);
 
        if ( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('user/input_user2', $error);
        }else{
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('user/input_user2', $data);
        }
    }

     public function report(){
        // $this->load->library('pdfgenerator');
        ob_start();
        $this->load->model('model_user');
        $data['user'] = $this->model_user->list_user()->result();
        $sumber = $this->load->view('user/print', $data, TRUE);
        $html = $sumber;

        $pdfFilePath = "data_user.pdf";

        $pdf = $this->m_pdf->load();

        $pdf->AddPage('P');
        $pdf->WriteHTML($html);
        ob_end_clean();
        $pdf->Output($pdfFilePath, "D");

        exit();
        redirect('user');
    }

}
?>
