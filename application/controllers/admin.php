<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url() . 'welcome?pesan=waktu_habis'); //untuk session 
        }
    }
    //halaman utama admin
    function index()
    {
        $data['rdp'] = $this->db->query("select * from rdp order by id_rdp desc limit 10")->result();
        $data['panel'] = $this->db->query("select * from panel order by id_panel desc limit 10")->result();
        $data['vps'] = $this->db->query("select * from vps order by id_vps desc limit 10")->result();
        $data['rdp_ready'] = $this->db->query("select count(status) from rdp where status = 'r%';")->result();
        $data['pemesanan1'] = $this->db->query("select * from pemesanan WHERE status = 'diterima'")->result();
        $data['pemesanan2'] = $this->db->query("select * from pemesanan WHERE status = 'ditolak'")->result();
        $this->load->view('admin/header');
        $this->load->view('admin/asidebar');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer');
    }
    //logout
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'welcome?pesan=logout');
    }
    // -------FITUR RDP--------- //
    function form_rdp()
    {
        $data['rdp'] = $this->db->query("select * from rdp order by id_rdp desc limit 10")->result();
        $data['panel'] = $this->db->query("select * from panel order by id_panel desc limit 10")->result();
        $data['vps'] = $this->db->query("select * from vps order by id_vps desc limit 10")->result();
        $this->load->view('admin/header');
        $this->load->view('admin/asidebar');
        $this->load->view('form/rdp', $data);
        $this->load->view('admin/footer');
    }
    //untuk tambah rdp
    function rdp_add_act()
    {
        $panel      = $this->input->post('panel');
        $ip         = $this->input->post('ip');
        $core       = $this->input->post('core');
        $ram        = $this->input->post('ram');
        $username   = $this->input->post('username');
        $pass       = $this->input->post('pass');
        $note       = $this->input->post('note');
        $date       = $this->input->post('date');
        $status     = $this->input->post('status');
        $data = array(
            'panel' => $panel,
            'ip' => $ip,
            'core' => $core,
            'ram' => $ram,
            'username' => $username,
            'pass' => $pass,
            'note' => $note,
            'tgl_buat' => $date,
            'status' => $status
        );
        $this->m_pentul->insert_data($data, 'rdp');
        redirect(base_url() . 'admin/form_rdp?pesan=success');
    }
    //menampilkan stok rdp
    function stok_rdp()
    {
        $data['rdp'] = $this->db->query("select * from rdp order by id_rdp desc limit 10")->result();
        $data['ready'] = $this->db->query("SELECT * from rdp Where status LIKE 'r%'")->result();
        $data['sold'] = $this->db->query("SELECT * from rdp Where status LIKE 's%'")->result();
        $this->load->view('admin/header');
        $this->load->view('admin/asidebar');
        $this->load->view('stok/rdp', $data);
        $this->load->view('admin/footer');
    }
    //menampilkan halaman edit
    function rdp_edit($id)
    {
        $where = array('id_rdp' => $id);
        $data['rdp'] = $this->m_pentul->edit_data($where, 'rdp')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/asidebar');
        $this->load->view('e_form/rdp', $data);
        $this->load->view('admin/footer');
    }
    //proses edit rdp
    function rdp_update()
    {
        $id         = $this->input->post('id');
        $panel      = $this->input->post('panel');
        $ip         = $this->input->post('ip');
        $core       = $this->input->post('core');
        $ram        = $this->input->post('ram');
        $username   = $this->input->post('username');
        $pass       = $this->input->post('pass');
        $note       = $this->input->post('note');
        $date       = $this->input->post('date');
        $status     = $this->input->post('status');
        $where = array('id_rdp' => $id);
        $data = array(
            'panel' => $panel,
            'ip' => $ip,
            'core' => $core,
            'ram' => $ram,
            'username' => $username,
            'pass' => $pass,
            'note' => $note,
            'tgl_buat' => $date,
            'status' => $status
        );
        $this->m_pentul->update_data($where, $data, 'rdp');
        redirect(base_url() . 'admin/stok_rdp');
    }
    //proses edit untuk status rdp yang dijual
    function rdp_terjual($id)
    {
        $where = array(
            'id_rdp' => $id
        );
        $status = 'sold';
        $data = array(
            'status' => $status
        );
        $this->m_pentul->update_data($where, $data, 'rdp');
        redirect(base_url() . 'admin/stok_rdp');
    }
    //proses hapus rdp
    function rdp_hapus($id)
    {
        $where = array(
            'id_rdp' => $id
        );
        $this->m_pentul->delete_data($where, 'rdp');
        redirect(base_url() . 'admin/stok_rdp');
    }
    //download laporan berupa excel
    function rdp_excel()
    {
        $dari           = $this->input->post('dari');
        $sampai         = $this->input->post('sampai');
        $data['rdp'] = $this->db->query("SELECT * FROM rdp WHERE (tgl_buat BETWEEN '$dari' AND '$sampai')")->result();
        $this->load->view('laporan/rdp', $data);
    }
    function form_vps()
    {
        $data['rdp'] = $this->db->query("select * from rdp order by id_rdp desc limit 10")->result();
        $data['panel'] = $this->db->query("select * from panel order by id_panel desc limit 10")->result();
        $data['vps'] = $this->db->query("select * from vps order by id_vps desc limit 10")->result();
        $this->load->view('admin/header');
        $this->load->view('admin/asidebar');
        $this->load->view('form/vps', $data);
        $this->load->view('admin/footer');
    }
    function vps_add_act()
    {
        $panel      = $this->input->post('panel');
        $ip         = $this->input->post('ip');
        $core       = $this->input->post('core');
        $ram        = $this->input->post('ram');
        $username   = $this->input->post('username');
        $pass       = $this->input->post('pass');
        $note       = $this->input->post('note');
        $date       = $this->input->post('date');
        $status     = $this->input->post('status');
        $data = array(
            'panel' => $panel,
            'ip' => $ip,
            'core' => $core,
            'ram' => $ram,
            'username' => $username,
            'pass' => $pass,
            'note' => $note,
            'tgl_buat' => $date,
            'status' => $status
        );
        $this->m_pentul->insert_data($data, 'vps');
        redirect(base_url() . 'admin/form_vps?pesan=success');
    }
    function form_panel()
    {
        $data['rdp'] = $this->db->query("select * from rdp order by id_rdp desc limit 10")->result();
        $data['panel'] = $this->db->query("select * from panel order by id_panel desc limit 10")->result();
        $data['vps'] = $this->db->query("select * from vps order by id_vps desc limit 10")->result();
        $this->load->view('admin/header');
        $this->load->view('admin/asidebar');
        $this->load->view('form/panel', $data);
        $this->load->view('admin/footer');
    }
    function panel_add_act()
    {
        $provider   = $this->input->post('provider');
        $email      = $this->input->post('email');
        $pass       = $this->input->post('pass');
        $note       = $this->input->post('note');
        $date       = $this->input->post('date');
        $status     = $this->input->post('status');
        $data = array(
            'provider' => $provider,
            'email' => $email,
            'pass' => $pass,
            'note' => $note,
            'tgl_buat' => $date,
            'status' => $status
        );
        $this->m_pentul->insert_data($data, 'panel');
        redirect(base_url() . 'admin/form_panel?pesan=success');
    }
    function stok_vps()
    {
        $data['ready'] = $this->db->query("SELECT * from vps Where status LIKE 'r%'")->result();
        $data['sold'] = $this->db->query("SELECT * from vps Where status LIKE 's%'")->result();
        $data['vps'] = $this->db->query("select * from vps order by id_vps desc limit 10")->result();
        $this->load->view('admin/header');
        $this->load->view('admin/asidebar');
        $this->load->view('stok/vps', $data);
        $this->load->view('admin/footer');
    }
    function vps_terjual($id)
    {
        $where = array(
            'id_vps' => $id
        );
        $status = 'sold';
        $data = array(
            'status' => $status
        );
        $this->m_pentul->update_data($where, $data, 'vps');
        redirect(base_url() . 'admin/stok_vps');
    }
    function vps_edit($id)
    {
        $where = array('id_vps' => $id);
        $data['vps'] = $this->m_pentul->edit_data($where, 'vps')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/asidebar');
        $this->load->view('e_form/vps', $data);
        $this->load->view('admin/footer');
    }
    function vps_update()
    {
        $id         = $this->input->post('id');
        $panel      = $this->input->post('panel');
        $ip         = $this->input->post('ip');
        $core       = $this->input->post('core');
        $ram        = $this->input->post('ram');
        $username   = $this->input->post('username');
        $pass       = $this->input->post('pass');
        $note       = $this->input->post('note');
        $date       = $this->input->post('date');
        $status     = $this->input->post('status');
        $where = array(
            'id_vps' => $id
        );
        $data = array(
            'panel' => $panel,
            'ip' => $ip,
            'core' => $core,
            'ram' => $ram,
            'username' => $username,
            'pass' => $pass,
            'note' => $note,
            'tgl_buat' => $date,
            'status' => $status
        );
        $this->m_pentul->update_data($where, $data, 'vps');
        redirect(base_url() . 'admin/stok_vps');
    }
    function vps_hapus($id)
    {
        $where = array(
            'id_vps' => $id
        );
        $this->m_pentul->delete_data($where, 'vps');
        redirect(base_url() . 'admin/stok_vps');
    }
    function stok_panel()
    {
        $data['ready'] = $this->db->query("SELECT * from panel Where status LIKE 'r%'")->result();
        $data['sold'] = $this->db->query("SELECT * from panel Where status LIKE 's%'")->result();
        $data['panel'] = $this->db->query("select * from panel order by id_panel desc limit 10")->result();
        $this->load->view('admin/header');
        $this->load->view('admin/asidebar');
        $this->load->view('stok/panel', $data);
        $this->load->view('admin/footer');
    }
    function panel_edit($id)
    {
        $where = array('id_panel' => $id);
        $data['panel'] = $this->m_pentul->edit_data($where, 'panel')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/asidebar');
        $this->load->view('e_form/panel', $data);
        $this->load->view('admin/footer');
    }
    function panel_update()
    {
        $id         = $this->input->post('id');
        $provider   = $this->input->post('provider');
        $email      = $this->input->post('email');
        $pass       = $this->input->post('pass');
        $note       = $this->input->post('note');
        $date       = $this->input->post('date');
        $status     = $this->input->post('status');
        $where = array('id_panel' => $id);
        $data = array(
            'provider' => $provider,
            'email' => $email,
            'pass' => $pass,
            'note' => $note,
            'tgl_buat' => $date,
            'status' => $status
        );
        $this->m_pentul->update_data($where, $data, 'panel');
        redirect(base_url() . 'admin/stok_panel');
    }
    function panel_terjual($id)
    {
        $where = array(
            'id_panel' => $id
        );
        $status = 'sold';
        $data = array(
            'status' => $status
        );
        $this->m_pentul->update_data($where, $data, 'panel');
        redirect(base_url() . 'admin/stok_panel');
    }
    function panel_hapus($id)
    {
        $where = array(
            'id_panel' => $id
        );
        $this->m_pentul->delete_data($where, 'panel');
        redirect(base_url() . 'admin/stok_panel');
    }
    function vps_excel()
    {
        $dari           = $this->input->post('dari');
        $sampai         = $this->input->post('sampai');
        $data['vps'] = $this->db->query("SELECT * FROM vps WHERE (tgl_buat BETWEEN '$dari' AND '$sampai')")->result();
        $this->load->view('laporan/vps', $data);
    }
    function panel_excel()
    {
        $dari           = $this->input->post('dari');
        $sampai         = $this->input->post('sampai');
        $data['panel'] = $this->db->query("SELECT * FROM panel WHERE (tgl_buat BETWEEN '$dari' AND '$sampai')")->result();
        $this->load->view('laporan/panel', $data);
    }
}
