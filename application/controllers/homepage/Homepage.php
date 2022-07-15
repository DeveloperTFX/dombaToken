<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

    public function index() {
		$content 	= '_homepageLayouts/homepage/index';
		$data 		= array('title'      	=> 'Domba Token ',
							'content'    	=> $content,);

        $this->load->view('_homepageLayouts/wrapper', $data);
    }
}
