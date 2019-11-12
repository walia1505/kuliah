<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {
    public function tampil(){
        $query = $this->db->get('tampil');
        return $query->result_array();
    }
 
    public function tampilubah($id_mahasiswa){
        $this->db->where('id', $id_mahasiswa);
        $query = $this->db->get('mhs');
        return $query->result_array();
    }

    public function tambah_data(){
        $data = array(
            'id' => $this->input->post('id_mahasiswa'),
            'nim' => $this->input->post('nim'),
            'nama_mhs' => $this->input->post('nama_mahasiswa'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('nomer_hp')
        );
        return $this->db->insert('mhs',$data);
    }

    public function edit_data(){
        $data = array(
            'id' => $this->input->post('id_mahasiswa'),
            'nim' => $this->input->post('nim'),
            'nama_mhs' => $this->input->post('nama_mahasiswa'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('nomer_hp')
        );
        $id_mahasiswa = $this->input->post('id_mahasiswa');
        $this->db->where('id', $id_mahasiswa);
        return $this->db->update('mhs',$data);
    }

    public function hapus($id_mahasiswa){
        return $this->db->delete('mhs',array('id' =>$id_mahasiswa));
    }
}