<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __contruct(){
		parent::__contruct();
	}

	public function index()
	{	
		$data['title'] = "Halaman Data User";
		$data['judul'] = "Setting Data User";

		# Tampilkan data user
		$sql = "SELECT * FROM tbl_user";
		$query = $this->db->query($sql);

		# Array asosiatif tbl user
		$data['user'] = $query->result();

		$this->load->view('user/tampil',$data);
	}

	public function tambah()
	{
		$data['title'] = "Halaman Tambah Data User";
		$data['judul'] = "Tambah Data User";

		$this->load->view('user/tambah',$data);	
	}

	public function simpan()
	{
		$data = array('username' => $this->input->post('username'),
					  'password' => md5($this->input->post('password')),
					  'nama' => $this->input->post('nama'),
					  'jk' => $this->input->post('jk'),
					  'alamat' => $this->input->post('alamat'),
					  'level_user' => $this->input->post('level_user')
					);
		$query = $this->db->insert('tbl_user',$data);
		if($query){
			echo "<script>alert('Tambah Data Berhasil');</script>";
			redirect('user');
		}else{
			echo "<script>alert('Tambah Data Tidak Berhasil');</script>";
			redirect('user/tambah');
		}
	}

	public function hapus($id){
		$query = $this->db->delete('tbl_user', array('id_user' => $id));
		if($query){
			echo "<script>alert('Hapus Data Berhasil');</script>";
			redirect('user');
		}else{
			echo "<script>alert('Hapus Data Tidak Berhasil');</script>";
			redirect('user');
		}
	}

	public function edit($id){
		$data['title'] = "Halaman Edit Data User";
		$data['judul'] = "Edit Data User";

		# mencari data by $id
		$this->db->from('tbl_user');
		$this->db->where('id_user',$id);
		$query = $this->db->get();

		# menurunkan array asosiatif
		$data['edit'] = $query->row();

		# load view
		$this->load->view('user/edit',$data);

	}

	public function aksi_ubah()
	{
		if(empty($this->input->post('password')))
		{
			$data = array('username' => $this->input->post('username'),
						  'nama' => $this->input->post('nama'),
						  'jk' => $this->input->post('jk'),
						  'alamat' => $this->input->post('alamat'),
						  'level_user' => $this->input->post('level_user')
						);
		}
		else
		{
			$data = array('username' => $this->input->post('username'),
						  'password' => md5($this->input->post('password')),
						  'nama' => $this->input->post('nama'),
						  'jk' => $this->input->post('jk'),
						  'alamat' => $this->input->post('alamat'),
						  'level_user' => $this->input->post('level_user')
						);
		}
		$query = $this->db->update('tbl_user',$data,array('id_user' => $this->input->post('id_user')));
		if($query){
			echo "<script>alert('Ubah Data Berhasil');</script>";
			redirect('user');
		}else{
			echo "<script>alert('Ubah Data Tidak Berhasil');</script>";
			redirect('user');
		}
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */