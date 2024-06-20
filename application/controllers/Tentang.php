<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
    public function index() {
        $data['title'] = 'Tentang Kami';
        $data['active_menu'] = 'tentang';
        $data['content'] = $this->load->view('tentang/tentang_view', NULL, TRUE);
        $this->load->view('template/template', $data);
    }
}
