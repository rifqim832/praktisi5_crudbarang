<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model, session library, URL helper, dan form validation library
        $this->load->model('Barang_model');
        $this->load->library('session'); // Memuat library session
        $this->load->library('form_validation'); // Memuat library form validation
        $this->load->helper('url');
    }

    public function index() {
        // Set data for the view
        $data['title'] = 'Data Barang';
        $data['active_menu'] = 'data_barang';
        $data['barang'] = $this->Barang_model->get_barang();
        
        // Load the content and template
        $data['content'] = $this->load->view('barang/list_barang', $data, true);
        $this->load->view('template/template', $data);
    }

    public function search_barang() {
        // Get search keyword from POST request
        $keyword = $this->input->post('keyword');
        
        // Set data for the view
        $data['title'] = 'Data Barang';
        $data['active_menu'] = 'barang';
        $data['barang'] = $this->Barang_model->search_data_barang($keyword);
        $data['keyword'] = $keyword;
        
        // Load the content and template
        $data['content'] = $this->load->view('barang/list_barang', $data, true);
        $this->load->view('template/template', $data);
    }

    public function create_barang() {
        $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required', [
            'required' => 'Kolom %s wajib diisi.'
        ]);
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', [
            'required' => 'Kolom %s harus diisi.'
        ]);
        $this->form_validation->set_rules('kategori_barang', 'Kategori Barang', 'required', [
            'required' => 'Kolom %s harus diisi.'
        ]);
        $this->form_validation->set_rules('deskripsi_barang', 'Deskripsi Barang', 'required|min_length[20]', [
            'required' => 'Kolom %s harus diisi.',
            'min_length' => 'Kolom %s minimal harus memiliki 20 karakter.'
        ]);
        $this->form_validation->set_rules('harga_beli', 'Harga Beli', 'required|numeric', [
            'required' => 'Kolom %s harus diisi.',
            'numeric' => 'Kolom %s hanya boleh berisi angka.'
        ]);
        $this->form_validation->set_rules('harga_jual', 'Harga Jual', 'required|numeric', [
            'required' => 'Kolom %s harus diisi.',
            'numeric' => 'Kolom %s hanya boleh berisi angka.'
        ]);
        $this->form_validation->set_rules('stock_barang', 'Stock Barang', 'required|numeric', [
            'required' => 'Kolom %s harus diisi.',
            'numeric' => 'Kolom %s hanya boleh berisi angka.'
        ]);
        $this->form_validation->set_rules('supplier_barang', 'Supplier Barang', 'required', [
            'required' => 'Kolom %s harus diisi.'
        ]);
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required', [
            'required' => 'Kolom %s harus diisi.'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Barang';
            $data['active_menu'] = 'data_barang';
            $data['content'] = $this->load->view('barang/form_barang', '', true);
            $this->load->view('template/template', $data);
        } else {
            $data = [
                'kode_barang' => $this->input->post('kode_barang'),
                'nama_barang' => $this->input->post('nama_barang'),
                'kategori_barang' => $this->input->post('kategori_barang'),
                'deskripsi_barang' => $this->input->post('deskripsi_barang'),
                'harga_beli' => $this->input->post('harga_beli'),
                'harga_jual' => $this->input->post('harga_jual'),
                'stock_barang' => $this->input->post('stock_barang'),
                'supplier_barang' => $this->input->post('supplier_barang'),
                'tanggal_masuk' => $this->input->post('tanggal_masuk')
            ];

            $insert = $this->Barang_model->insert_barang($data);
            if ($insert) {
                $this->session->set_flashdata('success', 'Data barang berhasil ditambahkan.');
            } else {
                $this->session->set_flashdata('error', 'Data barang gagal ditambahkan.');
            }
            redirect('barang/data_barang');
        }
    }

    public function edit_barang($id) {
        $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required', [
            'required' => 'Kolom %s wajib diisi.'
        ]);
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', [
            'required' => 'Kolom %s harus diisi.'
        ]);
        $this->form_validation->set_rules('kategori_barang', 'Kategori Barang', 'required', [
            'required' => 'Kolom %s harus diisi.'
        ]);
        $this->form_validation->set_rules('deskripsi_barang', 'Deskripsi Barang', 'required|min_length[20]', [
            'required' => 'Kolom %s harus diisi.',
            'min_length' => 'Kolom %s minimal harus memiliki 20 karakter.'
        ]);
        $this->form_validation->set_rules('harga_beli', 'Harga Beli', 'required|numeric', [
            'required' => 'Kolom %s harus diisi.',
            'numeric' => 'Kolom %s hanya boleh berisi angka.'
        ]);
        $this->form_validation->set_rules('harga_jual', 'Harga Jual', 'required|numeric', [
            'required' => 'Kolom %s harus diisi.',
            'numeric' => 'Kolom %s hanya boleh berisi angka.'
        ]);
        $this->form_validation->set_rules('stock_barang', 'Stock Barang', 'required|numeric', [
            'required' => 'Kolom %s harus diisi.',
            'numeric' => 'Kolom %s hanya boleh berisi angka.'
        ]);
        $this->form_validation->set_rules('supplier_barang', 'Supplier Barang', 'required', [
            'required' => 'Kolom %s harus diisi.'
        ]);
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required', [
            'required' => 'Kolom %s harus diisi.'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Barang';
            $data['active_menu'] = 'data_barang';
            $data['barang'] = $this->Barang_model->get_barang_by_id($id);
            $data['content'] = $this->load->view('barang/form_barang', $data, true);
            $this->load->view('template/template', $data);
        } else {
            $data = [
                'kode_barang' => $this->input->post('kode_barang'),
                'nama_barang' => $this->input->post('nama_barang'),
                'kategori_barang' => $this->input->post('kategori_barang'),
                'deskripsi_barang' => $this->input->post('deskripsi_barang'),
                'harga_beli' => $this->input->post('harga_beli'),
                'harga_jual' => $this->input->post('harga_jual'),
                'stock_barang' => $this->input->post('stock_barang'),
                'supplier_barang' => $this->input->post('supplier_barang'),
                'tanggal_masuk' => $this->input->post('tanggal_masuk')
            ];

            $update = $this->Barang_model->update_barang($id, $data);
            if ($update) {
                $this->session->set_flashdata('success', 'Data barang berhasil diupdate.');
            } else {
                $this->session->set_flashdata('error', 'Data barang gagal diupdate.');
            }
            redirect('barang/data_barang');
        }
    }

    public function delete_barang($id) {
        $delete = $this->Barang_model->delete_barang($id);
        if ($delete) {
            $this->session->set_flashdata('success', 'Data barang berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Data barang gagal dihapus.');
        }
        redirect('barang/data_barang');
    }
}

