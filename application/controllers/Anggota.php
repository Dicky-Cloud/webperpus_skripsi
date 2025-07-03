<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('DataModel');
        $this->load->library('form_validation');
        $this->load->helper('auth_helper');

        // Cek login hanya sekali di construct
        check_login();
    }

    public function index() {
        $data['anggota'] = $this->DataModel->get_all_anggota();
        $this->load->view('admin/anggota_view', $data);
    }

    public function tambah() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('nomor_hp', 'Nomor HP', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[siswa,umum]');

        $status = $this->input->post('status');

        // Validasi tambahan sesuai status
        if ($status === 'siswa') {
            $this->form_validation->set_rules('nis', 'Nomor Induk Siswa (NIS)', 'required');
        } elseif ($status === 'umum') {
            $this->form_validation->set_rules('nik', 'Nomor Induk Kependudukan (NIK)', 'required');
        }

        if ($this->form_validation->run() == FALSE) {
            $data['anggota'] = $this->DataModel->get_all_anggota(); // untuk menampilkan kembali view
            $this->load->view('admin/anggota_view', $data);
        } else {
            $data = array(
                'nama'      => $this->input->post('nama'),
                'email'     => $this->input->post('email'),
                'nomor_hp'  => $this->input->post('nomor_hp'),
                'alamat'    => $this->input->post('alamat'),
                'status'    => $status,
                'nis'       => ($status === 'siswa') ? $this->input->post('nis') : null,
                'nik'       => ($status === 'umum') ? $this->input->post('nik') : null
            );

            if ($this->DataModel->insert_anggota($data)) {
                $this->session->set_flashdata('success', 'Anggota berhasil ditambahkan.');
                redirect('Daftarbuku');
            } else {
                $this->session->set_flashdata('error', 'Gagal menambahkan anggota.');
                redirect('anggota/tambah');
            }
        }
    }

    public function update($id_anggota) {
        $data = array(
            'nama'      => $this->input->post('nama'),
            'nik'       => $this->input->post('nik'),
            'nis'       => $this->input->post('nis'),
            'email'     => $this->input->post('email'),
            'nomor_hp'  => $this->input->post('nomor_hp'),
            'alamat'    => $this->input->post('alamat'),
            'status'    => $this->input->post('status')
        );

        if ($this->DataModel->update_anggota($id_anggota, $data)) {
            $this->session->set_flashdata('success', 'Data anggota berhasil diperbarui!');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui data anggota.');
        }

        redirect('anggota');
    }

    public function hapus($id_anggota) {
        if ($this->DataModel->get_anggota_by_id($id_anggota)) {
            if ($this->DataModel->delete_anggota($id_anggota)) {
                $this->session->set_flashdata('success', 'Anggota berhasil dihapus.');
            } else {
                $this->session->set_flashdata('error', 'Gagal menghapus anggota.');
            }
        } else {
            $this->session->set_flashdata('error', 'Anggota tidak ditemukan.');
        }

        redirect('anggota');
    }

    public function export_pdf() {
        $this->load->library('pdf');
        $data['anggota'] = $this->DataModel->get_all_anggota();

        $html = $this->load->view('pdf_anggota', $data, true);

        $this->pdf->loadHtml($html);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();
        $this->pdf->stream('data_anggota.pdf', array("Attachment" => false));
    }
}
