<?php
class Model_user extends CI_Model{
    
    public function __construct(){
		$this->load->database();
		$this->load->helper('url');
	}

    function list_user(){
        // ambil data user dari tabel user
        $user = $this->db->get('data_diri');
        return $user;
    }
    
    function getUser($detail = FALSE){
        
        if($detail === FALSE){
		$query = $this->db->get('data_diri');
		return $query->result_array();
		}

		$query = $this->db->get_where('data_diri', array('nik' => $detail));
		return $query->row_array();
    }

    public function set_user(){
		$this->load->helper('url');
		$foto = $_FILES['foto']['name'];
		$data = array(
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggl_lahir' => $this->input->post('tanggl_lahir'),
			'alamat' => $this->input->post('alamat'),
			'kota_asal' => $this->input->post('kota_asal'),
			'agama' => $this->input->post('agama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'status' => $this->input->post('status'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'kewarganegaraan' => $this->input->post('kewarganegaraan'),
			'hobi' => $this->input->post('hobi'),
			'deskripsi' => $this->input->post('deskripsi'),
			'foto' => $foto
		);
        return $this->db->insert('data_diri', $data);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table,$where);
	}

	public function update_data($where, $data, $table)
	{
		$this->load->helper('url');

		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
?>