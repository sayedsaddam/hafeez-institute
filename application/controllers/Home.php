<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * undocumented class
 */
class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Hafeez Institute of Medical Sciences| Home';
        $data['body'] = 'home';
        $this->load->view('components/template', $data);
    }
}
