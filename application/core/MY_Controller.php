<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* load the MX_Router class */
require APPPATH . "third_party/MX/Controller.php";

/**
 * Description of my_controller
 *
 * @author Administrator
 */
class MY_Controller extends MX_Controller {

    function __construct() {
        parent::__construct();
        if (version_compare(CI_VERSION, '2.1.0', '<')) {
            $this->load->library('security');
        }
    }

 //    protected function render($the_view = NULL, $template = 'master')
	// {
	//     if($template == 'json' || $this->input->is_ajax_request())
	//     {
	//     	header('Content-Type: application/json');
	//       	echo json_encode($this->data);
	//     }
	//     elseif(is_null($template))
	//     {
	//       	$this->load->view($the_view,$this->data);
	//     }
	//     else
	//     {
	//       	$this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view,$this->data, TRUE);;
	//       	$this->load->view('templates/'.$template.'_view', $this->data);
	//     }
	// }

}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */