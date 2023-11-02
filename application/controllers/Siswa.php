<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Siswa_model');
    }

    public function input() {
        $data['agama_options'] = array(
            'Islam' => 'Islam',
            'Kristen' => 'Kristen',
            'Katolik' => 'Katolik',
            'Budha' => 'Budha',
            'Hindu' => 'Hindu',
            'Protestan' => 'Protestan',
            'Khonghucu' => 'Khonghucu'
        );
        $this->load->view('input_siswa', $data);
    }

    public function proses_input() {
        $nama = $this->input->post('nama');
        $nis = $this->input->post('nis');
        $kelas = $this->input->post('kelas');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $alamat = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $agama = $this->input->post('agama');

        $data = array(
            'nama' => $nama,
            'nis' => $nis,
            'kelas' => $kelas,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama
        );

        $this->load->view('hasil_input', $data);
    }
}
