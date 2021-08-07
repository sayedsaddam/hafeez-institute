<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * undocumented class
 */
class Poll extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    // index
    public function index(){
        $data['title'] = 'Poll for Trip Location | AH Group';
        $data['body'] = 'trip-poll';
        $data['option1'] = $this->db->from('votes')->where('poll_item', 'Mushkpuri')->count_all_results();
        $data['option2'] = $this->db->from('votes')->where('poll_item', 'Nathiagali')->count_all_results();
        $data['option3'] = $this->db->from('votes')->where('poll_item', 'Khanpur Dam')->count_all_results();
        $this->load->view('components/template', $data);
    }
    // submit the form with remote IP address.
    public function submit_poll(){
        $data = array(
            'poll_item' => $this->input->post('poll_item'),
            'remote_ip' => $_SERVER['REMOTE_ADDR']
        );
        $voted_already = $this->db->select('remote_ip')->from('votes')->where('remote_ip', strtolower($data['remote_ip']))->get()->row();
        if($voted_already != NULL){
            $this->session->set_flashdata('failed', '<strong>Failed! </strong>Your vote has already been submitted.');
            redirect($_SERVER['HTTP_REFERER']);
            return false;
        }else{
            $this->db->insert('votes', $data);
            $this->session->set_flashdata('success', '<strong>Success! </strong>You have submitted your vote successfully.');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}
