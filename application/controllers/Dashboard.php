<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('username'))) {
            redirect('auth');
        }
        $this->load->model('m_statistik');
    }
    public function index()
    {

        $data['statistic'] = $this->m_statistik->get_resume_statistic();
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Dashboard Admin';
        $this->load->view('temp_a/adm_header', $data);
        $this->load->view('temp_a/adm_sidebar');
        $this->load->view('temp_a/adm_topbar', $data);
        $this->load->view('dashboard/index');
        $this->load->view('temp_a/adm_footer');
    }
}
