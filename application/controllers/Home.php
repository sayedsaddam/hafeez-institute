<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * Filename: Home.php
 * File path: controllers / home.php
 * Author: Saddam
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
    // Registration
    public function registration(){
        $data['title'] = 'Hafeez Institute of Medical Sciences | Registration';
        $data['body'] = 'registration';
        $this->load->view('components/template', $data);
    }
    // Affiliation
    public function affiliation(){
        $data['title'] = 'Hafeez Institute of Medical Sciences | Affiliation';
        $data['body'] = 'affiliation';
        $this->load->view('components/template', $data);
    }
    // Contact.
    public function contact(){
        $data['title'] = 'Hafeez Institute of Medical Sciences | Contact';
        $data['body'] = 'contact';
        $this->load->view('components/template', $data);
    }
    // Programs
    public function bs_programs(){
        $data['title'] = 'Hafeez Institute of Medical Sciences | BS Programs';
        $data['body'] = 'programs/bs-programs';
        $this->load->view('components/template', $data);
    }
    // Doctor of Physical Therapy - DPT
    public function dpt(){
        $data['title'] = 'Hafeez Institute of Medical Sciences | Doctor of Physical Therapy';
        $data['body'] = 'programs/dpt';
        $this->load->view('components/template', $data);
    }
    // FSc Medical Technologies
    public function fsc_medical_technologies(){
        $data['title'] = 'Hafeez Institute of Medical Sciences | FSc Medical Technologies';
        $data['body'] = 'programs/fsc-medical-tech';
        $this->load->view('components/template', $data);
    }
    // Diploma Medical Technologies
    public function diploma_medical_technologies(){
        $data['title'] = 'Hafeez Institute of Medical Sciences | Diploma Medical Technologies';
        $data['body'] = 'programs/diploma-medical-tech';
        $this->load->view('components/template', $data);
    }
    // Short course
    public function short_courses(){
        $data['title'] = 'Hafeez Institute of Medical Sciences | Short Courses';
        $data['body'] = 'programs/short-courses';
        $this->load->view('components/template', $data);
    }
    // 404 override page.
    public function page_not_found(){
        $this->load->view('not-found');
    }
}
