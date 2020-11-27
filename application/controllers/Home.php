<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * undocumented class
 */
class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    // Home page will be loaded when this class is called.
    public function index(){
        $data['title'] = 'Hafeez Institute of Medical Sciences | Home';
        $data['body'] = 'home';
        $this->load->view('components/template', $data);
    }
    // About
    public function about(){
        $data['title'] = 'Hafeez Institute of Medical Sciences | About';
        $data['body'] = 'about';
        $this->load->view('components/template', $data);
    }
    // How to apply
    public function how_to_apply(){
        $data['title'] = 'Hafeez Institute of Medical Sciences | How to Apply';
        $data['body'] = 'howto';
        $this->load->view('components/template', $data);
    }
    // Fee structure
    public function fee_structure(){
        $data['title'] = 'Hafeez Institute of Medical Sciences | Fee Structure';
        $data['body'] = 'fee-structure';
        $this->load->view('components/template', $data);
    }
    // Refund policy
    public function refund_policy(){
        $data['title'] = 'Hafeez Institute of Medical Sciences | Refund Policy';
        $data['body'] = 'refund-policy';
        $this->load->view('components/template', $data);
    }
    // Hospital Training
    public function hospital_training(){
        $data['title'] = 'Hafeez Institute of Medical Sciences | Hospital Training';
        $data['body'] = 'hospital-training';
        $this->load->view('components/template', $data);
    }
}
