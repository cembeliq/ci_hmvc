<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of district
 *
 * @author cembeliq
 */
class District extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('district/M_district', 'm_district');
        $this->load->model('province/M_province', 'm_province');
        $this->load->module('template');
        $this->load->library('form_validation');

    }

    function index() {
        $data['pagetitle'] = 'district'; //...you can at any time change the variables declared in the MY_Controller...
        $data['module'] = 'district';
        $data['view_file'] = 'district_view';
        $this->template->master_view($data);
        //$this->render(NULL, 'json'); ....if we want to render a json string. Also, if a request is made using ajax, we can simply do $this->render()

        // $this->form_validation->set_rules('username', 'Username', 'required');
        // $this->form_validation->set_rules('password', 'Password', 'required');

        // if ($this->form_validation->run() === FALSE) {
        //     $this->load->view('signin', $data);
        // } else {
        //     redirect();
        // }
    }

    public function data(){
        // return $this->m_province->getAll();
        // die();
        $search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
        $limit = $_POST['length']; // Ambil data limit per page
        $start = $_POST['start']; // Ambil data start
        $order_index = $_POST['order'][0]['column']; // Untuk mengambil index yg menjadi acuan untuk sorting
        $order_field = $_POST['columns'][$order_index]['data']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
        $order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"
        $sql_total = $this->m_district->count_all(); // Panggil fungsi count_all pada SiswaModel
        $sql_data = $this->m_district->filter($search, $limit, $start, $order_field, $order_ascdesc); // Panggil fungsi filter pada SiswaModel
        $sql_filter = $this->m_district->count_filter($search); // Panggil fungsi count_filter pada SiswaModel
        $callback = array(
            'draw'=>$_POST['draw'], // Ini dari datatablenya
            'recordsTotal'=>$sql_total,
            'recordsFiltered'=>$sql_filter,
            'data'=>$sql_data
        );
        header('Content-Type: application/json');
        echo json_encode($callback); // Convert array $callback ke json
    }

    function add(){
        $data['pagetitle'] = 'district'; //...you can at any time change the variables declared in the MY_Controller...
        $data['module'] = 'district';
        $data['view_file'] = 'districtadd_view';
        $data['provinces'] = $this->m_province->getAll();
        $this->template->master_view($data);
    }

    function save(){
        $item['name'] = $this->input->post('name');
        $item['province_id'] = $this->input->post('province');
        $item['population'] = $this->input->post('population');
        // var_dump($item); die();
        $validation = $this->form_validation;
        $validation->set_rules($this->m_district->rules());

        if ($validation->run()) {
            $this->m_district->save($item);

        }
        redirect('district');
        
    }

}