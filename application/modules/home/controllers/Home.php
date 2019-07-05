<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of home
 *
 * @author cembeliq
 */
class Home extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('template');
    }

    function index() {
        $data['module'] = 'home';
        $data['view_file'] = 'homepage_view';
        $this->template->master_view($data);
        // $data['the_view_content'] = $this->load->view('homepage_view');
        // $this->load->view('templates/master_view', $data);
        
        // $this->data['pagetitle'] = 'home'; //...you can at any time change the variables declared in the MY_Controller...

        // $this->render('homepage_view');
        //$this->render(NULL, 'json'); ....if we want to render a json string. Also, if a request is made using ajax, we can simply do $this->render()

        // $this->form_validation->set_rules('username', 'Username', 'required');
        // $this->form_validation->set_rules('password', 'Password', 'required');

        // if ($this->form_validation->run() === FALSE) {
        //     $this->load->view('signin', $data);
        // } else {
        //     redirect();
        // }
    }

}